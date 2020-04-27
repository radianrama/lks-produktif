<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'set_jadwal';
    protected $fillable = ['id','waktu','kegiatan','set_pelajaran','jawaban'];
}