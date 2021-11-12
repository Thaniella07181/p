-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2021 a las 21:23:16
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE `acta` (
  `CodActa` int(11) NOT NULL,
  `Ciudad` varchar(45) NOT NULL,
  `FechaActa` date NOT NULL,
  `HoraInicio` time NOT NULL,
  `HoraFinal` time NOT NULL,
  `Lugar/Enlace` varchar(45) NOT NULL,
  `Agenda` varchar(45) NOT NULL,
  `ObjetivosReunion` varchar(45) NOT NULL,
  `Participantes` varchar(45) NOT NULL,
  `ConFicha` varchar(45) NOT NULL,
  `VerificacionActas` varchar(45) DEFAULT NULL,
  `CeAcomite` varchar(45) DEFAULT NULL,
  `CeActualco` varchar(45) DEFAULT NULL,
  `Adestacar` varchar(45) DEFAULT NULL,
  `Participantes_idParticipantes` int(11) NOT NULL,
  `Reporte_falta_TipoFalta_idTipoFalta` int(11) NOT NULL,
  `Reporte_falta_Instructor_idInstructor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acta`
--

INSERT INTO `acta` (`CodActa`, `Ciudad`, `FechaActa`, `HoraInicio`, `HoraFinal`, `Lugar/Enlace`, `Agenda`, `ObjetivosReunion`, `Participantes`, `ConFicha`, `VerificacionActas`, `CeAcomite`, `CeActualco`, `Adestacar`, `Participantes_idParticipantes`, `Reporte_falta_TipoFalta_idTipoFalta`, `Reporte_falta_Instructor_idInstructor`) VALUES
(1245, 'bogota', '2021-11-12', '18:15:51', '24:15:51', 'bogota', 'muchas cosas por hacer', 'reunirnos', 'thaniella y camelas', '6942', 'si ', 'algo ', 'poco ', 'mucho ', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `idAprendiz` int(11) NOT NULL,
  `NombreAPrendiz` varchar(45) NOT NULL,
  `ApellidoAPrendiz` varchar(45) NOT NULL,
  `Tipo_documento_identificacion` varchar(50) NOT NULL,
  `Documento_identificacion` varchar(50) NOT NULL,
  `EmailAprendiz` varchar(45) NOT NULL,
  `TelAprendiz` varchar(10) NOT NULL,
  `FIProductiva` date NOT NULL,
  `FFEProductiva` date NOT NULL,
  `EstadoAPCA` varchar(45) NOT NULL,
  `TipoAlternativa` varchar(45) NOT NULL,
  `NombreEmpresa` varchar(45) NOT NULL,
  `EstadoA_idEstadoA` int(11) NOT NULL,
  `FICHA_idFICHA` int(11) NOT NULL,
  `FICHA_Programa_idPrograma` int(11) NOT NULL,
  `FICHA_Programa_Nivel Formacion_idNivel Formacion` int(11) NOT NULL,
  `Instructor_idInstructor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`idAprendiz`, `NombreAPrendiz`, `ApellidoAPrendiz`, `Tipo_documento_identificacion`, `Documento_identificacion`, `EmailAprendiz`, `TelAprendiz`, `FIProductiva`, `FFEProductiva`, `EstadoAPCA`, `TipoAlternativa`, `NombreEmpresa`, `EstadoA_idEstadoA`, `FICHA_idFICHA`, `FICHA_Programa_idPrograma`, `FICHA_Programa_Nivel Formacion_idNivel Formacion`, `Instructor_idInstructor`) VALUES
(1, 'giovanny', 'camelas', 'cedula', '212463516351', 'giovannycamelas69@gmail.com', '3542046516', '2021-11-01', '2021-11-30', 'algo ', 'contrato ', 'cenigraf', 1, 2320563, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoa`
--

CREATE TABLE `estadoa` (
  `idEstadoA` int(11) NOT NULL,
  `EstadoA` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estadoa`
--

INSERT INTO `estadoa` (`idEstadoA`, `EstadoA`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `idFICHA` int(11) NOT NULL,
  `FILectiva` date NOT NULL,
  `FFLectiva` date NOT NULL,
  `FTFicha` date NOT NULL,
  `Programa_idPrograma` int(11) NOT NULL,
  `Programa_Nivel Formacion_idNivel Formacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`idFICHA`, `FILectiva`, `FFLectiva`, `FTFicha`, `Programa_idPrograma`, `Programa_Nivel Formacion_idNivel Formacion`) VALUES
(2320563, '2021-11-01', '2021-11-02', '2021-11-19', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `idInstructor` int(11) NOT NULL,
  `NombreInstructor` varchar(45) NOT NULL,
  `DescripcionFalta` varchar(45) NOT NULL,
  `Componente` varchar(45) NOT NULL,
  `HorasFalla` varchar(45) NOT NULL,
  `ReporteVoceroFica` varchar(200) NOT NULL,
  `FechaReporte` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`idInstructor`, `NombreInstructor`, `DescripcionFalta`, `Componente`, `HorasFalla`, `ReporteVoceroFica`, `FechaReporte`) VALUES
(1, 'Benito camelas', 'profe de programación ', 'alguno ', '10', 'reporte .......', '2021-11-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel formacion`
--

CREATE TABLE `nivel formacion` (
  `idNivel Formacion` int(11) NOT NULL,
  `NombreNivel` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nivel formacion`
--

INSERT INTO `nivel formacion` (`idNivel Formacion`, `NombreNivel`) VALUES
(1, 'técnico'),
(2, 'tecnólogo ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `idParticipantes` int(11) NOT NULL,
  `NombreParticipantes` varchar(45) NOT NULL,
  `ApellidosParticipantes` varchar(45) NOT NULL,
  `CargoParticipante` varchar(45) NOT NULL,
  `EstadoParticipante` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`idParticipantes`, `NombreParticipantes`, `ApellidosParticipantes`, `CargoParticipante`, `EstadoParticipante`) VALUES
(1, 'thaniella', 'camelas', 'aprendiz', 'activo ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `idPrograma` int(11) NOT NULL,
  `NombrePrograma` varchar(45) NOT NULL,
  `Nivel Formacion_idNivel Formacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`idPrograma`, `NombrePrograma`, `Nivel Formacion_idNivel Formacion`) VALUES
(1, 'ADSI', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_falta`
--

CREATE TABLE `reporte_falta` (
  `idReporte` int(11) NOT NULL,
  `NDeber1` varchar(45) NOT NULL,
  `NDeber2` varchar(45) NOT NULL,
  `NDeber3` varchar(45) NOT NULL,
  `Prohibicion1` varchar(45) NOT NULL,
  `Prohibicion2` varchar(45) NOT NULL,
  `Prohibicion3` varchar(45) NOT NULL,
  `Observaciones` varchar(200) NOT NULL,
  `FechaReporte` varchar(45) NOT NULL,
  `TipoFalta_idTipoFalta` int(11) NOT NULL,
  `Instructor_idInstructor` int(11) NOT NULL,
  `InstructorJefeTaller` varchar(45) NOT NULL,
  `TotalFaltasA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reporte_falta`
--

INSERT INTO `reporte_falta` (`idReporte`, `NDeber1`, `NDeber2`, `NDeber3`, `Prohibicion1`, `Prohibicion2`, `Prohibicion3`, `Observaciones`, `FechaReporte`, `TipoFalta_idTipoFalta`, `Instructor_idInstructor`, `InstructorJefeTaller`, `TotalFaltasA`) VALUES
(1, 'deber...1', 'deber...2', 'deber...3', 'prohibición... 1', 'prohibición... 2', 'prohibición... 3', 'observación.................................................................................................................................... ', '12/11/2021', 1, 1, 'benito ', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipofalta`
--

CREATE TABLE `tipofalta` (
  `idTipoFalta` int(11) NOT NULL,
  `NombreFalta` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipofalta`
--

INSERT INTO `tipofalta` (`idTipoFalta`, `NombreFalta`) VALUES
(1, 'llegada tarde');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta`
--
ALTER TABLE `acta`
  ADD PRIMARY KEY (`CodActa`,`Participantes_idParticipantes`,`Reporte_falta_TipoFalta_idTipoFalta`,`Reporte_falta_Instructor_idInstructor`),
  ADD KEY `fk_Acta_Participantes1` (`Participantes_idParticipantes`),
  ADD KEY `fk_Acta_Reporte_falta1` (`Reporte_falta_TipoFalta_idTipoFalta`,`Reporte_falta_Instructor_idInstructor`);

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`idAprendiz`,`EstadoA_idEstadoA`,`FICHA_idFICHA`,`FICHA_Programa_idPrograma`,`FICHA_Programa_Nivel Formacion_idNivel Formacion`,`Instructor_idInstructor`),
  ADD KEY `fk_Aprendiz_EstadoA1` (`EstadoA_idEstadoA`),
  ADD KEY `fk_Aprendiz_FICHA1` (`FICHA_idFICHA`,`FICHA_Programa_idPrograma`,`FICHA_Programa_Nivel Formacion_idNivel Formacion`),
  ADD KEY `fk_Aprendiz_Instructor1` (`Instructor_idInstructor`);

--
-- Indices de la tabla `estadoa`
--
ALTER TABLE `estadoa`
  ADD PRIMARY KEY (`idEstadoA`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`idFICHA`,`Programa_idPrograma`,`Programa_Nivel Formacion_idNivel Formacion`),
  ADD KEY `fk_FICHA_Programa1` (`Programa_idPrograma`,`Programa_Nivel Formacion_idNivel Formacion`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`idInstructor`);

--
-- Indices de la tabla `nivel formacion`
--
ALTER TABLE `nivel formacion`
  ADD PRIMARY KEY (`idNivel Formacion`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`idParticipantes`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`idPrograma`,`Nivel Formacion_idNivel Formacion`),
  ADD KEY `fk_Programa_Nivel Formacion1` (`Nivel Formacion_idNivel Formacion`);

--
-- Indices de la tabla `reporte_falta`
--
ALTER TABLE `reporte_falta`
  ADD PRIMARY KEY (`TipoFalta_idTipoFalta`,`Instructor_idInstructor`),
  ADD KEY `fk_Reporte_falta_Instructor1` (`Instructor_idInstructor`);

--
-- Indices de la tabla `tipofalta`
--
ALTER TABLE `tipofalta`
  ADD PRIMARY KEY (`idTipoFalta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `idAprendiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acta`
--
ALTER TABLE `acta`
  ADD CONSTRAINT `fk_Acta_Participantes1` FOREIGN KEY (`Participantes_idParticipantes`) REFERENCES `participantes` (`idParticipantes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Acta_Reporte_falta1` FOREIGN KEY (`Reporte_falta_TipoFalta_idTipoFalta`,`Reporte_falta_Instructor_idInstructor`) REFERENCES `reporte_falta` (`TipoFalta_idTipoFalta`, `Instructor_idInstructor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD CONSTRAINT `fk_Aprendiz_EstadoA1` FOREIGN KEY (`EstadoA_idEstadoA`) REFERENCES `estadoa` (`idEstadoA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Aprendiz_FICHA1` FOREIGN KEY (`FICHA_idFICHA`,`FICHA_Programa_idPrograma`,`FICHA_Programa_Nivel Formacion_idNivel Formacion`) REFERENCES `ficha` (`idFICHA`, `Programa_idPrograma`, `Programa_Nivel Formacion_idNivel Formacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Aprendiz_Instructor1` FOREIGN KEY (`Instructor_idInstructor`) REFERENCES `instructor` (`idInstructor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `fk_FICHA_Programa1` FOREIGN KEY (`Programa_idPrograma`,`Programa_Nivel Formacion_idNivel Formacion`) REFERENCES `programa` (`idPrograma`, `Nivel Formacion_idNivel Formacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `fk_Programa_Nivel Formacion1` FOREIGN KEY (`Nivel Formacion_idNivel Formacion`) REFERENCES `nivel formacion` (`idNivel Formacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reporte_falta`
--
ALTER TABLE `reporte_falta`
  ADD CONSTRAINT `fk_Reporte_falta_Instructor1` FOREIGN KEY (`Instructor_idInstructor`) REFERENCES `instructor` (`idInstructor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Reporte_falta_TipoFalta1` FOREIGN KEY (`TipoFalta_idTipoFalta`) REFERENCES `tipofalta` (`idTipoFalta`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
