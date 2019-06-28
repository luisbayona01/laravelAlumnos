-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-06-2019 a las 11:54:54
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnoslaravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `idalumnos` int(11) NOT NULL AUTO_INCREMENT,
  `IdentIfIcacIon` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `genero` char(2) NOT NULL,
  `fechanacimiento` date NOT NULL,
  PRIMARY KEY (`idalumnos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `talumnos`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `talumnos`;
CREATE TABLE IF NOT EXISTS `talumnos` (
`idalumnos` int(11)
,`identificacion` varchar(45)
,`nombre` varchar(45)
,`apellido` varchar(45)
,`direccion` varchar(45)
,`genero` char(2)
,`edad` int(5)
,`fechanacimiento` date
);

-- --------------------------------------------------------

--
-- Estructura para la vista `talumnos`
--
DROP TABLE IF EXISTS `talumnos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `talumnos`  AS  select `alumnos`.`idalumnos` AS `idalumnos`,`alumnos`.`IdentIfIcacIon` AS `identificacion`,`alumnos`.`nombre` AS `nombre`,`alumnos`.`apellido` AS `apellido`,`alumnos`.`direccion` AS `direccion`,`alumnos`.`genero` AS `genero`,(year(curdate()) - year(`alumnos`.`fechanacimiento`)) AS `edad`,`alumnos`.`fechanacimiento` AS `fechanacimiento` from `alumnos` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
