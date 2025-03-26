@extends('layouts.app')

@section('title', 'Tambah Cabang')

@section('content')
    <div class="container mx-auto px-6 py-10">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-semibold text-gray-800">Tambah Cabang</h2>
            <a href="{{ route('admin.cabang.index') }}" class="bg-gray-900 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition duration-300 flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>
        </div>

        <div class="w-full max-w-3xl p-8 bg-white rounded-lg shadow-md">
            <form action="{{ route('admin.cabang.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-4">
                    <label for="nama_cabang" class="block text-gray-700 font-semibold mb-2">Nama Cabang</label>
                    <input type="text" name="nama_cabang" id="nama_cabang" value="{{ old('nama_cabang') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                    @error('nama_cabang')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 font-semibold mb-2">Alamat</label>
                    <textarea name="alamat" id="alamat" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- ✅ Input dengan Autocomplete --}}
                <div class="mb-4 relative">
                    <label for="user_input" class="block text-gray-700 font-semibold mb-2">Pilih User</label>
                    <input type="text" id="user_input" name="user_input" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500" autocomplete="off">
                    <input type="hidden" name="id_user" id="id_user"> 

                    {{-- Dropdown --}}
                    <ul id="dropdown" class="absolute w-full bg-white border border-gray-300 rounded-lg mt-1 shadow-md hidden">
                        @foreach ($users as $user)
                            @if ($user->role == 'pelaksana')
                                <li class="px-4 py-2 hover:bg-gray-200 cursor-pointer" data-id="{{ $user->id_user }}">{{ $user->nama }} ({{ $user->email }})</li>
                            @endif
                        @endforeach
                    </ul>
                    @error('id_user')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-gray-900 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition duration-300">
                    Simpan
                </button>
            </form>
        </div>
    </div>

    {{-- ✅ Script JavaScript --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const userInput = document.getElementById("user_input");
            const dropdown = document.getElementById("dropdown");
            const idUserInput = document.getElementById("id_user");

            // Tampilkan dropdown saat input diklik
            userInput.addEventListener("focus", function () {
                dropdown.classList.remove("hidden");
            });

            // Filter dropdown berdasarkan inputan
            userInput.addEventListener("input", function () {
                let filter = userInput.value.toLowerCase();
                let items = dropdown.getElementsByTagName("li");

                for (let i = 0; i < items.length; i++) {
                    let text = items[i].textContent.toLowerCase();
                    if (text.includes(filter)) {
                        items[i].style.display = "";
                    } else {
                        items[i].style.display = "none";
                    }
                }
            });

            // Pilih user dari dropdown
            dropdown.addEventListener("click", function (event) {
                if (event.target.tagName === "LI") {
                    userInput.value = event.target.textContent;
                    idUserInput.value = event.target.getAttribute("data-id");
                    dropdown.classList.add("hidden");
                }
            });

            // Sembunyikan dropdown jika klik di luar
            document.addEventListener("click", function (event) {
                if (!userInput.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.classList.add("hidden");
                }
            });
        });
    </script>
@endsection
