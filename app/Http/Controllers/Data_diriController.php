<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data_diriController extends Controller
{
    public function index()
    {
        $data_diri = \App\Data_diri::all();//Buat manggil si model di dalem model itu ada table si data diri
        return  view('data_siswa.index', ['data_siswa' => $data_siswa]);
    }
    public function create(Request $request)
    {
        \App\Data_diri::create($request ->all());
        return redirect('/data_diri')->with('sukses','Data Berhasil Di input');
    }
}
