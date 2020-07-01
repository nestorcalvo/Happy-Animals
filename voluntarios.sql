-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2020 a las 17:25:11
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `happy_animals`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntarios`
--

CREATE TABLE `voluntarios` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `fecha` date NOT NULL,
  `correo` text NOT NULL,
  `direccion` text NOT NULL,
  `celular` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `ocupacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `voluntarios`
--

INSERT INTO `voluntarios` (`id`, `nombres`, `apellidos`, `fecha`, `correo`, `direccion`, `celular`, `telefono`, `ocupacion`) VALUES
(1, 'carmen alicia', 'diaz gomez', '1996-09-11', 'victoria.reyes@udea.edu.co', 'cra 11 #12-13', 2147483647, 2514789, 'estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
