@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 px-6 py-10 bg-white shadow-sm">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-semibold text-gray-800">Daftar Transaksii</h2>
        <a href="#" class="bg-gray-900 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition duration-300 flex items-center">
            <i class="fas fa-user-plus mr-2"></i> Tambah
        </a>
    </div>



    <div class="overflow-x-auto bg-white rounded-sm">
        <table class="w-full border-collapse rounded-lg">
            <thead class="bg-gray-100 border-b border-b-gray-500">
                <tr>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">Tanggal Order</th>
                    <th class="px-4 py-2 text-left">Paket</th>
                    <th class="px-4 py-2 text-left">Menu</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Kuantitas</th>
                    <th class="px-4 py-2 text-left">Sub Total</th>
                    <th class="px-4 py-2 text-left">Total</th>
                    <th class="px-4 py-2 text-left">Tanggal selesai</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                {{-- @dd($detail); --}}
                @foreach($detail as $tr)
                    <tr class="border-b hover:bg-gray-100 transition">
                        <td class="px-4 py-2 text-sm">{{ $data->user->nama ?? 'nama user' }}</td>
                        <td class="px-4 py-2 text-sm">{{ $data->tanggal_order ?? 'tanggal order' }}</td>
                        <td class="px-4 py-2 text-sm">{{ $detail->id_transaksi ?? 'id menu'}}</td>
                        <td class="px-4 py-2 text-sm">{{ $detail->nama_barang ?? 'nama barang' }}</td>
                        <td class="px-4 py-2 text-sm">{{ $data->status ?? 'status' }}</td>
                        <td class="px-4 py-2 text-sm">{{ $detail->kuantitas ?? 'kuantitas'}}</td>
                        <td class="px-4 py-2 text-sm">{{ $detail->sub_total ? 'Rp ' . number_format($detail->sub_total, 0, ',', '.') : '-' }}</td>
                        <td class="px-4 py-2 text-sm">{{ $data->total ?? 'total'}}</td>
                        <td class="px-4 py-2 text-sm">{{ $data->tanggal_selesai ?? 'tanggal selesai'}}</td>
                        <td class="px-4 py-2 text-sm flex justify-center gap-1">   
                            <form action="#" method="POST" class="delete-user">
                                @csrf
                                @method('DELETE') <!-- Ganti PUT menjadi DELETE -->
                                <button type="button" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 transition duration-300 flex items-center delete-btn cursor-pointer">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const deleteButtons = document.querySelectorAll(".delete-btn");
        deleteButtons.forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault();
                Swal.fire({
                    title: "Apakah kamu yakin?",
                    text: "Data ini akan dihapus secara permanen!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Ya, Hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        button.closest("form").submit();
                    }
                });
            });
        });
    });
</script>
@if(session()->has('success'))
    <script>
        Swal.fire({
            title: "Berhasil!",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        });
    </script>
@endif

@endsection
