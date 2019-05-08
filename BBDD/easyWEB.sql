-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2019 a las 19:42:26
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
-- Estructura de tabla para la tabla `footer`
--

CREATE TABLE `footer` (
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` mediumtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `header`
--

CREATE TABLE `header` (
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` mediumtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `header`
--

INSERT INTO `header` (`Nombre`, `Codigo`) VALUES
('header1', '<div style=\'height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;\'><a href=\'\'><img src=\'\' alt=\'\'>LOGOTIPO</a>'),
('header2', '<div style=\'height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;\'><a href=\'\'><img src=\'\' alt=\'\'>LOGOTIPO</a><a href=\'\'>Elemento 1</a><a href=\'\'>Elemento 2</a><a href=\'\'>Elemento 3</a><a href=\'\'>Elemento 4</a>'),
('header3', '<div style=\'height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;\'><a href=\'\'><img src=\'\' alt=\'\'>LOGOTIPO</a><div><input type=\'text\' name=\'\' id=\'\' placeholder=\'Buscador\'><button>Buscar</button></div>');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `submenu`
--

CREATE TABLE `submenu` (
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` mediumtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `submenu`
--

INSERT INTO `submenu` (`Nombre`, `Codigo`) VALUES
('submenu1', '<div style=\'height: 100%; display: flex; flex-direction: column; justify-content: space-around; align-items: center;\'><a href=\'\'>Elemento1</a><a href=\'\'>Elemento2</a><a href=\'\'>Elemento3</a><a href=\'\'>Elemento4</a></div>'),
('submenu1L', '<div style=\'height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;\'><a href=\'\'>Elemento1</a><a href=\'\'>Elemento2</a><a href=\'\'>Elemento3</a><a href=\'\'>Elemento4</a></div>'),
('submenu2', '<div style=\'height: 100%; display: flex; flex-direction: column; justify-content: space-around; align-items: center;\'><a href=\'\'><img src=\'\'>Imagen1</a><a href=\'\'><img src=\'\'>Imagen2</a><a href=\'\'><img src=\'\'>Imagen3</a><a href=\'\'><img src=\'\'>Imagen4</a></div>'),
('submenu2L', '<div style=\'height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;\'><a href=\'\'><img src=\'\'>Imagen1</a><a href=\'\'><img src=\'\'>Imagen2</a><a href=\'\'><img src=\'\'>Imagen3</a><a href=\'\'><img src=\'\'>Imagen4</a></div>');

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
  `EMail` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Publicaciones` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usuario`, `Contraseña`, `Nombre`, `Apellido1`, `Apellido2`, `EMail`, `Publicaciones`) VALUES
('Usuario1', '1234', 'Usuario1', 'Usuario1', '', 'usuario1@usuario1.com', 14),
('Usuario2', '1234', 'Usuario2', 'Usuario2', '', 'usurario2@usuario2.com', 14);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `footer`
--
ALTER TABLE `footer`
  ADD UNIQUE KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`ID_Publicacion`);

--
-- Indices de la tabla `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`Nombre`);

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
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `ID_Publicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
