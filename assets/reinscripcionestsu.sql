-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2022 a las 22:49:56
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdreins`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reinscripcionestsu`
--

CREATE TABLE `reinscripcionestsu` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf32 NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf32 NOT NULL,
  `carrera` varchar(20) CHARACTER SET utf32 NOT NULL,
  `correoUTFV` varchar(30) CHARACTER SET utf32 NOT NULL,
  `matricula` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `archivo1` text CHARACTER SET utf32 NOT NULL,
  `archivo2` text NOT NULL,
  `archivo3` text NOT NULL,
  `archivo4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reinscripcionestsu`
--

INSERT INTO `reinscripcionestsu` (`id`, `nombre`, `apellidos`, `carrera`, `correoUTFV`, `matricula`, `fecha`, `archivo1`, `archivo2`, `archivo3`, `archivo4`) VALUES
(1, 'Oliver Axel', 'Martinez Becerra', 'Desarrollo', '19302121@utfv.edu.mx', 19302121, '2022-10-02', '10-02-22-22-45-22-Actividad #10 _P3Act10.pdf', '10-02-22-22-45-22-Comprobante de COVID-19.pdf', '10-02-22-22-45-22-CASO DE ESTUDIO Equipo #6 (1).pdf', '10-02-22-22-45-22-Carta Responsiva reinscripción.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reinscripcionestsu`
--
ALTER TABLE `reinscripcionestsu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reinscripcionestsu`
--
ALTER TABLE `reinscripcionestsu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
