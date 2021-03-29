-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 12:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vincent Stephens', 'wyfute@yopmail.com', '$2y$10$X79QKSb9imH4R96XXV2KXe0LaVwNDULTW5VnQiLiI62ylmW59W5Pu', NULL, '2021-03-27 05:06:57', '2021-03-27 05:06:57'),
(2, 'Dane Gentry', 'pokas@yopmail.com', '$2y$10$0Ll6E1OYKcASpao.DhVmOuMm2IHOy/z9A3EK9.Lq/8gNXsOcmI.du', NULL, '2021-03-27 05:25:51', '2021-03-27 05:25:51'),
(3, 'Erin Roman', 'wuxiguvis@yopmail.com', '$2y$10$ORetQUaMg0vcshMWwhCDzu.rXZDiphNqRQGRf1WFh0IQ0SVsRB.Oq', NULL, '2021-03-27 23:51:41', '2021-03-27 23:51:41'),
(4, 'Grant Reid', 'cicydiroqu@yopmail.com', '$2y$10$1uggmROHDemdbEOsCh6.v.1d.2UvKfpSOqYor.mk2HUi4oTJqNlDq', NULL, '2021-03-28 00:17:15', '2021-03-28 00:17:15'),
(5, 'Macy Murray', 'zotehyw@yopmail.com', '$2y$10$cXBRyYeHuQHdXRDyvNTMvuf69rODq7Yo/6c.IX/LReo5slh9FmuOC', NULL, '2021-03-28 00:17:33', '2021-03-28 00:17:33'),
(6, 'Adrienne Potter', 'meqonoloc@yopmail.com', '$2y$10$zva5UK0.ATA4IDfjdAESsOezHi2Dhh9dPMrNbfCW5sNZnp1UH5h3O', NULL, '2021-03-28 00:18:08', '2021-03-28 00:18:08'),
(7, 'Jonah Hurley', 'dixinuvaj@yopmail.com', '$2y$10$ap5EcY/BqCwavznf5YlJFOf0YEQG04TqVhkMi3OxsM9YdYQuhB.iC', NULL, '2021-03-28 10:41:05', '2021-03-28 10:41:05'),
(8, 'Zahir Perez', 'gadoxaze@yopmail.com', '$2y$10$BCLCI.ZtRj41AHm6lH9ZYug1HvsORK4xBM..rlYh1dkQv1muFWJ16', NULL, '2021-03-28 10:41:50', '2021-03-28 10:41:50'),
(9, 'Audra Peterson', 'nirihymyz@yopmail.com', '$2y$10$6qtsTWHlH69FUuriYh.2aeP2Ie6FYSOOWUFZZfq8/OS8qB2SQi4B6', NULL, '2021-03-28 10:42:02', '2021-03-28 10:42:02'),
(10, 'Liberty Carrillo', 'kamoqydo@yopmail.com', '$2y$10$1wrHKxQ8EHJO07xZqPhwFOEl5pO3mkbRsuq9ddyUJekT0GLRhVWMK', NULL, '2021-03-28 10:48:17', '2021-03-28 10:48:17'),
(11, 'Grady Rodgers', 'kuboxurysa@yopmail.com', '$2y$10$YM0pl8EG3n74ga5MGiIKyedjDXD/bHf93W6jmnr6EzkdnfkizA8si', NULL, '2021-03-29 00:47:52', '2021-03-29 00:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` int(11) NOT NULL,
  `otp_status` int(11) NOT NULL DEFAULT 0,
  `steps` bigint(20) UNSIGNED NOT NULL,
  `is_admin_created` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `contact_no`, `otp`, `otp_status`, `steps`, `is_admin_created`, `created_at`, `updated_at`) VALUES
(1, '2810678018', 19201, 0, 1, 0, '2021-03-29 04:25:24', '2021-03-29 04:25:24'),
(2, '5056502619', 19326, 0, 1, 0, '2021-03-29 04:29:46', '2021-03-29 04:29:46'),
(3, '9320949513', 44790, 0, 1, 0, '2021-03-29 04:30:04', '2021-03-29 04:30:04'),
(4, '4151382319', 73764, 0, 1, 0, '2021-03-29 04:30:26', '2021-03-29 04:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `member_details`
--

CREATE TABLE `member_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salutation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `city_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_details`
--

INSERT INTO `member_details` (`id`, `member_id`, `first_name`, `last_name`, `email_id`, `type`, `salutation`, `date_of_birth`, `gender`, `occupation`, `address`, `road_area`, `state`, `city_district`, `pincode`, `member_image`, `created_at`, `updated_at`) VALUES
(2, 2, 'Nell', 'Davenport', 'cuvibivib@yopmail.com', 'Individual', 'Prof', '25/03/2021', 'Male', 'Business', 'Nihil culpa tempore', 'Autem nostrum non qu', 30, 'Aliquam libero culpa', 'Id vel ut adipisci u', 'member_image/XDVkxis8TeJ8IWBNCGWU7cJAn4y6DmbLDPSPAmXc.jpg', '2021-03-29 04:29:46', '2021-03-29 04:29:46'),
(3, 3, 'Ciaran', 'Berry', 'henuqemo@yopmail.com', 'Family', 'Ms', '31/03/2021', 'Female', 'Govt Employee', 'Omnis laboriosam vo', 'Dolor veritatis rati', 28, 'Atque mollit quis po', 'Et perspiciatis ut', 'member_image/HymieGvb51O4AZFRek8sEtSioJ5OhA5rcpgLJpfO.jpg', '2021-03-29 04:30:04', '2021-03-29 04:30:04'),
(4, 4, 'Vielka', 'Stevens', 'toqecih@yopmail.com', 'Individual', 'Ms', '17/03/2021', 'Male', 'Advocate', 'Ea similique vel non', 'Ut consequuntur omni', 17, 'Voluptate eiusmod in', 'Natus perferendis mi', 'member_image/bfZS0k3wAFz0ne3hYQIqwDkntFCjMwEyezzDV6qG.jpg', '2021-03-29 04:30:26', '2021-03-29 04:30:26');

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
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2021_03_13_190509_create_members_table', 1),
(37, '2021_03_14_105304_create_member_details_table', 1),
(38, '2021_03_27_072908_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'Andaman and Nicobar Islands', 101),
(2, 'Andhra Pradesh', 101),
(3, 'Arunachal Pradesh', 101),
(4, 'Assam', 101),
(5, 'Bihar', 101),
(6, 'Chandigarh', 101),
(7, 'Chhattisgarh', 101),
(8, 'Dadra and Nagar Haveli', 101),
(9, 'Daman and Diu', 101),
(10, 'Delhi', 101),
(11, 'Goa', 101),
(12, 'Gujarat', 101),
(13, 'Haryana', 101),
(14, 'Himachal Pradesh', 101),
(15, 'Jammu and Kashmir', 101),
(16, 'Jharkhand', 101),
(17, 'Karnataka', 101),
(18, 'Kenmore', 101),
(19, 'Kerala', 101),
(20, 'Lakshadweep', 101),
(21, 'Madhya Pradesh', 101),
(22, 'Maharashtra', 101),
(23, 'Manipur', 101),
(24, 'Meghalaya', 101),
(25, 'Mizoram', 101),
(26, 'Nagaland', 101),
(27, 'Narora', 101),
(28, 'Natwar', 101),
(29, 'Odisha', 101),
(30, 'Paschim Medinipur', 101),
(31, 'Pondicherry', 101),
(32, 'Punjab', 101),
(33, 'Rajasthan', 101),
(34, 'Sikkim', 101),
(35, 'Tamil Nadu', 101),
(36, 'Telangana', 101),
(37, 'Tripura', 101),
(38, 'Uttar Pradesh', 101),
(39, 'Uttarakhand', 101),
(40, 'Vaishali', 101),
(41, 'West Bengal', 101);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_details`
--
ALTER TABLE `member_details`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member_details`
--
ALTER TABLE `member_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
