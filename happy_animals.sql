-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2020 a las 21:46:40
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
-- Base de datos: `happy_animals`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `usuarioadmin` text NOT NULL,
  `correo` text NOT NULL,
  `clave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuarioadmin`, `correo`, `clave`) VALUES
(1, 'admin', 'admin@gmail.com', '123'),
(2, 'admin1', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoptar`
--

CREATE TABLE `adoptar` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `tel` int(11) NOT NULL,
  `ingresos` int(11) NOT NULL,
  `tiempo_casa` tinyint(24) UNSIGNED NOT NULL,
  `familiares` int(11) NOT NULL,
  `tamano_casa` text NOT NULL,
  `razon` text NOT NULL,
  `revisado` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adoptar`
--

INSERT INTO `adoptar` (`id`, `nombre`, `correo`, `tel`, `ingresos`, `tiempo_casa`, `familiares`, `tamano_casa`, `razon`, `revisado`) VALUES
(1, 'Benjamin', 'benja@gmail.com', 2147483647, 2000, 20, 2, 'Grande', 'Siempre quise uno', 'no'),
(2, 'Benjamin', 'benja@gmail.com', 4412, 30, 24, 1, 'Grande', 'Siempre quise uno', 'no'),
(3, 'Hola', 'hola@gmail.com', 123231, 21, 12, 2, 'Grande', 'Quiero uno', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dar_adopcion`
--

CREATE TABLE `dar_adopcion` (
  `id` int(11) NOT NULL,
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
  `microchip` text NOT NULL,
  `revisado` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dar_adopcion`
--

INSERT INTO `dar_adopcion` (`id`, `nombre`, `correo`, `tel`, `tiempo`, `razón`, `nombre_animal`, `especie`, `nacimiento_animal`, `sexo`, `tamaño`, `peso`, `vacunado`, `desparacitado`, `sano`, `microchip`, `revisado`) VALUES
(1, 'Nestor', 'nestorcalvoa@gmail.com', 12, 1, 'pa', 'SA', 'Perro', '2020-06-15', 'Masculino', 'Pequeño', 2, 'si', 'no', 'si', 'no', 'no'),
(2, 'Hola', 'hola@gmail.co', 215452, 2, 'Porque si', 'Perrito', 'Gato', '2020-06-24', 'Femenino', 'Mediano', 20, 'si', 'si', 'si', 'si', 'no'),
(3, 'Hola', 'hola@gmail.com', 123123, 2, 'pa', 'Gatito', 'Gato', '2020-06-09', 'Femenino', 'Mediano', 21, 'si', 'si', 'si', 'si', 'no'),
(4, 'Caja', 'caja@gmail.com', 25215, 12, 'Ya no lo quiero', 'Gatito', 'Conejo', '2020-06-02', 'Femenino', 'Grande', 233, 'no', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `nombre` text NOT NULL,
  `apellidos` text NOT NULL,
  `correo` text NOT NULL,
  `contrasena` text NOT NULL,
  `recontrasena` text NOT NULL,
  `ciudad` text NOT NULL,
  `direccion` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellidos`, `correo`, `contrasena`, `recontrasena`, `ciudad`, `direccion`, `fecha`) VALUES
(1, 'vicky11', 'Ana', 'Reyes Diaz', 'victoria.reyes@udea.edu.co', '123456', '123456', 'Medellin', 'cl 56 # 35-11', '1996-09-11'),
(2, '11vicky', 'Ana', 'Reyes Diaz', 'victoria.reyes@udea.edu.co', '123456', '123456', 'Medellin', 'cl 56 # 35-11', '1996-09-11'),
(3, 'maria11', 'maria', 'diaz gomez', 'maria.diaz@gmail.com', '232323', ' 232323', 'monteria', 'cra 11 #12-13', '0000-00-00'),
(4, 'juan12', 'juan carlos', 'perez roman', 'juan.perez@gmail.com', '4545', ' 4545', 'apartado', 'cra 11 #12-13', '2020-06-04'),
(5, 'jose23', 'jose luis', 'garcia hoyos', 'jose.garcia@gmail.com', '789456', ' 789456', 'cartagena', 'cra 11 #20-15', '1996-09-11'),
(7, 'pedro15', 'pedro jose', 'marin perez', 'pedro.marin@gmail.com', '963963', ' 963963', 'valencia', 'cra201 #18-13', '2009-02-08'),
(8, 'camilo25', 'camilo andres', 'mejia diaz', 'camilo.mejia@gmail.com', '159159', ' 159159', 'monteria', 'cl 44 # 12-21', '1985-06-14'),
(9, 'andres90', 'andres ', 'alzate jaramillo', 'andres.alzate@gmail.com', '753753', ' 753753', 'barranquilla', 'barranquilla', '2013-09-22'),
(13, 'marta50', 'marta', 'ramirez', 'marta.rami@gmail.com', '456456', ' 456456', 'pereira', 'cra 251 #18-73', '2010-06-09'),
(15, 'victoria11', 'victoria', 'reyes', 'vickypanda22@hotmail.com', '1234', ' 1234', 'medellin', 'diag 48f # 53-35', '1996-09-11'),
(16, 'pablo24', 'pablo', 'ramos diaz', 'pablo.ramos', '854854', ' 854854', 'carepa', 'cl 84 # 18-45', '2020-06-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `indiceadm` (`usuarioadmin`) USING HASH;

--
-- Indices de la tabla `adoptar`
--
ALTER TABLE `adoptar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dar_adopcion`
--
ALTER TABLE `dar_adopcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `indiceu` (`usuario`) USING HASH;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `adoptar`
--
ALTER TABLE `adoptar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `dar_adopcion`
--
ALTER TABLE `dar_adopcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
