-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2016 a las 08:19:43
-- Versión del servidor: 5.5.49-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `DB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

create database prod2;
use prod2;

CREATE TABLE IF NOT EXISTS `productos` (
  id int AUTO_INCREMENT not null PRIMARY KEY,
  `codprod` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `madein` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `reed` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `prov` varchar(30) COLLATE utf8_spanish_ci NOT NULL


) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `productos` (`id`, `codprod`, `name`, `madein`, `tipo`, `reed`, `prov`) VALUES
('1', '11111', 'starwars', 'EEUU', 'fantasia', '+18', 'America'),
('2', '22222', 'pokemon', 'japon', 'aventura', '+3', 'Europa'),
('3', '33333', 'naruto', 'japon', 'shounen', '+12', 'Asia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
