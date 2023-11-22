-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2023 pada 06.56
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtiketwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_wisata`
--

CREATE TABLE `tiket_wisata` (
  `NIK` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `usia` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_telefon` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `tiket` int(11) NOT NULL,
  `booking_status` text NOT NULL,
  `payment_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tiket_wisata`
--

INSERT INTO `tiket_wisata` (`NIK`, `nama_lengkap`, `usia`, `alamat`, `nomor_telefon`, `email`, `tanggal_booking`, `tiket`, `booking_status`, `payment_status`) VALUES
('3525010510930001', 'Stela Marisa', 8, 'Gebang Lor No.57, Surabaya', '0918291', 'stelamarisa@gmail.com', '2023-11-08', 10, '', ''),
('3525010609510002', 'Ronaldyanto', 40, 'Jl Arif Rahman Hakim VIA', '084295738421', 'ronaldyanto@gmail.com', '2023-11-15', 6, '', ''),
('3525011006780005', 'Gifary Divanda', 29, 'Jl Klampis Sacharosa 2A', '087863143512', 'gifarydn@gmail.com', '2023-12-10', 5, '', ''),
('3525014407710003', 'Naila Sakina', 23, 'Jl IR Soekarno 98A', '082421597321', 'nailasakina@gmail.com', '2023-12-01', 2, '', ''),
('3525014908920001', 'Farrel Adhidarma', 18, 'Jl Ahmad Yani 7A', '082345126832', 'farreladhida@gmail.com', '2023-12-20', 7, '', ''),
('3525015201880002', 'I Gede Febry Abdi Saputra', 10, 'Marina Emas Timur IV, Keputih, Sukolilo', '0987654', 'alsasjdaj@yahio.com', '2023-11-16', 15, '', ''),
('3525015306780002', 'Michelle Cintania', 10, 'Jl Keputih Tegal Timur no 2A', '081955586831', 'michellechint', '2023-11-20', 4, '', ''),
('3525016005650004', 'Safana Maraya N', 10, 'Klampis Aji Tengah No.2, Surabaya', '0981729182', 'safana@gmail.com', '2023-11-16', 5, '', ''),
('3525016211930001', 'Daffa Ardhia', 30, 'Jl Dharmahusada Indah 2A', '085232567213', 'daffardh@gmail.com', '2023-12-06', 3, '', ''),
('3525016501830002', 'Trisna Amanda', 21, 'Jl Gubeng Kertajaya VI no 31', '08591182851', 'trsnamnd@gmail.com', '2023-11-10', 3, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Nama` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `RegistrationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID`, `Nama`, `Email`, `Password`, `RegistrationDate`, `role`) VALUES
(35, 'Febry', 'febry@gmail.com', 'febry', '2023-11-07 17:45:45', 'user'),
(36, 'admin', 'admin@gmail.com', 'admin', '2023-11-07 17:45:45', 'admin'),
(37, 'Stela Marisa', 'stelamarisa@gmail.com', 'coba123', '2023-11-08 05:51:52', 'user'),
(38, 'Ronaldyanto', 'ronaldyanto@gmail.com', 'coba123', '2023-11-08 05:53:10', 'user'),
(39, 'Gifary Divanda', 'gifarydn@gmail.com', 'coba321', '2023-11-08 05:53:10', 'user'),
(40, 'Naila Sakina', 'nailasakina@gmail.com', 'coba543', '2023-11-08 05:53:10', 'user'),
(41, 'Farrel Adhidarma', 'farreladhida@gmail.com', 'coba12345', '2023-11-08 05:53:10', 'user'),
(42, 'Michelle Cintania', 'michellechint@gmail.com', 'akucantik', '2023-11-08 05:54:06', 'user'),
(43, 'Daffa Ardhia', 'daffardh@gmail.com	', 'akuoke', '2023-11-08 05:54:06', 'user'),
(44, 'Trisna Amanda', 'Trisna Amanda@gmail.com', 'okeoke', '2023-11-08 05:54:36', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tiket_wisata`
--
ALTER TABLE `tiket_wisata`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
