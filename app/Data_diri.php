<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_diri extends Model
{
    protected $table = 'data_diri';
    protected $fillable = ['id','password_awal','password_baru'];
}
