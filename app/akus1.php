<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akus1 extends Model
{
    protected $table = 'aku1';
    protected $fillable = ['nama_obat','jenis_obat','harga_jual'];
    public $timestamps = true;
}
