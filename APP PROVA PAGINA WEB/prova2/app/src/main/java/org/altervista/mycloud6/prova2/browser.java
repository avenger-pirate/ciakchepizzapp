package org.altervista.mycloud6.prova2;

import android.content.Intent;
import android.content.res.Configuration;
import android.os.Bundle;
import android.webkit.WebView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

public class browser extends AppCompatActivity {
    private WebView webView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.browser);

        webView = (WebView) findViewById(R.id.Browser);
        webView.getSettings().setJavaScriptEnabled(true);

        int screenSize = getResources().getConfiguration().screenLayout &
                Configuration.SCREENLAYOUT_SIZE_MASK;

        String toastMsg;
        switch(screenSize) {
            case Configuration.SCREENLAYOUT_SIZE_LARGE:
                toastMsg = "Large screen";
                webView.loadUrl("https://ciakchepizza.com");
                break;
            case Configuration.SCREENLAYOUT_SIZE_NORMAL:
                toastMsg = "Normal screen";
                webView.loadUrl("https://ciakchepizza.com/m/formLogin.php");
                break;
            case Configuration.SCREENLAYOUT_SIZE_SMALL:
                toastMsg = "Small screen";
                webView.loadUrl("https://ciakchepizza.com/m/formLogin.php");
                break;
            default:
                toastMsg = "Le dimensioni dello schermo non sono né large, ne normal, ne piccole";
                webView.loadUrl("https://ciakchepizza.com/m/tabletFormLogin.php");

        }
        Toast.makeText(this, toastMsg, Toast.LENGTH_LONG).show();


        //webView.loadUrl("https://ciakchepizza.com/m/formLogin.php");


    }
}