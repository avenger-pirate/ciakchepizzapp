package com.Pizzeria.ciakchepizza;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class Login extends AppCompatActivity {
EditText email;
EditText password;
TextView registrati;
Button login;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        email = findViewById(R.id.editText2);
        password = findViewById(R.id.editText);
        registrati = findViewById(R.id.textView2);
        login = findViewById(R.id.button_registrati);
        registrati.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent screensignup= new Intent (Login.this, Registrati.class);
                startActivity(screensignup);
            }
        });

        //ACCESSO AL DB PER IL LOGIN
        login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

            }
        });

    }
}
