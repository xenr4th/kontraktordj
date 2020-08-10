-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 10:36 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(3) NOT NULL,
  `nama_customer` varchar(20) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `no_hp`, `alamat`, `kategori`) VALUES
(1, 'Labibul', '08100000001', 'Tegal', 'Personal'),
(5, 'Parah', '0810000001', 'Tegal', 'Personal'),
(6, 'Ilham', '081000000001', 'Tegal', 'Personal'),
(7, 'Alucard', '081000001', 'London', 'Personal'),
(8, 'Miya', '081000002', 'Belgia', 'Personal'),
(9, 'Layla', '081000003', 'Inggris', 'Personal'),
(10, 'Bane', '081000004', 'Ukraina', 'Personal'),
(11, 'Saber', '081000005', 'America', 'Personal'),
(12, 'Clint', '081000006', 'Texas', 'Personal'),
(13, 'Clint', '081000006', 'Texas', 'Personal'),
(14, 'Lesley', '081000006', 'Belgia', 'Personal'),
(15, 'Lylia', '081000001', 'Forest Hall', 'Personal'),
(16, 'Hanzo', '081000009', 'Jepang', 'Personal'),
(17, 'Jawhead', '08000010', 'Norwegia', 'Personal'),
(18, 'Yani<3', '081000011', 'Kalimati', 'Kekasih Hati'),
(19, 'Granger', '081000001', 'Hill', 'Personal'),
(20, 'Edi', '0810000001', 'Tegal', 'Persona1'),
(22, 'Abdul', '0810000013', 'Tegal', 'Personal'),
(23, 'Hani', '08100000014', 'Tegal', 'Personal');

-- --------------------------------------------------------

--
-- Table structure for table `po_bahan`
--

CREATE TABLE `po_bahan` (
  `id_pb` int(11) NOT NULL,
  `kode_bahan` int(11) NOT NULL,
  `id_po` int(11) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `jumlah_pb` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_bahan`
--

INSERT INTO `po_bahan` (`id_pb`, `kode_bahan`, `id_po`, `nama_bahan`, `jumlah_pb`, `satuan`, `harga`) VALUES
(11, 101, 3, 'Onduline 200 x 95', '10', 'Cm', ''),
(12, 102, 3, 'Onduline', '10', 'Meter', ''),
(13, 103, 3, 'Polycarbonate', '10', 'Meter', ''),
(14, 104, 3, 'Spandek / Zincalume', '10', 'Meter', ''),
(15, 105, 3, 'Alderon', '10', 'Meter', ''),
(18, 101, 4, 'Onduline 200 x 95', '12', 'Cm', '90000'),
(19, 102, 4, 'Onduline', '2', 'Meter', '375000'),
(20, 109, 6, 'Galvalum (Full rangka)', '1', 'Meter', '280000'),
(21, 117, 6, 'Nako 12mm', '1', 'M2', '465000'),
(22, 102, 8, 'Onduline', '1', 'Meter', '375000'),
(23, 102, 8, 'Onduline', '1', 'Meter', '375000'),
(24, 101, 8, 'Onduline 200 x 95', '20', 'Cm', '90000'),
(25, 101, 10, 'Onduline 200 x 95', '2', 'Cm', '90000'),
(26, 103, 10, 'Polycarbonate', '2', 'Meter', '350000'),
(27, 105, 10, 'Alderon', '3', 'Meter', '575000'),
(28, 102, 11, 'Onduline', '1', 'Meter', '375000'),
(29, 109, 11, 'Galvalum (Full rangka)', '1', 'Meter', '280000'),
(30, 110, 11, 'Galvalum Tebal 0,75 cm (Elegan)', '1', 'Meter', '255000'),
(31, 112, 12, 'Bajaringan (profil c7d, reng 33) double	(Onduline)', '7', 'Meter', '370000'),
(32, 116, 12, 'Bajaringan (profil c7d, reng 33) double (Polycarbo', '8', 'Meter', '350000'),
(33, 113, 12, 'Bajaringan (profil c7d, reng 33) double (Spandek)', '4', 'Meter', '330000'),
(34, 101, 13, 'Onduline 200 x 95', '10', 'Cm', '90000'),
(35, 102, 13, 'Onduline', '5', 'Meter', '375000'),
(36, 103, 13, 'Polycarbonate', '2', 'Meter', '350000'),
(37, 101, 14, 'Onduline 200 x 95', '1', 'Cm', '90000'),
(38, 102, 14, 'Onduline', '1', 'Meter', '375000'),
(39, 103, 14, 'Polycarbonate', '1', 'Meter', '350000'),
(40, 101, 15, 'Onduline 200 x 95', '1', 'Cm', '90000'),
(41, 101, 16, 'Onduline 200 x 95', '1', 'Cm', '90000'),
(42, 102, 16, 'Onduline', '1', 'Meter', '375000'),
(43, 103, 16, 'Polycarbonate', '1', 'Meter', '350000'),
(44, 101, 17, 'Onduline 200 x 95', '1', 'Cm', '90000'),
(45, 102, 17, 'Onduline', '1', 'Meter', '375000'),
(46, 101, 18, 'Onduline 200 x 95', '1', 'Cm', '90000'),
(47, 102, 18, 'Onduline', '1', 'Meter', '375000');

--
-- Triggers `po_bahan`
--
DELIMITER $$
CREATE TRIGGER `pobahan_stokbahan` AFTER INSERT ON `po_bahan` FOR EACH ROW BEGIN
	UPDATE stok_bahan SET stok=stok+NEW.jumlah_pb
    WHERE kode_bahan = NEW.kode_bahan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id_po` int(10) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `tanggal_po` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id_po`, `nama_supplier`, `tanggal_po`) VALUES
(3, 'PT. Holl Indonesia', '2019-08-30'),
(7, '', '2019-09-12'),
(13, 'PT. HG aka', '2019-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id_so` int(10) NOT NULL,
  `nama_customer` varchar(20) NOT NULL,
  `tanggal_so` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id_so`, `nama_customer`, `tanggal_so`) VALUES
(127, 'Alucard', '2019-09-04'),
(128, 'Labib', '2019-09-04'),
(129, 'Yani<3', '2019-09-12'),
(130, 'Hani', '2019-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `so_bahan`
--

CREATE TABLE `so_bahan` (
  `id_bahan` int(11) NOT NULL,
  `id_so` int(10) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `kode_bahan` int(11) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `jumlah_sb` varchar(20) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `so_bahan`
--

INSERT INTO `so_bahan` (`id_bahan`, `id_so`, `id_pekerjaan`, `kode_bahan`, `nama_bahan`, `jumlah_sb`, `satuan`, `harga`) VALUES
(1, 51, 39, 101, 'Onduline 200 x 95', '2', 'Cm', '90000'),
(2, 51, 39, 102, 'Onduline', '2', 'Meter', '375000'),
(3, 51, 39, 103, 'Polycarbonate', '2', 'Meter', '350000'),
(4, 51, 39, 104, 'Spandek / Zincalume', '2', 'Meter', '365000'),
(5, 51, 39, 105, 'Alderon', '2', 'Meter', '575000'),
(7, 52, 40, 106, 'Gogreen', '3', 'Meter', '325000'),
(8, 52, 40, 107, 'Kain Recasens', '3', 'Meter', '685000'),
(9, 52, 40, 108, 'Kaca Tempered', '3', 'Meter', '1250000'),
(10, 52, 40, 109, 'Galvalum (Full rangka)', '3', 'Meter', '280000'),
(12, 52, 40, 110, 'Galvalum Tebal 0,75 cm (Elegan)', '3', 'Meter', '255000'),
(14, 53, 42, 116, 'Bajaringan (profil c7d, reng 33) double (Polycarbo', '2', 'Meter', '350000'),
(15, 53, 42, 117, 'Nako 12mm', '3', 'M2', '465000'),
(16, 53, 42, 119, 'Nako 12mm', '4', 'M2', '400000'),
(17, 53, 42, 113, 'Bajaringan (profil c7d, reng 33) double (Spandek)', '6', 'Meter', '330000'),
(18, 56, 48, 101, 'Onduline 200 x 95', '', 'Cm', '90000'),
(19, 129, 97, 101, 'Onduline 200 x 95', '', 'Cm', '90000'),
(20, 129, 97, 101, 'Onduline 200 x 95', '1', 'Cm', '90000'),
(21, 130, 100, 101, 'Onduline 200 x 95', '1', 'Cm', '90000'),
(22, 130, 100, 101, 'Onduline 200 x 95', '1', 'Cm', '90000'),
(23, 130, 99, 101, 'Onduline 200 x 95', '2', 'Cm', '90000'),
(24, 130, 99, 105, 'Alderon', '3', 'Meter', '575000'),
(38, 130, 101, 101, 'Onduline 200 x 95', '1', 'Cm', '90000'),
(39, 130, 101, 102, 'Onduline', '1', 'Meter', '375000'),
(40, 130, 101, 103, 'Polycarbonate', '1', 'Meter', '350000'),
(41, 131, 102, 101, 'Onduline 200 x 95', '3', 'Cm', '90000'),
(42, 131, 102, 102, 'Onduline', '3', 'Meter', '375000'),
(43, 131, 102, 103, 'Polycarbonate', '3', 'Meter', '350000');

--
-- Triggers `so_bahan`
--
DELIMITER $$
CREATE TRIGGER `sobahan_stokbahan` AFTER INSERT ON `so_bahan` FOR EACH ROW BEGIN
	UPDATE stok_bahan SET stok=stok-NEW.jumlah_sb
    WHERE kode_bahan = NEW.kode_bahan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `so_pekerjaan`
--

CREATE TABLE `so_pekerjaan` (
  `id_pekerjaan` int(10) NOT NULL,
  `id_so` int(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `so_pekerjaan`
--

INSERT INTO `so_pekerjaan` (`id_pekerjaan`, `id_so`, `pekerjaan`, `jumlah`, `satuan`, `foto`, `harga`, `keterangan`) VALUES
(94, 127, 'kanopi', '12', 'm2', 'pagar2.jpg', '12', ''),
(95, 128, 'pagar', '120', 'm2', 'pagar3.jpg', '1000000', 'kirim go lamaran uya'),
(96, 128, 'Lemari', '100', 'm2', 'pagar2.jpg', '100000000', 'larang'),
(97, 129, 'karangan bunga', '100000', 'm2', 'pagar1.jpg', '100000000000', ''),
(98, 129, 'asdasdas', '121', 'm2', 'pagar2.jpg', '1212', ''),
(101, 130, 'Kanopi', '1', 'm2', 'kanopi2.jpg', '100000', 'Warna Hijau'),
(102, 131, 'Pagar', '10', 'm2', 'pagar1.jpg', '200000', 'Besi Baja');

-- --------------------------------------------------------

--
-- Table structure for table `so_worker`
--

CREATE TABLE `so_worker` (
  `id_worker` int(10) NOT NULL,
  `id_so` int(10) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `nama_worker` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `gaji` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `so_worker`
--

INSERT INTO `so_worker` (`id_worker`, `id_so`, `id_pekerjaan`, `nama_worker`, `alamat`, `no_hp`, `kategori`, `gaji`) VALUES
(11, 48, 35, 'Adam', 'Tegal', '0820000001', 'mandor', '100000'),
(12, 48, 35, 'Yahya', 'Tegalsari', '080000000149', 'mandor', '80000'),
(13, 48, 35, '', '', '', '', ''),
(14, 50, 38, 'Agus', 'Semarang', '085000001', 'Kuli', ' 80000'),
(15, 50, 38, 'Dwi', 'Semarang', '085000002', 'Mandor', '100000'),
(16, 51, 39, 'Agus', 'Semarang', '085000001', 'Kuli', ' 80000'),
(17, 51, 39, 'Dwi', 'Semarang', '085000002', 'Mandor', '100000'),
(18, 51, 39, 'Tri', 'Semarang', '085000003', 'Kuli', '80000'),
(19, 51, 39, 'Rio', 'Semarang', '085000004', 'Kuli', '80000'),
(20, 51, 39, 'Putra', 'Semarang', '085000005', 'Kuli', '80000'),
(21, 52, 40, 'Ade', 'Semarang', '085000006', 'Kuli', '80000'),
(22, 52, 40, 'Andi', 'Semarang', '085000007', 'Kuli', '80000'),
(23, 52, 40, 'Reza', 'Semarang', '085000008', 'Mandor', '100000'),
(24, 52, 40, 'Ajie', 'Semarang', '085000009', 'Mandor', '100000'),
(25, 52, 40, 'Andi', 'Semarang', '085000010', 'Kuli', '80000'),
(26, 53, 42, 'Agus', 'Semarang', '085000001', 'Kuli', ' 80000'),
(27, 53, 42, 'Dwi', 'Semarang', '085000002', 'Mandor', '100000'),
(28, 53, 42, 'Tri', 'Semarang', '085000003', 'Kuli', '80000'),
(29, 53, 42, 'Rio', 'Semarang', '085000004', 'Kuli', '80000'),
(30, 129, 97, 'Agus', 'Semarang', '085000001', 'Kuli', ' 80000'),
(31, 129, 97, 'Dwi', 'Semarang', '085000002', 'Mandor', '100000'),
(32, 129, 97, 'Tri', 'Semarang', '085000003', 'Kuli', '80000'),
(33, 130, 99, 'Agus', 'Semarang', '085000001', 'Kuli', ' 80000'),
(34, 130, 99, 'Dwi', 'Semarang', '085000002', 'Mandor', '100000'),
(35, 130, 101, 'Agus', 'Semarang', '085000001', 'Kuli', ' 80000'),
(36, 130, 101, 'Tri', 'Semarang', '085000003', 'Kuli', '80000');

-- --------------------------------------------------------

--
-- Table structure for table `stok_bahan`
--

CREATE TABLE `stok_bahan` (
  `kode_bahan` int(10) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga_jual` char(100) NOT NULL,
  `stok` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_bahan`
--

INSERT INTO `stok_bahan` (`kode_bahan`, `nama_bahan`, `kategori`, `satuan`, `harga_jual`, `stok`) VALUES
(101, 'Onduline 200 x 95', 'Kanopi Besi Hollow', 'Cm', '90000', '225'),
(102, 'Onduline', 'Kanopi Besi Hollow', 'Meter', '375000', '7'),
(103, 'Polycarbonate', 'Kanopi Besi Hollow', 'Meter', '350000', '10'),
(104, 'Spandek / Zincalume', 'Kanopi Besi Hollow', 'Meter', '365000', '4'),
(105, 'Alderon', 'Kanopi Besi Hollow', 'Meter', '575000', '3'),
(106, 'Gogreen', 'Kanopi Besi Hollow', 'Meter', '325000', '7'),
(107, 'Kain Recasens', 'Kanopi Besi Hollow', 'Meter', '685000', '8'),
(108, 'Kaca Tempered', 'Kanopi Besi Hollow', 'Meter', '1250000', '2'),
(109, 'Galvalum (Full rangka)', 'Kanopi Galvalum', 'Meter', '280000', '8'),
(110, 'Galvalum Tebal 0,75 cm (Elegan)', 'Kanopi Galvalum', 'Meter', '255000', '10'),
(111, 'Galvalum Tebal 0,75 cm (Minimalis)', 'Kanopi Galvalum', 'Meter', '230000', '3'),
(112, 'Bajaringan (profil c7d, reng 33) double	(Onduline)', 'Kanopi Baja Ringan', 'Meter', '370000', '8'),
(113, 'Bajaringan (profil c7d, reng 33) double (Spandek)', 'Kanopi Baja Ringan', 'Meter', '330000', '6'),
(114, 'Bajaringan (profil c7d, reng 33) double (Alderon)', 'Kanopi Baja Ringan', 'Meter', '550000', '6'),
(115, 'Bajaringan (profil c7d, reng 33) double (Gogreen)', 'Kanopi Baja Ringan', 'Meter', '315000', '5'),
(116, 'Bajaringan (profil c7d, reng 33) double (Polycarbo', 'Kanopi Baja Ringan', 'Meter', '350000', '11'),
(117, 'Nako 12mm', 'Teralis Klasik', 'M2', '465000', '10'),
(118, 'Nako 12mm', 'Teralis Modern', 'M2', '425000', '10'),
(119, 'Nako 12mm', 'Teralis Geometris', 'M2', '400000', '10'),
(120, 'Nako 12mm', 'Teralis bergaris', 'M2', '421000', '10'),
(121, 'Nako 12mm', 'Teralis Mediteran', 'M2', '440000', '10'),
(122, 'Nako 10mm', 'Teralis Minimalis', 'M2', '399000', '10'),
(123, 'Nako 12mm', 'Teralis Abstrak ', 'M2', '560000', '10'),
(124, 'Nako 12mm ', 'Teralis Minimalis', 'M2', '441000', '10'),
(125, 'Nako 12mm ', 'Teralis Abstrak  ', 'M2', '615000', '10'),
(126, 'Nako 16mm ', 'Teralis Minimalis ', 'M2', '523000', '10'),
(127, 'Nako 16mm', 'Teralis Abstrak', 'M2', '712000', '10'),
(128, 'Hollow (Vertikal) type 304', 'Railing Tangga Kaca Stainless', 'Meter', '1350000', '5'),
(129, 'Hollow (Horizontal)type 304 ', 'Railing Tangga Kaca Stainless', 'Meter', '1150000', '5'),
(130, 'Pipa (Vertikal) type 304 ', 'Railing Tangga Kaca Stainless', 'Meter', '1100000', '5'),
(131, 'Pipa (Horizontal) type 304', 'Railing Tangga Kaca Stainless', 'Meter', '900000', '5'),
(132, 'Hollow + Kaca Tempered type 304', 'Railing Tangga Kaca Stainless', 'Meter', '1750000', '5'),
(133, 'Hollow (Vertikal) type 201', 'Railing Tangga Kaca Stainless', 'Meter', '1250000', '5'),
(134, 'Hollow (Horizontal) type 201 ', 'Railing Tangga Kaca Stainless', 'Meter', '1050000', '5'),
(135, 'Pipa (Vertikal)	type 201', 'Railing Tangga Kaca Stainless', 'Meter', '1000000', '5'),
(136, 'Pipa (Horizontal) type 201', 'Railing Tangga Kaca Stainless', 'Meter', '800000', '5'),
(137, 'Kombinasi Besi Hollow', 'Pagar Besi Minimalis', 'Meter', '700000', '4'),
(138, 'Kombinasi Besi Hollow & Besi Behel', 'Pagar Besi Minimales', 'Meter', '800000', '4'),
(139, 'Kombinasi Besi Hollow & Plat Besi', 'Pagar Besi Minimalis', 'Meter', '700000', '4'),
(145, 'Besi Hollow', 'Personal', 'm2', '2000', '5');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(8) NOT NULL,
  `nama_supplier` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `telpon` varchar(13) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `rekening` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat`, `telpon`, `bank`, `rekening`) VALUES
(1, 'PT. Holl Indonesia', 'Tegal', '08400000001', 'BNI', '1000-2000-3000-4000'),
(2, 'PT. HG aka', 'Tegal', '08400000002', 'BRI', '1001-2001-3001-4001'),
(4, 'PT. Siku', 'Pekalongan', '08400000004', 'BRI', '1004-2004-3004-4004'),
(5, 'PT. Nako', 'Batang', '08400000005', 'DANAMON', '1005-2005-3005-4005'),
(6, 'Toko A', 'Asal A', '080000000001', 'DANAMON', '1006-2006-3006-4006'),
(7, 'PT. TB ', 'Pemalang', '085000002', 'BCA', '1111222233334444'),
(8, 'PT. Apalah', 'Tegal', '083000001', 'BNI', '2000-0000-0000-2222');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `id_worker` int(6) NOT NULL,
  `nama_worker` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `gaji` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`id_worker`, `nama_worker`, `alamat`, `no_hp`, `kategori`, `gaji`) VALUES
(2, 'Agus', 'Semarang', '085000001', 'Kuli', ' 80000'),
(3, 'Dwi', 'Semarang', '085000002', 'Mandor', '100000'),
(4, 'Tri', 'Semarang', '085000003', 'Kuli', '80000'),
(5, 'Rio', 'Semarang', '085000004', 'Kuli', '80000'),
(6, 'Putra', 'Semarang', '085000005', 'Kuli', '80000'),
(7, 'Ade', 'Semarang', '085000006', 'Kuli', '80000'),
(9, 'Andi', 'Semarang', '085000007', 'Kuli', '80000'),
(11, 'Reza', 'Semarang', '085000008', 'Mandor', '100000'),
(12, 'Ajie', 'Semarang', '085000009', 'Mandor', '100000'),
(23, 'Andi', 'Semarang', '085000010', 'Kuli', '80000'),
(47, 'Eko', 'Semarang', '085000011', 'Mandor', '100000'),
(99, 'Indra', 'Semarang', '085000012', 'Mandor', '100000'),
(12350, 'Ari', 'Semarang', '085000013', 'Mandor', '100000'),
(12351, 'Andre', 'Semarang', '085000014', 'Mandor', '100000'),
(12352, 'Udin', 'Semarang', '085000015', 'Kuli', '80000'),
(12353, 'Arya', 'Semarang', '085000016', 'Kuli', '80000'),
(12354, 'Yudi', 'Semarang', '085000017', 'Kuli', '80000'),
(12355, 'Kurniawan', 'Semarang', '085000018', 'Kuli', '80000'),
(12356, 'Budi', 'Semarang', '085000019', 'Kuli', '80000'),
(12357, 'Wahyu', 'Semarang', '085000020', 'Kuli', '80000'),
(12358, 'Rizki', 'Semarang', '085000021', 'Mandor', '100000'),
(12359, 'Ilham', 'Semarang', '085000022', 'Kuli', '80000'),
(12360, 'Fajar', 'Semarang', '085000023', 'Kuli', '80000'),
(12361, 'Bayu', 'Semarang', '085000024', 'Kuli', '80000'),
(12362, 'Hadi', 'Semarang', '085000025', 'Mandor', '100000'),
(12363, 'Edi H', 'Tegal', '08200000002', 'Mandor', '100000'),
(12364, 'Dedi', 'Tegal', '08200000001', 'Mandor', '100000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `po_bahan`
--
ALTER TABLE `po_bahan`
  ADD PRIMARY KEY (`id_pb`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id_po`),
  ADD UNIQUE KEY `id_po` (`nama_supplier`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id_so`);

--
-- Indexes for table `so_bahan`
--
ALTER TABLE `so_bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `so_pekerjaan`
--
ALTER TABLE `so_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `so_worker`
--
ALTER TABLE `so_worker`
  ADD PRIMARY KEY (`id_worker`);

--
-- Indexes for table `stok_bahan`
--
ALTER TABLE `stok_bahan`
  ADD PRIMARY KEY (`kode_bahan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id_worker`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `po_bahan`
--
ALTER TABLE `po_bahan`
  MODIFY `id_pb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id_po` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id_so` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `so_bahan`
--
ALTER TABLE `so_bahan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `so_pekerjaan`
--
ALTER TABLE `so_pekerjaan`
  MODIFY `id_pekerjaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `so_worker`
--
ALTER TABLE `so_worker`
  MODIFY `id_worker` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `stok_bahan`
--
ALTER TABLE `stok_bahan`
  MODIFY `kode_bahan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `id_worker` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12365;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
