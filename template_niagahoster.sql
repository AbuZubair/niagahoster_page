-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table template.tmp_fasilitas
CREATE TABLE IF NOT EXISTS `tmp_fasilitas` (
  `fs_id` int(11) NOT NULL AUTO_INCREMENT,
  `paket_id` int(11) NOT NULL DEFAULT '0',
  `resource_power` decimal(10,1) DEFAULT '0.0',
  `disk_space` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `bandwidth` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `pop3_email` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `databases` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `addon_domains` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `backup` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `backup_and_restore` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `domain` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `ssl` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `name_server` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `layanan_support` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `mail_protection` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`fs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table template.tmp_fasilitas: ~4 rows (approximately)
/*!40000 ALTER TABLE `tmp_fasilitas` DISABLE KEYS */;
INSERT INTO `tmp_fasilitas` (`fs_id`, `paket_id`, `resource_power`, `disk_space`, `bandwidth`, `pop3_email`, `databases`, `addon_domains`, `backup`, `backup_and_restore`, `domain`, `ssl`, `name_server`, `layanan_support`, `mail_protection`) VALUES
	(2, 1, 0.5, '500 MB', 'unlimited', NULL, 'unlimited', NULL, 'instant', NULL, '1', 'unlimited', NULL, 'biasa', NULL),
	(3, 2, 1.0, 'unlimited', 'unlimited', 'unlimited', 'unlimited', NULL, 'instant', NULL, 'gratis', 'unlimited', NULL, 'biasa', NULL),
	(4, 3, 2.0, 'unlimited', 'unlimited', 'unlimited', 'unlimited', 'unlimited', 'instant', NULL, 'gratis', 'unlimited', 'private', 'biasa', 'SpamAssasin'),
	(5, 4, 3.0, 'unlimited', 'unlimited', 'unlimited', 'unlimited', 'unlimited', '', 'magic auto', 'gratis', 'unlimited', 'private', 'prioritas', 'SpamExpert');
/*!40000 ALTER TABLE `tmp_fasilitas` ENABLE KEYS */;

-- Dumping structure for table template.tmp_menu
CREATE TABLE IF NOT EXISTS `tmp_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `menu_counter` int(11) DEFAULT NULL,
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `log` text COLLATE latin1_general_ci,
  `is_active` enum('Y','N') COLLATE latin1_general_ci DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  KEY `PRIMARY KEY` (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table template.tmp_menu: ~10 rows (approximately)
/*!40000 ALTER TABLE `tmp_menu` DISABLE KEYS */;
INSERT INTO `tmp_menu` (`menu_id`, `menu_name`, `menu_counter`, `link`, `log`, `is_active`, `created_date`, `updated_date`) VALUES
	(10, 'Blog', 10, '#', NULL, 'Y', '2019-06-24 20:10:55', '0000-00-00 00:00:00'),
	(1, 'Hosting', 1, '#', NULL, 'Y', '2019-06-24 20:10:55', '0000-00-00 00:00:00'),
	(2, 'Domain', 2, '#', NULL, 'Y', '2019-06-24 20:10:55', '0000-00-00 00:00:00'),
	(3, 'Server', 3, '#', NULL, 'Y', '2019-06-24 20:10:55', '0000-00-00 00:00:00'),
	(4, 'Website', 4, '#', NULL, 'Y', '2019-06-24 20:10:55', '0000-00-00 00:00:00'),
	(5, 'Afiliasi', 5, '#', NULL, 'Y', '2019-06-24 20:10:55', '0000-00-00 00:00:00'),
	(6, 'Promo', 6, '#', NULL, 'Y', '2019-06-24 20:10:55', '0000-00-00 00:00:00'),
	(7, 'Pembayaran', 7, '#', NULL, 'Y', '2019-06-24 20:10:55', '0000-00-00 00:00:00'),
	(8, 'Review', 8, '#', NULL, 'Y', '2019-06-24 20:10:55', '0000-00-00 00:00:00'),
	(9, 'Kontak', 9, '#', NULL, 'Y', '2019-06-24 20:10:55', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tmp_menu` ENABLE KEYS */;

-- Dumping structure for table template.tmp_paket
CREATE TABLE IF NOT EXISTS `tmp_paket` (
  `paket_id` int(11) NOT NULL AUTO_INCREMENT,
  `paket_name` varchar(255) COLLATE latin1_general_ci DEFAULT '0',
  `pengguna` int(11) DEFAULT '0',
  `is_active` enum('Y','N') COLLATE latin1_general_ci DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`paket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table template.tmp_paket: ~4 rows (approximately)
/*!40000 ALTER TABLE `tmp_paket` DISABLE KEYS */;
INSERT INTO `tmp_paket` (`paket_id`, `paket_name`, `pengguna`, `is_active`, `created_date`, `updated_date`) VALUES
	(1, 'Bayi', 938, 'Y', '2019-06-25 08:48:30', '0000-00-00 00:00:00'),
	(2, 'Pelajar', 4168, 'Y', '2019-06-25 08:48:31', '0000-00-00 00:00:00'),
	(3, 'Personal', 10017, 'Y', '2019-06-25 10:28:25', '0000-00-00 00:00:00'),
	(4, 'Bisnis', 3552, 'Y', '2019-06-25 08:48:35', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tmp_paket` ENABLE KEYS */;

-- Dumping structure for table template.tmp_price
CREATE TABLE IF NOT EXISTS `tmp_price` (
  `pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `paket_id` int(11) NOT NULL,
  `pr_new_price` decimal(50,2) DEFAULT NULL,
  `pr_old_price` decimal(50,2) DEFAULT NULL,
  `pr_currency` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `pr_period` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `is_active` enum('Y','N') COLLATE latin1_general_ci DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table template.tmp_price: ~4 rows (approximately)
/*!40000 ALTER TABLE `tmp_price` DISABLE KEYS */;
INSERT INTO `tmp_price` (`pr_id`, `paket_id`, `pr_new_price`, `pr_old_price`, `pr_currency`, `pr_period`, `is_active`, `created_date`, `updated_date`) VALUES
	(1, 1, 14900.00, 19900.00, 'IDR\r\n', 'bln', 'Y', '2019-06-25 08:35:03', '0000-00-00 00:00:00'),
	(2, 2, 23450.00, 46900.00, 'IDR\r\n', 'bln', 'Y', '2019-06-25 08:35:06', '0000-00-00 00:00:00'),
	(3, 3, 38900.00, 58900.00, 'IDR\r\n', 'bln', 'Y', '2019-06-25 08:35:08', '0000-00-00 00:00:00'),
	(4, 4, 65900.00, 109900.00, 'IDR\r\n', 'bln', 'Y', '2019-06-25 08:35:10', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tmp_price` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
