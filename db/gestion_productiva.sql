-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2017 a las 07:20:16
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gestion_productiva`
--
CREATE DATABASE IF NOT EXISTS `gestion_productiva` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `gestion_productiva`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
`id` int(11) NOT NULL,
  `nombreSolicitante` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipoOrganizacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dependencia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipoPractica` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `resultados` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `perfil` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nroEstudiantes` int(3) NOT NULL,
  `descripcionTrabajo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombreSolicitante`, `tipoOrganizacion`, `dependencia`, `telefono`, `email`, `tipoPractica`, `resultados`, `perfil`, `nroEstudiantes`, `descripcionTrabajo`) VALUES
(21, 'Santiago QuiÃ±ones', 'Externa', 'DGMIC', '0988995308', 'lsquinones@gmail.com', 'ParticipaciÃ³n en proyectos UTPL', 'App Movil', 'Desarrollo de aplicaciones', 2, 'Desarrollo de aplicaciÃ³n mÃ³vil para el cÃ³digo de la construcciÃ³n INEC'),
(22, 'Karla Romero', 'Vinculacion', 'UGTI', '0988995308', 'karomero@utpl.edu.ec', 'ParticipaciÃ³n en proyectos UTPL', 'Informe de auditoria - caso ILE', 'CapacitaciÃ³n a terceros (solo vinculaciÃ³n)', 3, 'Auditoria a empresa ILE2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
