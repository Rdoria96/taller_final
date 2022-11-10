-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2022 a las 17:45:16
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `t_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_acciones`
--

CREATE TABLE `t_acciones` (
  `id` int(11) NOT NULL,
  `dsaccion` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `t_acciones`
--

INSERT INTO `t_acciones` (`id`, `dsaccion`, `id_rol`) VALUES
(1, 'GetPerfilUsuario', 1),
(2, 'UpdatePerfilUsuario', 1),
(3, 'GetCotizacionSeguroAutos', 1),
(4, 'GetCotizacionSeguroViviendas', 1),
(5, 'GetCotizacionSeguroPersonas', 1),
(6, 'GetCotizacionSeguroAutos', 2),
(7, 'GetCotizacionSeguroViviendas', 2),
(8, 'GetCotizacionSeguroPersonas', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_cotizacion`
--

CREATE TABLE `t_cotizacion` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `total_seguro` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dsciudad` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dscontrato` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `t_cotizacion`
--

INSERT INTO `t_cotizacion` (`id`, `usuario_id`, `total_seguro`, `dsciudad`, `dscontrato`) VALUES
(4, 10, '0', 'Monteria ', '6'),
(5, 10, '$212.000', 'Monteria ', '6'),
(6, 11, '$1.340.000', 'Monteria ', '6'),
(7, 11, '$1.340.000', 'Monteria ', '6'),
(8, 11, '$1.340.000', 'Monteria ', '6'),
(9, 11, '$1.340.000', 'Monteria ', '6'),
(10, 11, '$1.340.000', 'Monteria ', '6'),
(11, 11, '$1.340.000', 'Monteria ', '6'),
(12, 11, '$1.340.000', 'Monteria ', '6'),
(13, 11, '$1.340.000', 'Monteria ', '6'),
(14, 11, '$215.000', 'Sincelejo ', '6'),
(15, 11, '$215.000', 'Sincelejo ', '6'),
(16, 11, '$215.000', 'Sincelejo ', '6'),
(17, 11, '$215.000', 'Sincelejo ', '6'),
(18, 11, '$215.000', 'Sincelejo ', '6'),
(19, 11, '$215.000', 'Sincelejo ', '6'),
(20, 11, '$215.000', 'Sincelejo ', '6'),
(21, 11, '$215.000', 'Sincelejo ', '6'),
(22, 11, '$215.000', 'Sincelejo ', '6'),
(23, 11, '$215.000', 'Sincelejo ', '6'),
(24, 11, '$215.000', 'Sincelejo ', '6'),
(25, 11, '$215.000', 'Sincelejo ', '6'),
(26, 10, '$360.484', 'Monteria ', '3'),
(27, 10, '$345.511', 'Monteria ', '3'),
(28, 10, '$2.342.638', 'CataluÃ±a ', '6'),
(29, 10, '$2.342.638', 'CataluÃ±a ', '6'),
(30, 10, '$2.342.638', 'CataluÃ±a ', '6'),
(31, 10, '$2.342.638', 'CataluÃ±a ', '6'),
(32, 5, '$1.384.000', 'Portlant ', '12'),
(33, 5, '$1.384.000', 'Portlant ', '12'),
(34, 5, '$1.384.000', 'Portlant ', '12'),
(35, 5, '$1.384.000', 'Portlant ', '12'),
(36, 5, '$1.384.000', 'Portlant', '12'),
(37, 5, '$1.584.000', 'Chicago ', '12'),
(38, 5, '$1.620.000', 'Chicago ', '12'),
(39, 5, '$1.620.000', 'Chicago ', '12'),
(40, 5, '$1.620.000', 'Chicago ', '12'),
(41, 5, '$1.620.000', 'Chicago ', '12'),
(42, 5, '$1.620.000', 'Chicago ', '12'),
(43, 5, '$1.620.000', 'Chicago ', '12'),
(44, 5, '$5.090.000', 'CataluÃ±a ', '6'),
(45, 5, '$4.800.000', 'Monteria ', '6'),
(46, 5, '$151.590.151', 'Monteria ', '3'),
(47, 5, '$6.824.000', 'Portlant ', '12'),
(48, 5, '$232.471', 'prueba ', '12'),
(49, 5, '$123.271.081', 'Monteria ', '12'),
(50, 5, '$123.271.081', 'Monteria ', '12'),
(51, 5, '$123.271.081', 'Monteria ', '12'),
(52, 5, '$123.271.081', 'Monteria ', '12'),
(53, 5, '$123.123.196.997', 'Monterias ', '6'),
(54, 5, '$5.166.969.400', 'CataluÃ±a ', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_log`
--

CREATE TABLE `t_log` (
  `id` int(11) NOT NULL,
  `dsaccion` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha_accion` datetime NOT NULL,
  `ip` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `t_log`
--

INSERT INTO `t_log` (`id`, `dsaccion`, `usuario_id`, `fecha_accion`, `ip`) VALUES
(1, 'GetInicioSesion', 11, '2022-11-09 22:29:39', '::1'),
(2, 'InsertRegistroUsuarios', 13, '2022-11-09 23:00:33', 'ip'),
(3, 'GetInicioSesion', 11, '2022-11-09 23:01:21', '::1'),
(4, 'GetInicioSesion', 11, '2022-11-09 23:10:08', '::1'),
(5, 'GetInicioSesion', 11, '2022-11-09 23:10:08', '::1'),
(6, 'GetInicioSesion', 10, '2022-11-09 23:11:24', '::1'),
(7, 'GetInicioSesion', 10, '2022-11-09 23:41:33', '::1'),
(8, 'GetInicioSesion', 10, '2022-11-10 08:18:08', '::1'),
(14, 'GetInicioSesion', 10, '2022-11-10 08:27:11', '::1'),
(15, 'InsertRegistroUsuarios', 14, '2022-11-10 08:27:41', '::1'),
(16, 'GetInicioSesion', 10, '2022-11-10 08:27:56', '::1'),
(17, 'GetCotizacionUsuario', 10, '2022-11-10 08:31:51', '::1'),
(18, 'GetCotizacionUsuario', 10, '2022-11-10 08:40:53', '::1'),
(19, 'GetCotizacionUsuario', 10, '2022-11-10 08:45:16', '::1'),
(20, 'GetCotizacionUsuario', 10, '2022-11-10 08:48:32', '::1'),
(21, 'GetInicioSesion', 5, '2022-11-10 10:32:59', '::1'),
(22, 'GetCotizacionUsuario', 5, '2022-11-10 10:33:29', '::1'),
(23, 'GetCotizacionUsuario', 5, '2022-11-10 10:42:31', '::1'),
(24, 'GetCotizacionUsuario', 5, '2022-11-10 10:47:32', '::1'),
(25, 'GetCotizacionUsuario', 5, '2022-11-10 10:48:26', '::1'),
(26, 'GetCotizacionUsuario', 5, '2022-11-10 10:48:39', '::1'),
(27, 'GetCotizacionUsuario', 5, '2022-11-10 10:50:48', '::1'),
(28, 'GetCotizacionUsuario', 5, '2022-11-10 10:55:03', '::1'),
(29, 'GetCotizacionUsuario', 5, '2022-11-10 10:56:37', '::1'),
(30, 'GetCotizacionUsuario', 5, '2022-11-10 10:57:59', '::1'),
(31, 'GetCotizacionUsuario', 5, '2022-11-10 11:00:05', '::1'),
(32, 'GetCotizacionUsuario', 5, '2022-11-10 11:01:52', '::1'),
(33, 'GetCotizacionUsuario', 5, '2022-11-10 11:02:22', '::1'),
(34, 'GetInicioSesion', 5, '2022-11-10 11:05:47', '::1'),
(35, 'GetCotizacionUsuario', 5, '2022-11-10 11:06:33', '::1'),
(36, 'GetCotizacionUsuario', 5, '2022-11-10 11:09:28', '::1'),
(37, 'GetCotizacionUsuario', 5, '2022-11-10 11:10:04', '::1'),
(38, 'GetCotizacionUsuario', 5, '2022-11-10 11:11:42', '::1'),
(39, 'GetInicioSesion', 5, '2022-11-10 11:16:51', '::1'),
(40, 'GetCotizacionUsuario', 5, '2022-11-10 11:17:14', '::1'),
(41, 'GetCotizacionUsuario', 5, '2022-11-10 11:21:16', '::1'),
(42, 'GetCotizacionUsuario', 5, '2022-11-10 11:36:44', '::1'),
(43, 'GetCotizacionUsuario', 5, '2022-11-10 11:36:48', '::1'),
(44, 'GetCotizacionUsuario', 5, '2022-11-10 11:37:01', '::1'),
(45, 'GetCotizacionUsuario', 5, '2022-11-10 11:37:32', '::1'),
(46, 'GetCotizacionUsuario', 5, '2022-11-10 11:41:56', '::1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_rol`
--

CREATE TABLE `t_rol` (
  `id` int(11) NOT NULL,
  `dsnombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `t_rol`
--

INSERT INTO `t_rol` (`id`, `dsnombre`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_seguro`
--

CREATE TABLE `t_seguro` (
  `id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `valor_mensual_seguro` double NOT NULL,
  `valor_mensual_administracion` double NOT NULL,
  `duracion` int(11) NOT NULL,
  `es_comercial` bit(1) NOT NULL,
  `es_natural` bit(1) NOT NULL,
  `porcetaje` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_tipo`
--

CREATE TABLE `t_tipo` (
  `id` int(11) NOT NULL,
  `dsnombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuario`
--

CREATE TABLE `t_usuario` (
  `id` int(11) NOT NULL,
  `dsidentificacion` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dsnombres` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dsapellidos` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_ultimo_acceso` datetime NOT NULL,
  `ip_ultimo_acceso` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` bit(1) NOT NULL,
  `usuario` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `t_usuario`
--

INSERT INTO `t_usuario` (`id`, `dsidentificacion`, `dsnombres`, `dsapellidos`, `correo`, `fecha_creacion`, `fecha_ultimo_acceso`, `ip_ultimo_acceso`, `estado`, `usuario`, `contrasena`, `rol_id`) VALUES
(1, '1067945746', 'Andres', 'Perez', 'admin@gmail.com', '2022-11-06 07:04:25', '2022-11-06 07:05:15', '192.68.1.56', b'1', 'aperez1', '1234', 1),
(2, '1067945654', 'David', 'Martinez', 'david@gmail.com', '2022-11-06 07:07:23', '2022-11-06 07:08:15', '192.68.12.78', b'1', 'dmar2', '123', 2),
(3, '1033434', 'prueba', 'prueba', 'prueba@correo.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '192.168.9.1', b'0', 'prueba', '1234', 1),
(4, '24324234', 'richard', 'Doria', 'rddm096@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '192.168.1.1', b'1', 'rdoria', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(5, '78716423', 'DECAMERON Monteria ', 'asased', 'rddm096@gmail.com', '2022-11-06 23:10:52', '2022-11-06 23:10:52', '::1', b'0', 'rdoria', '517855babcc6d6c86c970cf46a16ec1c', 2),
(6, '1231233', 'Prueba', 'prue', 'smail@localhost.com', '2022-11-06 23:17:23', '2022-11-06 23:17:23', '::1', b'1', 'xsa', '202cb962ac59075b964b07152d234b70', 1),
(7, '24324234', 'DECAMERON Monteria ', 'wewqe', 'smail@localhost.com', '2022-11-06 23:19:40', '2022-11-06 23:19:40', '<br />\r\n<b>Noti', b'1', 'rdoria', '517855babcc6d6c86c970cf46a16ec1c', 2),
(8, '78716423', 'richard', 'Montalvo', 'rddm096@gmail.com', '2022-11-06 23:23:18', '2022-11-06 23:23:18', '::1', b'1', 'rdoria', '517855babcc6d6c86c970cf46a16ec1c', 1),
(9, '78716423', 'DECAMERON Monteria ORILLA DEL MAR', 'Montalvo', 'rddm096@gmail.com', '2022-11-06 23:28:04', '2022-11-06 23:28:04', '::1', b'1', 'rdoria', '517855babcc6d6c86c970cf46a16ec1c', 1),
(10, '2344423', 'prueba admin', 'prueba', 'smail@localhost.com', '2022-11-09 00:11:30', '2022-11-09 00:11:30', 'UNKNOWN', b'1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(11, '78716423', 'user', 'user', 'rddm096@gmail.com', '2022-11-09 00:11:55', '2022-11-09 00:11:55', 'UNKNOWN', b'1', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2),
(12, '1084556643', 'Richard ', 'Perz', 'polo@polo.com', '2022-11-09 22:52:51', '2022-11-09 22:52:51', '<br />\r\n<b>Noti', b'1', 'adminas', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(13, '09965423', 'pepito', 'perez', 'pepyo@gjmadad.com', '2022-11-09 23:00:33', '2022-11-09 23:00:33', '<br />\r\n<b>Noti', b'1', 'pepito', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(14, '78716423', 'chaker', 'chaker', 'rddm096@gmail.com', '2022-11-10 08:27:41', '2022-11-10 08:27:41', '<br />\r\n<b>Noti', b'1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_acciones`
--
ALTER TABLE `t_acciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ACCION_ROL` (`id_rol`);

--
-- Indices de la tabla `t_cotizacion`
--
ALTER TABLE `t_cotizacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_COTIZA_USUARIO` (`usuario_id`);

--
-- Indices de la tabla `t_log`
--
ALTER TABLE `t_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USU_LOG` (`usuario_id`);

--
-- Indices de la tabla `t_rol`
--
ALTER TABLE `t_rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_seguro`
--
ALTER TABLE `t_seguro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_SEGUR_TIPO_SEGUR` (`tipo_id`);

--
-- Indices de la tabla `t_tipo`
--
ALTER TABLE `t_tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USUARIO_ROL` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_acciones`
--
ALTER TABLE `t_acciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `t_cotizacion`
--
ALTER TABLE `t_cotizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `t_log`
--
ALTER TABLE `t_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `t_rol`
--
ALTER TABLE `t_rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `t_seguro`
--
ALTER TABLE `t_seguro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t_tipo`
--
ALTER TABLE `t_tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_acciones`
--
ALTER TABLE `t_acciones`
  ADD CONSTRAINT `FK_ACCION_ROL` FOREIGN KEY (`id_rol`) REFERENCES `t_rol` (`id`);

--
-- Filtros para la tabla `t_cotizacion`
--
ALTER TABLE `t_cotizacion`
  ADD CONSTRAINT `PK_COTIZA_USUARIO` FOREIGN KEY (`usuario_id`) REFERENCES `t_usuario` (`id`);

--
-- Filtros para la tabla `t_log`
--
ALTER TABLE `t_log`
  ADD CONSTRAINT `FK_USU_LOG` FOREIGN KEY (`usuario_id`) REFERENCES `t_usuario` (`id`);

--
-- Filtros para la tabla `t_seguro`
--
ALTER TABLE `t_seguro`
  ADD CONSTRAINT `PK_SEGUR_TIPO_SEGUR` FOREIGN KEY (`tipo_id`) REFERENCES `t_tipo` (`id`);

--
-- Filtros para la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD CONSTRAINT `FK_USUARIO_ROL` FOREIGN KEY (`rol_id`) REFERENCES `t_rol` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
