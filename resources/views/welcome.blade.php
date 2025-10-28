<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPEMAS - Sistem Pengaduan Masyarakat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Added Chart.js library for statistics charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'heading': ['Playfair Display', 'serif'],
                        'body': ['Source Sans Pro', 'sans-serif'],
                    },
                    colors: {
                        primary: '#1f2937',
                        secondary: '#8b5cf6',
                        accent: '#8b5cf6',
                        neutral: {
                            50: '#f1f5f9',
                            100: '#e5e7eb',
                            500: '#6b7280',
                            800: '#1f2937'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-body text-primary bg-white">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="bg-secondary p-2 rounded-lg">
                        <i class="fas fa-comments text-white text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="font-heading font-bold text-xl text-primary">SIPEMAS</h1>
                        <p class="text-sm text-neutral-500">Sistem Pengaduan Masyarakat</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#beranda" class="text-primary hover:text-secondary transition-colors font-medium">Beranda</a>
                    <a href="#fitur" class="text-primary hover:text-secondary transition-colors font-medium">Fitur</a>
                    <a href="#cara-kerja" class="text-primary hover:text-secondary transition-colors font-medium">Cara Kerja</a>
                    <a href="#tentang" class="text-primary hover:text-secondary transition-colors font-medium">Tentang</a>
                    <a href="#kontak" class="text-primary hover:text-secondary transition-colors font-medium">Kontak</a>
                    <a href="#statistik" class="text-primary hover:text-secondary transition-colors font-medium">Statistik</a>
                    <a href="{{ route('login') }}"><button class="bg-secondary text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition-colors font-medium">
                        Masuk
                    </button></a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-primary" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-4">
                    <a href="#beranda" class="text-primary hover:text-secondary transition-colors font-medium">Beranda</a>
                    <a href="#fitur" class="text-primary hover:text-secondary transition-colors font-medium">Fitur</a>
                    <a href="#cara-kerja" class="text-primary hover:text-secondary transition-colors font-medium">Cara Kerja</a>
                    <a href="#tentang" class="text-primary hover:text-secondary transition-colors font-medium">Tentang</a>
                    <a href="#kontak" class="text-primary hover:text-secondary transition-colors font-medium">Kontak</a>
                    <a href="#statistik" class="text-primary hover:text-secondary transition-colors font-medium">Statistik</a>
                    <button class="bg-secondary text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition-colors font-medium w-full">
                        Masuk
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="bg-gradient-to-br from-neutral-50 to-white py-20">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-primary mb-6 leading-tight">
                        Suara Anda <span class="text-secondary">Penting</span> untuk Perubahan
                    </h1>
                    <p class="text-lg md:text-xl text-neutral-500 mb-8 leading-relaxed">
                        Platform digital yang memudahkan masyarakat untuk menyampaikan keluhan, saran, dan aspirasi kepada pemerintah daerah dengan transparan dan efektif.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <button class="bg-secondary text-white px-8 py-4 rounded-lg hover:bg-purple-700 transition-colors font-semibold text-lg shadow-lg">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Ajukan Pengaduan
                        </button>
                        <button class="border-2 border-primary text-primary px-8 py-4 rounded-lg hover:bg-primary hover:text-white transition-colors font-semibold text-lg">
                            <i class="fas fa-play mr-2"></i>
                            Lihat Demo
                        </button>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-md mx-auto">
                        <div class="bg-secondary/10 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-megaphone text-secondary text-4xl"></i>
                        </div>
                        <h3 class="font-heading font-bold text-2xl text-primary mb-4">Mudah & Cepat</h3>
                        <p class="text-neutral-500 mb-6">Laporkan masalah di lingkungan Anda hanya dalam 3 langkah sederhana</p>
                        <div class="flex justify-center space-x-2">
                            <div class="w-3 h-3 bg-secondary rounded-full"></div>
                            <div class="w-3 h-3 bg-secondary/50 rounded-full"></div>
                            <div class="w-3 h-3 bg-secondary/30 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-primary py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">1,247</div>
                    <div class="text-neutral-300">Pengaduan Selesai</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">98%</div>
                    <div class="text-neutral-300">Tingkat Kepuasan</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">24/7</div>
                    <div class="text-neutral-300">Layanan Online</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">15</div>
                    <div class="text-neutral-300">Instansi Terkait</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="font-heading font-bold text-3xl md:text-4xl text-primary mb-4">
                    Fitur Unggulan SIPEMAS
                </h2>
                <p class="text-lg text-neutral-500 max-w-2xl mx-auto">
                    Dilengkapi dengan berbagai fitur canggih untuk memastikan pengaduan Anda ditangani dengan baik
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-neutral-50 p-8 rounded-2xl hover:shadow-lg transition-shadow">
                    <div class="bg-secondary/10 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-secondary text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary mb-4">Pelaporan Mudah</h3>
                    <p class="text-neutral-500 leading-relaxed">
                        Laporkan masalah dengan mudah melalui formulir online yang user-friendly, lengkap dengan upload foto dan lokasi GPS.
                    </p>
                </div>

                <div class="bg-neutral-50 p-8 rounded-2xl hover:shadow-lg transition-shadow">
                    <div class="bg-secondary/10 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-clock text-secondary text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary mb-4">Tracking Real-time</h3>
                    <p class="text-neutral-500 leading-relaxed">
                        Pantau status pengaduan Anda secara real-time dari pengajuan hingga penyelesaian dengan notifikasi otomatis.
                    </p>
                </div>

                <div class="bg-neutral-50 p-8 rounded-2xl hover:shadow-lg transition-shadow">
                    <div class="bg-secondary/10 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-secondary text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary mb-4">Data Aman</h3>
                    <p class="text-neutral-500 leading-relaxed">
                        Keamanan data terjamin dengan enkripsi tingkat tinggi dan perlindungan privasi sesuai standar internasional.
                    </p>
                </div>

                <div class="bg-neutral-50 p-8 rounded-2xl hover:shadow-lg transition-shadow">
                    <div class="bg-secondary/10 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-users text-secondary text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary mb-4">Multi-Channel</h3>
                    <p class="text-neutral-500 leading-relaxed">
                        Akses melalui website, aplikasi mobile, atau media sosial untuk kemudahan pelaporan dari berbagai platform.
                    </p>
                </div>

                <div class="bg-neutral-50 p-8 rounded-2xl hover:shadow-lg transition-shadow">
                    <div class="bg-secondary/10 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-secondary text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary mb-4">Analytics Dashboard</h3>
                    <p class="text-neutral-500 leading-relaxed">
                        Dashboard analitik untuk pemerintah dalam memantau tren pengaduan dan mengukur kinerja penanganan.
                    </p>
                </div>

                <div class="bg-neutral-50 p-8 rounded-2xl hover:shadow-lg transition-shadow">
                    <div class="bg-secondary/10 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-comments text-secondary text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary mb-4">Feedback System</h3>
                    <p class="text-neutral-500 leading-relaxed">
                        Sistem feedback dua arah yang memungkinkan komunikasi langsung antara masyarakat dan instansi terkait.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="cara-kerja" class="py-20 bg-neutral-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="font-heading font-bold text-3xl md:text-4xl text-primary mb-4">
                    Cara Kerja SIPEMAS
                </h2>
                <p class="text-lg text-neutral-500 max-w-2xl mx-auto">
                    Proses pengaduan yang sederhana dan transparan dalam 4 langkah mudah
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-secondary w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                        1
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary mb-4">Daftar/Masuk</h3>
                    <p class="text-neutral-500">
                        Buat akun atau masuk ke sistem menggunakan NIK dan data diri yang valid
                    </p>
                </div>

                <div class="text-center">
                    <div class="bg-secondary w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                        2
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary mb-4">Buat Laporan</h3>
                    <p class="text-neutral-500">
                        Isi formulir pengaduan dengan detail masalah, lokasi, dan lampiran foto jika diperlukan
                    </p>
                </div>

                <div class="text-center">
                    <div class="bg-secondary w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                        3
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary mb-4">Proses Verifikasi</h3>
                    <p class="text-neutral-500">
                        Tim admin memverifikasi dan meneruskan laporan ke instansi yang berwenang
                    </p>
                </div>

                <div class="text-center">
                    <div class="bg-secondary w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                        4
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary mb-4">Tindak Lanjut</h3>
                    <p class="text-neutral-500">
                        Pantau progress penanganan dan berikan feedback atas solusi yang diberikan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="font-heading font-bold text-3xl md:text-4xl text-primary mb-4">
                    Testimoni Masyarakat
                </h2>
                <p class="text-lg text-neutral-500 max-w-2xl mx-auto">
                    Pengalaman nyata dari masyarakat yang telah menggunakan SIPEMAS
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-neutral-50 p-8 rounded-2xl">
                    <div class="flex items-center mb-6">
                        <img src="/placeholder.svg?height=60&width=60" alt="Sari Dewi" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-primary">Sari Dewi</h4>
                            <p class="text-sm text-neutral-500">Warga Jakarta Selatan</p>
                        </div>
                    </div>
                    <p class="text-neutral-500 italic mb-4">
                        "Sangat membantu! Laporan saya tentang jalan rusak ditanggapi dengan cepat dan sekarang sudah diperbaiki. Terima kasih SIPEMAS!"
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="bg-neutral-50 p-8 rounded-2xl">
                    <div class="flex items-center mb-6">
                        <img src="/placeholder.svg?height=60&width=60" alt="Budi Santoso" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-primary">Budi Santoso</h4>
                            <p class="text-sm text-neutral-500">Warga Bandung</p>
                        </div>
                    </div>
                    <p class="text-neutral-500 italic mb-4">
                        "Interface yang user-friendly dan proses yang transparan. Saya bisa memantau status pengaduan saya kapan saja."
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="bg-neutral-50 p-8 rounded-2xl">
                    <div class="flex items-center mb-6">
                        <img src="/placeholder.svg?height=60&width=60" alt="Maya Putri" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-primary">Maya Putri</h4>
                            <p class="text-sm text-neutral-500">Warga Surabaya</p>
                        </div>
                    </div>
                    <p class="text-neutral-500 italic mb-4">
                        "Akhirnya ada platform yang benar-benar mendengarkan suara rakyat. Pengaduan saya tentang fasilitas umum langsung ditindaklanjuti."
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Dashboard Section with interactive charts -->
    <section id="statistik" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="font-heading font-bold text-3xl md:text-4xl text-primary mb-4">
                     Statistik Pengaduan
                </h2>
                <p class="text-lg text-neutral-500 max-w-2xl mx-auto">
                    Data real-time mengenai pengaduan masyarakat dan kinerja penanganan oleh instansi terkait
                </p>
            </div>

            <!-- Chart Grid -->
            <div class="grid lg:grid-cols-2 gap-8 mb-12">
                <!-- Monthly Reports Chart -->
                <div class="bg-neutral-50 p-6 rounded-2xl shadow-lg">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-heading font-bold text-xl text-primary">Laporan Bulanan</h3>
                        <div class="bg-secondary/10 p-2 rounded-lg">
                            <i class="fas fa-chart-line text-secondary"></i>
                        </div>
                    </div>
                    <div class="h-64">
                        <canvas id="monthlyChart"></canvas>
                    </div>
                </div>

                <!-- Category Distribution Chart -->
                <div class="bg-neutral-50 p-6 rounded-2xl shadow-lg">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-heading font-bold text-xl text-primary">Kategori Pengaduan</h3>
                        <div class="bg-secondary/10 p-2 rounded-lg">
                            <i class="fas fa-chart-pie text-secondary"></i>
                        </div>
                    </div>
                    <div class="h-64">
                        <canvas id="categoryChart"></canvas>
                    </div>
                </div>

                <!-- Status Distribution Chart -->
                <div class="bg-neutral-50 p-6 rounded-2xl shadow-lg">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-heading font-bold text-xl text-primary">Status Penanganan</h3>
                        <div class="bg-secondary/10 p-2 rounded-lg">
                            <i class="fas fa-chart-bar text-secondary"></i>
                        </div>
                    </div>
                    <div class="h-64">
                        <canvas id="statusChart"></canvas>
                    </div>
                </div>

                <!-- Response Time Chart -->
                <div class="bg-neutral-50 p-6 rounded-2xl shadow-lg">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-heading font-bold text-xl text-primary">Waktu Respon Rata-rata</h3>
                        <div class="bg-secondary/10 p-2 rounded-lg">
                            <i class="fas fa-clock text-secondary"></i>
                        </div>
                    </div>
                    <div class="h-64">
                        <canvas id="responseTimeChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Key Metrics Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-6 rounded-2xl text-white">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-white/20 p-3 rounded-lg">
                            <i class="fas fa-file-alt text-2xl"></i>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold">342</div>
                            <div class="text-blue-100 text-sm">Bulan Ini</div>
                        </div>
                    </div>
                    <h4 class="font-semibold">Total Pengaduan</h4>
                    <p class="text-blue-100 text-sm">+12% dari bulan lalu</p>
                </div>

                <div class="bg-gradient-to-br from-green-500 to-green-600 p-6 rounded-2xl text-white">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-white/20 p-3 rounded-lg">
                            <i class="fas fa-check-circle text-2xl"></i>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold">298</div>
                            <div class="text-green-100 text-sm">Selesai</div>
                        </div>
                    </div>
                    <h4 class="font-semibold">Pengaduan Selesai</h4>
                    <p class="text-green-100 text-sm">87% tingkat penyelesaian</p>
                </div>

                <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 p-6 rounded-2xl text-white">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-white/20 p-3 rounded-lg">
                            <i class="fas fa-hourglass-half text-2xl"></i>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold">2.3</div>
                            <div class="text-yellow-100 text-sm">Hari</div>
                        </div>
                    </div>
                    <h4 class="font-semibold">Rata-rata Respon</h4>
                    <p class="text-yellow-100 text-sm">-0.5 hari dari target</p>
                </div>

                <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-6 rounded-2xl text-white">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-white/20 p-3 rounded-lg">
                            <i class="fas fa-star text-2xl"></i>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold">4.8</div>
                            <div class="text-purple-100 text-sm">/ 5.0</div>
                        </div>
                    </div>
                    <h4 class="font-semibold">Rating Kepuasan</h4>
                    <p class="text-purple-100 text-sm">+0.2 dari bulan lalu</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-secondary to-purple-700">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-heading font-bold text-3xl md:text-4xl text-white mb-6">
                Mulai Sampaikan Aspirasi Anda Hari Ini
            </h2>
            <p class="text-lg text-purple-100 mb-8 max-w-2xl mx-auto">
                Bergabunglah dengan ribuan warga yang telah mempercayai SIPEMAS untuk menyampaikan keluhan dan saran mereka
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-secondary px-8 py-4 rounded-lg hover:bg-gray-100 transition-colors font-semibold text-lg shadow-lg">
                    <i class="fas fa-user-plus mr-2"></i>
                    Daftar Sekarang
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-secondary transition-colors font-semibold text-lg">
                    <i class="fas fa-download mr-2"></i>
                    Download App
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="bg-primary text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="bg-secondary p-2 rounded-lg">
                            <i class="fas fa-comments text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-heading font-bold text-xl">SIPEMAS</h3>
                            <p class="text-sm text-neutral-300">Sistem Pengaduan Masyarakat</p>
                        </div>
                    </div>
                    <p class="text-neutral-300 mb-6">
                        Platform digital yang menghubungkan masyarakat dengan pemerintah untuk menciptakan pelayanan publik yang lebih baik.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-neutral-300 hover:text-secondary transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-neutral-300 hover:text-secondary transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-neutral-300 hover:text-secondary transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-neutral-300 hover:text-secondary transition-colors">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-6">Layanan</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-neutral-300 hover:text-secondary transition-colors">Pengaduan Online</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-secondary transition-colors">Tracking Status</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-secondary transition-colors">FAQ</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-secondary transition-colors">Panduan Pengguna</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-6">Informasi</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-neutral-300 hover:text-secondary transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-secondary transition-colors">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-secondary transition-colors">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-secondary transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-6">Kontak Kami</h4>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-secondary mt-1"></i>
                            <p class="text-neutral-300">
                                Jl. Merdeka No. 123<br>
                                Jakarta Pusat 10110
                            </p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-secondary"></i>
                            <p class="text-neutral-300">+62 21 1234 5678</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-secondary"></i>
                            <p class="text-neutral-300">info@sipemas.go.id</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-neutral-700 mt-12 pt-8 text-center">
                <p class="text-neutral-300">
                    &copy; 2024 SIPEMAS - Sistem Pengaduan Masyarakat. Semua hak dilindungi undang-undang.
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-6 right-6 bg-secondary text-white p-3 rounded-full shadow-lg hover:bg-purple-700 transition-colors hidden">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Mobile Menu Toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Back to Top Button
        const backToTopButton = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('hidden');
            } else {
                backToTopButton.classList.add('hidden');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuButton = event.target.closest('button');

            if (!menuButton && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Initialize Charts when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Monthly Reports Line Chart
            const monthlyCtx = document.getElementById('monthlyChart').getContext('2d');
            new Chart(monthlyCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                    datasets: [{
                        label: 'Pengaduan Masuk',
                        data: [120, 135, 158, 142, 167, 189, 201, 178, 195, 234, 267, 342],
                        borderColor: '#8b5cf6',
                        backgroundColor: 'rgba(139, 92, 246, 0.1)',
                        tension: 0.4,
                        fill: true
                    }, {
                        label: 'Pengaduan Selesai',
                        data: [98, 125, 145, 138, 156, 175, 192, 169, 187, 221, 245, 298],
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Category Distribution Pie Chart
            const categoryCtx = document.getElementById('categoryChart').getContext('2d');
            new Chart(categoryCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Infrastruktur', 'Kebersihan', 'Keamanan', 'Pelayanan Publik', 'Lingkungan', 'Lainnya'],
                    datasets: [{
                        data: [35, 25, 15, 12, 8, 5],
                        backgroundColor: [
                            '#8b5cf6',
                            '#10b981',
                            '#f59e0b',
                            '#ef4444',
                            '#3b82f6',
                            '#6b7280'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });

            // Status Distribution Bar Chart
            const statusCtx = document.getElementById('statusChart').getContext('2d');
            new Chart(statusCtx, {
                type: 'bar',
                data: {
                    labels: ['Menunggu', 'Diproses', 'Ditindaklanjuti', 'Selesai'],
                    datasets: [{
                        label: 'Jumlah Pengaduan',
                        data: [44, 67, 89, 298],
                        backgroundColor: [
                            '#f59e0b',
                            '#3b82f6',
                            '#8b5cf6',
                            '#10b981'
                        ],
                        borderRadius: 8,
                        borderSkipped: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Response Time Chart
            const responseTimeCtx = document.getElementById('responseTimeChart').getContext('2d');
            new Chart(responseTimeCtx, {
                type: 'bar',
                data: {
                    labels: ['Dinas PU', 'Dinas Kebersihan', 'Satpol PP', 'Dinas Sosial', 'Dinas Kesehatan'],
                    datasets: [{
                        label: 'Waktu Respon (Hari)',
                        data: [2.1, 1.8, 3.2, 2.5, 1.9],
                        backgroundColor: '#8b5cf6',
                        borderRadius: 8,
                        borderSkipped: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Hari'
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
