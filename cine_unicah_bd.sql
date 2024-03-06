-- phpMyAdmin SQL Dump

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `cine_unicah`
--
 CREATE DATABASE cine_unicah;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientos`
--

CREATE TABLE `asientos` (
  `id_Asientos` int(11) NOT NULL,
  `id_sala` int(1) NOT NULL,
  `Id_categoria_asiento` int(2) NOT NULL,
  `numero_asiento` varchar(2) NOT NULL,
  `fila` varchar(1) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asientos`
--

INSERT INTO `asientos` (`id_Asientos`, `id_sala`, `Id_categoria_asiento`, `numero_asiento`, `fila`, `estado`) VALUES
(1, 1, 2, 'A1', 'A', 1),
(2, 1, 2, 'A2', 'A', 1),
(3, 1, 1, 'A3', 'A', 1),
(4, 1, 1, 'A4', 'A', 1),
(5, 1, 1, 'A5', 'A', 1),
(6, 1, 1, 'A6', 'A', 1),
(7, 1, 1, 'A7', 'A', 1),
(8, 1, 1, 'A8', 'A', 1),
(9, 1, 1, 'B1', 'B', 1),
(10, 1, 1, 'B2', 'B', 1),
(11, 1, 1, 'B3', 'B', 1),
(12, 1, 1, 'B4', 'B', 1),
(13, 1, 1, 'B5', 'B', 1),
(14, 1, 1, 'B6', 'B', 1),
(15, 1, 1, 'B7', 'B', 1),
(16, 1, 1, 'B8', 'B', 1),
(17, 1, 1, 'C1', 'C', 1),
(18, 1, 1, 'C2', 'C', 1),
(19, 1, 1, 'C3', 'C', 1),
(20, 1, 1, 'C4', 'C', 1),
(21, 1, 1, 'C5', 'C', 1),
(22, 1, 1, 'C6', 'C', 1),
(23, 1, 1, 'C7', 'C', 1),
(24, 1, 1, 'C8', 'C', 1),
(25, 1, 1, 'D1', 'D', 1),
(26, 1, 1, 'D2', 'D', 1),
(27, 1, 1, 'D3', 'D', 1),
(28, 1, 1, 'D4', 'D', 1),
(29, 1, 1, 'D5', 'D', 1),
(30, 1, 1, 'D6', 'D', 1),
(31, 1, 1, 'D7', 'D', 1),
(32, 1, 1, 'D8', 'D', 1),
(33, 1, 1, 'E1', 'E', 1),
(34, 1, 1, 'E2', 'E', 1),
(35, 1, 1, 'E3', 'E', 1),
(36, 1, 1, 'E4', 'E', 1),
(37, 1, 1, 'E5', 'E', 1),
(38, 1, 1, 'E6', 'E', 1),
(39, 1, 1, 'E7', 'E', 1),
(40, 1, 1, 'E8', 'E', 1),
(41, 1, 1, 'F1', 'F', 1),
(42, 1, 1, 'F2', 'F', 1),
(43, 1, 1, 'F3', 'F', 1),
(44, 1, 1, 'F4', 'F', 1),
(45, 1, 1, 'F5', 'F', 1),
(46, 1, 1, 'F6', 'F', 1),
(47, 1, 1, 'F7', 'F', 1),
(48, 1, 1, 'F8', 'F', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_asientos`
--

CREATE TABLE `categoria_asientos` (
  `ID_categoria_asiento` int(1) NOT NULL,
  `Descripcion_asiento` varchar(50) NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_asientos`
--

INSERT INTO `categoria_asientos` (`ID_categoria_asiento`, `Descripcion_asiento`, `Estado`) VALUES
(1, 'Todo Publico', 1),
(2, 'Personas con capacidades diferentes', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion_pelicula`
--

CREATE TABLE `clasificacion_pelicula` (
  `ID_Clasificacion_Pelicula` int(1) NOT NULL,
  `Tipo_Clasificacion` varchar(3) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clasificacion_pelicula`
--

INSERT INTO `clasificacion_pelicula` (`ID_Clasificacion_Pelicula`, `Tipo_Clasificacion`, `Descripcion`, `Estado`) VALUES
(1, 'AA', 'Películas para todo público que tengan además atractivo infantil y sean comprensibles para niños men', 1),
(2, 'A', '	\r\n\r\nPelículas para todo público.', 1),
(3, 'B', 'Películas para adolescentes de 12 años en adelante.', 1),
(4, 'B15', 'Película no recomendable para menores de 15 años de edad.', 1),
(5, 'C', 'Películas para adultos de 18 años en adelante.', 1),
(6, 'D', 'Películas para adultos, con sexo explícito, lenguaje procaz o alto grado de violencia.\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

CREATE TABLE `contador` (
  `Contador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contador`
--

INSERT INTO `contador` (`Contador`) VALUES
(50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosusuariofact`
--

CREATE TABLE `datosusuariofact` (
  `ID_Usuario` int(100) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `CorreoUser` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_orden`
--

CREATE TABLE `datos_orden` (
  `IDorden` int(11) NOT NULL,
  `NConfirmacion` int(11) NOT NULL,
  `Pelicula` varchar(11) NOT NULL,
  `Sala` int(1) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time(6) NOT NULL,
  `Transacción` int(8) NOT NULL,
  `Boletos` int(2) NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_orden`
--

INSERT INTO `datos_orden` (`IDorden`, `NConfirmacion`, `Pelicula`, `Sala`, `Fecha`, `Hora`, `Transacción`, `Boletos`, `Total`) VALUES
(1, 10011, 'THor', 2, '2022-07-01', '09:00:00.000000', 10011, 1, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_fact`
--

CREATE TABLE `detalle_fact` (
  `ID_DetalleFact` int(11) NOT NULL,
  `Id_producto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_fact`
--

INSERT INTO `detalle_fact` (`ID_DetalleFact`, `Id_producto`, `Cantidad`, `Estado`) VALUES
(0, 0, 0, 1),
(1, 1, 1, 1),
(1, 2, 1, 1),
(1, 3, 1, 1),
(2, 1, 1, 1),
(3, 1, 1, 1),
(4, 1, 1, 1),
(5, 1, 1, 1),
(6, 1, 1, 1),
(6, 2, 1, 1),
(6, 3, 1, 1),
(7, 1, 1, 1),
(8, 2, 1, 1),
(9, 3, 0, 1),
(10, 2, 1, 1),
(11, 3, 1, 1),
(12, 1, 1, 1),
(12, 2, 1, 1),
(13, 1, 1, 1),
(13, 3, 1, 1),
(14, 2, 1, 1),
(14, 3, 1, 1),
(15, 1, 1, 1),
(16, 1, 1, 1),
(16, 2, 1, 1),
(17, 1, 1, 1),
(18, 1, 1, 1),
(18, 3, 1, 1),
(18, 5, 1, 1),
(19, 1, 1, 1),
(19, 7, 1, 1),
(20, 1, 1, 1),
(20, 7, 1, 1),
(21, 1, 1, 1),
(22, 1, 1, 1),
(22, 2, 1, 1),
(23, 1, 1, 1),
(24, 1, 1, 1),
(25, 1, 1, 1),
(25, 7, 1, 1),
(26, 2, 1, 1),
(26, 3, 1, 1),
(51, 1, 1, 1),
(50, 7, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `ID_producto` int(1) NOT NULL,
  `Descripcion_entrada` varchar(100) NOT NULL,
  `Precio` float NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`ID_producto`, `Descripcion_entrada`, `Precio`, `Estado`) VALUES
(1, 'Entrada Adulto', 100, 1),
(2, 'Entrada Niño ', 80, 1),
(3, 'Entrada Tercera Edad ', 80, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_Factura` int(11) NOT NULL,
  `ID_DetalleFact` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `ID_Transacción` int(11) NOT NULL,
  `FechayHoraFact` datetime NOT NULL DEFAULT current_timestamp(),
  `ISV` float NOT NULL,
  `SubTotal` float NOT NULL,
  `Total` float NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`ID_Factura`, `ID_DetalleFact`, `ID_Usuario`, `ID_Transacción`, `FechayHoraFact`, `ISV`, `SubTotal`, `Total`, `Estado`) VALUES
(4, 4, 1, 0, '2022-06-21 00:03:06', 15, 100, 115, 1),
(5, 5, 1, 9, '2022-06-21 00:00:00', 15, 100, 115, 1),
(6, 6, 1, 10, '2022-07-22 00:20:21', 39, 260, 299, 1),
(7, 7, 1, 11, '2022-07-22 00:21:00', 15, 100, 115, 1),
(8, 8, 1, 12, '2022-07-22 00:21:17', 0, 0, 0, 1),
(9, 9, 1, 13, '2022-07-22 00:21:12', 0, 0, 0, 1),
(10, 10, 1, 14, '2022-07-22 00:23:24', 12, 80, 92, 1),
(11, 11, 1, 15, '2022-07-22 00:23:48', 12, 80, 92, 1),
(12, 12, 1, 16, '2022-07-22 00:24:11', 27, 180, 207, 1),
(13, 13, 1, 17, '2022-07-23 00:24:27', 27, 180, 207, 1),
(14, 14, 1, 18, '2022-07-23 00:25:02', 24, 160, 184, 1),
(15, 15, 2, 19, '2022-07-23 00:37:05', 15, 100, 115, 1),
(16, 16, 3, 20, '2022-07-23 00:40:05', 27, 180, 207, 1),
(17, 17, 2, 21, '2022-07-23 00:50:26', 15, 100, 115, 1),
(18, 18, 3, 22, '2022-07-23 01:17:56', 42, 280, 322, 1),
(19, 19, 2, 23, '2022-07-23 01:26:42', 41.25, 275, 316.25, 1),
(20, 20, 2, 24, '2022-07-23 01:54:46', 41.25, 275, 316.25, 1),
(21, 21, 1, 0, '2022-07-23 05:42:33', 0, 0, 0, 1),
(22, 22, 1, 0, '2022-07-23 06:06:43', 0, 0, 0, 1),
(23, 23, 1, 0, '2022-07-23 06:07:55', 0, 0, 0, 1),
(24, 24, 2, 25, '2022-07-23 06:08:13', 15, 100, 115, 1),
(25, 25, 2, 25, '2022-07-23 12:37:32', 41.25, 275, 316.25, 1),
(26, 26, 0, 27, '2022-07-23 12:50:39', 0, 0, 0, 1),
(0, 51, 0, 0, '2022-08-03 21:03:34', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato_peliculas`
--

CREATE TABLE `formato_peliculas` (
  `ID_Formato` int(1) NOT NULL,
  `Descripcion_Formato` varchar(100) NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formato_peliculas`
--

INSERT INTO `formato_peliculas` (`ID_Formato`, `Descripcion_Formato`, `Estado`) VALUES
(1, 'DOB,3D', 1),
(2, 'DOB,2D', 1),
(3, 'SUB,2D', 1),
(4, 'SUB,3D', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones`
--

CREATE TABLE `funciones` (
  `ID_Funcion` int(1) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `ID_Pelicula` int(1) NOT NULL,
  `ID_Formato` int(11) NOT NULL,
  `ID_sala` int(1) NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `funciones`
--

INSERT INTO `funciones` (`ID_Funcion`, `Fecha`, `Hora`, `ID_Pelicula`, `ID_Formato`, `ID_sala`, `Estado`) VALUES
(1, '2022-07-21', '18:00:00', 1, 2, 1, 1),
(2, '2022-07-21', '19:15:00', 1, 2, 2, 1),
(5, '2022-07-22', '19:15:00', 1, 2, 2, 1),
(6, '2022-07-22', '18:00:00', 1, 2, 1, 1),
(7, '2022-07-23', '18:00:00', 1, 2, 1, 1),
(8, '2022-07-23', '19:15:00', 1, 2, 2, 1),
(9, '2022-07-24', '18:00:00', 1, 2, 1, 1),
(10, '2022-07-24', '19:15:00', 1, 2, 2, 1),
(11, '2022-07-25', '18:00:00', 1, 2, 1, 1),
(12, '2022-07-25', '19:15:00', 1, 2, 2, 1),
(13, '2022-07-26', '18:00:00', 1, 2, 1, 1),
(14, '2022-07-26', '19:15:00', 1, 2, 2, 1),
(15, '2022-07-21', '18:00:00', 1, 3, 1, 1),
(16, '2022-07-21', '19:15:00', 1, 3, 2, 1),
(17, '2022-07-22', '19:15:00', 1, 3, 2, 1),
(18, '2022-07-22', '18:00:00', 1, 3, 1, 1),
(19, '2022-07-23', '18:00:00', 1, 3, 1, 1),
(20, '2022-07-23', '19:15:00', 1, 3, 2, 1),
(21, '2022-07-24', '18:00:00', 1, 3, 1, 1),
(22, '2022-07-24', '19:15:00', 1, 3, 2, 1),
(23, '2022-07-25', '18:00:00', 1, 3, 1, 1),
(24, '2022-07-25', '19:15:00', 1, 3, 2, 1),
(25, '2022-07-26', '18:00:00', 1, 3, 1, 1),
(26, '2022-07-26', '19:15:00', 1, 3, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `ID_Genero` int(100) NOT NULL,
  `Descripcion_genero` varchar(100) NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`ID_Genero`, `Descripcion_genero`, `Estado`) VALUES
(1, 'Acción. En este género prevalecen altas dosis de adrenalina con una buena carga de movimiento, fugas', 1),
(2, 'Aventuras. Similares a las de acción, predominan las nuevas experiencias y situaciones.', 1),
(3, 'Ciencia Ficción. Basados en fenómenos imaginarios, en la ciencia ficción son usuales los extraterres', 1),
(4, 'Comedia. Diseñadas específicamente para provocar la risa o la alegría entre los espectadores.', 1),
(5, 'No- Ficción / documental. Este género analiza un hecho o situación real sin ficcionarlo.', 1),
(6, 'Drama. Los dramas se centran en desarrollar el problema o problemas entre los diferentes protagonist', 1),
(7, 'Fantasía. En ellas se incluyen personajes irreales o totalmente inventados, inexistentes en nuestra ', 1),
(8, 'Musical. Las películas que cortan su desarrollo natural con fragmentos musicales son protagonistas d', 1),
(9, 'Suspense. Conocido también como intriga, estas películas se desarrollan rápidamente, y todos sus ele', 1),
(10, 'Terror. Su principal objetivo es causar miedo, horror, incomodidad o preocupación.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `IdHora` int(1) NOT NULL,
  `Horario` time(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`IdHora`, `Horario`) VALUES
(1, '12:00:00.00'),
(2, '01:00:00.00'),
(3, '02:00:00.00'),
(4, '03:00:00.00'),
(5, '04:00:00.00'),
(6, '05:00:00.00'),
(7, '06:00:00.00'),
(8, '07:00:00.00'),
(9, '08:00:00.00'),
(10, '09:00:00.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `ID_Idioma` int(1) NOT NULL,
  `Descripcion_idioma` varchar(100) NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`ID_Idioma`, `Descripcion_idioma`, `Estado`) VALUES
(1, 'Español Latino', 1),
(2, 'Ingles subtitulada(Español)', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitado`
--

CREATE TABLE `invitado` (
  `ID_Invitado` int(100) NOT NULL,
  `DNI` bigint(20) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `telefono` int(8) NOT NULL,
  `Estado` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `invitado`
--

INSERT INTO `invitado` (`ID_Invitado`, `DNI`, `Nombre`, `correo`, `telefono`, `Estado`) VALUES
(1, 15041882145, 'Daniel Godoy', 'Daniel@gmail.com', 2475741, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isv`
--

CREATE TABLE `isv` (
  `ISV` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `isv`
--

INSERT INTO `isv` (`ISV`) VALUES
(0.15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `ID_Transacción` int(11) NOT NULL,
  `NumeroTarjeta` bigint(20) NOT NULL,
  `MesExpiracion` varchar(20) NOT NULL,
  `AñoExpiracion` year(4) NOT NULL,
  `Cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`ID_Transacción`, `NumeroTarjeta`, `MesExpiracion`, `AñoExpiracion`, `Cvv`) VALUES
(21, 9223372036854775807, 'julio', 2025, 123),
(22, 11111, 'MAYO', 2025, 12),
(23, 9223372036854775807, 'MAYO', 2022, 124),
(24, 1111111, 'Abril', 2025, 123),
(25, 1123456789123456789, 'MAYO', 2025, 125),
(26, 514787844, '25848485', 2025, 1254),
(27, 11151561, '515648', 2022, 123),
(0, 11154578, 'Mayo', 2025, 124),
(0, 11154578, 'Mayo', 2025, 124),
(0, 11154578, 'Mayo', 2025, 124),
(0, 123457895214782145, 'mayo', 2025, 125),
(0, 123457895214782145, 'mayo', 2025, 125),
(0, 1245645478523124848, 'Mayo', 2022, 125),
(0, 1245645478523124848, 'Mayo', 2022, 125);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pantalla1`
--

CREATE TABLE `pantalla1` (
  `Fecha` date DEFAULT NULL,
  `Titulo` varchar(50) DEFAULT NULL,
  `Descripcion_formato` varchar(100) DEFAULT NULL,
  `Hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `ID_Pelicula` int(100) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `fecha_estreno` date NOT NULL,
  `fecha_terminacion` date NOT NULL,
  `Sinopsis` varchar(50) NOT NULL,
  `ID_Clasificacion_Pelicula` int(100) NOT NULL,
  `ID_Genero` int(100) NOT NULL,
  `ID_Idioma` int(100) NOT NULL,
  `ID_Formato` int(100) NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`ID_Pelicula`, `Titulo`, `fecha_estreno`, `fecha_terminacion`, `Sinopsis`, `ID_Clasificacion_Pelicula`, `ID_Genero`, `ID_Idioma`, `ID_Formato`, `Estado`) VALUES
(1, 'Morbiou', '2022-07-23', '2022-07-14', 'Ambientada en el universo de Spider Man, se centra', 4, 1, 1, 2, 0),
(2, 'Thor', '2022-07-23', '2022-07-14', 'Una fuerza misteriosa golpea a la Luna fuera de su', 2, 9, 1, 4, 1),
(3, 'Ojos de fuego', '2022-07-23', '2022-07-14', 'Una pareja oculta a su hija, Charlie, capaz de pro', 3, 2, 2, 4, 1),
(4, 'Jurassic World (Dominion)', '2022-07-23', '2022-07-14', 'La isla Nublar y su parque han sido destruidos, pe', 1, 2, 1, 3, 1),
(5, 'Morbiou', '2022-07-23', '2022-07-14', 'Ambientada en el universo de Spider Man, se centra', 4, 1, 1, 3, 0),
(6, 'Ojos de fuego', '2022-07-23', '2022-07-14', 'Una pareja oculta a su hija, Charlie, capaz de pro', 3, 2, 2, 3, 1),
(7, 'Ojos de fuego', '2022-07-23', '2022-07-14', 'Una pareja oculta a su hija, Charlie, capaz de pro', 3, 2, 2, 2, 1),
(11, 'Thor', '2022-07-23', '2022-07-14', 'Una fuerza misteriosa golpea a la Luna fuera de su', 2, 9, 1, 1, 1),
(12, 'Thor', '2022-07-23', '2022-07-14', 'Una fuerza misteriosa golpea a la Luna fuera de su', 2, 9, 1, 2, 1),
(13, 'Thor', '2022-07-23', '2022-07-14', 'Una fuerza misteriosa golpea a la Luna fuera de su', 2, 9, 1, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_Producto` int(11) NOT NULL,
  `Descripcion` varchar(70) NOT NULL,
  `Precio` float NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_Producto`, `Descripcion`, `Precio`, `Estado`) VALUES
(1, 'Entrada_Adulto', 100, 1),
(2, 'Entrada_Niño', 80, 1),
(3, 'Tercera_Edad', 80, 1),
(4, 'Combo_Infantil', 110, 1),
(5, 'Palimitas Normal,1 Nacho y 1 Refresco', 100, 1),
(6, 'Combo_Familiar (2 Palomitas Grandes,2 Nachos,2 Hot', 230, 1),
(7, 'Palomitas Grandes, 1 Nacho, 1 Hotdog, 2 Refrescos', 175, 1),
(8, 'Refresco y Hotdog', 70, 1),
(9, 'Refresco y Nachos', 70, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `Id_TIcket` int(11) NOT NULL,
  `ID_Función` int(11) NOT NULL,
  `ID_Asiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `ID_Sala` int(1) NOT NULL,
  `numero_sala` int(1) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`ID_Sala`, `numero_sala`, `estado`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_temp`
--

CREATE TABLE `total_temp` (
  `ID_DetalleFact` int(11) DEFAULT NULL,
  `SubTotalFact` double DEFAULT NULL,
  `ISV` double DEFAULT NULL,
  `Total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_ventas_diarias`
--

CREATE TABLE `total_ventas_diarias` (
  `Cantidad de Ventas` bigint(21) DEFAULT NULL,
  `total de Ventas` double DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `CorreoUser` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`ID`, `CorreoUser`) VALUES
(1, 'JANCEL2022@GMAIL.COM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
CREATE TABLE `usuarios` (
  `ID_Usuario` int NOT NULL AUTO_INCREMENT,
  `DNI` bigint(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(150) NOT NULL,
  `telefono` int(8) NOT NULL,
  `Estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`ID_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuario`, `DNI`, `nombre`, `correo`, `contrasena`, `telefono`, `Estado`) VALUES
(0, 801199215880, 'Daniel Godoy', 'dana_godoym@unicah.edu', '12345678', 22248139, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`IdHora`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `IdHora` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
