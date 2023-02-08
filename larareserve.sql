-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 11:45 AM
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
-- Database: `larareserve`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Young Lamb', 'Lamb of age below than 2 years old. Their meat, very the most tender. Hmmm, yummie....', 'public/categories/34q3LJOnyfT6d5NJmpKWk8YrljxpkjpZvTRuBblU.jpg', '2023-01-30 01:43:04', '2023-02-06 18:34:43'),
(2, 'Mature Lamb', 'Lamb of age between 2 to 4 years old. Their meat, very the most tender and juicy. Hmmm, yummie..', 'public/categories/1fc60iQjpx6Pxl8L5tU83NcvQ5hKFm9zqHIXsn4k.jpg', '2023-01-30 01:43:04', '2023-01-30 01:43:26'),
(3, 'Golden Lamb', 'Lamb of age more than 4 years old. Their meat, very the most juicy. Hmmm, yummie..', 'public/categories/ZoGz0zBS4r4Ao2kxNA3P1Hsfvnu4qj1EU1PY0Xxf.jpg', '2023-01-30 01:43:04', '2023-01-30 01:43:35'),
(5, 'Specials', 'Today\'s Specials', 'public/categories/78E0TexyhLwpAhYejXPlQbxYXLLAAo9B2cI3MkPy.jpg', '2023-02-06 22:33:08', '2023-02-06 22:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `category_menu`
--

CREATE TABLE `category_menu` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_menu`
--

INSERT INTO `category_menu` (`category_id`, `menu_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(1, 2),
(2, 2),
(3, 2),
(1, 3),
(2, 4),
(2, 5),
(3, 6),
(5, 1),
(5, 2);

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Full House Festive Rack of Lamb Family', 'A whole family of lamb\'s leg flavoured with rosemary, cloves, orange and cranberries makes the best festive day of the year.', 'public/menus/7vJnyebHW50A0fHHUmfgJizsqO7a8HwMSGyj4k09.jpg', '399.99', '2023-01-30 01:43:04', '2023-01-30 01:44:00'),
(2, 'Full House Delish Rack of Lamb Family', 'A whole family of roasted rack of lambs is the perfect showstopper, especially when it comes to Easter dinner.', 'public/menus/ThcAkUBgrE3E2G6oKXkfHPxSx23UjxSzwQWhXq5p.jpg', '399.99', '2023-01-30 01:43:04', '2023-01-30 01:44:12'),
(3, 'Lamb Kebab Sticks and Veges Too', 'A classic in every way, this Kebab Sticks will not go wrong while seasoned with a blend of Mediterranean Archipelagos Veges.', 'public/menus/ju63gHGBq3N8sPHvr92p5td1NkGfD1pp3LgTgSJU.jpg', '199.99', '2023-01-30 01:43:04', '2023-01-30 01:44:59'),
(4, 'Seared Lamb Steak with Potato Mash & Mint Sauce', 'Known as the salmon of the land, these lean lamb steaks and vitamin-packed sides become the perfect couple of the day.', 'public/menus/pLqjwYRK5Rd224YDbyahjjVTGcePcZ0dwZwosXAn.jpg', '179.99', '2023-01-30 01:43:04', '2023-01-30 01:44:41'),
(5, 'Relish Lamb Steak With Olive and Tomatoes', 'Behold, our signature dish from the gardens of Ovis Aries. Fed and served with tomatoes, surely one of its kind.', 'public/menus/fTUuPpy0BouxOgVoBtkE8LvwPjNt6kdo8dADbDh1.jpg', '179.99', '2023-01-30 01:43:04', '2023-01-30 01:44:52'),
(6, 'Roast Gold Lamb Stew with Garlic and Rosemary', 'All the flavours of only golden roast lamb, baked into a hearty stew. Serve over buttered cous for over the night.', 'public/menus/rR57oxOV0enpACEXWJCMQj7VpYFFbvtvd7LFylxA.jpg', '159.99', '2023-01-30 01:43:04', '2023-01-30 01:45:23');

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
(127, '2014_10_12_000000_create_users_table', 1),
(128, '2014_10_12_100000_create_password_resets_table', 1),
(129, '2019_08_19_000000_create_failed_jobs_table', 1),
(130, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(131, '2023_01_26_065548_create_categories_table', 1),
(132, '2023_01_26_065700_create_menus_table', 1),
(133, '2023_01_26_065725_create_tables_table', 1),
(135, '2023_01_27_092543_create_category_menu_table', 1),
(136, '2023_01_26_065738_create_reservations_table', 2);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel_number` varchar(255) NOT NULL,
  `res_date` datetime NOT NULL,
  `table_id` bigint(20) UNSIGNED NOT NULL,
  `guest_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `email`, `tel_number`, `res_date`, `table_id`, `guest_number`, `created_at`, `updated_at`) VALUES
(34, 'asd updated', 'asd updated', 'asd@asd.asd', '123', '2023-02-09 17:09:00', 3, 4, '2023-02-06 23:09:56', '2023-02-06 23:57:24'),
(36, 'asd reserve', 'asd lara', 'khairilazri@masscode.com.my', '0191230123', '2023-02-10 18:03:00', 1, 2, '2023-02-07 02:29:52', '2023-02-07 02:29:52'),
(37, 'asd updated', 'asd updated', 'khairilazri@masscode.com.my', '0191230123', '2023-02-11 18:36:00', 9, 6, '2023-02-07 02:37:24', '2023-02-07 02:37:24'),
(38, 'asd', 'asd updated', 'khairilazrimc@masscode.com', '0191230123', '2023-02-11 18:36:00', 3, 6, '2023-02-07 02:39:05', '2023-02-07 02:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guest_number` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'available',
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `guest_number`, `status`, `location`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Front #1', 4, 'Available', 'Front', 'public/tables/PSNAMkI1jOujdM6zoTjAKFb9oYamRbz9SnbuVFCK.jpg', '2023-01-30 01:43:04', '2023-02-06 18:43:47'),
(2, 'Inside #1', 4, 'Available', 'Inside', 'public/tables/UI3VNcCapGqG6Tt943DTOrVmT7tD3wKdAr05IDp5.jpg', '2023-01-30 01:43:04', '2023-02-06 22:50:47'),
(3, 'Outside #1', 6, 'Available', 'Outside', 'public/tables/EA5IAUew75yaHVpWZd7qul7PE0C2ZeB28oZLl3ws.jpg', '2023-01-30 01:43:04', '2023-02-06 22:50:52'),
(4, 'Front #2', 4, 'Available', 'Front', 'public/menus/BKLH7LieA0xQDr8Q5QF2dyDPB6yCc42uvA3AFjtV.jpg', '2023-01-30 02:26:52', '2023-02-06 22:50:57'),
(5, 'Inside #2', 4, 'Available', 'Inside', 'public/menus/4QRH1ASUK5p2JP2PtaKfDFWmAXGmwhbD8CfTpRZn.jpg', '2023-01-30 02:27:29', '2023-02-06 22:51:01'),
(9, 'Outside #2', 6, 'Available', 'Outside', 'public/menus/ByON3JmEDxHfMQH5F0GJohe7XbE3d0SLAoozhY9N.jpg', '2023-01-31 16:59:56', '2023-02-07 02:37:17');

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
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2023-01-30 01:43:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'xcFptkPHGmOKafagA1qm7kbGZJTiLlYdmxyFDH0ECmmCYU5lVbBecsaTSBHQ', '2023-01-30 01:43:04', '2023-01-30 01:43:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD KEY `category_menu_category_id_foreign` (`category_id`),
  ADD KEY `category_menu_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD CONSTRAINT `category_menu_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_menu_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
