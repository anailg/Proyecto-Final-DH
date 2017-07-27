-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2017 a las 16:48:34
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cooking_company`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `especificaciones` varchar(500) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `precio` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `especificaciones`, `imagen`, `activo`, `precio`) VALUES
(1, 'Torta de Maracuya', 'Base de mmmm, con mmmm, y mmmm, cubierta con salsa de maracuya', 'Mantener en la heladera. Consumir dentro de los 5 dias de elaboracion.', 'torta-de-maracuya.jpeg', 0, 0),
(2, 'Torta de mousse de chocolate', 'Base húmeda de chocolate, capa de mousse de chocolate, cubierta con chocolate rayado', 'Mantener en la heladera. Consumir dentro de los 5 dias de elaboracion.', 'C:\\xampp\\tmp\\phpCEC6.tmp', 1, 0),
(3, 'Torta de frutos secos', 'Base mmm, capa mmmm, cubierta con frutos secos', 'No necesita heladera. Consumir dentro de los 7 dias de elaboracion.', 'C:\\xampp\\tmp\\php7240.tmp', 1, 0),
(4, 'Alfajores de maicena', 'Alfajorcitos de maicena con dulce de leche. Apto celiacos.', 'Consumir dentro de los 7 dias.', 'alfajores-de-maicena.jpeg', 1, 0),
(5, 'Cheesecake', 'Cheesecake cubierto de frutos rojos.', 'Mantener en la heladera. Consumir dentro de los 5 dias de elaboracion.', 'cheesecake.jpeg', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
