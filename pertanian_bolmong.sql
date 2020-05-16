-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 09:04 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertanian_bolmong`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_beras`
--

CREATE TABLE `jenis_beras` (
  `id` int(11) NOT NULL,
  `nama_petani` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tgl_panen` date NOT NULL,
  `nama_beras` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_beras`
--

INSERT INTO `jenis_beras` (`id`, `nama_petani`, `jenis_kelamin`, `tgl_panen`, `nama_beras`, `harga`, `kecamatan`, `kelurahan`, `alamat`, `jumlah`, `longitude`, `latitude`) VALUES
(32, 'Veldiman Taju', 'laki-laki', '2020-04-08', 'serayu', '13.000Rp/Kg', 'Bolaang', 'inobonto', 'inobonto 1', '3 ton', '124.1026532', '0.9122309'),
(33, 'Randi Paparang', 'laki-laki', '2020-04-07', 'dolog', '13.000Rp/Kg', 'Poigar', 'Nanasi', 'wineru', '3 ton', '124.254319', '0.9868013'),
(34, 'andika', 'laki-laki', '2020-04-08', 'Sultan', '13.000Rp/Kg', 'Bolaang', 'inobonto', 'inobonto 1', '5 ton', '124.1026532', '0.9122309'),
(35, 'sulaiman', 'laki-laki', '2020-04-08', 'dolog', '13.000Rp/Kg', 'Passi Barat', 'Passi', 'Bintau', '5 ton', '123.474155', '0.7326861'),
(36, 'irwan', 'laki-laki', '2020-04-22', 'serayu', '10.000Rp/Kg', 'Bolaang', 'inobonto', 'tadoy 1', '5 ton', '124.1440563', '0.9124289'),
(37, 'Farhan', 'laki-laki', '2020-04-23', 'bulog', '9.000Rp/Kg', 'Bolaang', 'inobonto', 'Ambang 1', '3 ton', '124.1235043', '0.9111589'),
(38, 'Fuad Alamri', 'laki-laki', '2020-04-15', 'serayu', '11.000Rp/Kg', 'Bolaang', 'inobonto', 'Ambang 2', '3 ton', '124.1080378', '0.9112399'),
(39, 'Heman Tino', 'laki-laki', '2020-04-15', 'Serayu', '9.000Rp/Kg', 'Bolaang', 'inobonto', 'Tadoy', '1 ton', '124.1327083', '0.9126629'),
(40, 'Ludin', 'laki-laki', '2020-04-15', 'dolog', '11.000Rp/Kg', 'Dumoga Barat', 'Dumoga', 'Kosio', '4 ton', '123.9735484', '0.5143312'),
(41, 'iskandar', 'laki-laki', '2020-04-14', 'bulog', '7.000Rp/Kg', 'Dumoga Utara', 'Dumoga Utara', 'Bonawang', '5 ton', '124.0021772', '0.5570425'),
(42, 'Anding', 'laki-laki', '2020-04-24', 'Sultan', '13.000Rp/Kg', 'Lolayan', 'Lolayan 1', 'Abak', '3 ton', '124.1728238', '0.6217732'),
(43, 'Firman Mustapa', 'laki-laki', '2020-04-15', 'serayu', '10.000Rp/Kg', 'Bolaang', 'inobonto', 'Lolan', '4 ton', '124.1635699', '0.9205186'),
(44, 'Jefri pangemanan', 'laki-laki', '2020-04-15', 'Sultan', '15.000Rp/Kg', 'Bolaang', 'inobonto', 'Langagon', '10 ton', '124.1635699', '0.9205186'),
(45, 'Fikar paputungan', 'laki-laki', '2020-04-15', 'serayu', '10.000Rp/Kg', 'Bolaang', 'inobonto', 'solimandungan 1', '3 ton', '124.1196918', '0.8513571'),
(46, 'Zidan Hapili', 'laki-laki', '2020-04-14', 'bincenta', '20.000Rp/Kg', 'Bolaang', 'inobonto', 'solimandungan 2', '20 ton', '124.1392339', '0.8488096'),
(47, 'Meri Bahute', 'perempuan', '2020-04-22', 'bulog', '13.000Rp/Kg', 'Poigar', 'Nanasi', 'Gogaluman', '3 ton', '124.222638', '0.9369279'),
(48, 'Dekly Lumentah', 'laki-laki', '2020-04-27', 'Sultan', '12.000Rp/Kg', 'Poigar', 'Nanasi', 'Mariri Baru', '2 ton', '124.1737151', '0.9109911'),
(49, 'Alfius Muridang', 'laki-laki', '2020-04-20', 'serayu', '15.000Rp/Kg', 'Poigar', 'Nanasi', 'Mariri Dua', '3 ton', '', ''),
(50, 'Ifandi Bunase', 'laki-laki', '2020-04-13', 'bulog', '10.000Rp/Kg', 'Poigar', 'Nanasi', 'Mariri Lama', '10 ton', '124.250300', '0.909298'),
(51, 'Ferdi Kalasi', 'laki-laki', '2020-04-19', 'bincenta', '14.000Rp/Kg', 'Poigar', 'Nanasi', 'Mariri Satu', '10 ton', '124.242190', '0.895022'),
(52, 'Nandi ', 'laki-laki', '2020-04-19', 'bincenta', '11.000Rp/Kg', 'Poigar', 'Nanasi', 'Nanasi', '4 ton', '124.320541', '0.974632'),
(56, 'Veldiman', 'laki-laki', '2020-05-12', 'serayu', '13.000Rp/Kg', 'Bolaang', 'inobonto', 'inobonto 1', '3 ton', '124.1026532', '0.9126629');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pupuk`
--

CREATE TABLE `jenis_pupuk` (
  `id` int(50) NOT NULL,
  `nama_pupuk` varchar(100) NOT NULL,
  `fungsi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `harga_pupuk` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pupuk`
--

INSERT INTO `jenis_pupuk` (`id`, `nama_pupuk`, `fungsi`, `tanggal`, `kecamatan`, `harga_pupuk`, `alamat`, `foto`) VALUES
(10, 'Supernasa', 'Kesuburan tanah', '2020-04-08', 'Bolaang', '50.000,Rp', 'Pasar inobonto', 'supernasa.jpg'),
(11, 'Pomi', 'kesuburan', '2020-04-08', 'Poigar', '100.000,Rp', 'Pasar poigar', 'pomi.jpg'),
(12, 'Mutiara', 'kesuburan tanah', '2020-04-15', 'Poigar', '50.000,Rp', 'Pasar poigar', 'mitiara.jpg'),
(13, 'Urea', 'Cepat pembuahan', '2020-04-14', 'Bolaang', '75.000,Rp', 'timtama', 'pupuk-urea-pusri.jpg'),
(14, 'starpos', 'Kesuburan tanah', '2020-04-09', 'Bolaang', '70.000,Rp', 'Lolan', 'starpos.jpg'),
(15, 'Ponska', 'kesuburan tanah', '2020-04-07', 'Bolaang', '60.000,Rp', 'pasar inobonto', 'phonska.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_racun`
--

CREATE TABLE `jenis_racun` (
  `id` int(11) NOT NULL,
  `nama_racun` varchar(50) NOT NULL,
  `fungsi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `harga_racun` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_racun`
--

INSERT INTO `jenis_racun` (`id`, `nama_racun`, `fungsi`, `tanggal`, `kecamatan`, `harga_racun`, `alamat`, `foto`) VALUES
(6, 'Mamba', 'Hama Belalang', '2020-04-09', 'Bolaang', '150.000,Rp', 'Pasar inobonto', 'Mamba.JPG'),
(7, 'sidafor', 'hama semut', '2020-04-09', 'Bolaang', '100.000,Rp', 'pasar inobonto', 'sidafos.jpg'),
(8, 'Gramaxone', 'Racun rumput untuk padi', '2020-04-07', 'Bolaang', '50.000,Rp', 'Pasar Lolak', 'gramaxone.jpg'),
(9, 'compan', 'racun rumput', '2020-04-20', 'Poigar', '50.000,Rp', 'wineru', 'compan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `latitude` int(50) NOT NULL,
  `longitude` int(50) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proses_panen`
--

CREATE TABLE `proses_panen` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_petani` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proses_panen`
--

INSERT INTO `proses_panen` (`id`, `nama`, `nama_petani`, `alamat`, `foto`, `deskription`) VALUES
(13, 'Penanaman', 'Veldiman Taju', 'inobonto 1', 'IMG_20200315_065939.jpg', 'pertama harus dilakukan : pemilihan bibit, tenanaman bibit, selanjutanya bibit akan di pindahkan ke sawah sampai proses pertumbuhan akan berjalan selama 3 bulan.');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'RW');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(500) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `kecamatan`, `kelurahan`, `desa`, `dusun`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(22, 'Veldiman Taju', 'Bolaang', 'inobonto', 'inobonto 1', 'dusun 5', 'veldi1998@gmail.com', 'P_20160914_095506.jpg', '$2y$10$6p/VN//nJmnqv.N5gghVNeqD1V5.Z65dxF3JGs4yIuZ19KxHbewRu', 1, 1, 1587690530),
(23, 'velditaju', 'Bolaang', 'inobonto', 'inobonto 1', 'dusun 5', 'veldi99@gmail.com', 'P_20160923_080306_1.jpg', '$2y$10$f6BWhXn/Yb92vRDTbUWPwezzQCNify5Hbx/B65O.AyJ5mYry5Csdm', 2, 0, 1588086556),
(24, 'velditaju', 'Bolaang', 'inobonto', 'inobonto 1', 'dusun 2', 'veldi19@gmail.com', 'IMG_20200315_065939.jpg', '$2y$10$MxoECS0COH9JNbU7dAXGNuV2gkf9wj/EspDTlTmacg9D/qfC.t.Zy', 2, 1, 1588167521),
(25, 'sarah siswadi', 'Poigar', 'Nanasi', 'wineru', 'dusun 3', 'sarah19@gmail.com', 'IMG-20190921-WA0006.jpg', '$2y$10$BZtDsKYJ.RErJhbB2Eic1ubmkCuI/5x1sW3srwgHI.w93HRccMqAq', 2, 1, 1588255516),
(27, 'velditaju', 'Bolaang', 'inobonto', 'inobonto 1', 'dusun 5', 'veldi98@gmail.com', '', '$2y$10$MheGR/d9npNXlgnrPCKmf.3yWmpkMGciJmAXmijOjy3feurfexZri', 2, 1, 1588786437);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_beras`
--
ALTER TABLE `jenis_beras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_pupuk`
--
ALTER TABLE `jenis_pupuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_racun`
--
ALTER TABLE `jenis_racun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proses_panen`
--
ALTER TABLE `proses_panen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_beras`
--
ALTER TABLE `jenis_beras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `jenis_pupuk`
--
ALTER TABLE `jenis_pupuk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jenis_racun`
--
ALTER TABLE `jenis_racun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proses_panen`
--
ALTER TABLE `proses_panen`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
