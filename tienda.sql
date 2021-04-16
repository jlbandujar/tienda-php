-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2021 at 02:33 PM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `CLIENTES`
--

CREATE TABLE `CLIENTES` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `CLIENTES`
--

INSERT INTO `CLIENTES` (`idcliente`, `nombre`, `ciudad`, `edad`, `fecha_nacimiento`) VALUES
(17, 'Jose Luis Benito Andï¿½jar', 'AlcÃ¡zar', 23, '2015-02-13'),
(20, 'MarÃ­a', 'AlcÃ¡zar', 23, '2021-04-07'),
(21, 'Juan', 'Madrid', 27, '2021-04-07'),
(22, 'Sakira', 'Barcelona', 23, '2021-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `LOGIN`
--

CREATE TABLE `LOGIN` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `LOGIN`
--

INSERT INTO `LOGIN` (`id`, `usuario`, `password`) VALUES
(1, 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(2, 'andujar', '75fb65d062b7406ef284c6031b6510e873157ac1');

-- --------------------------------------------------------

--
-- Table structure for table `LOGIN2`
--

CREATE TABLE `LOGIN2` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `LOGIN2`
--

INSERT INTO `LOGIN2` (`id`, `usuario`, `password`) VALUES
(1, 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(2, 'andujar', '75fb65d062b7406ef284c6031b6510e873157ac1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CLIENTES`
--
ALTER TABLE `CLIENTES`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indexes for table `LOGIN`
--
ALTER TABLE `LOGIN`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `LOGIN2`
--
ALTER TABLE `LOGIN2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CLIENTES`
--
ALTER TABLE `CLIENTES`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `LOGIN`
--
ALTER TABLE `LOGIN`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `LOGIN2`
--
ALTER TABLE `LOGIN2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
