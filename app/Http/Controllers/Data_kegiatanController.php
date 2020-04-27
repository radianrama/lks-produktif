<?php

namespace App\Http\Controllers;

use App\Set_jadwal;
use Illuminate\Http\Request;

class Data_kegiatanController extends Controller
{
    public function index()
    {
        $data_kegiatan = \App\data_kegiatan::all();//Buat manggil si model di dalem model itu ada table si set__jadwal
        return  view('data_kegiatan.index', ['data_kegiatan' => $data_kegiatan]);
    }
    public function create(Request $request)
    {
        \App\Data_kegiatan::create($request ->all());
        return redirect('/data_kegiatan')->with('sukses','Data Berhasil Di input');
    }
}
