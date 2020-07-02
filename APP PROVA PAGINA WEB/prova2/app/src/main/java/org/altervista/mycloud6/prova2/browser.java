package org.altervista.mycloud6.prova2;

import android.content.Context;
import android.content.Intent;
import android.content.res.Configuration;
import android.os.Bundle;
import android.webkit.WebChromeClient;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

public class browser extends AppCompatActivity {
    private TextView textView;
    private WebView webView;
    final Context context = this;
    Intent i;
    String url;

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
            //PC DESKTOP - SCHERMI GRANDI
            case Configuration.SCREENLAYOUT_SIZE_LARGE:
                //toastMsg = "Large screen";
                webView.loadUrl("https://ciakchepizza.com");
                break;
                //SMARTPHONE - SCHERMI NORMALI
            case Configuration.SCREENLAYOUT_SIZE_NORMAL:
                //toastMsg = "Normal screen";
                webView.loadUrl("https://ciakchepizza.com/m/formLogin.php");

                //COME BACK ACTIVITY
                webView.setWebViewClient(new WebViewClient()
                {
                    @Override
                    public boolean shouldOverrideUrlLoading(WebView view, String url) {
                        if (url.contains(url)) {
                            webView.loadUrl("https://ciakchepizza.com/m/dashboard/dashboard.php");

                            /* Intent i = new Intent(browser.this, DashBoard.class);
                            startActivity(i);
                            finish(); */
                        }


                        if (url.contains("https://ciakchepizza.com/m/formLogin.php")) {
                            webView.loadUrl("https://ciakchepizza.com/m/formLogin.php");

                        }

                        if (url.contains("https://ciakchepizza.com/m/formIscriviti.php")) {
                            webView.loadUrl("https://ciakchepizza.com/m/formIscriviti.php");

                        }


                        if(url.contains("https://ciakchepizza.com/m/formDelete.php")){
                            webView.loadUrl("https://ciakchepizza.com/m/formDelete.php");
                        }

                        if(url.contains("https://ciakchepizza.com/m/formConfDelete.php")){
                            webView.loadUrl("https://ciakchepizza.com/m/formConfDelete.php");
                        }

                        if(url.contains("https://ciakchepizza.com/m/formModPsw.php")){
                            webView.loadUrl("https://ciakchepizza.com/m/formModPsw.php");
                        }




                        //CONTROLLO DEI LINK DELLA DASHBOARD
                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/menu.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/menu.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/card.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/card.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/game/Grattaevinci/index.html")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/game/Grattaevinci/index.html");

                        }




                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/impostazioni.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/impostazioni.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/Profile.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/Profile.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/login.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/login.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/formModPsw.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/formModPsw.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/formConfDelete.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/formConfDelete.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/formDelete.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/formDelete.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/formLogin.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/formLogin.php");

                        }



                        return true;
                    }
                });

            break;
            //SMARTPHONE - SCHERMI PICCOLI
            case Configuration.SCREENLAYOUT_SIZE_SMALL:
                toastMsg = "Small screen";
                webView.loadUrl("https://ciakchepizza.com/m/formLogin.php");


                //COME BACK ACTIVITY
                webView.setWebViewClient(new WebViewClient()
                {
                    @Override
                    public boolean shouldOverrideUrlLoading(WebView view, String url) {
                        if (url.contains(url)) {
                            webView.loadUrl("https://ciakchepizza.com/m/dashboard/dashboard.php");

                            /* Intent i = new Intent(browser.this, DashBoard.class);
                            startActivity(i);
                            finish(); */
                            }

                        if (url.contains("https://ciakchepizza.com/m/formLogin.php")) {
                            webView.loadUrl("https://ciakchepizza.com/m/formLogin.php");

                        }

                        if (url.contains("https://ciakchepizza.com/m/formIscriviti.php")) {
                            webView.loadUrl("https://ciakchepizza.com/m/formIscriviti.php");

                        }

                        if(url.contains("https://ciakchepizza.com/m/formDelete.php")){
                            webView.loadUrl("https://ciakchepizza.com/m/formDelete.php");
                        }

                        if(url.contains("https://ciakchepizza.com/m/formConfDelete.php")){
                            webView.loadUrl("https://ciakchepizza.com/m/formConfDelete.php");
                        }

                        if(url.contains("https://ciakchepizza.com/m/formModPsw.php")){
                            webView.loadUrl("https://ciakchepizza.com/m/formModPsw.php");
                        }


                        //CONTROLLO DEI LINK DELLA DASHBOARD
                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/menu.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/menu.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/card.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/card.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/game/Grattaevinci/index.html")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/game/Grattaevinci/index.html");

                        }




                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/impostazioni.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/impostazioni.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/Profile.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/Profile.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/login.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/login.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/formModPsw.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/formModPsw.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/formConfDelete.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/formConfDelete.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/formDelete.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/formDelete.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/formLogin.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/formLogin.php");

                        }

                        return true;
                    }
                });

                break;
            default:
                //TABLET
                toastMsg = "Le dimensioni dello schermo non sono né large, ne normal, ne piccole";
                webView.loadUrl("https://ciakchepizza.com/m/tabletFormLogin.php");


                //COME BACK ACTIVITY
                webView.setWebViewClient(new WebViewClient()
                {
                    @Override
                    public boolean shouldOverrideUrlLoading(WebView view, String url) {
                        if (url.contains(url)) {
                            webView.loadUrl("https://ciakchepizza.com/m/dashboard/dashboard.php");

                            /* Intent i = new Intent(browser.this, DashBoard.class);
                            startActivity(i);
                            finish(); */
                        }

                        if (url.contains("https://ciakchepizza.com/m/tabletFormLogin.php")) {
                            webView.loadUrl("https://ciakchepizza.com/m/tabletFormLogin.php");

                        }

                        if (url.contains("https://ciakchepizza.com/m/tabletFormIscriviti.php")) {
                            webView.loadUrl("https://ciakchepizza.com/m/tabletFormIscriviti.php");

                        }

                        if (url.contains("https://ciakchepizza.com/m/tabletFormDelete.php")) {
                            webView.loadUrl("https://ciakchepizza.com/m/tabletFormDelete.php");

                        }

                        if(url.contains("https://ciakchepizza.com/m/tabConfDelete.php")){
                            webView.loadUrl("https://ciakchepizza.com/m/tabConfDelete.php");
                        }


                        //CONTROLLO DEI LINK DELLA DASHBOARD
                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/menu.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/menu.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/card.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/card.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/game/Grattaevinci/index.html")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/game/Grattaevinci/index.html");

                        }




                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/impostazioni.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/impostazioni.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/dashboard/Profile.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/dashboard/Profile.php");

                        }

                        if (url.contains("https://www.ciakchepizza.com/m/login.php")) {
                            webView.loadUrl("https://www.ciakchepizza.com/m/login.php");

                        }


                        return true;
                    }
                });

        }
        //Toast.makeText(this, toastMsg, Toast.LENGTH_LONG).show();


    }
}