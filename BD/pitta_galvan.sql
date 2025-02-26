-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2025 a las 15:01:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pitta_galvan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `pl_Id` int(11) NOT NULL,
  `pl_destino` text NOT NULL,
  `pl_descripcion` text NOT NULL,
  `pl_precio` int(11) NOT NULL,
  `pl_tipo` text NOT NULL,
  `pl_imagen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`pl_Id`, `pl_destino`, `pl_descripcion`, `pl_precio`, `pl_tipo`, `pl_imagen`) VALUES
(22, 'San Andres', 'Plan San Andres 3 días 2 noches, todo incluido', 1000000, 'nacional', 'SA_1.jpg'),
(19, 'Cartagena', 'Plan Santa Marta 3 días 2 noches, todo incluido', 500000, 'nacional', 'Articulo3.jpg'),
(20, 'Cartagena', 'Plan Santa Marta 3 días 2 noches, todo incluido', 500000, 'nacional', 'Articulo2.jpg'),
(23, 'Abrego', 'Plan Ábrego 7 días 6 noches todo incluido', 2000000, 'nacional', 'Ocaña.jpg'),
(24, 'Santa Marta', 'Plan Santa Marta 3 días 2 noches, todo incluido', 5000000, 'nacional', 'banner.jpg'),
(25, 'París', 'Plan Parí 7 días 6 noches todo incluido', 5000000, 'internacional', 'banner .jpg'),
(26, 'El Congo', 'El Congo, 7 días, todo incluido', 5600000, 'internacional', 'Congo.jpg'),
(42, 'Amazonas', 'Vacacionales Fin Año', 5000000, 'nacional', 'descarga.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`pl_Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `pl_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
