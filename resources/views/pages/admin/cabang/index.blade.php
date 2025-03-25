@extends('layouts.app')

@section('title', 'Kelola Cabang')

@section('content')

    <table class="min-w-full table-auto border-collapse text-left">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">No</th>
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">id user(nama)</th>
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">Nama Cabang</th>
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach ($data as $cabang)
        <tr class="border-b hover:bg-gray-100">
            <td class="px-4 py-2 text-sm text-gray-800">{{ $no++ }}</td>
            <td class="px-4 py-2 text-sm text-gray-800">{{ $cabang->id_user }}</td>
            <td class="px-4 py-2 text-sm text-gray-800">{{ $cabang->nama_cabang }}</td>
            <td class="px-4 py-2 text-sm text-gray-800">{{ $cabang->alamat }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection