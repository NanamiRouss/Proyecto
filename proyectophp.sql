-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2023 a las 08:50:20
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectophp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `correo`, `nombre`, `cargo`, `usuario`, `clave`) VALUES
(1, 'calderarossana@gmail.com', 'Rossana Caldera', 'Desarrolladora', 'Ross', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `ve_id` int(11) NOT NULL,
  `ve_placa` varchar(10) NOT NULL,
  `ve_tipo` varchar(20) NOT NULL,
  `ve_marca` varchar(50) NOT NULL,
  `ve_entrada` datetime NOT NULL,
  `ve_salida` datetime DEFAULT NULL,
  `ve_color` varchar(50) NOT NULL,
  `ve_estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`ve_id`, `ve_placa`, `ve_tipo`, `ve_marca`, `ve_entrada`, `ve_salida`, `ve_color`, `ve_estado`) VALUES
(1, 'CDK345', 'Carro', 'Mazda', '2023-06-21 00:00:00', NULL, 'Azul', 1),
(2, 'KRD248', 'Camión', 'Suzuki', '2023-06-20 00:00:00', NULL, 'Verde', 0),
(3, 'JSN847', 'Carro', 'KIA', '2023-06-19 15:08:00', NULL, 'Gris', 1),
(4, 'SEH254', 'Carro', 'HB', '2023-06-21 17:25:00', NULL, 'Negro', 1),
(5, 'CDK345', 'Carro', 'Mazda', '2023-06-21 00:00:00', NULL, 'azul', 1),
(6, 'CDK345', 'Carro', 'Mazda', '2023-06-21 00:00:00', NULL, 'Azul', 1),
(7, 'CDK345', 'Carro', 'Mazda', '2023-06-21 00:00:00', NULL, 'Gris', 1),
(8, 'KRD248', 'Camión', 'Suzuki', '2023-06-20 00:00:00', NULL, 'blanco', 0),
(9, 'CDK345', 'Carro', 'Mazda', '2023-06-21 00:00:00', NULL, 'Verde', 1),
(10, 'CDK345', 'Carro', 'Mazda', '2023-06-21 00:00:00', NULL, 'Azul', 1),
(11, 'AST9', 'Camioneta', 'KGF', '2023-06-21 17:25:00', NULL, 'Blanca', 1),
(12, '555', 'wr', 'wr', '2023-06-21 17:25:00', NULL, 'wer', 1),
(13, 'CDK345', 'Carro', 'Mazda', '2023-06-21 00:00:00', NULL, 'Azul', 1),
(14, 'wer', 'wr', 'wr', '2023-06-21 17:25:00', NULL, 'wer', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`ve_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `ve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
