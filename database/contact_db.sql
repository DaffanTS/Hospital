-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 08:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(4) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `spill` varchar(200) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `spill`, `penulis`, `tanggal`, `gambar`) VALUES
(1, 'Pentingnya Melakukan Tes Dini Diabetes!', 'Diabetes Mellitus (DM) atau yang biasa dikenal dengan kencing manis ini merupakan salah satu penyakit silent killer', 'Medi Doctor', '2022-12-15', 'blog-1.jpg'),
(2, 'Fenomena Child Free dan Childless Dari Sudut Pandang Kejiwaan', 'Keputusan memiliki anak atau tidak di kalangan Milenial atau “Generasi Sandwich” sekarang kembali menjadi sorotan.', 'Medi Doctor', '2022-11-30', 'blog-6.jpg'),
(4, 'Jangan salah! Kenali Perbedaan Anxiety Disorder dan Panic Attack', 'Kesehatan mental merupakan hal penting yang harus diperhatikan. Sama halnya seperti anxiety disorder dan panic attack yang sering dianggap sama namun keduanya berbeda', 'Medi Doctor', '2022-10-12', 'blog-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_dokter`
--

CREATE TABLE `data_dokter` (
  `id_dok` int(2) NOT NULL,
  `kode_poli` varchar(6) NOT NULL,
  `nama_dokter` varchar(200) NOT NULL,
  `hari_praktek` varchar(200) NOT NULL,
  `jam_praktek` varchar(200) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_tlpn` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `status` enum('Dokter Tetap','Dokter Luar') NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_dokter`
--

INSERT INTO `data_dokter` (`id_dok`, `kode_poli`, `nama_dokter`, `hari_praktek`, `jam_praktek`, `jenis_kelamin`, `email`, `no_tlpn`, `alamat`, `status`, `foto`) VALUES
(1, 'PLANAK', 'Prof. Dr. dr. H. ARIS, Sp.A (K) IBCLC., SH', 'Senin - Jum\'at', '10:00 - 15:00', 'Laki-Laki', 'yunantoari@hospital.ac.id', '081290007654', 'Jalan Raya Boulevard Pantai Indah Kapuk No. 1', 'Dokter Tetap', 'doc-6.jpg'),
(2, 'PLBDH', 'dr. EKO WAHYU PRIBADI. Sp. B', 'Senin - Rabu', '11:00 - 17:00', 'Laki-Laki', 'ekowahyu@hospital.ac.id', '089675469028', 'Jl.jatinegara barat no.195,balimester jakarta timur 13310', 'Dokter Luar', 'doc-2.jpg'),
(3, 'PLMATA', 'dr. NERISSA TAMARA PUTRI, Sp.M', 'Selasa - Kamis', '09:00 - 14:00', 'Perempuan', 'nerissatamara@hospital.ac.id', '085643219809', 'Jl. Pejaten Barat No. 69 Pejaten - Pasar Minggu Jakarta Selatan', 'Dokter Luar', 'doc-3.jpg'),
(4, 'PLOBG', 'dr. M. ANHAR DANI, Sp. OG, M. KED KLIN', 'Senin - Jum\'at', '09:00 - 15:00', 'Laki-Laki', 'anhardani@hospital.ac.id', '081268795674', 'Jl. Raya Utan Kayu No.105 B Jakarta Timur 13120 Indonesia', 'Dokter Tetap', 'doc-5.jpg'),
(5, 'PLUM', 'dr. CLARA SANTI TRISNAWATI', 'Senin - Jum\'at', '08:00 - 15:00', 'Perempuan', 'clarasanti@hospital.ac.id', '085689006798', 'Jl. Batu Jajar no. 11A, Sawah Besar, Jakarta Pusat, Indonesia', 'Dokter Tetap', 'doc-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `form_komentar`
--

CREATE TABLE `form_komentar` (
  `id_review` int(4) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `job` varchar(200) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `tanggal` datetime NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_komentar`
--

INSERT INTO `form_komentar` (`id_review`, `nama`, `job`, `komentar`, `tanggal`, `foto`) VALUES
(2, 'Natalia Rakinaung', 'Ibu Rumah Tangga', 'Semangat selalu untuk para Dokter & Nurse. Jaga kesehatan, makan dan minum yang cukup. Selalu semangat. Tuhan memberkati selalu ! Amin', '2023-01-06 00:00:00', 'OIP.jpg'),
(3, 'Issye Y. Hanibe', 'Karyawan Swasta', 'Senang dengan pelayanan Medi Doctor, berasa rumah sendiri. Dokter, Perawat, CS, semua ramah dan baik. Sukses selalu untuk Medi Doctor. GBU', '2023-01-06 00:00:00', 'OIP1.jpg'),
(4, 'Rhiza Multazam', 'Karyawan Swasta', 'Rumas sakit yang melakukan pelayanan dari hati.. Mantap, Maju terus Medi Doctor', '2023-01-06 00:00:00', 'OIP2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_poli`
--

CREATE TABLE `kategori_poli` (
  `id_poli` int(2) NOT NULL,
  `kode_poli` varchar(6) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `jumlah_max` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_poli`
--

INSERT INTO `kategori_poli` (`id_poli`, `kode_poli`, `nama_poli`, `jumlah_max`) VALUES
(2, 'PLANAK', 'Poliklinik Anak dan Tumbuh Kembang', '30'),
(3, 'PLBDH', 'Poliklinik Bedah Umum', '15'),
(4, 'PLMATA', 'Poliklinik Mata', '50'),
(1, 'PLOBG', 'Poliklinik OBGYN (Obstetri & Ginekologi)', '25'),
(5, 'PLUM', 'Poliklinik Umum', '50');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(4) NOT NULL,
  `no_identitas` varchar(15) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(35) NOT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_identitas`, `nama`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `no_telp`, `username`, `password`, `tanggal_daftar`) VALUES
(1, '320103431', 'Sri Indarti', 'Perempuan', '2001-12-03', 'kp kamurang', '0817', 'sri', '123', '0000-00-00'),
(2, '23233545', 's', 'Perempuan', '2023-01-12', 'kp kamurang', '+6281319768068', 's', '123456', '0000-00-00'),
(3, '2332323', 's23', 'Perempuan', '2023-01-12', 'kp kamurang', '+6281319768068', '56', '123456', '0000-00-00'),
(4, '1322424424242', 'ww', '', '2023-01-04', 'we', '+6281319768068', 'admin@admin.com', 'admin', '2023-01-03'),
(5, '111', '111', '', '2023-01-01', '12', '0817', 'asa', '123456', '2023-01-02'),
(6, '111', '111', '', '2023-01-01', '12', '0817', 'asa', '', '2023-01-02'),
(7, '8977', 'fer', '', '0000-00-00', 'kp', '8888', 'fer', '123', '2023-01-04'),
(8, 't', 't', '', '2023-01-01', 't', 't', 't', '123', '2023-01-04'),
(9, 'g', 'g', 'Perempuan', '2023-01-04', 'good ', 'g', 'g', '123', '0000-00-00'),
(10, 'i', 'i', 'Laki-Laki', '2023-01-02', 'y', 'i', 'i', '123', '0000-00-00'),
(11, 't', 't', 'Perempuan', '2023-01-03', 'the only thing ', 't', 't', '1234', '0000-00-00'),
(12, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00'),
(13, '091223874', 'Budi', 'Laki-Laki', '2017-11-22', 'Jalan Medan Merdeka', '089678904567', 'budi', '1234', '2023-01-05'),
(14, '1234567890', 'Sri Indarti', 'Perempuan', '2022-02-07', 'kp kamurang', '+6281319768068', 'sray', '123456', '2023-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `track_login`
--

CREATE TABLE `track_login` (
  `id_track` int(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `track_login`
--

INSERT INTO `track_login` (`id_track`, `username`, `password`) VALUES
(4, 'sri', '123'),
(7, 'sray', '123456'),
(8, 'sray', '123'),
(9, 'sri', '123'),
(10, 'sri', '123'),
(11, 'sray', '123456'),
(12, 'sray', '123456'),
(13, 'sri', '123'),
(14, 'sri', '123'),
(15, 'sri', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD PRIMARY KEY (`id_dok`),
  ADD KEY `kode_poli` (`kode_poli`);

--
-- Indexes for table `form_komentar`
--
ALTER TABLE `form_komentar`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `kategori_poli`
--
ALTER TABLE `kategori_poli`
  ADD PRIMARY KEY (`kode_poli`),
  ADD UNIQUE KEY `id_poli` (`id_poli`) USING BTREE;

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `track_login`
--
ALTER TABLE `track_login`
  ADD PRIMARY KEY (`id_track`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_dokter`
--
ALTER TABLE `data_dokter`
  MODIFY `id_dok` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form_komentar`
--
ALTER TABLE `form_komentar`
  MODIFY `id_review` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_poli`
--
ALTER TABLE `kategori_poli`
  MODIFY `id_poli` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `track_login`
--
ALTER TABLE `track_login`
  MODIFY `id_track` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD CONSTRAINT `data_dokter_ibfk_1` FOREIGN KEY (`kode_poli`) REFERENCES `kategori_poli` (`kode_poli`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
