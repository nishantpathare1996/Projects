package com.example.assignment1;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.text.method.ScrollingMovementMethod;
import android.view.View;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.TextView;
import android.widget.Toast;


public class MainActivity extends AppCompatActivity
{
    EditText input1;
    TextView value2,value3,value5,value6;
    RadioButton rclick1, rclick2;
    String result ="";
    private String c = "Miles:";
    private String f = "Kilometers:";

    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        input1 = findViewById(R.id.editText1);
        value2  = findViewById(R.id.text2);
        value3 = findViewById(R.id.text3);
        value5 = findViewById(R.id.text5);
        value6 = findViewById(R.id.textView6);
        value6.setMovementMethod(new ScrollingMovementMethod());
        rclick1 = findViewById(R.id.mtokm);
        rclick2 = findViewById(R.id.kmtom);

        rclick1.setOnClickListener(new View.OnClickListener()
        {
            @Override
            public void onClick(View v)
            {
                value2.setText(c);
                value3.setText(f);
            }
        });

        rclick2.setOnClickListener(new View.OnClickListener()
        {
            @Override
            public void onClick(View v)
            {
                value2.setText(f);
                value3.setText(c);
            }
        });

    }

    public void convert1 (View v)
    {
        String miles = input1.getText().toString();
        miles.trim();

        if (rclick1.isChecked())
        {
            if(!miles.matches(""))
            {
                double input=Double.parseDouble(miles);
                value5.setText(String.format("%.1f", input*1.609));
                result = miles + " miles ==> " + String.format("%.1f", input*1.609) + " km \n" + result;
                value6.setText(result);
                input1.setText("");
            }

            else
            {
            input1.setText("");
            }

        }


        if (rclick2.isChecked())
        {
            if(!miles.matches(""))
            {
                double input=Double.parseDouble(miles);
                value5.setText(String.format("%.1f", input*0.621));
                result = miles + " km ==> " + String.format("%.1f", input*0.621) + " miles \n" + result;
                value6.setText(result);
                input1.setText("");

            }
            else
            {
                input1.setText("");
            }
        }

    }

    public void clear1(View v)
    {
        value5.setText("");
        value6.setText(" ");
        result = "";
    }

    protected void onSaveInstanceState(Bundle outState)
    {
        super.onSaveInstanceState(outState);
        outState.putString("Text6",value6.getText().toString());
        outState.putString("Text5",value5.getText().toString());
    }

    protected void onRestoreInstanceState(Bundle savedInstanceState)
    {
        super.onRestoreInstanceState(savedInstanceState);
        value6.setText(savedInstanceState.getString("Text6"));
        value5.setText(savedInstanceState.getString("Text5"));
        result=savedInstanceState.getString("Result");

    }

}
