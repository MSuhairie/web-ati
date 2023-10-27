-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2023 pada 06.51
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
-- Database: `db_ati`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_29_044340_create_user_androids_table', 1),
(6, '2023_09_29_044347_create_user_webs_table', 1),
(7, '2023_09_29_044355_create_laporans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\UserAndroid', 1, 'auth_token', '2e2939685bf6715cff75f6fe08543367d9631f1ac11c9a5a8e14a4e061a1a532', '[\"*\"]', NULL, NULL, '2023-10-14 18:05:10', '2023-10-14 18:05:10'),
(2, 'App\\Models\\UserAndroid', 1, 'auth_token', 'cd209620cf7c2702803efcac13a0c97a03ab2a90770d1a6e7d49a58935af8ecc', '[\"*\"]', NULL, NULL, '2023-10-14 18:05:47', '2023-10-14 18:05:47'),
(3, 'App\\Models\\UserAndroid', 1, 'auth_token', '3fbe3822659b12e60362e1dfebecf318becad40b39c675e4ff5e21bf2f6addb4', '[\"*\"]', NULL, NULL, '2023-10-14 18:08:45', '2023-10-14 18:08:45'),
(4, 'App\\Models\\UserAndroid', 3, 'auth_token', '64370f85d9acb1d242ac2fd1f83639546b2945a961bb2ea31bb3c9fd6e3eeed4', '[\"*\"]', NULL, NULL, '2023-10-14 18:19:29', '2023-10-14 18:19:29'),
(5, 'App\\Models\\UserAndroid', 3, 'auth_token', '074b2c688be86cc694554d2ddfcc95e77bc78af852616a42d799833e8ce55ff3', '[\"*\"]', NULL, NULL, '2023-10-14 18:20:03', '2023-10-14 18:20:03'),
(6, 'App\\Models\\UserAndroid', 3, 'auth_token', 'b251f0007f71bbc65e2d5984d3ef0f3f8bf01a905cf4a92ab87a067b938b82d8', '[\"*\"]', '2023-10-14 18:32:11', NULL, '2023-10-14 18:30:02', '2023-10-14 18:32:11'),
(7, 'App\\Models\\UserAndroid', 4, 'auth_token', 'ad7d91a8cb3e1e9a7afbf4000b79812d825389c7cbec9fe8620ecbc9bcfea7b8', '[\"*\"]', NULL, NULL, '2023-10-14 18:32:22', '2023-10-14 18:32:22'),
(8, 'App\\Models\\UserAndroid', 3, 'auth_token', 'd4cb5facf703e95d2797810741858e5a5c2f899451be9b865bccef38fe69af01', '[\"*\"]', NULL, NULL, '2023-10-15 08:23:19', '2023-10-15 08:23:19'),
(9, 'App\\Models\\UserAndroid', 4, 'auth_token', '0b67060ddec395411b227775f9ef84936a0bf3f2200e1db0f3fb90fa988752ef', '[\"*\"]', NULL, NULL, '2023-10-15 08:23:33', '2023-10-15 08:23:33'),
(10, 'App\\Models\\UserAndroid', 3, 'auth_token', 'babfb78fe528be52d6143d550008b0ed3d5c41e4c1ee1ad9006dee1b73876ff4', '[\"*\"]', '2023-10-15 08:40:40', NULL, '2023-10-15 08:40:16', '2023-10-15 08:40:40'),
(11, 'App\\Models\\UserAndroid', 5, 'auth_token', '89ee0bb7e63bf881df0ce6f42b3222c8e1360ab65ab8ec64c7a1eb5891cb123b', '[\"*\"]', NULL, NULL, '2023-10-15 08:40:52', '2023-10-15 08:40:52'),
(12, 'App\\Models\\UserAndroid', 3, 'auth_token', 'f9ea0889548cec42be2f905fcf403df37a1f222650aed2c2473fd56bac3fd856', '[\"*\"]', NULL, NULL, '2023-10-16 01:55:21', '2023-10-16 01:55:21'),
(13, 'App\\Models\\UserAndroid', 4, 'auth_token', 'a0eb3229df730aa28835c618ad416198ea94b50acaac8ee482330e50e0fa8251', '[\"*\"]', '2023-10-16 02:27:18', NULL, '2023-10-16 02:16:11', '2023-10-16 02:27:18'),
(14, 'App\\Models\\UserAndroid', 3, 'auth_token', 'c9a5649271eeecd19ee1a7d92a2754c7f06e7a5472db6d82d1ebf16f2bdc07e2', '[\"*\"]', '2023-10-16 02:28:54', NULL, '2023-10-16 02:27:31', '2023-10-16 02:28:54'),
(15, 'App\\Models\\UserAndroid', 5, 'auth_token', '44d0f7db8f5d26f3ff498f79881c624fa348649deb16db3f2ad6fded1972d7b1', '[\"*\"]', '2023-10-16 02:29:12', NULL, '2023-10-16 02:29:03', '2023-10-16 02:29:12'),
(16, 'App\\Models\\UserAndroid', 3, 'auth_token', '517a713588f188cf020c177c26f9fd43b7336435a5a59f46d9fe5b979797df0b', '[\"*\"]', '2023-10-16 02:29:30', NULL, '2023-10-16 02:29:22', '2023-10-16 02:29:30'),
(17, 'App\\Models\\UserAndroid', 5, 'auth_token', '21baa7ee5ef2c68d92460701a6c960a5a8b7cd9d2d42edab6d1e9f3d4cc83499', '[\"*\"]', '2023-10-16 02:29:57', NULL, '2023-10-16 02:29:39', '2023-10-16 02:29:57'),
(18, 'App\\Models\\UserAndroid', 3, 'auth_token', '0214e5ef211a583495b454d7c856e7e5398f84f5e102fee0f7df455b993ad5b5', '[\"*\"]', '2023-10-16 02:31:55', NULL, '2023-10-16 02:31:11', '2023-10-16 02:31:55'),
(19, 'App\\Models\\UserAndroid', 6, 'auth_token', '0c3bcbb8fd2160bade7cbac5248485b9ee3119f0587975ea6332d0ad58df8812', '[\"*\"]', '2023-10-16 02:32:19', NULL, '2023-10-16 02:32:02', '2023-10-16 02:32:19'),
(20, 'App\\Models\\UserAndroid', 3, 'auth_token', 'ff21f1885df59e615874f9ff5dabefbf7866ec95652b5fc49c427ad4a8f910c5', '[\"*\"]', '2023-10-16 02:39:22', NULL, '2023-10-16 02:32:28', '2023-10-16 02:39:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id` int(20) UNSIGNED NOT NULL,
  `id_pelapor` bigint(20) NOT NULL,
  `id_teknisi` bigint(20) DEFAULT NULL,
  `type` enum('Sarana','Prasarana','Kamtibmas') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya` int(11) DEFAULT '0',
  `status` enum('sudah diterima admin','sedang dikerjakan','selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sudah diterima admin',
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_perbaikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kegiatan_perbaikan` text COLLATE utf8mb4_unicode_ci,
  `pihak_terlibat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_laporan`
--

INSERT INTO `tb_laporan` (`id`, `id_pelapor`, `id_teknisi`, `type`, `tanggal`, `waktu`, `lokasi`, `jenis`, `merk`, `biaya`, `status`, `deskripsi`, `foto`, `foto_perbaikan`, `kegiatan_perbaikan`, `pihak_terlibat`, `created_at`, `updated_at`) VALUES
(1, 4, 6, 'Sarana', '2023-10-04', '16:37:50', 'gedung a', 'AC', 'Samsung', 0, 'sudah diterima admin', 'asasasas', NULL, NULL, NULL, NULL, '2023-10-15 08:38:44', '2023-10-16 07:14:50'),
(2, 4, 5, 'Sarana', '2023-10-16', NULL, 'gedung serbaguna', 'Printer', 'samsung', 0, 'sedang dikerjakan', 'pencahayaan kurang', 'asset/permohonan/169742322841.jpg', NULL, NULL, NULL, '2023-10-16 02:27:08', '2023-10-16 02:29:28'),
(3, 4, 6, 'Sarana', '2023-10-05', '21:00:00', 'A 107', 'AC', 'AS', 3000, 'selesai', 'Ganti Filter AC', 'asset/permohonan/169742322841.jpg', NULL, NULL, 'Panason ic Service', '2023-10-16 08:20:51', '2023-10-19 08:07:58'),
(4, 4, 6, 'Sarana', '2023-10-05', '21:00:00', 'A 107sss', 'ACss', 'ASss', 3000, 'selesai', 'Ganti Filter ACssss', 'asset/permohonan/169742322841.jpg', NULL, NULL, 'Panason ic Service', '2023-10-16 08:20:51', '2023-10-19 08:07:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_android`
--

CREATE TABLE `tb_user_android` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` enum('Admin','Pelapor','Supervisor','Teknisi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_user_android`
--

INSERT INTO `tb_user_android` (`id`, `name`, `username`, `email`, `no_telp`, `password`, `roles`, `alamat`, `token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin', 'admin@gmail.com', '0088888', '$2y$10$Dfu.NNh/5psLePXTyqSUNeYhhwxIj7TXXn7oZ8tMXtAP104uCY9xW', 'Admin', 'jalan', 'erWEHMn2QOSM1YlCUU1e7W:APA91bGzgL76iVECPQLU4qDlLtdGfBqznI_kYE2PSrjM9tt5St_1KI1AA-7gkdJ5JeNix2jvzPM4vFxxLD_NxS6LK5fwPXEXxlbLog2R_X6gKraE5sEcN_GcSM62sKR0JlEu2SOh8NMI', NULL, '2023-10-16 02:32:28'),
(4, 'pelapor', 'pelapor', 'pelapor@gmail.com', '0030203', '$2y$10$P8iqSXwjnDv97qCSvmCZ2eq15wCzp9EnLV2vgODfsQu1iXXxFXiY2', 'Pelapor', 'jalan', 'erWEHMn2QOSM1YlCUU1e7W:APA91bGzgL76iVECPQLU4qDlLtdGfBqznI_kYE2PSrjM9tt5St_1KI1AA-7gkdJ5JeNix2jvzPM4vFxxLD_NxS6LK5fwPXEXxlbLog2R_X6gKraE5sEcN_GcSM62sKR0JlEu2SOh8NMI', '2023-10-14 18:32:11', '2023-10-16 02:16:11'),
(5, 'teknisi', 'teknisi', 'teknisi@mail.com', '0922121', '$2y$10$3GQzxbd3Yuq/mLzYHLYqpus/tVqCOVqMWlrMzvapiX9CH26kl6ODW', 'Teknisi', 'jalan', 'erWEHMn2QOSM1YlCUU1e7W:APA91bGzgL76iVECPQLU4qDlLtdGfBqznI_kYE2PSrjM9tt5St_1KI1AA-7gkdJ5JeNix2jvzPM4vFxxLD_NxS6LK5fwPXEXxlbLog2R_X6gKraE5sEcN_GcSM62sKR0JlEu2SOh8NMI', '2023-10-15 08:40:40', '2023-10-16 02:29:39'),
(6, 'aditya ahmad nugraha', 'ketua', 'ketua@gmail.com', '0812649444', '$2y$10$ngLkvRGw5WGHyTBXEW8lI.g9yaQONC15YiuntorhvV6FWsxL7M3jq', 'Supervisor', 'jalan', 'erWEHMn2QOSM1YlCUU1e7W:APA91bGzgL76iVECPQLU4qDlLtdGfBqznI_kYE2PSrjM9tt5St_1KI1AA-7gkdJ5JeNix2jvzPM4vFxxLD_NxS6LK5fwPXEXxlbLog2R_X6gKraE5sEcN_GcSM62sKR0JlEu2SOh8NMI', '2023-10-16 02:31:54', '2023-10-16 02:32:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_web`
--

CREATE TABLE `tb_user_web` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` enum('Manajer','Pimpinan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_user_web`
--

INSERT INTO `tb_user_web` (`id`, `name`, `email`, `password`, `roles`, `created_at`, `updated_at`) VALUES
(1, 'pimpinan', 'pimpinan@gmail.com', '$2y$10$./Wcs3iI56555ObjQ1Civ.yqtFVLcGyZ5mP3WopIIczUmPxc0EVtG', 'Pimpinan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user_web`
--
ALTER TABLE `tb_user_web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user_web`
--
ALTER TABLE `tb_user_web`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
