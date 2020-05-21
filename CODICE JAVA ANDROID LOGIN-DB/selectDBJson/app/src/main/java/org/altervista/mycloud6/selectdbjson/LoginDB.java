package org.altervista.mycloud6.selectdbjson;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.os.AsyncTask;
import android.widget.ArrayAdapter;
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

public class LoginDB extends AppCompatActivity {
    ListView listView;
    EditText email, psw;
    TextView error;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.login);

        error = (TextView) findViewById(R.id.Error);

        listView = (ListView) findViewById(R.id.listView);
        downloadJSON("http://ciakchepizza.com/api/login.php");

    }

    private void downloadJSON(final String urlWebService) {

        class DownloadJSON extends AsyncTask<Void, Void, String> {

            @Override
            protected void onPreExecute() {
                super.onPreExecute();
            }


            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                Toast.makeText(getApplicationContext(), s, Toast.LENGTH_SHORT).show();
                try {
                    loadIntoListView(s);
                } catch (JSONException e) {
                    e.printStackTrace();
                }
            }

            @Override
            protected String doInBackground(Void... voids) {
                try {
                    URL url = new URL(urlWebService);
                    HttpURLConnection con = (HttpURLConnection) url.openConnection();
                    StringBuilder sb = new StringBuilder();
                    BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(con.getInputStream()));
                    String json;
                    while ((json = bufferedReader.readLine()) != null) {
                        sb.append(json + "\n");
                    }
                    return sb.toString().trim();
                } catch (Exception e) {
                    return null;
                }
            }
        }
        DownloadJSON getJSON = new DownloadJSON();
        getJSON.execute();
    }

    private void loadIntoListView(String json) throws JSONException {
        JSONArray jsonArray = new JSONArray(json);
        //String[] stocks = new String[jsonArray.length()];

        String id_str = null;
        String cap_str = null;
        String nome_str = null;
        String cognome_str = null;
        String indirizzo_str = null;
        String data_str = null;
        String tel_str = null;
        String email_str = null;
        String psw_str = null;
        String cf_str = null;

        int id_test = 11;

        //for (int i = 0; i < jsonArray.length(); i++) {
            //JSONObject obj = jsonArray.getJSONObject(i);

        for (int i = 0; i < id_test; i++) {
            JSONObject obj = jsonArray.getJSONObject(i);

            id_str = obj.getString("id");
            cap_str = obj.getString("cap");
            nome_str = obj.getString("nome");
            cognome_str = obj.getString("cognome");
            indirizzo_str = obj.getString("indirizzo");
            data_str = obj.getString("data");
            tel_str = obj.getString("tel");
            email_str = obj.getString("email");
            psw_str = obj.getString("psw");
            cf_str = obj.getString("cf");
        }

        String strE_mail = getIntent().getStringExtra("E_mail");
        String strPswd = getIntent().getStringExtra("pswd");

        //DEBUG
        error.setText(email_str);

      /* if((strE_mail.equals(email_str)) && (strPswd.equals(psw_str))){

         error.setText("Benvenuto" + " " + nome_str);
         error.setEnabled(true);}
       else{
           error.setText("Accesso Negato!");
           error.setEnabled(true);} */
    }
}

