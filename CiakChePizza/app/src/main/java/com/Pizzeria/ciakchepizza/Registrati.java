package com.Pizzeria.ciakchepizza;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import java.util.Date;

public class Registrati extends AppCompatActivity {
EditText Nome;
EditText Cognome;
EditText Data;
EditText Indirizzo;
EditText Cap;
EditText Telefono;
EditText Email;
EditText Password;
TextView Accedi;
Button Registrati;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registrati);
        Nome= findViewById(R.id.editText3);
        Cognome = findViewById(R.id.editText4);
        Data = findViewById(R.id.editText5);
        Indirizzo = findViewById(R.id.editText7);
        Cap = findViewById(R.id.editText6);
        Telefono = findViewById(R.id.editText8);
        Email = findViewById(R.id.editText9);
        Password = findViewById(R.id.editText);
        Accedi = findViewById(R.id.textView2);
        Registrati = findViewById(R.id.button_registrati);

        Accedi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent screensignin= new Intent (Registrati.this, Login.class);
                startActivity(screensignin);
            }
        });
        //ACCESSO AL DB PER LA REGISTRAZIONE
        Registrati.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

            }
        });
    }
}
