/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel7

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-04-23 20:12:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  UNIQUE KEY `cache_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cache
-- ----------------------------
INSERT INTO `cache` VALUES ('laravel_cache424f74a6a7ed4d4ed4761507ebcd209a6ef0937b', 'i:2;', '1587267426');
INSERT INTO `cache` VALUES ('laravel_cache424f74a6a7ed4d4ed4761507ebcd209a6ef0937b:timer', 'i:1587267426;', '1587267426');
INSERT INTO `cache` VALUES ('laravel_cachetuetc', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":1:{s:8:\"\0*\0items\";a:1:{i:0;O:8:\"App\\User\":28:{s:11:\"\0*\0fillable\";a:3:{i:0;s:4:\"name\";i:1;s:5:\"email\";i:2;s:8:\"password\";}s:9:\"\0*\0hidden\";a:2:{i:0;s:8:\"password\";i:1;s:14:\"remember_token\";}s:8:\"\0*\0casts\";a:1:{s:17:\"email_verified_at\";s:8:\"datetime\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:5:\"users\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:1;s:4:\"name\";s:10:\"VQSVA2yh56\";s:5:\"email\";s:20:\"chanhduypq@gmail.com\";s:17:\"email_verified_at\";N;s:8:\"password\";s:60:\"$2y$10$8clDqYDUQ4QTCEhGiF3SquQYEWGq2hey.7WUYntkNPImgUsA.7O0S\";s:14:\"remember_token\";s:60:\"1849aiQThRKhtEBYHIHxT7R39kMTQOR1RZ5BtBRW3LhQ9fqCStbIrNn7rroR\";s:10:\"created_at\";N;s:10:\"updated_at\";s:19:\"2020-04-14 17:15:59\";s:11:\"is_customer\";i:0;s:9:\"api_token\";s:64:\"9d6c82a7361dabe6bb917988af0dcc1b8a981ca81ed0b10b68b9c0ae1dbef8ea\";}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:1;s:4:\"name\";s:10:\"VQSVA2yh56\";s:5:\"email\";s:20:\"chanhduypq@gmail.com\";s:17:\"email_verified_at\";N;s:8:\"password\";s:60:\"$2y$10$8clDqYDUQ4QTCEhGiF3SquQYEWGq2hey.7WUYntkNPImgUsA.7O0S\";s:14:\"remember_token\";s:60:\"1849aiQThRKhtEBYHIHxT7R39kMTQOR1RZ5BtBRW3LhQ9fqCStbIrNn7rroR\";s:10:\"created_at\";N;s:10:\"updated_at\";s:19:\"2020-04-14 17:15:59\";s:11:\"is_customer\";i:0;s:9:\"api_token\";s:64:\"9d6c82a7361dabe6bb917988af0dcc1b8a981ca81ed0b10b68b9c0ae1dbef8ea\";}s:10:\"\0*\0changes\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}s:20:\"\0*\0rememberTokenName\";s:14:\"remember_token\";}}}', '1586930899');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_user` int(11) NOT NULL,
  `updated_user` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '1', 'sdfsdfs', '123', '1', null, '2020-04-13 08:05:20', '2020-04-15 03:33:33');
INSERT INTO `category` VALUES ('2', '2', 'dsfdssdf', '123', '1', null, '2020-04-13 09:55:23', '2020-04-14 02:48:37');
INSERT INTO `category` VALUES ('3', '3', 'dfgfdgfdg', '1', '1', null, '2020-04-14 03:54:35', '2020-04-14 02:48:45');
INSERT INTO `category` VALUES ('4', '4', 'dsfdsfd', '1', '1', null, '2020-04-14 07:48:00', '2020-04-14 02:48:54');
INSERT INTO `category` VALUES ('5', 'CvXrNAsjK6wo6CTH', 'vHkEdRwAbFWBgnJo', '1', '1', null, '2020-04-15 03:38:30', '2020-04-15 03:38:30');
INSERT INTO `category` VALUES ('6', 'tN59rpzppTEimZcT', 'QZcSNtHtZFMEWtpz', '1', '1', null, '2020-04-15 03:47:02', '2020-04-15 03:47:02');
INSERT INTO `category` VALUES ('7', 'ZoE6VmpZFHgjawaw', 'yG0L6fZSAzrf6FNg', '1', '1', null, '2020-04-15 03:52:04', '2020-04-15 03:52:04');
INSERT INTO `category` VALUES ('8', '5', 'dfgdfgd', '1', '1', null, '2020-04-15 03:33:53', '2020-04-15 03:33:53');

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_user` int(11) NOT NULL,
  `updated_user` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `is_cancel` tinyint(1) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('1', '11', 'sdfsfs', '123', '1', '0', '0', '0', '1', null, '2020-04-13 08:13:45', '2020-04-14 03:53:52');
INSERT INTO `course` VALUES ('2', '2', 'sdfsdfds', '123', '123', '0', '0', '0', '2', null, '2020-04-13 09:58:22', '2020-04-13 09:59:38');
INSERT INTO `course` VALUES ('3', 'dssdff', 'sdfdsfds', '123', '1', '0', '0', '0', '4', null, '2020-04-13 10:18:02', '2020-04-14 02:49:19');
INSERT INTO `course` VALUES ('4', 'sdfsdfdsfdsfdsfds', 'sdfdsfs', '1', '1', '0', '0', '0', '1', null, '2020-04-13 10:18:52', '2020-04-13 10:18:52');
INSERT INTO `course` VALUES ('5', '333333', 'sdfdsfds', '1', '1', '0', '0', '0', '1', null, '2020-04-14 03:54:03', '2020-04-14 03:54:03');
INSERT INTO `course` VALUES ('6', 'ádsasadsadsad', 'ádsadsa', '7', '7', '0', '0', '0', '2', null, '2020-04-16 02:34:10', '2020-04-16 02:34:10');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('5', '2020_04_13_000000_create_category_table', '2');
INSERT INTO `migrations` VALUES ('6', '2020_04_13_075745_create_course_table', '3');
INSERT INTO `migrations` VALUES ('7', '2020_04_13_100459_add_is_customer_to_users_table', '4');
INSERT INTO `migrations` VALUES ('8', '2014_10_12_100000_create_password_resets_table', '5');
INSERT INTO `migrations` VALUES ('9', '2020_04_14_040928_password_resets', '5');
INSERT INTO `migrations` VALUES ('10', '2020_04_14_044453_create_sessions_table', '6');
INSERT INTO `migrations` VALUES ('12', '2020_04_14_170016_add_api_token_to_users_table', '7');
INSERT INTO `migrations` VALUES ('13', '2020_04_15_030837_create_cache_table', '8');
INSERT INTO `migrations` VALUES ('14', '2019_12_14_000001_create_personal_access_tokens_table', '9');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('chanhduypq@gmail.com', '$2y$10$uVTkpJdT0e9GhJ8MUrkuqeKWXI27yJaIojPB/Z7ykrtXD7UYi9ve2', '2020-04-14 04:17:15');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('4jF9jM9R4y6WVKuei5TJW4NbnyG7be85rcXE5T5b', '1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTlNFMGNZSThQV3IzSk82UXpNdllJdzl5WWZZQTg4U3hWNTU4Q3FLQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vYmxvZy5sb2NhbGhvc3QiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', '1587137245');
INSERT INTO `sessions` VALUES ('6f61wfQgndx8iloD6QWVvDcRItkvO9FmwWmUjBSs', '8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiU3UzcTk1TUFISFh2NTlDVTZqa3h5TzdvNGdYYXF3bVpodjZiTlBQbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovL2Jsb2cubG9jYWxob3N0Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9ibG9nLmxvY2FsaG9zdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjg7fQ==', '1587047827');
INSERT INTO `sessions` VALUES ('7yXInn12ejZZUQ3N24bDAWJYxR6oHDhIWSgfTwRd', null, '::1', 'PostmanRuntime/7.24.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid09jWlQ5QldvcFJsUWh0am9VdFlKNGhRdk9kQmtWYmQ3T3NXU2M4YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9ibG9nLmxvY2FsaG9zdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', '1587267511');
INSERT INTO `sessions` VALUES ('Af7H96aKDAZki6cQcLThWwr8Hw0zO5uvamzmAW9Q', null, '::1', 'PostmanRuntime/7.24.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejVjRFFtUE5kdEtCM2ZoV2lIblYwcmhpOHEySER5ZjN0UllaYmhXTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9ibG9nLmxvY2FsaG9zdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', '1587050902');
INSERT INTO `sessions` VALUES ('axq0M7QWP5g378FgEwykZW6IAu784x4bZVzbt8tA', null, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidFpYYWlONGlNWktIdE1nOVdqRzdBOGVIVGdVUmo3QkcwMmNXUVhBSSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNToiaHR0cDovL2Jsb2cubG9jYWxob3N0L2NvdXJzZT9wYWdlPTIiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovL2Jsb2cubG9jYWxob3N0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', '1587133824');
INSERT INTO `sessions` VALUES ('dtzsfT8BnPHhWPLffXXx2F4wDzpwAEA1k2b9R80R', null, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOVRUSHAxOHU2MlNWRGV0RGdYZVdxaEJjcUlFUDRjbTZCTEozZFIxZCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovL2Jsb2cubG9jYWxob3N0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', '1587267346');
INSERT INTO `sessions` VALUES ('DurvPKvrYC4p72wIuFHdAMCeIyXhvAkKetvtqOeW', '1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVzhJbzIweFBXWnB6NGtZN2tHcUs4dGNraHhINDZTWTRGd25ydFdqSiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9ibG9nLmxvY2FsaG9zdC9jb3Vyc2UiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', '1587135475');
INSERT INTO `sessions` VALUES ('iBpkTWFmEZW0c07uylJnMDKJMBEVCK0jMmtP1k0x', '1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic3dIUEdORWc3V2xSczltVTBGSXhsS3RYdmZPTUR3VFJFa3lleEtGQiI7czozOiJ1cmwiO2E6MDp7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9ibG9nLmxvY2FsaG9zdC9jb3Vyc2UiO319', '1587133210');
INSERT INTO `sessions` VALUES ('KnzjHWks22zOlPdKIacUQIQNDskBrdkOETkU7Wb5', '1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMEdVVHJ5dmVXTzl0clc3R1hsbzkwNXdOQTlOZGptVjlQeldOVHVJaCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovL2Jsb2cubG9jYWxob3N0L2NhdGVnb3J5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', '1587135865');
INSERT INTO `sessions` VALUES ('m3lbb4c9TNs37ElFaFq9hVX19j0ac9VtsUeJWyoF', '1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY0hwbHJNWXYzQ3Y2bGFzcUJJSGV0aExXMnZodWJVMDZzeTFYcXhvTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM3OiJodHRwOi8vYmxvZy5sb2NhbGhvc3QvY2F0ZWdvcnkvZWRpdC83Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', '1586965322');
INSERT INTO `sessions` VALUES ('pCchkoeNNxDqE8JsXc3MPVtvD7qkapzZ6AWV1x7N', '1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.113 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY2ZXM083Slo1NHFrOWNCQXdsNmc2T2lTRk5BOHVoZEJwMXBsaFRqNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vYmxvZy5sb2NhbGhvc3QiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', '1587637912');
INSERT INTO `sessions` VALUES ('Sf4W9UKLjweRubE2xWPG9Kg0SJ0kkKwm6MEb7Hdd', null, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiczVMeUpWblA3ZlpGUHhBVVVCNUViYUk3S3hVTUZWRGdYOTNaaDl1ciI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovL2Jsb2cubG9jYWxob3N0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', '1587022020');
INSERT INTO `sessions` VALUES ('UP7mgcK0JyuuawoGsA8EIcsEOv0mE0uvHf5iPIFv', '2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSW9hS1p1YXg3YUFpWmhValZzN2NPaVhGTzgwY1FWdXhIaE5rQW5hNSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovL2Jsb2cubG9jYWxob3N0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9ibG9nLmxvY2FsaG9zdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', '1587033230');
INSERT INTO `sessions` VALUES ('yzcJXhUlKO7d2ONSlnNeBr4wQnWhh5ziXs4N6Uov', null, '::1', 'PostmanRuntime/7.24.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWG5hdXVJMDBHdFNhR3NWWjZnN0Z5T2huZDY1MTBLaTJoWTFwOTN2TyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9ibG9nLmxvY2FsaG9zdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', '1587031189');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_customer` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'VQSVA2yh56', 'chanhduypq@gmail.com', null, '$2y$10$8clDqYDUQ4QTCEhGiF3SquQYEWGq2hey.7WUYntkNPImgUsA.7O0S', '5Fv71Q7mevQD5UmhNelJgkg17l5EqqSu47YSn4hT3rPVpVcLWfAIlbnsBqWY', null, '2020-04-14 17:15:59', '0');
INSERT INTO `users` VALUES ('2', 'luan', 'phuongluanbg@gmail.com', null, '$2y$10$rmNlQ6mJZoeYrB/DO0pkyuzlndZZMtrKPW0LYQh2ZMTOT0UQLOqOC', null, '2020-04-16 10:31:29', '2020-04-16 10:31:29', '1');
INSERT INTO `users` VALUES ('3', 'sđsfds', 'chanhduypq@gmail.com1', null, '$2y$10$rXrAuUKhmEEmJ.ANE749KO/dHLFSQa..Bw6vbFamLMWECDhOrZImO', null, '2020-04-16 14:25:31', '2020-04-16 14:25:31', '1');
INSERT INTO `users` VALUES ('4', 'sđsada', 'chanhduypq@gmail.com2', null, '$2y$10$8jEXy1Ev5jY6LYLFpgMQtOIThp5ifHb71mVFjXWpLWTImvmJZP3c.', null, '2020-04-16 14:26:51', '2020-04-16 14:26:51', '1');
INSERT INTO `users` VALUES ('5', 'sdfdsf', 'chanhduypq@gmail.com3', null, '$2y$10$dhsGdNNGEIadhtRFi4f0QuvRoUqo08Ai5Jiw8ZH73/PS0SFOUgeiS', null, '2020-04-16 14:27:26', '2020-04-16 14:27:26', '1');
INSERT INTO `users` VALUES ('6', 'dfggdf', 'chanhduypq@gmail.com4', null, '$2y$10$maLHR.5M82WUKFqbGvcnme19QafceAaY4IdG4La.ru9P0nQ2IriE2', null, '2020-04-16 14:28:14', '2020-04-16 14:28:14', '1');
INSERT INTO `users` VALUES ('7', 'sấdsa', 'chanhduypq@gmail.com6', null, '$2y$10$PVl8yzLQUPQfftPdiRFC3Ok31vyWzvmxh8QeANbuDKUBk4Q2vZy/e', null, '2020-04-16 14:29:55', '2020-04-16 14:29:55', '1');
INSERT INTO `users` VALUES ('8', 'sdfsdfds', 'chanhduypq@gmail.com7', null, '$2y$10$cVq9xzlpMeVVy3zIwrCc4uWRlGmG/Ofc.CLfy9u0n.mrltE2NuWpm', null, '2020-04-16 14:37:06', '2020-04-16 14:37:06', '1');
