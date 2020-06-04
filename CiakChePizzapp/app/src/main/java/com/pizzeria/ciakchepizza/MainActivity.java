package com.pizzeria.ciakchepizza;

import androidx.appcompat.app.AppCompatActivity;

import android.content.SharedPreferences;
import android.os.Bundle;
import android.util.Log;
import android.view.WindowManager;
import android.widget.ProgressBar;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    private SharedPreferences mPrefs;
    private String mCurString;

    ProgressBar progressBar;
    TextView textView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,
                WindowManager.LayoutParams.FLAG_FULLSCREEN);
        progressBar = findViewById(R.id.progressBar);
        textView = findViewById(R.id.textView);
        progressBar.setMax(100);
        progressBar.setScaleY(3f);
        progressAnimation();
        //IMPOSTO IL VALORE DEL CARICAMENTO CON IL VALORE MEMORIZZATO
        mPrefs = getSharedPreferences("", MODE_PRIVATE);
        mCurString = mPrefs.getString("view_mode", "0"+" %");
        progressBar = findViewById(R.id.progressBar);
        textView.setText(mCurString);

    }

    public void progressAnimation(){
        ProgressBarAnimation anim = new ProgressBarAnimation(this, progressBar, textView, 0f,100f);
        anim.setDuration(8000);
        progressBar.setAnimation(anim);

    }

    @Override
    protected void onStart() {
        super.onStart();
    }


    @Override
    protected void onResume() {
        super.onResume();
    }

    @Override
    protected void onPause() {
        super.onPause();
        //SALVO IL VALORE NELLE PREFERENZE || QUANDO GIRO LO SCHERMO I DATI NON CAMBIANO
        SharedPreferences.Editor ed = mPrefs.edit();
        //RECUPERO DEL VALORE DALLA CASELLA DI TESTO
        progressBar = findViewById(R.id.progressBar);
        //METTE IL VALORE NELL'EDITOR DELLE PREFERENZE
        ed.putString("view_mode", textView.getText().toString());
        //SALVA IL VALORE
        ed.commit();
    }


    @Override
    protected void onRestart() {
        super.onRestart();
        Log.d("MainActivity", "onCreate");

    }

    @Override
    protected void onStop() {
        super.onStop();
    }


    @Override
    protected void onDestroy() {
        super.onDestroy();
        Log.d("MainActivity", "onCreate");

    }
}
