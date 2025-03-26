<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;
use App\Models\User;

class CabangController extends Controller
{
    public function index()
    {
        $data = Cabang::with('user')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('pages.admin.cabang.index', compact('data'));
    }

    public function create()
    {
        $users = User::all();
        return view('pages.admin.cabang.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|exists:users,id_user',
            'nama_cabang' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        Cabang::create($request->all());

        return redirect()->route('admin.cabang.index')->with('success', 'Cabang berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $users = User::all();
        $cabang = Cabang::findOrFail($id);
        return view('pages.admin.cabang.edit', compact('cabang', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_user' => 'required|exists:users,id_user',
            'nama_cabang' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        $cabang = Cabang::findOrFail($id);
        $cabang->update($request->all());

        return redirect()->route('admin.cabang.index')->with('success', 'Cabang berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $cabang = Cabang::findOrFail($id);
        $cabang->delete();

        return redirect()->route('admin.cabang.index')->with('success', 'Cabang berhasil dihapus.');
    }
}
