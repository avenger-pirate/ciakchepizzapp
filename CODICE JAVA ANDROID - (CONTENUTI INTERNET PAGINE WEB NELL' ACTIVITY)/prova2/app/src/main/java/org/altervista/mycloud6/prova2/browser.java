package org.altervista.mycloud6.prova2;

import android.content.Intent;
import android.os.Bundle;
import android.webkit.WebView;

import androidx.appcompat.app.AppCompatActivity;

public class browser extends AppCompatActivity {
    private WebView webView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.browser);

        webView = (WebView) findViewById(R.id.Browser);
        webView.getSettings().setJavaScriptEnabled(true);
        webView.loadUrl("http://ciakchepizza.com/api/iscriviti.php");


    }
}