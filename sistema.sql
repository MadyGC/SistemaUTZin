-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2022 a las 04:41:38
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `id` int(11) NOT NULL,
  `Codigo` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Marca_modelo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Unidad` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `Entradas` int(11) NOT NULL,
  `Salidas` int(11) NOT NULL,
  `Existencias` int(11) NOT NULL,
  `Precio_compra` decimal(10,2) NOT NULL,
  `Valor_estimado` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`id`, `Codigo`, `Descripcion`, `Marca_modelo`, `Unidad`, `Entradas`, `Salidas`, `Existencias`, `Precio_compra`, `Valor_estimado`) VALUES
(9, 'ACA003', 'REFRESCO SPRITE', 'LIMON', 'PIEZA', 1, 0, 0, '1000.00', '0.00'),
(10, 'ACA004', 'REFRESCO SPRITE', 'LIMON', 'PIEZA', 0, 0, 0, '10.00', '0.00'),
(11, 'ACA005', 'REFRESCO  EN LATA  600 ML.', 'FANTA', 'PIEZA', 0, 0, 2, '12.76', '25.52'),
(17, 'APA001', 'ARILLO METALICO 100/PZ', '', 'CAJA', 0, 0, 4, '125.00', '500.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `papeleria`
--

CREATE TABLE `papeleria` (
  `id` int(10) NOT NULL,
  `Codigo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Marca_modelo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Unidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Entradas` int(10) NOT NULL,
  `Salidas` int(10) NOT NULL,
  `Existencias` int(10) NOT NULL,
  `Precio_compra` decimal(10,2) NOT NULL,
  `Valor_estimado` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `papeleria`
--

INSERT INTO `papeleria` (`id`, `Codigo`, `Descripcion`, `Marca_modelo`, `Unidad`, `Entradas`, `Salidas`, `Existencias`, `Precio_compra`, `Valor_estimado`) VALUES
(5, 'APA001', 'ARILLO METALICO 100/PZ', 'ZEBRA', 'CAJA', 0, 0, 4, '29.02', '29.02'),
(6, 'APA002', 'ARILLO METALICO CAJA CON 20 PZAS    1/4', 'MASTER LOOP', 'PIEZA', 0, 0, 1, '29.02', '29.02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `tipo_usuario`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador ', 1),
(2, 'usuario', 'b665e217b51994789b02b1838e730d6b93baa30f', 'Usuario 1', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `papeleria`
--
ALTER TABLE `papeleria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `papeleria`
--
ALTER TABLE `papeleria`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
