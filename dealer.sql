-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 11:55 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(9) NOT NULL,
  `username` varchar(9) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(0, 'admin', 'admin666');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `merek` varchar(12) NOT NULL,
  `jenis` varchar(9) NOT NULL,
  `spesifikasi` text,
  `stok` int(11) NOT NULL,
  `harga` int(12) NOT NULL,
  `gambar_produk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `merek`, `jenis`, `spesifikasi`, `stok`, `harga`, `gambar_produk`) VALUES
(12, 'Jupiter MX KING', 'Yamaha', '4 TAK', 'Warna: Hitam<br>\r\nKapasitas: 108.2 cc<br>\r\nTenaga Maksimal: 8.98 hp<br>\r\nOpsi Start: Kick & Electric<br>\r\nSistem Pembakaran: Full Transisterized<br>\r\nIndikator BBM: Digital <br>\r\nJenis Transisi: CVT', 6, 20000000, '282-Yamaha Jupiter MX King 150cc.jpg'),
(13, 'Vario 150', 'Honda', 'Matik', 'Warna: Hitam <br>\r\nKapasitas: 108.2 cc <br>\r\nTenaga Maksimal: 8.98 hp <br>\r\nOpsi Start: Kick & Electric <br>\r\nSistem Pembakaran: Full Transisterized <br>\r\nIndikator BBM: Digital <br>\r\nJenis Transisi: CVT', 3, 20000000, '713-fitur-motor-vario-150-2017-new.png'),
(14, 'Supra GTR 150', 'Honda', '4 TAK', 'Warna: Hitam-merah <br>\r\nKapasitas: 108.2 cc <br>\r\nTenaga Maksimal: 8.98 hp <br>\r\nOpsi Start: Kick & Electric <br>\r\nSistem Pembakaran: Full Transisterized <br>\r\nIndikator BBM: Digital <br>\r\nJenis Transisi: CVT', 3, 25000000, '606-Honda Supra GTR 150.jpg'),
(15, 'CB 150 Verza', 'Honda', '4 TAK', 'Warna: Hitam-merah <br>\r\nMesin: 150cc SOHC 4-langkah, Silinder tunggal<br>\r\nSistem Pembakaran: Injeksi PGM-FI<br>\r\nOpsi Start: Kick & Electric<br>\r\nKapasitas Tangki: 12,2 liter<br>\r\nTipe kopling: manual, multiple wet clutch', 1, 30000000, '652-honda-cb150-verza-bold-red.jpg'),
(16, 'PCX 150', 'Honda', 'Matik', 'Warna: Putih <br>\r\nMesin: 4-Steps, SOHC, PGM-FI, liquid-cooled, eSP<br>\r\nKapasitas Tangki: 8 Liter<br>\r\nOpsi Start: Electric<br>\r\nSistem Pembakaran: Injeksi<br>\r\nIndikator BBM: Digital<br>\r\nTransmisi: Otomatis V-belt', 6, 25000000, '810-honda-pcx-150-2019.jpg'),
(17, 'NMAX 155', 'Yamaha', 'Matik', 'Warna: Hitam <br>\r\nKapasitas: 108.2 cc<br>\r\nTenaga Maksimal: 8.98 hp<br>	\r\nOpsi Start: Kick & Electric<br>\r\nSistem Pembakaran: Full Transisterized<br>\r\nIndikator BBM: Digital<br>\r\nJenis Transisi: CVT', 6, 25000000, '766-yamaha-nmax-155.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id` int(11) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `merek` varchar(15) NOT NULL,
  `stok` int(12) NOT NULL,
  `harga` varchar(90) NOT NULL,
  `gambar` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`id`, `nama`, `merek`, `stok`, `harga`, `gambar`) VALUES
(2, 'Cushion Assy Rear (Shock Breaker Belakang) â€“ BeAT eSP (K81)', 'Honda', 3, '195000', '814-Cushion Assy Rear (Shock Breaker Belakang) â€“ BeAT eSP (K81)-Rp 195,000.jpg'),
(3, 'lampu led- TYTO ORIGINAL H6 VARIO BEAT MIO JUPITER M2A AC-DC ', 'TYTO', 10, '33000', '698-lampu led- TYTO ORIGINAL H6 VARIO BEAT MIO JUPITER M2A AC-DC - Rp 33k.jpg'),
(4, 'Ban Michelin-M29S-70/90-14 TL 40P', 'MICHELIN', 5, '240000', '850-Michelin-M29S-7090-14 TL 40P-Rp240k.jpg'),
(5, 'piringan cakram depan-beat eSP/Vario 150 Esp/vario 150 eSP', 'Honda', 6, '115000', '112-piringan cakram depan-beat eSP&Vario 150 Esp-vario 150 eSP-Rp 115k.jpg'),
(6, 'TDR Set Roller for Yamaha Nmax/Xeon/Aerox [13 g]', 'TDR', 13, '115000', '739-TDR Set Roller for Yamaha Nmax-Xeon-Aerox [13 g]-Rp 115.000.jpg'),
(7, 'vent belt tdr', 'TDR', 17, '175000', '192-vent belt tdr-Rp 175k.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
