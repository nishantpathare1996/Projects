package com.example.newsgateway;

import android.net.Uri;
import android.os.AsyncTask;
import android.util.Log;

import org.json.JSONArray;
import org.json.JSONObject;
import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;
/*nishant*/
public class ArticleDownloader extends AsyncTask<String,Integer,String>
{
    private static final String TAG = "ArticleDownloader";
    private String sourceId;
    private NewsServiceActivity newsService;
    private String API_KEY ="896e02a7683340d0946b054d3252b5c2";
    private String QUERY_1 = "https://newsapi.org/v2/everything?sources=";
    private String QUERY_2 = "&language=en&pageSize=100&apiKey="+API_KEY;
    private Uri.Builder buildURL = null;
    private StringBuilder stringBuilder;
    private boolean noDataFlag=false;
    boolean flag =true;
    private ArrayList<Articles> articleList = new ArrayList<Articles>();

    public ArticleDownloader(NewsServiceActivity newsService, String sourceId)
    {
        this.sourceId = sourceId;
        this.newsService= newsService;
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
    protected String doInBackground(String... strings)
    {
        String finalQuery ="";
        finalQuery = QUERY_1+sourceId+QUERY_2;
        buildURL = Uri.parse(finalQuery).buildUpon();
        APIConnection();
        if(!flag)
        {
            parseJsonFile(stringBuilder.toString());
        }
        return "";
    }

    @Override
    protected void onPostExecute(String s)
    {
        Log.d(TAG, "onPostExecute: bp:"+s);
        super.onPostExecute(s);
        newsService.setArticles(articleList);

        for(Articles a:articleList){
            Log.d(TAG, "onPostExecute: jp:"+a.getarticleAuthor());
        }
    }

    private void parseJsonFile(String s)
    {
        try
        {
            if(!noDataFlag)
            {
                int i;
                JSONObject jsonObject = new JSONObject(s);
                JSONArray articles = jsonObject.getJSONArray("articles");
                for(i=0;i<articles.length();i++)
                {
                    JSONObject art = (JSONObject) articles.get(i);
                    Articles articleObject = new Articles();
                    articleObject.setarticleAuthor(art.getString("author"));
                    articleObject.setarticleDesc(art.getString("description"));
                    articleObject.setarticlePublish(art.getString("publishedAt"));
                    articleObject.setarticleTitle(art.getString("title"));
                    articleObject.setarticleImage(art.getString("urlToImage"));
                    articleObject.setarticleUrl(art.getString("url"));
                    articleList.add(articleObject);

                }
            }
        }
        catch (Exception e)
        {
            e.printStackTrace();
        }
    }
}
