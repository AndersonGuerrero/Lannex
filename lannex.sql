-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-04-2015 a las 16:11:53
-- Versión del servidor: 5.5.41-0ubuntu0.14.04.1-log
-- Versión de PHP: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lannex`
--
CREATE DATABASE IF NOT EXISTS `lannex` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lannex`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Cedula` varchar(12) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Clave` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `Nombre`, `Apellido`, `Cedula`, `Telefono`, `Usuario`, `Clave`) VALUES
(1, 'Anderson', 'Guerrero', '24390246', '0426-7449604', 'andres2811', '857d6befcd4269d5f78fac2c8bce8b87');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `direccion` text NOT NULL,
  `correo` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cedula`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`) VALUES
(2, 18855036, 'Jhoan', 'Hernandez', '0414-4440134', 'Sector Mucura 2', 'jhoanjam@gmail.com'),
(3, 19912562, 'Roxana', 'Arreaza', '0414-3685912', 'Sector La Nueva Revolucion', 'arreaza@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE IF NOT EXISTS `contratos` (
  `id` smallint(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `condiciones` text NOT NULL,
  `fecha` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`id`, `cliente_id`, `plan_id`, `condiciones`, `fecha`) VALUES
(00001, 1, 5, 'La fecha de corte del servicio sera los dias 03de cada y debera cancelar entre los dias 30 al 02 de fin e inicio de mes, de lo contrario sera suspendido del servicio y debera cancelar una reconexon por el servicio de 100,00 Bs.f.\r\nAtte. La Empresa Lannex,C.A.', '10/01/2015'),
(00002, 2, 4, 'La fecha de corte del servicio sera los dias 03de cada y debera cancelar entre los dias 30 al 02 de fin e inicio de mes, de lo contrario sera suspendido del servicio y debera cancelar una reconexon por el servicio de 100,00 Bs.f.\r\nAtte. La Empresa Lannex,C.A.', '10/01/2015'),
(00003, 3, 2, 'La fecha de corte del servicio sera los dias 03de cada y debera cancelar entre los dias 30 al 02 de fin e inicio de mes, de lo contrario sera suspendido del servicio y debera cancelar una reconexon por el servicio de 100,00 Bs.f.\r\nAtte. La Empresa Lannex,C.A.', '09/01/2015');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacions`
--

CREATE TABLE IF NOT EXISTS `notificacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Apellido` varchar(100) NOT NULL,
  `Cedula_Rif` varchar(50) NOT NULL,
  `Comunidad` varchar(100) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Monto` varchar(20) NOT NULL,
  `Corresponde` varchar(100) NOT NULL,
  `Tipo_pago` varchar(50) NOT NULL,
  `Numero_pago` varchar(100) NOT NULL,
  `Mi_banco` varchar(50) DEFAULT NULL,
  `Emp_banco` varchar(50) DEFAULT NULL,
  `Fecha_Hora` varchar(50) NOT NULL,
  `Mensaje` text NOT NULL,
  `dia` varchar(10) NOT NULL,
  `mes` varchar(10) NOT NULL,
  `ano` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `notificacions`
--

INSERT INTO `notificacions` (`id`, `Nombre_Apellido`, `Cedula_Rif`, `Comunidad`, `Telefono`, `Monto`, `Corresponde`, `Tipo_pago`, `Numero_pago`, `Mi_banco`, `Emp_banco`, `Fecha_Hora`, `Mensaje`, `dia`, `mes`, `ano`) VALUES
(8, 'Anderson Guerrero', '24390246', 'Virgen de Fatima ', '0426-7449604', '300', 'Mensualidad', 'Deposito', '0005', '', 'BACARIBE', '2015-01-17T19:04', 'Esperando', '18', '01', '2015'),
(9, 'Juan alvarado', '12345678', 'Villa de cura', '0412-1234567', '400', 'Instalacion', 'Transferencia', '001111', 'Banesco', 'BFC', '2015-01-17T03:01', 'Ya deposite', '18', '01', '2015'),
(11, 'Pablo Agraz', '57924687', 'Cagua', '0426-8924567', '300', 'Formateo de la pc', 'Efectivo', 'Jhoan Hernandez', '', NULL, '2015-01-17T15:01', 'Listo ya les pague', '18', '01', '2015'),
(12, 'Jhon', '18855036', 'las riberas', '04143685912', '400', 'Mensualidad', 'Transferencia', '0500300285', 'bancaribe', 'BNC', '2015-01-10T01:59', 'Mes de Enero 2015', '26', '01', '2015');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE IF NOT EXISTS `planes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `velocidad_subida` varchar(20) NOT NULL,
  `velocidad_bajada` varchar(20) NOT NULL,
  `precio` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `nombre`, `descripcion`, `velocidad_subida`, `velocidad_bajada`, `precio`) VALUES
(1, 'plan 386 kbps Domestico', 'plan de acceso a internet con conexion ilimitada sin limites de navegacion ni descargas.', '386 kbps', '126 kbps', '410,00'),
(2, '512/386 kbps Domestico', 'plan de acceso a internet con conexion ilimitada sin limites de navegacion ni descargas.', '512 klbps', '386 kbps', '650,00'),
(3, '512/386 kbps Pymes', 'plan de acceso a internet con conexion ilimitada sin limites de navegacion ni descargas.', '512kbps', '386kbps', '860,00'),
(4, '786/512 kbps Pymes', 'plan de acceso a internet con conexion ilimitada sin limites de navegacion ni descargas.', '786 kbps', '512 kbps', '1400,00'),
(5, '1050/786 kbps', 'plan de acceso a internet con conexion ilimitada sin limites de navegacion ni descargas.', '1050 kbps', '786 kbps', '1960,00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
