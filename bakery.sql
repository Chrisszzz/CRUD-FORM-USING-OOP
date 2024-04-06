-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2024 pada 17.46
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `roti`
--

CREATE TABLE `roti` (
  `idRoti` int(11) NOT NULL,
  `namaRoti` varchar(40) DEFAULT NULL,
  `rasaRoti` varchar(30) DEFAULT NULL,
  `diameter` varchar(20) DEFAULT NULL,
  `tinggi` varchar(20) DEFAULT NULL,
  `topping` varchar(40) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `roti`
--

INSERT INTO `roti` (`idRoti`, `namaRoti`, `rasaRoti`, `diameter`, `tinggi`, `topping`, `harga`, `gambar`) VALUES
(28, 'Bialy', 'vanilla', '15cm', '5', 'strawberry,bunga', 20, 'ROTI BIALYS_divyascookbook_com.jpg'),
(30, 'Bolillo / Pan blanco', 'coklat', '15cm', '1', 'strawberry,lilin', 20, 'ROTI BOLILLO_artimexbakery_com.jpg'),
(32, ' Breadsticks', 'coklat', '10cm', '2', 'strawberry', 21, 'ROTI GRISSINI_blog_foods_com.jpg'),
(43, 'Brioche', 'vanilla', '15cm', '2', 'strawberry,lilin', 50, 'ROTI BRIOCHE_finecooking_com.jpg'),
(44, 'Challah', 'strawberry', '15cm', '5', 'strawberry,lilin', 20, 'ROTI CHALLAH_versatilekitcehn_com.jpg'),
(50, 'Ciabatta', 'coklat', '15cm', '2', 'strawberry,bunga', 21, 'ROTI CIABATTA_resepdunia_blogspot_com.jpg'),
(51, 'Bagel', 'vanilla', '10cm', '2', 'strawberry', 20, 'ROTI BAGEL_damascusbakery_com.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `roti`
--
ALTER TABLE `roti`
  ADD PRIMARY KEY (`idRoti`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `roti`
--
ALTER TABLE `roti`
  MODIFY `idRoti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
