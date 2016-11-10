-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2016 a las 17:42:50
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
  `ID_CAT` int(11) NOT NULL AUTO_INCREMENT,
  `Costo` varchar(20) DEFAULT NULL,
  `Descripcion` varchar(70) DEFAULT NULL,
  `Ubicacion` varchar(50) DEFAULT NULL,
  `Piso` varchar(10) DEFAULT NULL,
  `Area` varchar(10) DEFAULT NULL,
  `Estrato` varchar(10) DEFAULT NULL,
  `Sector` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_CAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE IF NOT EXISTS `contratos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) DEFAULT NULL,
  `Apellido` varchar(30) DEFAULT NULL,
  `Documento` varchar(11) DEFAULT NULL,
  `Direccion` varchar(70) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `Fechainicio` date DEFAULT NULL,
  `Fechafin` date DEFAULT NULL,
  `Estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`ID`, `Nombre`, `Apellido`, `Documento`, `Direccion`, `Telefono`, `Fechainicio`, `Fechafin`, `Estado`) VALUES
(1, 'Luis', 'Rojas', '56456', 'calle', '3143872643', '2016-10-05', '2016-10-22', '0'),
(2, 'Angie Paola', 'Rojas Aroca', '4545645', 'calle 45 N 5 este 35', '3105332401', '2016-10-11', '2016-10-31', '0'),
(3, 'Dirleny Yiseth', 'Vareta Agudelo', '69845123', 'calle 23 N 20 - 34 sur', '3004598947', '2016-05-17', '2016-10-19', '0'),
(4, 'Yeison Ferney', 'Gutierrez Huerfano', '87423564', 'diagonal 34 N 45 -  34 etse ', '3008887424', '2016-01-18', '2016-10-12', '0'),
(5, 'Daniel FElipe ', 'Ruiz Pineda', '35674542', 'Calle 47 N 77 - 11', '3204521679', '2016-02-11', '2016-09-20', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE IF NOT EXISTS `inmuebles` (
  `ID_PUESTO` int(11) NOT NULL AUTO_INCREMENT,
  `Numeropuesto` varchar(10) DEFAULT NULL,
  `Costoarriendo` varchar(20) DEFAULT NULL,
  `Direccion` varchar(70) DEFAULT NULL,
  `Pisopuesto` varchar(10) DEFAULT NULL,
  `Estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_PUESTO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`ID_PUESTO`, `Numeropuesto`, `Costoarriendo`, `Direccion`, `Pisopuesto`, `Estado`) VALUES
(3, '54', '$300.400', 'calle 45 N 45 - 87 este', '5', '0'),
(4, '45', '$400.000', 'calle 45 N 45 - 87 este', '4', '0'),
(5, '12', '$345.478', 'calle 45 N 45 - 87 este', '2', '0'),
(6, '32', '$218.000', 'calle 45 N 45 - 87 este', '1', '0'),
(7, '19', '$529.798', 'calle 45 N 45 - 87 este', '2', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manejodecontrato`
--

CREATE TABLE IF NOT EXISTS `manejodecontrato` (
  `ID_DEUDA` int(11) NOT NULL AUTO_INCREMENT,
  `Numeropuesto` varchar(10) DEFAULT NULL,
  `Tiempodeuda` varchar(10) DEFAULT NULL,
  `Valordeuda` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_DEUDA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `manejodecontrato`
--

INSERT INTO `manejodecontrato` (`ID_DEUDA`, `Numeropuesto`, `Tiempodeuda`, `Valordeuda`) VALUES
(1, '4', '4 meses', '$3.200.000'),
(2, '54', '2 meses', '$600.800'),
(3, '12', '3 meses', '$1.036.434'),
(4, '32', '1 mes', '$218.000'),
(5, '19', '3 meses', '1.589.367');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Documento` varchar(12) NOT NULL,
  `Nombre` varchar(10) DEFAULT NULL,
  `Apellido` varchar(10) DEFAULT NULL,
  `Direccion` varchar(70) DEFAULT NULL,
  `Telefono` varchar(12) DEFAULT NULL,
  `Correo` varchar(70) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Rol` varchar(10) DEFAULT NULL,
  `Compania` varchar(50) DEFAULT NULL,
  `Estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Documento`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `Correo`, `Password`, `Rol`, `Compania`, `Estado`) VALUES
(1, '4456484', 'Andres', 'Rojas', 'calle 34 N 4-34 sur', '5750979', 'lcrojas123@misena.edu.co', '1124965', 'empresario', 'data-mundo', '1'),
(3, '4345645', 'jhon', 'Vargas', 'calle 54 N 45 -  24 este', '5464564', 'varegad@misena.edu.co', '456456', 'empresario', 'stells', '0'),
(4, '456454', 'Julian', 'Ramirez', 'calle 23 N 45 - 48 cv', '7897013', 'jeramirez@misena.edu.co', '7845421', 'empresario', 'electrodomesticos jeaf', '0'),
(5, '3547789', 'yessica', 'romero', 'calle 67 sur 45 - 23 ', '3145787452', 'yfromero@misena.edu.co', '45454', 'empresario', 'electrodomesticos jeaf', '0'),
(6, '45787', 'Juan David', 'Galaindo P', 'calle 27 este 34 - 23', '7897210', 'jdgalindo07@misena.edu.co', '45787', 'empresario', 'kadatsca', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
