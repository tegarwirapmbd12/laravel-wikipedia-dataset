<?php

namespace App\Http\Controllers;

use App\Models\Metadata202;
use Illuminate\Http\Request;

class Metadata202Controller extends Controller
{
    public function index(Request $request)
    {
        $metadatas = Metadata202::all();
        return view('2022.metadata-2', compact('metadatas'));
    }
}
