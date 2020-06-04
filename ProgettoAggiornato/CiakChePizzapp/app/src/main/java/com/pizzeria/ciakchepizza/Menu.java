package com.pizzeria.ciakchepizza;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class Menu extends AppCompatActivity {

    Button account;
    Button settings;
    Button logout;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_menu);
        account = findViewById(R.id.button_account);
        settings = findViewById(R.id.button_settings);
        logout = findViewById(R.id.button_logout);

        account.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
               // Intent myintent = new Intent(Home.this, GestioneAccount.class);
                //startActivity(myintent);
            }
        });

        settings.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //Intent myintent = new Intent(Home.this, Impostazioni.class);
                //startActivity(myintent);
            }
        });

        logout.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //Logout script
            }
        });
    }
}