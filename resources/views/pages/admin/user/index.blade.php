@extends('layouts.app')

@section('title', 'Kelola User')

@section('content')

    <table class="">
        <tr>
            <td class="">No</td>
            <td class="">Email</td>
            <td class="">Nama</td>
            <td class="">No HP</td>
            <td class="">Role</td>
            <td class="">Alamat</td>
        </tr>
        <?php $no = 1 ?>
        @foreach ($data as $user)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->no_hp }}</td>
            <td>{{ $user->role }}</td>
            <td>{{ $user->alamat }}</td>
        </tr>
        @endforeach
    </table>

@endsection