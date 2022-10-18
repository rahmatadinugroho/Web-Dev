-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2022 pada 21.29
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `imglogo` varchar(255) NOT NULL,
  `isicontact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `imglogo`, `isicontact`) VALUES
(1, '<i class=\"fa-regular fa-envelope\"></i>', 'rahmatadinugroho.m1@gmail.com'),
(2, '<i class=\"fa-brands fa-linkedin\"></i>', 'www.linkedin.com/in/rahmatadinugroho'),
(3, '<i class=\"fa-solid fa-phone\"></i>', '+62 878-8987-8893\r\n'),
(4, '<i class=\"fa-brands fa-square-instagram\"></i>', '@r_adi_n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `follow`
--

CREATE TABLE `follow` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `follow`
--

INSERT INTO `follow` (`id`, `logo`, `link`) VALUES
(1, '<i class=\"fa-brands fa-instagram\"></i>', 'https://www.instagram.com/r_adi_n/'),
(2, '<i class=\"fa-brands fa-youtube\"></i>', 'https://www.youtube.com/channel/UCxmfW2vKzRqYuMhBqiOYmZQ'),
(3, '<i class=\"fa-brands fa-tiktok\"></i>', 'https://www.tiktok.com/@terrabite39'),
(4, '<i class=\"fa-brands fa-github\"></i>', 'https://github.com/rahmatadinugroho'),
(5, '<i class=\"fa-brands fa-linkedin\"></i>', 'https://www.linkedin.com/in/rahmatadinugroho/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `judul`, `img`, `link`) VALUES
(1, 'UI/UX Design', 'Figma.png', 'uiux.php'),
(2, 'Web Development', 'googledev.png', 'webdev.php'),
(3, 'Others', 'others.png', 'others.php');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `icon`, `description`, `judul`) VALUES
(1, '<i class=\"fa-brands fa-uikit\"></i>', 'Make a beautiful design with friendly price', 'UI/UX Design'),
(2, '<i class=\"fa-brands fa-chrome\"></i>', 'smooth website, comfort in your eyes', 'Web Development');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
