<?php

namespace Database\Seeders;

use App\Models\ZvireModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZvireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $noveZvire = new ZvireModel();
        $noveZvire->jmeno = "Žirafa";
        $noveZvire->popis = "Má dlouhý krk";
        $noveZvire->je_zdrave = false;
        $noveZvire->save();

        $noveZvire = new ZvireModel();
        $noveZvire->jmeno = "Slon";
        $noveZvire->popis = "Má chobot";
        $noveZvire->je_zdrave = true;
        $noveZvire->save();

    }
}
