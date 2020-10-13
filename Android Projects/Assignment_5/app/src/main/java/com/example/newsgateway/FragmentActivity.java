package com.example.newsgateway;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.text.method.ScrollingMovementMethod;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import com.squareup.picasso.Picasso;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;

public class FragmentActivity extends Fragment
{
    private static final String TAG = "FragmentActivity";
    public static final String ARTICLE = "ARTICLE";
    public static final String POINTER = "POINTER";
    public static final String TOTAL_NO = "TOTAL_NO";
    TextView heading, currDate, author, description, pgNo;
    ImageView imageView;
    Articles article;
    View view;
    int cnt;

    public static final FragmentActivity newInstance(Articles article, int ptr, int total_num)
    {
        FragmentActivity fragmentAct = new FragmentActivity();
        Bundle bundle = new Bundle(1);
        bundle.putSerializable(ARTICLE, article);
        bundle.putInt(POINTER, ptr);
        bundle.putInt(TOTAL_NO, total_num);
        fragmentAct.setArguments(bundle);
        return fragmentAct;
    }

    @Override
    public void onCreate(@Nullable Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setRetainInstance(true);
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState)
    {
        article  = (Articles) getArguments().getSerializable(ARTICLE);
        cnt = getArguments().getInt(POINTER)+1;
        int total_num = getArguments().getInt(TOTAL_NO);
        String lastLine = cnt+" of "+total_num;
        view = inflater.inflate(R.layout.activity_fragment, container, false);
        heading = view.findViewById(R.id.heading);
        currDate = view.findViewById(R.id.date);
        author = view.findViewById(R.id.author);
        description = view.findViewById(R.id.description);
        pgNo = view.findViewById(R.id.cnt);
        imageView = view.findViewById(R.id.imageView);
        pgNo.setText(lastLine);

        if(article.getarticleTitle() != null)
        {
            heading.setText(article.getarticleTitle());
        }
        else
        {
            heading.setText("");
        }

        if(article.publishArticle() !=null && !article.publishArticle().isEmpty())
        {
            String sDate = article.publishArticle();
            Date fDate = null;
            String pDate = "";
            try
            {
                if(sDate != null)
                {
                    fDate = new SimpleDateFormat("yyyy-MM-dd'T'HH:mm:ss").parse(sDate);}
                    String pattern = "MMM dd, yyyy HH:mm";
                    SimpleDateFormat sdf = new SimpleDateFormat(pattern);
                    pDate = sdf.format(fDate);
                    currDate.setText(pDate);
                }
            catch (ParseException e)
            {
                e.printStackTrace();
            }
        }

        if(article.getarticleDesc()!=null)
        {
            description.setText(article.getarticleDesc());
        }
        else
        {
            description.setText("");
        }

        if(article.getarticleAuthor() != null)
        {
            author.setText(article.getarticleAuthor());
        }
        else
        {
            author.setText("");
        }

        author.setMovementMethod(new ScrollingMovementMethod());

        if(article.getarticleImage()!=null)
        {
            loadImage(article.getarticleImage());
        }

        heading.setOnClickListener(new View.OnClickListener()
        {
            @Override
            public void onClick(View view)
            {
                Intent intent = new Intent();
                intent.setAction(Intent.ACTION_VIEW);
                intent.addCategory(Intent.CATEGORY_BROWSABLE);
                intent.setData(Uri.parse(article.getarticleUrl()));
                startActivity(intent);
            }
        });

        description.setOnClickListener(new View.OnClickListener()
        {
            @Override
            public void onClick(View view)
            {
                Intent intent = new Intent();
                intent.setAction(Intent.ACTION_VIEW);
                intent.addCategory(Intent.CATEGORY_BROWSABLE);
                intent.setData(Uri.parse(article.getarticleUrl()));
                startActivity(intent);
            }
        });

        imageView.setOnClickListener(new View.OnClickListener()
        {
            @Override
            public void onClick(View view)
            {
                Intent intent = new Intent();
                intent.setAction(Intent.ACTION_VIEW);
                intent.addCategory(Intent.CATEGORY_BROWSABLE);
                intent.setData(Uri.parse(article.getarticleUrl()));
                startActivity(intent);
            }
        });
        return view;
    }

    private  void loadImage(final String imageUrl)
    {
        if (imageUrl != null)
        {
            Picasso picasso = new Picasso.Builder(getActivity()).listener(new Picasso.Listener() {
                @Override
                public void onImageLoadFailed(Picasso picasso, Uri uri, Exception exception) {
                    final String changedUrl = imageUrl.replace("http:", "https:");
                    picasso.load(changedUrl).fit().centerCrop().error(R.drawable.person).placeholder(R.drawable.brokenimage).into(imageView);
                }
            }).build();
            picasso.load(imageUrl).fit().centerCrop().error(R.drawable.person).placeholder(R.drawable.brokenimage).into(imageView);
        }
        else
        {
            Picasso.get().load(imageUrl).fit().centerCrop().error(R.drawable.person).placeholder(R.drawable.brokenimage).into(imageView);
        }
    }
}
