package org.altervista.mycloud6.selectdbjson;

import androidx.appcompat.app.AppCompatActivity;
import android.content.Intent;
import android.os.Bundle;
import android.os.AsyncTask;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

public class MainActivity extends AppCompatActivity {
    ListView listView;
    EditText E_mail, pswd;
    Button login;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        E_mail = (EditText) findViewById(R.id.Email);
        pswd = (EditText) findViewById(R.id.Password);

        Button Accedi = (Button) findViewById(R.id.login);
        Accedi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View arg0) {

                try {
                    Intent i = new Intent(MainActivity.this, LoginDB.class);
                    i.putExtra ( "E_mail", E_mail.getText().toString());
                    i.putExtra ( "pswd", pswd.getText().toString());
                    startActivity(i);
                }
                catch (Exception e) {}

            }});


    }
}
