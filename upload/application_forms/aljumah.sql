-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 04:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aljumah`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_tab`
--

CREATE TABLE `app_tab` (
  `id_count` int(9) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name_app` varchar(270) NOT NULL,
  `name2_app` varchar(270) NOT NULL,
  `id_app` int(10) NOT NULL,
  `ph_app` varchar(10) NOT NULL,
  `email_app` varchar(270) NOT NULL,
  `order_app` varchar(1080) NOT NULL,
  `sum_app` varchar(1080) NOT NULL,
  `img_app` varchar(270) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_tab`
--

INSERT INTO `app_tab` (`id_count`, `date`, `name_app`, `name2_app`, `id_app`, `ph_app`, `email_app`, `order_app`, `sum_app`, `img_app`) VALUES
(77, '2023-11-28 14:35:24', 'محمد سمير', 'مؤسسة مريم بن حازم المطيري', 0, '0541844622', '', 'اخرى', 'قامت المؤسسه يعمل خروج نهائي لي دون اعلامي و عندما واجهت صاحب المؤسسه بالامر طلب من البحث عن عمل و اخبرني انه سيلغي خروجي و ينقلني لمؤسسه اخرى في حال وجدت عمل و عندما وجدت عمل في مؤسسة اخرى لم يقم بإلغاء الخروج النهائي و بسببه لا استطيع نقل كفالتي لصاحب العمل الاخر و هو مؤسسة بانوراما القصيم للبرمجة', 'signature/1701182124.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_tab`
--
ALTER TABLE `app_tab`
  ADD PRIMARY KEY (`id_count`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_tab`
--
ALTER TABLE `app_tab`
  MODIFY `id_count` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
