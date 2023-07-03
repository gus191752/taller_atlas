-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 1980 at 08:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taller`
--

-- --------------------------------------------------------

--
-- Table structure for table `registro_cliente_taller`
--

CREATE TABLE `registro_cliente_taller` (
  `cedula_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono_cliente` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `direccion_cliente` varchar(200) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registro_trabajadores`
--

CREATE TABLE `registro_trabajadores` (
  `cedula_trabajador` int(11) NOT NULL,
  `nombre_trabajador` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono_trabajador` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `direccion_trabajador` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_ingreso_trabajador` date DEFAULT NULL,
  `fecha_egreso_trabajador` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registro_trabajos_taller`
--

CREATE TABLE `registro_trabajos_taller` (
  `id_trabajo` int(11) NOT NULL,
  `cedula_cliente` int(11) NOT NULL,
  `placas` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `vin` varchar(50) COLLATE latin1_spanish_ci DEFAULT '',
  `modelo_marca` varchar(50) COLLATE latin1_spanish_ci DEFAULT '',
  `kilometraje` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cedula_trabajador` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `titulo_trabajo` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `descripcion_falla` longtext COLLATE latin1_spanish_ci,
  `diagnostico_solucion` longtext COLLATE latin1_spanish_ci,
  `inspeccion_final` longtext COLLATE latin1_spanish_ci,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_egreso` date DEFAULT NULL,
  `costo_reparacion` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `registro_trabajos_taller`
--

INSERT INTO `registro_trabajos_taller` (`id_trabajo`, `cedula_cliente`, `placas`, `vin`, `modelo_marca`, `kilometraje`, `cedula_trabajador`, `titulo_trabajo`, `descripcion_falla`, `diagnostico_solucion`, `inspeccion_final`, `fecha_ingreso`, `fecha_egreso`, `costo_reparacion`) VALUES
(2, 888, '8888', '8888', '8888', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(6, 6666, '666666', '666666', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(7, 7777, '7777', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(8, 888, 'gustavo', 'mujica', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(9, 8888000, 'gustavo', '11111', '11111', '11111', '11111', '11111', '1111', '1111', '11111', '2011-11-01', '2011-11-01', 1111111),
(10, 7777777, '7777', '77', '777', '777', '7777', '777', '777', '777', '777', '0000-00-00', '0000-00-00', 7777),
(11, 7777777, '7777', '77', '777', '777', '7777', '777', '777', '777', '777', '0000-00-00', '0000-00-00', 7777),
(12, 3333333, '33333', '33333', '33333', '33', '33', '33', '33', '33', '33', '0000-00-00', '0000-00-00', 33),
(13, 22, '2', '22', '22', '22', '22', '22', '22', '22', '22', '0000-00-00', '0000-00-00', 22),
(14, 11, '11', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(15, 333232, '22', 'rvsvdv', 'vsrvrdv', 'rgegege', 'regegeg', 'rgegggrge', 'rgege', 'rgergr', 'rgrg', '0000-00-00', '0000-00-00', 0),
(16, 345, 'z', 'sa', 'sa', 'sa', 'dsa', 'sad', '', '', '', '0000-00-00', '0000-00-00', 0),
(17, 65, '5656', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(18, 112, 'xx', 'xx', 'xx', 'xx', 'xx', 'xx', 'xx', 'xx', 'xx', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rendimiento_cliente`
--

CREATE TABLE `rendimiento_cliente` (
  `id_trabajo` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rendimiento_trabajador`
--

CREATE TABLE `rendimiento_trabajador` (
  `correlativo_trabajos` int(11) NOT NULL,
  `cedula_trabajador` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `modelo_marca` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `titulo_trabajo` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `costo_reparacion` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha_egreso` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `rendimiento_trabajador`
--

INSERT INTO `rendimiento_trabajador` (`correlativo_trabajos`, `cedula_trabajador`, `modelo_marca`, `titulo_trabajo`, `costo_reparacion`, `fecha_egreso`) VALUES
(1, '11', '5yry', '$titulo_trabajo', '$costo_reparacion', '$fecha_egreso'),
(2, '', '', '', '', ''),
(3, 'xx', 'xx', 'xx', 'xx', 'xx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registro_cliente_taller`
--
ALTER TABLE `registro_cliente_taller`
  ADD PRIMARY KEY (`cedula_cliente`);

--
-- Indexes for table `registro_trabajadores`
--
ALTER TABLE `registro_trabajadores`
  ADD PRIMARY KEY (`cedula_trabajador`);

--
-- Indexes for table `registro_trabajos_taller`
--
ALTER TABLE `registro_trabajos_taller`
  ADD PRIMARY KEY (`id_trabajo`) USING BTREE;

--
-- Indexes for table `rendimiento_cliente`
--
ALTER TABLE `rendimiento_cliente`
  ADD KEY `id_trabajo` (`id_trabajo`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `rendimiento_trabajador`
--
ALTER TABLE `rendimiento_trabajador`
  ADD PRIMARY KEY (`correlativo_trabajos`),
  ADD KEY `cedula trabajador` (`cedula_trabajador`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registro_trabajos_taller`
--
ALTER TABLE `registro_trabajos_taller`
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rendimiento_trabajador`
--
ALTER TABLE `rendimiento_trabajador`
  MODIFY `correlativo_trabajos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
