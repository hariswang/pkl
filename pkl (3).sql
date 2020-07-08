-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 02:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `ba_bimbingan`
--

CREATE TABLE `ba_bimbingan` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nim` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ba_proposal`
--

CREATE TABLE `ba_proposal` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `berkas` varchar(256) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan_proposal`
--

CREATE TABLE `bimbingan_proposal` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nim` int(11) NOT NULL,
  `berkas` varchar(256) NOT NULL,
  `progres` varchar(256) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `catatan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bimbingan_proposal`
--

INSERT INTO `bimbingan_proposal` (`id`, `nama`, `nim`, `berkas`, `progres`, `waktu`, `catatan`) VALUES
(68, 'yoes fanny', 1710651111, '04d1586107d5f54e90997e4fc5dbf9be.pdf', 'bismillah', '2020-06-28 02:42:25', ''),
(69, 'yoes fanny', 1710651111, '04d1586107d5f54e90997e4fc5dbf9be.pdf', 'bismillah', '2020-06-28 03:20:20', '<p>hit me</p>\r\n'),
(70, 'Andre Chrissandhy', 7560256, 'b2e461af7f03fb6cd35f8eb4456fba5a.pdf', 'Evaluasi SI', '2020-07-01 01:31:42', ''),
(71, 'Hari purnomo', 2147483647, '37afa17e031767a74f066f014477beea.docx', 'aku', '2020-07-01 12:14:49', ''),
(75, 'yoes fanny', 1710651111, '04d1586107d5f54e90997e4fc5dbf9be.pdf', 'bismillah', '2020-07-06 18:06:21', '<p>ok mantab</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan_ta`
--

CREATE TABLE `bimbingan_ta` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `berkas` varchar(256) NOT NULL,
  `progres` varchar(256) NOT NULL,
  `catatan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bimbingan_ta`
--

INSERT INTO `bimbingan_ta` (`id`, `nim`, `nama`, `waktu`, `berkas`, `progres`, `catatan`) VALUES
(1, 1710651111, 'yoes fanny', '2020-07-06 18:02:22', 'fdfdbde7bf43404f3f774f53e26a0593.pdf', 'jangan marah marah', ''),
(2, 1710651111, 'yoes fanny', '2020-07-06 18:09:22', 'fdfdbde7bf43404f3f774f53e26a0593.pdf', 'jangan marah marah', '<p>mantab kaliii</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jabatan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `no_induk`, `nama`, `email`, `jabatan`) VALUES
(5, 0, 'Bambang Purnomo', 'dosen1@gmail.com', 'Dosen'),
(6, 0, 'Supardi Magelan', 'dosen2@gmail.com', 'Dosen'),
(7, 0, 'Hadi Jauhari', 'dosen3@gmail.com', 'Dosen'),
(8, 0, 'Buwung Apa Tuh Man', 'buwung@gmail.com', 'Dosen'),
(9, 0, 'Jauhari Rahmad', 'jauhari@gmail.com', 'Dosen'),
(10, 71098622, 'agus gundam', 'agus@gmail.com', 'Koordinator');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_judul`
--

CREATE TABLE `pengajuan_judul` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nim` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `pildos1` varchar(256) NOT NULL,
  `pildos2` varchar(256) NOT NULL,
  `berkas` varchar(256) NOT NULL,
  `step` int(11) NOT NULL,
  `acc_dosen1` int(11) NOT NULL,
  `acc_dosen2` int(11) NOT NULL,
  `jadwal_ujian_proposal` varchar(256) NOT NULL,
  `jadwal_ujian_ta` varchar(256) NOT NULL,
  `jadwal_seminar` varchar(256) NOT NULL,
  `penguji_1` varchar(256) NOT NULL,
  `penguji_2` varchar(256) NOT NULL,
  `acc_dospeng1` int(11) NOT NULL,
  `acc_dospeng2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_judul`
--

INSERT INTO `pengajuan_judul` (`id`, `nama`, `nim`, `judul`, `pildos1`, `pildos2`, `berkas`, `step`, `acc_dosen1`, `acc_dosen2`, `jadwal_ujian_proposal`, `jadwal_ujian_ta`, `jadwal_seminar`, `penguji_1`, `penguji_2`, `acc_dospeng1`, `acc_dospeng2`) VALUES
(58, 'yoes fanny', 1710651111, 'bismillah', 'Bambang Purnomo', 'Supardi Magelan', '04d1586107d5f54e90997e4fc5dbf9be.pdf', 7, 4, 4, '07/10/2020', '07/21/2020', '07/24/2020', 'Hadi Jauhari', 'Buwung Apa Tuh Man', 2, 2),
(59, 'Andre Chrissandhy', 7560256, 'Evaluasi SI', 'Bambang Purnomo', 'Supardi Magelan', 'b2e461af7f03fb6cd35f8eb4456fba5a.pdf', 1, 0, 0, '', '', '', '', '', 0, 0),
(60, 'Hari purnomo', 2147483647, 'aku', 'Bambang Purnomo', 'Hadi Jauhari', '37afa17e031767a74f066f014477beea.docx', 1, 0, 0, '', '', '', '', '', 0, 0),
(61, 'Jessica ayu Dewi vellysta palupi', 1910651025, '', '', '', '', 1, 0, 0, '', '', '', '', '', 0, 0),
(62, 'Angga Ramadhan', 123123123, '', '', '', '', 1, 0, 0, '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `no_induk`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `berkas`) VALUES
(71, 'Haris Widyanto Anggriawan', 1710651109, 'hschecter13@gmail.com', 'default.png', '$2y$10$bsGyCeDQpTzmtk3lxy1EDetNYeKIOyF8hcHnYGVlgXqSy7Ry9pLd6', 1, 1, 1590972314, '93776b3f8a1a2c0db95444628d505b4e.png'),
(75, 'Franky Subakti', 710659931, 'koordinator@gmail.com', 'default.png', '$2y$10$RWyXwhH7JIJtcpc0ntr3AOUjHcBIlDjF7TMYJqJuMP0kkG8f2Ygje', 2, 1, 1590972971, '08cd5d1dc84258bb6a747ced5fcbbc1b.png'),
(76, 'Bambang Purnomo', 71098622, 'dosen1@gmail.com', 'default.png', '$2y$10$n7QCmeSI6qAW81vq79Zn7.kuHfy6DuHZp4zwKrAS8SDAlauWZuqY2', 2, 1, 1590973326, ''),
(77, 'Supardi Magelan', 71098657, 'dosen2@gmail.com', 'default.png', '$2y$10$LGjvr.ZDNz8hT3FjoKgOAOjzj8cSUcY4Jf48rJqKKUqLUGTz5Raqi', 2, 1, 1590973384, ''),
(82, 'Hadi Jauhari', 1234567, 'dosen3@gmail.com', 'default.png', '$2y$10$jJ6hLDohZGETNgoPAMuk4.uqgtx/.q4uOzf8/mNXkEclsz998na4W', 2, 1, 1591325572, ''),
(115, 'yoes fanny', 1710651111, 'yoes@gmail.com', 'default.png', '$2y$10$qCh3zeEjeMQSvrpWPpdQIe9B5C7R8ziwt7kTEmxTdb944zTtm5LFG', 4, 1, 1593312060, '3c7952ea5e6ef10480d9584543f9e06c.png'),
(116, 'Buwung Apa Tuh Man', 453643454, 'buwung@gmail.com', 'default.png', '$2y$10$prcQEI7e00mxrON3N9BBd.RaC/XAk.AsaXIZcz/iznndrGCDC/4G2', 2, 1, 1593315054, ''),
(117, 'Jauhari Rahmad', 7876398, 'jauhari@gmail.com', 'default.png', '$2y$10$aM6tkdwIUyv/rStewIEnQedtmgGAWlyTgkXNIAyx/.fIWK85rLONi', 2, 1, 1593319928, ''),
(118, 'Andre Chrissandhy', 7560256, 'andre@gmail.com', 'default.png', '$2y$10$WbkORLFyqp61qS8FlG65/.9YgKHlA8dHDOxWeJSakUVSuvLcTWhJq', 2, 1, 1593565613, '04b39418a69f51c1bce172cb7553b6f6.png'),
(120, 'agus gundam', 71098622, 'agus@gmail.com', 'default.png', '$2y$10$YUd4C.1JvrVt.pklAFmA0eLagcW7YZCI7QqjCTX/k9mkw/pcrAbEa', 3, 1, 1593741573, ''),
(122, 'Jessica ayu Dewi vellysta palupi', 1910651025, 'Jessicacantikiyaterimakasih@gmail.com', 'default.png', '$2y$10$//bb80N/zCHMLbtoA.ak6uxWLWpA75.GsiUyVuaz39pm1AguHLWzO', 4, 1, 1594004539, '218b3047b26c04bb2ca1fc22f908d268.png'),
(123, 'Angga Ramadhan', 123123123, 'angga@gmail.com', 'default.png', '$2y$10$A3kp3fSweR312gDsfX/rtuTcjGyCw2tee56PsB1GeGotZJxwTh1WS', 4, 1, 1594206444, '3d12811016cd7232e7e0c30a6fb81856.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ba_bimbingan`
--
ALTER TABLE `ba_bimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ba_proposal`
--
ALTER TABLE `ba_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bimbingan_proposal`
--
ALTER TABLE `bimbingan_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bimbingan_ta`
--
ALTER TABLE `bimbingan_ta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan_judul`
--
ALTER TABLE `pengajuan_judul`
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
-- AUTO_INCREMENT for table `ba_bimbingan`
--
ALTER TABLE `ba_bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ba_proposal`
--
ALTER TABLE `ba_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bimbingan_proposal`
--
ALTER TABLE `bimbingan_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `bimbingan_ta`
--
ALTER TABLE `bimbingan_ta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengajuan_judul`
--
ALTER TABLE `pengajuan_judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
