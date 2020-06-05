package com.pizzeria.ciakchepizza;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.content.Intent;
import android.content.res.Configuration;
import android.os.Bundle;
import android.view.View;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import java.io.InputStream;
import java.sql.*;
import java.util.*;


public class Registrati extends AppCompatActivity {
    private TextView textView;
    private WebView webView;
    final Context context = this;
    Intent i;
    String url;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registrati);

        webView = (WebView) findViewById(R.id.webview);
        webView.getSettings().setJavaScriptEnabled(true);

        int screenSize = getResources().getConfiguration().screenLayout &
                Configuration.SCREENLAYOUT_SIZE_MASK;

        String toastMsg;
        switch(screenSize) {
            case Configuration.SCREENLAYOUT_SIZE_LARGE:
                //toastMsg = "Large screen";
                webView.loadUrl("https://ciakchepizza.com");
                break;
            case Configuration.SCREENLAYOUT_SIZE_NORMAL:
                //toastMsg = "Normal screen";
                webView.loadUrl("https://ciakchepizza.com/m/formLogin.php");

                //COME BACK ACTIVITY
              webView.setWebViewClient(new WebViewClient()
                {
                    @Override
                    public boolean shouldOverrideUrlLoading(WebView view, String url) {
                        if (url.contains(url)) {
                            webView.loadUrl("https://ciakchepizza.com/m/dashboard.php");
                           /* Intent i = new Intent(Registrati.this, Home.class);
                            startActivity(i);
                            finish(); */
                            }

                        if (url.contains("https://ciakchepizza.com/m/formIscriviti.php")) {
                            webView.loadUrl("https://ciakchepizza.com/m/formIscriviti.php");

                        }

                        return true;
                    }
                });

                break;
            case Configuration.SCREENLAYOUT_SIZE_SMALL:
                toastMsg = "Small screen";
                webView.loadUrl("https://ciakchepizza.com/m/formLogin.php");


                //COME BACK ACTIVITY
               webView.setWebViewClient(new WebViewClient()
                {
                    @Override
                    public boolean shouldOverrideUrlLoading(WebView view, String url) {
                        if (url.contains(url)) {
                            webView.loadUrl("https://ciakchepizza.com/m/dashboard.php");
                            /* Intent i = new Intent(Registrati.this, Home.class);
                            startActivity(i);
                            finish(); */
                        }


                        if (url.contains("https://ciakchepizza.com/m/formIscriviti.php")) {
                            webView.loadUrl("https://ciakchepizza.com/m/formIscriviti.php");

                        }

                        return true;
                    }
                });

                break;
            default:
                toastMsg = "Le dimensioni dello schermo non sono né large, ne normal, ne piccole";
                webView.loadUrl("https://ciakchepizza.com/m/tabletFormLogin.php");


                //COME BACK ACTIVITY
               webView.setWebViewClient(new WebViewClient()
                {
                    @Override
                    public boolean shouldOverrideUrlLoading(WebView view, String url) {
                        if (url.contains(url)) {
                            webView.loadUrl("https://ciakchepizza.com/m/dashboard.php");
                           /* Intent i = new Intent(Registrati.this, Home.class);
                            startActivity(i);
                            finish(); */
                        }


                        if (url.contains("https://ciakchepizza.com/m/formIscriviti.php")) {
                            webView.loadUrl("https://ciakchepizza.com/m/formIscriviti.php");

                        }

                        return true;
                    }
                });

        }
        //Toast.makeText(this, toastMsg, Toast.LENGTH_LONG).show();


    }
}