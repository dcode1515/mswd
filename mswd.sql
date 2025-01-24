-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for mswd
CREATE DATABASE IF NOT EXISTS `mswd` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mswd`;

-- Dumping structure for table mswd.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mswd.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table mswd.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mswd.migrations: ~4 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- Dumping structure for table mswd.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mswd.password_resets: ~0 rows (approximately)

-- Dumping structure for table mswd.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mswd.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table mswd.profile
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile_no` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `extension` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ageCategory` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lgbt` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `weightstatus` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `childClassification` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nameofschool` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `inschool` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `schoollevel` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nameofemergency` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `relationofemergency` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contactnoofemergency` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `benefitstype` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `barangay` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `adolescent` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ethnicity` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `typeofschool` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `disability` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `forpsno` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `philhealth` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `philhealth_no` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table mswd.profile: ~12 rows (approximately)
REPLACE INTO `profile` (`id`, `profile_no`, `lastname`, `firstname`, `middlename`, `extension`, `birthdate`, `age`, `ageCategory`, `lgbt`, `weightstatus`, `childClassification`, `nameofschool`, `inschool`, `schoollevel`, `nameofemergency`, `relationofemergency`, `contactnoofemergency`, `benefitstype`, `gender`, `barangay`, `address`, `adolescent`, `ethnicity`, `typeofschool`, `disability`, `forpsno`, `philhealth`, `philhealth_no`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'MSWD-2025-00000', 'TEKIKO', 'DANRICK', 'CUBAL', '', '2010-01-24', '15', '13-18', 'YES', NULL, 'In School Youth', NULL, 'Private', 'Elementary', 'DAS', 'DAS', '', 'NO', 'Male', 'OTIEZA', 'DSADAS', 'No', 'DASD', 'Private', 'No', 'Yes', 'NO', NULL, 'ACTIVE', '2025-01-23 17:24:00', '2025-01-23 17:24:00', NULL),
	(2, 'MSWD-2025-00001', 'LASTNAME*', 'FIRSTNAME*', 'MIDDLENAME', '', '2010-11-11', '14', '13-18', NULL, NULL, 'In School Youth', NULL, 'Private', 'Day Care', 'DASDSA', 'DASDSA', '', 'YES', 'Male', 'SALVACION', 'dsadsadsa', 'Yes', 'dsad', 'Private', 'Yes', NULL, 'YES', NULL, 'ACTIVE', '2025-01-23 20:55:03', '2025-01-23 20:55:03', NULL),
	(3, 'MSWD-2025-00002', 'TEKIKOS', 'DANRICKS', 'CUBAL', 'DASDA', '2010-11-12', NULL, '0-2', NULL, 'Obese', NULL, NULL, NULL, NULL, 'DAS', 'DASDSA', '', 'NO', 'Male', 'BRITANIA', 'DASD', 'No', 'DAS', NULL, 'Yes', NULL, 'NO', NULL, 'ACTIVE', '2025-01-23 22:07:21', '2025-01-23 22:07:21', NULL),
	(4, 'MSWD-2025-00003', 'DASD', 'ASD', 'SADSA', 'DASD', '2010-11-12', '14', '13-18', NULL, NULL, 'In School Youth', NULL, NULL, 'Elementary', 'DSAD', 'SADSADSA', '', 'NO', 'Male', 'BUHISAN', 'DASDSA', 'Yes', 'DSA', 'Private', 'No', NULL, 'NO', NULL, 'ACTIVE', '2025-01-23 22:09:01', '2025-01-23 22:09:01', NULL),
	(5, 'MSWD-2025-00004', 'DSADSADSA', 'DSAD', 'SADSADSA', 'DSADSA', '2025-01-24', '0', '0-2', NULL, 'Obese', NULL, NULL, NULL, NULL, 'DSA', 'DSADSA', '', 'YES', 'Male', 'GATA', 'DSADSA', 'No', 'DSAD', NULL, 'No', NULL, 'YES', NULL, 'ACTIVE', '2025-01-23 22:12:48', '2025-01-23 22:12:48', NULL),
	(6, 'MSWD-2025-00005', 'CZCXZC', 'XZCXZ', 'CXZCXZ', 'CZXCZX', '2025-01-24', '0', '0-2', NULL, 'Obese', NULL, NULL, NULL, NULL, 'DSADA', 'SDSA', '', 'YES', 'Male', 'BUATONG', 'DASDAS', 'No', 'DASDA', NULL, 'No', NULL, 'YES', NULL, 'ACTIVE', '2025-01-23 22:28:15', '2025-01-23 22:28:15', NULL),
	(7, 'MSWD-2025-00006', 'DSAD', 'SADSA', 'DSADSADSA', 'DSADSA', '2020-11-15', '4', '3-4', NULL, 'Obese', 'In School Youth', NULL, NULL, 'Elementary', 'DAS', 'DASD', '', 'NO', 'Male', 'HORNASAN', 'dasda', 'No', 'das', 'Private', 'No', NULL, 'NO', NULL, 'ACTIVE', '2025-01-23 22:33:07', '2025-01-23 22:33:07', NULL),
	(8, 'MSWD-2025-00007', 'JANIPAAN', 'DSAD', 'SADSADSA', 'DAS', '2025-01-24', '0', '0-2', NULL, 'Obese', NULL, NULL, NULL, NULL, 'DSADSA', 'DSAD', '', 'NO', 'Male', 'JANIPAAN', 'DSA', 'No', 'DSA', NULL, 'No', NULL, 'NO', NULL, 'ACTIVE', '2025-01-23 22:35:32', '2025-01-23 22:35:32', NULL),
	(9, 'MSWD-2025-00008', 'KAUSWAGAN', 'KAUSWAGAN', 'KAUSWAGAN', '', '2025-01-24', '0', '0-2', NULL, 'Wasted', NULL, NULL, NULL, NULL, 'DSA', 'DSA', '', 'YES', 'Male', 'KAUSWAGAN', 'DSADAS', 'Yes', 'DAS', NULL, 'No', NULL, 'YES', NULL, 'ACTIVE', '2025-01-23 22:40:21', '2025-01-23 22:40:21', NULL),
	(10, 'MSWD-2025-00009', 'PUNGTOD', 'DSADAS', 'DASDSA', 'DASD', '2025-01-24', '0', '0-2', NULL, 'Obese', NULL, NULL, NULL, NULL, 'DASD', 'ADSA', '', 'YES', 'Male', 'PUNGTOD', 'das', 'No', 'dasdas', NULL, 'Yes', NULL, 'YES', NULL, 'ACTIVE', '2025-01-23 22:44:16', '2025-01-23 22:44:16', NULL),
	(11, 'MSWD-2025-00010', 'PONGON', 'DASD', 'DASDSA', 'DSA', '2010-01-24', '15', '13-18', 'NO', NULL, 'In School Youth', NULL, NULL, 'Day Care', 'DAS', 'DSA', '', 'YES', 'Male', 'SALVACION', 'DSADSA', 'Yes', 'DAS', 'Private', 'No', NULL, 'NO', NULL, 'ACTIVE', '2025-01-23 22:47:46', '2025-01-23 22:47:46', NULL),
	(12, 'MSWD-2025-00011', 'PONGON', 'PONGON', 'PONGON', '', '2025-01-24', '0', '0-2', NULL, 'Obese', NULL, NULL, NULL, NULL, 'DSA', 'DSA', '', 'NO', 'Male', 'PONG-ON', 'dasdsa', 'No', 'das', NULL, 'Yes', NULL, 'NO', NULL, 'ACTIVE', '2025-01-23 22:48:52', '2025-01-23 22:48:52', NULL),
	(13, 'MSWD-2025-00012', 'SANTO NINO', 'DAS', 'DAS', 'DA', '2025-01-24', '0', '0-2', NULL, 'Obese', NULL, NULL, NULL, NULL, 'DAS', 'DASD', '', 'YES', 'Male', 'SANTO NINO', 'DASDSA', 'Yes', 'DAS', NULL, 'Yes', NULL, 'YES', NULL, 'ACTIVE', '2025-01-23 23:00:00', '2025-01-23 23:00:00', NULL),
	(14, 'MSWD-2025-00013', 'OS OS', 'OS OS', 'OS OS', 'OS OS', '2010-01-24', '15', '13-18', 'NO', NULL, 'Out of School Youth', NULL, NULL, NULL, 'DAS', 'DAS', '', 'YES', 'Male', 'BRITANIA', 'DSAD', 'No', 'DAS', NULL, 'No', NULL, 'YES', NULL, 'ACTIVE', '2025-01-23 23:08:40', '2025-01-23 23:08:40', NULL),
	(15, 'MSWD-2025-00014', '123DAS', 'FSD', 'FDSFDS', '', '2015-01-24', '10', '5-12', NULL, NULL, 'In School Youth', NULL, NULL, 'Elementary', 'DAS', 'DAS', '', 'NO', 'Male', 'SANTO NINO', 'dasd', 'No', 'das', 'Private', 'No', NULL, 'NO', NULL, 'ACTIVE', '2025-01-23 23:22:24', '2025-01-23 23:22:24', NULL);

-- Dumping structure for table mswd.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mswd.users: ~2 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `designation`, `office`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'MSWD', 'mswd@gmail.com', NULL, '$2y$10$GU.CfV8ETBMUym8dDz263eXhSMFlIVOJvy0CrQ902nhcMtzyHEiVa', 'Barangay', 'Admin', 'Office of MSWD', NULL, '2023-02-27 03:54:53', '2023-02-27 03:54:53'),
	(2, 'Danrick C. Tekiko', 'dcode0516@gmail.com', NULL, '$2y$10$GU.CfV8ETBMUym8dDz263eXhSMFlIVOJvy0CrQ902nhcMtzyHEiVa', 'Barangay', 'Web Developer', 'Super Admin', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
