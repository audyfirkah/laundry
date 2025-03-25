<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected $table = 'cabangs';
    protected $primaryKey = 'id_cabang';

    protected $fillable = [
        'id_user',
        'nama_cabang',
        'alamat',
    ];
}
