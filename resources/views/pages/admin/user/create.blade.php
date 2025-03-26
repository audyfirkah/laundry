@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')
    <div class="container mx-auto px-6 py-10">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-semibold text-gray-800">Tambah User</h2>
            <a href="{{ route('admin.user.index') }}" class="bg-gray-900 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition duration-300 flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>
        </div>
        <div class="w-full max-w-3xl p-8 bg-white rounded-lg shadow-md">
            <form action="{{ route('admin.user.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                    @error('nama')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="no_hp" class="block text-gray-700 font-semibold mb-2">No HP</label>
                    <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                    @error('no_hp')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                    @error('password_confirmation')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 font-semibold mb-2">Alamat</label>
                    <textarea name="alamat" id="alamat" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="role" class="block text-gray-700 font-semibold mb-2">Role</label>
                    <select name="role" id="role" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                        <option value="customer" {{ old('role') == 'customer' ? 'selected' : '' }}>Customer</option>
                        <option value="operator" {{ old('role') == 'operator' ? 'selected' : '' }}>Operator</option>
                        <option value="direktur" {{ old('role') == 'direktur' ? 'selected' : '' }}>Direktur</option>
                        <option value="pelaksana" {{ old('role') == 'pelaksana' ? 'selected' : '' }}>Pelaksana</option>
                    </select>
                    @error('role')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-gray-900 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition duration-300">
                    Simpan
                </button>
            </form>
        </div>
    </div>
@endsection
