-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2018 a las 18:06:52
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aguasdemonagas_casos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `descripcion`) VALUES
(1, 'EMPLEADO'),
(2, 'SECRETARIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casos`
--

CREATE TABLE IF NOT EXISTS `casos` (
  `codigo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `id_parroquia` int(3) NOT NULL,
  `id_sector` int(4) NOT NULL,
  `cedula` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `id_tipo` int(3) NOT NULL,
  `descripcion` blob NOT NULL,
  `observ` blob NOT NULL,
  `fecha_prog` date NOT NULL,
  `fecha_rep` date NOT NULL,
  `responsable` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `id_parroquia` (`id_parroquia`,`id_sector`,`cedula`,`id_tipo`),
  KEY `responsable` (`responsable`),
  KEY `cedula` (`cedula`),
  KEY `id_sector` (`id_sector`),
  KEY `id_tipo` (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `casos`
--

INSERT INTO `casos` (`codigo`, `fecha`, `id_parroquia`, `id_sector`, `cedula`, `id_tipo`, `descripcion`, `observ`, `fecha_prog`, `fecha_rep`, `responsable`) VALUES
('201301017', '2013-01-01 00:25:40', 3, 1, '5910734', 2, 0x4c4120535241205a4149444120414c45474120515545205449454e4520554e412053454d414e412053494e20454c20534552564943494f204445204147554120, 0x4c4c4556415220554e2043414d494f4e205349535445524e41204c4f20414e54455320504f5349424c45, '2013-11-10', '0000-00-00', '24908567'),
('201808011', '2018-08-01 00:00:00', 3, 1, '16456893', 3, 0x434c4f41434153, '', '2018-08-02', '2018-08-03', '24908567'),
('201808012', '2018-08-01 00:00:00', 3, 1, '17900834', 2, 0x5455424f204d415452495a20524f544f2028555247454e544529, 0x3520444941532053494e2041475541, '2018-08-04', '2018-08-02', '24908567'),
('201808013', '2018-08-01 12:54:38', 1, 5, '19680453', 2, 0x5455424f204d415452495a20524f544f2028555247454e544529, '', '2018-08-02', '0000-00-00', '24908567'),
('201808024', '2018-08-01 22:08:04', 6, 7, '3754388', 1, 0x44465344, 0x4748474847, '2018-08-04', '0000-00-00', '24908567'),
('201808025', '2018-08-10 22:15:26', 3, 1, '16456893', 3, 0x5346534647534646, 0x56434343564356, '2018-08-05', '0000-00-00', '24908567'),
('201810296', '2018-10-28 22:52:18', 3, 1, '14508847', 1, 0x554e412053454d414e412053494e204147554120, 0x4c4f20414e54455320504f5349424c45, '2018-10-29', '2018-10-29', '24908567'),
('201811118', '2018-11-11 00:28:36', 3, 1, '14508987', 1, 0x4c4b4e4c4e4cd14e, 0x4c4b4e4ed14e, '2018-11-13', '0000-00-00', '24908567'),
('2018111210', '2018-11-12 11:10:48', 3, 1, '15789543', 1, 0x454c20534543544f52205449454e4520554e412053454d414e412053494e20454c20534552564943494f, 0x454e5649415220454c204349535445524d41204c4f20414e54455320504f5349424c45, '2018-11-13', '0000-00-00', '24908567'),
('201811129', '2018-11-12 07:11:22', 3, 1, '16893922', 1, 0x454c20534543544f52205449454e4520554e412053454d414e412053494e20454c20534552564943494f204445204147554120, 0x4d414e4441522043414d494f4e204349535445524e41204c4f4120414e54455320504f5349424c45, '2018-11-12', '0000-11-13', '24908567'),
('2018111311', '2018-11-13 10:27:28', 3, 1, '16893922  ', 3, 0x555247454e5445, 0x554547454e5445, '2018-11-14', '2018-11-14', '24908567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE IF NOT EXISTS `contactos` (
  `cedula` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tlf` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_parroquia` int(3) NOT NULL,
  `id_sector` int(3) NOT NULL,
  PRIMARY KEY (`cedula`),
  KEY `id_parroquia` (`id_parroquia`,`id_sector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`cedula`, `nombre`, `tlf`, `direccion`, `correo`, `id_parroquia`, `id_sector`) VALUES
('14508847', 'JUAN MIJARES', '04249475034', 'URBANIZACION LA FLORESTA CALLE 1 CASA 4', 'jorgemanuel1986@gmail.com', 3, 1),
('14508987', 'LEONARDO', '02913141919', 'KLKLKLK', 'jman@gmail.com', 3, 1),
('15789543', 'MANUEL', '04249475034', 'LAS FORESTA CALLE 1 CASA N 4', 'manuel@gmail.com', 3, 1),
('16456893', 'RAFAEL MENDOZA', '04147727926', 'URB. FRENTE A LA UDO DE JUANICO', '', 3, 1),
('16893922', 'MIN PATIÑO', '04949265550', 'LA FLORESTA CCALE 1 CASA N 04', 'min@gmail.com', 3, 1),
('17900834', 'FERMIN MARCOS', '04243451290', 'LA REDOMA DE LOS CORTIJOS', 'ferminmark@gmail.com', 3, 3),
('19680453', 'JESUS SOLARZONO', '04249967908', 'LUIS DEL VALLE GARCIA, AL FRENTE DE LA ROSA  MISTICA', '', 1, 5),
('26893923', 'RICARDO URDANETA', '04249367788', 'LA FLORESTA CALL1 CASA 4', 'ricardo@gmail.com', 3, 1),
('3754388', 'DSFHDSH', '98788', 'GFGFG', 'ggf', 3, 1),
('5910734', 'ARELIS', '04249473288', 'LA FLORESTA CALLE 1 CASA 256', 'zaida@gmail.com', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_usuario`
--

CREATE TABLE IF NOT EXISTS `cuenta_usuario` (
  `id_cta` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `id_rol` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_reg` datetime NOT NULL,
  PRIMARY KEY (`id_cta`),
  KEY `cedula` (`cedula`,`id_rol`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cuenta_usuario`
--

INSERT INTO `cuenta_usuario` (`id_cta`, `cedula`, `id_rol`, `login`, `password`, `fecha_reg`) VALUES
(3, '16893925', 2, 'bernard86', '5411747', '2018-10-28 23:00:20'),
(4, '16722043', 2, 'leonardo1986', '5411747', '2018-11-09 11:22:00'),
(5, '16893927', 1, 'jorge1986', '5411747', '2018-11-13 11:54:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquia`
--

CREATE TABLE IF NOT EXISTS `parroquia` (
  `id_parroquia` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_parroquia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `parroquia`
--

INSERT INTO `parroquia` (`id_parroquia`, `nombre`, `condicion`) VALUES
(1, 'SAN SIMON', 'A'),
(3, 'LAS COCUIZAS', 'A'),
(4, 'BOQUERON', 'A'),
(6, 'LOS GODOS', 'A'),
(7, 'SANTA CRUZ', 'I'),
(8, 'SAN SIMON SUR', 'I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `cedula` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `nombres` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_naci` date NOT NULL,
  `edad` int(2) NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tlf` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `estatus` int(1) NOT NULL,
  `id_cargo` int(2) NOT NULL,
  PRIMARY KEY (`cedula`),
  KEY `id_cargo` (`id_cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`cedula`, `nombres`, `apellidos`, `sexo`, `fecha_naci`, `edad`, `correo`, `tlf`, `estatus`, `id_cargo`) VALUES
('16722043', 'LEONARDO', 'MONTANO', 'M', '1966-11-18', 51, 'jman@gmail.com', '02913141919', 1, 1),
('16893925', 'MANUEL', 'BERNARD', 'M', '1986-09-08', 32, 'jorgemanuel1986@gmail.com', '04249265550', 1, 1),
('16893927', 'JORGE', 'MONTANIO', 'M', '1999-07-15', 19, 'montaniojorg1999@gmail.com', '04129802415', 1, 1),
('3014888', 'ENRIQUE', 'TORTOLEDO', 'M', '1938-09-08', 80, 'jman@gmail.com', '04140831810', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `tipos` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `tipos`, `estatus`) VALUES
(1, 'ADMINISTRADOR DE SISTEMA', 1),
(2, 'OPERADOR', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE IF NOT EXISTS `sectores` (
  `id_sector` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `id_parroquia` int(3) NOT NULL,
  PRIMARY KEY (`id_sector`),
  KEY `id_parroquia` (`id_parroquia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `sectores`
--

INSERT INTO `sectores` (`id_sector`, `nombre`, `id_parroquia`) VALUES
(1, 'JUANICO', 3),
(3, 'LOS CORTIJOS', 3),
(4, 'BRISAS DEL AREPUERTO', 1),
(5, 'CENTRO', 1),
(6, 'LA MURALLA', 6),
(7, 'ALTO PARAMACONI I', 6),
(8, 'CALLE JUNIN', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE IF NOT EXISTS `tipo_servicio` (
  `id_tipo` int(3) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_servicio`
--

INSERT INTO `tipo_servicio` (`id_tipo`, `descripcion`, `condicion`) VALUES
(1, 'CISTERNA', 'A'),
(2, 'AGUA POTABLE', 'A'),
(3, 'AGUA SERVIDA', 'A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
