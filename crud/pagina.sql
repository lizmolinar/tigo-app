-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2024 a las 16:24:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicaciones`
--

CREATE TABLE `aplicaciones` (
  `ID` int(11) NOT NULL,
  `sistema_a` varchar(20) NOT NULL,
  `sistema_n` varchar(20) NOT NULL,
  `datos` varchar(20) NOT NULL,
  `tamaño1` varchar(20) NOT NULL,
  `activ_a` varchar(20) NOT NULL,
  `activ_n` varchar(20) NOT NULL,
  `version_a` varchar(20) NOT NULL,
  `version_n` varchar(20) NOT NULL,
  `C` varchar(20) NOT NULL,
  `tamaño2` varchar(20) NOT NULL,
  `antivirus_a` varchar(20) NOT NULL,
  `antivirus_n` varchar(20) NOT NULL,
  `D` varchar(20) NOT NULL,
  `tamaño3` varchar(20) NOT NULL,
  `system_a` varchar(20) NOT NULL,
  `system_n` varchar(20) NOT NULL,
  `remote_a` varchar(20) NOT NULL,
  `remote_n` varchar(20) NOT NULL,
  `ingresored` tinyint(1) NOT NULL,
  `onedrive` tinyint(1) NOT NULL,
  `dominio_a` varchar(20) NOT NULL,
  `dominio_n` varchar(20) NOT NULL,
  `email` tinyint(1) NOT NULL,
  `voice` tinyint(1) NOT NULL,
  `mapeo` tinyint(1) NOT NULL,
  `impresora` tinyint(1) NOT NULL,
  `vpn` tinyint(1) NOT NULL,
  `usb` tinyint(1) NOT NULL,
  `sap` tinyint(1) NOT NULL,
  `conexion2` varchar(20) NOT NULL,
  `observacionapli` varchar(100) NOT NULL,
  `maletin_d` tinyint(1) NOT NULL,
  `guaya_d` tinyint(1) NOT NULL,
  `docking_d` tinyint(1) NOT NULL,
  `mouse_d` tinyint(1) NOT NULL,
  `base_d` tinyint(1) NOT NULL,
  `teclado_d` tinyint(1) NOT NULL,
  `camara_d` tinyint(1) NOT NULL,
  `diadema_d` tinyint(1) NOT NULL,
  `adaptador_d` tinyint(1) NOT NULL,
  `otros_d` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosdeusuario`
--

CREATE TABLE `datosdeusuario` (
  `ID` int(11) NOT NULL,
  `asignacion` tinyint(1) NOT NULL,
  `renovacion` tinyint(1) NOT NULL,
  `retiro` tinyint(1) NOT NULL,
  `prestamo` tinyint(1) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `ticket` varchar(20) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `propiedad` varchar(20) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `costos` varchar(20) NOT NULL,
  `logistico` varchar(20) NOT NULL,
  `sede` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `ubicacion` varchar(20) NOT NULL,
  `jefe` varchar(20) NOT NULL,
  `gerencia` varchar(20) NOT NULL,
  `usuario_red` varchar(20) NOT NULL,
  `presencial` tinyint(1) NOT NULL,
  `autonomo` tinyint(1) NOT NULL,
  `suplementario` tinyint(1) NOT NULL,
  `carnet` tinyint(1) NOT NULL,
  `tarjeta` tinyint(1) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `otros` tinyint(1) NOT NULL,
  `trabajador` tinyint(1) NOT NULL,
  `estudiante` tinyint(1) NOT NULL,
  `contratista` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipoanterior`
--

CREATE TABLE `equipoanterior` (
  `ID` int(11) NOT NULL,
  `desktop_a` tinyint(1) NOT NULL,
  `laptop_a` tinyint(1) NOT NULL,
  `tablet_a` tinyint(1) NOT NULL,
  `placa_a` varchar(20) NOT NULL,
  `marca_a` varchar(20) NOT NULL,
  `disco_a` varchar(20) NOT NULL,
  `serial_a` varchar(20) NOT NULL,
  `modelo_a` varchar(20) NOT NULL,
  `memoria_a` varchar(20) NOT NULL,
  `nombre_equipo_a` varchar(20) NOT NULL,
  `mac_a` varchar(20) NOT NULL,
  `ip_a` varchar(20) NOT NULL,
  `placamon_a` int(11) NOT NULL,
  `marcamon_a` varchar(20) NOT NULL,
  `puntored_a` varchar(20) NOT NULL,
  `serialmon_a` varchar(20) NOT NULL,
  `modelomon_a` varchar(20) NOT NULL,
  `otroscelular_a` varchar(20) NOT NULL,
  `placaotros_a` varchar(20) NOT NULL,
  `marcaotros_a` varchar(20) NOT NULL,
  `maletin_a` tinyint(1) NOT NULL,
  `base_a` tinyint(1) NOT NULL,
  `teclado_a` tinyint(1) NOT NULL,
  `cam_a` tinyint(1) NOT NULL,
  `diadema_a` tinyint(1) NOT NULL,
  `adaptador_a` tinyint(1) NOT NULL,
  `guaya_a` tinyint(1) NOT NULL,
  `docking_a` tinyint(1) NOT NULL,
  `raton_a` tinyint(1) NOT NULL,
  `otros_a` varchar(20) NOT NULL,
  `serialotros_a` varchar(20) NOT NULL,
  `modelootros_a` varchar(20) NOT NULL,
  `observacion_a` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equiponuevo`
--

CREATE TABLE `equiponuevo` (
  `ID` int(11) NOT NULL,
  `desktop_n` tinyint(1) NOT NULL,
  `laptop_n` tinyint(1) NOT NULL,
  `tablet_n` tinyint(1) NOT NULL,
  `placa_n` varchar(20) NOT NULL,
  `marca_n` varchar(20) NOT NULL,
  `disco_n` varchar(20) NOT NULL,
  `serial_n` varchar(20) NOT NULL,
  `modelo_n` varchar(20) NOT NULL,
  `memoria_n` varchar(20) NOT NULL,
  `nombre_equipo_n` varchar(20) NOT NULL,
  `mac_n` varchar(20) NOT NULL,
  `ip_n` varchar(20) NOT NULL,
  `placamon_n` varchar(20) NOT NULL,
  `marcamon_n` varchar(20) NOT NULL,
  `puntored_n` varchar(20) NOT NULL,
  `serialmon_n` varchar(20) NOT NULL,
  `modelomon_n` varchar(20) NOT NULL,
  `otroscelular_n` varchar(20) NOT NULL,
  `placaotros_n` varchar(20) NOT NULL,
  `marcaotros_n` varchar(20) NOT NULL,
  `maletin_n` tinyint(1) NOT NULL,
  `base_n` tinyint(1) NOT NULL,
  `teclado_n` tinyint(1) NOT NULL,
  `cam_n` tinyint(1) NOT NULL,
  `diadema_n` tinyint(1) NOT NULL,
  `adaptador_n` tinyint(1) NOT NULL,
  `guaya_n` tinyint(1) NOT NULL,
  `docking_n` int(11) NOT NULL,
  `raton_n` tinyint(1) NOT NULL,
  `otros_n` varchar(20) NOT NULL,
  `serialotros_n` varchar(20) NOT NULL,
  `modelootros_n` varchar(20) NOT NULL,
  `observacion_n` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `firmas`
--

CREATE TABLE `firmas` (
  `ID` int(11) NOT NULL,
  `firmausuario` varchar(20) NOT NULL,
  `firmatecnico` varchar(20) NOT NULL,
  `firmaatencion` varchar(20) NOT NULL,
  `firmajefe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `CORREO` varchar(20) DEFAULT NULL,
  `USUARIO_RED` varchar(20) NOT NULL,
  `CONTRASEÑA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`CORREO`, `USUARIO_RED`, `CONTRASEÑA`) VALUES
('piliproyecto22@gmail', 'administrador', '1010');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aplicaciones`
--
ALTER TABLE `aplicaciones`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `datosdeusuario`
--
ALTER TABLE `datosdeusuario`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `equipoanterior`
--
ALTER TABLE `equipoanterior`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `equiponuevo`
--
ALTER TABLE `equiponuevo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `firmas`
--
ALTER TABLE `firmas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`USUARIO_RED`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aplicaciones`
--
ALTER TABLE `aplicaciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `datosdeusuario`
--
ALTER TABLE `datosdeusuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `equipoanterior`
--
ALTER TABLE `equipoanterior`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `equiponuevo`
--
ALTER TABLE `equiponuevo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `firmas`
--
ALTER TABLE `firmas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
