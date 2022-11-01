<?php

namespace App\Http\Controllers;

use App\Models\nurburgringtrack;
use Illuminate\Http\Request;

class NurburgringtrackController extends Controller
{
   public function index (){
        $nurburgringtrack = nurburgringtrack::all();
        return view('cars', compact('nurburgringtrack'));
    }
}

