-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-12-2020 a las 19:03:22
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autonomas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autonomias`
--

CREATE TABLE `autonomias` (
  `idAutonomia` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autonomias`
--

INSERT INTO `autonomias` (`idAutonomia`, `Nombre`) VALUES
(1, 'Comunidad Valenciana'),
(2, 'Andalucia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `idProvincia` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `idAutonomia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`idProvincia`, `Nombre`, `idAutonomia`) VALUES
(1, 'Alicante', 1),
(2, 'Valencia', 1),
(3, 'Castellon', 1),
(4, 'Almeria', 2),
(5, 'Malaga', 2),
(6, 'Granada', 2),
(7, 'Cadiz', 2),
(8, 'Huelva', 2),
(9, 'Cordoba', 2),
(10, 'Jaen', 2),
(11, 'Sevilla', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autonomias`
--
ALTER TABLE `autonomias`
  ADD PRIMARY KEY (`idAutonomia`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`idProvincia`),
  ADD KEY `idAutonomia` (`idAutonomia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autonomias`
--
ALTER TABLE `autonomias`
  MODIFY `idAutonomia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `idProvincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD CONSTRAINT `relacion` FOREIGN KEY (`idAutonomia`) REFERENCES `autonomias` (`idAutonomia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
