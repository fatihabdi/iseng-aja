<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index(){
        $mobil = Mobil::all();
        return view('home', compact('mobil'));
    }

    public function showCar(){
        $mobil = Mobil::all();
        return view('showroom', compact('mobil'));
    }

    public function addCar(Request $request)
    {
        $data = $request->all();

        Mobil::create([
            'nama_mobil' => $data['name'],
            'brand_mobil' => $data['brand'],
            'warna_mobil' => $data['warna'],
            'tipe_mobil' => $data['tipe'],
            'harga_mobil' => $data['harga'],
        ]);


        return redirect('/showroom')->with('success', 'Add Car Success');
    }
}
