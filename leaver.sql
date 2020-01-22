-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 07:20 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leaver`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_teacher` bigint(20) NOT NULL,
  `token` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `id_teacher`, `token`, `created_at`, `updated_at`) VALUES
(4, 'PABP XII', 6, 'CHrS7m', '2020-01-06 23:01:13', '2020-01-06 23:01:13'),
(5, 'PABP XI', 6, 'zqMB9a', '2020-01-06 23:02:16', '2020-01-06 23:02:16'),
(6, 'PPKN', 7, 'Yh6qy5', '2020-01-14 21:21:29', '2020-01-14 21:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id` int(11) NOT NULL,
  `id_student` bigint(20) NOT NULL,
  `id_course` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id`, `id_student`, `id_course`, `created_at`, `updated_at`) VALUES
(1, 3, 5, '2020-01-07 06:53:01', '0000-00-00 00:00:00'),
(2, 5, 4, '2020-01-07 00:49:57', '2020-01-07 00:49:57'),
(3, 5, 5, '2020-01-07 01:05:14', '2020-01-07 01:05:14'),
(4, 2, 4, '2020-01-21 21:22:21', '2020-01-21 21:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `courses_id` bigint(20) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `role`, `password`, `email`, `course`, `created_at`, `updated_at`) VALUES
(1, 'Slamet Suryono', 'cgunawan', 'student', '$2y$10$2QM9z3syFOKxM1dFm74sK.XyO.EC3AmAMuxxIpu78TIsaFGg99L3G', 'budiman.eka@gmail.com', '', NULL, NULL),
(2, 'Harja Wibowo', 'gpermata', 'student', '$2y$10$r7MAXjCt/3MMQd58YmclZuNeLKSZBxKvq2wHTtIIhJkeE349xWO7q', 'azalea94@gmail.com', '', NULL, NULL),
(3, 'Amelia Yuliarti S.E.', 'nrima.astuti', 'student', '$2y$10$9Y1wHkLVU8v9htyK7X6YK.rWGQoWRvtpsnsRPrE14SnesWY4OUu5u', 'safitri.ifa@yahoo.co.id', '', NULL, NULL),
(4, 'Marwata Sirait', 'gyuniar', 'student', '$2y$10$8BniUs6Tci3wE4pRHbZmYO4cznzPBrr.EaTelG60yuaQWud6Oo51K', 'ssaptono@handayani.net', '', NULL, NULL),
(5, 'Baktianto Narpati S.Ked', 'dinda67', 'student', '$2y$10$mAJoXbQuOPmQXr5JaxhbTuglO5UbaEHWX38ZVceQyIIuDK9G.SmWS', 'janet.widiastuti@purwanti.biz', '', NULL, NULL),
(6, 'tombo0', 'tombo0', 'teacher', '$2y$10$7bWPGh4Y/7UYTph4BBmZg.42HasvaMQjFL7v7puMwXRlRBtAqkWta', 'tombo0@gmail.com', NULL, '2019-12-30 07:12:59', '2019-12-30 07:12:59'),
(7, 'tombo1', 'tombo1', 'teacher', '$2y$10$KHU.K.MRyioyvF.uNYBHd.QGjKRWOOVVq46eSdfp0Ufe3lf1Sly2C', 'tombo1@gmail.com', NULL, '2020-01-12 18:33:50', '2020-01-12 18:33:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_student` (`id_student`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `courses_id` (`courses_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `users` (`id`);

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id`);

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`courses_id`) REFERENCES `courses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
