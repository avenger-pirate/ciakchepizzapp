package com.pizzeria.ciakchepizza;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.webkit.WebView;
import android.widget.Button;
import android.widget.DatePicker;

import java.util.Calendar;
import java.util.GregorianCalendar;

public class Home extends AppCompatActivity {

   WebView webView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);
      webView=  findViewById(R.id.webview_home);
        webView.getSettings().setJavaScriptEnabled(true);
        webView.loadUrl("http://ciakchepizza.com/m/dashboard.php");

    }


         }


//https://www.mrwebmaster.it/android/come-salvare-dati-stato-activity-recuperarli-riapertura_11604.html