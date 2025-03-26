<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksis';
    protected $primaryKey = 'id_detail_transaksi';
    protected $fillable = [
        'id_transaksi',
        'id_paket',
        'id_menu',
        'jumlah',
        'harga',
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket');
    }

}
