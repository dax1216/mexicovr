-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2013 at 06:44 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mexicovr`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 100),
(2, 1, NULL, NULL, 'Account', 2, 15),
(3, 2, NULL, NULL, 'register', 3, 4),
(4, 2, NULL, NULL, 'activate', 5, 6),
(5, 2, NULL, NULL, 'index', 7, 8),
(6, 2, NULL, NULL, 'login', 9, 10),
(8, 2, NULL, NULL, 'logout', 11, 12),
(9, 2, NULL, NULL, 'forgot_password', 13, 14),
(10, 1, NULL, NULL, 'Config', 16, 19),
(11, 10, NULL, NULL, 'index', 17, 18),
(12, 1, NULL, NULL, 'Contact', 20, 23),
(13, 12, NULL, NULL, 'index', 21, 22),
(14, 1, NULL, NULL, 'Home', 24, 27),
(15, 14, NULL, NULL, 'index', 25, 26),
(16, 1, NULL, NULL, 'Pages', 28, 35),
(17, 16, NULL, NULL, 'display', 29, 30),
(18, 1, NULL, NULL, 'Permissions', 36, 49),
(19, 18, NULL, NULL, 'index', 37, 38),
(20, 18, NULL, NULL, 'show_aco_tree', 39, 40),
(21, 18, NULL, NULL, 'add', 41, 42),
(22, 18, NULL, NULL, 'delete', 43, 44),
(23, 18, NULL, NULL, 'show_aro', 45, 46),
(24, 18, NULL, NULL, 'aco_sync', 47, 48),
(25, 1, NULL, NULL, 'Roles', 50, 61),
(26, 25, NULL, NULL, 'index', 51, 52),
(27, 25, NULL, NULL, 'view', 53, 54),
(28, 25, NULL, NULL, 'add', 55, 56),
(29, 25, NULL, NULL, 'edit', 57, 58),
(30, 25, NULL, NULL, 'delete', 59, 60),
(31, 1, NULL, NULL, 'Users', 62, 73),
(32, 31, NULL, NULL, 'index', 63, 64),
(33, 31, NULL, NULL, 'view', 65, 66),
(34, 31, NULL, NULL, 'add', 67, 68),
(35, 31, NULL, NULL, 'edit', 69, 70),
(36, 31, NULL, NULL, 'delete', 71, 72),
(37, 1, NULL, NULL, 'AclExtras', 74, 75),
(38, 1, NULL, NULL, 'Blog', 76, 89),
(39, 38, NULL, NULL, 'Blog', 77, 88),
(40, 39, NULL, NULL, 'index', 78, 79),
(41, 39, NULL, NULL, 'view', 80, 81),
(42, 39, NULL, NULL, 'add', 82, 83),
(43, 39, NULL, NULL, 'edit', 84, 85),
(44, 39, NULL, NULL, 'delete', 86, 87),
(45, 1, NULL, NULL, 'DebugKit', 90, 97),
(46, 45, NULL, NULL, 'ToolbarAccess', 91, 96),
(47, 46, NULL, NULL, 'history_state', 92, 93),
(48, 46, NULL, NULL, 'sql_explain', 94, 95),
(49, 1, NULL, NULL, 'Recaptcha', 98, 99),
(51, 16, NULL, NULL, 'about', 31, 32),
(52, 16, NULL, NULL, 'privacy', 33, 34);

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE IF NOT EXISTS `advertisements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Role', 1, NULL, 1, 10),
(2, NULL, 'Role', 2, NULL, 11, 14),
(3, 1, 'User', 3, NULL, 2, 3),
(5, 1, 'User', 5, NULL, 6, 7),
(6, 1, 'User', 6, NULL, 8, 9),
(7, 2, 'User', 2, NULL, 12, 13),
(8, NULL, 'Role', 3, NULL, 15, 16),
(9, NULL, 'Role', 4, NULL, 17, 18);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 1, 2, '1', '1', '1', '1'),
(3, 1, 14, '1', '1', '1', '1'),
(4, 2, 1, '-1', '-1', '-1', '-1'),
(5, 2, 2, '-1', '-1', '-1', '-1'),
(6, 2, 14, '1', '1', '1', '1'),
(7, 8, 1, '-1', '-1', '-1', '-1'),
(8, 8, 2, '1', '1', '1', '1'),
(9, 8, 14, '1', '1', '1', '1'),
(10, 9, 1, '-1', '-1', '-1', '-1'),
(11, 9, 2, '1', '1', '1', '1'),
(12, 9, 14, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `created_by` (`created_by`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `config_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `var` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneous_items`
--

CREATE TABLE IF NOT EXISTS `miscellaneous_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `photo_limit` int(11) NOT NULL,
  `is_audio_enabled` tinyint(4) NOT NULL,
  `is_video_enabled` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE IF NOT EXISTS `payment_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(32) NOT NULL,
  `state` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `rate` tinyint(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `package_id` int(11) NOT NULL,
  `additional_information` text NOT NULL,
  `listing_type` enum('rent','sale') NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `is_deleted` tinytext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property_activities`
--

CREATE TABLE IF NOT EXISTS `property_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property_miscellaneous_items`
--

CREATE TABLE IF NOT EXISTS `property_miscellaneous_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `miscellaneous_item_id` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property_payment_types`
--

CREATE TABLE IF NOT EXISTS `property_payment_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property_photos`
--

CREATE TABLE IF NOT EXISTS `property_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property_rates`
--

CREATE TABLE IF NOT EXISTS `property_rates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `season_id` int(11) NOT NULL,
  `from` tinyint(2) NOT NULL,
  `to` tinyint(2) NOT NULL,
  `night_rate` decimal(10,0) NOT NULL,
  `week_rate` decimal(10,0) NOT NULL,
  `month_rate` decimal(10,0) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email_address` varchar(128) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `review` text NOT NULL,
  `rate` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `name`, `created`, `updated`) VALUES
(1, 'admin', '2013-08-28 16:04:01', '2013-08-28 16:04:01'),
(2, 'user', '2013-08-28 16:04:10', '2013-08-28 16:04:10'),
(3, 'seller', '2013-10-24 08:58:18', '2013-10-24 08:58:18'),
(4, 'renter', '2013-10-24 08:58:23', '2013-10-24 08:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE IF NOT EXISTS `seasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email_address` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(32) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `confirmation_key` varchar(255) DEFAULT NULL,
  `is_email_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinytext NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role_id`, `first_name`, `last_name`, `email_address`, `username`, `password`, `phone`, `address1`, `address2`, `city`, `state`, `zip`, `country`, `created`, `updated`, `confirmation_key`, `is_email_confirmed`, `is_active`, `is_deleted`) VALUES
(1, 1, 'Dax', 'Panganiban', 'dax1216@gmail.com', '', '47056910acfb2435dc50b98d11e93e9dc2eb63c9', NULL, NULL, '', NULL, NULL, NULL, NULL, '2013-08-28 16:07:48', '2013-08-28 16:21:29', '91da817cc99d0ac75df94949a92b14f1', 0, 1, ''),
(2, 1, 'Daisy', 'Tudtud', 'daisytudtud@gmail.com', '', '320ed5aace339b8491b7b8f8e9602d702fb52b18', NULL, NULL, '', NULL, NULL, NULL, NULL, '2013-10-22 11:14:17', '2013-10-22 11:14:17', 'f22c35a1b130298c32cef82834748d57', 0, 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
