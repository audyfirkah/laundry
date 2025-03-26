@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="bg-white w-full h-96 p-10">
    <h1 class="text-3xl font-bold">Dashboard </h1>
    <div class="flex gap-4 mt-4">
        <div class="bg-blue-500 p-4 rounded-sm cursor-pointer w-xs">
            <div class="flex justify-between text-white">
                <div>
                    <h2 class="text-2xl font-bold">Paket</h2>
                    <p class="text-sm">Jumlah Paket</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold">10</h2>
                    <p class="text-sm">Jumlah Paket</p>
                </div>
            </div>
        </div>
        <div class="bg-red-500 p-4 rounded-sm cursor-pointer w-xs">
            Menu:
        </div>
        <div class="bg-yellow-500 p-4 rounded-sm cursor-pointer w-xs">
            Transaksi:
        </div>
    </div>
</div>


@endsection