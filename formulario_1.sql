-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2020 a las 18:46:21
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoptar`
--

CREATE TABLE `adoptar` (
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `tel` int(11) NOT NULL,
  `ingresos` int(11) NOT NULL,
  `tiempo_casa` tinyint(24) UNSIGNED NOT NULL,
  `familiares` int(11) NOT NULL,
  `tamano_casa` text NOT NULL,
  `razon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adoptar`
--

INSERT INTO `adoptar` (`nombre`, `correo`, `tel`, `ingresos`, `tiempo_casa`, `familiares`, `tamano_casa`, `razon`) VALUES
('Benjamin', 'benja@gmail.com', 2147483647, 2000, 20, 2, 'Grande', 'Siempre quise uno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dar_adopcion`
--

CREATE TABLE `dar_adopcion` (
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `tel` int(11) NOT NULL,
  `tiempo` int(11) NOT NULL,
  `razón` text NOT NULL,
  `nombre_animal` text NOT NULL,
  `especie` text NOT NULL,
  `nacimiento_animal` date NOT NULL,
  `sexo` text NOT NULL,
  `tamaño` text NOT NULL,
  `peso` int(5) NOT NULL,
  `vacunado` text NOT NULL,
  `desparacitado` text NOT NULL,
  `sano` text NOT NULL,
  `microchip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dar_adopcion`
--

INSERT INTO `dar_adopcion` (`nombre`, `correo`, `tel`, `tiempo`, `razón`, `nombre_animal`, `especie`, `nacimiento_animal`, `sexo`, `tamaño`, `peso`, `vacunado`, `desparacitado`, `sano`, `microchip`) VALUES
('', '', 0, 0, '', '', '', '0000-00-00', '', '', 0, 'no', 'no', 'no', 'no'),
('Nestor', 'nestorcalvoa@gmail.com', 12, 1, 'pa', 'SA', 'Perro', '2020-06-15', 'Masculino', 'Pequeño', 2, 'si', 'no', 'si', 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
