-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2022 a las 04:27:22
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `Id_Dpto` int(11) NOT NULL,
  `Nombre_Dpto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`Id_Dpto`, `Nombre_Dpto`) VALUES
(1, 'Articulos_Limpieza'),
(2, 'Articulos_Vehiculos'),
(3, 'Equipo_Laboratorio'),
(4, 'Material_Laboratorio'),
(5, 'Material_Oficina'),
(6, 'Equipo_seguridad'),
(7, 'Equipo_Oficina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `Id_entrada` int(11) NOT NULL,
  `Id_Dpto` int(11) NOT NULL,
  `Nombre_Producto` varchar(100) NOT NULL,
  `Tipo_Entrada` varchar(50) NOT NULL,
  `Fecha_Entrada` date NOT NULL,
  `Proovedor` varchar(50) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Id_Unidad` int(11) NOT NULL,
  `Costo_unitario` float NOT NULL,
  `Especificaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`Id_entrada`, `Id_Dpto`, `Nombre_Producto`, `Tipo_Entrada`, `Fecha_Entrada`, `Proovedor`, `Cantidad`, `Id_Unidad`, `Costo_unitario`, `Especificaciones`) VALUES
(1, 1, 'Aceite rojo', 'Compra', '2022-09-28', 'Super limpio', 300, 1, 10, 'aceite rojo para limpiar estufas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `Id_unidad` int(11) NOT NULL,
  `Clasifiacacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`Id_unidad`, `Clasifiacacion`) VALUES
(1, 'Mililitros'),
(2, 'Pieza'),
(3, 'Centimetros'),
(4, 'Par'),
(5, 'Gramos'),
(6, 'Frasco'),
(7, 'Rollo'),
(8, 'Botella'),
(9, 'Litros'),
(10, 'Lata'),
(11, 'Cajas'),
(12, 'Bolsa'),
(13, 'Madeja'),
(14, 'Juego'),
(15, 'Metro'),
(16, 'hojas'),
(17, 'Block'),
(18, 'Paquete');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`Id_Dpto`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`Id_entrada`),
  ADD KEY `Id_Dpto` (`Id_Dpto`),
  ADD KEY `Id_Unidad` (`Id_Unidad`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`Id_unidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `Id_Dpto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `Id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `Id_unidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `entradas_ibfk_1` FOREIGN KEY (`Id_Dpto`) REFERENCES `departamentos` (`Id_Dpto`),
  ADD CONSTRAINT `entradas_ibfk_2` FOREIGN KEY (`Id_Unidad`) REFERENCES `unidades` (`Id_unidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
