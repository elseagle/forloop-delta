-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 01:35 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forloop`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries`
--

CREATE TABLE `beneficiaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interval` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `random` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`id`, `name`, `amount`, `interval`, `account`, `status`, `sender`, `description`, `random`, `created_at`, `updated_at`) VALUES
(1, 'James', '10002', '7', '4565689876', 'active', 'fjhhames', 'james', 'cETllqJuuk', '2018-07-02 09:05:20', '2018-07-02 09:05:20'),
(2, 'James', '12000', '7', '1234567890', 'active', 'fjhhames', 'ytest', 'eFHd4QyngK', '2018-07-02 09:08:41', '2018-07-02 09:08:41'),
(3, 'Erioluwa', '1200', '7', '9890987656', 'active', 'fjhhames', 'For me to do all this\r\nBullshit', 'ZCr3GC6VPF', '2018-07-02 09:17:03', '2018-07-02 09:17:03'),
(4, 'Name', '8900', '7', '2290019283', 'active', 'fjhhames', 'james is stull testing', 'znYOd6vzuB', '2018-07-02 09:22:04', '2018-07-02 09:22:04'),
(5, 'James again', '12900', '14', '0909876567', 'active', 'f', 'James is a good boy iya iya o', '90yfHGceIj', '2018-07-02 10:29:59', '2018-07-02 10:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_01_160828_signup_table', 2),
(4, '2018_07_01_161731_create_signups_table', 2),
(5, '2018_07_02_071532_create_beneficiaries_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`id`, `firstname`, `lastname`, `city`, `country`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'james', 'james', 'ife', 'Nigeria', 'Fjhhames@gmail.com', '$2y$10$8WLMywLkq4eA/94SUh33peB.Z35go7ZQTNB5NxUtdEStv/aFTF40.', NULL, '2018-07-01 16:34:33', '2018-07-01 16:34:33'),
(2, 'a nnm', 'mkk', 'mmm', 'Nigeria', 'k@hmn.cm', '$2y$10$QPucejzdjPAMwsiXIdaAgOR2GAkymH6zaqf8.lLZ4/fwpaTQ6DBPu', NULL, '2018-07-01 16:38:19', '2018-07-01 16:38:19'),
(3, 'ka,e', 'jmws', 'kjjs', 'Nigeria', 'james@gmail.com', '$2y$10$p430/UzkPQqlma.gSKS88.ydbyUyGKIp5K9CCqDGVnnZZARBd/ESa', NULL, '2018-07-01 16:46:14', '2018-07-01 16:46:14'),
(4, 'Falola', 'James', 'ife', 'Nigeria', 'james@gmail.coms', '$2y$10$GG6hWCT2ip7ynF.4RQAy4eWr9qV0n.Tvrq/panojoWnBJIoVr0H8S', NULL, '2018-07-01 20:18:11', '2018-07-01 20:18:11'),
(5, 'mbappe', 'kylian', 'ife', 'Nigeria', 'kmbappe@gmail.com', '$2y$10$mY7ZHUTvqWkhHT1mpaWV3Of8LWFuxiZPnsSBkD2UhQxacIwEgzJk6', NULL, '2018-07-01 21:58:18', '2018-07-01 21:58:18'),
(6, 'firstname', 'lastname', 'ife', 'Nigeria', 'james1@gmail.com', '$2y$10$laQhUGvGxM8nwDlJY0uc4uUgyh9xJ8fc4po5g7w.CmB8e1jqnYkJy', NULL, '2018-07-02 06:11:42', '2018-07-02 06:11:42'),
(7, 'Falola', 'James', 'OAU', 'Nigeria', 'F@gmail.com', '$2y$10$Ygv7JzWkKxD34XcQuwT1y.S060OjqlUNkI0FN68UtxFx2GgYXtUTq', NULL, '2018-07-02 09:47:08', '2018-07-02 09:47:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `signup_email_unique` (`email`);

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `signups_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
