-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2021 pada 08.40
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museum_pos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `edit_highlight`
--

CREATE TABLE `edit_highlight` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL DEFAULT '',
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `edit_highlight`
--

INSERT INTO `edit_highlight` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(3, 'Museum Pos Indonesia', 'Selamat Datang di Museum Pos Indonesia', '95gate museum.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edit_sejarahptt`
--

CREATE TABLE `edit_sejarahptt` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL DEFAULT '',
  `deskripsi` longtext NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `edit_sejarah_museum`
--

CREATE TABLE `edit_sejarah_museum` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL DEFAULT '',
  `deskripsi` longtext NOT NULL DEFAULT '',
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `edit_subsejarah_museum`
--

CREATE TABLE `edit_subsejarah_museum` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL DEFAULT '',
  `deskripsi` longtext NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_kritik`
--

CREATE TABLE `form_kritik` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL DEFAULT '',
  `pesan` longtext NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_narasi`
--

CREATE TABLE `form_narasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL DEFAULT '',
  `kategori` varchar(255) NOT NULL DEFAULT '',
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_museum`
--

CREATE TABLE `informasi_museum` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL DEFAULT '',
  `telfon` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi_museum`
--

INSERT INTO `informasi_museum` (`id`, `lokasi`, `email`, `instagram`, `telfon`) VALUES
(2, 'Jl. Cilaki No.73 Kota Bandung, Jawa Barat 40115', 'museumpos@posindonesia.co.id', 'museumposindonesia', '(022) 4206847');

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksi_peralatan`
--

CREATE TABLE `koleksi_peralatan` (
  `id` int(11) NOT NULL,
  `nama_koleksi` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL DEFAULT '',
  `tahun` varchar(4) NOT NULL DEFAULT '',
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksi_prangko`
--

CREATE TABLE `koleksi_prangko` (
  `id` int(11) NOT NULL,
  `nama_koleksi` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL DEFAULT '',
  `jenis` varchar(255) NOT NULL,
  `tahun` varchar(4) NOT NULL DEFAULT '',
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksi_sejarah`
--

CREATE TABLE `koleksi_sejarah` (
  `id` int(11) NOT NULL,
  `nama_koleksi` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL DEFAULT '',
  `jenis` varchar(255) NOT NULL DEFAULT '',
  `tahun` varchar(4) NOT NULL DEFAULT '',
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`username`, `password`, `id`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengelola_museum`
--

CREATE TABLE `pengelola_museum` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nippos` varchar(50) NOT NULL DEFAULT '',
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi_kunjungan`
--

CREATE TABLE `reservasi_kunjungan` (
  `nama` varchar(100) NOT NULL,
  `jumlah_pengunjung` varchar(255) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `pembelian_prangko` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `kontak` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `edit_highlight`
--
ALTER TABLE `edit_highlight`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `edit_sejarahptt`
--
ALTER TABLE `edit_sejarahptt`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `edit_sejarah_museum`
--
ALTER TABLE `edit_sejarah_museum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `edit_subsejarah_museum`
--
ALTER TABLE `edit_subsejarah_museum`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `form_kritik`
--
ALTER TABLE `form_kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `form_narasi`
--
ALTER TABLE `form_narasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi_museum`
--
ALTER TABLE `informasi_museum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `koleksi_peralatan`
--
ALTER TABLE `koleksi_peralatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `koleksi_prangko`
--
ALTER TABLE `koleksi_prangko`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `koleksi_sejarah`
--
ALTER TABLE `koleksi_sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengelola_museum`
--
ALTER TABLE `pengelola_museum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservasi_kunjungan`
--
ALTER TABLE `reservasi_kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `edit_highlight`
--
ALTER TABLE `edit_highlight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `edit_sejarahptt`
--
ALTER TABLE `edit_sejarahptt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `edit_sejarah_museum`
--
ALTER TABLE `edit_sejarah_museum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `edit_subsejarah_museum`
--
ALTER TABLE `edit_subsejarah_museum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `form_kritik`
--
ALTER TABLE `form_kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `form_narasi`
--
ALTER TABLE `form_narasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `informasi_museum`
--
ALTER TABLE `informasi_museum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `koleksi_peralatan`
--
ALTER TABLE `koleksi_peralatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `koleksi_prangko`
--
ALTER TABLE `koleksi_prangko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `koleksi_sejarah`
--
ALTER TABLE `koleksi_sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengelola_museum`
--
ALTER TABLE `pengelola_museum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `reservasi_kunjungan`
--
ALTER TABLE `reservasi_kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
