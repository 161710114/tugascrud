<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akus2 extends Model
{
    protected $table = 'aku2';
    protected $fillable = ['nama_penumpang','tanggal_pembelian','tujuan','harga'];
    public $timestamps = true;
}
