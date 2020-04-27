<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    function pdf()
    {
        $laporan = \App\Laporan::all();
        $data['judul'] = 'Laporan PDF';
        $pdf = \PDF::loadView('pdf',  $laporan);
        return $pdf->download('invoice.pdf');
    }
}
