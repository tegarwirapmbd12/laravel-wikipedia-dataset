<?php

namespace App\Http\Controllers;

use App\Models\Metadata203;
use Illuminate\Http\Request;

class Metadata203Controller extends Controller
{
    public function index(Request $request)
    {
        $metadatas = Metadata203::all();
        return view('2022.metadata-3', compact('metadatas'));
    }
}
