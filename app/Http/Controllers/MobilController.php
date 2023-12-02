<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function showCar(){
        $mobil = Mobil::all();
        return view('home', compact('mobil'));
    }
}
