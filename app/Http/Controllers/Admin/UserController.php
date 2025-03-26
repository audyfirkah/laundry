<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $data = User::paginate(10);

        return view('pages.admin.user.index', compact('data'));
    }

    public function create()
    {
        return view('pages.admin.user.create');
    }

    public function store(Request $request)
    {
        // Validasi Data
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'no_hp' => 'required|string|max:15',
            'password' => 'required|min:8|confirmed',
            'alamat' => 'required|string',
            'role' => 'required|in:customer,operator,direktur,pelaksana',
        ]);

        // Simpan User ke Database
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'role' => $request->role,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.user.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id); // Ambil data user berdasarkan ID
        return view('pages.admin.user.edit', compact('user')); // Kirim data ke view
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id . ',id_user',
            'no_hp' => 'required|string|max:15',
            'role' => 'required|in:admin,user',
            'alamat' => 'nullable|string',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'role' => $request->role,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('admin.user.index')->with('success', 'User berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user.index')->with('success', 'User berhasil dihapus!');
    }


}
