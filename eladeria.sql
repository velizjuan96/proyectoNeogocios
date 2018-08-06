-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2018 a las 08:15:49
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eladeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `telefono` int(30) NOT NULL,
  `tipo_usuario` varchar(30) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `identidad` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `sexo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Id` int(11) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` int(10) NOT NULL,
  `fecha_venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id`, `producto`, `cantidad`, `precio`, `fecha_venta`) VALUES
(64, 'fgfgfg', 454, 45545, '2018-08-03'),
(66, 'fgfgfg', 454, 45545, '2018-08-03'),
(67, 'sdf', 34343434, 34343434, '2018-08-03'),
(68, 'sdf', 34343434, 34343434, '2018-08-03'),
(69, 'sdf', 34343434, 34343434, '2018-08-03'),
(70, 'sdf', 34343434, 34343434, '2018-08-03'),
(71, 'sdf', 34343434, 34343434, '2018-08-03'),
(72, 'sdf', 34343434, 34343434, '2018-08-03'),
(73, 'sdf', 34343434, 34343434, '2018-08-03'),
(74, 'sdf', 34343434, 34343434, '2018-08-03'),
(76, 'sdf', 34343434, 34343434, '2018-08-03'),
(77, 'elados', 28, 23, '2018-08-04'),
(78, 'elados', 28, 23, '2018-08-04'),
(79, 'elados', 23, 566, '2018-08-03'),
(80, 'elados', 23, 566, '2018-08-03'),
(81, 'elados', 28, 23, '2018-08-03'),
(82, 'elados', 28, 23, '2018-08-03'),
(83, 'esquimo', 5, 23, '2018-08-03'),
(84, 'esquimo', 5, 23, '2018-08-03'),
(85, 'esquimo', 5, 23, '2018-08-03'),
(86, 'esquimo', 5, 23, '2018-08-03'),
(87, 'elados', 28, 26, '2018-08-05'),
(88, 'elados', 28, 26, '2018-08-05'),
(89, 'elados', 28, 23, '2018-08-03'),
(90, 'elados', 28, 23, '2018-08-03'),
(91, 'dfdg', 28, 23, '2018-08-03'),
(92, 'dfdg', 28, 23, '2018-08-03'),
(93, 'dfdg', 28, 23, '2018-08-03'),
(94, 'dfdg', 28, 23, '2018-08-03'),
(95, 'elados', 28, 26, '2018-08-03'),
(96, 'elados', 28, 26, '2018-08-03'),
(97, 'elados', 5, 26, '2018-08-03'),
(98, 'elados', 5, 26, '2018-08-03'),
(99, 'esquimo', 28, 26, '2018-08-03'),
(100, 'esquimo', 28, 26, '2018-08-03'),
(101, 'elados', 28, 23, '2018-08-05'),
(102, 'elados', 28, 23, '2018-08-05'),
(103, 'esquimo', 28, 23, '2018-08-03'),
(104, 'esquimo', 28, 23, '2018-08-03'),
(105, 'elados', 28, 23, '2018-08-03'),
(106, 'elados', 28, 23, '2018-08-03'),
(107, 'galletas', 28, 566, '2018-08-04'),
(108, 'galletas', 28, 566, '2018-08-04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
