<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Menu;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){

        $data = Transaksi::with('user', 'cabang')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('pages.admin.transaksi.index', compact('data'));
    }

    public function detail($id){
        $data = Transaksi::with('user', 'detailTransaksi.menu.paket')
        ->findOrFail($id);

        // dd($data->user->role);
        
        

        // dd($data->detailTransaksi->menu->paket);
        $detail = DetailTransaksi::with('menu')
        ->where('id_transaksi', $id)
        ->get();

        foreach ($data->detailTransaksi as $detail) {
            $menu = Menu::with('detailTransaksi', 'paket')
            ->where('id_menu', $detail->id_menu)
            ->get();
        };

        foreach ($menu as $menu) {
            $paket = $menu->paket;
        }
        // dd($menu);
        


        

        // dd($detail->menu);

        return view('pages.admin.transaksi.detail', compact('data',  'detail', 'menu', 'paket'));
    }
}
