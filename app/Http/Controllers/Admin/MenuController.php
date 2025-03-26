<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paket;

class MenuController extends Controller
{
    public function index() {
        $data = Menu::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('pages.admin.menu.index', compact('data'));
    }

    public function create()
    {
        $pakets = Paket::all();
        return view('pages.admin.menu.create', compact('pakets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_paket' => 'required',
            'satuan' => 'required',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
        ]);

        $menu = new Menu();
        $menu->id_paket = $request->id_paket;
        $menu->satuan = $request->satuan;
        $menu->nama_barang = $request->nama_barang;
        $menu->kategori = $request->kategori;
        $menu->harga = $request->harga;
        $menu->save();

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $pakets = Paket::all();
        return view('pages.admin.menu.edit', compact('menu', 'pakets'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_paket' => 'required',
            'satuan' => 'required',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
        ]);

        $menu = Menu::findOrFail($id);
        $menu->id_paket = $request->id_paket;
        $menu->satuan = $request->satuan;
        $menu->nama_barang = $request->nama_barang;
        $menu->kategori = $request->kategori;
        $menu->harga = $request->harga;
        $menu->save();

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil dihapus.');
    }
}
