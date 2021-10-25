-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Feb 2019 pada 04.33
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bekalin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `nama_anak` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bb` int(11) NOT NULL,
  `tb` int(11) NOT NULL,
  `alergi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anak`
--

INSERT INTO `anak` (`id`, `users_id`, `nama_anak`, `alamat_sekolah`, `nama_sekolah`, `kelas`, `jenis_kelamin`, `tgl_lahir`, `bb`, `tb`, `alergi`, `created_at`, `updated_at`) VALUES
(1, 3, 'adib tiga', 'sma 1', 'sma 1', 2, 'aki2', '2018-12-13', 22, 222, 'udang', NULL, '2018-12-08 19:00:31'),
(2, 3, 'sagita', 'sma n 6 solo', 'sma n 6 solo', 12, 'perempuan', '2018-12-26', 33, 231, 'udang', NULL, NULL),
(3, 3, 'joni hermana', 'gg makam keputih', 'sma 1 sukoharjo', 311, 'laki laki', '1997-02-01', 48, 163, 'udangqq', '2018-12-08 17:10:39', '2018-12-08 18:13:43'),
(4, 3, 'sagita mahatir', 'sma n 6 solo', 'sma n 6 solo', 12, 'perempuan', '2018-12-26', 33, 231, 'udang', '2018-12-08 17:48:03', '2018-12-08 17:48:03'),
(5, 3, 'failaqul haq', 'martatilah', 'sma n 1 sukoharjo', 22, 'laki laki', '1995-02-10', 45, 163, 'udang', '2018-12-08 18:22:42', '2018-12-08 18:23:12'),
(6, 3, 'siguragura', 'martatilah', 'sma n 2', 3, 'laki laki', '1995-02-10', 48, 163, 'udang', '2018-12-08 19:01:18', '2018-12-08 19:01:18'),
(7, 1, 'aa', 'gg makam keputih', 'sma 1 sukoharjo', 22, 'laki laki', '1997-02-01', 48, 163, 'udang', '2018-12-08 19:02:44', '2018-12-09 03:28:39'),
(8, 1, 'anak admin ke 2', 'gg makam keputih', 'sma n 2', 3, 'laki laki', '1995-02-10', 48, 163, 'ss', '2018-12-08 19:03:40', '2018-12-08 19:03:40'),
(9, 4, 'Adib', 'lamongan', 'sma n 1 sukoharjo', 3, 'laki laki', '1997-02-01', 48, 163, 'udang', '2018-12-08 22:58:04', '2018-12-08 22:59:41'),
(10, 4, 'sokuki', 'gg makam keputih', 'sma 1 sukoharjo', 3, 'laki laki', '1997-02-01', 48, 163, 'udang', '2018-12-08 22:58:49', '2018-12-08 22:58:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pertanyaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `users_id`, `admin_id`, `judul`, `pertanyaan`, `jenis_pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(9, 1, 1, 'Waktu Tidur', 'Bagaimana cara tidur efektif?', 'terbuka', 'Tetap tenang, be restfull', '2018-12-07 19:04:42', '2018-12-07 19:05:15'),
(10, 2, 1, 'Susah makan', 'Kenapa anak saya susah sekali makan?', 'terbuka', 'Namanya juga anak2, blm tau apa yg terbaik buat diri. bahkan yang dewasa pun :)', '2018-12-07 19:07:28', '2018-12-07 19:08:31'),
(11, 4, 1, 'Kurus', 'Kenapa saya makan banyak tetapi tetap kurus?', 'terbuka', 'Coba diperiksa lagi hormon tyroidnya ke dokter, bisa jadi karena hormon yg tidak seimbang :)', '2018-12-08 23:06:03', '2018-12-08 23:07:00'),
(12, 1, NULL, 'tertutup', 'Pertanyaan4', 'tertutup', NULL, '2018-12-09 07:04:24', '2018-12-09 07:04:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritiksaran`
--

CREATE TABLE `kritiksaran` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` varchar(2000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kritiksaran`
--

INSERT INTO `kritiksaran` (`nama`, `email`, `pesan`, `id`) VALUES
('adeb', 'andi@gmail.com', 'Mantap Gan. Tetap Semangat', 1),
('adeb', 'joko@gmail.com', 'Suka sih sama makanannya.. tapi..', 2),
('ozura', 'budi@gmail.com', 'Makanannya enak dan bergizi. sip', 3),
('adeb', 'bedu@gmail.com', 'Tambah jumlah kurirnya dong, hehe..', 4);

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2017_12_15_221242_create_admin_table', 1),
(14, '2017_12_16_105817_paket', 1),
(15, '2017_12_17_130445_create_anak_tabel', 1),
(16, '2017_12_17_133052_create_konsultasi_tabel', 1),
(17, '2017_12_17_133954_create_transaksi_tabel', 1),
(18, '2018_12_06_014934_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 2),
(1, 'App\\User', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `foto_paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sayur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lauk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_nasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_sayur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_lauk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_buah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_minum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id`, `nama_paket`, `harga_paket`, `foto_paket`, `nasi`, `sayur`, `lauk`, `buah`, `minum`, `foto_nasi`, `foto_sayur`, `foto_lauk`, `foto_buah`, `foto_minum`, `created_at`, `updated_at`) VALUES
(1, 'Mantap', 12, '1537328863.jpg', 'uduk', 'mayur', 'pauk', 'buahan', 'sosro', '1537328863.jpg', '1537328863.jpg', '1537328863.jpg', '1537328863.jpg', '1537328863.jpg', '2018-09-18 20:47:44', '2018-09-18 20:47:44'),
(2, 'Paket Hemat', 13, '1544088337.jpg', 'putih', 'bayam', 'ayam', 'naga', 'air', '1544088337.jpg', '1544088337.jpg', '1544088337.jpg', '1544088337.jpg', '1544088337.jpg', '2018-12-06 02:25:37', '2018-12-06 02:25:37');

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
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(11) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ket_pesanan` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `pukul` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengirimanfix`
--

CREATE TABLE `pengirimanfix` (
  `id` int(11) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ket_pesanan` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `pukul` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengirimanselesai`
--

CREATE TABLE `pengirimanselesai` (
  `id` int(11) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `ket_pesanan` varchar(200) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `pukul` varchar(10) NOT NULL,
  `hapus` int(11) NOT NULL,
  `kurir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_kurir', 'web', '2018-12-06 16:01:27', '2018-12-06 16:01:27'),
(2, 'view_admin', 'web', '2018-12-06 16:01:27', '2018-12-06 16:01:27'),
(3, 'view_pengguna', 'web', '2018-12-06 16:01:27', '2018-12-06 16:01:27'),
(4, 'edit_pengguna', 'web', '2018-12-06 16:01:27', '2018-12-06 16:01:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nama_rekening` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `ket_pesanan` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `pukul` varchar(10) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_paket` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sayur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lauk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_nasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_sayur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_lauk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_buah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_minum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `available` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama_paket`, `harga_paket`, `foto_paket`, `nasi`, `sayur`, `lauk`, `buah`, `minum`, `foto_nasi`, `foto_sayur`, `foto_lauk`, `foto_buah`, `foto_minum`, `created_at`, `updated_at`, `available`) VALUES
(4, 'Paket Kenyang Senang', '15000', '1544272746.jpg', 'Putih', 'Brokoli', 'Ayam Goreng', 'Pisang', 'Juice Alpukat', '1544429164.jpg', '1544429012.jpg', '1544429196.jpg', '1544429223.jpg', '1544429013.jpg', '2018-12-08 05:39:07', '2018-12-10 01:07:03', 20),
(5, 'Paket Slim Salad', '13500', '1544273075.jpg', 'Putih', 'Bayam', 'Krupuk', 'Talok', 'Air', '1544273075.jpg', '1544273076.jpg', '1544273076.jpg', '1544273076.jpg', '1544273076.jpg', '2018-12-08 05:44:36', '2018-12-08 05:59:28', 13),
(6, 'Paket Happy Meal', '17800', '1544274152.jpg', 'Kuning', 'Buncis', 'Naget', 'Jambu', 'Sosro', '1544274152.jpg', '1544274152.jpg', '1544274152.jpg', '1544274152.jpg', '1544274152.jpg', '2018-12-08 06:02:33', '2018-12-08 06:02:33', 16),
(7, 'Paket Meal Well', '12000', '1544274508.jpg', 'Merah', 'Bayam', 'Urat Sapi', 'Apel', 'Air', '1544274509.jpg', '1544274509.jpg', '1544274509.jpg', '1544274509.jpg', '1544274509.jpg', '2018-12-08 06:08:29', '2018-12-08 06:08:29', NULL),
(8, 'Paket Tombo Luwe', '16000', '1544274948.jpg', 'Arem Arem', 'Lodeh', 'Bebek Goreng', 'Kuldi', 'Juice Kurma', '1544274948.jpg', '1544274948.jpg', '1544274948.jpg', '1544274949.jpg', '1544274949.jpg', '2018-12-08 06:15:49', '2018-12-08 06:15:49', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2018-12-06 16:01:27', '2018-12-06 16:01:27'),
(2, 'User', 'web', '2018-12-06 16:01:27', '2018-12-06 16:01:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlahantar` int(50) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `no_ktp`, `no_rek`, `alamat`, `pekerjaan`, `email`, `isAdmin`, `foto`, `jumlahantar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ini admin', '123', '123456', 'sukoharjo', 'pelajar', 'admin@gmail.com', NULL, '1544235025.png', 1, '$2y$10$5Mpg7hjwvaR/4W1nGEI7y.0AnRnXCTbmSJbXWNIjkwEL4wbd6Fsjy', 'iOXSVaZayRpUTbVdGuCWa77nZJhTaO43ILvfgfikblJBESpqeH5KIWS2Dg9o', NULL, '2019-01-22 18:17:17'),
(2, 'kurir1', '123', '123', 'solo', 'guru', 'kurir1@gmail.com', NULL, '1544412872.jpg', 3, '$2y$10$PhWil6wOlLX6c2Bkmln7Re4EQW4xBzNZEEsAHybP8WMBlSO6YwFja', 'm1RCQkEvyovptst9w9soM2RJUfyV1Hkq8vGv14dQ6auj9DkqmReYUEdLMAZC', '2018-12-06 16:03:48', '2018-12-09 21:28:47'),
(3, 'kurir2', 'sma n 6 solo', 'sma n 6 solo', '12', 'perempuan', 'kurir2@gmail.com', NULL, '1544222914.jpg', 2, '$2y$10$3cn0jcEXt8HXe.RrqdYMr.DR3xS07pXqHfzkOtz6u07sYylbXowyW', 'ajTLSwSzGpSAgSerPXPdRDwvCb3t6FKwfuy2UaO1BogHDgPaoBKHp6cZH3Au', '2018-12-07 15:47:45', '2018-12-09 21:15:49'),
(4, 'user1', '123', '12219', 'surabaya', 'dosen', 'user1@gmail.com', NULL, '1544412950.jpg', NULL, '$2y$10$0Ae5nreaPSv0BQ9n7WfmAeb2K17Z1iofuhqnBVK3MBeGyWzQwpPx.', 'pyEaaO5eJhTp0BmGpeCUcWi9985ZaLmG6ZObYqwfGyMsaKKOD41B9tXi2QlT', '2018-12-08 21:54:57', '2018-12-09 20:35:50'),
(5, 'user2', '56465534', '345345345', 'sukoharjo', 'guru', 'user2@gmail.com', NULL, '1544412981.jpg', NULL, '$2y$10$28cpGZmI2XkwCjjDQeQ3/.fq2hokoYk2VUMyK3mzPZD.LWCVeG4yi', 'PVjcEUZjEPsmnmtOzvNJtwHMkxjhR04bRJqGyVa0CPcswA1hPSDCDJKuyBmT', '2018-12-09 20:25:10', '2018-12-09 20:36:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengirimanfix`
--
ALTER TABLE `pengirimanfix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengirimanselesai`
--
ALTER TABLE `pengirimanselesai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengirimanfix`
--
ALTER TABLE `pengirimanfix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengirimanselesai`
--
ALTER TABLE `pengirimanselesai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
