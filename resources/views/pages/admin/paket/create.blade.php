@extends('layouts.app')

@section('title', 'Tambah Paket')

@section('content')
    <div class="container mx-auto px-6 py-10">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-semibold text-gray-800">Tambah Paket</h2>
            <a href="{{ route('admin.paket.index') }}" class="bg-gray-900 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition duration-300 flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>
        </div>

        <div class="w-full max-w-3xl p-8 bg-white rounded-lg shadow-md">
            <form action="{{ route('admin.paket.store') }}" method="POST">
                @csrf
                @method('POST')

                {{-- Nama Paket --}}
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Paket</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                    @error('nama')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Layanan --}}
                <div class="mb-4">
                    <label for="layanan" class="block text-gray-700 font-semibold mb-2">Layanan</label>
                    <input type="text" name="layanan" id="layanan" value="{{ old('layanan') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                    @error('layanan')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Jenis Layanan (Dropdown) --}}
                <div class="mb-4 relative">
                    <label for="jenis_layanan" class="block text-gray-700 font-semibold mb-2">Jenis Layanan</label>
                    <select name="jenis_layanan" id="jenis_layanan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                        <option value="">Pilih Jenis Layanan</option>
                        <option value="cuci">Cuci</option>
                        <option value="setrika">Setrika</option>
                        <option value="cuci setrika">Cuci Setrika</option>
                    </select>
                    @error('jenis_layanan')
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
