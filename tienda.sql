-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2021 at 09:15 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda`
--

-- --------------------------------------------------------

--
-- Table structure for table `datos`
--

CREATE TABLE `datos` (
  `id` int(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `dni` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `conf_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datos`
--

INSERT INTO `datos` (`id`, `foto`, `name`, `email`, `telefono`, `direccion`, `dni`, `password`, `conf_password`) VALUES
(1, 'fotos/kevin2.png', 'Kevin Sanchez', 'kevinsanmaga12@gmail.com', '', '', '', 'kevin12345', '$2y$10$Vm/iU6eLGMAEfDNBLSJjG.EZNQEUzCYGszIyyQLMChCAmtRO/CP2u'),
(2, 'fotos/kevin2.png', 'Kevin Sánchez', 'kevin@gmail.com', '', '', '', '12345', '$2y$10$i8uwUE4GXsx3YxEehpXKFOP69RsJl19u7NJkVBLxFsVEsZvzOOx1K'),
(3, 'fotos/andy2.png', 'Andy', 'andy@gmail.com', '', '', '', '12345', '$2y$10$dwWl4VXtfdG9QvU8Ag3bLu3LDxrQ6UAliS6DVbqx/OnxNq9IE.jGG');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `precioActual` varchar(200) NOT NULL,
  `precioOriginal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `foto`, `titulo`, `precioActual`, `precioOriginal`) VALUES
(1, 'assets/img/0005.png', 'Manzana', '1.10', '1.50'),
(2, 'assets/img/0006.png', 'Mandarina', '1.20', '1.40'),
(3, 'assets/img/0007.png', 'Pera', '2.40', '3.10'),
(4, 'assets/img/0008.png', 'Sandía', '2.10', '2.60'),
(5, 'assets/img/0009.png', 'Apio', '1.35', '1.50'),
(6, 'assets/img/0010.png', 'Zanahoria', '1.40', '1.70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
