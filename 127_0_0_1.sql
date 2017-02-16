-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2017 a las 13:34:32
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `empresario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogos`
--

CREATE TABLE IF NOT EXISTS `catalogos` (
  `ID_CAT` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador catalogo',
  `Costo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Precio fijo del arriendo del inmueble ',
  `Descripcion` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Detalles de inmueble',
  `Ubicacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Direccion del Inmueble',
  `Piso` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Ubicación estrategica del inmueble',
  `Area` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Diseño medido del inmueble',
  `Estrato` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Posición socieconomica ',
  `Sector` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Asignación del inmueble',
  PRIMARY KEY (`ID_CAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE IF NOT EXISTS `contratos` (
  `ID_CONTRATO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de contrato ',
  `Documento` varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Numero de Identificacion del contratista',
  `Nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Nombre del contratista',
  `Apellido` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Apellido del contratista',
  `Direccion` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Numero de residencia del contratista',
  `Telefono` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'numero de contacto actual del contratista',
  `Fechainicio` date DEFAULT NULL COMMENT 'Fecha en la que se llego a mutuo acuerdo para la firma del contrato',
  `Fechafin` date DEFAULT NULL COMMENT 'Caducidad del contrato',
  `Valordeuda` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Cancelación asignada',
  `Tiempodeuda` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'decompensacion monetaria por tiempo',
  PRIMARY KEY (`ID_CONTRATO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE IF NOT EXISTS `inmuebles` (
  `ID_PUESTO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador del puesto o inmueble',
  `Numeropuesto` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Numero del puesto o inmueble',
  `Img_puesto` longblob NOT NULL COMMENT 'Imagen del puesto ',
  `Costoarriendo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Costo o valor del arriendo ',
  `Direccion` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Ubicacion del inmueble',
  `Pisopuesto` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL COMMENT 'Ubicacion estrategica del inmueble',
  PRIMARY KEY (`ID_PUESTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `ID_ROL` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código del cargo que obtiene dentro de la empresa ',
  `Rol` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Cargo que obtiene dentro de la empresa',
  PRIMARY KEY (`ID_ROL`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID_ROL`, `Rol`) VALUES
(1, 'empresario'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del usuario',
  `Documento` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT 'Numero de Identificacion de cada usuario',
  `Nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Nombre del usuario',
  `Apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Apellido del usuario',
  `Direccion` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Numero de residencia del usuario ',
  `Telefono` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Numero de Identificacion del usuario',
  `Correo` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL COMMENT 'Correo electronico con el cual loguea',
  `Contrasena` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Contraseña personal de ingreso ',
  `fk_id_rol` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'cargo que desempeña en la empresa',
  `Compania` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Nombre la empresa a la que pertenece ',
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `Documento`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `Correo`, `Contrasena`, `fk_id_rol`, `Compania`) VALUES
(1, '98121606321', NULL, NULL, NULL, NULL, NULL, '1124965', '1', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
