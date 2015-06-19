-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2015 a las 18:46:49
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pagos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagostelenet`
--

CREATE TABLE IF NOT EXISTS `pagostelenet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomape` varchar(150) NOT NULL,
  `ci` int(10) NOT NULL,
  `direccion` varchar(1000) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `fpago` varchar(100) NOT NULL,
  `banco` varchar(100) NOT NULL,
  `noperacion` varchar(300) NOT NULL,
  `fechapago` date NOT NULL,
  `fregistro` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `pagostelenet`
--

INSERT INTO `pagostelenet` (`id`, `nomape`, `ci`, `direccion`, `telefono`, `plan`, `fpago`, `banco`, `noperacion`, `fechapago`, `fregistro`) VALUES
(4, 'sad', 1234, 'asdf', '3214234', 'Plan 2', 'transferencia', 'Banco 2', '3123', '2015-06-17', '0000-00-00'),
(5, 'sad', 1234, 'asdf', '3214234', 'Plan 2', 'transferencia', 'Banco 2', '3123', '2015-06-17', '0000-00-00'),
(6, 'sad', 1234, 'asdf', '3214234', 'Plan 2', 'transferencia', 'Banco 2', '3123', '2015-06-17', '0000-00-00'),
(7, 'eeqw', 123, 'adsda', '123413', 'Plan 1', 'deposito', 'Banco 1', '1234', '2015-06-17', '2015-06-17'),
(8, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 2147483647, 'qewrwrrew', '2147483647', 'Plan 1', 'deposito', 'Banco 1', '123412333333333', '0000-00-00', '2015-06-18'),
(9, 'nelson barroso', 22686088, 'barrio 9 de diciembre sabaneta estado barinas', '2147483647', 'Plan 2', 'transferencia', 'Banco 3', '2176675417521725371523', '2015-06-10', '2015-06-18'),
(10, '', 0, '', '2147483647', 'Plan 1', 'deposito', 'Banco 1', '', '0000-00-00', '2015-06-18'),
(11, '', 0, '', '04126733997', 'Plan 1', 'deposito', 'Banco 1', '', '0000-00-00', '2015-06-18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
