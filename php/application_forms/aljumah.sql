-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 02:49 AM
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
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_tab`
--

CREATE TABLE `app_tab` (
  `id_count` int(9) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name_app` varchar(270) NOT NULL,
  `id_app` int(10) NOT NULL,
  `ph_app` int(10) NOT NULL,
  `email_app` varchar(270) NOT NULL,
  `order_app` varchar(1080) NOT NULL,
  `sum_app` varchar(1080) NOT NULL,
  `img_app` varchar(270) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_tab`
--

INSERT INTO `app_tab` (`id_count`, `date`, `name_app`, `id_app`, `ph_app`, `email_app`, `order_app`, `sum_app`, `img_app`) VALUES
(72, '2023-06-22 08:30:49', 'sss', 111111111, 111111111, 'ssss@kee', 'sss', 'sss', 'signature/1687422650.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file` varchar(270) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hdate` date NOT NULL,
  `mdate` date NOT NULL,
  `link1` varchar(270) DEFAULT NULL,
  `link2` varchar(270) DEFAULT NULL,
  `link3` varchar(270) DEFAULT NULL,
  `link4` varchar(270) DEFAULT NULL,
  `link5` varchar(270) DEFAULT NULL,
  `link6` varchar(270) DEFAULT NULL,
  `link7` varchar(270) DEFAULT NULL,
  `link8` varchar(270) DEFAULT NULL,
  `link9` varchar(270) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file`, `hdate`, `mdate`, `link1`, `link2`, `link3`, `link4`, `link5`, `link6`, `link7`, `link8`, `link9`) VALUES
('000000001', '1442-10-06', '2021-05-18', '', '', '', '', '', '', '', '', ''),
('000000002', '1442-10-10', '2021-05-22', '', '', '', '', '', '', '', '', ''),
('000000003', '1442-10-18', '2021-05-30', '', '', '', '', '', '', '', '', ''),
('000000004', '1442-10-18', '2021-05-30', '', '', '', '', '', '', '', '', ''),
('000000005', '1442-10-21', '2021-06-02', '', '', '', '', '', '', '', '', ''),
('000000006', '1443-02-09', '2021-09-16', '', '', '', '', '', '', '', '', ''),
('000000007', '1443-02-17', '2021-09-24', '', '', '', '', '', '', '', '', ''),
('000000008', '1443-02-24', '2021-10-01', '', '', '', '', '', '', '', '', '/coodxroot/000000008/000000008_9/'),
('000000009', '1443-03-02', '2021-10-08', '', '', '', '', '', '', '', '', ''),
('000000010', '1443-03-09', '2021-10-15', '', '', '', '', '', '', '', '', '/coodxroot/000000010/000000010_9/'),
('000000011', '1443-03-16', '2021-10-22', '', '', '', '', '', '', '', '', ''),
('000000012', '1443-03-23', '2021-10-29', '', '', '', '', '', '', '', '', ''),
('000000013', '1443-03-30', '2021-11-05', '', '', '', '', '', '', '', '', '/coodxroot/000000013/000000013_9/'),
('000000014', '1443-10-03', '2022-05-04', '', '', '', '', '', '', '', '', '/coodxroot/000000014/000000014_9/'),
('000000015', '1443-11-20', '2022-06-19', '', '', '', '', '', '', '', '', ''),
('000000016', '1443-11-25', '2022-06-24', '', '', 'https://www.facebook.com/u3cover/', '', 'https://t.me/CooDxRooT', '', '', '', ''),
('000000017', '1443-12-02', '2022-07-01', '', 'https://www.facebook.com/groups/UND3RCOVER/posts/3587427381484039/?comment_id=3587508281475949&reply_comment_id=3587835044776606', 'https://www.facebook.com/garocraft', 'https://www.youtube.com/watch?v=DyyeyJZGg8s&list=PLMyFNDZ-tpiRHmH9GXtRwVVWFzRxSPDxi&index=1', 'https://t.me/CooDxRooT', '', '', '', ''),
('000000018', '1443-12-09', '2022-07-08', '', '', 'https://www.facebook.com/CooDxRooT/', '', 'https://t.me/CooDxRooT', '', '', '', ''),
('000000019', '1443-12-16', '2022-07-15', '', '', '', '', 'https://t.me/CooDxRooT', '', '', 'https://t.me/CooDxRooT', ''),
('000000020', '1443-12-23', '2022-07-22', '', 'youtu.be/0-vxW5nxMFI', '', '', 'https://t.me/CooDxRooT', 'https://www.facebook.com/wd.alnzht', '', 'facebook.com/profile.php?id=100063992407025', ''),
('000000021', '1443-12-30', '2022-07-29', '', 'youtu.be/0-vxW5nxMFI', 'https://www.facebook.com/akramjaxon/', '', 'https://t.me/CooDxRooT', 'https://www.facebook.com/zuher.mohammed.524', '', 'https://www.facebook.com/profile.php?id=100063992407025', 'https://www.facebook.com/ctrla249/'),
('000000022', '1444-01-07', '2022-08-05', 'https://play.google.com/store/apps/developer?id=Leap+Fitness+Group&hl=ar&gl=US', '', '', '', '', 'https://www.facebook.com/ahmed.altayib.585?_rdc=1&_rdr', '', 'https://www.facebook.com/profile.php?id=100063992407025', 'https://drive.google.com/uc?id=1cC-BAz6KSXcgm-s3MsSsG8b19PEXd2tZ&export=download'),
('000000023', '1444-01-14', '2022-08-12', '', 'https://youtu.be/I1PwiuA2Kxc', '', '', '', 'https://www.facebook.com/wd.alnzht/', '', 'https://www.facebook.com/profile.php?id=100063992407025', 'https://drive.google.com/uc?id=1cC-BAz6KSXcgm-s3MsSsG8b19PEXd2tZ&export=download'),
('000000024', '1444-01-22', '2022-08-19', '', 'https://www.facebook.com/Call.of.islam9/', 'https://www.youtube.com/watch?v=BxYgKB-CBpU&feature=youtu.be', '', '', '', '', 'https://www.facebook.com/profile.php?id=100063992407025', 'https://t.me/CooDxRooT'),
('000000025', '1444-08-18', '2023-03-10', '', '', '', '', '', 'https://www.youtube.com/playlist?list=PLwhFNPXS_gdVbDG_iBwkMn5Di1TwZ6px9', '', '', 'https://u3cover.com/coodxroot/000000025/000000025_9/000000025_9.php'),
('000000026', '1444-08-25', '2023-03-17', NULL, NULL, NULL, NULL, 'https://play.google.com/store/apps/developer?id=Leap+Fitness+Group&hl=ar&gl=US', NULL, 'https://www.youtube.com/channel/UC-OdiLiFh93OAG7OnFyadRQ', 'https://www.youtube.com/watch?v=QsL5AUsqwns', 'https://www.youtube.com/watch?v=1iiwBGXSMeM'),
('000000027', '1444-09-09', '2023-03-31', NULL, NULL, NULL, 'https://u3cover.com/coodxroot/000000027/000000027_4/000000027_4.php', NULL, NULL, NULL, 'https://firefly.adobe.com/', 'https://u3cover.com/coodxroot/000000027/000000027_9/000000027_9.php');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `n` int(9) NOT NULL,
  `link` varchar(270) DEFAULT NULL,
  `alt` varchar(270) DEFAULT NULL,
  `title` varchar(270) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`n`, `link`, `alt`, `title`) VALUES
(1, '/coodxroot/user.php', 'user', 'CooDxRooT'),
(2, NULL, NULL, NULL),
(3, NULL, NULL, NULL),
(4, '/coodxroot/000000027/000000027_4/000000027_4.php', 'ostora', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, NULL, '', ''),
(8, 'https://firefly.adobe.com/', '', ''),
(9, '/coodxroot/000000027/000000027_9/000000027_9.php', 'GTA3', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `counter` int(9) NOT NULL,
  `user` varchar(270) NOT NULL,
  `password` varchar(270) NOT NULL,
  `permissions` varchar(9) NOT NULL,
  `Opoint` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`counter`, `user`, `password`, `permissions`, `Opoint`) VALUES
(1, 'ابو القدح', 'yابوالقدح', '9', 0),
(2, '1', '1', '2', 81),
(3, 'AssleKeef', '23rwew3', '2', 100),
(4, 'Shaip149', '131331', '2', 100),
(5, 'Mhatgo', '2fdefdf', '2', 100),
(6, 'Zool_ady', 'ROOT@AAA@128 ', '2', 99),
(7, 'Ninja_Chan', '22ws222e', '2', 100),
(8, 'hmmaas', 'as12s3d3f', '2', 100),
(9, 'M_hajrabi', 'sdsdssddwd3', '2', 100),
(10, 'ahmed_bot98', 'sdsdssddwd3', '2', 100),
(11, 'VEn3ix', 'f3f3ff3f3', '2', 100),
(12, 'ZuhMhmd', 'swwswsw', '2', 100),
(13, 'Kawaii_Lolly', '23erd33', '2', 100),
(14, 'Asma715', '3434343r3d', '2', 100),
(15, 'samuraiJAX', '2e2e22e2w', '2', 99),
(16, 'dandrawi', '20232016 ', '2', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_tab`
--
ALTER TABLE `app_tab`
  ADD PRIMARY KEY (`id_count`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD UNIQUE KEY `file` (`file`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`n`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`counter`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_tab`
--
ALTER TABLE `app_tab`
  MODIFY `id_count` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `n` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `counter` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
