-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 10:22 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_soal`
--

CREATE TABLE `detail_soal` (
  `ID` int(10) NOT NULL,
  `ID_SOAL` int(10) UNSIGNED NOT NULL,
  `PERTANYAAN` varchar(1000) NOT NULL,
  `JAWABAN` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_soal`
--

INSERT INTO `detail_soal` (`ID`, `ID_SOAL`, `PERTANYAAN`, `JAWABAN`) VALUES
(1, 1, 'Syntax untuk loop for 10 kali:', 'A'),
(2, 1, 'Kode if value == false {cout << \"Hello\"} memeriksa:', 'A'),
(3, 1, 'Kode yang berlaku untuk melakukan loop sampai value false adalah:', 'C'),
(4, 1, 'Syntax untuk menyimpan nilai 2 di array ke-5', 'A'),
(5, 1, 'Jika suatu array belum dideklarasi, array tersebut masih dapat dipakai', 'B'),
(6, 1, 'fungsi yang digunakan untuk membalik string', 'A'),
(7, 1, 'manakah yang termasuk fungsi pengulangan atau loop', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan_jawaban`
--

CREATE TABLE `pilihan_jawaban` (
  `ID` int(10) NOT NULL,
  `ID_DETAIL_SOAL` int(10) NOT NULL,
  `DESCRIPTION` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihan_jawaban`
--

INSERT INTO `pilihan_jawaban` (`ID`, `ID_DETAIL_SOAL`, `DESCRIPTION`) VALUES
(1, 1, 'a. For(i=0;i<10;i++){}'),
(2, 1, 'b. For(i=1;i<9;i++){}'),
(3, 1, 'c. For(i=10;i<1;i--){}'),
(4, 1, 'd. For(i=1;i!=10;i++){}'),
(5, 1, 'e. Do While (i < 9){i++}'),
(6, 2, 'a. jika value false maka akan mengoutput string Hello'),
(7, 2, 'b. jika value true maka akan mengoutput string Hello'),
(8, 2, 'c. jika false adalah value maka mengoutput string Hello'),
(9, 2, 'd. jika value false maka akan mengoutput string olleH'),
(10, 2, 'e. jika value false maka akan menginput string Hello'),
(11, 3, 'a. Do...While (value == false)'),
(12, 3, 'b. Do...While (value != true)'),
(13, 3, 'c. Do...While (value != false)'),
(14, 3, 'd. Do...Until (value == false)'),
(15, 3, 'e. Do...Until (value == true)'),
(16, 4, 'a. array[5] = 2'),
(17, 4, 'b. array[2] = 5'),
(18, 4, 'c. array[3] = 2+5'),
(19, 4, 'd. for (i=2;i<5;array[i])'),
(20, 4, 'e. if array[2] = 5 {array[2]}'),
(21, 5, 'a. True'),
(22, 5, 'b. False'),
(23, 5, 'c. Trick Question'),
(24, 5, 'd. Bisa jadi'),
(25, 5, 'e. Bisa jadi tidak'),
(26, 6, 'a. Strlen'),
(27, 6, 'b. Strrev'),
(28, 6, 'c strcpy'),
(29, 6, 'd. strlwr '),
(30, 6, 'e.strupper');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `skor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `username`, `skor`) VALUES
(1, 'asdd', 80),
(2, 'asdd', 80),
(3, 'asdd', 60),
(4, 'asdd', 60),
(5, 'agastya', 60),
(6, 'agastya', 40),
(7, 'agastya', 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(0, 'asdd', 'assa@mail.com', 'user', '912ec803b2ce49e4a541068d495ab570'),
(0, 'admin', 'admin@mail', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(0, 'agastya', 'agastya@mail.com', 'user', '912ec803b2ce49e4a541068d495ab570'),
(0, 'Kenny', 'FoolishKenny@mail.com', 'admin', '912ec803b2ce49e4a541068d495ab570'),
(0, 'Angelica', 'SammieAngelica@mail.com', 'admin', '912ec803b2ce49e4a541068d495ab570');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_soal`
--
ALTER TABLE `detail_soal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pilihan_jawaban`
--
ALTER TABLE `pilihan_jawaban`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_soal`
--
ALTER TABLE `detail_soal`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pilihan_jawaban`
--
ALTER TABLE `pilihan_jawaban`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
