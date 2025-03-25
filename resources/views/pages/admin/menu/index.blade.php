@extends('layouts.app')

@section('title', 'Kelola Menu')

@section('content')

    <table class="min-w-full table-auto border-collapse text-left">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">No</th>
            {{-- <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">Email</th> --}}
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">paket</th>
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">satuan</th>
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">Nama Baranng</th>
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">kategori</th>
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">harga</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach ($data as $menu)
        <tr class="border-b hover:bg-gray-100">
            <td class="px-4 py-2 text-sm text-gray-800">{{ $no++ }}</td>
            {{-- <td class="px-4 py-2 text-sm text-gray-800">{{ $menu->email }}</td> --}}
            <td class="px-4 py-2 text-sm text-gray-800">{{ $menu->id_paket }}</td>
            <td class="px-4 py-2 text-sm text-gray-800">{{ $menu->satuan }}</td>
            <td class="px-4 py-2 text-sm text-gray-800">{{ $menu->nama_barang }}</td>
            <td class="px-4 py-2 text-sm text-gray-800">{{ $menu->kategori }}</td>
            <td class="px-4 py-2 text-sm text-gray-800">{{ $menu->harga }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection