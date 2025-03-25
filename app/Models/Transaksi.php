<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_user',
        'id_cabang',
        'total',
        'status',
        'tanggal_order',
        'tanggal_selesai',
    ];
}
