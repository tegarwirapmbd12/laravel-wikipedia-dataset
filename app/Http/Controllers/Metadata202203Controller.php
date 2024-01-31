<?php

namespace App\Http\Controllers;

use App\Models\File202203;
use App\Models\Indikator202203;
use App\Models\Variabel202203;
use Illuminate\Http\Request;

class Metadata202203Controller extends Controller
{
    public function  index(Request $request)
    {
       $files = File202203::all();
       $indikators = Indikator202203::all();
       $variabels = Variabel202203::all();
       return view('2022.metadata-3', compact('indikators', 'variabels', 'files'));
    }
}
