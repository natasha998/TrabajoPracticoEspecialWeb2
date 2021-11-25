-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2021 a las 03:07:55
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(55) NOT NULL,
  `tipo_categoria` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `tipo_categoria`) VALUES
(21, 'nueva', 'categoria'),
(22, 'Prisioner', 'seda'),
(23, 'Noche', 'Encaje');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_coment` int(55) NOT NULL,
  `id_producto` int(255) NOT NULL,
  `cometario` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `puntaje` int(11) NOT NULL,
  `id_user` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_coment`, `id_producto`, `cometario`, `fecha`, `puntaje`, `id_user`) VALUES
(3, 29, 'Bueno', '2021-11-04', 5, 24),
(4, 30, 'Malo', '2021-11-04', 1, 31),
(5, 30, 'Malo', '2021-11-04', 1, 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_p` varchar(55) NOT NULL,
  `marca_p` varchar(55) NOT NULL,
  `precio_p` int(155) NOT NULL,
  `stock_p` int(155) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_p`, `marca_p`, `precio_p`, `stock_p`, `id_categoria`) VALUES
(29, 'Maneskin', 'One wet', 122, 122, 21),
(30, 'Lolita', 'one west', 3000, 1, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(55) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `rol_user` varchar(55) NOT NULL,
  `date_user` date NOT NULL,
  `pass_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `name_user`, `rol_user`, `date_user`, `pass_user`) VALUES
(21, 'useradmi', 'usuario administrador', 'administrador', '2021-11-01', '$2y$10$45IstHBsZoz13SkxOAaz1O6XhFC.P5OpJaHMjeSfJNiAs.n0QPGXa'),
(24, 'nagara@gmail.com', 'natasha agara', 'administrador', '1998-12-28', '$2y$10$XDH4SuWoQef5LoqfoTd2V.bQVIUtWlebA6ivCCbQEgq6GAIK0hkqe'),
(26, 'na@gmail.com', 'Natasha ', 'usuario', '2021-11-25', '$2y$10$caBQDEV8BSCg8790E3O70uFJQwSwovLbGRGjrQo60DnfrhG4p.bPa'),
(27, 'pepe@gmail.com', 'pepe', 'usuario', '2020-07-16', '$2y$10$AB4N1e4g.OrGsEIaHKZyk.NrOvcjV9oSkvhC0saaMQg/NT7g9pRTy'),
(28, 'ee@gmail.com', 'sergio', 'usuario', '2021-11-17', '$2y$10$c75eSW1dRMaemWGy8xXgbumzeQXLLgQUlFqnkmAN5aBvjfJqnKen2'),
(29, 'xxx@gmail.com', 'xxx', 'usuario', '2021-11-18', '$2y$10$hVRFma77a8G09bwZrcN8z.cAoahOtPq8xlul56kO9zZuFkGsH97LC'),
(30, 'top@top.com', 'tyler', 'usuario', '2021-11-03', '$2y$10$jEhGnpdzzmnFOFaTcC9P5.hFsJS7wy/JaRrFjX8q8d2gzAd9yjigK'),
(31, 'stalin@gmail.com', 'stalin', 'usuario', '2008-04-03', '$2y$10$07z7iQKNvaK.C/.4paFcYOjPS36D/Grl/ckSkKIKYS/oPfI9K3IO.'),
(32, 'xb@gmail.com', 'bb', 'usuario', '2021-11-03', '$2y$10$l5hm2c/utpJXMYN4ovCWL.UuEezfFfKV8I1IxIg19vxbpR/lAMIz.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_coment`),
  ADD KEY `usuario` (`id_producto`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `FK_id_categoria` (`id_categoria`) USING BTREE;

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_coment` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
