@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 flex flex-col items-center justify-center">
    <header class="w-full bg-blue-600 text-white text-center py-6">
        <h1 class="text-4xl font-bold">Selamat Datang di LaundryKu</h1>
        <p class="text-lg">Solusi laundry cepat, bersih, dan terpercaya</p>
    </header>

    <section class="container mx-auto text-center py-10">
        <h2 class="text-2xl font-semibold mb-4">Kenapa Memilih Kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Cepat & Efisien</h3>
                <p>Laundry selesai dalam waktu singkat dengan kualitas terbaik.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Harga Terjangkau</h3>
                <p>Harga yang kompetitif dengan pelayanan maksimal.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Antar Jemput</h3>
                <p>Layanan antar jemput laundry langsung ke rumah Anda.</p>
            </div>
        </div>
    </section>

    <section class="text-center py-10">
        <h2 class="text-2xl font-semibold mb-4">Mulai Sekarang!</h2>
        <a href="/register" class="bg-blue-600 text-white px-6 py-3 rounded-full text-lg hover:bg-blue-700 transition">
            Daftar Sekarang
        </a>
    </section>

    <footer class="w-full bg-gray-800 text-white text-center py-4 mt-10">
        <p>&copy; 2025 LaundryKu. Semua Hak Dilindungi.</p>
    </footer>
</div>
@endsection
