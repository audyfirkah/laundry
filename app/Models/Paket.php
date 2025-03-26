<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'pakets';
    protected $primaryKey = 'id_paket';

    protected $fillable = [
        'nama',
        'layanan',
        'jenis_layanan',
    ];

    public function menu()
    {
        return $this->hasMany(Menu::class, 'id_paket');
    }

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'id_paket');
    }
}
