@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-10">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Edit User</h2>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('admin.user.update', $user->id_user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700">Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $user->nama) }}" class="w-full px-4 py-2 border rounded-lg">
                @error('nama') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full px-4 py-2 border rounded-lg">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">No HP</label>
                <input type="text" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}" class="w-full px-4 py-2 border rounded-lg">
                @error('no_hp') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Role</label>
                <select name="role" class="w-full px-4 py-2 border rounded-lg">
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                </select>
                @error('role') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Alamat</label>
                <textarea name="alamat" class="w-full px-4 py-2 border rounded-lg">{{ old('alamat', $user->alamat) }}</textarea>
                @error('alamat') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-blue-700">
                    Simpan
                </button>
                <a href="{{ route('admin.user.index') }}" class="bg-gray-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
