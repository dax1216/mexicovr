-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2013 at 12:24 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=177 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 340),
(2, 1, NULL, NULL, 'Account', 2, 19),
(3, 2, NULL, NULL, 'register', 3, 4),
(4, 2, NULL, NULL, 'activate', 5, 6),
(5, 2, NULL, NULL, 'index', 7, 8),
(6, 2, NULL, NULL, 'login', 9, 10),
(8, 2, NULL, NULL, 'logout', 11, 12),
(9, 2, NULL, NULL, 'forgot_password', 13, 14),
(10, 1, NULL, NULL, 'Config', 20, 23),
(11, 10, NULL, NULL, 'index', 21, 22),
(12, 1, NULL, NULL, 'Contact', 24, 27),
(13, 12, NULL, NULL, 'index', 25, 26),
(14, 1, NULL, NULL, 'Home', 28, 33),
(15, 14, NULL, NULL, 'index', 29, 30),
(16, 1, NULL, NULL, 'Pages', 34, 49),
(18, 1, NULL, NULL, 'Permissions', 50, 63),
(19, 18, NULL, NULL, 'index', 51, 52),
(20, 18, NULL, NULL, 'show_aco_tree', 53, 54),
(21, 18, NULL, NULL, 'add', 55, 56),
(22, 18, NULL, NULL, 'delete', 57, 58),
(23, 18, NULL, NULL, 'show_aro', 59, 60),
(24, 18, NULL, NULL, 'aco_sync', 61, 62),
(25, 1, NULL, NULL, 'Roles', 64, 75),
(26, 25, NULL, NULL, 'index', 65, 66),
(27, 25, NULL, NULL, 'view', 67, 68),
(28, 25, NULL, NULL, 'add', 69, 70),
(29, 25, NULL, NULL, 'edit', 71, 72),
(30, 25, NULL, NULL, 'delete', 73, 74),
(31, 1, NULL, NULL, 'Users', 76, 87),
(32, 31, NULL, NULL, 'index', 77, 78),
(33, 31, NULL, NULL, 'view', 79, 80),
(34, 31, NULL, NULL, 'add', 81, 82),
(35, 31, NULL, NULL, 'edit', 83, 84),
(36, 31, NULL, NULL, 'delete', 85, 86),
(37, 1, NULL, NULL, 'AclExtras', 88, 89),
(38, 1, NULL, NULL, 'Blog', 90, 103),
(39, 38, NULL, NULL, 'Blog', 91, 102),
(40, 39, NULL, NULL, 'index', 92, 93),
(41, 39, NULL, NULL, 'view', 94, 95),
(42, 39, NULL, NULL, 'add', 96, 97),
(43, 39, NULL, NULL, 'edit', 98, 99),
(44, 39, NULL, NULL, 'delete', 100, 101),
(45, 1, NULL, NULL, 'DebugKit', 104, 111),
(46, 45, NULL, NULL, 'ToolbarAccess', 105, 110),
(47, 46, NULL, NULL, 'history_state', 106, 107),
(48, 46, NULL, NULL, 'sql_explain', 108, 109),
(49, 1, NULL, NULL, 'Recaptcha', 112, 113),
(53, 1, NULL, NULL, 'Activities', 114, 125),
(54, 53, NULL, NULL, 'index', 115, 116),
(55, 53, NULL, NULL, 'view', 117, 118),
(56, 53, NULL, NULL, 'add', 119, 120),
(57, 53, NULL, NULL, 'edit', 121, 122),
(58, 53, NULL, NULL, 'delete', 123, 124),
(59, 1, NULL, NULL, 'Advertisements', 126, 145),
(60, 59, NULL, NULL, 'index', 127, 128),
(61, 59, NULL, NULL, 'view', 129, 130),
(62, 59, NULL, NULL, 'add', 131, 132),
(63, 59, NULL, NULL, 'edit', 133, 134),
(64, 59, NULL, NULL, 'delete', 135, 136),
(65, 59, NULL, NULL, 'advertise', 137, 138),
(66, 1, NULL, NULL, 'MiscellaneousItems', 146, 157),
(67, 66, NULL, NULL, 'index', 147, 148),
(68, 66, NULL, NULL, 'view', 149, 150),
(69, 66, NULL, NULL, 'add', 151, 152),
(70, 66, NULL, NULL, 'edit', 153, 154),
(71, 66, NULL, NULL, 'delete', 155, 156),
(72, 1, NULL, NULL, 'Packages', 158, 169),
(73, 72, NULL, NULL, 'index', 159, 160),
(74, 72, NULL, NULL, 'view', 161, 162),
(75, 72, NULL, NULL, 'add', 163, 164),
(76, 72, NULL, NULL, 'edit', 165, 166),
(77, 72, NULL, NULL, 'delete', 167, 168),
(78, 16, NULL, NULL, 'index', 35, 36),
(79, 16, NULL, NULL, 'view', 37, 38),
(80, 16, NULL, NULL, 'add', 39, 40),
(81, 16, NULL, NULL, 'edit', 41, 42),
(82, 16, NULL, NULL, 'delete', 43, 44),
(83, 1, NULL, NULL, 'PaymentTypes', 170, 181),
(84, 83, NULL, NULL, 'index', 171, 172),
(85, 83, NULL, NULL, 'view', 173, 174),
(86, 83, NULL, NULL, 'add', 175, 176),
(87, 83, NULL, NULL, 'edit', 177, 178),
(88, 83, NULL, NULL, 'delete', 179, 180),
(89, 1, NULL, NULL, 'Properties', 182, 215),
(90, 89, NULL, NULL, 'index', 183, 184),
(91, 89, NULL, NULL, 'view', 185, 186),
(92, 89, NULL, NULL, 'add', 187, 188),
(93, 89, NULL, NULL, 'edit', 189, 190),
(94, 89, NULL, NULL, 'delete', 191, 192),
(95, 1, NULL, NULL, 'PropertyActivities', 216, 227),
(96, 95, NULL, NULL, 'index', 217, 218),
(97, 95, NULL, NULL, 'view', 219, 220),
(98, 95, NULL, NULL, 'add', 221, 222),
(99, 95, NULL, NULL, 'edit', 223, 224),
(100, 95, NULL, NULL, 'delete', 225, 226),
(101, 1, NULL, NULL, 'PropertyMiscellaneousItems', 228, 239),
(102, 101, NULL, NULL, 'index', 229, 230),
(103, 101, NULL, NULL, 'view', 231, 232),
(104, 101, NULL, NULL, 'add', 233, 234),
(105, 101, NULL, NULL, 'edit', 235, 236),
(106, 101, NULL, NULL, 'delete', 237, 238),
(107, 1, NULL, NULL, 'PropertyPaymentTypes', 240, 251),
(108, 107, NULL, NULL, 'index', 241, 242),
(109, 107, NULL, NULL, 'view', 243, 244),
(110, 107, NULL, NULL, 'add', 245, 246),
(111, 107, NULL, NULL, 'edit', 247, 248),
(112, 107, NULL, NULL, 'delete', 249, 250),
(113, 1, NULL, NULL, 'PropertyPhotos', 252, 263),
(114, 113, NULL, NULL, 'index', 253, 254),
(115, 113, NULL, NULL, 'view', 255, 256),
(116, 113, NULL, NULL, 'add', 257, 258),
(117, 113, NULL, NULL, 'edit', 259, 260),
(118, 113, NULL, NULL, 'delete', 261, 262),
(119, 1, NULL, NULL, 'PropertyRates', 264, 275),
(120, 119, NULL, NULL, 'index', 265, 266),
(121, 119, NULL, NULL, 'view', 267, 268),
(122, 119, NULL, NULL, 'add', 269, 270),
(123, 119, NULL, NULL, 'edit', 271, 272),
(124, 119, NULL, NULL, 'delete', 273, 274),
(125, 1, NULL, NULL, 'PropertyReservations', 276, 287),
(126, 125, NULL, NULL, 'index', 277, 278),
(127, 125, NULL, NULL, 'view', 279, 280),
(128, 125, NULL, NULL, 'add', 281, 282),
(129, 125, NULL, NULL, 'edit', 283, 284),
(130, 125, NULL, NULL, 'delete', 285, 286),
(131, 1, NULL, NULL, 'PropertyReviews', 288, 299),
(132, 131, NULL, NULL, 'index', 289, 290),
(133, 131, NULL, NULL, 'view', 291, 292),
(134, 131, NULL, NULL, 'add', 293, 294),
(135, 131, NULL, NULL, 'edit', 295, 296),
(136, 131, NULL, NULL, 'delete', 297, 298),
(137, 1, NULL, NULL, 'Reservations', 300, 311),
(138, 137, NULL, NULL, 'index', 301, 302),
(139, 137, NULL, NULL, 'view', 303, 304),
(140, 137, NULL, NULL, 'add', 305, 306),
(141, 137, NULL, NULL, 'edit', 307, 308),
(142, 137, NULL, NULL, 'delete', 309, 310),
(143, 1, NULL, NULL, 'Reviews', 312, 323),
(144, 143, NULL, NULL, 'index', 313, 314),
(145, 143, NULL, NULL, 'view', 315, 316),
(146, 143, NULL, NULL, 'add', 317, 318),
(147, 143, NULL, NULL, 'edit', 319, 320),
(148, 143, NULL, NULL, 'delete', 321, 322),
(149, 1, NULL, NULL, 'Seasons', 324, 335),
(150, 149, NULL, NULL, 'index', 325, 326),
(151, 149, NULL, NULL, 'view', 327, 328),
(152, 149, NULL, NULL, 'add', 329, 330),
(153, 149, NULL, NULL, 'edit', 331, 332),
(154, 149, NULL, NULL, 'delete', 333, 334),
(155, 1, NULL, NULL, 'Composer', 336, 337),
(156, 2, NULL, NULL, 'confirm_registration', 15, 16),
(157, 59, NULL, NULL, 'preview', 139, 140),
(158, 1, NULL, NULL, 'Uploader', 338, 339),
(159, 2, NULL, NULL, 'member', 17, 18),
(160, 14, NULL, NULL, 'search', 31, 32),
(161, 16, NULL, NULL, 'about', 45, 46),
(162, 16, NULL, NULL, 'privacy', 47, 48),
(163, 89, NULL, NULL, 'choose_your_listings', 193, 194),
(164, 89, NULL, NULL, 'rent', 195, 196),
(165, 89, NULL, NULL, 'sell', 197, 198),
(166, 89, NULL, NULL, 'price', 199, 200),
(167, 89, NULL, NULL, 'description', 201, 202),
(168, 89, NULL, NULL, 'address', 203, 204),
(170, 89, NULL, NULL, 'upload_photos', 205, 206),
(171, 89, NULL, NULL, 'rates', 207, 208),
(172, 59, NULL, NULL, 'advertising_next', 141, 142),
(173, 59, NULL, NULL, 'advertising_advertise', 143, 144),
(174, 89, NULL, NULL, 'rate', 209, 210),
(175, 89, NULL, NULL, 'preview', 211, 212),
(176, 89, NULL, NULL, 'destroy', 213, 214);

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `icon`, `is_active`, `created`, `updated`) VALUES
(1, 'Fishing', 'files/uploads/activities/fishing.png', 1, '2013-12-20 07:48:38', '2013-12-20 07:48:38'),
(2, 'Boating', 'files/uploads/activities/boating.png', 1, '2013-12-20 07:50:02', '2013-12-20 07:50:02'),
(3, 'Golfing', 'files/uploads/activities/golf.png', 1, '2013-12-20 07:50:55', '2013-12-20 07:50:55'),
(4, 'Hiking', 'files/uploads/activities/hiking.png', 1, '2013-12-20 07:51:10', '2013-12-20 07:51:10'),
(5, 'Horseback riding', 'files/uploads/activities/horse.png', 1, '2013-12-20 08:07:15', '2013-12-20 08:07:15'),
(6, 'Scuba Diving', 'files/uploads/activities/scuba.png', 1, '2013-12-20 08:07:33', '2013-12-20 08:07:33'),
(7, 'ATV Riding', 'files/uploads/activities/atv.png', 1, '2013-12-20 08:07:52', '2013-12-20 08:07:52'),
(8, 'Para-sailing', 'files/uploads/activities/para-sailing.png', 1, '2013-12-20 08:08:18', '2013-12-20 08:08:18'),
(9, 'Massage', 'files/uploads/activities/massage.png', 1, '2013-12-20 08:08:34', '2013-12-20 08:08:34'),
(10, 'Bird Watching', 'files/uploads/activities/watching.png', 1, '2013-12-20 08:09:13', '2013-12-20 08:09:13'),
(11, 'Surfing', 'files/uploads/activities/surfing.png', 1, '2013-12-20 08:10:07', '2013-12-20 08:10:07'),
(12, 'Kayaking', 'files/uploads/activities/kayaking.png', 1, '2013-12-20 08:10:28', '2013-12-20 08:10:28'),
(13, 'Rock Climbing', 'files/uploads/activities/climbing.png', 1, '2013-12-20 08:11:01', '2013-12-20 08:11:01'),
(14, 'Whale Watching', 'files/uploads/activities/whale.png', 1, '2013-12-20 08:11:22', '2013-12-20 08:11:22'),
(15, 'Jet Skiing', 'files/uploads/activities/jet.png', 1, '2013-12-20 08:11:46', '2013-12-20 08:11:46'),
(16, 'Zip Lining', 'files/uploads/activities/lining.png', 1, '2013-12-20 08:12:15', '2013-12-20 08:12:15'),
(17, 'Historical Site Seeing', 'files/uploads/activities/history.png', 1, '2013-12-20 08:12:42', '2013-12-20 08:12:42'),
(18, 'Shopping', 'files/uploads/activities/shopping.png', 1, '2013-12-20 08:13:08', '2013-12-20 08:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE IF NOT EXISTS `advertisements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_small` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `title`, `image`, `image_small`, `description1`, `description2`, `is_active`, `created`, `update`) VALUES
(2, 'test', 'files/uploads/Desert.jpg', 'files/uploads/Desert-resize-215x115-small.jpg', 'test', 'test', 0, '2013-11-18 06:32:53', '0000-00-00 00:00:00'),
(3, 'test', 'files/uploads/Desert.jpg', 'files/uploads/Desert-resize-215x115-small.jpg', 'test', 'test', 0, '2013-11-19 11:30:33', '0000-00-00 00:00:00'),
(4, 'test', 'files/uploads/Tulips.jpg', 'files/uploads/Tulips-resize-215x115-small.jpg', 'test2', 'test2', 0, '2013-12-05 08:01:27', '0000-00-00 00:00:00'),
(5, 'test', 'files/uploads/Chrysanthemum.jpg', 'files/uploads/Chrysanthemum-resize-215x115-small.jpg', 'test', 'tet', 0, '2013-12-18 07:10:21', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Role', 1, NULL, 1, 10),
(2, NULL, 'Role', 2, NULL, 11, 96),
(3, 1, 'User', 3, NULL, 2, 3),
(5, 1, 'User', 5, NULL, 6, 7),
(6, 1, 'User', 6, NULL, 8, 9),
(7, 2, 'User', 2, NULL, 12, 13),
(8, NULL, 'Role', 3, NULL, 97, 98),
(9, NULL, 'Role', 4, NULL, 99, 100),
(10, 2, 'User', 3, NULL, 14, 15),
(11, 2, 'User', 4, NULL, 16, 17),
(12, 2, 'User', 5, NULL, 18, 19),
(13, 2, 'User', 6, NULL, 20, 21),
(14, 2, 'User', 7, NULL, 22, 23),
(15, 2, 'User', 8, NULL, 24, 25),
(16, 2, 'User', 9, NULL, 26, 27),
(17, 2, 'User', 10, NULL, 28, 29),
(18, 2, 'User', 11, NULL, 30, 31),
(19, 2, 'User', 12, NULL, 32, 33),
(20, 2, 'User', 13, NULL, 34, 35),
(21, 2, 'User', 14, NULL, 36, 37),
(22, 2, 'User', 15, NULL, 38, 39),
(23, 2, 'User', 16, NULL, 40, 41),
(24, 2, 'User', 17, NULL, 42, 43),
(25, 2, 'User', 18, NULL, 44, 45),
(26, 2, 'User', 19, NULL, 46, 47),
(27, 2, 'User', 20, NULL, 48, 49),
(28, 2, 'User', 21, NULL, 50, 51),
(29, 2, 'User', 22, NULL, 52, 53),
(30, 2, 'User', 23, NULL, 54, 55),
(31, 2, 'User', 24, NULL, 56, 57),
(32, 2, 'User', 25, NULL, 58, 59),
(33, 2, 'User', 26, NULL, 60, 61),
(34, 2, 'User', 27, NULL, 62, 63),
(35, 2, 'User', 28, NULL, 64, 65),
(36, 2, 'User', 29, NULL, 66, 67),
(37, 2, 'User', 30, NULL, 68, 69),
(38, 2, 'User', 31, NULL, 70, 71),
(39, 2, 'User', 32, NULL, 72, 73),
(40, 2, 'User', 33, NULL, 74, 75),
(41, 2, 'User', 34, NULL, 76, 77),
(42, 2, 'User', 35, NULL, 78, 79),
(43, 2, 'User', 36, NULL, 80, 81),
(44, 2, 'User', 37, NULL, 82, 83),
(45, 2, 'User', 38, NULL, 84, 85),
(46, 2, 'User', 39, NULL, 86, 87),
(47, 2, 'User', 40, NULL, 88, 89),
(48, 2, 'User', 41, NULL, 90, 91),
(49, 2, 'User', 3, NULL, 92, 93),
(50, 2, 'User', 4, NULL, 94, 95);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

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
(12, 9, 14, '1', '1', '1', '1'),
(13, 2, 56, '1', '1', '1', '1'),
(14, 2, 92, '1', '1', '1', '1');

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
  `listing_type` enum('rent','sell') NOT NULL DEFAULT 'rent',
  `price` decimal(10,2) NOT NULL,
  `photo_limit` int(11) NOT NULL,
  `is_audio_enabled` tinyint(4) NOT NULL,
  `is_video_enabled` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `listing_type`, `price`, `photo_limit`, `is_audio_enabled`, `is_video_enabled`, `is_active`, `created`, `updated`) VALUES
(1, 'standard', 'rent', 0.00, 4, 0, 0, 1, '2013-12-05 12:18:11', '2013-12-05 12:18:11'),
(2, 'premium', 'rent', 99.99, 10, 1, 0, 1, '2013-12-05 12:19:06', '2013-12-05 12:19:06'),
(3, 'premium plus', 'rent', 149.99, -1, 1, 1, 1, '2013-12-05 12:19:47', '2013-12-05 12:19:47'),
(4, 'standard', 'sell', 199.99, 4, 0, 0, 1, '2013-12-05 12:20:38', '2013-12-05 12:20:38'),
(5, 'premium', 'sell', 299.99, 10, 1, 0, 1, '2013-12-05 12:21:04', '2013-12-05 12:21:04'),
(6, 'premium plus', 'sell', 349.99, -1, 1, 1, 1, '2013-12-05 12:21:39', '2013-12-05 12:21:39');

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
  `title` varchar(255) NOT NULL,
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
(2, 'user', '2013-08-28 16:04:10', '2013-11-20 10:52:55'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `name`, `is_active`, `created`, `updated`) VALUES
(1, 'High Season', 1, '2013-12-05 08:44:48', '2013-12-05 08:44:48'),
(2, 'Low Season', 1, '2013-12-05 08:45:02', '2013-12-05 08:45:02'),
(3, 'Holidays', 1, '2013-12-05 08:45:14', '2013-12-05 08:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_uploads`
--

CREATE TABLE IF NOT EXISTS `tmp_uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tmp_uploads`
--

INSERT INTO `tmp_uploads` (`id`, `session_id`, `tag`, `path`, `created`, `updated`) VALUES
(1, 'alcm1thpgijmrbit3ll5ih3jm5', 'property_photo', 'files/uploads/Desert.jpg', '2013-12-18 07:14:52', '2013-12-18 07:14:52'),
(2, 'm3d0es66qod5mjjec0t605iu77', 'property_audio', 'files/uploads/Aal-Izz-Well-Mp3Mast-Com-.mp3', '2013-12-19 12:41:01', '2013-12-19 12:41:01'),
(3, '4jrem9trkcn63f3m1a27uipbv4', 'property_photo', 'files/uploads/advertise.png', '2013-12-20 12:04:26', '2013-12-20 12:04:26'),
(4, '4jrem9trkcn63f3m1a27uipbv4', 'property_photo', 'files/uploads/bg.png', '2013-12-20 12:04:26', '2013-12-20 12:04:26'),
(5, '4jrem9trkcn63f3m1a27uipbv4', 'property_photo', 'files/uploads/boating.png', '2013-12-20 12:04:26', '2013-12-20 12:04:26');

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
  `account_type` enum('renter','seller') NOT NULL DEFAULT 'renter',
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
  `terms_and_conditions` datetime NOT NULL,
  `is_email_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinytext NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role_id`, `first_name`, `last_name`, `email_address`, `username`, `password`, `account_type`, `phone`, `address1`, `address2`, `city`, `state`, `zip`, `country`, `created`, `updated`, `confirmation_key`, `terms_and_conditions`, `is_email_confirmed`, `is_active`, `is_deleted`) VALUES
(1, 1, 'Dax', 'Panganiban', 'dax1216@gmail.com', '', '47056910acfb2435dc50b98d11e93e9dc2eb63c9', 'renter', NULL, NULL, '', NULL, NULL, NULL, NULL, '2013-08-28 16:07:48', '2013-08-28 16:21:29', '91da817cc99d0ac75df94949a92b14f1', '0000-00-00 00:00:00', 0, 1, ''),
(2, 1, 'Daisy', 'Tudtud', 'daisytudtud@gmail.com', 'daisy', '320ed5aace339b8491b7b8f8e9602d702fb52b18', 'renter', NULL, NULL, '', NULL, NULL, NULL, NULL, '2013-10-22 11:14:17', '2013-10-22 11:14:17', 'f22c35a1b130298c32cef82834748d57', '0000-00-00 00:00:00', 1, 1, ''),
(4, 2, 'test', 'test', 'test@test.com', '', '320ed5aace339b8491b7b8f8e9602d702fb52b18', 'renter', '555-555-5555', NULL, '', NULL, NULL, NULL, NULL, '2013-12-20 03:38:00', '2013-12-20 03:38:00', '45a1a9a69fb930695491c11ed6ed8d60', '2013-12-20 10:38:00', 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
