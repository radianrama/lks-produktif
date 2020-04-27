<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_kegiatan extends Model
{
    protected $table = 'set_jadwal';
    protected $fillable = ['id','waktu','kegiatan','set_pelajaran','jawaban'];
}