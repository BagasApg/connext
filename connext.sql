-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 07:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connext`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `chat` varchar(1000) NOT NULL,
  `sent_from` varchar(255) NOT NULL,
  `sent_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `chat`, `sent_from`, `sent_at`) VALUES
(4, 'tes', 'epilepsi', '2023-05-20 14:34:02.695000'),
(5, 'slebewww', 'epilepsi', '2023-05-20 14:34:25.435000'),
(41, 'asjdkase', 'epilepsi', '2023-05-20 16:02:53.000000'),
(50, 'tes', 'epilepsi', '2023-05-20 16:50:08.000000'),
(51, 'tes', 'epilepsi', '2023-05-20 16:50:09.000000'),
(52, 'tse', 'epilepsi', '2023-05-20 16:50:12.000000'),
(53, 'setsdr', 'epilepsi', '2023-05-20 16:50:13.000000'),
(54, 'tes', 'epilepsi', '2023-05-20 16:50:35.000000'),
(55, 'tes', 'epilepsi', '2023-05-20 16:50:57.000000'),
(56, 'tes', 'epilepsi', '2023-05-20 16:51:01.000000'),
(57, 'tes', 'epilepsi', '2023-05-20 16:51:02.000000'),
(58, 'asdawe', 'epilepsi', '2023-05-20 16:51:30.000000'),
(59, 'ase', 'epilepsi', '2023-05-20 16:51:31.000000'),
(60, 'ase', 'epilepsi', '2023-05-20 16:51:32.000000'),
(61, 'aes', 'epilepsi', '2023-05-20 16:51:35.000000'),
(62, 'fa', 'epilepsi', '2023-05-20 16:51:39.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
