package com.example.newsgateway;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.HashMap;

public class LayoutActivity implements Serializable
{
    private ArrayList<Sources> sourceList = new ArrayList<Sources>();
    private ArrayList<Articles> articleList = new ArrayList <Articles>();
    private ArrayList<String> categoryList = new ArrayList <String>();
    private HashMap<String, Integer> colorMap = new HashMap<>();
    private String srcName;
    private int currentSource;
    private int currentArticle;

    public ArrayList<Sources> getSourceList()
    {
        return sourceList;
    }

    public void setSourceList(ArrayList<Sources> sourceList)
    {
        this.sourceList = sourceList;
    }

    public ArrayList<Articles> getArticleList()
    {
        return articleList;
    }

    public void setArticleList(ArrayList<Articles> articleList)
    {
        this.articleList = articleList;
    }

    public ArrayList<String> getcategoryList()
    {
        return categoryList;
    }

    public void setcategoryList(ArrayList<String> categoryList)
    {
        this.categoryList = categoryList;
    }

    public HashMap<String, Integer> getcolorMap()
    {
        return colorMap;
    }

    public void setcolorMap(HashMap<String, Integer> colorMap)
    {
        this.colorMap = colorMap;
    }

    public String getsrcName()
    {
        return srcName;
    }

    public void setsrcName(String srcName)
    {
        this.srcName = srcName;
    }

    public int getCurrentSource()
    {
        return this.currentSource;
    }

    public void setCurrentSource(int currentSource)
    {
        this.currentSource = currentSource;
    }

    public int getCurrentArticle()
    {
        return this.currentArticle;
    }

    public void setCurrentArticle(int currentArticle)
    {
        this.currentArticle = currentArticle;
    }
}
