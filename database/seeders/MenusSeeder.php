<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Menu;
use Faker\Factory as Faker;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('id_ID');


        $items = [
            ['id_paket' => 1, 'satuan' => 'pcs', 'nama_barang' => 'karpet', 'kategori' => 'besar'],
            ['id_paket' => 1, 'satuan' => 'pcs', 'nama_barang' => 'karpet', 'kategori' => 'sedang'],
            ['id_paket' => 1, 'satuan' => 'pcs', 'nama_barang' => 'karpet', 'kategori' => 'kecil'],
            ['id_paket' => 1, 'satuan' => 'pcs', 'nama_barang' => 'boneka', 'kategori' => 'besar'],
            ['id_paket' => 1, 'satuan' => 'pcs', 'nama_barang' => 'boneka', 'kategori' => 'sedang'],
            ['id_paket' => 1, 'satuan' => 'pcs', 'nama_barang' => 'boneka', 'kategori' => 'kecil'],
            ['id_paket' => 1, 'satuan' => 'pcs', 'nama_barang' => 'baju', 'kategori' => 'dryclean'],

            ['id_paket' => 1, 'satuan' => 'kg', 'nama_barang' => 'baju', 'kategori' => ''],
            ['id_paket' => 1, 'satuan' => 'kg', 'nama_barang' => 'boneka', 'kategori' => ''],


            ['id_paket' => 2, 'satuan' => 'pcs', 'nama_barang' => 'baju', 'kategori' => 'dryclean'],
            ['id_paket' => 2, 'satuan' => 'kg', 'nama_barang' => 'baju', 'kategori' => ''],

            ['id_paket' => 3, 'satuan' => 'pcs', 'nama_barang' => 'baju', 'kategori' => 'dryclean'],
            ['id_paket' => 3, 'satuan' => 'kg', 'nama_barang' => 'baju', 'kategori' => ''],
        ];


        foreach ($items as $item) {
            if($item['id_paket'] == 1 && $item['nama_barang'] == 'karpet') {
                $satuan = 'pcs';
                switch ($item['kategori']) {
                    case 'besar':
                        $harga = 20000;
                        break;
                    case 'sedang':
                        $harga = 15000;
                        break;
                    case 'kecil':
                        $harga = 10000;
                        break;
                }
            } else if($item['id_paket'] == 1 && $item['nama_barang'] == 'boneka') {
                $satuan = 'pcs';
                switch ($item['kategori']) {
                    case 'besar':
                        $harga = 20000;
                        break;
                    case 'sedang':
                        $harga = 15000;
                        break;
                    case 'kecil':
                        $harga = 10000;
                        break;
                }
            } else if($item['id_paket'] == 1 && $item['nama_barang'] == 'baju') {
                $satuan = 'kg';
                switch ($item['kategori']) {
                    case 'dryclean':
                        $harga = 20000;
                        break;
                }
            } else {
                $satuan = 'pcs';
                switch ($item['nama_barang']) {
                    case 'baju':
                        $harga = 20000;
                        break;
                    case 'boneka':
                        $harga = 15000;
                        break;
                    case 'karpet':
                        $harga = 10000;
                        break;
                }
            }


            if($item['id_paket'] == 2 && $item['nama_barang'] == 'baju') {
                $satuan = 'kg';
                switch ($item['kategori']) {
                    case 'dryclean':
                        $harga = 20000;
                        break;
                }
            } else {
                $satuan = 'pcs';
                switch ($item['nama_barang']) {
                    case 'baju':
                        $harga = 20000;
                        break;
                }
            }


            if($item['id_paket'] == 3 && $item['nama_barang'] == 'baju') {
                $satuan = 'kg';
                switch ($item['kategori']) {
                    case 'dryclean':
                        $harga = 20000;
                        break;
                }
            } else {
                $satuan = 'pcs';
                switch ($item['nama_barang']) {
                    case 'baju':
                        $harga = 20000;
                        break;
                }
            }


            $menu = new Menu();
            $menu->id_paket = $item['id_paket'];
            $menu->satuan = $satuan;
            $menu->nama_barang = $item['nama_barang'];
            $menu->kategori = $item['kategori'];
            $menu->harga = $harga;
            $menu->save();

        }
    }
}
