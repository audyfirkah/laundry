<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksis';
    protected $primaryKey = 'id_detail_transaksi';
    protected $fillable = [
        'id_transaksi',
        'id_menu',
        'jumlah',
        'harga',
    ];
}
