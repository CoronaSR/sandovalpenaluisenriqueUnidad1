-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2023 a las 21:36:15
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `programacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buzon`
--

CREATE TABLE `buzon` (
  `id` int(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `buzon`
--

INSERT INTO `buzon` (`id`, `correo`, `comentario`) VALUES
(1, 'dary_nel_3@hotmail.com', 'd'),
(2, 'dary_nel_3@hotmail.com', 's'),
(3, 'dary_nel_3@hotmail.com', 's'),
(4, 'dary_nel_3@hotmail.com', 'd'),
(5, 'dary_nel_3@hotmail.com', 'd'),
(6, 'dary_nel_3@hotmail.com', 'o'),
(7, 'dary_nel_3@hotmail.com', 'g'),
(8, 'dary_nel_3@hotmail.com', 'g'),
(9, 'dary_nel_3@hotmail.com', 'l'),
(10, 'dary_nel_3@hotmail.com', 'w'),
(11, 'dary_nel_3@hotmail.com', 'p'),
(12, 'darinel.teodoro@gmail.com', 'Hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `pdf` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `nombre`, `pdf`, `img`) VALUES
(1, 'Asylum', 'pdf_Libros/Asylum.pdf', 'img_Libros/imagen3.jpeg'),
(2, 'J.-R.-R.-Tolkien-A-Biography-2000', 'pdf_Libros/J.-R.-R.-Tolkien-A-Biography-2000.pdf', 'img_Libros/imagen1.jpeg'),
(3, 'El Fin de Mr Y', 'pdf_Libros/El-Fin-de-Mr-Y.pdf', 'img_Libros/imagen4.jpeg'),
(4, 'El Resplandor', 'pdf_Libros/El-Resplandor.pdf', 'img_Libros/imagen6.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(2, 'darinel', 'darinel.teodoro@gmail.com', 'dary');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `buzon`
--
ALTER TABLE `buzon`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `buzon`
--
ALTER TABLE `buzon`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
