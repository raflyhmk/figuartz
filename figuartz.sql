-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2022 pada 10.56
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `figuartz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'raplay', 'kijolp90');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `emailPembeli` varchar(50) NOT NULL,
  `namaPembeli` char(50) NOT NULL,
  `barangDibeli` varchar(50) NOT NULL,
  `alamatPengiriman` text NOT NULL,
  `noHp` varchar(50) NOT NULL,
  `kurirDipilih` varchar(50) NOT NULL,
  `metodePembayaran` varchar(50) NOT NULL,
  `totalHarga` int(11) NOT NULL,
  `statusPemesanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `emailPembeli`, `namaPembeli`, `barangDibeli`, `alamatPengiriman`, `noHp`, `kurirDipilih`, `metodePembayaran`, `totalHarga`, `statusPemesanan`) VALUES
(9, 'rafly.hamka@gmail.com', 'muhammad rafly hamka', 'GSC POP UP PARADE FIGURE TENSURA - RIMURU', 'bekasi', '087874797824', 'Jne', 'BCA', 550000, 'diproses'),
(10, 'rafly.hamka@gmail.com', 'muhammad rafly hamka', 'FURYU TENITOL FIGURE - ELAINA', 'bekasi', '087874797824', 'J&T', 'Mandiri', 670000, 'terkirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `namaProduk` varchar(50) NOT NULL,
  `fotoProduk` varchar(50) NOT NULL,
  `series` varchar(50) NOT NULL,
  `manufacture` varchar(50) NOT NULL,
  `tinggi` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `namaProduk`, `fotoProduk`, `series`, `manufacture`, `tinggi`, `harga`, `status`) VALUES
(9, '86 - Eighty Six - Vladilena Milizé PM Figure', 'figure1.jpg', '86 - Eighty Six', 'SEGA', '19cm - 22cm', 325000, 'pre order'),
(10, 'GSC NENDOROID 1771 FGO - SABER SENJI MURAMASA', 'figure2.jpg', 'Fate Grand/Order', 'GSC', '10 cm', 740000, 'ready stock'),
(11, 'Metal Build Gundam Devise Exia', 'figure3.jpg', 'Metal Build Gundam', 'TAMASHII NATIONS', '20 cm', 1300000, 'ready stock'),
(12, 'Gantungan Kunci Meito Shushui Roronoa Zoro', 'figure4.jfif', 'one piece', 'Maximono', '22 cm', 100000, 'ready stock'),
(13, 'PVC FIGURE BNHA - NEJIRE HADO HERO: SUITS VER', 'nejire.jpg', 'Boku no Hero Academia', 'BELLFINE', 'TBA', 2740000, 'pre order'),
(14, 'GSC NENDOROID BLUELOCK - ISAGI YOICHI', 'isagi.jpg', 'Blue Lock', 'GSC', '10 cm', 650000, 'pre order'),
(15, 'GSC POP UP PARADE FIGURE TENSURA - RIMURU', 'rimuru.jpg', 'Tensei shitara Slime Datta Ken', 'GSC', '16 cm', 530000, 'ready stock'),
(16, 'BANDAI MG 1/100 DESTINY GUNDAM', 'gundam.jfif', 'Mobile Suit Gundam', 'Bandai', '1/1000', 720000, 'pre order'),
(17, 'FURYU TENITOL FIGURE - ELAINA', 'elaina.jpg', 'Majo no Tabitabi', 'FURYU', 'TBA', 650000, 'ready stock'),
(18, 'PVC 1/7 FIGURE RE: ZERO - EMILIA: TEA PARTY VER', 'emilia.jpg', 'Re:Zero', 'Kadokawa', '20 cm', 2150000, 'pre order');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `password`) VALUES
(2, 'rafly hamka', 'rafly.hamka@gmail.com', 'testing');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
