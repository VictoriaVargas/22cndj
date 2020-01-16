-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-01-2019 a las 17:30:19
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `21cndj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `id_sede` int(11) NOT NULL,
  `academia` varchar(64) DEFAULT NULL,
  `nombre` varchar(64) NOT NULL,
  `paterno` varchar(64) NOT NULL,
  `materno` varchar(64) NOT NULL,
  `fecha_nac` date NOT NULL,
  `telefono` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `facebook` varchar(64) NOT NULL,
  `pais` varchar(64) NOT NULL,
  `estado` varchar(64) NOT NULL,
  `ciudad` varchar(64) NOT NULL,
  `como_contactar` varchar(64) DEFAULT NULL,
  `paquete` varchar(16) DEFAULT NULL,
  `nivel` varchar(64) NOT NULL,
  `deposito` float NOT NULL,
  `fecha_pago` date NOT NULL,
  `forma_pago` varchar(16) NOT NULL,
  `numero_folio` varchar(16) NOT NULL,
  `lugar_pago` varchar(16) NOT NULL,
  `ciudad_pago` varchar(64) NOT NULL,
  `file_comprobante` varchar(128) NOT NULL,
  `token_qr` varchar(16) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `id_director` int(11) DEFAULT NULL,
  `observaciones` varchar(256) DEFAULT NULL,
  `status_asistencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_encuentro`
--

CREATE TABLE `alumnos_encuentro` (
  `id_alumno_encuentro` int(11) NOT NULL,
  `id_tmp` varchar(20) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `email` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `id_encuentro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_tmp`
--

CREATE TABLE `alumnos_tmp` (
  `id_alumno_tmp` int(11) NOT NULL,
  `id_tmp` varchar(16) NOT NULL,
  `id_sede` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `paterno` varchar(64) NOT NULL,
  `materno` varchar(64) NOT NULL,
  `fecha_nac` date NOT NULL,
  `telefono` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `facebook` varchar(64) NOT NULL,
  `pais` varchar(64) NOT NULL,
  `estado` varchar(64) NOT NULL,
  `ciudad` varchar(64) NOT NULL,
  `paquete` varchar(16) DEFAULT NULL,
  `nivel` varchar(64) NOT NULL,
  `deposito` float NOT NULL,
  `fecha_pago` date NOT NULL,
  `forma_pago` varchar(16) NOT NULL,
  `numero_folio` varchar(16) NOT NULL,
  `lugar_pago` varchar(16) NOT NULL,
  `ciudad_pago` varchar(64) NOT NULL,
  `file_comprobante` varchar(128) NOT NULL,
  `token_qr` varchar(16) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `status_tmp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concurso`
--

CREATE TABLE `concurso` (
  `id_concurso` int(11) NOT NULL,
  `id_sede` int(11) NOT NULL,
  `id_director` int(11) DEFAULT NULL,
  `id_tmp` varchar(16) DEFAULT NULL,
  `categoria` varchar(128) NOT NULL,
  `nombre_coreografia` varchar(128) NOT NULL,
  `coreografo` varchar(128) NOT NULL,
  `musica` varchar(128) NOT NULL,
  `nombre1` varchar(128) NOT NULL,
  `fecha1` date NOT NULL,
  `mail1` varchar(128) NOT NULL,
  `nombre2` varchar(128) DEFAULT NULL,
  `fecha2` date DEFAULT NULL,
  `mail2` varchar(128) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `constancias`
--

CREATE TABLE `constancias` (
  `id_constancia` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `lugar` varchar(16) NOT NULL,
  `como` varchar(64) NOT NULL,
  `sede` varchar(128) NOT NULL,
  `id_sede` int(11) NOT NULL,
  `del` int(11) NOT NULL,
  `al` int(11) NOT NULL,
  `de` varchar(64) NOT NULL,
  `maestros` varchar(256) DEFAULT NULL,
  `organizadores` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directores`
--

CREATE TABLE `directores` (
  `id_director` int(11) NOT NULL,
  `id_sede` int(11) NOT NULL,
  `id_tmp` varchar(16) DEFAULT NULL,
  `nombre` varchar(128) NOT NULL,
  `telefono` varchar(16) NOT NULL,
  `email` varchar(128) NOT NULL,
  `facebook` varchar(64) NOT NULL,
  `academia` varchar(64) NOT NULL,
  `como_contactar` varchar(64) NOT NULL,
  `token_qr` varchar(16) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `status_asistencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuentro`
--

CREATE TABLE `encuentro` (
  `id_encuentro` int(11) NOT NULL,
  `id_sede` int(11) NOT NULL,
  `id_director` int(11) DEFAULT NULL,
  `id_tmp` varchar(16) DEFAULT NULL,
  `categoria` varchar(128) NOT NULL,
  `nombre_coreografia` varchar(128) NOT NULL,
  `coreografo` varchar(128) NOT NULL,
  `musica` varchar(128) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensamble`
--

CREATE TABLE `ensamble` (
  `id_ensamble` int(11) NOT NULL,
  `id_sede` int(11) NOT NULL,
  `id_tmp` varchar(16) NOT NULL,
  `academia` varchar(64) NOT NULL,
  `nombre1` varchar(128) NOT NULL,
  `fecha1` date NOT NULL,
  `email1` varchar(128) NOT NULL,
  `nombre2` varchar(128) DEFAULT NULL,
  `fecha2` date DEFAULT NULL,
  `email2` varchar(128) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id_sede` int(11) NOT NULL,
  `nombre_sede` varchar(32) NOT NULL,
  `fecha` varchar(128) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id_sede`, `nombre_sede`, `fecha`, `status`) VALUES
(1, 'Congreso Nacional', '28 al 31 de Mayo - 02 de Junio', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `ultimo_inicio` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `ultimo_inicio`) VALUES
(1, 'barbara', 'barbara', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `alumnos_encuentro`
--
ALTER TABLE `alumnos_encuentro`
  ADD PRIMARY KEY (`id_alumno_encuentro`);

--
-- Indices de la tabla `alumnos_tmp`
--
ALTER TABLE `alumnos_tmp`
  ADD PRIMARY KEY (`id_alumno_tmp`);

--
-- Indices de la tabla `concurso`
--
ALTER TABLE `concurso`
  ADD PRIMARY KEY (`id_concurso`);

--
-- Indices de la tabla `constancias`
--
ALTER TABLE `constancias`
  ADD PRIMARY KEY (`id_constancia`);

--
-- Indices de la tabla `directores`
--
ALTER TABLE `directores`
  ADD PRIMARY KEY (`id_director`);

--
-- Indices de la tabla `encuentro`
--
ALTER TABLE `encuentro`
  ADD PRIMARY KEY (`id_encuentro`);

--
-- Indices de la tabla `ensamble`
--
ALTER TABLE `ensamble`
  ADD PRIMARY KEY (`id_ensamble`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id_sede`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alumnos_encuentro`
--
ALTER TABLE `alumnos_encuentro`
  MODIFY `id_alumno_encuentro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alumnos_tmp`
--
ALTER TABLE `alumnos_tmp`
  MODIFY `id_alumno_tmp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `concurso`
--
ALTER TABLE `concurso`
  MODIFY `id_concurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `constancias`
--
ALTER TABLE `constancias`
  MODIFY `id_constancia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `directores`
--
ALTER TABLE `directores`
  MODIFY `id_director` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encuentro`
--
ALTER TABLE `encuentro`
  MODIFY `id_encuentro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ensamble`
--
ALTER TABLE `ensamble`
  MODIFY `id_ensamble` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
