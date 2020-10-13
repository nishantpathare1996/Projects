package com.example.newsgateway;

import android.net.Uri;
import android.os.AsyncTask;
import org.json.JSONArray;
import org.json.JSONObject;
import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;

public class SourceDownloader extends AsyncTask<String, Integer, String>
{
    private static final String TAG = "SourceDownloader";
    private StringBuilder stringBuilder;
    private boolean noDataFlag=false;
    boolean flag =true;
    MainActivity mainActivity;
    private String category;
    private Uri.Builder buildURL = null;
    private ArrayList<Sources> sourceList = new ArrayList <Sources>();
    private ArrayList<String> categoryList = new ArrayList <String>();
    private String API_KEY ="86b228f18f7746148545975f39ca7fd6";
    private String NewsAPI;

    public SourceDownloader(MainActivity mainActivity, String category)
    {
        this.mainActivity = mainActivity;
        if(category.equalsIgnoreCase("all") || category.equalsIgnoreCase("")) {
            this.category = "";
            NewsAPI = "https://newsapi.org/v2/sources?language=en&country=us&apiKey=" + API_KEY;
        }
        else
        {
            String api1= "https://newsapi.org/v2/sources?language=en&country=us&category=";
            String api2 ="&apiKey="+API_KEY;
            NewsAPI = api1+category+api2;
            this.category = category;
        }
    }

    @Override
    protected String doInBackground(String... strings)
    {
        buildURL = Uri.parse(NewsAPI).buildUpon();
        APIConnection();
        if(!flag)
        {
            parseJsonFile(stringBuilder.toString());
        }
        return null;
    }

    public void APIConnection()
    {
        String url1 = buildURL.build().toString();
        stringBuilder = new StringBuilder();
        try
        {
            URL url = new URL(url1);
            HttpURLConnection httpConnection = (HttpURLConnection) url.openConnection();
            if(httpConnection.getResponseCode() == HttpURLConnection.HTTP_NOT_FOUND)
            {
                noDataFlag=true;
            }
            else
            {
                httpConnection.setRequestMethod("GET");
                InputStream inStream = httpConnection.getInputStream();
                BufferedReader brReader = new BufferedReader((new InputStreamReader(inStream)));
                String line;
                while ((line = brReader.readLine()) != null)
                {
                    stringBuilder.append(line).append('\n');
                }
                flag=false;
            }
        }
        catch(FileNotFoundException fe) { }
        catch (Exception e) { }
    }

    @Override
    protected void onPostExecute(String s)
    {
        super.onPostExecute(s);
        int j;
        for(j=0;j<sourceList.size();j++)
        {
            String newSourceId = sourceList.get(j).getsourceCategory();
            if(!categoryList.contains(newSourceId))
                categoryList.add(newSourceId);
        }
        mainActivity.setSources(sourceList,categoryList);
    }

    private void parseJsonFile(String s)
    {
        try
        {
            if(!noDataFlag)
            {
                int i;
                JSONObject jsonObject = new JSONObject(s);
                JSONArray jsonArr = jsonObject.getJSONArray("sources");
                for(i=0;i<jsonArr.length();i++)
                {
                    JSONObject src = (JSONObject) jsonArr.get(i);
                    Sources srcObj = new Sources();
                    srcObj.setsourceId(src.getString("id"));
                    srcObj.setsourceCategory(src.getString("category"));
                    srcObj.setsourceName(src.getString("name"));
                    srcObj.setsourceUrl(src.getString("url"));
                    sourceList.add(srcObj);
                }
            }
        }
        catch (Exception e)
        {
            e.printStackTrace();
        }
    }
}
