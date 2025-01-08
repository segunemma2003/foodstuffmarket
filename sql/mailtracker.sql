-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2024 at 10:56 AM
-- Server version: 10.5.24-MariaDB
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maildoll_test`
--

--
-- Table structure for table `sent_emails`
--

CREATE TABLE IF NOT EXISTS `sent_emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash` char(32) NOT NULL,
  `headers` text DEFAULT NULL,
  `sender_name` varchar(191) DEFAULT NULL,
  `sender_email` varchar(191) DEFAULT NULL,
  `recipient_name` varchar(191) DEFAULT NULL,
  `recipient_email` varchar(191) DEFAULT NULL,
  `subject` varchar(191) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `opens` int(11) DEFAULT NULL,
  `clicks` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `opened_at` datetime DEFAULT NULL,
  `clicked_at` datetime DEFAULT NULL,
  `message_id` varchar(191) DEFAULT NULL,
  `meta` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `sent_emails_url_clicked`
-- --

CREATE TABLE IF NOT EXISTS `sent_emails_url_clicked` (
  `id` int(10) UNSIGNED NOT NULL,
  `sent_email_id` int(10) UNSIGNED NOT NULL,
  `url` text DEFAULT NULL,
  `hash` char(32) NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --
-- -- Indexes for dumped tables
-- --

-- --
-- -- Indexes for table `sent_emails`
-- --
-- ALTER TABLE `sent_emails`
--   ADD PRIMARY KEY (`id`),
--   ADD UNIQUE KEY `sent_emails_hash_unique` (`hash`),
--   ADD KEY `sent_emails_message_id_index` (`message_id`);

-- --
-- -- Indexes for table `sent_emails_url_clicked`
-- --
-- ALTER TABLE `sent_emails_url_clicked`
--   ADD PRIMARY KEY (`id`),
--   ADD KEY `sent_emails_url_clicked_sent_email_id_foreign` (`sent_email_id`);

-- --
-- -- AUTO_INCREMENT for dumped tables
-- --

-- --
-- -- AUTO_INCREMENT for table `sent_emails`
-- --
-- ALTER TABLE `sent_emails`
--   MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

-- --
-- -- AUTO_INCREMENT for table `sent_emails_url_clicked`
-- --
-- ALTER TABLE `sent_emails_url_clicked`
--   MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

-- --
-- -- Constraints for dumped tables
-- --

-- --
-- -- Constraints for table `sent_emails_url_clicked`
-- --
-- ALTER TABLE `sent_emails_url_clicked`
--   ADD CONSTRAINT `sent_emails_url_clicked_sent_email_id_foreign` FOREIGN KEY (`sent_email_id`) REFERENCES `sent_emails` (`id`) ON DELETE CASCADE;
-- COMMIT;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
