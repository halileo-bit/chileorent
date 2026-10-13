<?php
/**
 * ==============================================================================
 * WEEK 5: IMPLEMENTASI PHP PROSEDURAL (SERVER-SIDE RENDERING / SSR)
 * ==============================================================================
 * File        : index.php
 * Mata Kuliah : Pemrograman Web
 * Tema        : Chileorent (Marketplace Sewa & Solusi Alih Fungsi Kostum Cosplay)
 * 
 * Capaian Praktikum:
 * - Task 01: Create PHP Page (variabel sesuai tema ya)
 * - Task 02: Process Data with PHP (array multidimensi, conditional status/badge, loop penomoran)
 * - Task 03: Build Dynamic Server-Side Content (SSR dynamic grid cards Program Prioritas melanjutkan struktur Week 4)
 * ==============================================================================
 */

// ==============================================================================
// TASK 01: CREATE PHP PAGE (VARIABEL SESUAI TEMA)
// ==============================================================================

// 1. Identitas & Konten Tema Platform Chileorent
$nama_aplikasi        = "Chileorent";
$tagline              = "Marketplace Sewa & Solusi Alih Fungsi Kostum Cosplay Terpercaya";
$slogan_hero          = "Temukan Kostum Impianmu atau Putar Kembali Aset Kostum yang Menumpuk";
$deskripsi_platform   = "Chileorent menghadirkan ekosistem sewa kostum cosplay terverifikasi, perlindungan rekening bersama (escrow) otomatis, kurasi mutu fisik (Grade A/B/C), serta alur alih fungsi kostum dengan toleransi tawar-menawar terkontrol 0% hingga 8%.";
$kontak_email         = "bantuan@chileorent.com";
$kontak_wa            = "+62 812-3456-7890";
$tahun_aktif          = date('Y');

// 2. Metadata Tugas Akademik (Pemrograman Web)
$mata_kuliah          = "Pemrograman Web";
$semester             = "Semester 5";
$modul_praktikum      = "Week 5 - PHP Prosedural";
$judul_tugas          = "Implementasi PHP Prosedural (Server-Side Rendering)";

// 3. Statistik & Nilai Keunggulan Platform
$stat_keamanan        = "100% Aman";
$stat_keamanan_label  = "Sistem Escrow Otomatis";
$stat_nego            = "0% - 8%";
$stat_nego_label      = "Batas Nego Terkendali";
$stat_kurasi          = "Terverifikasi";
$stat_kurasi_label    = "Quality Control Grade Fisik";
$stat_sirkular        = "Anti-Nimbun";
$stat_sirkular_label  = "Reuse & Monetize Kostum";
$total_transaksi      = "1.240+";
$tingkat_kepuasan     = "99.4%";
$mitra_rental_aktif   = "85+";

// 4. Menu Navigasi Sesuai Tema
$menu_navigasi = [
    ['label' => 'Beranda (SSR PHP)', 'url' => 'index.php', 'active' => true],
    ['label' => 'Katalog Sewa', 'url' => 'catalog.html', 'active' => false],
    ['label' => 'Alih Fungsi Kostum (Nego 0-8%)', 'url' => 'alih-fungsi.html', 'active' => false],
    ['label' => 'Dashboard Rental', 'url' => 'dashboard-rental.html', 'active' => false]
];


// ==============================================================================
// TASK 02: PROCESS DATA WITH PHP (ARRAY MULTIDIMENSI, CONDITIONAL STATUS/BADGE, LOOP PENOMORAN)
// ==============================================================================

// 1. Array Multidimensi: Data Program Prioritas Kostum Cosplay (Melanjutkan Struktur Data Week 4)
$program_prioritas = [
    [
        'id'          => 'c1',
        'judul'       => "Frieren - Beyond Journey's End",
        'karakter'    => 'Frieren',
        'seri'        => 'Sousou no Frieren',
        'kategori'    => 'Anime',
        'ukuran'      => 'M',
        'gender'      => 'Wanita',
        'harga'       => 120000,
        'grade'       => 'A',
        'rating'      => 4.9,
        'jumlah_sewa' => 42,
        'status'      => 'Tersedia', // Tersedia, Disewa, Booking, Perawatan
        'gambar'      => 'https://images.unsplash.com/photo-1578632767115-351597cf2477?w=600&auto=format&fit=crop&q=80',
        'deskripsi'   => 'Jubah putih list emas, wig silver styled rapi, tongkat sihir 140cm, anting ruby & telinga elf.',
        'pemilik'     => 'Kurogane Rental (Mitra Terverifikasi)',
        'kelengkapan' => ['Wig Silver', 'Tongkat Staff', 'Anting Ruby', 'Telinga Elf']
    ],
    [
        'id'          => 'c2',
        'judul'       => 'Raiden Shogun (Baal) Archon Uwowo',
        'karakter'    => 'Raiden Shogun',
        'seri'        => 'Genshin Impact',
        'kategori'    => 'Game',
        'ukuran'      => 'S',
        'gender'      => 'Wanita',
        'harga'       => 150000,
        'grade'       => 'A',
        'rating'      => 5.0,
        'jumlah_sewa' => 56,
        'status'      => 'Tersedia',
        'gambar'      => 'https://images.unsplash.com/photo-1534447677768-be436bb09401?w=600&auto=format&fit=crop&q=80',
        'deskripsi'   => 'Kimono ungu gradasi premium, wig kepang panjang, naginata polearm prop, armor bahu emas.',
        'pemilik'     => 'Kurogane Rental (Mitra Terverifikasi)',
        'kelengkapan' => ['Kimono Ungu', 'Naginata Prop', 'Armor Bahu', 'Boots Kulit']
    ],
    [
        'id'          => 'c3',
        'judul'       => 'Kafka - Stellaron Hunter Fullset',
        'karakter'    => 'Kafka',
        'seri'        => 'Honkai: Star Rail',
        'kategori'    => 'Game',
        'ukuran'      => 'M',
        'gender'      => 'Wanita',
        'harga'       => 140000,
        'grade'       => 'B',
        'rating'      => 4.8,
        'jumlah_sewa' => 29,
        'status'      => 'Disewa',
        'gambar'      => 'https://images.unsplash.com/photo-1563245372-f21724e3856d?w=600&auto=format&fit=crop&q=80',
        'deskripsi'   => 'Coat beludru bordir laba-laba, wig maroon rapi, kacamata hitam retro & boots kulit size 38.',
        'pemilik'     => 'Sakura Wardrobe (Titip Sewa Mitra)',
        'kelengkapan' => ['Coat Beludru', 'Wig Maroon', 'Kacamata Gelap', 'Boots Heels']
    ],
    [
        'id'          => 'c4',
        'judul'       => 'Satoru Gojo - Jujutsu High Uniform',
        'karakter'    => 'Satoru Gojo',
        'seri'        => 'Jujutsu Kaisen',
        'kategori'    => 'Anime',
        'ukuran'      => 'L',
        'gender'      => 'Pria',
        'harga'       => 110000,
        'grade'       => 'A',
        'rating'      => 4.9,
        'jumlah_sewa' => 38,
        'status'      => 'Tersedia',
        'gambar'      => 'https://images.unsplash.com/photo-1509198397868-475647b2a1e5?w=600&auto=format&fit=crop&q=80',
        'deskripsi'   => 'Seragam kancing high collar hitam pekat, wig putih spike, penutup mata kain & kacamata bulat.',
        'pemilik'     => 'Kurogane Rental (Mitra Terverifikasi)',
        'kelengkapan' => ['Seragam High Collar', 'Blindfold Hitam', 'Wig Spike Putih', 'Kacamata Bulat']
    ],
    [
        'id'          => 'c5',
        'judul'       => 'Houshou Marine - Ahoy Captain Outfit',
        'karakter'    => 'Houshou Marine',
        'seri'        => 'Hololive Production',
        'kategori'    => 'VTuber',
        'ukuran'      => 'S',
        'gender'      => 'Wanita',
        'harga'       => 135000,
        'grade'       => 'A',
        'rating'      => 4.9,
        'jumlah_sewa' => 34,
        'status'      => 'Booking',
        'gambar'      => 'https://images.unsplash.com/photo-1541701494587-cb58502866ab?w=600&auto=format&fit=crop&q=80',
        'deskripsi'   => 'Topi bajak laut bordir tengkorak, wig twintail merah maroon, eyepatch hati, dasi pita & boots 37.',
        'pemilik'     => 'Kurogane Rental (Mitra Terverifikasi)',
        'kelengkapan' => ['Topi Pirate', 'Wig Twintail Maroon', 'Eyepatch Hati', 'Boots Size 37']
    ],
    [
        'id'          => 'c6',
        'judul'       => 'Kamen Rider Geats Magnum Boost Form',
        'karakter'    => 'Kamen Rider Geats',
        'seri'        => 'Kamen Rider Geats',
        'kategori'    => 'Tokusatsu',
        'ukuran'      => 'XL',
        'gender'      => 'Pria',
        'harga'       => 250000,
        'grade'       => 'A',
        'rating'      => 5.0,
        'jumlah_sewa' => 19,
        'status'      => 'Tersedia',
        'gambar'      => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?w=600&auto=format&fit=crop&q=80',
        'deskripsi'   => 'Armor dada & helm EVA foam lapis resin cat airbrush glossy, belt desire driver bersuara & magnum shooter 40X.',
        'pemilik'     => 'Toko Toku Bandung (Mitra Akuisisi)',
        'kelengkapan' => ['Helm Fullset Resin', 'Armor Dada', 'Desire Driver Sound', 'Magnum Shooter 40X']
    ],
    [
        'id'          => 'c7',
        'judul'       => 'Hu Tao - 77th Director Wangsheng',
        'karakter'    => 'Hu Tao',
        'seri'        => 'Genshin Impact',
        'kategori'    => 'Game',
        'ukuran'      => 'S',
        'gender'      => 'Wanita',
        'harga'       => 130000,
        'grade'       => 'B',
        'rating'      => 4.9,
        'jumlah_sewa' => 45,
        'status'      => 'Tersedia',
        'gambar'      => 'https://images.unsplash.com/photo-1534447677768-be436bb09401?w=600&auto=format&fit=crop&q=80',
        'deskripsi'   => 'Coat coklat bordir emas, topi bunga plum, wig kuncir twintail panjang, cincin lengkap & tombak Staff of Homa.',
        'pemilik'     => 'Kurogane Rental (Mitra Terverifikasi)',
        'kelengkapan' => ['Topi Plum Blossom', 'Wig Twintail Coklat', 'Staff of Homa', 'Set 10 Cincin']
    ],
    [
        'id'          => 'c8',
        'judul'       => 'Anya Forger - Eden Academy Uniform',
        'karakter'    => 'Anya Forger',
        'seri'        => 'Spy x Family',
        'kategori'    => 'Anime',
        'ukuran'      => 'All Size',
        'gender'      => 'Wanita',
        'harga'       => 95000,
        'grade'       => 'C',
        'rating'      => 4.8,
        'jumlah_sewa' => 37,
        'status'      => 'Perawatan',
        'gambar'      => 'https://images.unsplash.com/photo-1578632767115-351597cf2477?w=600&auto=format&fit=crop&q=80',
        'deskripsi'   => 'Dress seragam sekolah Eden dengan ornamen emas, wig pink sebahu dengan hiasan kepala kerucut & boneka Chimera.',
        'pemilik'     => 'Sakura Wardrobe (Titip Sewa Mitra)',
        'kelengkapan' => ['Dress Eden Academy', 'Wig Pink Sebahu', 'Hiasan Kepala Kerucut', 'Boneka Chimera']
    ]
];

// 2. Fungsi Prosedural Format Rupiah
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

// 3. Fungsi Prosedural Conditional Status/Badge Ketersediaan
function renderStatusBadge($status) {
    if ($status === 'Tersedia') {
        return '<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-300 shadow-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    Siap Sewa
                </span>';
    } elseif ($status === 'Disewa') {
        return '<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800 border border-amber-300 shadow-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                    Sedang Disewa
                </span>';
    } elseif ($status === 'Booking') {
        return '<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-sky-100 text-sky-800 border border-sky-300 shadow-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                    Dibooking (DP)
                </span>';
    } else {
        return '<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-rose-100 text-rose-800 border border-rose-300 shadow-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                    Dicuci / Perbaikan
                </span>';
    }
}

// 4. Fungsi Prosedural Conditional Grade Badge
function renderGradeBadge($grade) {
    if ($grade === 'A') {
        return '<span class="px-2 py-0.5 text-[11px] font-bold bg-emerald-600 text-white rounded-md shadow">Grade A</span>';
    } elseif ($grade === 'B') {
        return '<span class="px-2 py-0.5 text-[11px] font-bold bg-blue-600 text-white rounded-md shadow">Grade B</span>';
    } else {
        return '<span class="px-2 py-0.5 text-[11px] font-bold bg-amber-600 text-white rounded-md shadow">Grade C</span>';
    }
}
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nama_aplikasi ?> - <?= $tagline ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <!-- BANNER INFORMASI MODUL TUGAS WEEK 5 (PHP PROSEDURAL) -->
    <aside class="bg-indigo-900 text-indigo-100 text-xs py-2 px-4 border-b border-indigo-800">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-2">
            <div class="flex items-center gap-2">
                <span class="px-2 py-0.5 rounded bg-indigo-700 font-mono text-[10px] font-bold text-white uppercase">PHP SSR Active</span>
                <span><strong><?= $mata_kuliah ?></strong> &bull; <?= $modul_praktikum ?> &bull; <?= $semester ?></span>
            </div>
            <div class="flex items-center gap-3">
                <span>Task 01: Variabel &bull; Task 02: Array & Conditional &bull; Task 03: SSR Grid</span>
                <a href="index.html" class="underline text-indigo-200 hover:text-white transition">Lihat Versi HTML &rarr;</a>
            </div>
        </div>
    </aside>

    <!-- HEADER & NAVIGASI UTAMA -->
    <header id="header-utama" class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex items-center justify-between gap-4">
            <!-- Logo & Slogan Tema -->
            <div class="flex items-center gap-3 shrink-0">
                <a href="index.php" class="text-2xl font-bold text-indigo-600 hover:text-indigo-700 transition whitespace-nowrap">
                    <h1><?= $nama_aplikasi ?></h1>
                </a>
                <p class="hidden xl:block text-xs text-gray-500 border-l border-gray-300 pl-3 whitespace-nowrap">
                    <?= $tagline ?>
                </p>
            </div>

            <!-- Navigasi Desktop (Loop Array Navigasi Task 01) -->
            <nav id="navigasi-utama" aria-label="Navigasi Utama" class="hidden md:flex items-center">
                <ul class="flex items-center gap-2 lg:gap-4 text-sm font-medium text-gray-600">
                    <?php foreach ($menu_navigasi as $nav): ?>
                        <li>
                            <a href="<?= $nav['url'] ?>" 
                               class="px-2 py-1 <?= $nav['active'] ? 'text-indigo-600 font-semibold border-b-2 border-indigo-600' : 'hover:text-indigo-600 transition' ?> whitespace-nowrap">
                                <?= $nav['label'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <!-- Aksi Auth Desktop -->
            <div id="desktop-auth-actions" class="hidden md:flex items-center gap-2 shrink-0">
                <a href="login.html" class="px-3 py-1.5 text-sm font-medium text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100 transition whitespace-nowrap">Masuk</a>
                <a href="register.html" class="px-3 py-1.5 text-sm font-medium text-white bg-gray-800 hover:bg-gray-900 rounded-lg transition whitespace-nowrap">Daftar Akun</a>
            </div>

            <!-- Kontrol Mobile: Tombol Hamburger -->
            <div class="flex items-center gap-2 md:hidden">
                <button type="button" id="mobile-menu-btn" aria-label="Buka Menu Navigasi" aria-expanded="false" aria-controls="mobile-dropdown-menu" class="p-2 text-gray-700 hover:text-indigo-600 hover:bg-gray-100 rounded-xl transition focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <svg id="hamburger-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="hamburger-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu Dropdown Mobile -->
        <div id="mobile-dropdown-menu" class="hidden md:hidden border-t border-gray-100 bg-white/95 backdrop-blur-md px-4 pt-3 pb-4 space-y-3 shadow-lg">
            <nav aria-label="Navigasi Mobile">
                <ul class="flex flex-col space-y-1 text-sm font-medium text-gray-700">
                    <?php foreach ($menu_navigasi as $nav): ?>
                        <li>
                            <a href="<?= $nav['url'] ?>" 
                               class="flex items-center gap-2 px-3 py-2 rounded-lg <?= $nav['active'] ? 'bg-indigo-50 text-indigo-600 font-semibold' : 'hover:bg-gray-100 hover:text-indigo-600 transition' ?>">
                                <?= $nav['label'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <div id="mobile-auth-actions" class="pt-2 border-t border-gray-100">
                <div class="grid grid-cols-2 gap-2 text-center text-xs font-semibold">
                    <a href="login.html" class="py-2.5 px-3 border border-gray-300 rounded-xl text-gray-700 hover:bg-gray-50 transition">Masuk</a>
                    <a href="register.html" class="py-2.5 px-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl shadow-sm transition">Daftar Akun</a>
                </div>
            </div>
        </div>
    </header>

    <!-- KONTEN UTAMA -->
    <main id="konten-utama">

        <!-- HERO SECTION (MENGGUNAKAN VARIABEL TASK 01) -->
        <section id="hero" class="bg-gradient-to-br from-indigo-900 via-indigo-800 to-slate-900 text-white py-16 lg:py-20" aria-labelledby="hero-title">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <span class="inline-block px-3 py-1 text-xs font-semibold tracking-wide bg-indigo-500/20 text-indigo-200 border border-indigo-400/30 rounded-full">
                        <?= $tagline ?>
                    </span>
                    <h2 id="hero-title" class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight">
                        <?= $slogan_hero ?>
                    </h2>
                    <p class="text-indigo-100 text-base sm:text-lg leading-relaxed">
                        <?= $deskripsi_platform ?>
                    </p>

                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="catalog.html" class="px-6 py-3 text-sm font-semibold text-indigo-900 bg-white hover:bg-indigo-50 rounded-lg shadow transition">Cari Kostum Cosplay</a>
                        <a href="alih-fungsi.html" class="px-6 py-3 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg border border-indigo-400/30 shadow transition">Mulai Alih Fungsi Kostum</a>
                    </div>

                    <!-- Statistik Platform (Variabel Task 01) -->
                    <ul class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-6 border-t border-indigo-700/60">
                        <div>
                            <strong class="block text-xl font-bold text-white"><?= $stat_keamanan ?></strong>
                            <span class="text-xs text-indigo-200"><?= $stat_keamanan_label ?></span>
                        </div>
                        <div>
                            <strong class="block text-xl font-bold text-white"><?= $stat_nego ?></strong>
                            <span class="text-xs text-indigo-200"><?= $stat_nego_label ?></span>
                        </div>
                        <div>
                            <strong class="block text-xl font-bold text-white"><?= $stat_kurasi ?></strong>
                            <span class="text-xs text-indigo-200"><?= $stat_kurasi_label ?></span>
                        </div>
                        <div>
                            <strong class="block text-xl font-bold text-white"><?= $stat_sirkular ?></strong>
                            <span class="text-xs text-indigo-200"><?= $stat_sirkular_label ?></span>
                        </div>
                    </ul>
                </div>

                <div class="flex justify-center">
                    <figure class="bg-indigo-950/50 p-2 rounded-2xl border border-indigo-700/50 shadow-2xl overflow-hidden w-full max-w-lg">
                        <img src="https://placehold.co/600x400/2b2d42/ffffff?text=Chileorent+Cosplay+Marketplace" alt="Ilustrasi Platform Chileorent" class="w-full h-auto rounded-xl object-cover">
                        <figcaption class="p-3 text-center text-xs text-indigo-300">
                            Solusi marketplace sewa terverifikasi, konsinyasi titip sewa, dan akuisisi alih fungsi kostum cosplay.
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>

        <!-- ==============================================================================
             TASK 03: BUILD DYNAMIC SERVER-SIDE CONTENT
             (SSR dynamic grid cards Program Prioritas melanjutkan struktur Week 4)
             ============================================================================== -->
        <section id="program-prioritas" class="py-16 bg-gray-50 border-t border-gray-200" aria-labelledby="prioritas-title">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- HEADER SEKSI DENGAN INDIKATOR SSR TUGAS WEEK 5 -->
                <header class="text-center max-w-3xl mx-auto mb-12">
                    <div class="flex items-center justify-center gap-2 mb-2">
                        <span class="text-xs font-bold tracking-wider text-indigo-600 uppercase">Program Prioritas</span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200 shadow-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            Server-Side Rendering (SSR) &bull; <?= count($program_prioritas) ?> Item Dimuat via PHP
                        </span>
                    </div>
                    <h2 id="prioritas-title" class="text-3xl font-extrabold text-gray-900 sm:text-4xl mt-1">
                        Kostum Cosplay Program Prioritas Siap Sewa
                    </h2>
                    <p class="text-gray-600 mt-2 text-sm sm:text-base">
                        Data dimuat dan dirender secara dinamis di server (SSR) menggunakan PHP prosedural, perulangan <code>foreach</code> dengan penomoran urut otomatis, serta conditional badge ketersediaan.
                    </p>
                </header>

                <!-- DYNAMIC GRID CARDS (SERVER-SIDE RENDERING MELANJUTKAN STRUKTUR WEEK 4) -->
                <div id="ssr-costumes-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php 
                    // TASK 02: LOOP PENOMORAN OTOMATIS
                    $nomor_urut = 1; 
                    foreach ($program_prioritas as $kostum): 
                    ?>
                        <article class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col justify-between">
                            <div>
                                <!-- Image Container & Conditional Badges (Task 02) -->
                                <div class="relative h-60 bg-gray-100 overflow-hidden">
                                    <img src="<?= htmlspecialchars($kostum['gambar']) ?>" 
                                         alt="<?= htmlspecialchars($kostum['judul']) ?>" 
                                         class="w-full h-full object-cover hover:scale-105 transition duration-300"
                                         onerror="this.src='https://placehold.co/400x500/3d5a80/ffffff?text=<?= urlencode($kostum['karakter']) ?>'">
                                    
                                    <!-- Nomor Urut (Loop Penomoran Task 02) -->
                                    <span class="absolute top-3 left-3 px-2 py-0.5 text-[11px] font-black bg-gray-900/90 text-white rounded-md backdrop-blur-sm shadow border border-gray-700">
                                        No. #<?= $nomor_urut ?>
                                    </span>

                                    <!-- Grade & Size Badge (Conditional Task 02) -->
                                    <div class="absolute top-3 right-3 flex flex-col items-end gap-1">
                                        <?= renderGradeBadge($kostum['grade']) ?>
                                        <span class="px-2 py-0.5 text-[10px] font-semibold bg-white/95 text-gray-800 rounded-md backdrop-blur-sm shadow">
                                            Size <?= htmlspecialchars($kostum['ukuran']) ?>
                                        </span>
                                    </div>

                                    <!-- Conditional Status Badge (Task 02) -->
                                    <div class="absolute bottom-3 left-3">
                                        <?= renderStatusBadge($kostum['status']) ?>
                                    </div>
                                </div>

                                <!-- Card Body: Data Kostum Dinamis (Task 03) -->
                                <div class="p-4 space-y-2">
                                    <div class="flex items-center justify-between text-[11px] font-bold">
                                        <span class="text-indigo-600 uppercase tracking-wide"><?= htmlspecialchars($kostum['seri']) ?></span>
                                        <span class="text-gray-400 font-medium"><?= htmlspecialchars($kostum['kategori']) ?></span>
                                    </div>

                                    <h3 class="font-bold text-gray-900 text-sm leading-snug line-clamp-1 hover:text-indigo-600 transition">
                                        <a href="detail-kostum.html?id=<?= urlencode($kostum['id']) ?>">
                                            <?= htmlspecialchars($kostum['judul']) ?>
                                        </a>
                                    </h3>

                                    <div class="flex items-center gap-1.5 text-xs text-amber-500">
                                        <span>★</span>
                                        <strong class="text-gray-800"><?= number_format($kostum['rating'], 1) ?></strong>
                                        <span class="text-gray-400 font-normal">(<?= $kostum['jumlah_sewa'] ?>x disewa)</span>
                                    </div>

                                    <!-- Kelengkapan Aksesoris (Array Processing Task 02) -->
                                    <div class="flex flex-wrap gap-1 text-[10px] text-gray-600 pt-1">
                                        <?php foreach ($kostum['kelengkapan'] as $item): ?>
                                            <span class="px-1.5 py-0.5 bg-gray-100 rounded text-gray-700 font-medium">✓ <?= htmlspecialchars($item) ?></span>
                                        <?php endforeach; ?>
                                    </div>

                                    <p class="text-[11px] text-gray-500 line-clamp-2 pt-1 border-t border-gray-100">
                                        <?= htmlspecialchars($kostum['deskripsi']) ?>
                                    </p>
                                </div>
                            </div>

                            <!-- Card Footer: Harga & Aksi Booking Sewa -->
                            <div class="p-4 pt-0 border-t border-gray-100 flex items-center justify-between mt-3">
                                <div>
                                    <span class="text-[10px] text-gray-400 block font-medium">Sewa 3 Hari:</span>
                                    <strong class="text-base font-bold text-indigo-600"><?= formatRupiah($kostum['harga']) ?></strong>
                                </div>
                                <a href="detail-kostum.html?id=<?= urlencode($kostum['id']) ?>" 
                                   class="px-3 py-1.5 text-xs font-semibold text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg transition shadow-sm">
                                    Detail & Sewa &rarr;
                                </a>
                            </div>
                        </article>
                    <?php 
                        $nomor_urut++; 
                    endforeach; 
                    ?>
                </div>

                <!-- DOKUMENTASI RINGKAS CAPAIAN TUGAS WEEK 5 -->
                <div class="mt-12 p-6 bg-white border border-gray-200 rounded-2xl shadow-sm">
                    <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider mb-4 flex items-center gap-2">
                        <span>📋</span> Rangkuman Capaian Tugas Week 5 - PHP Prosedural (SSR)
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-xs">
                        <div class="p-3 bg-indigo-50 border border-indigo-100 rounded-xl">
                            <strong class="block text-indigo-900 font-bold mb-1">✓ Task 01: Create PHP Page</strong>
                            <p class="text-indigo-700">File <code>index.php</code> dibuat dengan variabel tema lengkap: <code>$nama_aplikasi</code>, <code>$tagline</code>, <code>$slogan_hero</code>, <code>$deskripsi_platform</code>, dan array <code>$menu_navigasi</code>.</p>
                        </div>
                        <div class="p-3 bg-emerald-50 border border-emerald-100 rounded-xl">
                            <strong class="block text-emerald-900 font-bold mb-1">✓ Task 02: Process Data with PHP</strong>
                            <p class="text-emerald-700">Array multidimensi <code>$program_prioritas</code> (8 item kostum), conditional badge status (<code>renderStatusBadge()</code>) & grade (<code>renderGradeBadge()</code>), serta loop penomoran urut <code>$nomor_urut</code>.</p>
                        </div>
                        <div class="p-3 bg-purple-50 border border-purple-100 rounded-xl">
                            <strong class="block text-purple-900 font-bold mb-1">✓ Task 03: SSR Dynamic Grid Cards</strong>
                            <p class="text-purple-700">Rendering konten dinamis di server (SSR) menghasilkan kartu kostum responsif 4 kolom, melanjutkan struktur Week 4 dengan visualisasi kartu terverifikasi.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <a href="catalog.html" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-indigo-600 bg-white border border-indigo-200 rounded-xl hover:bg-indigo-50 shadow-sm transition">
                        <span>Jelajahi Seluruh Katalog Marketplace Sewa</span>
                        <span>&rarr;</span>
                    </a>
                </div>

            </div>
        </section>

        <!-- SEKSI 6 PILAR SOLUSI CERDAS CHILEORENT -->
        <section id="fitur-unggulan" class="py-16 bg-white" aria-labelledby="fitur-title">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <header class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-xs font-bold tracking-wider text-indigo-600 uppercase">Fitur Unggulan</span>
                    <h2 id="fitur-title" class="text-3xl font-extrabold text-gray-900 sm:text-4xl mt-1">6 Pilar Solusi Cerdas <?= $nama_aplikasi ?></h2>
                    <p class="text-gray-600 mt-2">Mendukung ekosistem cosplay yang berkelanjutan, aman bagi penyewa, dan menguntungkan bagi pemilik kostum.</p>
                </header>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <article class="p-6 bg-gray-50 border border-gray-200 rounded-xl hover:shadow-md transition">
                        <div class="text-3xl mb-4">🎭</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">1. Marketplace Sewa Kostum Cosplay</h3>
                        <p class="text-sm text-gray-600 mb-4">Katalog lengkap dari anime, game, VTuber, hingga serial favorit. Dilengkapi kalender ketersediaan jadwal, pilihan ukuran akurat, dan rincian kelengkapan (wig, props, aksesoris).</p>
                        <a href="catalog.html" class="inline-flex items-center text-sm font-semibold text-indigo-600 hover:text-indigo-800">Jelajahi Katalog &rarr;</a>
                    </article>

                    <article class="p-6 bg-gray-50 border border-gray-200 rounded-xl hover:shadow-md transition">
                        <div class="text-3xl mb-4">🤝</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">2. Sistem Nego Fleksibel (Pilihan 0% - 8%)</h3>
                        <p class="text-sm text-gray-600 mb-4">Fitur tawar-menawar harga pada proses alih fungsi kostum. Pemilik bebas memilih mengaktifkan opsi nego dengan rentang toleransi 0% hingga maksimal 8% agar nilai aset tetap terlindungi.</p>
                        <a href="alih-fungsi.html#fitur-nego" class="inline-flex items-center text-sm font-semibold text-indigo-600 hover:text-indigo-800">Pelajari Sistem Nego &rarr;</a>
                    </article>

                    <article class="p-6 bg-gray-50 border border-gray-200 rounded-xl hover:shadow-md transition">
                        <div class="text-3xl mb-4">🛡️</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">3. Sistem Escrow & Fitur DP Booking</h3>
                        <p class="text-sm text-gray-600 mb-4">Uang sewa, opsi DP (30%/50% untuk kunci tanggal acara), serta deposit jaminan (opsional khusus pertama kali rental) ditampung secara aman oleh sistem Escrow hingga kostum diterima dengan baik.</p>
                        <a href="#alur-escrow" class="inline-flex items-center text-sm font-semibold text-indigo-600 hover:text-indigo-800">Cara Kerja Escrow & DP &rarr;</a>
                    </article>

                    <article class="p-6 bg-gray-50 border border-gray-200 rounded-xl hover:shadow-md transition">
                        <div class="text-3xl mb-4">🔄</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">4. Sistem Alur Alih Fungsi Produk</h3>
                        <p class="text-sm text-gray-600 mb-4">Solusi bagi pemilik rental yang menutup usahanya atau cosplayer yang ingin kostumnya bermanfaat: Titip Sewa (Konsinyasi bagi hasil) atau Akuisisi Langsung oleh Chileorent dengan batas nego 0-8%.</p>
                        <a href="alih-fungsi.html" class="inline-flex items-center text-sm font-semibold text-indigo-600 hover:text-indigo-800">Form Alih Fungsi &rarr;</a>
                    </article>

                    <article class="p-6 bg-gray-50 border border-gray-200 rounded-xl hover:shadow-md transition">
                        <div class="text-3xl mb-4">✅</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">5. Pusat Verifikasi & Jaminan Keamanan</h3>
                        <p class="text-sm text-gray-600 mb-4">Standarisasi kondisi kostum (Grade A, B, atau C) melalui kurasi transparan. Dilengkapi verifikasi identitas (KYC) pengguna dan perlindungan deposit terhadap risiko kerusakan.</p>
                        <a href="#pusat-verifikasi" class="inline-flex items-center text-sm font-semibold text-indigo-600 hover:text-indigo-800">Standar Verifikasi &rarr;</a>
                    </article>

                    <article class="p-6 bg-gray-50 border border-gray-200 rounded-xl hover:shadow-md transition">
                        <div class="text-3xl mb-4">📊</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">6. Sistem Manajemen Rental Pintar</h3>
                        <p class="text-sm text-gray-600 mb-4">Dashboard terpadu bagi pemilik rental dan mitra kostum: lacak jadwal sewa, status pengiriman dan pengembalian, log pencucian/laundry, hingga pencairan pendapatan.</p>
                        <a href="dashboard-rental.html" class="inline-flex items-center text-sm font-semibold text-indigo-600 hover:text-indigo-800">Buka Dashboard &rarr;</a>
                    </article>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER (MENGGUNAKAN VARIABEL TASK 01) -->
    <footer id="footer-utama" class="bg-gray-900 text-gray-400 py-12 border-t border-gray-800 text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="space-y-3">
                <h3 class="text-lg font-bold text-white"><?= $nama_aplikasi ?></h3>
                <p class="text-xs leading-relaxed"><?= $tagline ?></p>
                <p class="text-xs text-gray-500">&copy; <?= $tahun_aktif ?> <?= $nama_aplikasi ?> Indonesia. Hak Cipta Dilindungi.</p>
                <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-gray-800 text-[11px] font-mono text-indigo-300 border border-gray-700">
                    <span><?= $modul_praktikum ?></span> &bull; <span><?= $semester ?></span>
                </div>
            </div>

            <div>
                <h4 class="text-sm font-bold text-white mb-3">Navigasi Utama</h4>
                <ul class="space-y-2 text-xs">
                    <?php foreach ($menu_navigasi as $nav): ?>
                        <li><a href="<?= $nav['url'] ?>" class="hover:text-white transition"><?= $nav['label'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-bold text-white mb-3">Layanan & Keamanan</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="catalog.html" class="hover:text-white transition">Katalog Sewa Kostum</a></li>
                    <li><a href="alih-fungsi.html" class="hover:text-white transition">Sistem Nego Alih Fungsi (0-8%)</a></li>
                    <li><a href="dashboard-rental.html" class="hover:text-white transition">Dashboard Manajemen Rental</a></li>
                    <li><a href="index.html" class="hover:text-white transition">Versi Static Web (Week 1 - 4)</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-bold text-white mb-3">Kontak & Bantuan</h4>
                <address class="not-italic text-xs space-y-2">
                    <p>Email: <?= $kontak_email ?></p>
                    <p>WhatsApp: <?= $kontak_wa ?></p>
                    <p>Komunitas Cosplay Indonesia</p>
                </address>
            </div>
        </div>
    </footer>

    <!-- SCRIPT RESPONSIF UNTUK MENU HAMBURGER MOBILE -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-dropdown-menu');
            const iconOpen = document.getElementById('hamburger-icon-open');
            const iconClose = document.getElementById('hamburger-icon-close');

            if (btn && menu) {
                btn.addEventListener('click', () => {
                    const isExpanded = btn.getAttribute('aria-expanded') === 'true';
                    btn.setAttribute('aria-expanded', !isExpanded);
                    menu.classList.toggle('hidden');
                    if (iconOpen && iconClose) {
                        iconOpen.classList.toggle('hidden');
                        iconClose.classList.toggle('hidden');
                    }
                });
            }
        });
    </script>
</body>
</html>
