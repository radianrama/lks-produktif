<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Set_jadwalController extends Controller
{
    public function index()
    {
        $set_jadwal = \App\Set_jadwal::all();//Buat manggil si model di dalem model itu ada table si set__jadwal
        return  view('set_jadwal.index', ['set_jadwal' => $set_jadwal]);
    }

    public function create(Request $request)
    {
        \App\Set_jadwal::create($request ->all());
        return redirect('/set_jadwal')->with('sukses','Data Berhasil Di input');
    }
}
