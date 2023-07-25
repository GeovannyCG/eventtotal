-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2023 a las 05:53:37
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventtotal_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_eventtotal`
--

CREATE TABLE `eventos_eventtotal` (
  `id_e` int(11) NOT NULL,
  `cliente_e` varchar(100) NOT NULL,
  `fecha_hora_e` datetime NOT NULL,
  `tipo_e` varchar(30) NOT NULL,
  `invitados_e` int(25) NOT NULL,
  `tema_e` varchar(40) NOT NULL,
  `id_u` int(30) NOT NULL,
  `id_s` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos_eventtotal`
--

INSERT INTO `eventos_eventtotal` (`id_e`, `cliente_e`, `fecha_hora_e`, `tipo_e`, `invitados_e`, `tema_e`, `id_u`, `id_s`) VALUES
(32, 'Mariana Magdalena', '2023-07-24 17:34:00', 'aniversario', 200, 'ninguna', 1, 2),
(33, 'Hiojan Geovanny Carrasco Garcia', '2023-07-24 17:45:00', 'cumpleaños', 200, 'ninguna', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos_eventtotal`
--

CREATE TABLE `insumos_eventtotal` (
  `id_is` int(11) NOT NULL,
  `nombre_is` varchar(60) NOT NULL,
  `categoria_is` varchar(35) NOT NULL,
  `unidad_medida_is` int(30) NOT NULL,
  `cantidad_is` int(30) NOT NULL,
  `precio_unitario_is` int(10) NOT NULL,
  `descripcion_is` varchar(100) NOT NULL,
  `id_u` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_eventtotal`
--

CREATE TABLE `inventario_eventtotal` (
  `codigo_barras` int(15) NOT NULL,
  `producto_i` varchar(30) NOT NULL,
  `categoria_i` varchar(35) NOT NULL,
  `cantidad_i` int(30) NOT NULL,
  `imagen_i` varchar(50) NOT NULL,
  `id_u` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_eventos_eventtotal`
--

CREATE TABLE `menu_eventos_eventtotal` (
  `id_me` int(11) NOT NULL,
  `id_e` int(30) NOT NULL,
  `id_r` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetario_eventtotal`
--

CREATE TABLE `recetario_eventtotal` (
  `id_r` int(11) NOT NULL,
  `titulo_r` varchar(35) NOT NULL,
  `ingredientes_r` varchar(260) NOT NULL,
  `instrucciones_r` varchar(600) NOT NULL,
  `tiempo_preparacion_r` varchar(20) NOT NULL,
  `porciones_r` int(10) NOT NULL,
  `nivel_dificultad_r` varchar(10) NOT NULL,
  `consejos_adicionales_r` varchar(170) NOT NULL,
  `clasificacion_r` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `recetario_eventtotal`
--

INSERT INTO `recetario_eventtotal` (`id_r`, `titulo_r`, `ingredientes_r`, `instrucciones_r`, `tiempo_preparacion_r`, `porciones_r`, `nivel_dificultad_r`, `consejos_adicionales_r`, `clasificacion_r`) VALUES
(9, 'Pollo a la crema', 'ffff', 'ffff', '10 horas', 5, 'baja', 'sdvdfvdfs', 'estofado'),
(10, 'Pollo a la gordon blue', 'fgsdggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 'fsdgggggggggggggggggggggggagsadfgsadfgafgsadfgafsdgafdgsadgafgagfasfgafsgfgsadfgagfasfgafgafgfagasgfdgfsdgggggggggggggggggggggggagsadfgsadfgafgsadfgafsdgafdgsadgafgagfasfgafsgfgsadfgagfasfgafgafgfagasgfdgfsdgggggggggggggggggggggggagsadfgsadfgafgsadfgafsdgafdgsadgafgagfasfgafsgfgsadfgagfasfgafgafgfagasgfdg', '10 horas', 5, 'baja', 'fsdgggggggggggggggggggggggagsadfgsadfgafgsadfgafsdgafdgsadgafgagfasfgafsgfgsadfgagfasfgafgafgfagasgfdg', 'guizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones_eventtotal`
--

CREATE TABLE `salones_eventtotal` (
  `id_s` int(11) NOT NULL,
  `nombre_s` varchar(30) NOT NULL,
  `cap_personas_s` int(40) NOT NULL,
  `estado_s` varchar(10) NOT NULL,
  `imagenes_s` varchar(50) NOT NULL,
  `id_u` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `salones_eventtotal`
--

INSERT INTO `salones_eventtotal` (`id_s`, `nombre_s`, `cap_personas_s`, `estado_s`, `imagenes_s`, `id_u`) VALUES
(2, 'La bireyna', 200, 'function', 'none', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_eventtotal`
--

CREATE TABLE `usuarios_eventtotal` (
  `id_u` int(11) NOT NULL,
  `nombres_u` varchar(60) NOT NULL,
  `apellidos_u` varchar(60) NOT NULL,
  `cumpleainos_u` date NOT NULL,
  `correo_u` varchar(30) NOT NULL,
  `contrasenia_u` varchar(50) NOT NULL,
  `roll_u` varchar(30) NOT NULL,
  `foto_u` varchar(35) NOT NULL,
  `intentos_u` int(3) NOT NULL,
  `restriccion_u` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios_eventtotal`
--

INSERT INTO `usuarios_eventtotal` (`id_u`, `nombres_u`, `apellidos_u`, `cumpleainos_u`, `correo_u`, `contrasenia_u`, `roll_u`, `foto_u`, `intentos_u`, `restriccion_u`) VALUES
(1, 'Hiojan Geovanny', 'Carrasco Garcia', '2002-09-05', 'hiojan75@gmail.com', '3312', 'admin', 'none', 0, 'none');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos_eventtotal`
--
ALTER TABLE `eventos_eventtotal`
  ADD PRIMARY KEY (`id_e`),
  ADD KEY `id_u` (`id_u`),
  ADD KEY `id_s` (`id_s`);

--
-- Indices de la tabla `insumos_eventtotal`
--
ALTER TABLE `insumos_eventtotal`
  ADD PRIMARY KEY (`id_is`),
  ADD KEY `id_u` (`id_u`);

--
-- Indices de la tabla `inventario_eventtotal`
--
ALTER TABLE `inventario_eventtotal`
  ADD PRIMARY KEY (`codigo_barras`),
  ADD KEY `id_u` (`id_u`);

--
-- Indices de la tabla `menu_eventos_eventtotal`
--
ALTER TABLE `menu_eventos_eventtotal`
  ADD PRIMARY KEY (`id_me`),
  ADD KEY `id_e` (`id_e`),
  ADD KEY `id_r` (`id_r`);

--
-- Indices de la tabla `recetario_eventtotal`
--
ALTER TABLE `recetario_eventtotal`
  ADD PRIMARY KEY (`id_r`);

--
-- Indices de la tabla `salones_eventtotal`
--
ALTER TABLE `salones_eventtotal`
  ADD PRIMARY KEY (`id_s`),
  ADD KEY `fk_usuarios_salones` (`id_u`);

--
-- Indices de la tabla `usuarios_eventtotal`
--
ALTER TABLE `usuarios_eventtotal`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos_eventtotal`
--
ALTER TABLE `eventos_eventtotal`
  MODIFY `id_e` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `insumos_eventtotal`
--
ALTER TABLE `insumos_eventtotal`
  MODIFY `id_is` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario_eventtotal`
--
ALTER TABLE `inventario_eventtotal`
  MODIFY `codigo_barras` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menu_eventos_eventtotal`
--
ALTER TABLE `menu_eventos_eventtotal`
  MODIFY `id_me` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recetario_eventtotal`
--
ALTER TABLE `recetario_eventtotal`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `salones_eventtotal`
--
ALTER TABLE `salones_eventtotal`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios_eventtotal`
--
ALTER TABLE `usuarios_eventtotal`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos_eventtotal`
--
ALTER TABLE `eventos_eventtotal`
  ADD CONSTRAINT `eventos_eventtotal_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `usuarios_eventtotal` (`id_u`),
  ADD CONSTRAINT `eventos_eventtotal_ibfk_2` FOREIGN KEY (`id_s`) REFERENCES `salones_eventtotal` (`id_s`);

--
-- Filtros para la tabla `insumos_eventtotal`
--
ALTER TABLE `insumos_eventtotal`
  ADD CONSTRAINT `insumos_eventtotal_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `usuarios_eventtotal` (`id_u`);

--
-- Filtros para la tabla `inventario_eventtotal`
--
ALTER TABLE `inventario_eventtotal`
  ADD CONSTRAINT `inventario_eventtotal_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `usuarios_eventtotal` (`id_u`);

--
-- Filtros para la tabla `menu_eventos_eventtotal`
--
ALTER TABLE `menu_eventos_eventtotal`
  ADD CONSTRAINT `menu_eventos_eventtotal_ibfk_1` FOREIGN KEY (`id_e`) REFERENCES `eventos_eventtotal` (`id_e`),
  ADD CONSTRAINT `menu_eventos_eventtotal_ibfk_2` FOREIGN KEY (`id_r`) REFERENCES `recetario_eventtotal` (`id_r`);

--
-- Filtros para la tabla `salones_eventtotal`
--
ALTER TABLE `salones_eventtotal`
  ADD CONSTRAINT `fk_usuarios_salones` FOREIGN KEY (`id_u`) REFERENCES `usuarios_eventtotal` (`id_u`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
