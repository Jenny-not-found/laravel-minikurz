<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //toto se spusti, kdyz provadite migraci z projektu do DB
        Schema::create("zvire", function(Blueprint $tabulka) {
            $tabulka->id();
            $tabulka->string("jmeno");
            $tabulka->text("popis")->nullable(true); //nepovinny text
            $tabulka->boolean("je_zdrave")->default(true); //tinyint default 1
            $tabulka->float("hmotnost")->nullable(true);

            $tabulka->timestamps(); //vytvori 2 sloupecky DATETIME, CREATED_AT, UPDATED_AT
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //toto se spusti, kdyz chcete vzit migraci zpet
        Schema::dropIfExists("zvire");
    }
};
