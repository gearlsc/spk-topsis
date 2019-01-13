-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 05:37 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spktopsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `talternatif`
--

CREATE TABLE `talternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(200) DEFAULT NULL,
  `jenkel` enum('Laki-laki','Perempuan') NOT NULL,
  `nim` char(10) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `tgllhr` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_ortu` varchar(30) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat_ortu` varchar(50) NOT NULL,
  `kontak_ortu` char(12) NOT NULL,
  `penghasilan_ortu` double NOT NULL,
  `tanggungan_ortu` int(11) NOT NULL,
  `ipk` double NOT NULL,
  `status_anak` enum('Lengkap','Yatim atau Piatu','Yatim Piatu') NOT NULL,
  `riwayat_beasiswa` enum('Sudah pernah, gagal','Sudah pernah, riwayat buruk','Sudah pernah, riwayat baik','Belum  pernah') NOT NULL,
  `deskripsi` text,
  `berkas` varchar(500) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talternatif`
--

INSERT INTO `talternatif` (`id_alternatif`, `nama_alternatif`, `jenkel`, `nim`, `ttl`, `tgllhr`, `email`, `kontak`, `alamat`, `foto`, `nama_ortu`, `pekerjaan`, `alamat_ortu`, `kontak_ortu`, `penghasilan_ortu`, `tanggungan_ortu`, `ipk`, `status_anak`, `riwayat_beasiswa`, `deskripsi`, `berkas`, `tahun`) VALUES
(32, 'Dani Hanif', '', '17089', 'Jambi', '1997-03-03', 'mahasiswa@gmail.com', '082376382476', 'kel. lebak bandung, rt.23 Jelutung ', '', 'hermanto', 'Tani', 'betung, muaro jambi', '085761327333', 2100000, 3, 3.47, 'Lengkap', 'Belum  pernah', NULL, '', 2017),
(31, 'Jumini Yumalina', 'Perempuan', '17070', 'koto panjang', '1998-05-12', 'mahasiswa@gmail.com', '082377282812', 'merangin', '', 'Zulkifli', 'wiraswasta', 'merangin', '081366731011', 1500000, 5, 3.5, 'Lengkap', 'Belum  pernah', NULL, '', 2018),
(33, 'Paizatun', 'Perempuan', '17011', 'senggering', '1998-09-23', 'mahasiswa@gmail.com', '085357771201', 'Kenali Asam Bawah', '', 'Fauziah', 'Petani', 'senggering', '085266122367', 1600000, 4, 3.33, 'Yatim atau Piatu', 'Belum  pernah', NULL, '', 2018),
(34, 'Mariatul Gustia', '', '17004', 'muara bungo', '1997-08-13', 'mahasiswa@gmail.com', '08527221304', 'Muara bungo', '', 'Ahmad Sobri', 'Swasta', 'muara bungo', '085240427122', 750000, 3, 3.4, 'Lengkap', 'Sudah pernah, riwayat baik', NULL, '', 2017),
(35, 'Arjunandi', 'Laki-laki', '17021', 'Lubuk Gaung', '0000-00-00', 'mahasiswa@gmail.com', '082374525004', '', '', 'M. Bahari', 'wiraswasta', 'Lubuk gaung\r\n', '082270416603', 2500000, 4, 3.6, 'Lengkap', 'Belum  pernah', NULL, '', 2017),
(36, 'Pupet Irdian', 'Laki-laki', '17081', 'pulau rengas', '1998-07-10', 'mahasiswa@gmail.com', '082176442840', 'pal merah', '', 'Nurjila', 'petain', 'pulau rengas, rt.04, bangka barat', '081274123445', 900000, 2, 3.52, 'Yatim atau Piatu', 'Belum  pernah', NULL, '', 2017),
(37, 'Syifa Septina', 'Perempuan', '17022', 'Jambi', '1999-08-22', 'mahasiswa@gmail.com', '081545989-35', 'jl. sumber rejo, kenali besar', '', 'Supri anto', 'swasta', 'jl. sumber rejo, kenali besar', '081274522634', 1500000, 3, 3.2, 'Lengkap', 'Belum  pernah', NULL, '', 2017),
(38, 'Dita Khairunisa', 'Perempuan', '17053', 'palembang', '1999-09-07', 'mahasiswa@gmail.com', '085734789874', 'jl. Merpati 2, no 28 Jambi', '', 'Jasmuri', 'swasta', 'jl. Merpati 2, no 28 Jambi\r\n', '081274567723', 2000000, 5, 3.75, 'Lengkap', 'Sudah pernah, riwayat baik', NULL, '', 2017),
(39, 'Dwi Andriyani', 'Perempuan', '17025', 'Tebo', '1998-04-12', 'mahasiswa@gmail.com', '085268863120', 'jelutung', '', 'Edi Susanto', 'petani', 'Jl, sudiasih, no. 11, Tebo', '085765532787', 1850000, 2, 3.41, 'Lengkap', 'Belum  pernah', NULL, '', 2017),
(40, 'Baihaki', '', '17045', 'Simpang guguk', '1999-02-02', 'mahasiswa@gmail.com', '082376120071', 'desa guguk kec. renah pembarap', '', 'M. Sandi', 'petani', 'desa guguk kec. renah pembarap', '089631721121', 1500000, 7, 3.35, 'Lengkap', 'Sudah pernah, riwayat baik', NULL, '', 2017),
(41, 'Sri Septiani', 'Perempuan', '17032', 'mersam', '1999-02-05', 'mahasiswa@gmail.com', '082245782442', 'mersam', '', 'iwan samsyul', 'tani', 'mersam', '081348343444', 1100000, 3, 3.77, 'Lengkap', 'Belum  pernah', NULL, '', 2017),
(42, 'Yoko Hariyadi', 'Laki-laki', '17097', 'Bangko', '1999-05-10', 'mahasiswa@gmail.com', '082154461207', 'jl. serdang, kel. pematang kandis, bangko', '', 'suhaiman', 'swasta', 'jl. serdang, kel. pematang kandis, bangko', '085274651235', 2150000, 4, 3.3, 'Lengkap', 'Belum  pernah', NULL, '', 2017),
(43, 'Hendra Gusmandi', 'Laki-laki', '17037', 'Jambi', '1999-08-09', 'mahasiswa@gmail.com', '085653477761', 'Jl. Perdana no. 49, jambi', '', 'Yuyun Dasmita', 'Swasta', 'Jl. Perdana no. 49, jambi', '085254677662', 1750000, 4, 3.41, 'Yatim atau Piatu', 'Belum  pernah', NULL, '', 2017),
(44, 'Rosita Dwi Ayu', 'Perempuan', '17121', 'Jambi', '1998-12-17', 'mahasiswa@gmail.com', '085266404436', 'jl. karya maju no. 12 Jambi', '', 'Ridwan Hartanto', 'Swasta', 'jl. karya maju no. 12 Jambi', '085257437651', 700000, 3, 3.35, 'Lengkap', 'Sudah pernah, riwayat baik', NULL, '', 2017),
(45, 'Marisa septha', 'Perempuan', '17091', 'riau', '1999-07-04', 'mahasiswa@gmail.com', '085745621565', 'jl. cinta damai, riau', '', 'Alim susanto', 'petani', 'jl. cinta damai, riau', '081567886541', 850000, 3, 3.54, 'Lengkap', 'Belum  pernah', NULL, '', 2017),
(46, 'Firly Firmansyah', 'Laki-laki', '17007', 'Jambi', '1998-08-22', 'mahasiswa@gmail.com', '081274569097', 'lrg. sirsak, rt.18 Jambi', '', 'Sandi Susanto', 'Pns', 'lrg. sirsak, rt.18 Jambi', '081514659876', 980000, 4, 3.35, 'Lengkap', 'Belum  pernah', NULL, '', 2017),
(47, 'Alwi Firmansyah', 'Laki-laki', '17029', 'Jambi', '1999-07-12', 'mahasiswa@gmail.com', '085387659665', 'jl. serdang, no.18 Kota Jambi', '', 'Abdul sani', 'Buruh lepas', 'jl. serdang, no.18 Kota Jambi', '085734568784', 2100000, 3, 3.41, 'Lengkap', 'Belum  pernah', NULL, '', 2017),
(48, 'Firman Budi', 'Laki-laki', '17118', 'Bangko', '1998-12-22', 'mahasiswa@gmail.com', '085372455643', 'kebun kopi', '', 'Kodirun', 'Tani', 'Bangko', '082298721567', 1850000, 5, 3.5, 'Lengkap', 'Belum  pernah', NULL, '', 2017),
(49, 'Dea Nabila', 'Perempuan', '17052', 'palembang', '1997-10-03', 'mahasiswa@gmail.com', '085745121416', 'jl. tengku umar, no.12, bangko', '', 'zulkarnain', 'bengkel', 'jl. tengku umar, no.12, bangko', '081274672317', 1000000, 2, 3.3, 'Lengkap', 'Sudah pernah, riwayat baik', NULL, '', 2017),
(50, 'Indira Kalista', 'Perempuan', '17063', 'Medan ', '1998-11-16', 'mahasiswa@gmail.com', '089998751415', 'jl. kesehatan bangko', '', 'Sukari', 'pns', 'jl. kesehatan ,bangko', '081316545642', 2300000, 6, 3.48, 'Yatim atau Piatu', 'Belum  pernah', NULL, '', 2017),
(51, 'Resta Eka Putri', 'Perempuan', '17115', 'tungkal', '1999-06-15', 'mahasiswa@gmail.com', '082246711443', 'mayang', '', 'Subari Sutanto', 'tani', 'tungkal ulu', '082345776542', 2150000, 3, 3.2, 'Lengkap', 'Belum  pernah', NULL, '', 2017),
(59, 'Erica Alvionita', 'Perempuan', '8040140012', 'jambi', '1996-06-06', 'mahasiswa@gmail.com', '081234', 'jambi', '', 'a', 'a', 'jambi', '0812', 2000000, 3, 3.35, 'Lengkap', 'Belum  pernah', NULL, '', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `talternatif_kriteria`
--

CREATE TABLE `talternatif_kriteria` (
  `id_alternatif_kriteria` int(11) NOT NULL,
  `nama_mahasiswa` varchar(30) NOT NULL,
  `nim` int(8) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `semester` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talternatif_kriteria`
--

INSERT INTO `talternatif_kriteria` (`id_alternatif_kriteria`, `nama_mahasiswa`, `nim`, `kelas`, `semester`) VALUES
(69, 'Tiara Maharani', 17027, '1A', ''),
(68, 'Dewi Oktariani', 17012, '1A', ''),
(70, 'Boby Nugroho', 17096, '1A', ''),
(71, 'Bella Puspita Sari', 17053, '1B', ''),
(72, 'Kurniati Astuti', 17073, '1B', ''),
(73, 'Anton Mauliansyah', 17102, '1B', ''),
(74, 'Ajeng Laksmi', 16024, '2A', ''),
(75, 'Bambang Prasetyo', 16067, '2A', ''),
(76, 'Juliarta Cantika', 16092, '2A', ''),
(77, 'Yuliana', 16004, '2B', ''),
(78, 'Nikki Putri', 16051, '2B', ''),
(79, 'Roy Kurniawan', 16083, '2B', ''),
(80, 'Anita', 15027, '3A', ''),
(81, 'Fania Grestyani', 15053, '3A', ''),
(82, 'Muhammad Apriyandi', 15102, '3A', ''),
(83, 'Rina Aprilia', 15008, '3B', ''),
(84, 'Amel Saputr', 15070, '3B', ''),
(85, 'Rika Susilawati', 15112, '3B', ''),
(86, 'Shelly Ramadanti', 15012, '3C', ''),
(87, 'Sindy Putri', 15049, '3C', ''),
(88, 'Adam Tri Laksana', 15099, '3C', '');

-- --------------------------------------------------------

--
-- Table structure for table `tkriteria`
--

CREATE TABLE `tkriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(100) DEFAULT NULL,
  `kepentingan` double DEFAULT NULL,
  `costbenefit` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkriteria`
--

INSERT INTO `tkriteria` (`id_kriteria`, `nama_kriteria`, `kepentingan`, `costbenefit`) VALUES
(1, 'Penghasilan Orang Tua', 5, 'Benefit'),
(2, 'Tanggungan Orang Tua', 5, 'Benefit'),
(3, 'Nilai IPK', 3, 'Benefit'),
(4, 'Status Anak', 2, 'Benefit'),
(5, 'Riwayat Beasiswa', 2, 'Benefit');

-- --------------------------------------------------------

--
-- Table structure for table `tmahasiswa`
--

CREATE TABLE `tmahasiswa` (
  `kdMahasiswa` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nmLengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tglMasuk` date NOT NULL,
  `levelPengguna` varchar(100) NOT NULL,
  `aktif` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmahasiswa`
--

INSERT INTO `tmahasiswa` (`kdMahasiswa`, `username`, `password`, `nmLengkap`, `email`, `kontak`, `alamat`, `foto`, `tglMasuk`, `levelPengguna`, `aktif`) VALUES
(1, '17000', 'ica', 'GEA', 'mail.mahasiswa@sultan.com', '-', 'Jalan :...', 'b020e47a5291d18b47146b8603af4c58Lucy-Frazer-MP.jpg', '2017-02-13', 'Mahasiswa', 'Y'),
(6, '17070', 'jumini', 'Jumini Yumalina', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(7, '17089', 'dani', 'Dani Hanif', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(8, '17011', 'paizatun', 'Paizatun', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(9, '17004', 'mariatul', 'Mariatul Gustia', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(10, '17021', 'arjunandi', 'Arjunandi', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(11, '17081', 'pupet', 'Pupet Irdian', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(12, '17022', 'syifa', 'Syifa Septina', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(13, '17053', 'dita', 'Dita Khairunisa', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(14, '17025', 'dwi', 'Dwi Andriyani', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(15, '17045', 'baihaki', 'Baihaki', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(16, '17032', 'sri', 'Sri Septiani', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(17, '17097', 'YOKO', 'Yoko Hariyadi', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(18, '17037', 'hendra', 'Hendra Gusmandi', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(19, '17121', 'rosita', 'Rosita Dwi Ayu', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(20, '17091', 'marisa', 'Marisa septha', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(21, '17007', 'firly', 'Fiirly Firmansyah', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(22, '17029', 'alwi', 'Alwi Firmansyah', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(23, '17118', 'firman', 'Firman Budi', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(24, '17052', 'dea', 'Dea Nabila', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(25, '18063', 'indira', 'Indira Kalista', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(26, '17115', 'resta', 'Resta Eka Putri', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(27, '9', '9', '9', '9@gmail.com', '', '', '', '0000-00-00', '', ''),
(28, '8040140012', 'erica', 'Erica Alvionita', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(29, '123', '123', 'erica', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(30, '8040140013', 'selena', 'selena', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', ''),
(31, '17006', 'ica', 'ica', 'mahasiswa@gmail.com', '', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tpengguna`
--

CREATE TABLE `tpengguna` (
  `kdPengguna` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nmLengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tglMasuk` date NOT NULL,
  `levelPengguna` varchar(100) NOT NULL,
  `aktif` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpengguna`
--

INSERT INTO `tpengguna` (`kdPengguna`, `username`, `password`, `nmLengkap`, `email`, `kontak`, `alamat`, `foto`, `tglMasuk`, `levelPengguna`, `aktif`) VALUES
(1, 'admin', 'admin', 'ADMIN', 'mail.administrator@gmail.com', '-', 'Jalan :...', 'b020e47a5291d18b47146b8603af4c58Lucy-Frazer-MP.jpg', '2017-02-13', 'Administrator', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `twalikelas`
--

CREATE TABLE `twalikelas` (
  `kdWaka` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nmLengkap` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tglMasuk` date NOT NULL,
  `levelPengguna` varchar(100) NOT NULL,
  `aktif` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twalikelas`
--

INSERT INTO `twalikelas` (`kdWaka`, `username`, `password`, `nmLengkap`, `kelas`, `email`, `kontak`, `alamat`, `foto`, `tglMasuk`, `levelPengguna`, `aktif`) VALUES
(1, 'wk1', 'wk1', 'Wali Kelas 1', '01', 'mail.administrator@gmail.com', '-', 'Jalan :...', 'b020e47a5291d18b47146b8603af4c58Lucy-Frazer-MP.jpg', '2017-02-13', 'Walikelas', 'Y'),
(7, 'wk1A', 'wk1', 'wali kelas 1A', '1A', '', '', '', '', '0000-00-00', '', ''),
(8, 'wk1B', 'wk1', 'Wali Kelas 1B', '1B', '', '', '', '', '0000-00-00', '', ''),
(9, 'wk2A', 'wk1', 'wali kelas 2A', '2A', '', '', '', '', '0000-00-00', '', ''),
(10, 'wk2B', 'wk1', 'wali kelas 2B', '2B', '', '', '', '', '0000-00-00', '', ''),
(11, 'wk3A', 'wk1', 'wali kelas 3A', '3A', '', '', '', '', '0000-00-00', '', ''),
(12, 'wk3B', 'wk1', 'wali kelas 3B', '3B', '', '', '', '', '0000-00-00', '', ''),
(13, 'wk3C', 'wk1', 'wali kelas 3C', '3C', '', '', '', '', '0000-00-00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `talternatif`
--
ALTER TABLE `talternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `talternatif_kriteria`
--
ALTER TABLE `talternatif_kriteria`
  ADD PRIMARY KEY (`id_alternatif_kriteria`);

--
-- Indexes for table `tkriteria`
--
ALTER TABLE `tkriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tmahasiswa`
--
ALTER TABLE `tmahasiswa`
  ADD PRIMARY KEY (`kdMahasiswa`);

--
-- Indexes for table `tpengguna`
--
ALTER TABLE `tpengguna`
  ADD PRIMARY KEY (`kdPengguna`);

--
-- Indexes for table `twalikelas`
--
ALTER TABLE `twalikelas`
  ADD PRIMARY KEY (`kdWaka`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `talternatif`
--
ALTER TABLE `talternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `talternatif_kriteria`
--
ALTER TABLE `talternatif_kriteria`
  MODIFY `id_alternatif_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `tkriteria`
--
ALTER TABLE `tkriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tmahasiswa`
--
ALTER TABLE `tmahasiswa`
  MODIFY `kdMahasiswa` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tpengguna`
--
ALTER TABLE `tpengguna`
  MODIFY `kdPengguna` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `twalikelas`
--
ALTER TABLE `twalikelas`
  MODIFY `kdWaka` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
