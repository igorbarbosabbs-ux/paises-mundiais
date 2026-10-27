<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{
    public function index(){
        $paises = DB::select("SELECT Code, Name, Continent, Region, SurfaceArea, IndepYear, Population, LifeExpectancy, GNP, LocalName, GovernmentForm, HeadOfState, Capital FROM COUNTRY WHERE CONTINENT = 'EUROPE'");

        return view('pais', compact('paises'));
    }
}
