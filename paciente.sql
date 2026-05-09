-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2026 a las 04:28:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `documento` int(11) NOT NULL,
  `nombre paciente` varchar(40) NOT NULL,
  `tipo de documento` varchar(5) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `fecha registro` date NOT NULL,
  `edad` int(3) NOT NULL,
  `eps` varchar(15) NOT NULL,
  `nombre contacto adicional` varchar(20) NOT NULL,
  `parentesco` varchar(10) NOT NULL,
  `examen a realizar` varchar(30) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `fecha de examen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `documento`, `nombre paciente`, `tipo de documento`, `direccion`, `telefono`, `celular`, `fecha registro`, `edad`, `eps`, `nombre contacto adicional`, `parentesco`, `examen a realizar`, `empresa`, `fecha de examen`) VALUES
(5, 14736453, 'Camila Rodriguez', 'CC', 'Calle 100 #15-20', '6013333', '3101234567', '2024-05-24', 42, 'Nueva EPS', 'Pedro Rodriguez', 'Hermano', 'Ecografía Abdominal', 'Particular', '2024-05-26'),
(6, 2222, 'Luis Fernando Ruiz', 'CC', 'Av. El Dorado 68-85', '6018888', '3209876543', '2024-05-25', 44, 'Famisanar', 'Martha Lopez', 'Esposa', 'Electrocardiograma', 'Industrias Zeta', '2024-05-27'),
(7, 11023654, 'Valentina Castro', 'CC', 'Carrera 15 #85-40', '6017777', '3156543210', '2024-05-26', 15, 'Sura', 'Diana Castro', 'Madre', 'Cuadro Hemático', 'Colegio XYZ', '2024-05-28'),
(8, 52418963, 'Carmen Alicia Vega', 'CC', 'Calle 50 #13-14', '6012222', '3001112233', '2024-05-27', 65, 'Aliansalud', 'Julio Vega', 'Hijo', 'Prueba de Glicemia', 'Particular', '2024-05-29'),
(9, 10365874, 'Diego Martinez', 'CC', 'Diagonal 45 #20-15', '6016666', '3129998877', '2024-05-28', 34, 'Sanitas', 'Ana Martinez', 'Hermana', 'Resonancia Magnética', 'Constructora Alfa', '2024-05-30'),
(10, 8520147, 'Roberto Gomez', 'CC', 'Carrera 7 #116-50', '6011111', '3187776655', '2024-05-29', 48, 'Compensar', 'Lucia Fernandez', 'Amiga', 'Prueba de Esfuerzo', 'Particular', '2024-05-31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
