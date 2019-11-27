-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2019 pada 17.02
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_updown`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `hari_upload` varchar(15) NOT NULL,
  `tanggal_upload` varchar(20) NOT NULL,
  `jam_upload` varchar(10) NOT NULL,
  `nama_file` varchar(128) NOT NULL,
  `tipe_file` varchar(128) NOT NULL,
  `ukuran_file` varchar(128) NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `hari_upload`, `tanggal_upload`, `jam_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(15, 'Tuesday', '2019-11-26', '19:59 WIB', 'GL', '.png', '165.54', 'Garuda_Legend-01-01.png'),
(16, 'Tuesday', '2019-11-26', '20:01 WIB', 'kuis', '.jpg', '146.1', 'aplikasi_kuis.jpg'),
(17, 'Wednesday', '2019-11-27', '20:04 WIB', 'dian', '.jpg', '1395.33', 'Dian.jpg'),
(18, 'Wednesday', '2019-11-27', '20:04 WIB', 'Me', '.JPG', '772.77', 'IMG_9405.JPG'),
(19, 'Monday', '2019-11-25', '22:13 WIB', 'smanda', '.png', '271.06', 'Logo-smanda_SMA_N_2_Semarang_Hd.png'),
(20, 'Sunday', '2019-11-24', '22:13 WIB', 'syukuran', '.png', '702.83', 'tasyakuran_pernikahan2-01.png'),
(21, 'Sunday', '2019-11-24', '22:13 WIB', 'jb', '.png', '245.77', 'Untitled-1_copy_-_Copy.png'),
(22, 'Sunday', '2019-11-24', '22:13 WIB', 'pohon', '.jpg', '31.38', 'free-vector-polygonal-tree.jpg'),
(23, 'Saturday', '2019-11-23', '22:16 WIB', 'k1', '.JPG', '1167.83', 'kombat_samanda_1.JPG'),
(24, 'Friday', '2019-11-22', '22:16 WIB', 'k1-2', '.JPG', '822.64', 'kombat_samanda_1m.JPG'),
(25, 'Thursday', '2019-11-21', '22:16 WIB', 'k2', '.JPG', '1239.2', 'kombat_samanda_2.JPG'),
(26, 'Wednesday', '2019-11-20', '22:16 WIB', 'k2m', '.JPG', '854.62', 'kombat_samanda_2m.JPG'),
(27, 'Tuesday', '2019-11-19', '22:17 WIB', 'kotak', '.png', '11.65', 'kotak-suara.png'),
(28, 'Monday', '2019-11-18', '22:17 WIB', 'hoax', '.jpg', '45.57', 'warning-hoax-logo_8163-25.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(5) NOT NULL,
  `images` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `role_id`, `images`, `is_active`, `date_created`) VALUES
(5, 'Ahmad Fauza Aulia', 'fauzaaulia', 'fauzaauliia@gmail.com', '$2y$10$YAu/xa52dcenCosxsHdLGuwfTpIOBZFqPogcQ9ILuWlFZneQb/lqu', 1, 'default.JPG', 1, 1572025996),
(7, 'Aa', 'aa', 'aa@aa.aa', '$2y$10$bTAGncRUzJLcxdAJczv79ONkBlj5tjjTeshgCabyorxIIc8ruT/16', 2, 'default.JPG', 1, 1572442677),
(9, 'Ahmad Fauza Aulia', 'fauzaauliaa', 'a_fauza@ymail.com', '$2y$10$q/PugZflntdnOjWZrC.fgOT.8eVjW5SzbiTpUZFo1xt68qwBZdnze', 2, '', 1, 1574314836);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fa fa-dashboard', 1),
(2, 2, 'List Files', 'user/files', 'fa fa-th-list', 1),
(3, 1, 'List Member', 'admin/member', 'fa fa-user', 1),
(4, 2, 'Profil', 'user', 'fa fa-user', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
