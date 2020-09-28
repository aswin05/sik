-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2020 pada 10.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_auth_assignment`
--

CREATE TABLE `tbl_auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tbl_auth_assignment`
--

INSERT INTO `tbl_auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('dokter', '1', 1601045109),
('dokter', '4', 1601045124),
('Kasir', '1', 1601045107),
('Kasir', '3', 1601045118),
('pegawai', '1', 1601045106),
('pegawai', '2', 1601045113),
('pemilik', '1', 1601125547),
('pemilik', '6', 1601125732);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_auth_item`
--

CREATE TABLE `tbl_auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tbl_auth_item`
--

INSERT INTO `tbl_auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/admin/*', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/assignment/revoke', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/default/*', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/default/index', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/menu/*', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/menu/create', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/menu/index', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/menu/update', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/menu/view', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/permission/*', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/permission/create', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/permission/index', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/permission/remove', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/permission/update', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/permission/view', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/role/*', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/role/assign', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/role/create', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/role/delete', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/role/index', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/role/remove', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/role/update', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/role/view', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/route/*', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/route/assign', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/route/create', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/route/index', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/route/refresh', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/route/remove', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/rule/*', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/rule/create', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/rule/index', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/rule/update', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/rule/view', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/user/*', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/user/activate', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/user/change-password', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/user/delete', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/user/index', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/user/login', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/user/logout', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/user/request-password-reset', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/user/reset-password', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/user/signup', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/admin/user/view', 2, NULL, NULL, NULL, 1601125514, 1601125514),
('/detail/*', 2, NULL, NULL, NULL, 1601111610, 1601111610),
('/detail/create', 2, NULL, NULL, NULL, 1601111610, 1601111610),
('/detail/delete', 2, NULL, NULL, NULL, 1601111610, 1601111610),
('/detail/index', 2, NULL, NULL, NULL, 1601111610, 1601111610),
('/detail/update', 2, NULL, NULL, NULL, 1601111610, 1601111610),
('/detail/view', 2, NULL, NULL, NULL, 1601111610, 1601111610),
('/medical-record/*', 2, NULL, NULL, NULL, 1601100461, 1601100461),
('/medical-record/create', 2, NULL, NULL, NULL, 1601100461, 1601100461),
('/medical-record/delete', 2, NULL, NULL, NULL, 1601100461, 1601100461),
('/medical-record/index', 2, NULL, NULL, NULL, 1601100461, 1601100461),
('/medical-record/update', 2, NULL, NULL, NULL, 1601100461, 1601100461),
('/medical-record/view', 2, NULL, NULL, NULL, 1601100461, 1601100461),
('/patient/*', 2, NULL, NULL, NULL, 1601044957, 1601044957),
('/patient/create', 2, NULL, NULL, NULL, 1601044957, 1601044957),
('/patient/delete', 2, NULL, NULL, NULL, 1601044957, 1601044957),
('/patient/index', 2, NULL, NULL, NULL, 1601044957, 1601044957),
('/patient/update', 2, NULL, NULL, NULL, 1601044957, 1601044957),
('/patient/view', 2, NULL, NULL, NULL, 1601044957, 1601044957),
('/pricelist/*', 2, NULL, NULL, NULL, 1601103748, 1601103748),
('/pricelist/create', 2, NULL, NULL, NULL, 1601103748, 1601103748),
('/pricelist/delete', 2, NULL, NULL, NULL, 1601103748, 1601103748),
('/pricelist/index', 2, NULL, NULL, NULL, 1601103748, 1601103748),
('/pricelist/update', 2, NULL, NULL, NULL, 1601103748, 1601103748),
('/pricelist/view', 2, NULL, NULL, NULL, 1601103748, 1601103748),
('/transaction/*', 2, NULL, NULL, NULL, 1601107028, 1601107028),
('/transaction/create', 2, NULL, NULL, NULL, 1601107028, 1601107028),
('/transaction/delete', 2, NULL, NULL, NULL, 1601107028, 1601107028),
('/transaction/index', 2, NULL, NULL, NULL, 1601107028, 1601107028),
('/transaction/update', 2, NULL, NULL, NULL, 1601107028, 1601107028),
('/transaction/view', 2, NULL, NULL, NULL, 1601107028, 1601107028),
('dokter', 1, 'hak akses dokter', NULL, NULL, 1601044859, 1601044859),
('Kasir', 1, 'Hak akses kasir', NULL, NULL, 1601044873, 1601044873),
('pegawai', 1, 'hak akses pegawai', NULL, NULL, 1601044843, 1601044843),
('pemilik', 1, 'Ini hak akses untuk pemilik', NULL, NULL, 1601125495, 1601125495);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_auth_item_child`
--

CREATE TABLE `tbl_auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tbl_auth_item_child`
--

INSERT INTO `tbl_auth_item_child` (`parent`, `child`) VALUES
('dokter', '/medical-record/*'),
('dokter', '/medical-record/create'),
('dokter', '/medical-record/delete'),
('dokter', '/medical-record/index'),
('dokter', '/medical-record/update'),
('dokter', '/medical-record/view'),
('Kasir', '/detail/*'),
('Kasir', '/detail/create'),
('Kasir', '/detail/delete'),
('Kasir', '/detail/index'),
('Kasir', '/detail/update'),
('Kasir', '/detail/view'),
('Kasir', '/pricelist/*'),
('Kasir', '/pricelist/create'),
('Kasir', '/pricelist/delete'),
('Kasir', '/pricelist/index'),
('Kasir', '/pricelist/update'),
('Kasir', '/pricelist/view'),
('Kasir', '/transaction/*'),
('Kasir', '/transaction/create'),
('Kasir', '/transaction/delete'),
('Kasir', '/transaction/index'),
('Kasir', '/transaction/update'),
('Kasir', '/transaction/view'),
('pegawai', '/patient/*'),
('pegawai', '/patient/create'),
('pegawai', '/patient/delete'),
('pegawai', '/patient/index'),
('pegawai', '/patient/update'),
('pegawai', '/patient/view'),
('pemilik', '/admin/*'),
('pemilik', '/admin/assignment/*'),
('pemilik', '/admin/assignment/assign'),
('pemilik', '/admin/assignment/index'),
('pemilik', '/admin/assignment/revoke'),
('pemilik', '/admin/assignment/view'),
('pemilik', '/admin/default/*'),
('pemilik', '/admin/default/index'),
('pemilik', '/admin/menu/*'),
('pemilik', '/admin/menu/create'),
('pemilik', '/admin/menu/delete'),
('pemilik', '/admin/menu/index'),
('pemilik', '/admin/menu/update'),
('pemilik', '/admin/menu/view'),
('pemilik', '/admin/permission/*'),
('pemilik', '/admin/permission/assign'),
('pemilik', '/admin/permission/create'),
('pemilik', '/admin/permission/delete'),
('pemilik', '/admin/permission/index'),
('pemilik', '/admin/permission/remove'),
('pemilik', '/admin/permission/update'),
('pemilik', '/admin/permission/view'),
('pemilik', '/admin/role/*'),
('pemilik', '/admin/role/assign'),
('pemilik', '/admin/role/create'),
('pemilik', '/admin/role/delete'),
('pemilik', '/admin/role/index'),
('pemilik', '/admin/role/remove'),
('pemilik', '/admin/role/update'),
('pemilik', '/admin/role/view'),
('pemilik', '/admin/route/*'),
('pemilik', '/admin/route/assign'),
('pemilik', '/admin/route/create'),
('pemilik', '/admin/route/index'),
('pemilik', '/admin/route/refresh'),
('pemilik', '/admin/route/remove'),
('pemilik', '/admin/rule/*'),
('pemilik', '/admin/rule/create'),
('pemilik', '/admin/rule/delete'),
('pemilik', '/admin/rule/index'),
('pemilik', '/admin/rule/update'),
('pemilik', '/admin/rule/view'),
('pemilik', '/admin/user/*'),
('pemilik', '/admin/user/activate'),
('pemilik', '/admin/user/change-password'),
('pemilik', '/admin/user/delete'),
('pemilik', '/admin/user/index'),
('pemilik', '/admin/user/login'),
('pemilik', '/admin/user/logout'),
('pemilik', '/admin/user/request-password-reset'),
('pemilik', '/admin/user/reset-password'),
('pemilik', '/admin/user/signup'),
('pemilik', '/admin/user/view');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_auth_rule`
--

CREATE TABLE `tbl_auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail`
--

CREATE TABLE `tbl_detail` (
  `id` int(11) NOT NULL,
  `transaction` int(11) DEFAULT NULL,
  `service` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_detail`
--

INSERT INTO `tbl_detail` (`id`, `transaction`, `service`, `amount`, `price`, `total`) VALUES
(1, 1, 2, 1, 0, 0),
(2, NULL, 2, 2, 250000, 500000),
(3, NULL, 2, 5, 250000, 1250000),
(4, NULL, 2, 3, 250000, 750000),
(5, 7, 3, 2, 200000, 400000),
(6, 1, 2, 3, 250000, 750000),
(7, 1, 2, 3, 250000, 750000),
(8, 1, 3, 3, 200000, 600000),
(9, 1, 3, 10, 200000, 2000000),
(10, 1, 3, 6, 200000, 1200000),
(11, 1, 2, 2, 250000, 500000),
(12, 1, 3, 1, 200000, 200000),
(13, 1, 2, 1, 250000, 250000),
(14, 1, 2, 1, 250000, 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_medical_record`
--

CREATE TABLE `tbl_medical_record` (
  `id` int(11) NOT NULL,
  `name` int(11) DEFAULT NULL,
  `complaint` text DEFAULT NULL,
  `action` text DEFAULT NULL,
  `diagnose` text DEFAULT NULL,
  `recipe` text DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_medical_record`
--

INSERT INTO `tbl_medical_record` (`id`, `name`, `complaint`, `action`, `diagnose`, `recipe`, `is_deleted`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 4, '- adaskdasd\r\n- askdaskjas\r\n- asjdhnaskjdask', 'asdasd', 'asdasdasd', 'memenas\r\nasdfasd\r\nasdasfewa', 0, 4, '2020-09-26 13:31:42', 4, '2020-09-26 13:47:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_migration`
--

CREATE TABLE `tbl_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_migration`
--

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1601031511),
('m130524_201442_init', 1601031571),
('m140506_102106_rbac_init', 1601044105),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1601044105),
('m180523_151638_rbac_updates_indexes_without_prefix', 1601044105),
('m190124_110200_add_verification_token_column_to_user_table', 1601031571),
('m200409_110543_rbac_update_mssql_trigger', 1601044105),
('m200925_100739_create_patient_table', 1601031572),
('m200925_105511_create_recipe_table', 1601031581),
('m200925_105519_create_medical_record_table', 1601031581),
('m200925_105527_add_mr_column_to_patient_table', 1601031581),
('m200925_120405_create_pricelist_table', 1601035514),
('m200925_120411_create_transaction_table', 1601035594),
('m200925_120419_create_detail_table', 1601035594);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birth_place` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `mr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_patient`
--

INSERT INTO `tbl_patient` (`id`, `name`, `email`, `birth_place`, `birth_date`, `address`, `status`, `religion`, `is_deleted`, `created_by`, `created_at`, `updated_by`, `updated_at`, `mr`) VALUES
(3, 'Aswin Bahar', 'dheinzho@gmail.com', 'semarang', '0000-00-00', 'Blangiran', '0', '0', 1, 1, '2020-09-25 21:16:45', 1, '2020-09-26 11:57:46', NULL),
(4, 'Aswin Bahar', 'dheinzho@gmail.com', 'semarang', '0000-00-00', 'Blangiran', '0', '0', 0, 1, '2020-09-26 11:57:16', 1, '2020-09-26 11:58:01', NULL),
(5, 'Harsi', 'harsi@gmail.com', 'Semarang', '1997-11-12', 'Blangiran', '1', '2', 0, 1, '2020-09-26 11:58:18', 1, '2020-09-26 12:49:51', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pricelist`
--

CREATE TABLE `tbl_pricelist` (
  `id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `fee` int(11) NOT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pricelist`
--

INSERT INTO `tbl_pricelist` (`id`, `service`, `fee`, `is_deleted`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Consultation', 500000, 1, NULL, NULL, 1, '2020-09-26 14:10:36'),
(2, 'Consultation Fee', 250000, 0, 1, '2020-09-26 14:10:48', 1, '2020-09-26 14:10:48'),
(3, 'Insection', 200000, 0, 1, '2020-09-27 10:48:45', 1, '2020-09-27 10:48:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_recipe`
--

CREATE TABLE `tbl_recipe` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `dose` text DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `payment` varchar(255) DEFAULT 'cash',
  `total` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `patient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`id`, `created_at`, `payment`, `total`, `created_by`, `patient`) VALUES
(1, '0000-00-00 00:00:00', '0', 12000, NULL, 4),
(2, '2020-09-26 15:50:41', '0', 13000, 1, 4),
(3, '2020-09-26 16:07:35', '0', 14000, 1, 4),
(4, '2020-09-27 13:09:27', '0', 0, 1, 5),
(5, '2020-09-27 13:09:39', '0', 0, 1, 5),
(6, '2020-09-27 13:10:20', '0', 12000, 1, 4),
(7, '2020-09-27 17:30:51', '0', 0, 1, 4),
(8, '2020-09-28 15:17:27', '0', 0, 3, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'bahar', 'Oy9hqCjwlFEtzCi8lbAPzSABIjv4X45-', '$2y$13$Svhtput/lyIDX.4xPCVP.enBgGJYYl/ZDYu2F7jQNM16ZIRETUXki', NULL, 'bahar@gmail.com', 10, 1601043353, 1601043353, 'jOzpu6tZQgpwOlaeWMOfalpHdkn2Xqbc_1601043353'),
(2, 'pegawai', '0zeGkZgKyOXPcCiZOSCw1aewul2Nn1NI', '$2y$13$ztjwhQKh7JtWFhWvcjCCQunME5VM9XNhspveb8Znn12f/NVpr.q1G', NULL, 'pegawai@gmail.com', 10, 1601044656, 1601044656, '3aGg6O4CsPp7dHvbYJOIUrlXRGIeHvxx_1601044656'),
(3, 'kasir', '-LyPWSbC1xl_v7RY8_GLOIT65sBBSXgm', '$2y$13$NQkLswUKSUxNK3dJmYRRDO1jWm7R32NmVWgSXbqRPDF3KSteFfTCy', NULL, 'kasir@gmail.com', 10, 1601044669, 1601044669, 'tEi6TXEfpwtVP55RRFE7L9Qcls7GZhN9_1601044669'),
(4, 'dokter', 'pkdZDBXfDcVCuBjyVlvbtrdvjiCesnDw', '$2y$13$iTkwtEhJcV/QfTcpd34Wr.Ntykh0lH5WJDIA.RiNKRKQOiCWKVdse', NULL, 'dokter@gmail.com', 10, 1601044686, 1601044686, '795iqwLYEuQuAmHqW-uZkbmbgF_XWDcW_1601044686'),
(6, 'pemilik', 'mZoABBk4kKwCJip1NIz1jbCCY6fz2qZZ', '$2y$13$DfliHVz08GtZhCVsvK8Bq.sauG9vSW8AdeX26683pIzDJulozizeS', NULL, 'pemilik@gmail.com', 10, 1601125577, 1601125577, 'GJVe0eh4SB6N56l6uUZz_fjDFZ6K9wv7_1601125576');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_auth_assignment`
--
ALTER TABLE `tbl_auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `tbl_idx-auth_assignment-user_id` (`user_id`);

--
-- Indeks untuk tabel `tbl_auth_item`
--
ALTER TABLE `tbl_auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `tbl_idx-auth_item-type` (`type`);

--
-- Indeks untuk tabel `tbl_auth_item_child`
--
ALTER TABLE `tbl_auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indeks untuk tabel `tbl_auth_rule`
--
ALTER TABLE `tbl_auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indeks untuk tabel `tbl_detail`
--
ALTER TABLE `tbl_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_idx-detail-transaction` (`transaction`),
  ADD KEY `tbl_idx-detail-service` (`service`);

--
-- Indeks untuk tabel `tbl_medical_record`
--
ALTER TABLE `tbl_medical_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_idx-medical_record-name` (`name`),
  ADD KEY `tbl_idx-medical_record-created_by` (`created_by`),
  ADD KEY `tbl_idx-medical_record-updated_by` (`updated_by`);

--
-- Indeks untuk tabel `tbl_migration`
--
ALTER TABLE `tbl_migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_idx-patient-created_by` (`created_by`),
  ADD KEY `tbl_idx-patient-updated_by` (`updated_by`),
  ADD KEY `tbl_idx-patient-mr` (`mr`);

--
-- Indeks untuk tabel `tbl_pricelist`
--
ALTER TABLE `tbl_pricelist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_idx-pricelist-created_by` (`created_by`),
  ADD KEY `tbl_idx-pricelist-updated_by` (`updated_by`);

--
-- Indeks untuk tabel `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_idx-recipe-created_by` (`created_by`),
  ADD KEY `tbl_idx-recipe-updated_by` (`updated_by`);

--
-- Indeks untuk tabel `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_idx-transaction-cashier` (`created_by`),
  ADD KEY `tbl_idx-transaction-patient` (`patient`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_detail`
--
ALTER TABLE `tbl_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_medical_record`
--
ALTER TABLE `tbl_medical_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_pricelist`
--
ALTER TABLE `tbl_pricelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_auth_assignment`
--
ALTER TABLE `tbl_auth_assignment`
  ADD CONSTRAINT `tbl_auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `tbl_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_auth_item`
--
ALTER TABLE `tbl_auth_item`
  ADD CONSTRAINT `tbl_auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `tbl_auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_auth_item_child`
--
ALTER TABLE `tbl_auth_item_child`
  ADD CONSTRAINT `tbl_auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `tbl_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `tbl_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_detail`
--
ALTER TABLE `tbl_detail`
  ADD CONSTRAINT `tbl_fk-detail-service` FOREIGN KEY (`service`) REFERENCES `tbl_pricelist` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_fk-detail-transaction` FOREIGN KEY (`transaction`) REFERENCES `tbl_transaction` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_medical_record`
--
ALTER TABLE `tbl_medical_record`
  ADD CONSTRAINT `tbl_fk-medical_record-created_by` FOREIGN KEY (`created_by`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_fk-medical_record-name` FOREIGN KEY (`name`) REFERENCES `tbl_patient` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_fk-medical_record-updated_by` FOREIGN KEY (`updated_by`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD CONSTRAINT `tbl_fk-patient-created_by` FOREIGN KEY (`created_by`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_fk-patient-mr` FOREIGN KEY (`mr`) REFERENCES `tbl_medical_record` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_fk-patient-updated_by` FOREIGN KEY (`updated_by`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_pricelist`
--
ALTER TABLE `tbl_pricelist`
  ADD CONSTRAINT `tbl_fk-pricelist-created_by` FOREIGN KEY (`created_by`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_fk-pricelist-updated_by` FOREIGN KEY (`updated_by`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
  ADD CONSTRAINT `tbl_fk-recipe-created_by` FOREIGN KEY (`created_by`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_fk-recipe-updated_by` FOREIGN KEY (`updated_by`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD CONSTRAINT `tbl_fk-transaction-cashier` FOREIGN KEY (`created_by`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_fk-transaction-patient` FOREIGN KEY (`patient`) REFERENCES `tbl_patient` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
