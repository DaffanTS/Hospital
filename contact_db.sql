-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 01:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

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
-- Table structure for table `arizonarobbins`
--

CREATE TABLE `arizonarobbins` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `dahliaqadri`
--

CREATE TABLE `dahliaqadri` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dereksheph`
--

CREATE TABLE `dereksheph` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dereksheph`
--

INSERT INTO `dereksheph` (`id`, `name`, `email`, `number`, `date`) VALUES
(6, 'daffan', 'daffan.tantowi@yahoo.com', '765734436', '2023-01-21 00:00:00'),
(7, 'daffan', 'daffan.tantowi@yahoo.com', '765734436', '2023-01-21 00:00:00'),
(8, 'daffan', 'daffan.tantowi@yahoo.com', '765734436', '2023-01-21 00:00:00'),
(9, 'daffan', 'daffan.tantowi@yahoo.com', '765734436', '2023-01-21 00:00:00'),
(10, 'daffan', 'daffan.tantowi@yahoo.com', '765734436', '2023-01-21 00:00:00'),
(11, 'daffan', 'daffan.tantowi@yahoo.com', '765734436', '2023-01-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jacksonavery`
--

CREATE TABLE `jacksonavery` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jacksonavery`
--

INSERT INTO `jacksonavery` (`id`, `name`, `email`, `number`, `date`) VALUES
(6, 'daffan', 'daffan.tantowi@yahoo.com', '325366463', '2023-01-21 00:00:00'),
(7, 'daffan', 'daffan.tantowi@yahoo.com', '325366463', '2023-01-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `levischmitt`
--

CREATE TABLE `levischmitt` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marksloan`
--

CREATE TABLE `marksloan` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meredithgrey`
--

CREATE TABLE `meredithgrey` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meredithgrey`
--

INSERT INTO `meredithgrey` (`id`, `name`, `email`, `number`, `date`) VALUES
(12, 'Daffan', 'daffansukarmin482@gmail.com', '0878890090', '2023-01-10 00:00:00'),
(14, 'fachry sukarmin', 'admin@gmail.com', '032456463', '2023-01-16 00:00:00'),
(19, 'test', 'daffansukarmin482@gmail.com', '0878890090', '2023-01-19 00:00:00'),
(20, 'daffan', 'daffansukarmin482@gmail.com', '0721847', '2023-01-18 00:00:00'),
(21, 'sad', 'daffan.tantowi@yahoo.com', '42432562', '2023-02-03 00:00:00'),
(22, 'sad', 'daffan.tantowi@yahoo.com', '42432562', '2023-02-03 00:00:00'),
(23, 'erewr', 'daffantantowisukarmin@gmail.com', '345346432', '2023-01-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mirandabailey`
--

CREATE TABLE `mirandabailey` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prestonburke`
--

CREATE TABLE `prestonburke` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arizonarobbins`
--
ALTER TABLE `arizonarobbins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dahliaqadri`
--
ALTER TABLE `dahliaqadri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dereksheph`
--
ALTER TABLE `dereksheph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jacksonavery`
--
ALTER TABLE `jacksonavery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levischmitt`
--
ALTER TABLE `levischmitt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksloan`
--
ALTER TABLE `marksloan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meredithgrey`
--
ALTER TABLE `meredithgrey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mirandabailey`
--
ALTER TABLE `mirandabailey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestonburke`
--
ALTER TABLE `prestonburke`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arizonarobbins`
--
ALTER TABLE `arizonarobbins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dahliaqadri`
--
ALTER TABLE `dahliaqadri`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dereksheph`
--
ALTER TABLE `dereksheph`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jacksonavery`
--
ALTER TABLE `jacksonavery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `levischmitt`
--
ALTER TABLE `levischmitt`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `marksloan`
--
ALTER TABLE `marksloan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `meredithgrey`
--
ALTER TABLE `meredithgrey`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mirandabailey`
--
ALTER TABLE `mirandabailey`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prestonburke`
--
ALTER TABLE `prestonburke`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
