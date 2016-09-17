-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2016 a las 21:13:44
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `isft179`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones_planificacion`
--

CREATE TABLE `evaluaciones_planificacion` (
  `id_eva` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `materia` varchar(30) NOT NULL,
  `fecha_examen` date NOT NULL,
  `tipo_examen` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evaluaciones_planificacion`
--

INSERT INTO `evaluaciones_planificacion` (`id_eva`, `id_materia`, `materia`, `fecha_examen`, `tipo_examen`) VALUES
(13, 1, 'Fisica', '0000-00-00', 'Parcial'),
(14, 2, 'Matematica', '0000-00-00', 'Parcial'),
(15, 3, 'Literatura', '0000-00-00', 'Parcial'),
(16, 4, 'Literatura 34', '0000-00-00', 'Parcial46 4'),
(17, 4, 'Informatica', '0000-00-00', 'Parcial'),
(18, 4, 'Teleinformatica', '0000-00-00', 'Parcial'),
(20, 4, 'Inlges', '0000-00-00', 'Parcial'),
(21, 4, 'EDI', '0000-00-00', 'Trabajo Practico'),
(26, 4, 'EDI', '0000-00-00', 'Parcial'),
(27, 4, 'EDI', '0000-00-00', 'Parcial'),
(28, 4, 'EDI', '0000-00-00', 'Parcial'),
(29, 4, 'EDI', '0000-00-00', 'Parcial'),
(35, 4, 'EDI', '0000-00-00', 'Practico'),
(36, 4, 'EDI', '0000-00-00', 'Practico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evaluaciones_planificacion`
--
ALTER TABLE `evaluaciones_planificacion`
  ADD PRIMARY KEY (`id_eva`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evaluaciones_planificacion`
--
ALTER TABLE `evaluaciones_planificacion`
  MODIFY `id_eva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
