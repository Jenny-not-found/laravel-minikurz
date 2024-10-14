<?php

namespace App\Http\Controllers;

use App\Models\ZvireModel;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //pokud funkce vypisuje nejakou sablonu, tak se vetsinou nazyva index
    function index() {
        $polePromennych = array();
        $polePromennych["datum"] = date("d-m-Y");
        $polePromennych["stavNavstevnosti"] = rand(0, 100);
        $polePromennych["zvireMesice"] = "koala";
        $polePromennych["jeOtevreno"] = false;
        $polePromennych["casyKrmeni"] = array("8:00", "12:20", "15:15", "18:05");

        //chcme vytahnout vsezny zaznamy z tabulky zvire
        //nesmime zapomenout uvest use namespace
        //funkce ZvireModel::all(); nam vrati pole objektu vsech zviratek v DB
        $polePromennych["poleZviratek"] = ZvireModel::all();

        return view("homepage", $polePromennych);


        return view("homepage", $polePromennych);
    }
}
