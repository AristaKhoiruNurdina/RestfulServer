-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 08:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_valorant`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_hero`
--

CREATE TABLE `tb_hero` (
  `id_hero` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `peran` varchar(30) NOT NULL,
  `biodata` varchar(255) NOT NULL,
  `url_hero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hero`
--

INSERT INTO `tb_hero` (`id_hero`, `nama`, `peran`, `biodata`, `url_hero`) VALUES
(1, 'Jeet', 'Duelist', 'Mewakili negara asalnya, Korea Selatan, gaya bertarung Jett yang tangkas dengan banyak pengelakan memungkinkannya mengambil risiko yang tak bisa dilakukan orang lain. Dia mengitari tiap pertempuran, menebas musuh sebelum mereka menyadari apa yang terjadi.', 'https://cdn1.dotesports.com/wp-content/uploads/2021/01/22161438/VALORANT_Jett_Dark-scaled.jpg'),
(2, 'Raze', 'Duelist', 'Raze membawa kemeriahan dari Brasil bersama kepribadian besar serta senapan besarnya. Dengan gaya bermain trauma benda tumpul, dia unggul dalam menyapu musuh bertahan dan mengosongkan ruang sempit dengan ledakan besar.', 'https://gamedaim.com/wp-content/uploads/2020/09/Raze-Valorant-800x450.jpg'),
(3, 'Breach', 'Initiator', 'Breach, orang bionik dari Swedia, menembakkan ledakan kinetik kuat tertarget untuk membuka jalan secara agresif menembus wilayah musuh. Kerusakan dan gangguan yang dia timbulkan memastikan pertarungan tak akan pernah adil.', 'https://1.bp.blogspot.com/-PIOdhoJHUOk/XvQfK3V3BWI/AAAAAAAAyK0/GQwVEZVnYxY0AcICDyYv53Vu6WFc2WrjACLcBGAsYHQ/s2560/breach-valorant-4k-nu-3840x2160.jpg'),
(4, 'Omen', 'Controller', 'Sesosok hantu dalam pikiran, Omen berburu di dalam bayangan. Dia membutakan musuh, berteleportasi di penjuru medan tempur, lalu membiarkan rasa paranoid menghantui selagi musuh berusaha menerka di mana dia akan menyerang berikutnya.', 'https://cx.valorbuff.com/blob/B8CfBcCUanJYKNp2KNUOK6sYKrUYBtcYia-S5+UsK6b3i1x3i1D35thrKXCGkEWqiZ?w=1200'),
(5, 'Brimstone', 'Controller', 'Bergabung dari AS, persenjataan orbital Brimstone memastikan pasukannya selalu berada di posisi menguntungkan. Kemampuannya untuk melancarkan bantuan secara presisi dari jarak jauh menjadikannya seorang komandan tempur tak tertandingi.', 'https://1.bp.blogspot.com/-5Wb-WFBQ5xo/XvQelkNxE3I/AAAAAAAAyKk/rvST9tBQQxgdrSjWExuFFkVbJxxwK2joQCLcBGAsYHQ/s2560/brimstone-valorant-9i-3840x2160.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_hero`
--
ALTER TABLE `tb_hero`
  ADD PRIMARY KEY (`id_hero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
