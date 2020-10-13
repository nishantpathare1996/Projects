package com.example.newsgateway;

import android.app.Service;
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.content.IntentFilter;
import android.os.IBinder;
import java.util.ArrayList;

public class NewsServiceActivity extends Service
{
    private static final String TAG = "NewsService";
    private boolean flag2 = true;
    private ServiceReceiver serviceReceiver;
    private ArrayList<Articles> aList = new ArrayList <Articles>();
    public NewsServiceActivity() { }

    @Override
    public IBinder onBind(Intent intent)
    {
        return null;
    }

    @Override
    public int onStartCommand(Intent intent, int flags, int startId)
    {
        serviceReceiver = new ServiceReceiver();
        IntentFilter intentFilter = new IntentFilter(MainActivity.SERVICE_MESSAGE);
        registerReceiver(serviceReceiver, intentFilter);
        new Thread(new Runnable() {
            @Override
            public void run() {

                while (flag2)
                {
                    while(aList.isEmpty())
                    {
                        try
                        {
                            Thread.sleep(300);
                        } catch (InterruptedException e)
                        {
                            e.printStackTrace();
                        }
                    }
                    Intent intent = new Intent();
                    intent.setAction(MainActivity.STORY);
                    intent.putExtra(MainActivity.LIST_ARTICLES, aList);
                    sendBroadcast(intent);
                    aList.clear();
                }
            }
        }).start();

        return Service.START_STICKY;
    }

    public void setArticles(ArrayList<Articles> list)
    {
        aList.clear();
        aList.addAll(list);
    }

    @Override
    public void onDestroy()
    {
        flag2 = false;
    }

    class ServiceReceiver extends BroadcastReceiver
    {
        @Override
        public void onReceive(Context context, Intent intent)
        {
            switch (intent.getAction())
            {
                case MainActivity.SERVICE_MESSAGE:
                    String sourceId ="";
                    String newSourceId="";
                    if (intent.hasExtra(MainActivity.SRC_ID))
                    {
                        sourceId = intent.getStringExtra(MainActivity.SRC_ID);
                        newSourceId=sourceId.replaceAll(" ","-");
                    }
                    new ArticleDownloader(NewsServiceActivity.this, newSourceId).execute();
                    break;
            }
        }
    }
}
