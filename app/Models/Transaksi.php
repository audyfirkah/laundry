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

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function cabang()
    {
        return $this->belongsTo(Cabang::class, 'id_cabang');
    }

    public function detailTransaksi() 
    {
        return $this->hasMany(DetailTransaksi::class, 'id_transaksi');
    }


}
