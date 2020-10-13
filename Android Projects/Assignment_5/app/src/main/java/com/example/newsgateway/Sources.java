package com.example.newsgateway;

import java.io.Serializable;

public class Sources implements Serializable
{
    String sourceId;
    String sourceUrl;
    String sourceName;
    String sourceCategory;

    public void setsourceId(String sourceId)
    {
        this.sourceId = sourceId;
    }

    public void setsourceUrl(String sourceUrl)
    {
        this.sourceUrl = sourceUrl;
    }

    public String getsourceName()
    {
        return sourceName;
    }

    public void setsourceName(String sourceName)
    {
        this.sourceName = sourceName;
    }

    public String getsourceCategory()
    {
        return sourceCategory;
    }

    public void setsourceCategory(String sourceCategory)
    {
        this.sourceCategory = sourceCategory;
    }
}
