<?php

namespace App\Http\Controllers\Admin;

use App\Models\Paket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index(){
        $data = Paket::paginate(10);

        return view('pages.admin.paket.index', compact('data'));
    }

    public function create() {
        return view('pages.admin.paket.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'layanan' => 'required|string|max:255',
            'jenis_layanan' => 'required|in:cuci,setrika,cuci setrika',
        ]);

        Paket::create($request->all());

        return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil ditambahkan.');
    }

    public function edit($id) {

        $paket = Paket::findOrFail($id);
        return view('pages.admin.paket.edit', compact('paket'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'layanan' => 'required|string|max:255',
            'jenis_layanan' => 'required|in:cuci,setrika,cuci setrika',
        ]);

        $paket = Paket::findOrFail($id);
        $paket->update($request->all());

        return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil diperbarui.');
    }

    public function destroy($id) {
        $paket = Paket::findOrFail($id);
        $paket->delete();
        return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil dihapus.');
    }
}
