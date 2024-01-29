<?php

namespace App\Http\Controllers;

use App\Models\Indikator202201;
use App\Models\Variabel202201;
use Illuminate\Http\Request;


class Indikator202201Controller extends Controller
{
    public function  index(Request $request)
    {
       $indikators = Indikator202201::all();
       $variabels = Variabel202201::all();
       return view('2022.metadata-1', compact('indikators', 'variabels'));
    }
}
