-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 10:27 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `email`) VALUES
(5, 'Bambang Purnomo', 'dosen1@gmail.com'),
(6, 'Supardi Magelan', 'dosen2@gmail.com');

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
  `step` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(72, 'mahasiswa', 1010101010, 'mahasiswa@gmail.com', 'default.png', '$2y$10$jrGA4T/hp6J8LD8laInbauDThN0lZCHz910hv3ZknUOBPn47I.9su', 4, 1, 1590972707, '2f3016ed00fab9ac091d05bf82594aeb.png'),
(75, 'Franky Subakti', 710659931, 'koordinator@gmail.com', 'default.png', '$2y$10$RWyXwhH7JIJtcpc0ntr3AOUjHcBIlDjF7TMYJqJuMP0kkG8f2Ygje', 3, 1, 1590972971, '08cd5d1dc84258bb6a747ced5fcbbc1b.png'),
(76, 'Bambang Purnomo', 71098622, 'dosen1@gmail.com', 'default.png', '$2y$10$n7QCmeSI6qAW81vq79Zn7.kuHfy6DuHZp4zwKrAS8SDAlauWZuqY2', 2, 1, 1590973326, ''),
(77, 'Supardi Magelan', 71098657, 'dosen2@gmail.com', 'default.png', '$2y$10$LGjvr.ZDNz8hT3FjoKgOAOjzj8cSUcY4Jf48rJqKKUqLUGTz5Raqi', 2, 1, 1590973384, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'mahasiswa'),
(3, 'dosen'),
(4, 'koordinator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ba_bimbingan`
--
ALTER TABLE `ba_bimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bimbingan_proposal`
--
ALTER TABLE `bimbingan_proposal`
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
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
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
-- AUTO_INCREMENT for table `bimbingan_proposal`
--
ALTER TABLE `bimbingan_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengajuan_judul`
--
ALTER TABLE `pengajuan_judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
