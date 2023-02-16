-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2022 pada 06.37
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsphotography`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(2, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'natalya@natalya.com', 1, '2021-03-04 09:47:39', 1),
(2, '::1', 'natalya@natalya.com', 1, '2021-03-04 09:57:18', 1),
(3, '::1', 'natalya@natalya.com', 1, '2021-03-04 09:58:35', 1),
(4, '::1', 'natalya@natalya.com', NULL, '2021-03-05 08:31:49', 0),
(5, '::1', 'natalya@natalya.com', NULL, '2021-03-05 08:32:05', 0),
(6, '::1', 'natalya@natalya.com', 1, '2021-03-05 08:32:22', 1),
(7, '::1', 'natalya@natalya.com', 1, '2021-03-05 08:53:19', 1),
(8, '::1', 'natasya@natasya.com', 2, '2021-03-05 08:53:42', 1),
(9, '::1', 'natalya@natalya.com', 1, '2021-03-05 09:02:13', 1),
(10, '::1', 'natalya@natalya.com', 1, '2021-03-05 09:09:14', 1),
(11, '::1', 'natasya@natasya.com', 2, '2021-03-05 09:10:05', 1),
(12, '::1', 'natalya@natalya.com', 1, '2021-03-05 09:22:05', 1),
(13, '::1', 'natasya@natasya.com', 2, '2021-03-05 09:31:24', 1),
(14, '::1', 'natasya@natasya.com', 2, '2021-03-09 22:43:25', 1),
(15, '::1', 'natalya', NULL, '2021-04-05 22:50:27', 0),
(16, '::1', 'natalya', NULL, '2021-04-05 22:50:46', 0),
(17, '::1', 'natalya', NULL, '2021-04-05 22:50:57', 0),
(18, '::1', 'natalya', NULL, '2021-04-05 22:51:59', 0),
(19, '::1', 'natalya', NULL, '2021-04-05 22:52:20', 0),
(20, '::1', 'natasya', NULL, '2021-04-05 22:52:32', 0),
(21, '::1', 'sintya@sintra.com', 3, '2021-04-05 22:54:04', 1),
(22, '::1', 'natalya', NULL, '2021-04-05 22:54:24', 0),
(23, '::1', 'sintya@sintra.com', 3, '2021-04-16 01:01:10', 1),
(24, '::1', 'sintya@sintra.com', 3, '2021-04-16 06:47:59', 1),
(25, '::1', 'natalya', NULL, '2021-04-16 06:49:18', 0),
(26, '::1', 'natalya', NULL, '2021-04-16 06:49:40', 0),
(27, '::1', 'natalya', NULL, '2021-04-16 06:49:48', 0),
(28, '::1', 'natalya', NULL, '2021-04-16 06:49:59', 0),
(29, '::1', 'natalya', NULL, '2021-04-16 06:50:06', 0),
(30, '::1', 'natalya', NULL, '2021-04-16 06:50:12', 0),
(31, '::1', 'natalya', NULL, '2021-04-16 06:50:44', 0),
(32, '::1', 'natalya@natalya.com', 1, '2021-04-16 06:50:51', 1),
(33, '::1', 'sintya@sintra.com', 3, '2021-04-16 07:07:15', 1),
(34, '::1', 'natalya', NULL, '2021-04-16 07:07:35', 0),
(35, '::1', 'natalya@natalya.com', 1, '2021-04-16 07:07:46', 1),
(36, '::1', 'natalia', NULL, '2021-04-17 07:37:14', 0),
(37, '::1', 'natalya@natalya.com', 1, '2021-04-17 07:37:29', 1),
(38, '::1', 'natalya@natalya.com', 1, '2021-04-27 01:02:18', 1),
(39, '::1', 'sintya', NULL, '2021-04-27 01:43:24', 0),
(40, '::1', 'sintya', NULL, '2021-04-27 01:43:45', 0),
(41, '::1', 'natasya', NULL, '2021-04-27 01:44:40', 0),
(42, '::1', 'natasya', NULL, '2021-04-27 01:45:02', 0),
(43, '::1', 'natasya', NULL, '2021-04-27 01:45:28', 0),
(44, '::1', 'natsaya', NULL, '2021-04-27 01:45:54', 0),
(45, '::1', 'natasya', NULL, '2021-04-27 01:46:06', 0),
(46, '::1', 'natasya', NULL, '2021-04-27 01:46:16', 0),
(47, '::1', 'Sintya', NULL, '2021-04-27 01:46:43', 0),
(48, '::1', 'sintya', NULL, '2021-04-27 01:46:53', 0),
(49, '::1', 'raka@gmail.com', 4, '2021-04-27 01:47:11', 1),
(50, '::1', 'natalya@natalya.com', 1, '2021-04-27 01:54:46', 1),
(51, '::1', 'natalya@natalya.com', 1, '2021-05-16 20:35:01', 1),
(52, '::1', 'natasya', NULL, '2021-05-16 20:39:48', 0),
(53, '::1', 'sintya', NULL, '2021-05-16 20:40:06', 0),
(54, '::1', 'natasya', NULL, '2021-05-16 20:40:26', 0),
(55, '::1', 'natasya', NULL, '2021-05-16 20:40:37', 0),
(56, '::1', 'natasya', NULL, '2021-05-16 20:41:11', 0),
(57, '::1', 'sintya@sintra.com', 3, '2021-05-16 20:41:37', 1),
(58, '::1', 'natalya@natalya.com', 1, '2021-05-16 20:49:59', 1),
(59, '::1', 'natalya@natalya.com', 1, '2021-05-16 20:54:24', 1),
(60, '::1', 'sintya@sintra.com', 3, '2021-05-16 22:13:29', 1),
(61, '::1', 'natalya@natalya.com', 1, '2021-05-16 22:18:16', 1),
(62, '::1', 'sintya@sintra.com', 3, '2021-05-16 22:23:35', 1),
(63, '::1', 'natalya@natalya.com', 1, '2021-05-19 07:28:52', 1),
(64, '::1', 'natalya', NULL, '2021-05-19 07:54:30', 0),
(65, '::1', 'natalya@natalya.com', 1, '2021-05-19 07:54:41', 1),
(66, '::1', 'natasya', NULL, '2021-05-19 10:15:47', 0),
(67, '::1', 'natasya', NULL, '2021-05-19 10:15:57', 0),
(68, '::1', 'natasya', NULL, '2021-05-19 10:16:09', 0),
(69, '::1', 'sintya@sintra.com', 3, '2021-05-19 10:16:21', 1),
(70, '::1', 'sintya@sintra.com', 3, '2021-05-20 06:51:33', 1),
(71, '::1', 'natasya', NULL, '2021-05-24 05:46:48', 0),
(72, '::1', 'sintya@sintra.com', 3, '2021-05-24 05:48:07', 1),
(73, '::1', 'natasya', NULL, '2021-05-25 22:09:38', 0),
(74, '::1', 'sintya@sintra.com', 3, '2021-05-25 22:09:54', 1),
(75, '::1', 'natalya@natalya.com', 1, '2021-05-28 00:45:28', 1),
(76, '::1', 'natalya@natalya.com', 1, '2021-05-31 07:29:48', 1),
(77, '::1', 'naalya', NULL, '2021-05-31 20:53:43', 0),
(78, '::1', 'natalya@natalya.com', 1, '2021-05-31 20:53:57', 1),
(79, '::1', 'natalya@natalya.com', 1, '2021-06-04 21:32:41', 1),
(80, '::1', 'natalya@natalya.com', 1, '2021-06-05 08:35:52', 1),
(81, '::1', 'natasya', NULL, '2021-06-05 10:06:49', 0),
(82, '::1', 'sintya@sintra.com', 3, '2021-06-05 10:07:21', 1),
(83, '::1', 'natalya@natalya.com', 1, '2021-06-07 09:01:54', 1),
(84, '::1', 'sintya@sintra.com', 3, '2021-06-07 09:56:08', 1),
(85, '::1', 'sintya@sintra.com', 3, '2021-06-07 09:57:01', 1),
(86, '::1', 'sintya@sintra.com', 3, '2021-06-07 10:49:54', 1),
(87, '::1', 'natalya@natalya.com', 1, '2021-06-07 10:54:39', 1),
(88, '::1', 'natalya@natalya.com', 1, '2021-06-09 21:15:34', 1),
(89, '::1', 'sintya@sintra.com', 3, '2021-06-09 21:16:42', 1),
(90, '::1', 'sintya@sintra.com', 3, '2021-06-09 21:16:57', 1),
(91, '::1', 'natalya@natalya.com', 1, '2021-06-09 21:50:15', 1),
(92, '::1', 'sintya@sintra.com', 3, '2021-06-09 22:09:24', 1),
(93, '::1', 'natalya@natalya.com', 1, '2021-06-18 23:03:30', 1),
(94, '::1', 'natalya@natalya.com', 1, '2021-06-25 08:01:30', 1),
(95, '::1', 'natalya@natalya.com', 1, '2021-06-25 08:04:11', 1),
(96, '::1', 'natalya@natalya.com', 1, '2021-06-27 07:38:45', 1),
(97, '::1', 'natalya@natalya.com', 1, '2021-06-27 08:35:44', 1),
(98, '::1', 'natalya@natalya.com', 1, '2021-06-27 08:36:41', 1),
(99, '::1', 'natalya@natalya.com', 1, '2021-06-27 09:28:31', 1),
(100, '::1', 'natalya@natalya.com', 1, '2021-06-27 09:29:35', 1),
(101, '::1', 'natalya@natalya.com', 1, '2021-06-29 06:54:01', 1),
(102, '::1', 'natalya@natalya.com', 1, '2021-07-01 08:49:27', 1),
(103, '::1', 'natalya@natalya.com', 1, '2021-07-02 08:28:28', 1),
(104, '::1', 'natalya@natalya.com', 1, '2021-07-04 08:50:42', 1),
(105, '::1', 'natalya@natalya.com', 1, '2021-07-07 21:51:25', 1),
(106, '::1', 'sintya@sintra.com', 3, '2021-07-07 23:17:05', 1),
(107, '::1', 'natalya@natalya.com', 1, '2021-07-08 00:47:31', 1),
(108, '::1', 'natalya@natalya.com', 1, '2021-07-09 09:30:26', 1),
(109, '::1', 'natalya@natalya.com', 1, '2021-07-13 22:42:40', 1),
(110, '::1', 'natalya@natalya.com', 1, '2021-07-14 00:47:09', 1),
(111, '::1', 'natalya@natalya.com', 1, '2021-07-14 05:41:04', 1),
(112, '::1', 'sintya', NULL, '2021-07-14 05:43:58', 0),
(113, '::1', 'sintya@sintra.com', 3, '2021-07-14 05:44:08', 1),
(114, '::1', 'natalya@natalya.com', 1, '2021-07-14 05:45:21', 1),
(115, '::1', 'sintya@sintra.com', 3, '2021-07-14 05:47:22', 1),
(116, '::1', 'natalya@natalya.com', 1, '2021-07-14 07:49:50', 1),
(117, '::1', 'natalya@natalya.com', 1, '2021-07-14 21:32:54', 1),
(118, '::1', 'sintya@sintra.com', 3, '2021-12-09 19:44:35', 1),
(119, '::1', 'natalya@natalya.com', 1, '2021-12-09 19:47:06', 1),
(120, '::1', 'sintya@sintra.com', 3, '2021-12-13 20:46:04', 1),
(121, '::1', 'sintya@sintra.com', 3, '2021-12-14 08:31:40', 1),
(122, '::1', 'sintya@sintra.com', 3, '2021-12-14 19:08:52', 1),
(123, '::1', 'natalya@natalya.com', 1, '2021-12-14 19:57:46', 1),
(124, '::1', 'sintya@sintra.com', 3, '2021-12-14 20:07:45', 1),
(125, '::1', 'natalya@natalya.com', 1, '2021-12-14 20:27:20', 1),
(126, '::1', 'sintya@sintra.com', 3, '2021-12-14 20:27:49', 1),
(127, '::1', 'sintya@sintra.com', 3, '2021-12-20 20:56:01', 1),
(128, '::1', 'natalya@natalya.com', 1, '2021-12-20 23:06:15', 1),
(129, '::1', 'sintya@sintra.com', 3, '2021-12-20 23:19:59', 1),
(130, '::1', 'natalya', NULL, '2021-12-20 23:37:46', 0),
(131, '::1', 'natalya@natalya.com', 1, '2021-12-20 23:37:57', 1),
(132, '::1', 'sintya@sintra.com', 3, '2021-12-21 05:57:56', 1),
(133, '::1', 'sintya@sintra.com', 3, '2021-12-26 17:47:02', 1),
(134, '::1', 'natalya@natalya.com', 1, '2021-12-26 18:14:47', 1),
(135, '::1', 'natalya@natalya.com', 1, '2021-12-27 04:33:51', 1),
(136, '::1', 'natalya@natalya.com', 1, '2021-12-27 17:44:06', 1),
(137, '::1', 'raka', NULL, '2021-12-27 17:45:48', 0),
(138, '::1', 'raka@gmail.com', 4, '2021-12-27 17:46:04', 1),
(139, '::1', 'raka@gmail.com', 4, '2021-12-28 18:23:05', 1),
(140, '::1', 'natalya@natalya.com', 1, '2021-12-28 18:47:41', 1),
(141, '::1', 'sintya@sintra.com', 3, '2021-12-28 19:45:29', 1),
(142, '::1', 'raka@gmail.com', 4, '2021-12-28 20:38:54', 1),
(143, '::1', 'raka@gmail.com', 4, '2021-12-28 22:41:41', 1),
(144, '::1', 'sintya@sintra.com', 3, '2021-12-28 22:42:12', 1),
(145, '::1', 'natalya@natalya.com', 1, '2021-12-28 23:23:20', 1),
(146, '::1', 'raka@gmail.com', 4, '2021-12-29 01:22:32', 1),
(147, '::1', 'raka@gmail.com', 4, '2021-12-29 02:12:18', 1),
(148, '::1', 'sintya@sintra.com', 3, '2021-12-30 00:26:45', 1),
(149, '::1', 'raka@gmail.com', 4, '2022-01-02 20:07:04', 1),
(150, '::1', 'raka@gmail.com', 4, '2022-01-03 18:41:00', 1),
(151, '::1', 'natalya@natalya.com', 1, '2022-01-04 19:13:13', 1),
(152, '::1', 'raka@gmail.com', 4, '2022-01-05 05:26:03', 1),
(153, '::1', 'natalya@natalya.com', 1, '2022-01-05 19:21:02', 1),
(154, '::1', 'raka@gmail.com', 4, '2022-01-06 04:39:17', 1),
(155, '::1', 'natalya@natalya.com', 1, '2022-01-06 04:44:01', 1),
(156, '::1', 'raka@gmail.com', 4, '2022-01-06 17:14:23', 1),
(157, '::1', 'natalya@natalya.com', 1, '2022-01-06 18:02:44', 1),
(158, '::1', 'raka@gmail.com', 4, '2022-01-06 19:45:21', 1),
(159, '::1', 'natalya@natalya.com', 1, '2022-01-09 17:54:12', 1),
(160, '::1', 'raka@gmail.com', 4, '2022-01-12 18:49:44', 1),
(161, '::1', 'natalya@natalya.com', 1, '2022-01-12 19:48:35', 1),
(162, '::1', 'raka@gmail.com', 4, '2022-01-12 19:52:24', 1),
(163, '::1', 'natalya@natalya.com', 1, '2022-01-12 19:56:09', 1),
(164, '::1', 'raka@gmail.com', 4, '2022-01-12 20:30:05', 1),
(165, '::1', 'natalya@natalya.com', 1, '2022-01-12 20:32:22', 1),
(166, '::1', 'natalya@natalya.com', 1, '2022-01-12 21:15:28', 1),
(167, '::1', 'raka@gmail.com', 4, '2022-01-12 21:15:41', 1),
(168, '::1', 'raka@gmail.com', 4, '2022-01-15 15:10:53', 1),
(169, '::1', 'natalya@natalya.com', 1, '2022-01-15 15:42:06', 1),
(170, '::1', 'raka@gmail.com', 4, '2022-01-16 22:48:36', 1),
(171, '::1', 'raka@gmail.com', 4, '2022-01-18 02:22:23', 1),
(172, '::1', 'natalya@natalya.com', 1, '2022-01-18 03:04:32', 1),
(173, '::1', 'natalya@natalya.com', 1, '2022-01-18 19:46:26', 1),
(174, '::1', 'natalya@natalya.com', 1, '2022-01-21 19:16:00', 1),
(175, '::1', 'natalya@natalya.com', 1, '2022-01-23 18:08:05', 1),
(176, '::1', 'raka@gmail.com', 4, '2022-01-23 18:08:45', 1),
(177, '::1', 'raka@gmail.com', 4, '2022-01-23 23:00:12', 1),
(178, '::1', 'natalya@natalya.com', 1, '2022-01-23 23:00:34', 1),
(179, '::1', 'raka@gmail.com', 4, '2022-01-24 02:15:45', 1),
(180, '::1', 'natalya@natalya.com', 1, '2022-04-04 20:14:00', 1),
(181, '::1', 'sintya@sintra.com', 3, '2022-04-04 22:34:27', 1),
(182, '::1', 'sintya@sintra.com', 3, '2022-04-05 20:12:52', 1),
(183, '::1', 'natalya@natalya.com', 1, '2022-04-05 20:41:45', 1),
(184, '::1', 'sintya@sintra.com', 3, '2022-04-05 20:44:30', 1),
(185, '::1', 'natalya@natalya.com', 1, '2022-04-05 20:48:53', 1),
(186, '::1', 'natalya@natalya.com', 1, '2022-04-06 01:36:22', 1),
(187, '::1', 'sintya@sintra.com', 3, '2022-04-06 02:15:23', 1),
(188, '::1', 'natalya@natalya.com', 1, '2022-04-07 01:27:25', 1),
(189, '::1', 'sintya@sintra.com', 3, '2022-04-07 02:11:17', 1),
(190, '::1', 'sintya@sintra.com', 3, '2022-05-09 20:55:27', 1),
(191, '::1', 'sintya@sintra.com', 3, '2022-05-10 10:26:09', 1),
(192, '::1', 'sintya@sintra.com', 3, '2022-05-10 19:27:46', 1),
(193, '::1', 'sinyta', NULL, '2022-05-11 19:21:38', 0),
(194, '::1', 'sintya@sintra.com', 3, '2022-05-11 19:21:48', 1),
(195, '::1', 'sintya@sintra.com', 3, '2022-05-11 22:15:29', 1),
(196, '::1', 'raka', NULL, '2022-05-11 23:12:21', 0),
(197, '::1', 'raka', NULL, '2022-05-11 23:12:31', 0),
(198, '::1', 'raka@gmail.com', 4, '2022-05-11 23:12:40', 1),
(199, '::1', 'sintya@sintra.com', 3, '2022-05-11 23:18:21', 1),
(200, '::1', 'raka@gmail.com', 4, '2022-05-11 23:21:00', 1),
(201, '::1', 'sintya@sintra.com', 3, '2022-05-11 23:21:14', 1),
(202, '::1', 'raka@gmail.com', 4, '2022-05-12 01:11:08', 1),
(203, '::1', 'sintya@sintra.com', 3, '2022-05-12 01:11:36', 1),
(204, '::1', 'raka@gmail.com', 4, '2022-05-12 01:18:21', 1),
(205, '::1', 'sintya@sintra.com', 3, '2022-05-12 01:18:53', 1),
(206, '::1', 'raka@gmail.com', 4, '2022-05-12 01:19:37', 1),
(207, '::1', 'sintya@sintra.com', 3, '2022-05-12 02:15:32', 1),
(208, '::1', 'sintya@sintra.com', 3, '2022-05-12 19:37:18', 1),
(209, '::1', 'raka@gmail.com', 4, '2022-05-12 20:38:18', 1),
(210, '::1', 'sintya@sintra.com', 3, '2022-05-12 20:38:47', 1),
(211, '::1', 'natalya@natalya.com', 1, '2022-05-12 22:44:13', 1),
(212, '::1', 'sintya@sintra.com', 3, '2022-05-13 01:25:04', 1),
(213, '::1', 'natalya@natalya.com', 1, '2022-05-13 02:49:56', 1),
(214, '::1', 'natalya@natalya.com', 1, '2022-05-13 18:00:56', 1),
(215, '::1', 'natalya@natalya.com', 1, '2022-05-16 18:45:50', 1),
(216, '::1', 'raka@gmail.com', 4, '2022-05-16 18:56:21', 1),
(217, '::1', 'sintya@sintra.com', 3, '2022-05-16 19:05:28', 1),
(218, '::1', 'natalya@natalya.com', 1, '2022-05-16 19:09:01', 1),
(219, '::1', 'sintya@sintra.com', 3, '2022-05-16 19:15:38', 1),
(220, '::1', 'sintya@sintra.com', 3, '2022-05-17 21:18:33', 1),
(221, '::1', 'natalya@natalya.com', 1, '2022-05-17 21:27:35', 1),
(222, '::1', 'raka', NULL, '2022-05-17 21:43:57', 0),
(223, '::1', 'raka@gmail.com', 4, '2022-05-17 21:44:11', 1),
(224, '::1', 'natalya@natalya.com', 1, '2022-05-19 06:49:01', 1),
(225, '::1', 'natalya@natalya.com', 1, '2022-05-19 20:49:04', 1),
(226, '::1', 'natalya@natalya.com', 1, '2022-05-20 18:31:06', 1),
(227, '::1', 'natalya@natalya.com', 1, '2022-05-22 02:08:36', 1),
(228, '::1', 'natalya@natalya.com', 1, '2022-05-22 08:09:12', 1),
(229, '::1', 'natalya@natalya.com', 1, '2022-05-22 18:49:58', 1),
(230, '::1', 'sintya@sintra.com', 3, '2022-05-22 19:21:51', 1),
(231, '::1', 'natalya@natalya.com', 1, '2022-05-22 19:23:36', 1),
(232, '::1', 'sintya@sintra.com', 3, '2022-05-22 20:56:56', 1),
(233, '::1', 'natalya@natalya.com', 1, '2022-05-22 20:58:38', 1),
(234, '::1', 'sintya@sintra.com', 3, '2022-05-22 20:59:14', 1),
(235, '::1', 'natalya@natalya.com', 1, '2022-05-22 21:01:13', 1),
(236, '::1', 'sintya@sintra.com', 3, '2022-05-22 21:26:29', 1),
(237, '::1', 'natalya@natalya.com', 1, '2022-05-22 22:13:57', 1),
(238, '::1', 'natalya@natalya.com', 1, '2022-05-23 05:20:41', 1),
(239, '::1', 'sintya@sintra.com', 3, '2022-05-23 06:40:28', 1),
(240, '::1', 'natalya@natalya.com', 1, '2022-05-23 07:17:27', 1),
(241, '::1', 'sintya@sintra.com', 3, '2022-05-23 07:18:01', 1),
(242, '::1', 'sintya@sintra.com', 3, '2022-05-23 18:45:54', 1),
(243, '::1', 'sintya@sintra.com', 3, '2022-05-24 00:16:24', 1),
(244, '::1', 'natalya@natalya.com', 1, '2022-05-24 00:39:50', 1),
(245, '::1', 'sintya@sintra.com', 3, '2022-05-24 18:39:31', 1),
(246, '::1', 'natalya@natalya.com', 1, '2022-05-24 19:38:47', 1),
(247, '::1', 'sintya@sintra.com', 3, '2022-05-24 21:56:39', 1),
(248, '::1', 'natalya@natalya.com', 1, '2022-05-24 22:06:25', 1),
(249, '::1', 'raka@gmail.com', 4, '2022-05-24 22:12:39', 1),
(250, '::1', 'raka@gmail.com', 4, '2022-05-24 22:13:29', 1),
(251, '::1', 'sintya@sintra.com', 3, '2022-05-25 21:31:08', 1),
(252, '::1', 'natalya@natalya.com', 1, '2022-05-25 21:55:43', 1),
(253, '::1', 'sintya@sintra.com', 3, '2022-05-26 22:25:00', 1),
(254, '::1', 'natalya@natalya.com', 1, '2022-05-27 20:20:28', 1),
(255, '::1', 'natalya@natalya.com', 1, '2022-05-28 06:17:22', 1),
(256, '::1', 'natalya@natalya.com', 1, '2022-05-28 06:17:44', 1),
(257, '::1', 'sintya@sintra.com', 3, '2022-05-28 06:23:50', 1),
(258, '::1', 'natalya@natalya.com', 1, '2022-05-28 06:32:28', 1),
(259, '::1', 'sintya@sintra.com', 3, '2022-05-28 07:08:39', 1),
(260, '::1', 'natalya@natalya.com', 1, '2022-05-28 09:29:05', 1),
(261, '::1', 'sintya@sintra.com', 3, '2022-05-28 09:49:35', 1),
(262, '::1', 'natalya@natalya.com', 1, '2022-05-28 10:40:30', 1),
(263, '::1', 'natalya@natalya.com', 1, '2022-05-28 19:34:33', 1),
(264, '::1', 'sintya@sintra.com', 3, '2022-05-28 20:54:00', 1),
(265, '::1', 'natalya@natalya.com', 1, '2022-05-28 22:42:34', 1),
(266, '::1', 'sintya@sintra.com', 3, '2022-05-28 22:51:33', 1),
(267, '::1', 'natalya@natalya.com', 1, '2022-05-28 22:59:27', 1),
(268, '::1', 'sintya@sintra.com', 3, '2022-05-29 01:07:23', 1),
(269, '::1', 'sintya@sintra.com', 3, '2022-06-24 00:32:54', 1),
(270, '::1', 'sintya@sintra.com', 3, '2022-06-26 18:50:23', 1),
(271, '::1', 'natalya@natalya.com', 1, '2022-06-26 20:06:37', 1),
(272, '::1', 'sintya@sintra.com', 3, '2022-06-28 08:08:13', 1),
(273, '::1', 'sintya@sintra.com', 3, '2022-06-28 08:09:55', 1),
(274, '::1', 'sintya@sintra.com', 3, '2022-06-28 08:12:53', 1),
(275, '::1', 'sintya@sintra.com', 3, '2022-06-28 08:17:05', 1),
(276, '::1', 'sintya@sintra.com', 3, '2022-06-28 19:25:12', 1),
(277, '::1', 'sintya', NULL, '2022-06-30 00:20:44', 0),
(278, '::1', 'sintya@sintra.com', 3, '2022-06-30 00:20:56', 1),
(279, '::1', 'natalya@natalya.com', 1, '2022-08-03 23:29:12', 1),
(280, '::1', 'sintya@sintra.com', 3, '2022-08-03 23:29:39', 1),
(281, '::1', 'sintya@sintra.com', 3, '2022-08-03 23:35:14', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage User\'s Profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_brg` varchar(225) NOT NULL,
  `kategori_brg` varchar(225) NOT NULL,
  `detail` varchar(225) DEFAULT NULL,
  `foto_brg` varchar(225) NOT NULL,
  `harga` int(12) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `stock_brg` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_brg`, `kategori_brg`, `detail`, `foto_brg`, `harga`, `created_at`, `updated_at`, `stock_brg`) VALUES
(1, 'SONY a7 Mark III', 'Kamera Mirrorles Sony', 'Kamera FullFrame dari Sony Seri a', 'produk5.jpg', 375000, NULL, NULL, 0),
(2, 'SONY a7 Mark II', 'Kamera Mirrorles Sony', 'Kamera FullFrame dari Sony Seri a', 'produk2.jpg', 275000, NULL, NULL, 0),
(3, 'SONY a7C', 'Kamera Mirrorles Sony', 'Kamera Produk dari Sony masuk dalam kategori Mirrorles ', 'produk1.jpg', 700000, NULL, NULL, 0),
(4, 'Canon EOS 60D', 'DSLR CANON', 'Fitur Utama Canon EOS 60D:\r\n18MP APS-C CMOS sensor\r\nISO 100-6400 (expandable to 12,800)\r\n5.3 fps continuous shooting\r\n1080p HD video recording with manual controls\r\nSD / SDHC / SDXC storage\r\nIn-camera raw development\r\nSubje', 'canon60d.jpg', 200000, NULL, NULL, 0),
(5, 'Lensa Sony Full Frame 50mm F1.8', 'Lensa Kamera Mirrorles Sony', 'Lensa untuk kamera Full Frame Sony. Jika digunakan untuk SONY APSC Milimeter dikalikan 1,5', 'lensafesony.jpg', 180000, NULL, NULL, 0),
(8, 'Lensa Sony Full Frame 50mm F1.8', 'Lensa Kamera Mirrorles SONY FE', 'Lensa untuk kamera Full Frame Sony', 'lensasonyfe.jpg', 800000, '2021-07-07 23:01:43', '2021-07-07 23:01:43', 0),
(9, 'Canon 7D Mark II (Body Only)', 'DSLR Canon', 'Hanya Bodi Kamera tanpa lensa', 'bodikameracanon.jpg', 375000, '2021-07-07 23:14:46', '2021-07-07 23:14:46', 0),
(12, 'Canon PowerShot G9 X Digital Camera (Black)', 'Mirrorles Canon', 'Kamera Mirrorles Dari Canon, kecil, solid, simpel dan praktis.', 'canons.jpg', 550000, '2021-12-14 20:05:48', '2021-12-14 20:05:48', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum_komentar`
--

CREATE TABLE `forum_komentar` (
  `id` bigint(20) NOT NULL,
  `isi` varchar(225) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp(),
  `user_id` int(20) NOT NULL,
  `nama_user` varchar(225) NOT NULL,
  `id_topik` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `forum_komentar`
--

INSERT INTO `forum_komentar` (`id`, `isi`, `created_at`, `updated_at`, `user_id`, `nama_user`, `id_topik`) VALUES
(1, 'Sepertinya begitu broo', '2021-12-18', '2021-12-18', 4, 'raka', 1),
(2, 'Iya kak, untuk pembayaran kemarin saya sekalian pas ambil barang. jadi bisa sekalian cek barang.', '2021-12-20', '2021-12-20', 3, 'Sintya', 1),
(18, 'Hari Raya dan Hari Besar Nasional kita libur kak, tapi kalau mau sewa barang, barang bisa diambil dihari sebelumnya ya kak.', '2022-01-16', '2022-01-16', 1, 'natalya', 6),
(19, 'bisa kak, kami tutup sampai jam 9 malam. tapi untuk hari sabtu kita buka sampai jam 10 malam ya kak.', '2022-01-16', '2022-01-16', 1, 'natalya', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum_topik`
--

CREATE TABLE `forum_topik` (
  `id` int(20) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp(),
  `penulis` varchar(225) NOT NULL,
  `user_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `forum_topik`
--

INSERT INTO `forum_topik` (`id`, `judul`, `created_at`, `updated_at`, `penulis`, `user_id`) VALUES
(1, 'Kak pembayaran masih offline/ditempat ya.?', '2021-12-14', '2021-12-14', 'Sintya', 3),
(6, 'Hari Raya libur ndak kak ?', '2021-12-15', '2021-12-15', 'raka', 4),
(8, 'Pengambilan barang malam hari bisa.?', '2022-01-06', '2022-01-06', 'raka', 4),
(9, 'Ask Me', '2022-05-26', '2022-05-26', 'Sintya', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `pesan`, `created_at`) VALUES
(1, 'Raka Sanjaya', 'Mantap kak jika pengambilah h-1 libur dan hari liburnya tidak dihitung', '0000-00-00'),
(2, 'Sintya', 'Coba tes pesan.', '2022-01-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1614827429, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `username` varchar(225) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `jenis_barang` varchar(225) NOT NULL,
  `durasi` varchar(225) NOT NULL,
  `jumlah` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `promosi`
--

CREATE TABLE `promosi` (
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(12) NOT NULL,
  `id_pesanan` int(12) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggan` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `barang` varchar(225) NOT NULL,
  `jumlah_brg` int(12) NOT NULL,
  `tgl_selesai` date NOT NULL,
  `harga` int(12) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `id_pesanan`, `tanggal`, `pelanggan`, `email`, `barang`, `jumlah_brg`, `tgl_selesai`, `harga`, `status`) VALUES
(21, 1, '2021-07-08', 'Pelanggan 1', '', 'Brg Rental', 4, '2021-07-08', 800000, 'warning'),
(22, 1, '2021-07-08', 'Pelanggan 1', '', 'Brg Rental', 4, '2021-07-08', 800000, 'warning'),
(23, 1, '2021-07-08', 'Pelanggan 1', '', 'Brg Rental', 4, '2021-07-08', 800000, 'warning'),
(24, 1, '2021-07-08', 'Pelanggan 1', '', 'Brg Rental', 4, '2021-07-08', 800000, 'warning'),
(25, 1, '2021-07-08', 'Pelanggan 1', '', 'Brg Rental', 4, '2021-07-08', 800000, 'warning'),
(26, 1, '2021-07-08', 'Pelanggan 1', '', 'Brg Rental', 4, '2021-07-08', 800000, 'warning'),
(27, 1, '2021-07-08', 'Pelanggan 1', '', 'Brg Rental', 4, '2021-07-08', 800000, 'warning');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tgl_pesanan`
--

CREATE TABLE `tgl_pesanan` (
  `id` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `id_user` int(12) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `wa` varchar(225) NOT NULL,
  `no_pesanan` varchar(12) NOT NULL,
  `barang` varchar(225) NOT NULL,
  `harga` int(12) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tgl_pesanan`
--

INSERT INTO `tgl_pesanan` (`id`, `id_brg`, `id_user`, `nama`, `wa`, `no_pesanan`, `barang`, `harga`, `tgl_pesan`, `tgl_kembali`, `status`) VALUES
(1, 3, 3, 'Sintya', '6281226123378', '3', 'SONY a7C', 700000, '2022-05-25', '2022-05-28', ''),
(2, 2, 8, 'Rio', '6281787187924', '8', 'Sony', 750000, '2022-05-05', '2022-05-08', '1'),
(3, 10, 11, 'Dea', '6281226123378', '11', 'Tripod', 20000, '2022-05-20', '2022-05-21', '1'),
(4, 12, 18, 'Rahma', '6281226123378', '18', 'Filter ND 50mm', 100000, '2022-06-08', '2022-06-10', ''),
(5, 8, 3, 'Sintya', '6281226123378', '3', 'Lensa Sony Full Frame 50mm F1.8', 800000, '2022-06-08', '2022-06-10', '1'),
(6, 4, 4, 'raka', '0', '4', 'Canon EOS 60D', 200000, '2022-05-02', '2022-05-04', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_wa` bigint(20) NOT NULL DEFAULT 62,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `no_wa`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'natalya@natalya.com', 62, 'natalya', 'Natalya Cindy Natasya', 'undraw_profile_3.svg', '$2y$10$cq0QFAPb6GKUy/sUuEj5KOKmB0ckMVTasJ.QUkliYaEVwKxwlCvHG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-04 09:39:42', '2021-03-04 09:39:42', NULL),
(2, 'natasya@natasya.com', 62, 'natasya', NULL, 'default.svg', 'nat123321', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-05 08:46:29', '2021-03-05 08:46:29', NULL),
(3, 'sintya@sintra.com', 6281226123378, 'Sintya', 'Sintya Rahma Wulandari', 'default.svg', '$2y$10$LvlFXG9pYdHHjekc3V61IurSeDa4R6rhHvBeNd35TdFh7z4V9UWl6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-04-05 22:53:54', '2021-04-05 22:53:54', NULL),
(4, 'raka@gmail.com', 0, 'raka', 'Raka Sanjaya', 'undraw_rocket.svg', '$2y$10$O4P2//jOenOGyQeb5BYIJO4/DGuPWGQKTusy1/OW36IsZufklfbwG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-04-20 02:10:28', '2021-04-20 02:10:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `forum_komentar`
--
ALTER TABLE `forum_komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `forum_topik`
--
ALTER TABLE `forum_topik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indeks untuk tabel `tgl_pesanan`
--
ALTER TABLE `tgl_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `forum_komentar`
--
ALTER TABLE `forum_komentar`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `forum_topik`
--
ALTER TABLE `forum_topik`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tgl_pesanan`
--
ALTER TABLE `tgl_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
