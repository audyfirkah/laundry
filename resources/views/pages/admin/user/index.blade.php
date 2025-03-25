@extends('layouts.app')

@section('title', 'Kelola User')

@section('content')

    <table class="min-w-full table-auto border-collapse text-left">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">No</th>
            {{-- <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">Email</th> --}}
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">Nama</th>
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">No HP</th>
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">Role</th>
            <th class="px-4 py-2 border-b text-sm font-semibold text-gray-900">Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach ($data as $user)
        <tr class="border-b hover:bg-gray-100">
            <td class="px-4 py-2 text-sm text-gray-800">{{ $no++ }}</td>
            {{-- <td class="px-4 py-2 text-sm text-gray-800">{{ $user->email }}</td> --}}
            <td class="px-4 py-2 text-sm text-gray-800">{{ $user->nama }}</td>
            <td class="px-4 py-2 text-sm text-gray-800">{{ $user->no_hp }}</td>
            <td class="px-4 py-2 text-sm text-gray-800">{{ $user->role }}</td>
            <td class="px-4 py-2 text-sm text-gray-800">{{ $user->alamat }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection