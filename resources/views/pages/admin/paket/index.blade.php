@extends('layouts.app')

@section('title', 'Kelola Paket')

@section('content')
<div class="container mx-auto px-6 py-10 bg-white shadow-sm mt-10">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-semibold text-gray-800">Daftar Paket</h2>
        <a href="{{ route('admin.paket.create') }}" class="bg-gray-900 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition duration-300 flex items-center">
            <i class="fas fa-plus mr-2"></i> Tambah
        </a>
    </div>

    <div class="overflow-x-auto bg-white rounded-sm">
        <table class="w-full border-collapse rounded-lg">
            <thead class="bg-gray-100 border-b border-b-gray-500">
                <tr>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">Layanan</th>
                    <th class="px-4 py-2 text-left">Jenis Layanan</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($data as $paket)
                    <tr class="border-b hover:bg-gray-100 transition">
                        <td class="px-4 py-2 text-sm">{{ $paket->nama }}</td>
                        <td class="px-4 py-2 text-sm">{{ $paket->layanan }}</td>
                        <td class="px-4 py-2 text-sm">{{ ucfirst($paket->jenis_layanan) }}</td>
                        <td class="px-4 py-2 text-sm flex justify-center gap-3 text-center">
                            <a href="{{ route('admin.paket.edit', $paket->id_paket) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-yellow-600 transition duration-300">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.paket.destroy', $paket->id_paket) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 transition duration-300">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-2 p-2">
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection
