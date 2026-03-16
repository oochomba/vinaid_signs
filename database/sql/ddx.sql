-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.11.6-MariaDB-0+deb12u1 - Debian 12
-- Server OS:                    debian-linux-gnu
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
CREATE DATABASE IF NOT EXISTS `ecommerce` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `ecommerce`;

-- Dumping structure for table ecommerce.brand
CREATE TABLE IF NOT EXISTS `brand` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `status` tinyint(4) DEFAULT 0 COMMENT '0: inactive, 1:active',
  `is_delete` tinyint(4) DEFAULT 0 COMMENT '0: not deleted 1:deleted',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.brand: 5 rows
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` (`id`, `name`, `slug`, `status`, `is_delete`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `deleted_by`, `deleted_on`, `created_at`, `updated_at`) VALUES
	(11, 'Samsung edited', 'sumsung', 0, 0, 'samsung', '', '', 1, 1, '2024-03-16 07:27:37', '2024-03-16 07:13:56', '2024-03-16 07:27:37'),
	(12, 'Nokia', 'nokia', 0, 0, 'nokia', '', '', 1, NULL, NULL, '2024-03-16 07:28:12', '2024-03-16 07:28:12'),
	(13, 'LG', 'lg', 0, 0, 'LG', '', '', 1, NULL, NULL, '2024-03-16 07:28:37', '2024-03-16 07:28:37'),
	(14, 'Sony', 'sony', 0, 0, 'sony', '', '', 1, NULL, NULL, '2024-03-16 07:28:56', '2024-03-16 07:28:56'),
	(15, 'HP', 'hp', 0, 0, 'hp', '', '', 1, NULL, NULL, '2024-03-27 11:21:35', '2024-03-27 11:21:35');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;

-- Dumping structure for table ecommerce.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.cache: 0 rows
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;

-- Dumping structure for table ecommerce.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.cache_locks: 0 rows
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;

-- Dumping structure for table ecommerce.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `status` tinyint(4) DEFAULT 0 COMMENT '0: active, 1:inactive',
  `is_delete` tinyint(4) DEFAULT 0 COMMENT '0: not deleted 1:deleted',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.category: 8 rows
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `name`, `slug`, `status`, `is_delete`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `deleted_by`, `deleted_on`, `created_at`, `updated_at`) VALUES
	(8, 'computing', 'computing', 0, 0, 'computing', '', '', 1, NULL, NULL, '2024-03-17 18:54:36', '2024-03-17 18:54:36'),
	(7, 'phones & accessories', 'phones-&-accessories', 0, 0, 'phones & accessories', 'phones and accessories', '', 1, NULL, NULL, '2024-03-17 18:53:56', '2024-03-18 11:37:39'),
	(9, 'electronics', 'electronics', 0, 0, 'electronics', '', '', 1, NULL, NULL, '2024-03-17 18:55:36', '2024-03-17 18:55:36'),
	(10, 'grocery', 'grocery', 0, 1, 'grocery', '', '', 1, 1, '2024-03-26 11:48:55', '2024-03-17 18:56:02', '2024-03-26 11:48:55'),
	(11, 'protective gear', 'protective-gear', 0, 0, 'protective gear', '', '', 1, NULL, NULL, '2024-03-17 18:56:32', '2024-03-17 18:56:32'),
	(12, 'healthy & beauty', 'healthy-&-beauty', 0, 0, 'healthy & beauty', '', '', 1, NULL, NULL, '2024-03-17 18:57:25', '2024-03-18 11:37:30'),
	(13, 'home & office', 'home-&-office', 0, 0, 'home & office', '', '', 1, NULL, NULL, '2024-03-17 18:58:01', '2024-03-18 11:37:21'),
	(14, 'fashion', 'fashion', 0, 0, 'fashion', '', '', 1, NULL, NULL, '2024-03-17 19:01:36', '2024-03-17 19:01:36');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table ecommerce.color
CREATE TABLE IF NOT EXISTS `color` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `code` varchar(191) NOT NULL,
  `status` tinyint(4) DEFAULT 0 COMMENT '0: inactive, 1:active',
  `is_delete` tinyint(4) DEFAULT 0 COMMENT '0: not deleted 1:deleted',
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.color: 3 rows
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` (`id`, `name`, `code`, `status`, `is_delete`, `created_by`, `deleted_by`, `deleted_on`, `created_at`, `updated_at`) VALUES
	(13, 'yellow', '#e6ea10', 0, 0, 1, NULL, NULL, '2024-03-16 07:28:37', '2024-03-16 08:30:00'),
	(14, 'red', '#e60a0a', 0, 0, 1, NULL, NULL, '2024-03-16 07:28:56', '2024-03-16 08:29:40'),
	(15, 'blue', '#2208e7', 0, 0, 1, NULL, NULL, '2024-03-16 08:02:58', '2024-03-16 08:14:28');
/*!40000 ALTER TABLE `color` ENABLE KEYS */;

-- Dumping structure for table ecommerce.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(50) DEFAULT NULL COMMENT '0: active, 1:inactive',
  `subject` varchar(50) DEFAULT NULL COMMENT '0: not deleted 1:deleted',
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.contact: 3 rows
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
	(20, 'trio', 'diah@gmail.com', NULL, 'test mail', 'test mail message', '2024-03-29 10:23:52', '2024-03-29 10:23:52'),
	(19, 'trio', 'diah@gmail.com', NULL, 'test mail', 'test mail message', '2024-03-29 10:22:24', '2024-03-29 10:22:24'),
	(18, 'obadiah ocho', 'trio101@mail.com', NULL, 'tested', 'hello', '2024-03-29 06:43:14', '2024-03-29 06:43:14');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table ecommerce.discount_code
CREATE TABLE IF NOT EXISTS `discount_code` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `percent_amount` varchar(191) DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0 COMMENT '0: inactive, 1:active',
  `is_delete` tinyint(4) DEFAULT 0 COMMENT '0: not deleted 1:deleted',
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.discount_code: 2 rows
/*!40000 ALTER TABLE `discount_code` DISABLE KEYS */;
INSERT INTO `discount_code` (`id`, `name`, `type`, `percent_amount`, `expire_date`, `status`, `is_delete`, `created_by`, `deleted_by`, `deleted_on`, `created_at`, `updated_at`) VALUES
	(18, 'codex', 'Percent', '10', '2024-03-28', 0, 0, 1, 1, '2024-03-22 10:20:08', '2024-03-22 09:44:38', '2024-03-22 10:20:08'),
	(19, 'dulex', 'Amount', '1000', '2024-03-23', 0, 0, 1, NULL, NULL, '2024-03-23 06:02:55', '2024-03-23 06:04:40');
/*!40000 ALTER TABLE `discount_code` ENABLE KEYS */;

-- Dumping structure for table ecommerce.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table ecommerce.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.jobs: 0 rows
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Dumping structure for table ecommerce.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.job_batches: 0 rows
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;

-- Dumping structure for table ecommerce.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.migrations: 8 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2014_10_12_000000_create_users_table', 2),
	(5, '2014_10_12_100000_create_password_reset_tokens_table', 3),
	(6, '2019_08_19_000000_create_failed_jobs_table', 4),
	(7, '2019_12_14_000001_create_personal_access_tokens_table', 4),
	(8, '2024_03_25_082558_create_permission_tables', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table ecommerce.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.model_has_permissions: ~0 rows (approximately)

-- Dumping structure for table ecommerce.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.model_has_roles: ~4 rows (approximately)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(4, 'App\\Models\\User', 1),
	(4, 'App\\Models\\User', 4),
	(4, 'App\\Models\\User', 10);

-- Dumping structure for table ecommerce.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `appartment` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `discount_code` varchar(255) DEFAULT NULL,
  `discount_amount` varchar(255) DEFAULT '0',
  `shipping_id` int(11) DEFAULT NULL,
  `shipping_amount` int(25) DEFAULT 0,
  `total_amount` int(25) DEFAULT 0,
  `payment_method` varchar(255) DEFAULT NULL,
  `is_payment` tinyint(4) DEFAULT 0,
  `payment_data` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0 COMMENT '0: inactive, 1:active',
  `is_delete` tinyint(4) DEFAULT 0 COMMENT '0: not deleted 1:deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.orders: 13 rows
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `user_id`, `first_name`, `last_name`, `company`, `country_code`, `street`, `appartment`, `city`, `state`, `postal_code`, `phone`, `email`, `note`, `discount_code`, `discount_amount`, `shipping_id`, `shipping_amount`, `total_amount`, `payment_method`, `is_payment`, `payment_data`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'obadiah', 'ocho', 'test', 'KE', '199', 'test', 'nairobi', 'nairobi', '00100', '0790849746', 'trio101@mail.com', 'last test', 'codex', '4580', 2, 0, 41720, 'cash', 0, NULL, 0, 0, '2024-03-24 12:45:38', '2024-03-24 12:45:38'),
	(2, NULL, 'obadiah', 'ocho', 'test', 'KE', '199', 'test', 'nairobi', 'nairobi', '00100', '0790849746', 'trio101@mail.com', 'hello there', '', '0', 0, 0, 45800, 'cash', 0, NULL, 0, 0, '2024-03-24 12:47:29', '2024-03-24 12:47:29'),
	(3, NULL, 'obadiah', 'ocho', 'test', 'KE', '199', 'test', 'nairobi', 'nairobi', '00100', '0790849746', 'trio101@mail.com', 'hello tested', '', '0', 2, 0, 58300, 'Stripe', 0, NULL, 0, 0, '2024-03-24 12:49:52', '2024-03-24 12:49:52'),
	(4, '7', 'trtrio', 'wdq', 'test', 'KE', 'test', 'test', 'test', 'test', 'test', '37339387', 'hello1@mail.com', 'notes', '', '0', 2, 0, 24500, 'cash', 0, NULL, 0, 0, '2024-03-27 05:31:40', '2024-03-27 05:31:40'),
	(5, '8', 'trtrio', 'wdq', 'test', 'KE', 'test', 'test', 'test', 'test', 'test', '37339387', 'hello2@mail.com', 'notes', '', '0', 2, 0, 24500, 'cash', 0, NULL, 0, 0, '2024-03-27 05:35:57', '2024-03-27 05:35:57'),
	(15, '1', 'diah', 'tedt', 'tested ltd', 'KE', 'test', '101 q square', 'nairobi', 'nairobi', '00100', '0790849746', 'diah@mail.com', 'some notes tested last', '', '0', 2, 0, 24500, 'cash', 0, NULL, 0, 0, '2024-03-27 07:00:44', '2024-03-27 07:00:44'),
	(14, '1', 'diah', 'tedt', 'tested ltd', 'KE', 'test', '101 q square', 'nairobi', 'nairobi', '00100', '0790849746', 'diah@mail.com', 'some notes tested last', '', '0', 2, 0, 24500, 'cash', 0, NULL, 0, 0, '2024-03-27 06:54:33', '2024-03-27 06:54:33'),
	(13, '1', 'diah', 'tedt', 'tested ltd', 'KE', 'test', '101 q square', 'nairobi', 'nairobi', '00100', '0790849746', 'diah@mail.com', 'some notes tested', '', '0', 2, 0, 24500, 'cash', 0, NULL, 0, 0, '2024-03-27 06:30:20', '2024-03-27 06:30:20'),
	(12, '1', 'diah', 'tedt', 'tested ltd', 'KE', 'test', '101 q square', 'nairobi', 'nairobi', '00100', '0790849746', 'diah@mail.com', 'some notes tested', '', '0', 2, 0, 24500, 'stripe', 0, NULL, 0, 0, '2024-03-27 06:29:46', '2024-03-27 06:29:46'),
	(11, '1', 'diah', 'tedt', 'tested ltd', 'KE', 'test', '101 q square', 'nairobi', 'nairobi', '00100', '0790849746', 'diah@mail.com', 'some notes tested', '', '0', 2, 0, 24500, 'cash', 0, NULL, 0, 0, '2024-03-27 06:24:46', '2024-03-27 06:24:46'),
	(16, '1', 'obadiah', 'ochomba', 'triodix ltd', 'KE', '106', '3q suite square', 'nairobi', 'nairobi', '000100', '0790849746', 'oochomba@gmail.com', 'some notes again', 'codex', '4580', 2, 0, 41720, 'cash', 1, NULL, 0, 0, '2024-03-27 07:31:02', '2024-03-27 07:31:02'),
	(17, NULL, 'obadiah', 'ocho', 'test', 'KE', '199', 'test', 'nairobi', 'nairobi', '00100', '0790849746', 'trio101@mail.com', 'hello', '', '0', 2, 0, 46300, 'paypal', 0, NULL, 0, 0, '2024-03-27 07:33:28', '2024-03-27 07:33:28'),
	(18, '9', 'obadiah', 'ocho', 'test', 'KE', '199', 'test', 'nairobi', 'nairobi', '00100', '0790849746', 'trio101@mail.com', 'dwefdw', '', '0', 2, 0, 46300, 'stripe', 0, NULL, 0, 0, '2024-03-27 07:37:23', '2024-03-27 07:37:23');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table ecommerce.orders_item
CREATE TABLE IF NOT EXISTS `orders_item` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT '0',
  `price` varchar(255) NOT NULL DEFAULT '0',
  `color_name` varchar(255) DEFAULT NULL,
  `size_name` varchar(255) DEFAULT NULL,
  `size_amount` varchar(25) NOT NULL DEFAULT '0',
  `total_price` varchar(25) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.orders_item: 19 rows
/*!40000 ALTER TABLE `orders_item` DISABLE KEYS */;
INSERT INTO `orders_item` (`id`, `order_id`, `product_id`, `quantity`, `price`, `color_name`, `size_name`, `size_amount`, `total_price`, `created_at`, `updated_at`) VALUES
	(1, '1', '8', '2', '22900', 'yellow', '6\'\'', '3000', '22900', '2024-03-24 12:45:38', '2024-03-24 12:45:38'),
	(2, '2', '8', '2', '22900', 'yellow', '6\'\'', '3000', '22900', '2024-03-24 12:47:29', '2024-03-24 12:47:29'),
	(3, '3', '8', '2', '22900', 'yellow', '6\'\'', '3000', '22900', '2024-03-24 12:49:52', '2024-03-24 12:49:52'),
	(4, '3', '9', '1', '12000', 'blue', NULL, '0', '12000', '2024-03-24 12:49:52', '2024-03-24 12:49:52'),
	(5, '4', '14', '1', '24000', 'blue', NULL, '0', '24000', '2024-03-27 05:31:40', '2024-03-27 05:31:40'),
	(6, '5', '14', '1', '24000', 'blue', NULL, '0', '24000', '2024-03-27 05:35:57', '2024-03-27 05:35:57'),
	(7, '6', '14', '1', '24000', 'blue', NULL, '0', '24000', '2024-03-27 05:58:42', '2024-03-27 05:58:42'),
	(8, '7', '14', '1', '24000', 'blue', NULL, '0', '24000', '2024-03-27 05:58:49', '2024-03-27 05:58:49'),
	(9, '8', '14', '1', '24000', 'blue', NULL, '0', '24000', '2024-03-27 05:59:08', '2024-03-27 05:59:08'),
	(10, '9', '14', '1', '24000', 'blue', NULL, '0', '24000', '2024-03-27 05:59:15', '2024-03-27 05:59:15'),
	(11, '10', '14', '1', '24000', 'blue', NULL, '0', '24000', '2024-03-27 06:24:02', '2024-03-27 06:24:02'),
	(12, '11', '14', '1', '24000', 'blue', NULL, '0', '24000', '2024-03-27 06:24:46', '2024-03-27 06:24:46'),
	(13, '12', '14', '1', '24000', 'blue', NULL, '0', '24000', '2024-03-27 06:29:46', '2024-03-27 06:29:46'),
	(14, '13', '14', '1', '24000', 'blue', NULL, '0', '24000', '2024-03-27 06:30:20', '2024-03-27 06:30:20'),
	(15, '14', '14', '1', '24000', 'blue', NULL, '0', '24000', '2024-03-27 06:54:33', '2024-03-27 06:54:33'),
	(16, '15', '14', '1', '24000', 'blue', NULL, '0', '24000', '2024-03-27 07:00:44', '2024-03-27 07:00:44'),
	(17, '16', '8', '2', '22900', 'yellow', '6\'\'', '3000', '22900', '2024-03-27 07:31:02', '2024-03-27 07:31:02'),
	(18, '17', '8', '2', '22900', 'yellow', '6\'\'', '3000', '22900', '2024-03-27 07:33:28', '2024-03-27 07:33:28'),
	(19, '18', '8', '2', '22900', 'yellow', '6\'\'', '3000', '22900', '2024-03-27 07:37:23', '2024-03-27 07:37:23');
/*!40000 ALTER TABLE `orders_item` ENABLE KEYS */;

-- Dumping structure for table ecommerce.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table ecommerce.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.permissions: ~39 rows (approximately)
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
	(43, 'permission.create', 'admin', 'permission', '2024-03-26 09:57:59', '2024-03-26 09:57:59'),
	(44, 'permission.view', 'admin', 'permission', '2024-03-26 09:59:03', '2024-03-26 09:59:03'),
	(45, 'role.view', 'admin', 'role', '2024-03-26 10:04:14', '2024-03-26 10:04:14'),
	(46, 'role.add', 'admin', 'role', '2024-03-26 10:04:23', '2024-03-26 10:04:23'),
	(47, 'role.create', 'admin', 'role', '2024-03-26 10:06:30', '2024-03-26 10:06:30'),
	(48, 'role.edit', 'admin', 'role', '2024-03-26 10:06:38', '2024-03-26 10:06:38'),
	(49, 'role.delete', 'admin', 'role', '2024-03-26 10:06:46', '2024-03-26 10:06:46'),
	(50, 'permission.edit', 'admin', 'permission', '2024-03-26 10:18:29', '2024-03-26 10:18:29'),
	(51, 'permission.delete', 'admin', 'permission', '2024-03-26 10:19:03', '2024-03-26 10:19:03'),
	(52, 'admin.view', 'admin', 'admin', '2024-03-26 10:36:39', '2024-03-26 10:36:39'),
	(53, 'admin.create', 'admin', 'admin', '2024-03-26 10:37:05', '2024-03-26 10:37:05'),
	(54, 'admin.edit', 'admin', 'admin', '2024-03-26 10:37:25', '2024-03-26 10:37:25'),
	(56, 'admin.delete', 'admin', 'admin', '2024-03-26 11:01:25', '2024-03-26 11:01:25'),
	(57, 'dashboard.view', 'admin', 'dashboard', '2024-03-26 11:17:08', '2024-03-26 11:17:08'),
	(58, 'category.view', 'admin', 'category', '2024-03-26 11:36:34', '2024-03-26 11:36:34'),
	(59, 'category.create', 'admin', 'category', '2024-03-26 11:36:51', '2024-03-26 11:36:51'),
	(60, 'category.edit', 'admin', 'category', '2024-03-26 11:37:04', '2024-03-26 11:37:04'),
	(61, 'category.delete', 'admin', 'category', '2024-03-26 11:37:17', '2024-03-26 11:37:17'),
	(62, 'subCategory.view', 'admin', 'subCategory', '2024-03-26 11:55:09', '2024-03-26 11:55:09'),
	(63, 'subCategory.create', 'admin', 'subCategory', '2024-03-26 12:00:29', '2024-03-26 12:00:29'),
	(64, 'subCategory.edit', 'admin', 'subCategory', '2024-03-26 12:00:47', '2024-03-26 12:00:47'),
	(65, 'subCategory.delete', 'admin', 'subCategory', '2024-03-26 12:01:01', '2024-03-26 12:01:01'),
	(66, 'product.view', 'admin', 'product', '2024-03-26 12:10:06', '2024-03-26 12:10:06'),
	(67, 'product.create', 'admin', 'product', '2024-03-26 12:19:02', '2024-03-26 12:19:02'),
	(68, 'product.edit', 'admin', 'product', '2024-03-26 12:19:15', '2024-03-26 12:19:15'),
	(69, 'product.delete', 'admin', 'product', '2024-03-26 12:19:29', '2024-03-26 12:19:29'),
	(70, 'brand.view', 'admin', 'brand', '2024-03-26 12:24:56', '2024-03-26 12:24:56'),
	(71, 'brand.create', 'admin', 'brand', '2024-03-26 12:29:56', '2024-03-26 12:29:56'),
	(72, 'brand.edit', 'admin', 'brand', '2024-03-26 12:30:12', '2024-03-26 12:30:12'),
	(73, 'brand.delete', 'admin', 'brand', '2024-03-26 12:30:28', '2024-03-26 12:30:28'),
	(95, 'color.view', 'admin', 'color', '2024-03-26 14:13:37', '2024-03-26 14:13:37'),
	(96, 'color.delete', 'admin', 'color', '2024-03-26 14:13:37', '2024-03-26 14:13:37'),
	(97, 'color.create', 'admin', 'color', '2024-03-26 14:13:54', '2024-03-26 14:13:54'),
	(98, 'color.edit', 'admin', 'color', '2024-03-26 14:13:54', '2024-03-26 14:13:54'),
	(99, 'discountCode.view', 'admin', 'discountCode', '2024-03-26 14:24:20', '2024-03-26 14:24:20'),
	(100, 'discountCode.create', 'admin', 'discountCode', '2024-03-26 14:24:20', '2024-03-26 14:24:20'),
	(101, 'discountCode.edit', 'admin', 'discountCode', '2024-03-26 14:24:20', '2024-03-26 14:24:20'),
	(102, 'discountCode.delete', 'admin', 'discountCode', '2024-03-26 14:24:20', '2024-03-26 14:24:20'),
	(103, 'shippingCharge.view', 'admin', 'shippingCharge', '2024-03-26 14:39:21', '2024-03-26 14:39:21'),
	(104, 'shippingCharge.create', 'admin', 'shippingCharge', '2024-03-26 14:39:21', '2024-03-26 14:39:21'),
	(105, 'shippingCharge.edit', 'admin', 'shippingCharge', '2024-03-26 14:39:21', '2024-03-26 14:39:21'),
	(106, 'shippingCharge.delete', 'admin', 'shippingCharge', '2024-03-26 14:39:21', '2024-03-26 14:39:21');

-- Dumping structure for table ecommerce.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table ecommerce.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `sku` varchar(191) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `old_price` double DEFAULT 0,
  `price` double DEFAULT 0,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `additional_description` longtext DEFAULT NULL,
  `shipping_returns` text DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0 COMMENT '0: active, 1:inactive',
  `is_delete` tinyint(4) DEFAULT 0 COMMENT '0: not deleted 1:deleted',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.product: 8 rows
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `title`, `slug`, `sku`, `category_id`, `sub_category_id`, `brand_id`, `old_price`, `price`, `short_description`, `description`, `additional_description`, `shipping_returns`, `tag`, `status`, `is_delete`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `deleted_by`, `deleted_on`, `created_at`, `updated_at`) VALUES
	(8, 'samsung A12', 'samsung-a12', 'SA12KU', 7, 17, 11, 22000, 19900, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.', NULL, NULL, 0, 0, NULL, NULL, NULL, 1, NULL, NULL, '2024-03-18 13:11:40', '2024-03-21 14:31:11'),
	(16, 'HP Elitebook 840 G5', 'hp-elitebook-840-g5', 'hpel840g5', 8, 32, 15, 38000, 35000, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.', NULL, 'sale', 0, 0, NULL, NULL, NULL, 1, NULL, NULL, '2024-03-27 11:06:58', '2024-03-27 11:34:15'),
	(9, 'nokia', 'nokia', 'nokiad', 7, 19, 12, 15000, 12000, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.', 'Product Information\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.\r\n\r\nNunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.\r\nVivamus finibus vel mauris ut vehicula.\r\nNullam a magna porttitor, dictum risus nec, faucibus sapien.\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.', 'Information\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.\r\n\r\nFabric & care\r\nFaux suede fabric\r\nGold tone metal hoop handles.\r\nRI branding\r\nSnake print trim interior\r\nAdjustable cross body strap\r\nHeight: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm\r\nSize\r\none size', NULL, NULL, 0, 0, NULL, NULL, NULL, 1, NULL, NULL, '2024-03-18 13:14:17', '2024-03-18 13:15:53'),
	(10, 'sony', 'sony', 'wefwedr', 8, 32, 14, 50000, 45000, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.', NULL, 'out', 0, 0, NULL, NULL, NULL, 1, NULL, NULL, '2024-03-18 13:16:11', '2024-03-27 11:43:51'),
	(11, 'Samsung A24', 'samsung-a24', 'qwertty', 7, 17, 11, 32000, 30000, '', '', '', NULL, NULL, 0, 0, NULL, NULL, NULL, 1, NULL, NULL, '2024-03-18 13:49:19', '2024-03-18 13:50:12'),
	(12, 'Samsung S12', 'samsung-s12', 'f3rf34', 7, 17, 11, 120000, 100000, '', '', '', NULL, 'top', 0, 0, NULL, NULL, NULL, 1, NULL, NULL, '2024-03-18 13:50:43', '2024-03-27 11:48:50'),
	(13, 'Samsung Flip', 'samsung-flip', 'sflip', 7, 17, 11, 150000, 150000, '', '', '', NULL, NULL, 0, 0, NULL, NULL, NULL, 1, NULL, NULL, '2024-03-29 13:52:04', '2024-03-18 13:52:37'),
	(14, 'Samsung grand', 'samsung-grand', 'sgrand', 7, 17, 11, 0, 24000, '', '', '', NULL, 'new', 0, 0, NULL, NULL, NULL, 1, NULL, NULL, '2024-03-18 13:52:52', '2024-03-27 11:34:41');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table ecommerce.product_color
CREATE TABLE IF NOT EXISTS `product_color` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.product_color: 14 rows
/*!40000 ALTER TABLE `product_color` DISABLE KEYS */;
INSERT INTO `product_color` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
	(60, 6, 13, '2024-03-17 11:48:45', '2024-03-17 11:48:45'),
	(59, 6, 14, '2024-03-17 11:48:45', '2024-03-17 11:48:45'),
	(58, 6, 15, '2024-03-17 11:48:45', '2024-03-17 11:48:45'),
	(63, 7, 15, '2024-03-17 13:47:34', '2024-03-17 13:47:34'),
	(87, 8, 13, '2024-03-21 14:31:11', '2024-03-21 14:31:11'),
	(86, 8, 15, '2024-03-21 14:31:11', '2024-03-21 14:31:11'),
	(66, 9, 15, '2024-03-18 13:15:53', '2024-03-18 13:15:53'),
	(98, 10, 13, '2024-03-27 11:43:51', '2024-03-27 11:43:51'),
	(68, 11, 15, '2024-03-18 13:50:12', '2024-03-18 13:50:12'),
	(99, 12, 15, '2024-03-27 11:48:50', '2024-03-27 11:48:50'),
	(70, 13, 15, '2024-03-18 13:52:37', '2024-03-18 13:52:37'),
	(97, 14, 14, '2024-03-27 11:34:41', '2024-03-27 11:34:41'),
	(96, 14, 15, '2024-03-27 11:34:41', '2024-03-27 11:34:41'),
	(95, 16, 15, '2024-03-27 11:34:15', '2024-03-27 11:34:15');
/*!40000 ALTER TABLE `product_color` ENABLE KEYS */;

-- Dumping structure for table ecommerce.product_image
CREATE TABLE IF NOT EXISTS `product_image` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `image_name` varchar(191) DEFAULT NULL,
  `image_extension` varchar(50) DEFAULT NULL COMMENT '0: inactive, 1:active',
  `order_by` int(11) DEFAULT 100 COMMENT '0: not deleted 1:deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.product_image: 45 rows
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
	(35, 7, '7a1Grp5x9Ik.jpg', 'jpg', 8, '2024-03-17 13:47:34', '2024-03-17 13:47:39'),
	(74, 8, '8iSJeWVB595.jpg', 'jpg', 100, '2024-03-21 11:29:22', '2024-03-21 11:29:22'),
	(73, 8, '8aJgUppnOK0.jpg', 'jpg', 100, '2024-03-21 11:29:22', '2024-03-21 11:29:22'),
	(72, 8, '8Qnv8zBHsqX.jpg', 'jpg', 100, '2024-03-21 11:29:22', '2024-03-21 11:29:22'),
	(71, 8, '8jYA5cYuuXc.jpg', 'jpg', 100, '2024-03-21 11:29:22', '2024-03-21 11:29:22'),
	(40, 9, '9Wch1NIVJI6.jpg', 'jpg', 100, '2024-03-18 13:15:53', '2024-03-18 13:15:53'),
	(41, 9, '9mbuUKHmb6Q.jpg', 'jpg', 100, '2024-03-18 13:15:53', '2024-03-18 13:15:53'),
	(42, 9, '9IXMnZS3mDK.jpg', 'jpg', 100, '2024-03-18 13:15:53', '2024-03-18 13:15:53'),
	(43, 9, '9GQez92OzQg.jpg', 'jpg', 100, '2024-03-18 13:15:53', '2024-03-18 13:15:53'),
	(44, 10, '10pGoF9LVNQ8.jpg', 'jpg', 100, '2024-03-18 13:17:45', '2024-03-18 13:17:45'),
	(45, 10, '10ooyaEOJeIR.jpg', 'jpg', 100, '2024-03-18 13:17:45', '2024-03-18 13:17:45'),
	(46, 10, '106pPV1tYY2F.jpg', 'jpg', 100, '2024-03-18 13:17:45', '2024-03-18 13:17:45'),
	(47, 10, '10qZADbU0d79.jpg', 'jpg', 100, '2024-03-18 13:17:45', '2024-03-18 13:17:45'),
	(48, 11, '11ktdtAZMjKr.jpg', 'jpg', 100, '2024-03-18 13:50:12', '2024-03-18 13:50:12'),
	(49, 11, '11BZxJe8OOSp.jpg', 'jpg', 100, '2024-03-18 13:50:12', '2024-03-18 13:50:12'),
	(50, 12, '12z6Dfmc3b3m.jpg', 'jpg', 100, '2024-03-18 13:51:25', '2024-03-18 13:51:25'),
	(51, 12, '12o33lWzDzy7.jpg', 'jpg', 100, '2024-03-18 13:51:25', '2024-03-18 13:51:25'),
	(52, 12, '12lywVsKYQDX.jpg', 'jpg', 100, '2024-03-18 13:51:25', '2024-03-18 13:51:25'),
	(53, 13, '1339RdtC6K5c.jpg', 'jpg', 100, '2024-03-18 13:52:37', '2024-03-18 13:52:37'),
	(54, 13, '13UpTRZ82R6r.jpg', 'jpg', 100, '2024-03-18 13:52:37', '2024-03-18 13:52:37'),
	(55, 14, '14ZlF1NGH0Jk.jpg', 'jpg', 2, '2024-03-18 13:53:29', '2024-03-18 15:39:25'),
	(56, 14, '14FkLqluo26g.jpg', 'jpg', 3, '2024-03-18 13:53:29', '2024-03-18 15:39:22'),
	(57, 14, '14hJqqu0x30P.jpg', 'jpg', 1, '2024-03-18 13:53:29', '2024-03-18 15:39:25'),
	(58, 14, '144hr1dIvzjB.jpg', 'jpg', 4, '2024-03-18 13:53:29', '2024-03-18 15:39:22'),
	(75, 8, '8RZjCTeosDQ.jpg', 'jpg', 100, '2024-03-21 14:31:11', '2024-03-21 14:31:11'),
	(76, 8, '86JyBc1eC95.jpg', 'jpg', 100, '2024-03-21 14:31:11', '2024-03-21 14:31:11'),
	(77, 8, '84NI1eCKGBf.jpg', 'jpg', 100, '2024-03-21 14:31:11', '2024-03-21 14:31:11'),
	(80, 16, '16oaZLcMbL1y.jpg', 'jpg', 100, '2024-03-27 11:28:28', '2024-03-27 11:28:28'),
	(79, 8, '8BCoTHtSG5M.jpg', 'jpg', 100, '2024-03-21 14:31:11', '2024-03-21 14:31:11'),
	(81, 16, '16ugkvIRij9f.jpg', 'jpg', 100, '2024-03-27 11:28:28', '2024-03-27 11:28:28'),
	(82, 16, '16xVTcL7pXPv.jpg', 'jpg', 100, '2024-03-27 11:28:28', '2024-03-27 11:28:28'),
	(83, 16, '16VJsBYjMPcD.jpg', 'jpg', 100, '2024-03-27 11:28:28', '2024-03-27 11:28:28');
/*!40000 ALTER TABLE `product_image` ENABLE KEYS */;

-- Dumping structure for table ecommerce.product_size
CREATE TABLE IF NOT EXISTS `product_size` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.product_size: 6 rows
/*!40000 ALTER TABLE `product_size` DISABLE KEYS */;
INSERT INTO `product_size` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
	(48, 6, '14\'\'', 20000, '2024-03-17 11:48:45', '2024-03-17 11:48:45'),
	(47, 6, '17\'\'', 30000, '2024-03-17 11:48:45', '2024-03-17 11:48:45'),
	(52, 8, '6\'\'', 3000, '2024-03-21 14:31:11', '2024-03-21 14:31:11'),
	(51, 8, '5\'\'', 2000, '2024-03-21 14:31:11', '2024-03-21 14:31:11'),
	(64, 16, '16 inches', 2000, '2024-03-27 11:34:15', '2024-03-27 11:34:15'),
	(63, 16, '14 inches', 1000, '2024-03-27 11:34:15', '2024-03-27 11:34:15');
/*!40000 ALTER TABLE `product_size` ENABLE KEYS */;

-- Dumping structure for table ecommerce.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.roles: ~2 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'super administrator', 'admin', '2024-03-25 15:36:32', '2024-03-27 09:16:07'),
	(4, 'admin', 'admin', '2024-03-26 10:43:59', '2024-03-27 09:17:29');

-- Dumping structure for table ecommerce.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.role_has_permissions: ~63 rows (approximately)
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(43, 1),
	(44, 1),
	(45, 1),
	(46, 1),
	(47, 1),
	(48, 1),
	(49, 1),
	(50, 1),
	(51, 1),
	(52, 1),
	(53, 1),
	(54, 1),
	(56, 1),
	(57, 1),
	(57, 4),
	(58, 1),
	(58, 4),
	(59, 1),
	(59, 4),
	(60, 1),
	(60, 4),
	(61, 1),
	(61, 4),
	(62, 1),
	(62, 4),
	(63, 1),
	(63, 4),
	(64, 1),
	(64, 4),
	(65, 1),
	(65, 4),
	(66, 1),
	(66, 4),
	(67, 1),
	(67, 4),
	(68, 1),
	(68, 4),
	(69, 1),
	(69, 4),
	(70, 1),
	(70, 4),
	(71, 1),
	(71, 4),
	(72, 1),
	(72, 4),
	(73, 1),
	(73, 4),
	(95, 1),
	(95, 4),
	(96, 1),
	(96, 4),
	(97, 1),
	(97, 4),
	(98, 1),
	(98, 4),
	(99, 1),
	(100, 1),
	(101, 1),
	(102, 1),
	(103, 1),
	(104, 1),
	(105, 1),
	(106, 1);

-- Dumping structure for table ecommerce.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.sessions: 4 rows
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('aMNjXigIMhJZTSflDSypSIhdwLLzoz3NXcWegtno', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidWs3cGFIUERid2tINmxCQU8yVzZENzFRNzQ4YUFPdXN6RDlJWUEyYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zYW1zdW5nLWExMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1711035163),
	('hgNSRclvohMoqCHMdcpeYfeOiIv88VTxWmKlmPHs', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidWtaOEJ1Wmx5QmNsazlXSGs0aGFjcFd1QVBtbUh1U2xNbENIQzE5VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9waG9uZXMtJi1hY2Nlc3Nvcmllcy90ZWNubyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1711049399),
	('o0nVmqKsc8tE0haHuQJ1LAhppgsy3FnbmYDZj7dL', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibFV0bnFJQ3RNZ0FuQm9JN1VTMW4zMVlmQWJFUE8xbHBHRHdNQXVIaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1711088531),
	('qGmMsHaAvh642vRtHqP2FZoVmLASuD0lg9GbbrkY', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQlp5VVF5YzIwT2tDRVZtTGtxWkdPS3FVNHFSM3ZQYmZHZ0FtNXdGNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9waG9uZXMtJi1hY2Nlc3NvcmllcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1710855673);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Dumping structure for table ecommerce.shipping_charge
CREATE TABLE IF NOT EXISTS `shipping_charge` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0 COMMENT '0: inactive, 1:active',
  `is_delete` tinyint(4) DEFAULT 0 COMMENT '0: not deleted 1:deleted',
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.shipping_charge: 3 rows
/*!40000 ALTER TABLE `shipping_charge` DISABLE KEYS */;
INSERT INTO `shipping_charge` (`id`, `name`, `price`, `status`, `is_delete`, `created_by`, `deleted_by`, `deleted_on`, `created_at`, `updated_at`) VALUES
	(3, 'Dulex', 1200, 0, 0, 1, NULL, NULL, '2024-03-23 04:53:52', '2024-03-23 04:59:54'),
	(2, 'G4S', 500, 0, 0, 1, NULL, NULL, '2024-03-23 04:54:23', '2024-03-23 05:01:00'),
	(1, 'Free Shipping', 0, 0, 0, 1, NULL, NULL, '2024-03-23 05:59:35', '2024-03-23 05:59:35');
/*!40000 ALTER TABLE `shipping_charge` ENABLE KEYS */;

-- Dumping structure for table ecommerce.sub_category
CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `status` tinyint(4) DEFAULT 0 COMMENT '0: inactive, 1:active',
  `is_delete` tinyint(4) DEFAULT 0 COMMENT '0: not deleted 1:deleted',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.sub_category: 21 rows
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
INSERT INTO `sub_category` (`id`, `name`, `slug`, `status`, `is_delete`, `meta_title`, `meta_description`, `meta_keywords`, `category_id`, `created_by`, `deleted_by`, `deleted_on`, `created_at`, `updated_at`) VALUES
	(21, 'iphone', 'iphone', 0, 0, 'iphone', '', '', 7, 1, NULL, NULL, '2024-03-17 19:00:17', '2024-03-17 19:00:17'),
	(22, 'sony', 'sony', 0, 0, 'sony', '', '', 7, 1, NULL, NULL, '2024-03-17 19:00:37', '2024-03-17 19:00:37'),
	(23, 'shirts', 'shirts', 0, 0, 'shirts', '', '', 14, 1, NULL, NULL, '2024-03-17 19:01:56', '2024-03-17 19:01:56'),
	(20, 'infinix', 'infinix', 0, 0, 'infinix', '', '', 7, 1, NULL, NULL, '2024-03-17 18:59:57', '2024-03-17 18:59:57'),
	(19, 'nokia', 'nokia', 0, 0, 'nokia', '', '', 7, 1, NULL, NULL, '2024-03-17 18:59:32', '2024-03-17 18:59:32'),
	(18, 'tecno', 'tecno', 0, 0, 'tecno', '', '', 7, 1, NULL, NULL, '2024-03-17 18:59:15', '2024-03-17 18:59:15'),
	(17, 'samsung', 'samsung', 0, 0, 'samsung', '', '', 7, 1, NULL, NULL, '2024-03-17 18:58:56', '2024-03-17 18:58:56'),
	(24, 'pants edited', 'pants', 0, 1, 'pants', '', '', 14, 1, 1, '2024-03-26 12:02:32', '2024-03-17 19:02:13', '2024-03-26 12:02:32'),
	(25, 'jeans', 'jeans', 0, 0, 'jeans', '', '', 14, 1, NULL, NULL, '2024-03-17 19:02:34', '2024-03-17 19:02:34'),
	(26, 'dresses', 'dresses', 0, 0, 'dresshes', '', '', 14, 1, NULL, NULL, '2024-03-17 19:03:17', '2024-03-17 19:03:17'),
	(27, 'tops & tees', 'tops-&-tees', 0, 0, 'tops and tees', '', '', 14, 1, NULL, NULL, '2024-03-17 19:03:43', '2024-03-18 17:10:09'),
	(28, 'watches', 'watches', 0, 0, 'watches', '', '', 14, 1, NULL, NULL, '2024-03-17 19:04:21', '2024-03-17 19:04:21'),
	(29, 'shorts', 'shorts', 0, 0, 'shorts', '', '', 14, 1, NULL, NULL, '2024-03-17 19:04:58', '2024-03-17 19:04:58'),
	(30, 'notebboks', 'notebooks', 0, 0, 'notebooks', '', '', 8, 1, NULL, NULL, '2024-03-17 19:05:52', '2024-03-17 19:05:52'),
	(31, 'ultrabooks', 'ultrabooks', 0, 0, 'ultrabooks', '', '', 8, 1, NULL, NULL, '2024-03-17 19:06:16', '2024-03-17 19:06:16'),
	(32, 'laptops', 'laptops', 0, 0, 'laptops', '', '', 8, 1, NULL, NULL, '2024-03-17 19:07:05', '2024-03-17 19:07:05'),
	(33, 'desktops', 'desktops', 0, 0, 'desktops', '', '', 8, 1, NULL, NULL, '2024-03-17 19:07:34', '2024-03-17 19:07:34'),
	(34, 'printers', 'printers', 0, 0, 'printers', '', '', 8, 1, NULL, NULL, '2024-03-17 19:08:01', '2024-03-17 19:08:01'),
	(35, 'computer cables & adapters', 'computer-cables-&-adapters', 0, 0, 'computer cables and adapters', '', '', 8, 1, NULL, NULL, '2024-03-17 19:08:46', '2024-03-18 17:04:35'),
	(36, 'vitron', 'vitron', 0, 0, 'vitron', '', '', 9, 1, NULL, NULL, '2024-03-17 19:10:02', '2024-03-17 19:10:02'),
	(37, 'hisense', 'hisense', 0, 0, 'hisense', '', '', 9, 1, NULL, NULL, '2024-03-17 19:10:31', '2024-03-17 19:10:31');
/*!40000 ALTER TABLE `sub_category` ENABLE KEYS */;

-- Dumping structure for table ecommerce.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_by` int(25) DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.users: ~7 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `status`, `is_delete`, `deleted_by`, `deleted_on`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'ochomba obadiah', 'oochomba@gmail.com', '2024-03-25 11:51:14', '$2y$12$YDJ4S8BS9BUYXcCgxlu4m.jNJ26Y3jWXaQieMj4SFhMhvwnJigkNW', 1, 0, 0, NULL, NULL, NULL, '2024-03-25 11:51:31', '2024-03-26 05:51:14'),
	(8, 'trtrio wdq', 'hello2@mail.com', NULL, '$2y$12$UG8H.JXx3XMAKWV5Vj4Hvug6YHSOyddTGsyMqy5NIbEFTOLkINh1i', 0, 0, 0, NULL, NULL, NULL, '2024-03-27 05:35:57', '2024-03-27 05:35:57'),
	(9, 'obadiah ocho', 'trio101@mail.com', NULL, '$2y$12$yiQapLkoGViK38iwdOOEkOCPU.7flMK9GWjWlGs/iSUNycjDUlWSm', 0, 0, 0, NULL, NULL, NULL, '2024-03-27 07:37:23', '2024-03-27 07:37:23'),
	(10, 'admin', 'admin@mail.com', NULL, '$2y$12$Z7CjzvCKzS5..nBzKVz9EuEfUKSBrh87moYaHpWMR4oDEM7H83nd2', 1, 0, 0, NULL, NULL, NULL, '2024-03-27 09:51:26', '2024-03-27 09:51:26'),
	(11, 'test', 'oochomba1@gmail.com', NULL, '$2y$12$7VyXmfpCHo2dD/9Gl6nQRef571nMXa75WAgxZckFCTTvvRLCtamDq', 0, 0, 0, NULL, NULL, NULL, '2024-03-28 12:00:43', '2024-03-28 12:00:43'),
	(12, 'test', 'oochombax@gmail.com', NULL, '$2y$12$kMJDoZ4ziAYRCI2kgnn6ieiN6yRUZ1GfzgpaUfpDK/SXg9GDRP2sW', 0, 0, 0, NULL, NULL, NULL, '2024-03-28 12:02:19', '2024-03-28 12:02:19'),
	(13, 'test', 'me@mail.com', '2024-03-29 11:46:47', '$2y$12$EyjjROqdaLb41jYKgZkKP.0Z7t1M7wBJ/L5C9MN73OJDyHquRGMiq', 0, 0, 0, NULL, NULL, NULL, '2024-03-28 12:07:11', '2024-03-28 12:07:11');

-- Dumping structure for table ecommerce.users_copy
CREATE TABLE IF NOT EXISTS `users_copy` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT 0 COMMENT '0: custome, 1: admin, 2: super admin',
  `is_delete` tinyint(4) DEFAULT 0 COMMENT '0: not deleted, 1: deleted',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_on` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0 COMMENT '0: inactive, 1:active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table ecommerce.users_copy: 3 rows
/*!40000 ALTER TABLE `users_copy` DISABLE KEYS */;
INSERT INTO `users_copy` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `is_delete`, `deleted_by`, `deleted_on`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@mail.com', '2024-03-14 09:33:58', '$2y$12$lcr05MT1wNn.0HtK9eFIT.1peRYcX32QU1fCC.lItAGIPKVFTAp2a', 'FRfkPeE81RAfd7O6ZWs8nNwRSFC72BfpcMNnvSl04BtqphixajmYZJA2UiiC', 1, 0, NULL, NULL, 0, '2024-03-14 09:33:21', '2024-03-15 03:19:23'),
	(20, 'test', 'test@mail.com', '2024-03-24 07:17:10', '$2y$12$33eZgWaHgVbyEtY.aL4XUe.BQ/o0rnUtdF8rxbrUhgD3aJvwJthjC', 'BbKJOe8KUMhRtRkjaTuFvc9fadyRcg', 0, 0, NULL, NULL, 0, '2024-03-23 15:28:21', '2024-03-24 05:59:17'),
	(19, 'trio', 'admin1@mail.com', NULL, '$2y$12$pem/xSMdL3YYGH.Vh1deYuNbZ944289EXxVkffGx/qSlur4zAxztu', NULL, 0, 0, NULL, NULL, 0, '2024-03-23 13:08:11', '2024-03-23 13:48:38');
/*!40000 ALTER TABLE `users_copy` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
