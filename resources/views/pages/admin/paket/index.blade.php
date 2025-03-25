@extends('layouts.app')

@section('title', 'Kelola paket')

@section('content')

    <table class="min-w-full table-auto border-collapse text-left">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">No</th>
            {{-- <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">Email</th> --}}
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">Paket</th>
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">Layanan</th>
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">Jenis Layanan</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach ($data as $paket)
        <tr class="border-b hover:bg-gray-100">
            <td class="px-4 py-2 text-sm text-gray-800">{{ $no++ }}</td>
            {{-- <td class="px-4 py-2 text-sm text-gray-800">{{ $paket->email }}</td> --}}
            <td class="px-4 py-2 text-sm text-gray-800">{{ $paket->nama }}</td>
            <td class="px-4 py-2 text-sm text-gray-800">{{ $paket->layanan }}</td>
            <td class="px-4 py-2 text-sm text-gray-800">{{ $paket->jenis_layanan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection