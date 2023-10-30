-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 06:37 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eappdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bads`
--

CREATE TABLE `bads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `electronics` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bads`
--

INSERT INTO `bads` (`id`, `electronics`, `price`, `status`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Lenovo Laptop', '$30000 - Lenovo Laptop', 'Bad', 'Jpotter@gmail.com', '2023-10-29 16:18:58', '2023-10-29 16:18:58'),
(3, 'LG Tv', '$10000 - LG Tv', 'Bad', 'Bross@gmail.com', '2023-10-30 04:58:16', '2023-10-30 04:58:16'),
(4, 'LG Phone', '$4000 - LG Phone', 'Bad', 'Ckane@gmail.com', '2023-10-30 04:59:33', '2023-10-30 04:59:33'),
(5, 'Acer Laptop', '$11000 - Panasonic Tv', 'Bad', 'Jjay@gmail.com', '2023-10-30 05:01:13', '2023-10-30 05:01:13'),
(6, 'Hp Laptop', '$20000 - Hp Laptop', 'Bad', 'Jbenard@gmail.com', '2023-10-30 05:02:51', '2023-10-30 05:02:51'),
(7, 'LG Tv', '$10000 - LG Tv', 'Bad', 'Lbanes@gmail.com', '2023-10-30 05:05:38', '2023-10-30 05:05:38'),
(8, 'Itel Phone', '$3000 - Itel Phone', 'Bad', 'Mkriss@gmail.com', '2023-10-30 05:06:53', '2023-10-30 05:06:53'),
(9, 'LG Phone', '$4000 - LG Phone', 'Bad', 'Ravalon@gmail.com', '2023-10-30 05:08:29', '2023-10-30 05:08:29'),
(10, 'Samsung Phone', '$5000 - Samsung Phone', 'Bad', 'Rmary@gmail.com', '2023-10-30 05:09:48', '2023-10-30 05:09:48'),
(11, 'LG Phone', '$4000 - LG Phone', 'Bad', 'Smaris@gmail.com', '2023-10-30 05:10:48', '2023-10-30 05:10:48'),
(12, 'Itel Phone', '$3000 - Itel Phone', 'Bad', 'Qtomny@gmail.com', '2023-10-30 05:14:57', '2023-10-30 05:14:57'),
(13, 'Itel Phone', '$3000 - Itel Phone', 'Bad', 'Fribbery@gmail.com', '2023-10-30 05:50:18', '2023-10-30 05:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `electronics` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `electronics`, `price`, `status`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Dell Laptop', '$40000 - Dell Laptop', 'Good', 'Jpotter@gmail.com', '2023-10-29 14:50:51', '2023-10-29 14:50:51'),
(4, 'Lenovo Laptop', '$30000 - Lenovo Laptop', 'Good', 'Bross@gmail.com', '2023-10-30 04:57:45', '2023-10-30 04:57:45'),
(5, 'Dell Laptop', '$40000 - Dell Laptop', 'Good', 'Ckane@gmail.com', '2023-10-30 04:59:15', '2023-10-30 04:59:15'),
(6, 'Acer Laptop', '$60000 - Acer Laptop', 'Good', 'Jjay@gmail.com', '2023-10-30 05:00:24', '2023-10-30 05:00:24'),
(7, 'LG Tv', '$10000 - LG Tv', 'Good', 'Jbenard@gmail.com', '2023-10-30 05:02:23', '2023-10-30 05:02:23'),
(8, 'Panasonic Tv', '$11000 - Panasonic Tv', 'Good', 'Lbanes@gmail.com', '2023-10-30 05:05:06', '2023-10-30 05:05:06'),
(9, 'Samsung Tv', '$12000 - Samsung Tv', 'Good', 'Mkriss@gmail.com', '2023-10-30 05:06:28', '2023-10-30 05:06:28'),
(10, 'Plasma Tv', '$13000 - Plasma Tv', 'Good', 'Ravalon@gmail.com', '2023-10-30 05:08:08', '2023-10-30 05:08:08'),
(11, 'Itel Phone', '$3000 - Itel Phone', 'Good', 'Rmary@gmail.com', '2023-10-30 05:09:25', '2023-10-30 05:09:25'),
(12, 'Panasonic Phone', '$6000 - Panasonic Phone', 'Good', 'Smaris@gmail.com', '2023-10-30 05:10:26', '2023-10-30 05:10:26'),
(13, 'Lenovo Laptop', '$30000 - Lenovo Laptop', 'Good', 'Qtomny@gmail.com', '2023-10-30 05:14:31', '2023-10-30 05:14:31'),
(14, 'Plasma Tv', '$13000 - Plasma Tv', 'Good', 'Fribbery@gmail.com', '2023-10-30 05:50:00', '2023-10-30 05:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2023_10_27_165254_create_goods_table', 1),
(28, '2023_10_27_165304_create_bads_table', 1),
(29, '2023_10_27_165719_create_roles_table', 1),
(30, '2023_10_27_170634_create_role_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('Bross@gmail.com', '$2y$10$CXTQEdvw6meY/mrNhmXIGu.I6lDJs8v6wEj96Pzf31W6PP30fy5km', '2023-10-30 04:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `firstname`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-10-29 02:29:58', '2023-10-29 02:29:58'),
(2, 'user', '2023-10-29 02:29:58', '2023-10-29 02:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 2, 7, NULL, NULL),
(8, 2, 8, NULL, NULL),
(9, 2, 9, NULL, NULL),
(10, 2, 10, NULL, NULL),
(11, 2, 11, NULL, NULL),
(12, 2, 12, NULL, NULL),
(13, 2, 13, NULL, NULL),
(14, 2, 14, NULL, NULL),
(15, 2, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `email_verified_at`, `mobile`, `gender`, `password`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'User', 'admin@admin.com', NULL, '08040002000', 'male', '$2y$10$OPkVvLW43oxF7ZMRPY4Ig.2AffSvfUENDHdmOZPCYk6wXpdxe9FzC', 'Admin Street Lane', 'kN3hHEGrUVBhgQeY0IpJuBcYzY4bKZdC1zfWFwJ6UXYKJ7Af0bWlEqjt4vH5', '2023-10-29 02:29:59', '2023-10-29 02:29:59'),
(2, 'Generic', 'User', 'user@user.com', NULL, '09030006000', 'male', '$2y$10$QISgL/mhvSqTlH5F7wG2YO598G2LQ1HpBnPet9Rf0okhzElziF1k.', 'User Street Lane', NULL, '2023-10-29 02:29:59', '2023-10-29 02:29:59'),
(3, 'James', 'Potter', 'Jpotter@gmail.com', NULL, '08020004000', 'Male', '$2y$10$AQvQPVMbKeyubPP6u5/F8um.bzUW26K4JQgE.FvGyihrJuoY4823a', 'James Street', NULL, '2023-10-29 02:39:58', '2023-10-29 02:52:05'),
(5, 'Lucia', 'Banes', 'Lbanes@gmail.com', NULL, '08090003000', 'Female', '$2y$10$WGGl7iyAan6sOM6H0G9YReU.1KolGauEY65pY9SrGH0ISOPDVIvPq', 'Banes Street', 'nYSyW6HNZiq0Jy77tfdYokQrOVNKPsBb0wJ5qSeRwWGCsLJOjwmBGeeiCdX2', '2023-10-29 16:23:56', '2023-10-29 16:23:56'),
(6, 'Marie', 'Kriss', 'Mkriss@gmail.com', NULL, '08020004000', 'Female', '$2y$10$eEKktKRsEn1BhEr/ts.AYOuk3HTL69/COciGjnPqaQsNmnMfKbFe6', 'Kriss Street', NULL, '2023-10-29 16:24:54', '2023-10-29 16:24:54'),
(7, 'Rose', 'Mary', 'Rmary@gmail.com', NULL, '07080040002', 'Female', '$2y$10$UGvyOOY3eiAjU37VTXam..TuFFAjnWPi4OYviF2J9BIhLeuFAaqEK', 'Rose Lane', NULL, '2023-10-29 16:25:56', '2023-10-29 16:25:56'),
(8, 'Cynthia', 'Kane', 'Ckane@gmail.com', NULL, '09040005000', 'Female', '$2y$10$LsfBprBYUhn/RjbgeNLGHeAR1dQgsxU51X.Zi.21NbAgJhniYSxCC', 'Kane road', NULL, '2023-10-29 16:26:40', '2023-10-29 16:26:40'),
(9, 'Bella', 'Ross', 'Bross@gmail.com', NULL, '07040003000', 'Female', '$2y$10$hyv1esfaK0cRR893xTQsKOdSdYRGfychqRxH51LYIoXHB5PWkkxQW', 'Bella Close', NULL, '2023-10-29 16:27:28', '2023-10-29 16:27:28'),
(10, 'John', 'Benard', 'Jbenard@gmail.com', NULL, '08040006000', 'Male', '$2y$10$Y6YWj49xkdawdHUSFBcR9e3atTCn11HOKAgQGOLUvLwCt0N4uTI46', 'Benard Crescent', NULL, '2023-10-29 16:28:42', '2023-10-29 16:28:42'),
(11, 'Stella', 'Maris', 'Smaris@gmail.com', NULL, '08140005000', 'Female', '$2y$10$/kLcQXJBEYk.y26CQ/wV8O01rT.2qdNKsERpyvfA8gaPrRo1wKV36', 'Maris Close', NULL, '2023-10-29 16:29:55', '2023-10-29 16:29:55'),
(12, 'Jimmy', 'Jay', 'Jjay@gmail.com', NULL, '09160003000', 'Male', '$2y$10$xbB1NMXQChfrIZUh3mRztOyOORdKwjocFT7Q2G/rWx421bfm/inPC', 'Jimmy Close', NULL, '2023-10-29 16:30:44', '2023-10-29 16:30:44'),
(13, 'Rice', 'Avalon', 'Ravalon@gmail.com', NULL, '07150002000', 'Male', '$2y$10$lIozMkB7l1kxwBarOTHmu.x9GdGF4fgJPCKfulluym3n0DD.YrK5K', 'Avalon street', 'hJUq4eJ9xrjS0aPHinBiwcXYYfdEptn5BOozAGwYUglOhStKJWtK7g9M1l4H', '2023-10-29 16:31:41', '2023-10-29 16:31:41'),
(14, 'Queen', 'Tomny', 'Qtomny@gmail.com', NULL, '08140003000', 'Female', '$2y$10$xWUe0K7DEqDTJ4k4sh1H2e95ac5dwxqmrGHLWq7DHL/BNWKp.vmfC', 'Queen\'s Street', NULL, '2023-10-30 05:14:06', '2023-10-30 05:14:06'),
(15, 'Frank', 'Ribbery', 'Fribbery@gmail.com', NULL, '08040004000', 'Male', '$2y$10$TgbAtZRZ8LWLw2te1HnGcO2I93tit8kj5/q9/NzwlPyBJWFhiFRx.', 'Frank Street', NULL, '2023-10-30 05:49:27', '2023-10-30 05:49:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bads`
--
ALTER TABLE `bads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `bads`
--
ALTER TABLE `bads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
