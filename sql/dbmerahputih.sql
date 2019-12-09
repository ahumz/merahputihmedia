-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2019 pada 11.23
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmerahputih`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_27_022422_create_siswa_table', 1),
(4, '2019_11_27_023434_create_siswas_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `kecamatan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `username`, `password`, `tgl_lahir`, `alamat`, `kecamatan`, `telpon`, `email`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Lastri Herlambang', 'lastri', '123123', '1990-09-14', 'Jl. Gunung Sahari No. 18,Jakarta', 'Pademangan', '08796789789', 'lastri@a.com', 'foto_siswa/X4rgpBQEl5koMttIFgumca85bCxDyr6lDA5hjPq2.jpeg', '2019-11-29 00:43:33', '2019-11-29 00:43:33'),
(2, 'Rini Lestari', 'rini', '123123', '1998-03-09', 'Jl. Bendungan Hilir NO. 114 A\r\nBendungan Hilir Jakarta Pusat.', 'Tanahabang', '08367283168', 'rini@a.com', 'foto_siswa/1TvQAvarQjBgDpM1fiHSVm2vAZV4Om6mXSz2VoCw.jpeg', '2019-11-29 00:46:11', '2019-11-29 00:46:11'),
(3, 'Bintang Panjaitan', 'bintang', '123123', '1999-05-19', 'Jl. Cut Meutia Raya,\r\nBekasi Town Square Blok i Nomor 19.', 'Margahayu', '08281271831', 'bintang@a.com', 'foto_siswa/t98kYlxmDcuCDGpMhXNGts5rJUIo4XaRRdYMIw39.jpeg', '2019-11-29 00:47:56', '2019-11-29 00:47:56'),
(4, 'Abidin Budi', 'abidin', '123123', '1992-01-23', 'Blok E no 5-6 Jalan Raya Cisauk - Lapan, Sampora, Cisauk, Sampora, Cisauk, Tangerang, Banten 15345', 'Cisauk', '0863281219', 'abidin@x.com', 'foto_siswa/MjbYBlffi6J9VkDF1U3BVs6bgvI4y1XIts82tXZI.jpeg', '2019-11-29 00:49:30', '2019-11-29 00:49:30'),
(5, 'Abraham Hanum', 'abraham', '123123', '2003-07-14', 'Jl. BSD Raya Bar Sampora, Cisauk, Tangerang,\r\nBanten 15345', 'Cisauk', '08648364278', 'abraham@x.com', 'foto_siswa/vLIbONQqRtQZRsU1EtWjzTI5LpiYWWICGqaxexPb.jpeg', '2019-11-29 00:50:41', '2019-11-29 00:50:41'),
(6, 'Arini Afifah', 'airini', '123123', '1998-01-23', 'Jl. Raya Bojongsari No.30, Bojongsari Baru, Bojongsari, Kota Depok, Jawa Barat 16516', 'Bojongsari', '086778436729', 'arini@c.com', 'foto_siswa/RNi0beK4KCW2mzelU7Kn8hOFCW9zmamTzc4itNzq.jpeg', '2019-11-29 00:51:57', '2019-11-29 00:51:57'),
(7, 'Biru Cantika', 'biru', '123123', '1999-05-24', 'Jl. Pasir Kaliki Blok F 35 - 37 No 27 - 29, Kb. Jeruk, Cicendo, Kota Bandung, Jawa Barat 40172', 'Cicendo', '0867975675', 'biru@v.com', 'foto_siswa/05Y6fwddV22rz5yODasbqMqapnQnE99y0uERBIo5.jpeg', '2019-11-29 00:57:30', '2019-11-29 00:57:30'),
(8, 'Lina Arinda', 'lina', '123123', '2002-02-05', 'Jl. Malabar 1 No.11, Babakan, Bogor Tengah, Kota Bogor, Jawa Barat 16128', 'Babakan', '086890876789', 'lina@q.com', 'foto_siswa/r4hXk9mepipHr8t10uXnZLWRZotMRNbGCNcnTtUq.jpeg', '2019-11-29 00:59:24', '2019-11-29 00:59:24'),
(9, 'Lulu Merdeka', 'lulu', '123123', '2002-10-18', 'Jl. DR. Cipto Mangunkusumo No.26, Kota Cirebon, Jawa Barat 45131', 'Cirebon', '08753789789', 'lulu@b.com', '', '2019-11-29 01:01:00', '2019-11-29 20:55:19'),
(10, 'Rustam Hidayat', 'rustam', '123123', '1991-04-08', 'Jl. Pangeran tirtayasa no. 88, komplek Ruko Tirtayasa blok D1 dan D2, Sukabumi Indah kec. sukabumi, Bandar Lampung', 'sukabumi', '08798934627', 'rustam@f.com', '', '2019-11-29 01:04:52', '2019-11-29 20:55:38'),
(11, 'Ayu Lintang', 'ayu', 'domolover1!', '1996-02-16', 'jl anggrek', 'Palmerah', '08813834066', 'kojaysingga@gmail.com', NULL, '2019-12-02 01:19:15', '2019-12-02 02:34:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
