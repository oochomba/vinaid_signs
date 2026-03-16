-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.2.0 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for ecommerce
CREATE DATABASE IF NOT EXISTS `ecommerce` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ecommerce`;

-- Dumping structure for table ecommerce.brand
CREATE TABLE IF NOT EXISTS `brand` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint DEFAULT '0' COMMENT '0: inactive, 1:active',
  `is_delete` tinyint DEFAULT '0' COMMENT '0: not deleted 1:deleted',
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.brand: 4 rows
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` (`id`, `name`, `slug`, `status`, `is_delete`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `deleted_by`, `deleted_on`, `created_at`, `updated_at`) VALUES
	(11, 'Samsung edited', 'sumsung', 0, 0, 'samsung', '', '', 1, 1, '2024-03-16 07:27:37', '2024-03-16 07:13:56', '2024-03-16 07:27:37'),
	(12, 'Nokia', 'nokia', 0, 0, 'nokia', '', '', 1, NULL, NULL, '2024-03-16 07:28:12', '2024-03-16 07:28:12'),
	(13, 'LG', 'lg', 0, 0, 'LG', '', '', 1, NULL, NULL, '2024-03-16 07:28:37', '2024-03-16 07:28:37'),
	(14, 'Sony', 'sony', 0, 0, 'sony', '', '', 1, NULL, NULL, '2024-03-16 07:28:56', '2024-03-16 07:28:56');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;

-- Dumping structure for table ecommerce.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.cache: 0 rows
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;

-- Dumping structure for table ecommerce.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.cache_locks: 0 rows
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;

-- Dumping structure for table ecommerce.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint DEFAULT '0' COMMENT '0: active, 1:inactive',
  `is_delete` tinyint DEFAULT '0' COMMENT '0: not deleted 1:deleted',
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.category: 0 rows
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `name`, `slug`, `status`, `is_delete`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `deleted_by`, `deleted_on`, `created_at`, `updated_at`) VALUES
	(8, 'computing', 'computing', 0, 0, 'computing', '', '', 1, NULL, NULL, '2024-03-17 18:54:36', '2024-03-17 18:54:36'),
	(7, 'phones and accessories', 'phones-and-accessories', 0, 0, 'phones and accessories', 'phones and accessories', '', 1, NULL, NULL, '2024-03-17 18:53:56', '2024-03-17 18:53:56'),
	(9, 'electronics', 'electronics', 0, 0, 'electronics', '', '', 1, NULL, NULL, '2024-03-17 18:55:36', '2024-03-17 18:55:36'),
	(10, 'grocery', 'grocery', 0, 0, 'grocery', '', '', 1, NULL, NULL, '2024-03-17 18:56:02', '2024-03-17 18:56:02'),
	(11, 'protective gear', 'protective-gear', 0, 0, 'protective gear', '', '', 1, NULL, NULL, '2024-03-17 18:56:32', '2024-03-17 18:56:32'),
	(12, 'healthy and beauty', 'healthy-and-beauty', 0, 0, 'healthy and beauty', '', '', 1, NULL, NULL, '2024-03-17 18:57:25', '2024-03-17 18:57:25'),
	(13, 'home and office', 'home-and-office', 0, 0, 'home and office', '', '', 1, NULL, NULL, '2024-03-17 18:58:01', '2024-03-17 18:58:01'),
	(14, 'fashion', 'fashion', 0, 0, 'fashion', '', '', 1, NULL, NULL, '2024-03-17 19:01:36', '2024-03-17 19:01:36');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table ecommerce.color
CREATE TABLE IF NOT EXISTS `color` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint DEFAULT '0' COMMENT '0: inactive, 1:active',
  `is_delete` tinyint DEFAULT '0' COMMENT '0: not deleted 1:deleted',
  `created_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.color: 5 rows
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` (`id`, `name`, `code`, `status`, `is_delete`, `created_by`, `deleted_by`, `deleted_on`, `created_at`, `updated_at`) VALUES
	(11, 'Samsung edited', 'sumsung', 0, 1, 1, 1, '2024-03-16 08:15:41', '2024-03-16 07:13:56', '2024-03-16 08:15:41'),
	(12, 'Nokia', 'nokia', 0, 1, 1, 1, '2024-03-16 08:15:47', '2024-03-16 07:28:12', '2024-03-16 08:15:47'),
	(13, 'yellow', '#e6ea10', 0, 0, 1, NULL, NULL, '2024-03-16 07:28:37', '2024-03-16 08:30:00'),
	(14, 'red', '#e60a0a', 0, 0, 1, NULL, NULL, '2024-03-16 07:28:56', '2024-03-16 08:29:40'),
	(15, 'blue', '#2208e7', 0, 0, 1, NULL, NULL, '2024-03-16 08:02:58', '2024-03-16 08:14:28');
/*!40000 ALTER TABLE `color` ENABLE KEYS */;

-- Dumping structure for table ecommerce.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.failed_jobs: 0 rows
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table ecommerce.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.jobs: 0 rows
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Dumping structure for table ecommerce.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.job_batches: 0 rows
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;

-- Dumping structure for table ecommerce.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.migrations: 3 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table ecommerce.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.password_reset_tokens: 0 rows
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Dumping structure for table ecommerce.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `sub_category_id` int DEFAULT NULL,
  `brand_id` int DEFAULT NULL,
  `old_price` double DEFAULT '0',
  `price` double DEFAULT '0',
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `additional_description` longtext COLLATE utf8mb4_unicode_ci,
  `shipping_returns` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint DEFAULT '0' COMMENT '0: active, 1:inactive',
  `is_delete` tinyint DEFAULT '0' COMMENT '0: not deleted 1:deleted',
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.product: 1 rows
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `title`, `slug`, `sku`, `category_id`, `sub_category_id`, `brand_id`, `old_price`, `price`, `short_description`, `description`, `additional_description`, `shipping_returns`, `status`, `is_delete`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `deleted_by`, `deleted_on`, `created_at`, `updated_at`) VALUES
	(6, 'yellow shirt', 'yellow-shirt', 'qwertty', 5, 16, 11, 25000, 30000, 'short desc', 'short desc', 'short desc', NULL, 0, 0, NULL, NULL, NULL, 1, NULL, NULL, '2024-03-16 15:48:51', '2024-03-17 11:48:45'),
	(7, 'test title', 'test-title', '', 5, 16, 14, 0, 1000, '', '', '', NULL, 0, 0, NULL, NULL, NULL, 1, NULL, NULL, '2024-03-17 10:41:31', '2024-03-17 13:47:34');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table ecommerce.product_color
CREATE TABLE IF NOT EXISTS `product_color` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `color_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.product_color: 4 rows
/*!40000 ALTER TABLE `product_color` DISABLE KEYS */;
INSERT INTO `product_color` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
	(60, 6, 13, '2024-03-17 11:48:45', '2024-03-17 11:48:45'),
	(59, 6, 14, '2024-03-17 11:48:45', '2024-03-17 11:48:45'),
	(58, 6, 15, '2024-03-17 11:48:45', '2024-03-17 11:48:45'),
	(63, 7, 15, '2024-03-17 13:47:34', '2024-03-17 13:47:34');
/*!40000 ALTER TABLE `product_color` ENABLE KEYS */;

-- Dumping structure for table ecommerce.product_image
CREATE TABLE IF NOT EXISTS `product_image` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `image_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_extension` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '0: inactive, 1:active',
  `order_by` int DEFAULT '100' COMMENT '0: not deleted 1:deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.product_image: 4 rows
/*!40000 ALTER TABLE `product_image` DISABLE KEYS */;
INSERT INTO `product_image` (`id`, `product_id`, `image_name`, `image_extension`, `order_by`, `created_at`, `updated_at`) VALUES
	(25, 7, '7LPAIA2jEld.jpg', 'jpg', 3, '2024-03-17 11:55:59', '2024-03-17 13:47:42'),
	(23, 6, '6zlydGjO9s7.jpg', 'jpg', 100, '2024-03-17 11:48:47', '2024-03-17 11:48:47'),
	(24, 6, '6z3Zz2997m0.jpg', 'jpg', 100, '2024-03-17 11:48:47', '2024-03-17 11:48:47'),
	(22, 6, '6Pp4AmZ9U7m.jpg', 'jpg', 100, '2024-03-17 11:48:47', '2024-03-17 11:48:47'),
	(21, 6, '6jnKIBYXH3k.jpg', 'jpg', 100, '2024-03-17 11:48:45', '2024-03-17 11:48:45'),
	(19, 7, '76XrhTC6nvg.jpg', 'jpg', 100, '2024-03-17 10:57:17', '2024-03-17 10:57:17'),
	(20, 7, '7hnDHSCLAml.jpg', 'jpg', 100, '2024-03-17 10:57:17', '2024-03-17 10:57:17'),
	(30, 7, '7ak0xWcx09V.jpg', 'jpg', 6, '2024-03-17 13:47:34', '2024-03-17 13:47:45'),
	(27, 7, '77CkW1rEECS.jpg', 'jpg', 2, '2024-03-17 11:55:59', '2024-03-17 13:47:42'),
	(31, 7, '7Qi9nFwIrzi.jpg', 'jpg', 4, '2024-03-17 13:47:34', '2024-03-17 13:47:45'),
	(32, 7, '7Xc8PxEqAET.jpg', 'jpg', 5, '2024-03-17 13:47:34', '2024-03-17 13:47:45'),
	(33, 7, '7JOcVpkcjRk.jpg', 'jpg', 7, '2024-03-17 13:47:34', '2024-03-17 13:47:39'),
	(34, 7, '7SJaibeoeME.jpg', 'jpg', 1, '2024-03-17 13:47:34', '2024-03-17 13:47:42'),
	(35, 7, '7a1Grp5x9Ik.jpg', 'jpg', 8, '2024-03-17 13:47:34', '2024-03-17 13:47:39');
/*!40000 ALTER TABLE `product_image` ENABLE KEYS */;

-- Dumping structure for table ecommerce.product_size
CREATE TABLE IF NOT EXISTS `product_size` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.product_size: 3 rows
/*!40000 ALTER TABLE `product_size` DISABLE KEYS */;
INSERT INTO `product_size` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
	(48, 6, '14\'\'', 20000, '2024-03-17 11:48:45', '2024-03-17 11:48:45'),
	(47, 6, '17\'\'', 30000, '2024-03-17 11:48:45', '2024-03-17 11:48:45');
/*!40000 ALTER TABLE `product_size` ENABLE KEYS */;

-- Dumping structure for table ecommerce.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.sessions: 2 rows
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('XiKaDY8c73EcVThwJYRET3F9KVXTRwsU1XyoB0QS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidFVjdUFVNnFXc0haMHhpZk5aeDFGRVNkZVNaOG5SRXlabGNIUjJYeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1710702669);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Dumping structure for table ecommerce.sub_category
CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint DEFAULT '0' COMMENT '0: inactive, 1:active',
  `is_delete` tinyint DEFAULT '0' COMMENT '0: not deleted 1:deleted',
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.sub_category: 0 rows
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
INSERT INTO `sub_category` (`id`, `name`, `slug`, `status`, `is_delete`, `meta_title`, `meta_description`, `meta_keywords`, `category_id`, `created_by`, `deleted_by`, `deleted_on`, `created_at`, `updated_at`) VALUES
	(21, 'iphone', 'iphone', 0, 0, 'iphone', '', '', 7, 1, NULL, NULL, '2024-03-17 19:00:17', '2024-03-17 19:00:17'),
	(22, 'sony', 'sony', 0, 0, 'sony', '', '', 7, 1, NULL, NULL, '2024-03-17 19:00:37', '2024-03-17 19:00:37'),
	(23, 'shirts', 'shirts', 0, 0, 'shirts', '', '', 14, 1, NULL, NULL, '2024-03-17 19:01:56', '2024-03-17 19:01:56'),
	(20, 'infinix', 'infinix', 0, 0, 'infinix', '', '', 7, 1, NULL, NULL, '2024-03-17 18:59:57', '2024-03-17 18:59:57'),
	(19, 'nokia', 'nokia', 0, 0, 'nokia', '', '', 7, 1, NULL, NULL, '2024-03-17 18:59:32', '2024-03-17 18:59:32'),
	(18, 'tecno', 'tecno', 0, 0, 'tecno', '', '', 7, 1, NULL, NULL, '2024-03-17 18:59:15', '2024-03-17 18:59:15'),
	(17, 'samsung', 'samsung', 0, 0, 'samsung', '', '', 7, 1, NULL, NULL, '2024-03-17 18:58:56', '2024-03-17 18:58:56'),
	(24, 'pants', 'pants', 0, 0, 'pants', '', '', 14, 1, NULL, NULL, '2024-03-17 19:02:13', '2024-03-17 19:02:13'),
	(25, 'jeans', 'jeans', 0, 0, 'jeans', '', '', 14, 1, NULL, NULL, '2024-03-17 19:02:34', '2024-03-17 19:02:34'),
	(26, 'dresses', 'dresses', 0, 0, 'dresshes', '', '', 14, 1, NULL, NULL, '2024-03-17 19:03:17', '2024-03-17 19:03:17'),
	(27, 'tops and tees', 'tops and tees', 0, 0, 'tops and tees', '', '', 14, 1, NULL, NULL, '2024-03-17 19:03:43', '2024-03-17 19:03:43'),
	(28, 'watches', 'watches', 0, 0, 'watches', '', '', 14, 1, NULL, NULL, '2024-03-17 19:04:21', '2024-03-17 19:04:21'),
	(29, 'shorts', 'shorts', 0, 0, 'shorts', '', '', 14, 1, NULL, NULL, '2024-03-17 19:04:58', '2024-03-17 19:04:58'),
	(30, 'notebboks', 'notebooks', 0, 0, 'notebooks', '', '', 8, 1, NULL, NULL, '2024-03-17 19:05:52', '2024-03-17 19:05:52'),
	(31, 'ultrabooks', 'ultrabooks', 0, 0, 'ultrabooks', '', '', 8, 1, NULL, NULL, '2024-03-17 19:06:16', '2024-03-17 19:06:16'),
	(32, 'laptops', 'laptops', 0, 0, 'laptops', '', '', 8, 1, NULL, NULL, '2024-03-17 19:07:05', '2024-03-17 19:07:05'),
	(33, 'desktops', 'desktops', 0, 0, 'desktops', '', '', 8, 1, NULL, NULL, '2024-03-17 19:07:34', '2024-03-17 19:07:34'),
	(34, 'printers', 'printers', 0, 0, 'printers', '', '', 8, 1, NULL, NULL, '2024-03-17 19:08:01', '2024-03-17 19:08:01'),
	(35, 'computer cables and adapters', 'computer cables and adapters', 0, 0, 'computer cables and adapters', '', '', 8, 1, NULL, NULL, '2024-03-17 19:08:46', '2024-03-17 19:08:46'),
	(36, 'vitron', 'vitron', 0, 0, 'vitron', '', '', 9, 1, NULL, NULL, '2024-03-17 19:10:02', '2024-03-17 19:10:02'),
	(37, 'hisense', 'hisense', 0, 0, 'hisense', '', '', 9, 1, NULL, NULL, '2024-03-17 19:10:31', '2024-03-17 19:10:31');
/*!40000 ALTER TABLE `sub_category` ENABLE KEYS */;

-- Dumping structure for table ecommerce.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint DEFAULT '0' COMMENT '0: custome, 1: admin, 2: super admin',
  `is_delete` tinyint DEFAULT '0' COMMENT '0: not deleted, 1: deleted',
  `deleted_by` int DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `status` tinyint DEFAULT '0' COMMENT '0: inactive, 1:active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.users: 2 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `is_delete`, `deleted_by`, `deleted_on`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@mail.com', '2024-03-14 09:33:58', '$2y$12$lcr05MT1wNn.0HtK9eFIT.1peRYcX32QU1fCC.lItAGIPKVFTAp2a', 'ZXfQLWpYUaneho5lGA5q3lYuHC5V99GNrConk1G3Y7z6JIjWJUDmj8Rj5wpV', 1, 0, NULL, NULL, 1, '2024-03-14 09:33:21', '2024-03-15 03:19:23'),
	(10, 'test', 'test@mail.com', NULL, '$2y$12$dg/dvm7ZCWf8j.cc3/URVe6i6U7ln5fkIMW5eXgxyXFb3BVJ3QcoC', 'Q3jcybD3ZbNZBIfaVHyRV3voX6DiqJ5SfqvLWhUThGWvIJXfCN2BLMOrBcNs', 1, 1, 1, '2024-03-15 12:06:55', 1, '2024-03-15 03:19:08', '2024-03-15 12:06:55');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
