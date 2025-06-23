<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furgetech - Solusi Teknologi Anda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .carousel {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            scroll-snap-type: x mandatory;
        }
        .carousel-item {
            flex: 0 0 auto;
            width: 100%;
            max-width: 320px;
            margin-right: 20px;
        }
        @media (min-width: 768px) {
            .carousel-item {
                width: 25%;
            }
        }
    </style>
</head>
<body class="font-poppins bg-white text-gray-800">
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white py-4 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-bold">Furgetech</a>
                <div class="flex items-center space-x-4">
                    <a href="#layanan" class="text-gray-300 hover:text-white">Layanan</a>
                    <a href="#tentang" class="text-gray-300 hover:text-white">Tentang Kami</a>
                    <a href="#testimoni" class="text-gray-300 hover:text-white">Testimoni</a>
                    <a href="#kontak" class="text-gray-300 hover:text-white">Kontak</a>
                    <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Masuk</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-cover bg-center text-white py-20" style="background-image: url('https://via.placeholder.com/1920x600?text=Furgetech+Innovation');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Teknologi Generasi Masa Depan</h2>
            <p class="text-lg md:text-xl mb-8">Menciptakan solusi inovatif untuk masa depan berbasis teknologi.</p>
            <a href="#layanan" class="bg-white text-blue-600 px-6 py-3 rounded-md font-semibold hover:bg-gray-100">Jelajahi Layanan Kami</a>
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan" class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Layanan Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold mb-4">Solusi Teknologi Inovatif</h3>
                    <p class="text-gray-600">Mengembangkan produk mutakhir untuk menyelesaikan masalah dunia nyata dan mendorong pertumbuhan ekonomi.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold mb-4">Pengembangan Talenta</h3>
                    <p class="text-gray-600">Menciptakan profesional terampil yang siap berinovasi dan memimpin di industri teknologi masa depan.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold mb-4">Acara Teknologi Kreatif</h3>
                    <p class="text-gray-600">Menyelenggarakan acara untuk memicu ide baru dan mendorong inovasi di bidang teknologi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="tentang" class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Tentang Furgetech</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="https://via.placeholder.com/600x400?text=Inovasi+Teknologi" alt="Inovasi Teknologi" class="rounded-lg shadow-md">
                </div>
                <div class="md:w-1/2 md:pl-8">
                    <h3 class="text-2xl font-semibold mb-4">Teknologi Generasi Masa Depan</h3>
                    <p class="text-gray-600 mb-4">Furgetech (FGT) adalah perusahaan IT yang berdedikasi untuk mempelopori pengembangan teknologi generasi berikutnya. Tujuan kami adalah menyelesaikan tantangan dunia nyata melalui solusi teknologi inovatif.</p>
                    <div class="mb-4">
                        <h4 class="text-xl font-semibold">Visi Kami</h4>
                        <p class="text-gray-600">Menjadi pelopor terdepan dalam membentuk masa depan teknologi.</p>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold">Misi Kami</h4>
                        <ul class="list-disc pl-5 text-gray-600">
                            <li>Menciptakan profesional terampil untuk berinovasi dan mengembangkan teknologi masa depan.</li>
                            <li>Menyelenggarakan acara kreatif dan inovatif untuk menghasilkan ide baru.</li>
                            <li>Mengembangkan produk teknologi inovatif untuk mendorong ekonomi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimoni" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12 fade-in">Apa Kata Pengguna Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                    <p class="text-gray-600 mb-4">"Furgetech memberikan solusi IT yang luar biasa untuk bisnis kami."</p>
                    <div class="flex items-center mt-4">
                        <div class="w-10 h-10 bg-gray-300 rounded-full mr-3"></div>
                        <p class="font-semibold text-gray-900">PT. Teknologi Maju</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                    <p class="text-gray-600 mb-4">"Layanan IoT-nya sangat membantu operasional kami."</p>
                    <div class="flex items-center mt-4">
                        <div class="w-10 h-10 bg-gray-300 rounded-full mr-3"></div>
                        <p class="font-semibold text-gray-900">Startup Innovate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12 fade-in">Hubungi Kami</h2>
            <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
                <form action="/contact" method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
                        <input type="text" id="name" name="name" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="5" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Furgetech</h3>
                    <p class="text-gray-400">Jl. Teknologi No.10, Bandung, Jawa Barat 40123, Indonesia</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan</h3>
                    <ul class="space-y-2">
                        <li><a href="#layanan" class="text-gray-400 hover:text-white">Layanan</a></li>
                        <li><a href="#tentang" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
                        <li><a href="#kontak" class="text-gray-400 hover:text-white">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Terhubung</h3>
                    <ul class="space-y-2">
                        <li><a href="mailto:info@furgetech.com" class="text-gray-400 hover:text-white">Email: info@furgetech.com</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">LinkedIn</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Twitter</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Lokasi Kami</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.036766223297!2d107.61734831477176!3d-6.886689995015999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e77615!2sBandung%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1634567890123" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="mt-8 text-center text-gray-400">
                <p>© 2025 Furgetech. Hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>