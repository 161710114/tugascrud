<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akus3 extends Model
{
    protected $table = 'aku3';
    protected $fillable = ['merk_sepatu','ukuran','harga'];
    public $timestamps = true;
}
