-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Agu 2019 pada 06.31
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_bahan`
--

CREATE TABLE IF NOT EXISTS `stok_bahan` (
  `kode_bahan` int(10) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga_jual` char(100) NOT NULL,
  `stok` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_bahan`
--

INSERT INTO `stok_bahan` (`kode_bahan`, `nama_bahan`, `kategori`, `satuan`, `harga_jual`, `stok`) VALUES
(101, 'Onduline 200 x 95', 'Kanopi Carport', 'Cm', '90.000', '2'),
(102, 'Onduline', 'Kanopi Besi Hollow', 'Meter', '375.000', '6'),
(103, 'Polycarbonate', 'Kanopi Besi Hollow', 'Meter', '350.000', '10'),
(104, 'Spandek / Zincalume', 'Kanopi Besi Hollow', 'Meter', '365.000', '4'),
(105, 'Alderon', 'Kanopi Besi Hollow', 'Meter', '575.000', '3'),
(106, 'Gogreen', 'Kanopi Besi Hollow', 'Meter', '325.000', '7'),
(107, 'Kain Recasens', 'Kanopi Besi Hollow', 'Meter', '685.000', '8'),
(108, 'Kaca Tempered', 'Kanopi Besi Hollow', 'Meter', '1.250.000', '2'),
(109, 'Galvalum (Full rangka)', 'Kanopi Galvalum', 'Meter', '280.000', '7'),
(110, 'Galvalum Tebal 0,75 cm (Elegan)', 'Kanopi Galvalum', 'Meter', '255.000', '9'),
(111, 'Galvalum Tebal 0,75 cm (Minimalis)', 'Kanopi Galvalum', 'Meter', '230.000', '3'),
(112, 'Bajaringan (profil c7d, reng 33) double	(Onduline)', 'Kanopi Baja Ringan', 'Meter', '370.000', '1'),
(113, 'Bajaringan (profil c7d, reng 33) double (Spandek)', 'Kanopi Baja Ringan', 'Meter', '330.000', '2'),
(114, 'Bajaringan (profil c7d, reng 33) double (Alderon)', 'Kanopi Baja Ringan', 'Meter', '550.000', '6'),
(115, 'Bajaringan (profil c7d, reng 33) double (Gogreen)', 'Kanopi Baja Ringan', 'Meter', '315.000', '5'),
(116, 'Bajaringan (profil c7d, reng 33) double (Polycarbo', 'Kanopi Baja Ringan', 'Meter', '350.000', '3'),
(117, 'Nako 12mm', 'Teralis Klasik', 'M2', '465.000', '10'),
(118, 'Nako 12mm', 'Teralis Modern', 'M2', '425.000', '10'),
(119, 'Nako 12mm', 'Teralis Geometris', 'M2', '400.000', '10'),
(120, 'Nako 12mm', 'Teralis bergaris', 'M2', '421.000', '10'),
(121, 'Nako 12mm', 'Teralis Mediteran', 'M2', '440.000', '10'),
(122, 'Nako 10mm', 'Teralis Minimalis', 'M2', '399.000', '10'),
(123, 'Nako 12mm', 'Teralis Abstrak ', 'M2', '560.000', '10'),
(124, 'Nako 12mm ', 'Teralis Minimalis', 'M2', '441.000', '10'),
(125, 'Nako 12mm ', 'Teralis Abstrak  ', 'M2', '615.000', '10'),
(126, 'Nako 16mm ', 'Teralis Minimalis ', 'M2', '523.000', '10'),
(127, 'Nako 16mm', 'Teralis Abstrak', 'M2', '712.000', '10'),
(128, 'Hollow (Vertikal) type 304', 'Railing Tangga Kaca Stainless', 'Meter', '1.350.000', '5'),
(129, 'Hollow (Horizontal)type 304 ', 'Railing Tangga Kaca Stainless', 'Meter', '1.150.000', '5'),
(130, 'Pipa (Vertikal) type 304 ', 'Railing Tangga Kaca Stainless', 'Meter', '1.100.000', '5'),
(131, 'Pipa (Horizontal) type 304', 'Railing Tangga Kaca Stainless', 'Meter', '900.000', '5'),
(132, 'Hollow + Kaca Tempered type 304', 'Railing Tangga Kaca Stainless', 'Meter', '1.750.000', '5'),
(133, 'Hollow (Vertikal) type 201', 'Railing Tangga Kaca Stainless', 'Meter', '1.250.000', '5'),
(134, 'Hollow (Horizontal) type 201 ', 'Railing Tangga Kaca Stainless', 'Meter', '1.050.000', '5'),
(135, 'Pipa (Vertikal)	type 201', 'Railing Tangga Kaca Stainless', 'Meter', '1.000.000', '5'),
(136, 'Pipa (Horizontal) type 201', 'Railing Tangga Kaca Stainless', 'Meter', '800.000', '5'),
(137, 'Kombinasi Besi Hollow', 'Pagar Besi Minimalis', 'Meter', '700.000', '4'),
(138, 'Kombinasi Besi Hollow & Besi Behel', 'Pagar Besi Minimales', 'Meter', '800.000', '4'),
(139, 'Kombinasi Besi Hollow & Plat Besi', 'Pagar Besi Minimalis', 'Meter', '700.000', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stok_bahan`
--
ALTER TABLE `stok_bahan`
 ADD PRIMARY KEY (`kode_bahan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
