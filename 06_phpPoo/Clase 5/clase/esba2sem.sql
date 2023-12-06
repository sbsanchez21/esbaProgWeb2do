-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2023 a las 00:57:35
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `esba2sem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oradores`
--

CREATE TABLE `oradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `fotoPerfil` varchar(500) DEFAULT NULL,
  `temas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id`, `nombre`, `apellido`, `email`, `dni`, `fotoPerfil`, `temas`) VALUES
(1, 'Pablo', 'Juarez', 'jp@gmail.com', 23333222, 'https://imgdb.net/storage/uploads/173b3da0879d1e271b3284b6603364e9ac6f4bdf1eca4c668f9f3800466bc615.jpg', 'Inteligencia Artificial, IoT, Realidad Aumentada, Big DAta'),
(2, 'Ada', 'Lovelace', 'rperr@gmail.com', 25654654, 'https://imgdb.net/storage/uploads/f443e2b224b2574ee557f5fc5663e8bc0957c5db3d6b0a8ee85b08630557737b.jpeg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit illum laboriosam quaerat quod ab nobis, corporis aut iusto debitis blanditiis tempora fugiat quae, nihil doloremque sed corrupti eaque adipisci possimus.'),
(3, 'Kevin', 'Lorenz', 'raizen@gmail.com', 25456654, 'https://imgdb.net/storage/uploads/80eee944aad1ca133afd5f64e95069ef411ea60d845497dbc9f5bf2916524ad8.png', 'Microsoft, Windows, Bugs, Fat32'),
(4, 'Pablo', 'Suarez', 'psuarez@gmail.com', 14454654, 'https://imgdb.net/storage/uploads/0b1302c12d8ed355c5b8891ccc7c484f48f5a2e18f96e1b55b7ab5fc0d8f6e9f.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit illum laboriosam quaerat quod ab nobis, corporis aut iusto debitis blanditiis tempora fugiat quae, nihil doloremque sed corrupti eaque adipisci possimus.'),
(10, 'Oscar', 'Wilde', 'ow@gmail.com', 5, 'http://localhost/esba2023-2/view/images/ba1.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit illum laboriosam quaerat quod ab nobis, corporis aut iusto debitis blanditiis tempora fugiat quae, nihil doloremque sed corrupti eaque adipisci possimus.'),
(11, 'Ramon', 'Lorenz', 'rj@gmail.com', 6, 'https://imgdb.net/storage/uploads/9c95847209d3361202cfa6b30ac31145a8cfe91277c46dc88bc262a68323a82f.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit illum laboriosam quaerat quod ab nobis, corporis aut iusto debitis blanditiis tempora fugiat quae, nihil doloremque sed corrupti eaque adipisci possimus.'),
(13, 'Kevin', 'Nuñuez', 'kj@gmail.com', NULL, 'https://imgdb.net/storage/uploads/770e03d3a088b91ba28ccd77539d72810365e92e208c9760e8b3f8cc350ab6f8.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit illum laboriosam quaerat quod ab nobis, corporis aut iusto debitis blanditiis tempora fugiat quae, nihil doloremque sed corrupti eaque adipisci possimus.'),
(14, 'Juan', 'Estevez', 'je@gmail.com', NULL, 'https://imgdb.net/storage/uploads/c6b94094b7f98624ed3ca2de61b9c6588cd9d7af397484c646d0c2ea020fbbe7.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit illum laboriosam quaerat quod ab nobis, corporis aut iusto debitis blanditiis tempora fugiat quae, nihil doloremque sed corrupti eaque adipisci possimus.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tematica`
--

CREATE TABLE `tematica` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `idOrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tematica`
--

INSERT INTO `tematica` (`id`, `nombre`, `descripcion`, `idOrador`) VALUES
(1, 'IoT', 'Informática de las cosas, parte 1', 3),
(2, 'Realidad Aumentada', 'RA en Google maps', 3),
(3, 'Programación Web', 'Programación web para gafas con realidad aumentada', 2),
(4, 'Java', 'Java en electrodomésticos', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`, `rol`) VALUES
(1, 'jperez@gmail.com', '123', 'user'),
(2, 'admin@gmail.com', '123', 'admin'),
(3, 'mmyderscough2', 'oO9*$AA3fgug?d(L', 'user'),
(4, 'aelham3', 'xO2|iD<)O', 'user'),
(5, 'ccareswell4', 'gX8.mV}BV6TJK!xJ', 'user'),
(6, 'lgentery5', 'mZ1.R/Jsl1imVB', 'user'),
(7, 'jcroix6', 'aU7}A?ev', 'user'),
(8, 'cbilbie7', 'dK0,lw*`%BxW', 'user'),
(9, 'omcjury8', 'aM7|IgNRUk.r0s#', 'user'),
(10, 'hdeville9', 'oE9~L6r(r53TX', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_dni` (`dni`),
  ADD KEY `idx_ape` (`apellido`);

--
-- Indices de la tabla `tematica`
--
ALTER TABLE `tematica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idOrador` (`idOrador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tematica`
--
ALTER TABLE `tematica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
