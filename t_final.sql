-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2022 a las 23:32:58
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
  `total_seguro` double NOT NULL,
  `id_seguro` int(11) NOT NULL,
  `dsciudad` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dscorreo` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dstelefono` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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
(3, '1033434', 'prueba', 'prueba', 'prueba@correo.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '192.168.9.1', b'1', 'prueba', '1234', 1),
(4, '24324234', 'richard', 'Doria', 'rddm096@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '192.168.1.1', b'1', 'rdoria', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(5, '78716423', 'DECAMERON Monteria ', 'asased', 'rddm096@gmail.com', '2022-11-06 23:10:52', '2022-11-06 23:10:52', '::1', b'1', 'rdoria', '517855babcc6d6c86c970cf46a16ec1c', 2),
(6, '1231233', 'Prueba', 'prue', 'smail@localhost.com', '2022-11-06 23:17:23', '2022-11-06 23:17:23', '::1', b'1', 'xsa', '202cb962ac59075b964b07152d234b70', 1),
(7, '24324234', 'DECAMERON Monteria ', 'wewqe', 'smail@localhost.com', '2022-11-06 23:19:40', '2022-11-06 23:19:40', '<br />\r\n<b>Noti', b'1', 'rdoria', '517855babcc6d6c86c970cf46a16ec1c', 2),
(8, '78716423', 'richard', 'Montalvo', 'rddm096@gmail.com', '2022-11-06 23:23:18', '2022-11-06 23:23:18', '::1', b'1', 'rdoria', '517855babcc6d6c86c970cf46a16ec1c', 1),
(9, '78716423', 'DECAMERON Monteria ORILLA DEL MAR', 'Montalvo', 'rddm096@gmail.com', '2022-11-06 23:28:04', '2022-11-06 23:28:04', '::1', b'1', 'rdoria', '517855babcc6d6c86c970cf46a16ec1c', 1);

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
  ADD KEY `PK_COTIZA_USUARIO` (`usuario_id`),
  ADD KEY `PK_COTIZACI_SEGURO` (`id_seguro`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t_log`
--
ALTER TABLE `t_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  ADD CONSTRAINT `PK_COTIZACI_SEGURO` FOREIGN KEY (`id_seguro`) REFERENCES `t_seguro` (`id`),
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
