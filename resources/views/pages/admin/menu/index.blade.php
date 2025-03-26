@extends('layouts.app')

@section('title', 'Kelola Menu')

@section('content')
<div class="container mx-auto px-6 py-10 bg-white shadow-sm mt-10">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-semibold text-gray-800">Daftar Menu</h2>
        <a href="{{ route('admin.menu.create') }}" class="bg-gray-900 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition duration-300 flex items-center">
            <i class="fas fa-plus mr-2"></i> Tambah
        </a>
    </div>

    <div class="overflow-x-auto bg-white rounded-sm">
        <table class="w-full border-collapse rounded-lg">
            <thead class="bg-gray-100 border-b border-b-gray-500">
                <tr>
                    <th class="px-4 py-2 text-left">Paket</th>
                    <th class="px-4 py-2 text-left">Nama Barang</th>
                    <th class="px-4 py-2 text-left">Kategori</th>
                    <th class="px-4 py-2 text-left">Satuan</th>
                    <th class="px-4 py-2 text-left">Harga</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($data as $menu)
                    <tr class="border-b hover:bg-gray-100 transition">
                        <td class="px-4 py-2 text-sm">{{ $menu->paket->nama }}</td>
                        <td class="px-4 py-2 text-sm">{{ $menu->nama_barang }}</td>
                        <td class="px-4 py-2 text-sm">{{ $menu->kategori }}</td>
                        <td class="px-4 py-2 text-sm">{{ $menu->satuan }}</td>
                        <td class="px-4 py-2 text-sm">Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                        <td class="px-4 py-2 text-sm flex justify-center gap-3 text-center">
                            <a href="{{ route('admin.menu.edit', $menu->id_menu) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-yellow-600 transition duration-300 flex items-center cursor-pointer">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.menu.destroy', $menu->id_menu) }}" method="POST" class="delete-menu">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="delete-btn-menu bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 transition duration-300 flex items-center cursor-pointer">
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

{{-- ✅ SweetAlert untuk konfirmasi hapus --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".delete-btn-menu").forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault();
                let form = this.closest("form");

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
                        form.submit();
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
