<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body class="font-sans text-gray-700">

    <!-- Navbar -->
    <header class="flex justify-between items-center p-4 shadow-md bg-white">
        <div class="text-lg font-bold">TOKO OBAT</div>
        <nav class="space-x-6 hidden md:block">
            <a href="#" class="hover:text-blue-600">Beranda</a>
            <a href="#" class="hover:text-blue-600">Galeri</a>
            <a href="#" class="hover:text-blue-600">Tentang Kami</a>
            <a href="#" class="hover:text-blue-600">Kontak</a>
        </nav>
        <div class="md:hidden">
            <button>Menu</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section style="background: url('{{ asset('img/banner_bg.jpeg') }}') no-repeat center center; background-size: cover;" class="text-center py-64 relative">
        <h1 class="text-2xl md:text-4xl font-bold text-blue-600">PUSKESMAS PEMBANTU DESA SELOTONG</h1>
        <p class="text-gray-600 mt-2">Layanan Kesehatan <span class="text-orange-500 font-bold">Toko Obat</span></p>
        <button class="mt-6 px-6 py-2 bg-white border border-blue-500 text-blue-500 rounded hover:bg-blue-50">Lihat Produk & Layanan Kami</button>
    </section>

    <!-- Galeri -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-2xl font-bold mb-8 text-center">Galeri</h2>
            <div class="bg-gray-100 h-64 flex items-center justify-center">Galeri Foto</div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section class="bg-gradient-to-b from-purple-700 to-purple-500 text-white py-12">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-2xl font-bold mb-4">Sekilas Tentang Kami</h2>
                <p class="mb-4">Pelayanan Kesehatan dengan profil perusahaan mini.</p>
                <button class="bg-white text-purple-700 px-4 py-2 rounded hover:bg-gray-100">Profil Perusahaan</button>
            </div>
            <div>
                <img src="/path-to-about-photo.jpg" alt="Tentang Kami" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Kontak Kami -->
    <section class="py-12 bg-gray-100">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-2xl font-bold mb-4">Kontak Kami</h2>
            <p class="mb-6">Jika Anda memiliki pertanyaan atau kritik, klik tombol di bawah ini.</p>
            <button class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Kontak Kami</button>
        </div>
    </section>

    <!-- Map -->
    <section class="h-96">
        <iframe class="w-full h-full" src="https://maps.google.com/maps?q=Selotong&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 text-center md:text-left">
            <div>
                <h3 class="font-bold mb-2">TOKO OBAT</h3>
                <p>Website Resmi Toko Obat Desa Selotong.</p>
            </div>
            <div>
                <h3 class="font-bold mb-2">Lokasi</h3>
                <p>Kelurahan Selotong, Kecamatan Sebatik, Indonesia</p>
            </div>
            <div>
                <h3 class="font-bold mb-2">Hubungi Kami</h3>
                <p>Email: info@tokoobatselotong.com</p>
            </div>
        </div>
        <div class="mt-8 text-center text-sm">&copy; 2025 Toko Obat. All rights reserved.</div>
    </footer>

</body>

</html>