-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2021 a las 20:52:01
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
-- Base de datos: `tkam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE `acta` (
  `CodActa` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `Ciudad` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `FechaActa` date DEFAULT NULL,
  `HoraInicio` time DEFAULT NULL,
  `HoraFinal` time DEFAULT NULL,
  `Lugar/Enlace` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `Agenda` varchar(200) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `ObjetivosReunion` varchar(200) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `Participantes` int(11) DEFAULT NULL,
  `ConFicha` int(11) DEFAULT NULL,
  `VerificacionActas` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `TipoFalta_idTipoFalta` int(11) DEFAULT NULL,
  `Reporte_falta_Instructor_idInstructor` int(11) DEFAULT NULL,
  `Adestacar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `acta`
--

INSERT INTO `acta` (`CodActa`, `Ciudad`, `FechaActa`, `HoraInicio`, `HoraFinal`, `Lugar/Enlace`, `Agenda`, `ObjetivosReunion`, `Participantes`, `ConFicha`, `VerificacionActas`, `TipoFalta_idTipoFalta`, `Reporte_falta_Instructor_idInstructor`, `Adestacar`) VALUES
('1010', 'BOGOTA D.C', '2021-11-01', '20:37:48', '22:37:48', 'SALA PRINCIPAL DE REUNIONES', 'PUNTOS DE LA AGENDA', 'OBJETIVOS DE LA REUNION', 1, 2247675, 'CONSULTAR DE ARCHIVOS DE LAS ACTAS ANTERIORES', 1, 2020, 40414);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE `aprendices` (
  `idAprendiz` int(11) NOT NULL,
  `NombreAprendiz` varchar(45) NOT NULL,
  `cedula` int(100) NOT NULL,
  `acto_academico` varchar(600) NOT NULL,
  `inicio_etapa_lectiva` date NOT NULL,
  `fin_etapa_lectiva` date NOT NULL,
  `inicio_etapa_productiva` date NOT NULL,
  `fin_etapa_productiva` date NOT NULL,
  `id_ficha` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aprendices`
--

INSERT INTO `aprendices` (`idAprendiz`, `NombreAprendiz`, `cedula`, `acto_academico`, `inicio_etapa_lectiva`, `fin_etapa_lectiva`, `inicio_etapa_productiva`, `fin_etapa_productiva`, `id_ficha`) VALUES
(0, 'Luisa Rios', 1000364986, 'desercion', '2021-11-09', '2022-02-16', '2022-05-11', '2022-08-19', 2432156),
(0, 'Pepito Maracaibo', 1000564849, '2', '2021-11-12', '2021-11-06', '2021-11-07', '2021-11-27', 1549786),
(0, 'ailen tejas', 2147483647, 'Condicionamiento', '2021-12-04', '2021-11-27', '2021-11-17', '2021-11-20', 2023563),
(0, 'alan brito delgado ', 1000231458, 'Condicionamiento', '2021-11-03', '2021-11-09', '2021-11-10', '2021-12-04', 2023563),
(0, 'sad', 2147483647, 'Cancelacion', '2021-11-04', '2021-11-10', '2021-11-14', '2021-11-25', 2432156),
(0, 'sad', 2147483647, 'Cancelacion', '2021-11-04', '2021-11-10', '2021-11-14', '2021-11-25', 2432156),
(0, '', 0, '0', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1234524);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `idAprendiz` int(11) NOT NULL,
  `NombreAPrendiz` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `ApellidoAPrendiz` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `Tipo_documento_identificacion` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `Documento_identificacion` int(50) NOT NULL,
  `EmailAprendiz` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `TelAprendiz` int(11) DEFAULT NULL,
  `FIProductiva` date DEFAULT NULL,
  `FFEProductiva` date DEFAULT NULL,
  `EstadoAPCA` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `TipoAlternativa` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `NombreEmpresa` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `EstadoA_idEstadoA` int(11) DEFAULT NULL,
  `FICHA_idFICHA` int(11) DEFAULT NULL,
  `FICHA_Programa_idPrograma` int(11) DEFAULT NULL,
  `FICHA_Programa_Nivel Formacion_idNivel Formacion` int(11) DEFAULT NULL,
  `Instructor_idInstructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`idAprendiz`, `NombreAPrendiz`, `ApellidoAPrendiz`, `Tipo_documento_identificacion`, `Documento_identificacion`, `EmailAprendiz`, `TelAprendiz`, `FIProductiva`, `FFEProductiva`, `EstadoAPCA`, `TipoAlternativa`, `NombreEmpresa`, `EstadoA_idEstadoA`, `FICHA_idFICHA`, `FICHA_Programa_idPrograma`, `FICHA_Programa_Nivel Formacion_idNivel Formacion`, `Instructor_idInstructor`) VALUES
(3, 'Pepito Maracaibo', 'Ortiz', 'Cedula', 1001200027, 'frefrehtb@gmail.com', 11035144, '2021-11-26', '2021-12-12', 'activa', 'contrato', 'sena', 1, 2247675, 40414, 11, 28540),
(6, 'Luisa Rios', 'Ortiz', 'Cedula', 1000364986, 'criscam.alvarez2002@gmail.com', 31124545, '2021-11-27', '2021-12-11', 'activa', 'contrato', 'alfa', 2, 2247675, 40414, 10, 28540),
(40414, 'FELIPE', 'GOMEZ', 'cedula', 1000364986, 'cifuentes0903@gmail.com', 2669032, '2021-11-01', '2022-05-01', 'activo', 'contrato de aprendizaje', 'cenigraf', 1, 2247675, 40414, 11, 28540);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `Id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`Id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Instructor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoa`
--

CREATE TABLE `estadoa` (
  `idEstadoA` int(11) NOT NULL,
  `EstadoA` varchar(100) COLLATE utf32_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `estadoa`
--

INSERT INTO `estadoa` (`idEstadoA`, `EstadoA`) VALUES
(1, 'EN FORMACION'),
(2, 'CANCELADO'),
(3, 'RETIRO VOLUNTARIO'),
(4, 'TRASLADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `idFICHA` int(11) NOT NULL,
  `FILectiva` date DEFAULT NULL,
  `FFLectiva` date DEFAULT NULL,
  `FTFicha` date DEFAULT NULL,
  `Programa_idPrograma` int(11) DEFAULT NULL,
  `Programa_Nivel Formacion_idNivel Formacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`idFICHA`, `FILectiva`, `FFLectiva`, `FTFicha`, `Programa_idPrograma`, `Programa_Nivel Formacion_idNivel Formacion`) VALUES
(123, '2021-11-13', '2021-11-06', '2021-11-12', 40414, 10),
(2247675, '2023-08-05', '2022-09-03', '2021-11-20', 40414, 11),
(15497654, '2021-11-03', '2021-11-20', '2021-11-26', 40414, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `idInstructor` int(11) NOT NULL,
  `NombreInstructor` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `DescripcionFalta` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `Componente` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `HorasFalla` int(11) DEFAULT NULL,
  `ReporteVoceroFica` text CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `FechaReporte` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`idInstructor`, `NombreInstructor`, `DescripcionFalta`, `Componente`, `HorasFalla`, `ReporteVoceroFica`, `FechaReporte`) VALUES
(28540, 'LEIDY JOHANNA', 'CIFUENTES MARTINEZ', 'TECNICO', 10, 'SE ADJUNTA DOCUMENTO', '2021-11-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel _formacion`
--

CREATE TABLE `nivel _formacion` (
  `idNivelFormacion` int(11) NOT NULL,
  `NombreNivel` varchar(100) COLLATE utf32_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `nivel _formacion`
--

INSERT INTO `nivel _formacion` (`idNivelFormacion`, `NombreNivel`) VALUES
(10, 'TECNICO'),
(11, 'TECNOLOGO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `idParticipantes` int(11) NOT NULL,
  `NombreParticipantes` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `ApellidosParticipantes` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `CargoParticipante` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `EstadoParticipante` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`idParticipantes`, `NombreParticipantes`, `ApellidosParticipantes`, `CargoParticipante`, `EstadoParticipante`) VALUES
(1, 'DIANA ', 'GOMEZ', 'COORDINADORA', 'ASISTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `idPrograma` int(11) NOT NULL,
  `NombrePrograma` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `Nivel Formacion_idNivelFormacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`idPrograma`, `NombrePrograma`, `Nivel Formacion_idNivelFormacion`) VALUES
(40414, 'ADSI', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_falta`
--

CREATE TABLE `reporte_falta` (
  `idReporte` int(11) NOT NULL,
  `Deberes` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `Prohibicion` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `Observaciones` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `FechaReporte` date DEFAULT NULL,
  `TipoFalta_idTipoFalta` int(11) DEFAULT NULL,
  `Instructor_idInstructor` int(11) DEFAULT NULL,
  `InstructorJefeTaller` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL,
  `TotalFaltasA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `reporte_falta`
--

INSERT INTO `reporte_falta` (`idReporte`, `Deberes`, `Prohibicion`, `Observaciones`, `FechaReporte`, `TipoFalta_idTipoFalta`, `Instructor_idInstructor`, `InstructorJefeTaller`, `TotalFaltasA`) VALUES
(2020, 'LISTAS DE LOS DEBERES PARA SELECCIONAR VARIOS', 'LISTAS DE LAS PROHIBICIONES PARA SELECCIONAR VARIOS', 'NINGUNA', '2021-11-08', 1, 28540, 'CARLOS PEREZ', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipofalta`
--

CREATE TABLE `tipofalta` (
  `idTipoFalta` int(11) NOT NULL,
  `NombreFalta` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `tipofalta`
--

INSERT INTO `tipofalta` (`idTipoFalta`, `NombreFalta`) VALUES
(1, 'ACADEMICA'),
(2, 'DISCIPLINARIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nombre`, `usuario`, `email`, `contrasena`, `id_cargo`) VALUES
(1, 'Rafael Martinez', 'Rafael', 'rafael96@gmail.com', '12345', 1),
(10, 'andres', 'giovany', 'hector@gmail.com', '55555555', 2),
(11, 'pepita linda', 'linda', 'lindajaja@gmail.com', '897450', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta`
--
ALTER TABLE `acta`
  ADD PRIMARY KEY (`CodActa`),
  ADD KEY `Participantes` (`Participantes`,`ConFicha`,`TipoFalta_idTipoFalta`,`Reporte_falta_Instructor_idInstructor`),
  ADD KEY `FKConFicha` (`ConFicha`),
  ADD KEY `FKTipoFalta` (`TipoFalta_idTipoFalta`),
  ADD KEY `FKADESTACAR` (`Adestacar`),
  ADD KEY `FKREPORTE` (`Reporte_falta_Instructor_idInstructor`);

--
-- Indices de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD KEY `id_ficha` (`id_ficha`);

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`idAprendiz`),
  ADD KEY `EstadoA_idEstadoA` (`EstadoA_idEstadoA`,`FICHA_idFICHA`,`FICHA_Programa_idPrograma`,`FICHA_Programa_Nivel Formacion_idNivel Formacion`,`Instructor_idInstructor`),
  ADD KEY `FK_idFICHA` (`FICHA_idFICHA`) USING BTREE,
  ADD KEY `fk_idPrograma` (`FICHA_Programa_idPrograma`),
  ADD KEY `FKidNivelFormacion` (`FICHA_Programa_Nivel Formacion_idNivel Formacion`),
  ADD KEY `FK_idInstructor` (`Instructor_idInstructor`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `estadoa`
--
ALTER TABLE `estadoa`
  ADD PRIMARY KEY (`idEstadoA`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`idFICHA`),
  ADD KEY `FKFICHANIVEL` (`Programa_Nivel Formacion_idNivel Formacion`),
  ADD KEY `FKIDPROGRAMA` (`Programa_idPrograma`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`idInstructor`);

--
-- Indices de la tabla `nivel _formacion`
--
ALTER TABLE `nivel _formacion`
  ADD PRIMARY KEY (`idNivelFormacion`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`idParticipantes`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`idPrograma`),
  ADD KEY `Nivel Formacion_idNivelFormacion` (`Nivel Formacion_idNivelFormacion`);

--
-- Indices de la tabla `reporte_falta`
--
ALTER TABLE `reporte_falta`
  ADD PRIMARY KEY (`idReporte`),
  ADD KEY `TipoFalta_idTipoFalta` (`TipoFalta_idTipoFalta`,`Instructor_idInstructor`),
  ADD KEY `FKidInstructor` (`Instructor_idInstructor`);

--
-- Indices de la tabla `tipofalta`
--
ALTER TABLE `tipofalta`
  ADD PRIMARY KEY (`idTipoFalta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `idParticipantes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acta`
--
ALTER TABLE `acta`
  ADD CONSTRAINT `FKADESTACAR` FOREIGN KEY (`Adestacar`) REFERENCES `aprendiz` (`idAprendiz`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FKConFicha` FOREIGN KEY (`ConFicha`) REFERENCES `ficha` (`idFICHA`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FKPARTICIPANTES` FOREIGN KEY (`Participantes`) REFERENCES `participantes` (`idParticipantes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FKREPORTE` FOREIGN KEY (`Reporte_falta_Instructor_idInstructor`) REFERENCES `reporte_falta` (`idReporte`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FKTipoFalta` FOREIGN KEY (`TipoFalta_idTipoFalta`) REFERENCES `tipofalta` (`idTipoFalta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD CONSTRAINT `FKESTADO` FOREIGN KEY (`EstadoA_idEstadoA`) REFERENCES `estadoa` (`idEstadoA`),
  ADD CONSTRAINT `FK_idFICHA` FOREIGN KEY (`FICHA_idFICHA`) REFERENCES `ficha` (`idFICHA`),
  ADD CONSTRAINT `FK_idInstructor` FOREIGN KEY (`Instructor_idInstructor`) REFERENCES `instructor` (`idInstructor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FKidNivelFormacion` FOREIGN KEY (`FICHA_Programa_Nivel Formacion_idNivel Formacion`) REFERENCES `nivel _formacion` (`idNivelFormacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idPrograma` FOREIGN KEY (`FICHA_Programa_idPrograma`) REFERENCES `programa` (`idPrograma`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `FKFICHANIVEL` FOREIGN KEY (`Programa_Nivel Formacion_idNivel Formacion`) REFERENCES `nivel _formacion` (`idNivelFormacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FKIDPROGRAMA` FOREIGN KEY (`Programa_idPrograma`) REFERENCES `programa` (`idPrograma`);

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `FKNIVEL` FOREIGN KEY (`Nivel Formacion_idNivelFormacion`) REFERENCES `nivel _formacion` (`idNivelFormacion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `reporte_falta`
--
ALTER TABLE `reporte_falta`
  ADD CONSTRAINT `FKidInstructor` FOREIGN KEY (`Instructor_idInstructor`) REFERENCES `instructor` (`idInstructor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FKidTipoFalta` FOREIGN KEY (`TipoFalta_idTipoFalta`) REFERENCES `tipofalta` (`idTipoFalta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
