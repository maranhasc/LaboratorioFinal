-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2023 a las 14:22:04
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursosql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(50) NOT NULL,
  `segundo_apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`nombre`, `primer_apellido`, `segundo_apellido`, `email`, `login`, `password`) VALUES
('Carmen', 'maranhas', 'gomez', 'cmaranhasgc@gmail.com', '', 'mjhgg'),
('Carmen', 'maranhas', 'gomez', 'khkj@kjh.com', 'hola', 'holas'),
('carmen', 'maranhas', 'gomez', 'cmaranhasgc@alu.uclm.es', 'login', 'login'),
('pascuala', 'gomez', 'valero', 'pgomezcho@gmail.com', 'pascuala', 'pascu'),
('carlos', 'maranhas', 'valero', 'carlos@gmail.com', 'carlos', 'carlo'),
('paula', 'gomez', 'maranhas', 'paula@gmail.com', 'paula33', 'paula'),
('carmen', 'maranhas', 'gomez', 'cmaranhasgc@hole.es', 'carmen', 'hola');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
