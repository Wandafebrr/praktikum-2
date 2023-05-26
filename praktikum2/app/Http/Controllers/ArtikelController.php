<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //
    function index(){
        $data = artikel::latest()->paginate(5);
        return view('home', compact('data'));
    }

}

