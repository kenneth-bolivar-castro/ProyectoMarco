-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: database
-- Tiempo de generación: 23-04-2020 a las 23:14:57
-- Versión del servidor: 5.7.29
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ProyectoMarco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Administrador`
--

CREATE TABLE `Administrador` (
  `ID_Admin` int(11) NOT NULL,
  `Alias` text NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Administrador`
--

INSERT INTO `Administrador` (`ID_Admin`, `Alias`, `Codigo`) VALUES
(1, 'krauserx', 1234),
(18, 'yalixa', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Electrico`
--

CREATE TABLE `Electrico` (
  `ID_Elect` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Electrico`
--

INSERT INTO `Electrico` (`ID_Elect`, `Foto`, `Nombre`, `Descripcion`, `Precio`) VALUES
(2, '1587681482_descarga.jpg', 'bateria', 'thorS', 15000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Escapes`
--

CREATE TABLE `Escapes` (
  `ID_Escape` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Escapes`
--

INSERT INTO `Escapes` (`ID_Escape`, `Foto`, `Nombre`, `Descripcion`, `Precio`) VALUES
(1, 'images.jpg', 'N1', 'Doble o triple', 5000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Frenos`
--

CREATE TABLE `Frenos` (
  `ID_Frenos` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Frenos`
--

INSERT INTO `Frenos` (`ID_Frenos`, `Foto`, `Nombre`, `Descripcion`, `Precio`) VALUES
(1, 'images.jpg', 'ABS', 'honda', 15000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Motores`
--

CREATE TABLE `Motores` (
  `ID_Motor` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Motores`
--

INSERT INTO `Motores` (`ID_Motor`, `Foto`, `Nombre`, `Descripcion`, `Precio`) VALUES
(2, '1587681214_descarga.jpg', 'SUZUKI', '2000cc', 25214);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SYD`
--

CREATE TABLE `SYD` (
  `ID_SYD` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `SYD`
--

INSERT INTO `SYD` (`ID_SYD`, `Foto`, `Nombre`, `Descripcion`, `Precio`) VALUES
(2, '1587677729_descarga.jpg', 'varillaje ', 'honda civic', 15000),
(5, 'images.jpg', 'varillaje ', 'honda civic', 15000),
(10, '1587678468_descarga.jpg', 'varillaje ', 'honda civic', 15000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tuning`
--

CREATE TABLE `Tuning` (
  `ID_Tuning` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Tuning`
--

INSERT INTO `Tuning` (`ID_Tuning`, `Foto`, `Nombre`, `Descripcion`, `Precio`) VALUES
(1, '1587681746_descarga.jpg', 'SUZUKI', 'visera', 1232131);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Administrador`
--
ALTER TABLE `Administrador`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indices de la tabla `Electrico`
--
ALTER TABLE `Electrico`
  ADD PRIMARY KEY (`ID_Elect`);

--
-- Indices de la tabla `Escapes`
--
ALTER TABLE `Escapes`
  ADD PRIMARY KEY (`ID_Escape`);

--
-- Indices de la tabla `Frenos`
--
ALTER TABLE `Frenos`
  ADD PRIMARY KEY (`ID_Frenos`);

--
-- Indices de la tabla `Motores`
--
ALTER TABLE `Motores`
  ADD PRIMARY KEY (`ID_Motor`);

--
-- Indices de la tabla `SYD`
--
ALTER TABLE `SYD`
  ADD PRIMARY KEY (`ID_SYD`);

--
-- Indices de la tabla `Tuning`
--
ALTER TABLE `Tuning`
  ADD PRIMARY KEY (`ID_Tuning`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Administrador`
--
ALTER TABLE `Administrador`
  MODIFY `ID_Admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `Electrico`
--
ALTER TABLE `Electrico`
  MODIFY `ID_Elect` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Escapes`
--
ALTER TABLE `Escapes`
  MODIFY `ID_Escape` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Frenos`
--
ALTER TABLE `Frenos`
  MODIFY `ID_Frenos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Motores`
--
ALTER TABLE `Motores`
  MODIFY `ID_Motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `SYD`
--
ALTER TABLE `SYD`
  MODIFY `ID_SYD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `Tuning`
--
ALTER TABLE `Tuning`
  MODIFY `ID_Tuning` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
