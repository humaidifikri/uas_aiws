-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 05:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_komentar`
--

CREATE TABLE `table_komentar` (
  `id_komen` int(11) NOT NULL,
  `id_posting` int(255) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_komentar`
--

INSERT INTO `table_komentar` (`id_komen`, `id_posting`, `komentar`) VALUES
(12, 0, 'Bismillahirrahmanirrahim Allahumma sholli ala Muhammad wa ala ali Muhammad Yaa Allah semoga bisa menikah, semoga bisa punya keturunan yang Soleh dan Sholehah.. aamiin yaa robbal alamiin'),
(13, 0, 'Masya allah semoga allah memudahkan urusan saya dan urusan orang2 yg jomblo disekuruh antero negri aamiin'),
(14, 0, 'Ada aa ganteng @karteak4'),
(15, 10, 'Ya allah, aku kalo liat tentang persaudaraan nangis luar biasa, karena aku di didik sama orang tua yang bener2 bisa menghargai saudara satu sama lainnya'),
(16, 10, 'Aah terharu bangeet🥲. Gk kebayang bahagianya sang kakak apalagi liat adiknya lumayan sukses keliatannya 🥲😭😭.. Ah gk kuat pen nangis🥲'),
(17, 10, '8 taun kemana aja?'),
(18, 11, 'Itu Simbolis \"SINGA AREMA\" yang sedang mencari angin menuntut ke adilan 135 nyawa'),
(19, 11, 'Teknologi yang semakin canggih,cepat sekali perkembangannya'),
(20, 11, 'bukan lg 3-4D skrg zamanya Xmetaverse'),
(21, 10, 'pelan pelan pak supir'),
(22, 11, 'mamah aku takut'),
(23, 10, 'jelek banget pak ustad'),
(24, 0, 'diam saja dah'),
(25, 0, 'buruk sekali perangainya'),
(26, 10, 'jalanannya buruk');

-- --------------------------------------------------------

--
-- Table structure for table `table_posting`
--

CREATE TABLE `table_posting` (
  `id_posting` int(255) NOT NULL,
  `judul_posting` text NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_posting`
--

INSERT INTO `table_posting` (`id_posting`, `judul_posting`, `tgl_posting`) VALUES
(0, 'Nikahan Haji Faiz Hajjah Wafa... CEO Daqu Travel dan Dekan Institut Daarul Qur\'an.\r\nAyo, nikah di @pesantrendaqu. Disewain, hehehehe. Sekalian WO dan all in, hahahaha\r\nTulis shalawatnya, tulis doanya. Supaya pd bs nikah dan punya anak. Mau nikah dan mau punya anak.', '2023-07-22'),
(10, 'Ambiled dari ig @viralsekali', '2023-07-21'),
(11, 'istri saya ampe kaget. ADA SINGA DI HARMONI. gila ini. ambulan ampe nguing2. super langka mestinya. untungnya di atas gedung. lah tapi kalo beneran turun? piye?', '2023-07-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_komentar`
--
ALTER TABLE `table_komentar`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_posting` (`id_posting`);

--
-- Indexes for table `table_posting`
--
ALTER TABLE `table_posting`
  ADD PRIMARY KEY (`id_posting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_komentar`
--
ALTER TABLE `table_komentar`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `table_posting`
--
ALTER TABLE `table_posting`
  MODIFY `id_posting` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
