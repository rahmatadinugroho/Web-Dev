-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2022 pada 11.23
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloudys`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `homemods`
--

CREATE TABLE `homemods` (
  `id` int(11) NOT NULL,
  `proname` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(12) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `homemods`
--

INSERT INTO `homemods` (`id`, `proname`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Hexom V3', '<p>\r\nSpecifications:\r\n- Custom milled aluminum enclsoure\r\n- Maximum wattage output: 180W\r\n- Requires dual 18650 batteries\r\n- Proprietary 510 that sits 1 sheet of paper above box to prevent atomizer scratches\r\n- Proprietary 30A board\r\n- Master on/off button\r\n- Reverse polarity\r\n- Low voltage cut off (3.0V)\r\n- Max voltage: 6.0V\r\n- 10 second fire limit\r\n- Solid brass battery contacts\r\n- Injection molded battery sled\r\n- Voltage output range of 3.3V-6.0V\r\n</p>', 3200000, 'mods1.jpg'),
(2, 'Centaurus M200', '<p>\r\nFeatures:\r\n- Chipset: Quest 2.0\r\n- Dimensions: 93mm by 56.7mm by 26mm\r\n- Battery Compatability: Dual 18650 (Batteries - Not Included)\r\n- Wattage Range: 5-200W\r\n- Voltage Range: 0.7-10V\r\n- Resistance Range: 0.1-5.0ohm\r\n- Temperature Range: 200°-600°F / 100°-315°C\r\n- Wire Compatibility: Nickel, Titanium, and Stainless Steel\r\n- Display Screen: 0.96\" OLED Screen\r\n- Chassis Material: Aluminum-Alloy & Stainless Steel\r\n- Magnetic Battery Door\r\n- Threaded 510 Connection\r\n- Short-Circuit Protection\r\n- Low Battery Protection\r\n- Temperature Protection\r\n- 10s Overtime Protection\r\n</p>', 580000, 'mods2.jpg'),
(3, 'Dovpo Panda VEE 2', '<p>\r\nParameter :\r\n- 200w Output Power\r\n- Voltage Output Range: 3.2-4.2V\r\n- Resistance Range: 0.06-3.5ohms\r\n- VW Mode\r\n- TCR Mode\r\n- Bypass Mode\r\n- Intuitive Firing Button\r\n- 0.96\" TFT Display Screen\r\n- Two Adjustment Buttons\r\n- Short-Circuit Protection\r\n- Overheat Protection\r\n- High-Temperature Protection\r\n- Low Voltage Protection\r\n- No Load Protection\r\n- Overtime Protection\r\n- Threaded 510 Connection\r\n</p>', 500000, 'mods3.jpg'),
(4, 'Dovpo MVP 2023', '<p>\r\nParameter :\r\n- Material : PC + Zinc Alloy\r\n- Threaded connection : 510\r\n- OLED Display : 0.96 TFT screen\r\n- Output Power : 5.0W~220.0W\r\n- Working Voltage : 6.4V~8.4V\r\n- Resistance under Wattage Mode : 0.07~3.5ohm\r\n- Charging Mode : USB TYPE-C\r\n- Charging Current : 2000mA\r\n- Battery : dual 18650 battery (not included)\r\n</p>', 450000, 'mods4.jpg'),
(5, 'Caliburn GK 2', '<p>\r\nPhysical Parameter:\r\n- Size: 72.2mm×46.6mm×16.3mm\r\n- Capacity: 2ml/1.6ml （CRC & CRC TPD）\r\n- Resistance: 0.8/1.2Ω\r\n- Battery: 690mAh\r\n- Color: Aurora Green, Ribbon Red, Ocean Flame, Matte Black.\r\n</p>', 280000, 'pods1.jpg'),
(6, 'Rincoe Jellybox XS 30W Kit', '<p>\r\nParameter :\r\n- Size : 48*22*92.4mm\r\n- Capacity : 2ml\r\n- Resistance : 1.0Ω\r\n- Battery : 1000mah\r\n- Output Power : 1-30W\r\n- Mod Material : PC\r\n- Pod Material : PCTG\r\n- Pod Capacity : 2ML\r\n- Charging Voltage : 5V/1A\r\n- Max Output Voltage : 4.2V\r\n- Weight : 85g\r\n</p>', 300000, 'pods2.jpg'),
(7, 'Oxva Origin X 60W', '<p>\r\nParameter :\r\n- Size : 102.9mm x 34.5mm x 25mm\r\n- Battery Capacity : 1 x 18650 battery (Not included)\r\n- Pod Capacity : 3ml/2ml\r\n- Coil Resistance : OXVA Unicoil 0.2ohm/OXVA Unicoil 1.0ohm\r\n- Wattage Range : 5-60W\r\n- Material : Zinc Alloy+Magnetic\r\n- USB Type : Type-C\r\n</p>', 420000, 'pods3.jpg'),
(8, 'Lost Vape Ursa Nano Kit', '<p>\r\nPARAMETERS :\r\n- Dimension: 100.5*24.1 *14mm\r\n- Weight: 61.3G\r\n- Liquid Capacity: 2.5ml\r\n- Battery:800mAh Battery (built-in)\r\n- Battery Voltage: 3.0V-4.2V\r\n- Output Voltage: 3.0V-3.9v\r\n- Power Range: 5-18W\r\n- Output Current: 2.5A-5.0A\r\n- Body Material: Zinc-Alloy\r\n</p>', 170000, 'pods4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shopmods`
--

CREATE TABLE `shopmods` (
  `id` int(11) NOT NULL,
  `proname` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(12) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `shopmods`
--

INSERT INTO `shopmods` (`id`, `proname`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Hexom v3', '<p>Specifications:- Custom milled aluminum enclsoure- Maximum wattage output: 180W- Requires dual 18650 batteries- Proprietary 510 that sits 1 sheet of paper above box to prevent atomizer scratches- Proprietary 30A board- Master on/off button- Reverse polarity- Low voltage cut off (3.0V)- Max voltage: 6.0V- 10 second fire limit- Solid brass battery contacts- Injection molded battery sled- Voltage output range of 3.3V-6.0V</p>', 3200000, '63a3db7fc44f8.jpg'),
(2, 'Centaurus M200 by Lost Vape', '<p>Features:- Chipset: Quest 2.0- Dimensions: 93mm by 56.7mm by 26mm- Battery Compatability: Dual 18650 (Batteries - Not Included)- Wattage Range: 5-200W- Voltage Range: 0.7-10V- Resistance Range: 0.1-5.0ohm- Temperature Range: 200°-600°F / 100°-315°C- Wire Compatibility: Nickel, Titanium, and Stainless Steel- Display Screen: 0.96', 600000, '63a34f58c95b6.jpg'),
(3, 'Dovpo Panda VEE 2', '<p>\r\nParameter :\r\n- 200w Output Power\r\n- Voltage Output Range: 3.2-4.2V\r\n- Resistance Range: 0.06-3.5ohms\r\n- VW Mode\r\n- TCR Mode\r\n- Bypass Mode\r\n- Intuitive Firing Button\r\n- 0.96\" TFT Display Screen\r\n- Two Adjustment Buttons\r\n- Short-Circuit Protection\r\n- Overheat Protection\r\n- High-Temperature Protection\r\n- Low Voltage Protection\r\n- No Load Protection\r\n- Overtime Protection\r\n- Threaded 510 Connection\r\n</p>', 500000, 'mods3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shoppods`
--

CREATE TABLE `shoppods` (
  `id` int(11) NOT NULL,
  `proname` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(12) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `shoppods`
--

INSERT INTO `shoppods` (`id`, `proname`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Caliburn GK 2', '<p>\r\nPhysical Parameter:\r\n- Size: 72.2mm×46.6mm×16.3mm\r\n- Capacity: 2ml/1.6ml （CRC & CRC TPD）\r\n- Resistance: 0.8/1.2Ω\r\n- Battery: 690mAh\r\n- Color: Aurora Green, Ribbon Red, Ocean Flame, Matte Black.\r\n</p>', 280000, 'pods1.jpg'),
(2, 'Rincoe Jellybox XS 30W Kit', '<p>\r\nParameter :\r\n- Size : 48*22*92.4mm\r\n- Capacity : 2ml\r\n- Resistance : 1.0Ω\r\n- Battery : 1000mah\r\n- Output Power : 1-30W\r\n- Mod Material : PC\r\n- Pod Material : PCTG\r\n- Pod Capacity : 2ML\r\n- Charging Voltage : 5V/1A\r\n- Max Output Voltage : 4.2V\r\n- Weight : 85g\r\n</p>', 300000, 'pods2.jpg'),
(3, 'Oxva Origin X 60W', '<p>\r\nParameter :\r\n- Size : 102.9mm x 34.5mm x 25mm\r\n- Battery Capacity : 1 x 18650 battery (Not included)\r\n- Pod Capacity : 3ml/2ml\r\n- Coil Resistance : OXVA Unicoil 0.2ohm/OXVA Unicoil 1.0ohm\r\n- Wattage Range : 5-60W\r\n- Material : Zinc Alloy+Magnetic\r\n- USB Type : Type-C\r\n</p>', 420000, 'pods3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `homemods`
--
ALTER TABLE `homemods`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shopmods`
--
ALTER TABLE `shopmods`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shoppods`
--
ALTER TABLE `shoppods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `homemods`
--
ALTER TABLE `homemods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `shopmods`
--
ALTER TABLE `shopmods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `shoppods`
--
ALTER TABLE `shoppods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
