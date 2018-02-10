<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akus extends Model
{
    protected $table = 'aku';
    protected $fillable = ['nama_pakaian','ukuran','harga'];
    public $timestamps = true;
}
