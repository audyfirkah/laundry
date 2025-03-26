@extends('layouts.app')

@section('title', 'Edit Menu')

@section('content')
    <div class="container mx-auto px-6 py-10">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-semibold text-gray-800">Edit Menu</h2>
            <a href="{{ route('admin.menu.index') }}" class="bg-gray-900 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition duration-300 flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>
        </div>

        <div class="w-full max-w-3xl p-8 bg-white rounded-lg shadow-md">
            <form action="{{ route('admin.menu.update', $menu->id_menu) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="id_paket" class="block text-gray-700 font-semibold mb-2">Pilih Paket</label>
                    <select name="id_paket" id="id_paket" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                        <option value="">-- Pilih Paket --</option>
                        @foreach ($pakets as $paket)
                            <option value="{{ $paket->id_paket }}" {{ old('id_paket', $menu->id_paket) == $paket->id_paket ? 'selected' : '' }}>
                                {{ $paket->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_paket')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="nama_barang" class="block text-gray-700 font-semibold mb-2">Nama Barang</label>
                    <select name="nama_barang" id="nama_barang" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                        <option value="">-- Pilih Barang --</option>
                        <option value="baju" {{ old('nama_barang', $menu->nama_barang) == 'baju' ? 'selected' : '' }}>Baju</option>
                        <option value="karpet" {{ old('nama_barang', $menu->nama_barang) == 'karpet' ? 'selected' : '' }}>Karpet</option>
                        <option value="boneka" {{ old('nama_barang', $menu->nama_barang) == 'boneka' ? 'selected' : '' }}>Boneka</option>
                    </select>
                    @error('nama_barang')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="kategori" class="block text-gray-700 font-semibold mb-2">Kategori</label>
                    <select name="kategori" id="kategori" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="besar" {{ old('kategori', $menu->kategori) == 'besar' ? 'selected' : '' }}>Besar</option>
                        <option value="sedang" {{ old('kategori', $menu->kategori) == 'sedang' ? 'selected' : '' }}>Sedang</option>
                        <option value="kecil" {{ old('kategori', $menu->kategori) == 'kecil' ? 'selected' : '' }}>Kecil</option>
                        <option value="dryclean" {{ old('kategori', $menu->kategori) == 'dryclean' ? 'selected' : '' }}>Dryclean</option>
                    </select>
                    @error('kategori')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="satuan" class="block text-gray-700 font-semibold mb-2">Satuan</label>
                    <select name="satuan" id="satuan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                        <option value="">-- Pilih Satuan per --</option>
                        <option value="pcs" {{ old('satuan', $menu->satuan) == 'pcs' ? 'selected' : '' }}>pcs</option>
                        <option value="kg" {{ old('satuan', $menu->satuan) == 'kg' ? 'selected' : '' }}>kg</option>
                    </select>
                    @error('satuan')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="harga" class="block text-gray-700 font-semibold mb-2">Harga</label>
                    <input type="number" name="harga" id="harga" value="{{ old('harga', $menu->harga) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                    @error('harga')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-gray-900 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition duration-300">
                    Perbarui
                </button>
            </form>
        </div>
    </div>
@endsection
