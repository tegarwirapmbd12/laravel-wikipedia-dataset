<?php

namespace App\Http\Controllers;

use App\Models\Metadata204;
use Illuminate\Http\Request;

class Metadata204Controller extends Controller
{
    public function index(Request $request)
    {
        $metadatas = Metadata204::all();
        return view('2022.metadata-4', compact('metadatas'));
    }
}
