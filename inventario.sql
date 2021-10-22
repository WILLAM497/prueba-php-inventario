-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2021 a las 07:58:03
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

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
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(15) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `referencia` varchar(60) NOT NULL,
  `precio` int(20) NOT NULL,
  `peso` int(20) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `stock` int(20) NOT NULL,
  `fechacreacion` date NOT NULL,
  `fechaultimaventa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fechacreacion`, `fechaultimaventa`) VALUES
(1, 'lulo', 'lulo009', 1000, 1, 'fruta', 50, '2021-10-22', '2021-10-22'),
(2, 'lentejas', 'lentejas009', 2000, 1, 'granos', 14, '2021-10-22', '2021-10-21'),
(9, 'arroz', 'arroz009', 3000, 9, 'granos', 56, '2021-10-22', '2021-10-21'),
(11, 'papa', 'papa009', 1300, 1, 'verdura', 45, '2021-10-22', '2021-10-21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
