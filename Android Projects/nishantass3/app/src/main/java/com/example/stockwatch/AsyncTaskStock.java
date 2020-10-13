package com.example.stockwatch;

import android.net.Uri;
import android.os.AsyncTask;
import android.util.Log;
import org.json.JSONException;
import org.json.JSONObject;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;

public class AsyncTaskStock extends AsyncTask<String,Void,String>
{
    private static final String TAG = "Async2";
    private MainActivity mainActivity;
    private static final String DATAURL_1 = "https://cloud.iexapis.com/stable/stock/";
    private static final String DATAURL_2 = "/quote?token=pk_c5f52e74b96f4ff383dc7a1482add071";

    public AsyncTaskStock(MainActivity mainActivity) {
        this.mainActivity = mainActivity;
    }

    @Override
    protected String doInBackground(String... strings)
    {
        String DATA_URL = DATAURL_1 + strings[0] + DATAURL_2;
        String s = connectToUrl(DATA_URL);
        Log.d(TAG, "back: " + s);
        return s;
    }

    public String connectToUrl(String url1)
    {
        Uri dataUri = Uri.parse(url1);
        String url_2 = dataUri.toString();
        Log.d(TAG, "doInBackground: " + url_2);
        StringBuilder sb = new StringBuilder();
        try
        {
            URL url3 = new URL(url_2);
            HttpURLConnection httpConnection = (HttpURLConnection) url3.openConnection();
            httpConnection.setRequestMethod("GET");
            InputStream iStream = httpConnection.getInputStream();
            BufferedReader bReader = new BufferedReader(new InputStreamReader(iStream));
            String line;
            while((line = bReader.readLine())!= null)
            {
                sb.append(line).append('\n');
            }
        } catch (MalformedURLException e)
        {
            e.printStackTrace();
        }
        catch (IOException e)
        {
            e.printStackTrace();
        }
        return sb.toString();
    }

    @Override
    protected void onPostExecute(String s)
    {
        super.onPostExecute(s);
        Stock stock = jsonParse(s);
        mainActivity.updateStock(stock);
    }

    private Stock jsonParse(String s)
    {
        Stock nStock = new Stock();
        try
        {
            JSONObject jsonObject = new JSONObject(s);
            String symbol = jsonObject.getString("symbol");
            String name = jsonObject.getString("companyName");
            double price = jsonObject.getDouble("latestPrice");
            double priceChange = jsonObject.getDouble("change");
            double percentChange = jsonObject.getDouble("changePercent");

            nStock.setStockName(name);
            nStock.setStockSymbol(symbol);
            nStock.setStockPrice(price);
            nStock.setPriceChange(priceChange);
            nStock.setPercentChange(percentChange);
            return nStock;
        }
        catch (JSONException e)
        {
            e.printStackTrace();
        }
        return null;
    }
}
