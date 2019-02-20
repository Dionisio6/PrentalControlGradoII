-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2019 a las 12:34:35
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centromedico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `idconsul` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `fechacon` date NOT NULL,
  `peso` varchar(50) NOT NULL,
  `tenar` varchar(50) NOT NULL,
  `alut` varchar(200) NOT NULL,
  `presen` varchar(200) NOT NULL,
  `fcf` varchar(50) NOT NULL,
  `movf` varchar(50) NOT NULL,
  `ede` varchar(50) NOT NULL,
  `vari` varchar(50) NOT NULL,
  `medicos` varchar(50) NOT NULL,
  `obser` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`idconsul`, `identificacion`, `nombre`, `apellidos`, `edad`, `fechacon`, `peso`, `tenar`, `alut`, `presen`, `fcf`, `movf`, `ede`, `vari`, `medicos`, `obser`, `status`) VALUES
(15, 25129970, 'Dionisio', 'Marquez', 67, '2019-01-13', '67', '120', '80', '4', 'uhg', 'Si', 'Si', 'Si', 'Dionisio', 'gyfgcyuyg', 0),
(16, 25129876, 'Pancrasia', 'Lopez', 23, '2019-02-11', '67', '120', '44', '', '44', 'Si', 'Si', 'Si', 'barbara', '', 1),
(17, 9088324, 'Sofia', 'Marquez', 67, '2019-01-13', '67', '120', '80', '4', 'uhg', 'Si', 'Si', 'Si', 'Dionisio', 'Nada', 1),
(18, 123456, 'Flor', 'Perez', 23, '2019-02-03', '31', '12/60', '12', '1', '11', 'Si', 'Si', 'Si', 'Dionisio', 'ras', 1),
(19, 26830002, 'Barbara felimar', 'Marquez', 20, '2019-02-12', '58', '120/80', '12cm', '1', '20x1', 'Si', 'Si', 'Si', 'javier', 'Todo Bien', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'Control de embarazo', '#FF8C00', '2018-05-30 00:00:00', '2018-05-31 00:00:00'),
(2, 'n', '#2B0AD3', '2011-06-15 00:00:00', '2011-06-16 00:00:00'),
(5, 'Barbara Marquez', '#2B0AD3', '2019-02-14 00:00:00', '2019-02-15 00:00:00'),
(6, 'Joselin Mejais', '#860EF5', '2019-02-14 00:00:00', '2019-02-15 00:00:00'),
(8, 'Juana', '#40E0D0', '2019-02-15 00:00:00', '2019-02-16 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiaperinatal`
--

CREATE TABLE `historiaperinatal` (
  `idembara` int(11) NOT NULL,
  `numerohistoria` varchar(10) NOT NULL,
  `identificacion` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `nacionalidad` enum('Venezolana','Extranjero') NOT NULL,
  `edad` varchar(5) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `fechanac` date NOT NULL,
  `estudios` enum('Primaria','Bachillerato','Universitarios','Otros') NOT NULL,
  `edocivil` enum('Soltera','Casada','Divorciada','Otro') NOT NULL,
  `peso` int(3) NOT NULL,
  `talla` varchar(100) NOT NULL,
  `fum` date NOT NULL,
  `fpp` date NOT NULL,
  `grupos` enum('A+','A-','B+','B-','O+','O-','Otro') NOT NULL,
  `fuma` enum('Si','No') NOT NULL,
  `droga` enum('Si','No') NOT NULL,
  `alcohol` enum('Si','No') NOT NULL,
  `antiru` enum('Si','No') NOT NULL,
  `toxoide` enum('Si','No') NOT NULL,
  `hiv` enum('Si','No') NOT NULL,
  `exclini` enum('Si','No') NOT NULL,
  `exmama` enum('Si','No') NOT NULL,
  `exodon` enum('Si','No') NOT NULL,
  `expelv` enum('Si','No') NOT NULL,
  `expapan` enum('Si','No') NOT NULL,
  `excolon` enum('Si','No') NOT NULL,
  `excervix` enum('Si','No') NOT NULL,
  `toxoplasmosis` enum('Si','No') NOT NULL,
  `vdrl` enum('1','2','3','4','5') NOT NULL,
  `vdrlf` date NOT NULL,
  `glise` varchar(50) NOT NULL,
  `urea` varchar(50) NOT NULL,
  `hosp` enum('Si','No') NOT NULL,
  `trasl` enum('Si','No') NOT NULL,
  `traslf` date NOT NULL,
  `traslugar` varchar(50) NOT NULL,
  `gruposp` enum('A+','A-','B+','B-','O+','O-','Otro') NOT NULL,
  `vdrlp` enum('Si','No') NOT NULL,
  `vdrlpf` date NOT NULL,
  `sifilis` enum('Si','No') NOT NULL,
  `Obser` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historiaperinatal`
--

INSERT INTO `historiaperinatal` (`idembara`, `numerohistoria`, `identificacion`, `nombre`, `apellidos`, `nacionalidad`, `edad`, `domicilio`, `localidad`, `telefono`, `fechanac`, `estudios`, `edocivil`, `peso`, `talla`, `fum`, `fpp`, `grupos`, `fuma`, `droga`, `alcohol`, `antiru`, `toxoide`, `hiv`, `exclini`, `exmama`, `exodon`, `expelv`, `expapan`, `excolon`, `excervix`, `toxoplasmosis`, `vdrl`, `vdrlf`, `glise`, `urea`, `hosp`, `trasl`, `traslf`, `traslugar`, `gruposp`, `vdrlp`, `vdrlpf`, `sifilis`, `Obser`, `status`) VALUES
(1, '1100', '18329987', 'Ana', 'Marquez', 'Venezolana', '23', 'Altagracia', 'Altagracia', '04143445123', '1998-01-03', 'Bachillerato', 'Casada', 70, '165', '2019-01-01', '2020-01-03', '', 'No', 'No', 'No', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', '1', '2019-01-05', '89', '3', '', '', '0000-00-00', 'caracas', '', '', '0000-00-00', 'No', 'Hola', 1),
(2, '1101', '18592975', 'Flor', 'Martinez', 'Venezolana', '32', 'Altagracia', 'Altagracia', '04143445122', '1983-02-01', 'Universitarios', 'Divorciada', 78, '174', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 'Si', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', 1),
(3, '111', '26830002', 'Barbara', 'Marquez', '', '20', 'Valencia', 'Valencia', '04243555159', '1998-05-29', 'Bachillerato', 'Divorciada', 56, '', '2019-01-04', '2019-10-18', '', '', 'No', 'No', 'Si', '', '', '', '', '', '', '', '', '', 'Si', '', '2019-01-19', '120', '25', '', '', '2019-02-05', 'Caracas', '', '', '0000-00-00', 'Si', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `idMedico` int(11) NOT NULL,
  `medidentificacion` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `mednombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medapellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medtelefono` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `medcorreo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`idMedico`, `medidentificacion`, `mednombres`, `medapellidos`, `medtelefono`, `medcorreo`, `status`) VALUES
(24, '25129975', 'Dionisio', 'Marquez', '04143445123', 'dma@gma.com', 1),
(26, '24830002', 'Barbara', 'Marquez', '04143445123', '4@g.com', 1),
(27, '123', 'Javier', 'Guacarn', '1234', 'd@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(20) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `roll` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombres`, `apellidos`, `roll`, `status`) VALUES
(2, 'dionisio', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'Dionisio', 'Marquez', 'administrador', 1),
(13, 'limitado', 'ad2bfd03f78e08856396105e1744c7338f750db9fe8d65cb69c7c5593d6695433554affdff9fa8e2da666aaa17f8e7a11aa100a3d84f88d43cbf6821aa9142d8', 'Dario', 'Perez', 'limitado', 0),
(14, 'usuario', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Dario', 'Mendez', 'limitado', 1),
(15, 'administrador', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'Admin', '', 'administrador', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idconsul`),
  ADD UNIQUE KEY `identificacion` (`idconsul`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historiaperinatal`
--
ALTER TABLE `historiaperinatal`
  ADD PRIMARY KEY (`idembara`),
  ADD UNIQUE KEY `idembara` (`idembara`,`numerohistoria`,`identificacion`,`nombre`,`apellidos`,`nacionalidad`,`edad`,`domicilio`,`localidad`,`telefono`,`fechanac`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`idMedico`),
  ADD UNIQUE KEY `medidentificacion` (`medidentificacion`),
  ADD UNIQUE KEY `mednombres` (`idMedico`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idconsul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `historiaperinatal`
--
ALTER TABLE `historiaperinatal`
  MODIFY `idembara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
