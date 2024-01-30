<?php

namespace App\Http\Controllers;

use App\Models\File202202;
use App\Models\Metadata202202;
use Illuminate\Http\Request;

class Metadata202202Controller extends Controller
{
    public function index(Request $request)
    {
        $files = File202202::all();
        $metadatas = Metadata202202::all();
        return view('2022.metadata-2', compact('metadatas', 'files'));
    }
}
