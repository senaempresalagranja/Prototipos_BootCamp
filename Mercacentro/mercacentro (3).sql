-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-12-2017 a las 16:49:11
-- Versión del servidor: 5.7.20-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mercacentro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `are_codigo` int(11) NOT NULL,
  `are_sucursal` int(11) NOT NULL,
  `are_nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `are_ubicacion` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `are_estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`are_codigo`, `are_sucursal`, `are_nombre`, `are_ubicacion`, `are_estado`) VALUES
(1, 1, 'gerencia', 'centro', 'Activo'),
(2, 2, 'bodega', 'centro', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cli_identificacion` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cli_nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cli_apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cli_correo` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cli_celular` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `cli_telefono` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `cli_estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cli_identificacion`, `cli_nombre`, `cli_apellido`, `cli_correo`, `cli_celular`, `cli_telefono`, `cli_estado`) VALUES
('1110469034', 'geisson', 'cortes', 'gdcortes@misena.edu.co', '346696693', '235376', 'Inactivo'),
('654328765', 'lkjhgfd', 'dfmlkjh', 'dsfhk46', '9876543', '2345678', 'Activo'),
('987654321', 'David', 'Cortes', 'gfds@sdfbn', '765432', '234567', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrs`
--

CREATE TABLE `pqrs` (
  `consecutivo` int(11) NOT NULL,
  `tipo_pqrs` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sucursal_cod` int(11) NOT NULL,
  `texto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pqrs_evidencia` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_cliente` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date DEFAULT NULL,
  `id_usuario` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `cod_area` int(11) DEFAULT NULL,
  `procedimiento` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `pqrs_evidencia_p` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_respuesta` date DEFAULT NULL,
  `observacion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `pqrs_calificacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pqrs`
--

INSERT INTO `pqrs` (`consecutivo`, `tipo_pqrs`, `sucursal_cod`, `texto`, `pqrs_evidencia`, `id_cliente`, `fecha_registro`, `id_usuario`, `cod_area`, `procedimiento`, `pqrs_evidencia_p`, `fecha_respuesta`, `observacion`, `pqrs_calificacion`, `estado`) VALUES
(2, 'Peticion', 5, 'alimentes en mal estado ', NULL, '1110469034', '2017-12-12', '1110469034', 2, 'toki tienen que pagar lo que se robo ', NULL, '2017-12-19', 'debe hacerlo en 15 dias', NULL, 'Respondido'),
(3, 'Felicitacion', 6, 'mala atenciÃ³n por el personal de cajas', '', '1110469034', '2017-12-13', '1110469034', 1, NULL, NULL, NULL, NULL, NULL, 'Asignado'),
(4, 'Queja', 6, 'mala atenciÃ³n por el personal de piso', '', '1110469034', '2017-12-14', '1110469034', 1, NULL, NULL, NULL, NULL, NULL, 'Asignado'),
(5, 'Reclamo', 6, 'mala atenciÃ³n por el personal de parqueadero', '', '1110469034', '2017-12-15', '1110469034', 1, 'hola', NULL, '2019-12-17', 'chao', NULL, 'Respondido'),
(6, 'Sugerencia', 7, 'sdkfvnavbasnvsafvhsfahvsafiu', '', '1110469034', '2017-12-16', '1110469034', 1, NULL, NULL, NULL, NULL, NULL, 'Enviado'),
(7, 'Felicitacion', 7, 'sdkfvnavbasnvsafvhsfahvsafiu', '', '1110469034', '2017-12-17', '1110469034', 2, NULL, NULL, NULL, NULL, NULL, 'Asignado'),
(13, 'Pregunta', 5, 'ADEYESIREKJSTEYAERJT', '1110469034.jpg', '1110469034', '2017-12-18', '1110469034', 2, NULL, NULL, NULL, NULL, NULL, 'Asignado'),
(14, 'Queja', 5, 'sahtjutrkluyrshare', '1110469034.jpg', '1110469034', '2017-12-18', '1110469034', 1, NULL, NULL, NULL, NULL, NULL, 'Asignado'),
(15, 'Reclamo', 5, 'hola', '1110469034.jpg', '1110469034', '2017-12-18', NULL, NULL, NULL, NULL, NULL, '', NULL, 'Enviado'),
(16, 'Reclamo', 5, 'hola', '1110469034.png', '1110469034', '2017-12-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Enviado'),
(17, 'Sugerencia', 5, 'chao', '1110469034.jpg', '1110469034', '2017-12-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Enviado'),
(18, 'Peticion', 5, 'dmbkdsbhsn', '1110469034.jpg', '1110469034', '2017-12-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Enviado'),
(19, 'Queja', 5, 'hola', '1110469034.jpg', '1110469034', '2017-12-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Enviado'),
(20, 'Peticion', 7, '<sdafsdhÃ±oilkjhdg', '1110469034.jpg', '1110469034', '2017-12-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Enviado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `suc_codigo` int(11) NOT NULL,
  `suc_nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `suc_direccion` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `suc_telefono` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `suc_celular` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `suc_estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`suc_codigo`, `suc_nombre`, `suc_direccion`, `suc_telefono`, `suc_celular`, `suc_estado`) VALUES
(5, 'Mercacentro1', 'Centro centro', '245667', '2567890345', 'Inactivo'),
(6, 'Mercacentro 1', 'Carrera 3 NÂ° 3-65', '2345678', '3216352548', 'Activo'),
(7, 'Carrera 3 NÂ° 3-65', '2345678', '3216352548', 'Activo', 'Activo'),
(8, 'Mercacentro 1', 'Carrera 3 NÂ° 3-65', '2345678', '3216352548', 'Activo'),
(10, 'jhstjs', 'dsjj', 'dsjj', 'Activo', 'Activo'),
(12, 'mercacentro 1o', 'poblado', '2702057', '3124560923', 'Activo'),
(13, 'mercacentro 10', 'Poblado', '2702057', '3216352548', 'Activo'),
(14, 'centro 123', 'Carrera 3 NÂ° 3-65', '2702057', '3216352548', 'Activo'),
(15, 'don prospero', 'calle 60', '3458762', '876543456789', 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `tusu_codigo` int(11) NOT NULL,
  `tusu_nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `tusu_estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`tusu_codigo`, `tusu_nombre`, `tusu_estado`) VALUES
(1, 'administrador', 'Activo'),
(2, 'caja', 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_identificacion` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usu_tipo` int(11) NOT NULL,
  `usu_area` int(11) NOT NULL,
  `usu_nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usu_apellido` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usu_correo` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usu_celular` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usu_telefono` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_clave` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usu_estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_identificacion`, `usu_tipo`, `usu_area`, `usu_nombre`, `usu_apellido`, `usu_correo`, `usu_celular`, `usu_telefono`, `usu_clave`, `usu_estado`) VALUES
('1110469034', 1, 1, 'Geisson David', 'Cortes Arevalo', 'gdcortes@misena.edu.co', '3202404753', '2702057', '123456', 'Activo'),
('88012867764', 2, 1, ' David', 'Cortes ', 'gdcortes@misena.edu.co', '3202404753', '2702057', '12345678', 'Inactivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`are_codigo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_identificacion`);

--
-- Indices de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD PRIMARY KEY (`consecutivo`),
  ADD KEY `sucursal_cod` (`sucursal_cod`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `cod_area` (`cod_area`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `sucursal_cod_2` (`sucursal_cod`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`suc_codigo`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`tusu_codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_identificacion`),
  ADD KEY `usu_tipo` (`usu_tipo`),
  ADD KEY `usu_area` (`usu_area`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  MODIFY `consecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `suc_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD CONSTRAINT `pqrs_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`cli_identificacion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pqrs_ibfk_2` FOREIGN KEY (`cod_area`) REFERENCES `area` (`are_codigo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pqrs_ibfk_4` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`usu_identificacion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pqrs_ibfk_5` FOREIGN KEY (`sucursal_cod`) REFERENCES `sucursal` (`suc_codigo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`usu_tipo`) REFERENCES `tipo_usuario` (`tusu_codigo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`usu_area`) REFERENCES `area` (`are_codigo`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
