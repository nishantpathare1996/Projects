package com.example.newsgateway;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.ActionBarDrawerToggle;
import androidx.appcompat.app.AppCompatActivity;
import androidx.drawerlayout.widget.DrawerLayout;
import androidx.fragment.app.Fragment;
import androidx.fragment.app.FragmentManager;
import androidx.fragment.app.FragmentPagerAdapter;
import androidx.viewpager.widget.ViewPager;
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.content.IntentFilter;
import android.content.res.Configuration;
import android.os.Bundle;
import android.text.SpannableString;
import android.text.style.ForegroundColorSpan;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import java.util.ArrayList;
import java.util.Collections;
import java.util.HashMap;
import java.util.List;

public class MainActivity extends AppCompatActivity
{
    private static final String TAG = "MainActivity";
    static final String SERVICE_MESSAGE = "SERVICE_MESSAGE";
    static final String LIST_ARTICLES = "LIST_ARTICLES";
    static final String STORY = "STORY";
    static final String SRC_ID = "SRC_ID";
    private DrawerLayout drawerLayout;
    private ListView drawerList;
    private ActionBarDrawerToggle drawerToggle;
    private static boolean serviceRunning = false;
    private ArrayList<SpannableString> sList = new ArrayList <SpannableString>();
    private ArrayList<String> cList = new ArrayList <String>();
    private ArrayList<Sources> sArrayList = new ArrayList <Sources>();
    private ArrayList<Articles> articleList = new ArrayList <Articles>();
    private HashMap<String, Sources> srcMap = new HashMap<>();
    HashMap<String, Integer> hMap = new HashMap<>();
    private Menu menuItem;
    private NewsReceiver newsReceiver;
    private String currentNewsSource;
    private ArrayAdapter arrAdapter;
    private MyPageAdapter pageAdapter;
    public List<Fragment> fragment;
    private ViewPager viewPager;
    private boolean currentFlag;
    private int srcPointer;
    LayoutActivity layoutActivity;
    private int[] columns;

    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        layoutActivity = new LayoutActivity();
        drawerLayout = findViewById(R.id.drawer);
        drawerList = findViewById(R.id.listView);

        if(!serviceRunning &&  savedInstanceState == null)
        {
            Intent intent = new Intent(MainActivity.this, NewsServiceActivity.class);
            startService(intent);
            serviceRunning = true;
        }

        columns = getResources().getIntArray(R.array.shades);
        newsReceiver = new NewsReceiver();
        IntentFilter filter = new IntentFilter(MainActivity.STORY);
        registerReceiver(newsReceiver, filter);

        drawerList.setOnItemClickListener(
                new ListView.OnItemClickListener() {
                    @Override
                    public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                        viewPager.setBackgroundResource(0);
                        srcPointer = position;
                        selectItem(position);
                    }
                }
        );

        drawerToggle = new ActionBarDrawerToggle(
                this,
                drawerLayout,
                R.string.open,
                R.string.close
        );

        arrAdapter = new ArrayAdapter<>(this, R.layout.activity_list, sList);
        drawerList.setAdapter(arrAdapter);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        getSupportActionBar().setHomeButtonEnabled(true);
        fragment = new ArrayList<>();
        pageAdapter = new MyPageAdapter(getSupportFragmentManager());
        viewPager = findViewById(R.id.viewpager);
        viewPager.setAdapter(pageAdapter);
        if (srcMap.isEmpty() && savedInstanceState == null )
        {
            new SourceDownloader(this, "").execute();
        }
    }

    private void selectItem(int position)
    {
        currentNewsSource = sList.get(position).toString();
        Intent intent = new Intent(MainActivity.SERVICE_MESSAGE);
        intent.putExtra(SRC_ID, currentNewsSource);
        sendBroadcast(intent);
        drawerLayout.closeDrawer(drawerList);
    }

    @Override
    public void onConfigurationChanged(Configuration newConfig)
    {
        super.onConfigurationChanged(newConfig);
        drawerToggle.onConfigurationChanged(newConfig);
    }

    public boolean onOptionsItemSelected(MenuItem menuItem)
    {
        if (drawerToggle.onOptionsItemSelected(menuItem))
        {
            return true;
        }

        new SourceDownloader(this, menuItem.getTitle().toString()).execute();
        drawerLayout.openDrawer(drawerList);
        return super.onOptionsItemSelected(menuItem);
    }

    @Override
    protected void onDestroy()
    {
        unregisterReceiver(newsReceiver);
        Intent intent = new Intent(MainActivity.this, NewsReceiver.class);
        stopService(intent);
        super.onDestroy();
    }

    @Override
    protected void onSaveInstanceState(Bundle outState)
    {
        super.onSaveInstanceState(outState);
        layoutActivity.setcategoryList(cList);
        layoutActivity.setSourceList(sArrayList);
        layoutActivity.setCurrentArticle(viewPager.getCurrentItem());
        layoutActivity.setCurrentSource(srcPointer);
        layoutActivity.setArticleList(articleList);
        layoutActivity.setcolorMap(hMap);
        layoutActivity.setsrcName(currentNewsSource);
        outState.putSerializable("restored", layoutActivity);
    }

    @Override
    protected void onPostCreate(@Nullable Bundle savedInstanceState)
    {
        super.onPostCreate(savedInstanceState);
        drawerToggle.syncState();
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu)
    {
        getMenuInflater().inflate(R.menu.activity_menu, menu);
        menuItem=menu;
        if(currentFlag)
        {
            menuItem.add("All");
            for (String s : cList)
                menuItem.add(s);
        }
        setColor();
        return true;
    }

    private void doFragments(ArrayList<Articles> articles)
    {
        setTitle(currentNewsSource);
        int i;
        for (i = 0; i < pageAdapter.getCount(); i++)
            pageAdapter.notifyChangeInPosition(i);
        fragment.clear();
        for (i = 0; i < articles.size(); i++)
        {
            fragment.add(FragmentActivity.newInstance(articles.get(i), i, articles.size()));
        }
        pageAdapter.notifyDataSetChanged();
        viewPager.setCurrentItem(0);
        articleList = articles;
    }

    @Override
    protected void onRestoreInstanceState(Bundle savedInstanceState)
    {
        super.onRestoreInstanceState(savedInstanceState);
        LayoutActivity layoutAct = (LayoutActivity)savedInstanceState.getSerializable("restored");
        int i;
        currentFlag = true;
        articleList = layoutAct.getArticleList();
        cList = layoutAct.getcategoryList();
        sArrayList = layoutAct.getSourceList();
        hMap=layoutAct.getcolorMap();
        currentNewsSource = layoutAct.getsrcName();

        for(i=0;i<sArrayList.size();i++)
        {
            String key = sArrayList.get(i).getsourceCategory();
            Integer color = hMap.get(key);
            SpannableString spannableString = new SpannableString(sArrayList.get(i).getsourceName());
            spannableString.setSpan(new ForegroundColorSpan(color), 0, spannableString.length(), 0);
            sList.add(spannableString);
            srcMap.put(sArrayList.get(i).getsourceName(), (Sources) sArrayList.get(i));
        }

        drawerList.setOnItemClickListener(
                new ListView.OnItemClickListener() {
                    @Override
                    public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                        viewPager.setBackgroundResource(0);
                        srcPointer = position;
                        selectItem(position);
                    }
                }
        );
        srcPointer = layoutAct.getCurrentSource();
        arrAdapter = new ArrayAdapter<>(this, R.layout.activity_list, sList);
        drawerList.setAdapter(arrAdapter);
        if(articleList.size()!=0)
        {
            viewPager.setBackgroundResource(0);
            setTitle(currentNewsSource);
            for (i = 0; i < pageAdapter.getCount(); i++)
                pageAdapter.notifyChangeInPosition(i);
            fragment.clear();
            for (i = 0; i < 100; i++)
            {
                Articles a = articleList.get(i);
                fragment.add(FragmentActivity.newInstance(articleList.get(i), i, 100));
            }
            pageAdapter.notifyDataSetChanged();
            viewPager.setCurrentItem(layoutAct.getCurrentArticle());
        }
    }

    class NewsReceiver extends BroadcastReceiver
    {
        @Override
        public void onReceive(Context context, Intent intent)
        {
            switch (intent.getAction())
            {
                case STORY:
                    ArrayList<Articles> artList;
                    if (intent.hasExtra(LIST_ARTICLES))
                    {
                        artList = (ArrayList <Articles>) intent.getSerializableExtra(LIST_ARTICLES);
                        doFragments(artList);
                    }
                    break;
            }
        }
    }

    public void setSources(ArrayList<Sources> sourceList, ArrayList<String> categoryList)
    {
        srcMap.clear();
        sList.clear();
        sArrayList.clear();
        sArrayList.addAll(sourceList);
        int i;
        if(!menuItem.hasVisibleItems())
        {
            cList.clear();
            cList =categoryList;
            menuItem.add("All");
            Collections.sort(categoryList);
            for (String s : categoryList)
                menuItem.add(s);
            setColor();
        }
        sList.clear();
        for(i=0;i<sourceList.size();i++)
        {
            String key = sourceList.get(i).getsourceCategory();
            Integer color = hMap.get(key);
            SpannableString spannableString = new SpannableString(sourceList.get(i).getsourceName());
            spannableString.setSpan(new ForegroundColorSpan(color), 0, spannableString.length(), 0);
            sList.add(spannableString);
            srcMap.put(sourceList.get(i).getsourceName(), (Sources) sourceList.get(i));
        }
        arrAdapter.notifyDataSetChanged();
    }

    public void setColor()
    {
        int i;
        hMap.clear();
        for(i = 0; i < menuItem.size(); i++)
        {
            MenuItem mItem = menuItem.getItem(i);
            SpannableString spannableString = new SpannableString(menuItem.getItem(i).getTitle().toString());
            spannableString.setSpan(new ForegroundColorSpan(columns[i]), 0,     spannableString.length(), 0);
            mItem.setTitle(spannableString);
            hMap.put(menuItem.getItem(i).getTitle().toString(),columns[i]);
        }
    }

    private class MyPageAdapter extends FragmentPagerAdapter
    {
        private long id = 0;

        public MyPageAdapter(FragmentManager fManager)
        {
            super(fManager);
        }

        @Override
        public int getItemPosition(@NonNull Object object)
        {
            return POSITION_NONE;
        }

        @Override
        public Fragment getItem(int position)
        {
            return fragment.get(position);
        }

        @Override
        public int getCount()
        {
            return fragment.size();
        }

        @Override
        public long getItemId(int position)
        {
            return id + position;
        }

        public void notifyChangeInPosition(int n)
        {
            id += getCount() + n;
        }
    }
}
