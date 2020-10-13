package com.example.newsgateway;

import java.io.Serializable;

public class Articles implements Serializable
{
    String articleAuthor;
    String articleTitle;
    String articleDesc;
    String articleImage;
    String articlePublish;
    String articleUrl;

    public String getarticleAuthor()
    {
        return articleAuthor;
    }

    public void setarticleAuthor(String articleAuthor)
    {
        this.articleAuthor = articleAuthor;
    }

    public String getarticleTitle()
    {
        return articleTitle;
    }

    public void setarticleTitle(String articleTitle)
    {
        this.articleTitle = articleTitle;
    }

    public String getarticleDesc()
    {
        return articleDesc;
    }

    public void setarticleDesc(String articleDesc)
    {
        this.articleDesc = articleDesc;
    }

    public String getarticleImage()
    {
        return articleImage;
    }

    public void setarticleImage(String articleImage)
    {
        this.articleImage = articleImage;
    }

    public String publishArticle()
    {
        return articlePublish;
    }

    public void setarticlePublish(String articlePublish)
    {
        this.articlePublish = articlePublish;
    }

    public String getarticleUrl()
    {
        return articleUrl;
    }

    public void setarticleUrl(String articleUrl)
    {
        this.articleUrl = articleUrl;
    }
}
