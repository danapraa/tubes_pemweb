-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 01:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kesehatan_mental`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category` enum('Mental','Bacaanku','Jiwaku') NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `causes` text NOT NULL,
  `symptoms` text NOT NULL,
  `solutions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `keluhan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `nama`, `pekerjaan`, `email`, `keluhan`, `created_at`) VALUES
(1, 'kresna', 'PNS', 'kresna@gmail.com', 'gatau', '2024-05-31 07:24:33'),
(2, 'kresna', 'mahasiswa', 'kresna@gmail.com', 'stress', '2024-06-01 07:45:24'),
(3, 'bagus', 'Mahasiswa', 'bagus@gmail.com', 'capek', '2024-06-04 01:52:22'),
(4, 'nico', 'Mahasiswa', 'nico@gmail.com', 'kesehatan Jiwa', '2024-06-04 03:26:24'),
(5, 'nico', 'Mahasiswa', 'nico@gmail.com', 'Kesehatan Jiwa', '2024-06-04 03:27:16'),
(6, 'Naufal Wahyu Pradana', 'Karyawan Telkom Surabaya', 'naufalsby71@gmail.com', 'Kepala Pusing,Mual, BAB tidak lancar, Ngantuk Berat', '2024-06-05 05:51:17'),
(7, 'saya', 'pelajar', 'kresna@gmail.com', 'sakit perut', '2024-06-05 07:19:17'),
(8, 'hahahaha', 'aaa', 'aaaaaaaaaaa@gmail.com', 'aaaaaaaaaaaa', '2024-06-05 07:26:57'),
(9, 'aaaaaa', 'aaaaaaaaaa', 'kresna@gmail.com', 'aaa', '2024-06-05 07:27:20'),
(10, 'aaaaaaaaa', 'aaa', 'kresna@gmail.com', 'qwqwq', '2024-06-05 07:27:56'),
(11, 'Naufal Wahyu Pradana', 'Mahasiswa', 'kresna@gmail.com', 'sakiy perut', '2024-06-05 07:29:10'),
(12, 'Naufal Wahyu Pradana', 'milioder', 'kresna@gmail.com', 'migrane', '2024-06-05 07:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

CREATE TABLE `medications` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `usage_data` text NOT NULL,
  `side_effects` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `rehab_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `gender`, `nik`, `birth_date`, `phone`, `address`, `appointment_date`, `appointment_time`, `rehab_section`) VALUES
(1, 'Kresna', 'Male', '123456789099', '2000-06-05', '0192931293', 'Surabaya', '2024-05-31', '00:00:15', 'Rehabilitasi NAPZA'),
(2, 'Naufal', 'Male', '123456781', '2003-11-01', '085231830253', 'perak, surabaya', '2024-06-04', '00:00:09', 'Rehabilitasi NAPZA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('dokter','pasien') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`) VALUES
(3, 'dharma', '$2y$10$5SOJMGDegfovq1PGQrgPMutDd7lelcI3GxIQgBtZsXsZPjkIUxL3m', 'dokter', '2024-05-31 07:55:05'),
(4, 'tri', '$2y$10$wGW2XjE/AKWX6nVCvqsefOa6tWIh7AE3FP6.3uQMkz9awqllynWH2', 'dokter', '2024-06-04 01:42:03'),
(5, 'rafael', '$2y$10$2CK/Sub6SXxa5YgjspTpEOzQbF4vEJDb8GgrY6EnF4pDOxyYULOQG', 'dokter', '2024-06-04 02:32:07'),
(6, 'nico', '$2y$10$pQ9zMhqxVd1B73TafaONW.hWJ.68.J/XXFu6.t7iiIlgi7eztF9mm', 'dokter', '2024-06-04 02:33:52'),
(11, 'bagus', '$2y$10$XhVUoFDtSHP19FbVX7ulwuq2sGFYG37x9Oenuldgq4RzNSgvyMcUW', 'pasien', '2024-06-04 02:52:16'),
(12, 'azzam', '$2y$10$pvHKbiJQkEEPgaLALcJQF.XPkghM5rSuX4wJQ5nPDReOiqi4SxtcS', 'pasien', '2024-06-04 03:23:47'),
(13, 'Kresna', '$2y$10$R0I63xRV/ZHbKgib.ZBFG.IdWTd8mPfIwrFMT0BXrX1Ook9czQKqi', 'dokter', '2024-06-05 08:11:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medications`
--
ALTER TABLE `medications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `medications`
--
ALTER TABLE `medications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
