-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 08:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakwit`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangays`
--

CREATE TABLE `barangays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangays`
--

INSERT INTO `barangays` (`id`, `name`, `lat`, `long`, `created_at`, `updated_at`) VALUES
(1, 'Anonang', '10.084967', '124.115402', '2022-11-27 18:46:18', '2022-11-27 18:46:18'),
(2, 'Asinan', '10.077831', '124.160586', '2022-11-28 06:06:15', '2022-11-28 06:06:15'),
(5, 'Bago', '10.053656', '124.147217', '2022-11-28 06:09:45', '2022-11-28 06:09:45'),
(6, 'Baluarte', '10.070345', '124.147368', '2022-11-28 06:09:45', '2022-11-28 06:09:45'),
(7, 'Bantuan', '10.070114', '124.104271', '2022-11-28 06:13:46', '2022-11-28 06:13:46'),
(8, 'Bato', '10.070884', '124.119392', '2022-11-28 06:13:46', '2022-11-28 06:13:46'),
(9, 'Bonotbonot', '10.049246', '124.131138', '2022-11-28 06:13:46', '2022-11-28 06:13:46'),
(10, 'Bugaong', '10.056754', '124.095754', '2022-11-28 06:13:46', '2022-11-28 06:13:46'),
(11, 'Cambuhat', '10.080612', '124.134891', '2022-11-28 06:13:46', '2022-11-28 06:13:46'),
(12, 'Cambus-oc', '10.060535', '124.112002', '2022-11-28 06:13:46', '2022-11-28 06:13:46'),
(13, 'Cangawa', '10.041430', '124.131382', '2022-11-28 06:13:46', '2022-11-28 06:13:46'),
(14, 'Cantomugcad', '10.084978', '124.148775', '2022-11-28 06:13:46', '2022-11-28 06:13:46'),
(15, 'Cantores', '10.060514', '124.130044', '2022-11-28 06:13:46', '2022-11-28 06:13:46'),
(17, 'Cantuba', '10.007255', '124.205983', '2022-11-28 06:26:28', '2022-11-28 06:26:28'),
(18, 'Catigbian', '10.039538', '124.165858', '2022-11-28 06:26:28', '2022-11-28 06:26:28'),
(19, 'Cawag', '10.095264', '124.129237', '2022-11-28 07:09:45', '2022-11-28 07:09:45'),
(20, 'Cruz', '10.050249', '124.115588', '2022-11-28 07:09:45', '2022-11-28 07:09:45'),
(21, 'Dait', '10.156942', '124.045277', '2022-11-28 07:13:33', '2022-11-28 07:13:33'),
(22, 'Hunan', '10.035804', '124.143213', '2022-11-28 07:13:33', '2022-11-28 07:13:33'),
(23, 'Lapacan Norte', '10.044104', '124.121446', '2022-11-28 07:15:55', '2022-11-28 07:15:55'),
(24, 'Lapacan Sur', '10.047505', '124.191865', '2022-11-28 07:15:55', '2022-11-28 07:15:55'),
(25, 'Lubang', '10.061377', '124.203475', '2022-11-28 07:18:39', '2022-11-28 07:18:39'),
(26, 'Lusong (Plateau)', '10.020757', '124.159052', '2022-11-28 07:18:39', '2022-11-28 07:18:39'),
(27, 'Magkaya', '10.042360', '124.109350', '2022-11-28 07:21:04', '2022-11-28 07:21:04'),
(28, 'Merryland', '10.044881', '124.215041', '2022-11-28 07:21:04', '2022-11-28 07:21:04'),
(29, 'Nueva Granada', '10.029041', '124.185604', '2022-11-28 07:23:14', '2022-11-28 07:23:14'),
(30, 'Nueva Montana', '10.062300', '124.171026', '2022-11-28 07:23:14', '2022-11-28 07:23:14'),
(31, 'Overland', '10.008040', '124.176567', '2022-11-28 07:24:51', '2022-11-28 07:24:51'),
(32, 'Panghagban', '10.081684', '124.110387', '2022-11-28 07:24:51', '2022-11-28 07:24:51'),
(33, 'Poblacion', '10.040150', '124.148590', '2022-11-28 07:26:54', '2022-11-28 07:26:54'),
(34, 'Puting Bato', '10.069342', '124.131718', '2022-11-28 07:26:54', '2022-11-28 07:26:54'),
(35, 'Rufo Hill', '10.076144', '124.106935', '2022-11-28 07:29:44', '2022-11-28 07:29:44'),
(36, 'Sweetland', '10.157711', '124.042145', '2022-11-28 07:29:44', '2022-11-28 07:29:44'),
(37, 'Western Cabul-an', '10.157711', '124.042145', '2022-11-28 07:31:49', '2022-11-28 07:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `calamities`
--

CREATE TABLE `calamities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `info_arr` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calamities`
--

INSERT INTO `calamities` (`id`, `type`, `info_arr`, `created_at`, `updated_at`) VALUES
(1, 0, '{\"name_of_tropical_cyclone\":\"Odette\",\"windspeed_of_tropical_cyclone_(km\\/h)\":\"50\",\"direction_of_tropical_cyclone\":\"NorthEast\",\"classification_of_tropical_cyclone\":\"2\"}', '2022-11-27 19:07:51', '2023-01-16 22:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `evacuation_centers`
--

CREATE TABLE `evacuation_centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evacuation_center_type_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL,
  `max_capacity` int(11) NOT NULL DEFAULT 0,
  `is_evacuation_center_full` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evacuation_centers`
--

INSERT INTO `evacuation_centers` (`id`, `evacuation_center_type_id`, `barangay_id`, `max_capacity`, `is_evacuation_center_full`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 15, 0, '2022-11-27 18:56:47', '2022-12-26 19:43:09'),
(3, 1, 2, 11, 0, '2022-12-26 19:37:21', '2022-12-26 19:37:21'),
(4, 2, 5, 100, 0, '2022-12-26 19:39:54', '2022-12-26 19:39:54'),
(5, 4, 6, 110, 0, '2023-01-12 23:03:40', '2023-01-12 23:03:40'),
(6, 3, 7, 100, 0, '2023-01-12 23:04:07', '2023-01-12 23:04:07'),
(7, 2, 8, 100, 0, '2023-01-16 22:07:07', '2023-01-16 22:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `evacuation_center_types`
--

CREATE TABLE `evacuation_center_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evacuation_center_types`
--

INSERT INTO `evacuation_center_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Barangay Hall', '2022-11-28 09:14:43', '2022-11-28 09:14:43'),
(2, 'DepEd Classroom', '2022-11-28 09:14:43', '2022-11-28 09:14:43'),
(3, 'Multi-purpose Center', '2022-11-28 09:14:43', '2022-11-28 09:14:43'),
(4, 'Daycare Center', '2022-11-28 09:14:43', '2022-11-28 09:14:43'),
(5, 'Others', '2022-11-28 09:14:43', '2022-11-28 09:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `evacuees`
--

CREATE TABLE `evacuees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evacuation_center_id` int(11) NOT NULL,
  `family_count` int(11) NOT NULL DEFAULT 0,
  `male_count` int(11) NOT NULL DEFAULT 0,
  `female_count` int(11) NOT NULL DEFAULT 0,
  `pwd_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evacuees`
--

INSERT INTO `evacuees` (`id`, `evacuation_center_id`, `family_count`, `male_count`, `female_count`, `pwd_count`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 10, 10, 1, '2022-11-27 18:53:04', '2022-11-27 18:56:32'),
(2, 2, 5, 20, 10, 0, '2022-11-27 18:56:56', '2023-01-12 22:41:25'),
(3, 4, 20, 50, 5, 1, '2023-01-12 22:42:09', '2023-01-16 22:05:55'),
(4, 7, 20, 0, 0, 0, '2023-03-09 06:23:16', '2023-03-11 23:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evacuation_center_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `evacuation_center_id`, `name`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, '313360821_1129710661269126_2869645752597442150_n (2).jpg', 'public_uploads/1/313360821_1129710661269126_2869645752597442150_n (2).jpg', '2022-11-27 18:52:44', '2022-11-27 18:52:44');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_12_074049_create_barangays_table', 1),
(6, '2022_11_12_074659_create_evacuation_center_types_table', 1),
(7, '2022_11_12_074835_create_evacuation_centers_table', 1),
(8, '2022_11_12_081952_create_evacuees_table', 1),
(9, '2022_11_12_092017_create_calamities_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'mdrrmo@bakwit.com', '2022-11-28 09:22:19', '$2y$10$T1FstFuGSN6/ON7sU9xtC.VAUWix8FZK//mrk.w.AFVkVR37FfWvu', 1, 'OvoqEk8WUQGFCKskdHq0GdkRNGcPPIryElTS1Sl0MSrK9M7YhVTAZo4GSdUi', '2022-11-28 09:22:19', '2022-11-28 09:22:19'),
(2, 'Admin', 'barangay@bakwit.com', '2022-11-28 09:22:19', '$2y$10$INMcDUf5rdqT2ryB.UCCz.JqkMa3YYVLYR34vVKmDAuWdNyKUzU/C', 0, 'ojsM0pGkfP7DATjIV6GH6jE2pNqS9ami54zcnmympzoGur47HTlWbfUNwI6c', '2022-11-28 09:22:19', '2022-11-28 09:22:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangays`
--
ALTER TABLE `barangays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calamities`
--
ALTER TABLE `calamities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evacuation_centers`
--
ALTER TABLE `evacuation_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evacuation_center_types`
--
ALTER TABLE `evacuation_center_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evacuees`
--
ALTER TABLE `evacuees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `barangays`
--
ALTER TABLE `barangays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `calamities`
--
ALTER TABLE `calamities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `evacuation_centers`
--
ALTER TABLE `evacuation_centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `evacuation_center_types`
--
ALTER TABLE `evacuation_center_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `evacuees`
--
ALTER TABLE `evacuees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
