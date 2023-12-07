<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function create() {
        return view('showroom/create');
    }
    public function store (Request $request) {
        $data = $request -> all();
        Mobil::create ([
            'nama_mobil' => 'required',
            'brand_mobil' => 'required',
            'warna_mobil' => 'required',
            'tipe_mobil' => 'required',
            'harga_mobil' => 'required',

        
        ]);
    
    }
    public function index() {
        $showroom_mobil = Mobil::all();
        return view('showroom/index', compact('mobil'));
    }
}
