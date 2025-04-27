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
    <section style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('img/banner_bg.jpeg') }}') no-repeat center center; background-size: cover;" class="text-center py-64 relative">
        <h1 class="text-2xl md:text-4xl font-bold text-gray-200">{{ $informasi->nama_instansi }}</h1>
        <p class="text-gray-200 mt-2">Layanan Kesehatan <span class="text-orange-500 font-bold">Toko Obat</span></p>
    </section>

    <!-- Galeri -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-2xl font-bold mb-8 text-center">Galeri</h2>
            <div class="grid md:grid-cols-3 gap-4">
                @if($galeri->isEmpty())
                <p>Tidak ada gambar dalam galeri.</p>
                @else
                @foreach ($galeri as $g)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('storage/'.$g->foto) }}" class="w-full h-48 object-cover">
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section class="bg-gradient-to-b from-purple-700 to-purple-500 text-white py-12">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-2xl font-bold mb-4">Sekilas Tentang Kami</h2>
                <p class="mb-4 text-justify">Puskesmas Pembantu Desa Selotong terletak di Kecamatan Secanggang, Kabupaten Langkat, Sumatera Utara. Sebagai bagian dari sistem pelayanan kesehatan primer, Puskesmas Pembantu (Pustu) berfungsi untuk mendekatkan layanan kesehatan kepada masyarakat di daerah yang jauh dari pusat layanan kesehatan utama</p>
            </div>
            <div>
                <img src="{{ asset('img/about.jpg') }}" alt="Tentang Kami" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Kontak Kami -->
    <section class="py-12 bg-gray-100">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-2xl font-bold mb-4">Kontak Kami</h2>
            <p class="mb-6">Jika Anda memiliki pertanyaan atau kritik, klik tombol di bawah ini.</p>
            @if (session('success'))
            <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md max-w-md mx-auto" role="alert">
                <p class="font-bold">{{ session('success') }}</p>
            </div>
            @endif
            @if (session('error'))
            <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md max-w-md mx-auto" role="alert">
                <p class="font-bold">{{ session('error') }}</p>
            </div>
            @endif

            <form action="{{ route('kirim-pesan') }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-bold mb-2">Dari:</label>
                    <input type="text" id="nama" name="nama" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="pesan" class="block text-gray-700 font-bold mb-2">Pesan:</label>
                    <textarea id="pesan" name="pesan" rows="4" class="w-full px-3 py-2 border rounded-lg" required></textarea>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Kirim Pesan</button>
                </div>
            </form>

        </div>
    </section>

    <!-- Map -->
    <section class="h-96">
        <iframe class="w-full h-full" src="{{ $informasi->url_map }}" allowfullscreen></iframe>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 text-center md:text-left">
            <div>
                <h3 class="font-bold mb-2">TOKO OBAT</h3>
                <p>Website Resmi Toko Obat {{ $informasi->nama_instansi }}</p>
            </div>
            <div>
                <h3 class="font-bold mb-2">Lokasi</h3>
                <p>{{ $informasi->alamat }}</p>
            </div>
            <div>
                <h3 class="font-bold mb-2">Hubungi Kami</h3>
                <p>Email: {{ $informasi->email }}</p>
                <p>No Telp: {{ $informasi->no_hp }}</p>
                <p>Facebook: {{ $informasi->url_facebook }}</p>
            </div>
        </div>
        <div class="mt-8 text-center text-sm">&copy; 2025 Toko Obat. All rights reserved.</div>
    </footer>

</body>

</html>