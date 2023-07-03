-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2023 a las 22:27:17
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_cliente_taller`
--

CREATE TABLE `registro_cliente_taller` (
  `cedula_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono_cliente` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `direccion_cliente` varchar(200) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_trabajadores`
--

CREATE TABLE `registro_trabajadores` (
  `cedula_trabajador` varchar(50) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `nombre_trabajador` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono_trabajador` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `direccion_trabajador` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_ingreso_trabajador` date DEFAULT NULL,
  `fecha_egreso_trabajador` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_trabajos_taller`
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
-- Volcado de datos para la tabla `registro_trabajos_taller`
--

INSERT INTO `registro_trabajos_taller` (`id_trabajo`, `cedula_cliente`, `placas`, `vin`, `modelo_marca`, `kilometraje`, `cedula_trabajador`, `titulo_trabajo`, `descripcion_falla`, `diagnostico_solucion`, `inspeccion_final`, `fecha_ingreso`, `fecha_egreso`, `costo_reparacion`) VALUES
(10, 7777777, '7777', '77', '777', '777', '7777', '777', '777', '777', '777', '0000-00-00', '0000-00-00', 7777),
(11, 7777777, '7777', '77', '777', '777', '7777', '777', '777', '777', '777', '0000-00-00', '0000-00-00', 7777),
(12, 3333333, '33333', '33333', '33333', '33', '33', '33', '33', '33', '33', '0000-00-00', '0000-00-00', 33),
(13, 22, '2', '22', '22', '22', '22', '22', '22', '22', '22', '0000-00-00', '0000-00-00', 22),
(14, 11, '11', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(15, 333232, '22', 'rvsvdv', 'vsrvrdv', 'rgegege', 'regegeg', 'rgegggrge', 'rgege', 'rgergr', 'rgrg', '0000-00-00', '0000-00-00', 0),
(16, 345, 'z', 'sa', 'sa', 'sa', 'dsa', 'sad', '', '', '', '0000-00-00', '0000-00-00', 0),
(17, 65, '5656', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(18, 112, 'xx', 'xx', 'xx', 'xx', 'xx', 'xx', 'xx', 'xx', 'xx', '0000-00-00', '0000-00-00', 0),
(19, 15471382, 'xy', 'xy', 'xy', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(20, 9999, '999', '999', '999', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(21, 5555, '55', '55', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(22, 998877, '503xco', '2339484', 'ford mustang', '50000', '3377547', 'repracion araranque', 'frfsfsf', 'esfsefesf', 'sefsefesf', '0000-00-00', '0000-00-00', 0),
(23, 242424, '242424', '2424242', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(24, 242424, '242424', '2424242', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(25, 15471382, 'cdadawd', 'awdwadwa', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 200),
(26, 14830, '32323', '', '', '', '22222', '', '', '', '', '0000-00-00', '0000-00-00', 222),
(27, 123123, '333222', '2323232323', 'hiundai tucson 2000', '187300', '123', 'repracion araranque', '2323', '23232', '23232', '2023-04-05', '2023-04-12', 500),
(28, 2147483647, '2424224', '24242424', '', '', '', '', '', '', '', '2023-04-12', '2023-04-12', 24),
(29, 2147483647, '2424224', '24242424', '', '', '', '', '', '', '', '2023-04-12', '2023-04-12', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rendimiento_cliente`
--

CREATE TABLE `rendimiento_cliente` (
  `id_trabajo` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rendimiento_trabajador`
--

CREATE TABLE `rendimiento_trabajador` (
  `id` int(11) NOT NULL,
  `id_trabajo` int(11) DEFAULT NULL,
  `cedula_trabajador` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `placas` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `modelo_marca` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `titulo_trabajo` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `costo_reparacion` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha_egreso` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `rendimiento_trabajador`
--

INSERT INTO `rendimiento_trabajador` (`id`, `id_trabajo`, `cedula_trabajador`, `placas`, `modelo_marca`, `titulo_trabajo`, `costo_reparacion`, `fecha_egreso`) VALUES
(1, NULL, '11', NULL, '5yry', '$titulo_trabajo', '$costo_reparacion', '$fecha_egreso'),
(2, NULL, '', NULL, '', '', '', ''),
(3, NULL, 'xx', NULL, 'xx', 'xx', 'xx', 'xx'),
(4, NULL, '', NULL, 'xy', '', '', ''),
(5, NULL, '', NULL, '999', '', '', ''),
(6, NULL, '', NULL, '', '', '', ''),
(7, NULL, '', '242424', '', '', '', ''),
(8, NULL, '', 'cdadawd', '', '', '200', ''),
(9, NULL, '22222', '32323', '', '', '222', ''),
(10, NULL, '123', '333222', 'hiundai tucson 2000', 'repracion araranque', '200', '2023-04-12'),
(11, NULL, '', '2424224', '', '', '24', '2023-04-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_cliente_taller`
--
ALTER TABLE `registro_cliente_taller`
  ADD PRIMARY KEY (`cedula_cliente`);

--
-- Indices de la tabla `registro_trabajadores`
--
ALTER TABLE `registro_trabajadores`
  ADD PRIMARY KEY (`cedula_trabajador`);

--
-- Indices de la tabla `registro_trabajos_taller`
--
ALTER TABLE `registro_trabajos_taller`
  ADD PRIMARY KEY (`id_trabajo`) USING BTREE,
  ADD KEY `cedula_cliente` (`cedula_cliente`),
  ADD KEY `cedula_trabajador` (`cedula_trabajador`);

--
-- Indices de la tabla `rendimiento_cliente`
--
ALTER TABLE `rendimiento_cliente`
  ADD KEY `id_trabajo` (`id_trabajo`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `rendimiento_trabajador`
--
ALTER TABLE `rendimiento_trabajador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trabajo` (`id_trabajo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_trabajos_taller`
--
ALTER TABLE `registro_trabajos_taller`
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `rendimiento_trabajador`
--
ALTER TABLE `rendimiento_trabajador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro_cliente_taller`
--
ALTER TABLE `registro_cliente_taller`
  ADD CONSTRAINT `registro_cliente_taller_ibfk_1` FOREIGN KEY (`cedula_cliente`) REFERENCES `registro_trabajos_taller` (`cedula_cliente`);

--
-- Filtros para la tabla `registro_trabajadores`
--
ALTER TABLE `registro_trabajadores`
  ADD CONSTRAINT `registro_trabajadores_ibfk_1` FOREIGN KEY (`cedula_trabajador`) REFERENCES `registro_trabajos_taller` (`cedula_trabajador`);

--
-- Filtros para la tabla `rendimiento_cliente`
--
ALTER TABLE `rendimiento_cliente`
  ADD CONSTRAINT `rendimiento_cliente_ibfk_1` FOREIGN KEY (`id_trabajo`) REFERENCES `registro_trabajos_taller` (`id_trabajo`);

--
-- Filtros para la tabla `rendimiento_trabajador`
--
ALTER TABLE `rendimiento_trabajador`
  ADD CONSTRAINT `rendimiento_trabajador_ibfk_1` FOREIGN KEY (`id_trabajo`) REFERENCES `registro_trabajos_taller` (`id_trabajo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
