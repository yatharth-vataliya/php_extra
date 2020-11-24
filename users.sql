-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2019 at 08:12 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yatharth vataliya', 'yatharthvataliya@gmail.com', NULL, '$2y$10$31pN.lSODOIc.ZFzVqKRuupphRiC6y3VBDDp9CWJNvbIfLtputdAG', 'Py9hFwaBDd2DRD1L65vd4MqhyCHJQA4lv9WZVtxewBJoSLSQakDgF8jHgpKg', '2019-05-18 04:48:42', '2019-05-18 04:57:12'),
(2, 'Irma Kirlin', 'rafael29@example.com', '2019-05-18 06:10:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'FjxyDXN9tW', '2019-05-18 06:10:34', '2019-05-18 06:10:34'),
(3, 'Mr. Jimmy Kling', 'nora.torp@example.net', '2019-05-18 06:10:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'PGrgvCGF3G', '2019-05-18 06:10:35', '2019-05-18 06:10:35'),
(4, 'Edythe Boehm', 'queenie.bosco@example.org', '2019-05-18 06:10:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'D6k0NAmGd6', '2019-05-18 06:10:35', '2019-05-18 06:10:35'),
(5, 'Mr. Rashawn Quigley Jr.', 'bkilback@example.net', '2019-05-18 06:10:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'raVZ3vHLjH', '2019-05-18 06:10:35', '2019-05-18 06:10:35'),
(6, 'Thea Rath', 'jarret21@example.org', '2019-05-18 06:10:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'bNSB89WsOJ', '2019-05-18 06:10:35', '2019-05-18 06:10:35'),
(7, 'Kasey Schmeler DVM', 'garrison.watsica@example.com', '2019-05-18 06:10:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'tpidFnYfTF', '2019-05-18 06:10:35', '2019-05-18 06:10:35'),
(8, 'Liliana O\'Kon', 'udickens@example.com', '2019-05-18 06:10:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'CTgdR4pifz', '2019-05-18 06:10:35', '2019-05-18 06:10:35'),
(9, 'Brennon Anderson III', 'mwisoky@example.com', '2019-05-18 06:10:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'WQ5VHzMmVW', '2019-05-18 06:10:35', '2019-05-18 06:10:35'),
(10, 'Jeanie Donnelly', 'cmcglynn@example.net', '2019-05-18 06:10:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'H2vfCjkNgd', '2019-05-18 06:10:35', '2019-05-18 06:10:35'),
(11, 'Kadin Yost IV', 'monserrat32@example.com', '2019-05-18 06:10:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'j3jr1z36jN', '2019-05-18 06:10:35', '2019-05-18 06:10:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
