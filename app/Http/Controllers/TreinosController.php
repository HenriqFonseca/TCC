<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreinosController extends Controller
{
    public function treinos(){
        return view('treinos.treinos');
                
    }
}

