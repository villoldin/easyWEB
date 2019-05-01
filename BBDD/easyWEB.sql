-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2019 a las 20:46:35
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `easyweb`
--
DROP DATABASE IF EXISTS `easyweb`;
CREATE DATABASE IF NOT EXISTS `easyweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `easyweb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `body`
--

CREATE TABLE `body` (
  `IDBody` int(11) NOT NULL,
  `RutaHTML` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `RutaCSS` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footer`
--

CREATE TABLE `footer` (
  `IDFooter` int(11) NOT NULL,
  `RutaHTML` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `RutaCSS` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `header`
--

CREATE TABLE `header` (
  `IDHeader` int(11) NOT NULL,
  `RutaHTML` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `RutaCSS` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantillasfavoritas`
--

CREATE TABLE `plantillasfavoritas` (
  `IDRelación` int(11) NOT NULL,
  `IDHTML` int(11) NOT NULL,
  `Usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantillashtml`
--

CREATE TABLE `plantillashtml` (
  `IDPlantilla` int(11) NOT NULL,
  `RutaHTML` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `RutaCSS` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `ID_Publicacion` int(11) NOT NULL,
  `Usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Publicacion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`ID_Publicacion`, `Usuario`, `Publicacion`, `Fecha`) VALUES
(1, 'Usuario1', 'Esto es una prueba', '2019-05-01 20:38:15'),
(2, 'Usuario2', 'Esto es otra prueba', '2019-05-01 20:38:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido1` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido2` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMail` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usuario`, `Contraseña`, `Nombre`, `Apellido1`, `Apellido2`, `EMail`) VALUES
('Usuario1', '1234', 'Usuario1', 'Usuario1', '', 'usuario1@usuario1.com'),
('Usuario2', '1234', 'Usuario2', 'Usuario2', '', 'usurario2@usuario2.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `body`
--
ALTER TABLE `body`
  ADD PRIMARY KEY (`IDBody`);

--
-- Indices de la tabla `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`IDFooter`);

--
-- Indices de la tabla `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`IDHeader`);

--
-- Indices de la tabla `plantillasfavoritas`
--
ALTER TABLE `plantillasfavoritas`
  ADD PRIMARY KEY (`IDRelación`),
  ADD KEY `IDHTML` (`IDHTML`),
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `plantillashtml`
--
ALTER TABLE `plantillashtml`
  ADD PRIMARY KEY (`IDPlantilla`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`ID_Publicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Usuario`),
  ADD UNIQUE KEY `EMail` (`EMail`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `body`
--
ALTER TABLE `body`
  MODIFY `IDBody` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `footer`
--
ALTER TABLE `footer`
  MODIFY `IDFooter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `header`
--
ALTER TABLE `header`
  MODIFY `IDHeader` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plantillasfavoritas`
--
ALTER TABLE `plantillasfavoritas`
  MODIFY `IDRelación` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plantillashtml`
--
ALTER TABLE `plantillashtml`
  MODIFY `IDPlantilla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `ID_Publicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `plantillasfavoritas`
--
ALTER TABLE `plantillasfavoritas`
  ADD CONSTRAINT `plantillasfavoritas_ibfk_1` FOREIGN KEY (`IDHTML`) REFERENCES `plantillashtml` (`IDPlantilla`),
  ADD CONSTRAINT `plantillasfavoritas_ibfk_2` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
