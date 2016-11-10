-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2016 a las 23:55:21
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogos`
--

CREATE TABLE `catalogos` (
  `ID_CAT` int(11) NOT NULL COMMENT 'Identificador catalogo',
  `Costo` varchar(20) DEFAULT NULL COMMENT 'Precio fijo del arriendo del inmueble ',
  `Descripcion` varchar(70) DEFAULT NULL COMMENT 'Detalles de inmueble',
  `Ubicacion` varchar(50) DEFAULT NULL COMMENT 'Inmueble',
  `Piso` varchar(10) DEFAULT NULL COMMENT 'Ubicación estrategica del inmueble',
  `Area` varchar(10) DEFAULT NULL COMMENT 'Diseño medido del inmueble',
  `Estrato` varchar(10) DEFAULT NULL COMMENT 'Posición socieconomica ',
  `Sector` varchar(10) DEFAULT NULL COMMENT 'Asignación del inmueble'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `ID` int(11) NOT NULL COMMENT 'Identificador de contrato ',
  `Nombre` varchar(30) DEFAULT NULL COMMENT 'Nombre del contratista',
  `Apellido` varchar(30) DEFAULT NULL COMMENT 'Apellido del contratista',
  `Documento` varchar(11) DEFAULT NULL COMMENT 'Numero de Identificacion del contratista',
  `Direccion` varchar(70) DEFAULT NULL COMMENT 'Numero de residencia del contratista',
  `Telefono` varchar(10) DEFAULT NULL COMMENT 'numero de contacto actual del contratista',
  `Fechainicio` date DEFAULT NULL COMMENT 'Fecha en la que se llego a mutuo acuerdo para la firma del contrato',
  `Fechafin` date DEFAULT NULL COMMENT 'Caducidad del contrato',
  `Estado` varchar(10) DEFAULT NULL COMMENT 'Disponibilidad'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`ID`, `Nombre`, `Apellido`, `Documento`, `Direccion`, `Telefono`, `Fechainicio`, `Fechafin`, `Estado`) VALUES
(1, 'Luis', 'Rojas', '56456', 'calle', '3143872643', '2016-10-05', '2016-10-22', '0'),
(2, 'Angie Paola', 'Rojas Aroca', '4545645', 'calle 45 N 5 este 35', '3105332401', '2016-10-11', '2016-10-31', '0'),
(3, 'Dirleny Yiseth', 'Vareta Agudelo', '69845123', 'calle 23 N 20 - 34 sur', '3004598947', '2016-05-17', '2016-10-19', '0'),
(4, 'Yeison Ferney', 'Gutierrez Huerfano', '87423564', 'diagonal 34 N 45 -  34 etse ', '3008887424', '2016-01-18', '2016-10-12', '0'),
(5, 'Daniel Felipe ', 'Ruiz Pineda', '35674542', 'Calle 47 N 77 - 11', '3204521679', '2016-02-11', '2016-09-20', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `ID_PUESTO` int(11) NOT NULL COMMENT 'identificador del puesto o inmueble',
  `Numeropuesto` varchar(10) DEFAULT NULL COMMENT 'Numero del puesto o inmueble',
  `Costoarriendo` varchar(20) DEFAULT NULL COMMENT 'Costo o valor del arriendo ',
  `Direccion` varchar(70) DEFAULT NULL COMMENT 'Ubicacion del inmueble',
  `Pisopuesto` varchar(10) DEFAULT NULL COMMENT 'Ubicacion estrategica del inmueble',
  `Estado` varchar(10) DEFAULT NULL COMMENT 'Disponibilidad del inmueble'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `manejodecontrato` (
  `ID_DEUDA` int(11) NOT NULL COMMENT 'Identificador de Deuda',
  `Numeropuesto` varchar(10) DEFAULT NULL COMMENT 'Numero del puesto o inmueble',
  `Tiempodeuda` varchar(10) DEFAULT NULL COMMENT 'descompensacion monetaria por tiempos',
  `Valordeuda` varchar(10) DEFAULT NULL COMMENT 'Cancelación atrasada '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL COMMENT 'Identificador del usuario',
  `Documento` varchar(12) NOT NULL COMMENT 'Numero de Identificacion de cada usuario',
  `Nombre` varchar(10) DEFAULT NULL COMMENT 'Nombre del usuario',
  `Apellido` varchar(10) DEFAULT NULL COMMENT 'Apellido del usuario',
  `Direccion` varchar(70) DEFAULT NULL COMMENT 'Numero de residencia del usuario ',
  `Telefono` varchar(12) DEFAULT NULL COMMENT 'Numero de Identificacion del usuario',
  `Correo` varchar(70) DEFAULT NULL COMMENT 'Correo electronico con el cual loguea',
  `Password` varchar(30) DEFAULT NULL COMMENT 'Contraseña personal de ingreso ',
  `Rol` varchar(20) DEFAULT NULL COMMENT 'Cargo que obtiene dentro de la empresa',
  `Compania` varchar(50) DEFAULT NULL COMMENT 'Nombre la empresa a la que pertenece ',
  `Estado` varchar(10) DEFAULT NULL COMMENT 'Disponibilidad del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Documento`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `Correo`, `Password`, `Rol`, `Compania`, `Estado`) VALUES
(1, '4456484', 'Andres', 'Rojas', 'calle 34 N 4-34 sur', '5750979', 'lcrojas123@misena.edu.co', '1124965', 'empresario', 'data-mundo', '1'),
(3, '4345645', 'jhon', 'Vargas', 'calle 54 N 45 -  24 este', '5464564', 'varegad@misena.edu.co', '456456', 'empresario', 'stells', '0'),
(4, '456454', 'Julian', 'Ramirez', 'calle 23 N 45 - 48 cv', '7897013', 'jeramirez@misena.edu.co', '7845421', 'empresario', 'electrodomesticos jeaf', '0'),
(5, '3547789', 'yessica', 'romero', 'calle 67 sur 45 - 23 ', '3145787452', 'yfromero@misena.edu.co', '45454', 'empresario', 'electrodomesticos jeaf', '0'),
(6, '45787', 'Juan David', 'Galindo P', 'calle 27 este 34 - 23', '7897210', 'jdgalindo07@misena.edu.co', '45787', 'empresario', 'kadatsca', '0'),
(12, '1031157128', 'juan', 'rodriguez', 'Calle 45 59-69', '7536987', 'Juanrodriguez23@misena.edu.co', '11249655', 'usuario', 'servicios SAS', '1'),
(15, '1033156123', 'Luisa', 'Escobar', 'Calle 23 45-6', '7965412', 'luisaescobar12@misena.edu.co', '232356', 'usuario', 'comerciantes LTDA', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogos`
--
ALTER TABLE `catalogos`
  ADD PRIMARY KEY (`ID_CAT`);

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`ID_PUESTO`);

--
-- Indices de la tabla `manejodecontrato`
--
ALTER TABLE `manejodecontrato`
  ADD PRIMARY KEY (`ID_DEUDA`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogos`
--
ALTER TABLE `catalogos`
  MODIFY `ID_CAT` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador catalogo';
--
-- AUTO_INCREMENT de la tabla `contratos`
--
ALTER TABLE `contratos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de contrato ', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  MODIFY `ID_PUESTO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador del puesto o inmueble', AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `manejodecontrato`
--
ALTER TABLE `manejodecontrato`
  MODIFY `ID_DEUDA` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de Deuda', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del usuario', AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
