<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'id_menu';

    protected $fillable = [
        'id_paket',
        'satuan',
        'nama_barang',
        'kategori',
        'harga',
    ];
}
