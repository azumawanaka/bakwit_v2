-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 09:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
  `name` text NOT NULL,
  `lat` text DEFAULT NULL,
  `long` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_flood_prone` tinyint(1) NOT NULL DEFAULT 0,
  `is_storm_surge` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangays`
--

INSERT INTO `barangays` (`id`, `name`, `lat`, `long`, `created_at`, `updated_at`, `is_flood_prone`, `is_storm_surge`) VALUES
(1, 'Anonang', '10.084967', '124.115402', '2022-11-27 18:46:18', '2023-03-14 20:08:48', 1, 0),
(2, 'Asinan', '10.077831', '124.160586', '2022-11-28 06:06:15', '2022-11-28 06:06:15', 0, 0),
(5, 'Bago', '10.053656', '124.147217', '2022-11-28 06:09:45', '2022-11-28 06:09:45', 0, 0),
(6, 'Baluarte', '10.070345', '124.147368', '2022-11-28 06:09:45', '2022-11-28 06:09:45', 0, 0),
(7, 'Bantuan', '10.070114', '124.104271', '2022-11-28 06:13:46', '2022-11-28 06:13:46', 0, 0),
(8, 'Bato', '10.070884', '124.119392', '2022-11-28 06:13:46', '2023-03-12 02:31:01', 0, 1),
(9, 'Bonotbonot', '10.049246', '124.131138', '2022-11-28 06:13:46', '2023-03-12 02:31:08', 1, 0),
(10, 'Bugaong', '10.056754', '124.095754', '2022-11-28 06:13:46', '2023-03-12 02:29:32', 0, 1),
(11, 'Cambuhat', '10.080612', '124.134891', '2022-11-28 06:13:46', '2023-03-12 01:55:08', 1, 1),
(12, 'Cambus-oc', '10.060535', '124.112002', '2022-11-28 06:13:46', '2023-03-14 20:08:35', 1, 0),
(13, 'Cangawa', '10.041430', '124.131382', '2022-11-28 06:13:46', '2022-11-28 06:13:46', 0, 0),
(14, 'Cantomugcad', '10.084978', '124.148775', '2022-11-28 06:13:46', '2022-11-28 06:13:46', 0, 0),
(15, 'Cantores', '10.060514', '124.130044', '2022-11-28 06:13:46', '2022-11-28 06:13:46', 0, 0),
(17, 'Cantuba', '10.007255', '124.205983', '2022-11-28 06:26:28', '2022-11-28 06:26:28', 0, 0),
(18, 'Catigbian', '10.039538', '124.165858', '2022-11-28 06:26:28', '2022-11-28 06:26:28', 0, 0),
(19, 'Cawag', '10.095264', '124.129237', '2022-11-28 07:09:45', '2022-11-28 07:09:45', 0, 0),
(20, 'Cruz', '10.050249', '124.115588', '2022-11-28 07:09:45', '2022-11-28 07:09:45', 0, 0),
(21, 'Dait', '10.156942', '124.045277', '2022-11-28 07:13:33', '2022-11-28 07:13:33', 0, 0),
(22, 'Hunan', '10.035804', '124.143213', '2022-11-28 07:13:33', '2022-11-28 07:13:33', 0, 0),
(23, 'Lapacan Norte', '10.044104', '124.121446', '2022-11-28 07:15:55', '2022-11-28 07:15:55', 0, 0),
(24, 'Lapacan Sur', '10.047505', '124.191865', '2022-11-28 07:15:55', '2022-11-28 07:15:55', 0, 0),
(25, 'Lubang', '10.061377', '124.203475', '2022-11-28 07:18:39', '2022-11-28 07:18:39', 0, 0),
(26, 'Lusong (Plateau)', '10.020757', '124.159052', '2022-11-28 07:18:39', '2022-11-28 07:18:39', 0, 0),
(27, 'Magkaya', '10.042360', '124.109350', '2022-11-28 07:21:04', '2022-11-28 07:21:04', 0, 0),
(28, 'Merryland', '10.044881', '124.215041', '2022-11-28 07:21:04', '2022-11-28 07:21:04', 0, 0),
(29, 'Nueva Granada', '10.029041', '124.185604', '2022-11-28 07:23:14', '2022-11-28 07:23:14', 0, 0),
(30, 'Nueva Montana', '10.062300', '124.171026', '2022-11-28 07:23:14', '2022-11-28 07:23:14', 0, 0),
(31, 'Overland', '10.008040', '124.176567', '2022-11-28 07:24:51', '2022-11-28 07:24:51', 0, 0),
(32, 'Panghagban', '10.081684', '124.110387', '2022-11-28 07:24:51', '2022-11-28 07:24:51', 0, 0),
(33, 'Poblacion', '10.040150', '124.148590', '2022-11-28 07:26:54', '2022-11-28 07:26:54', 0, 0),
(34, 'Puting Bato', '10.069342', '124.131718', '2022-11-28 07:26:54', '2022-11-28 07:26:54', 0, 0),
(35, 'Rufo Hill', '10.076144', '124.106935', '2022-11-28 07:29:44', '2022-11-28 07:29:44', 0, 0),
(36, 'Sweetland', '10.157711', '124.042145', '2022-11-28 07:29:44', '2022-11-28 07:29:44', 0, 0),
(37, 'Western Cabul-an', '10.157711', '124.042145', '2022-11-28 07:31:49', '2022-11-28 07:31:49', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `calamities`
--

CREATE TABLE `calamities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `info_arr` longtext NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `needs` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evacuation_centers`
--

INSERT INTO `evacuation_centers` (`id`, `evacuation_center_type_id`, `barangay_id`, `max_capacity`, `is_evacuation_center_full`, `created_at`, `updated_at`, `needs`) VALUES
(2, 1, 1, 18, 0, '2022-11-27 18:56:47', '2023-03-14 20:08:48', NULL),
(3, 1, 2, 11, 0, '2022-12-26 19:37:21', '2022-12-26 19:37:21', NULL),
(4, 2, 5, 100, 0, '2022-12-26 19:39:54', '2022-12-26 19:39:54', NULL),
(5, 4, 6, 110, 0, '2023-01-12 23:03:40', '2023-01-12 23:03:40', NULL),
(6, 3, 7, 100, 1, '2023-01-12 23:04:07', '2023-04-01 23:38:09', NULL),
(7, 2, 8, 20, 1, '2023-01-16 22:07:07', '2023-03-13 19:08:45', NULL),
(8, 1, 9, 200, 0, '2023-03-12 01:19:52', '2023-03-12 01:33:18', NULL),
(9, 1, 10, 15, 0, '2023-03-12 01:52:09', '2023-03-12 01:52:09', NULL),
(10, 1, 11, 15, 1, '2023-03-12 01:55:08', '2023-04-01 23:34:48', 'We need some supplies and foods.'),
(11, 1, 12, 20, 0, '2023-03-14 20:06:23', '2023-03-14 20:08:35', NULL),
(12, 1, 13, 50, 1, '2023-04-01 23:27:59', '2023-04-01 23:30:49', NULL),
(13, 1, 15, 10, 0, '2023-04-01 23:31:38', '2023-04-01 23:31:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evacuation_center_types`
--

CREATE TABLE `evacuation_center_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `adult_count` int(11) NOT NULL DEFAULT 0,
  `children_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evacuees`
--

INSERT INTO `evacuees` (`id`, `evacuation_center_id`, `family_count`, `male_count`, `female_count`, `pwd_count`, `created_at`, `updated_at`, `adult_count`, `children_count`) VALUES
(1, 1, 5, 10, 10, 1, '2022-11-27 18:53:04', '2022-11-27 18:56:32', 0, 0),
(2, 2, 10, 2, 0, 0, '2022-11-27 18:56:56', '2023-03-15 20:06:01', 0, 0),
(3, 4, 20, 50, 5, 1, '2023-01-12 22:42:09', '2023-01-16 22:05:55', 0, 0),
(4, 7, 20, 0, 0, 0, '2023-03-09 06:23:16', '2023-03-12 00:16:50', 0, 0),
(5, 10, 15, 3, 0, 1, '2023-03-13 19:31:38', '2023-04-01 23:34:48', 3, 0),
(6, 9, 15, 1, 0, 0, '2023-03-14 20:29:44', '2023-04-01 23:22:45', 0, 1),
(7, 11, 15, 0, 0, 0, '2023-03-18 00:32:01', '2023-03-18 00:32:01', 0, 0),
(8, 8, 5, 0, 0, 0, '2023-03-18 00:35:30', '2023-03-18 00:35:30', 0, 0),
(9, 6, 100, 2, 0, 1, '2023-04-01 22:52:48', '2023-04-01 23:38:09', 0, 0),
(10, 12, 50, 0, 0, 0, '2023-04-01 23:28:20', '2023-04-01 23:30:49', 0, 0),
(11, 13, 10, 0, 0, 0, '2023-04-01 23:34:17', '2023-04-01 23:34:17', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `evacuee_infos`
--

CREATE TABLE `evacuee_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evacuee_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `gender` text NOT NULL,
  `age` text NOT NULL,
  `is_head` tinyint(1) NOT NULL DEFAULT 0,
  `is_pwd` tinyint(1) NOT NULL DEFAULT 0,
  `purok` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evacuee_infos`
--

INSERT INTO `evacuee_infos` (`id`, `evacuee_id`, `first_name`, `last_name`, `gender`, `age`, `is_head`, `is_pwd`, `purok`, `created_at`, `updated_at`) VALUES
(1, 2, 'John', 'Cena', 'male', '24', 1, 0, 'Purok 1', '2023-03-15 20:01:15', '2023-03-15 20:01:15'),
(2, 2, 'John', 'Cena', 'male', '24', 1, 0, 'Purok 1', '2023-03-15 20:02:03', '2023-03-15 20:02:03'),
(11, 5, 'Jade Orpheus', 'Jumamoy', 'male', '16', 0, 0, 'Purok 1', '2023-03-17 23:42:51', '2023-04-01 23:26:59'),
(14, 5, 'Filjumar', 'Jumamoy', 'male', '28', 0, 1, 'Purok 1', '2023-03-18 00:33:31', '2023-03-18 01:04:41'),
(15, 5, 'Jackielou', 'Jumamoy', 'male', '30', 0, 0, 'Purok 1', '2023-03-18 00:33:50', '2023-03-18 00:33:50'),
(16, 9, 'Jhon', 'Da baptist', 'male', '10', 0, 1, 'Purok 2', '2023-04-01 22:53:23', '2023-04-01 22:53:23'),
(17, 9, 'Peter', 'Pan', 'male', '8', 0, 0, 'Purok 1', '2023-04-01 22:53:47', '2023-04-01 22:53:47'),
(18, 6, 'Jhon', 'Lapus', 'male', '5', 0, 0, 'Purok 1', '2023-04-01 23:22:45', '2023-04-01 23:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evacuation_center_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `evacuation_center_id`, `name`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, '313360821_1129710661269126_2869645752597442150_n (2).jpg', 'public_uploads/1/313360821_1129710661269126_2869645752597442150_n (2).jpg', '2022-11-27 18:52:44', '2022-11-27 18:52:44'),
(2, 8, 'crown.jpg', 'public_uploads/8/crown.jpg', '2023-03-12 01:44:52', '2023-03-12 01:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(9, '2022_11_12_092017_create_calamities_table', 1),
(10, '2022_11_16_031548_create_files_table', 2),
(11, '2023_03_12_090555_add_new_columns_for_barangays_table', 2),
(12, '2023_03_12_160858_create_notifications_table', 3),
(14, '2023_03_15_030529_create_evacuee_infos_table', 4),
(15, '2023_03_18_051310_add_new_columns_for_evacuees_table', 5),
(16, '2023_03_18_082113_add_column_is_pwd_from_evacuee_infos', 6),
(17, '2023_03_18_092815_add_column_needs_for_evacuation_centers_table', 7),
(19, '2023_04_02_065746_add_column_barangay_id_from_notifications_tbl', 8);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `barangay` text NOT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `barangay`, `contents`, `created_at`, `updated_at`) VALUES
(4, 2, 'Anonang', 'test 123', '2023-04-01 23:13:35', '2023-04-01 23:13:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MDRRMO', 'mdrrmo@bakwit.com', '2022-11-28 09:22:19', '$2y$10$T1FstFuGSN6/ON7sU9xtC.VAUWix8FZK//mrk.w.AFVkVR37FfWvu', 1, 'wFopKdJU2xgkPUrDbOasdgpnBFKW3bIAUIn6QhlhEBo5TyPC3ojHLQQDkuQi', '2022-11-28 09:22:19', '2022-11-28 09:22:19'),
(2, 'BDRRMO', 'bdrrmo@bakwit.com', '2022-11-28 09:22:19', '$2y$10$INMcDUf5rdqT2ryB.UCCz.JqkMa3YYVLYR34vVKmDAuWdNyKUzU/C', 0, 'SKp1bex7HHHsJOl8bYtrVOHAkLiYJHWIR22FOI6qz0v7U2sVnR6PLpKPLWIN', '2022-11-28 09:22:19', '2022-11-28 09:22:19');

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
-- Indexes for table `evacuee_infos`
--
ALTER TABLE `evacuee_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evacuee_infos_evacuee_id_foreign` (`evacuee_id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `evacuation_center_types`
--
ALTER TABLE `evacuation_center_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `evacuees`
--
ALTER TABLE `evacuees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `evacuee_infos`
--
ALTER TABLE `evacuee_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evacuee_infos`
--
ALTER TABLE `evacuee_infos`
  ADD CONSTRAINT `evacuee_infos_evacuee_id_foreign` FOREIGN KEY (`evacuee_id`) REFERENCES `evacuees` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
