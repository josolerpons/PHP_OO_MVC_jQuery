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
  `img` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `count` INT
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `productos` (`id`, `codprod`, `name`, `madein`, `tipo`, `reed`, `prov`,`img`,`genero`,`count`) VALUES
('1', '11111', 'ironman', 'EEUU', 'pelicula', '+12', 'Asia', 'module/shop/details/iron.jpg','accion','0'),
('2', '22222', 'pokemon', 'japon', 'videojuego', '+3', 'Europa','module/shop/details/pok.jpg','aventura','0'),
('3', '33333', 'haikyuu', 'japon', 'anime', '+3', 'Europa', 'module/shop/details/hai.png','deporte','0');

CREATE TABLE IF NOT EXISTS `maps` (
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
    `lat` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
    `lng` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
    codshop int NOT NULL,
    id int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `maps` (`nombre`, `lat`, `lng`, `codshop`, `id`) VALUES
('pelicula shop', '39.4697495', '-0.37739', '1', '1'),
('anime shop', '38.8220593', '-0.6063927', '2', '2'),
('videojuego shop', '38.9666700', '-0.1833300', '3', '3');

CREATE TABLE IF NOT EXISTS `catalog` (
   id int NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_spanish_ci NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `catalog` (`id`, `tipo`, `img`) VALUES
('1', 'anime', 'module/home/view/images/stone.jpeg'),
('2', 'pelicula', 'module/home/view/images/iron.jpg'),
('3', 'videojuego', 'module/home/view/images/mine.jpeg');

CREATE TABLE IF NOT EXISTS `carousel` (
   id int NOT NULL,
  `img` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `carousel` (`id`, `img`, `tipo`) VALUES
('3', 'module/home/view/images/hai.png', 'anime'),
('1', 'module/home/view/images/marvel.jpg','pelicula'),
('2', 'module/home/view/images/gi.jpeg','videojuego');
