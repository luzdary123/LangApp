-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2018 a las 17:15:17
-- Versión del servidor: 5.7.18-log
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `langapp`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `cotizac` ()  BEGIN
SELECT *, min(cotValor) from cotizaciones;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarCliente` (`id` INT(11), `cedula` INT(11), `nombre` VARCHAR(25), `apellido` VARCHAR(25), `direccion` VARCHAR(25), `telefono` INT(11))  insert into clientes(cliId, cliCedula, cliNombre, cliApellido, cliDireccion, cliTelefono)
 values ('id','cedula', 'nombre', 'apellido', 'direccion',' telefono')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarCompra` (`valor` DOUBLE, `Fecha` DATE)  insert into compra(Comvalor, Comfecha)
values (valor, fecha)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Insertarcotizacion` (`id` INT(11), `fecha` DATE, `producto` VARCHAR(25), `cantidad` INT(11), `valor` DOUBLE)  insert into cotizaciones(cotId, cotFecha, cotProducto, cotCantidad, cotValor)
 values('id', 'fecha', 'producto', 'cantidad','valor')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarFactura` (`id` INT(11), `nombre` VARCHAR(25), `direccion` VARCHAR(25), `concepto` VARCHAR(25), `cantidad` INT(11), `valorunit` DOUBLE, `valortotal` DOUBLE)  insert into facturas(facId,facNombre,facDireccion, facConcepto,facCantidad,facValorUnit,facValorTotal)
 values ('id','nombre','apellido','direccion','concepto','cantidad','valorunit','valortotal')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarInventario` (`id` INT(11), `nombre` VARCHAR(25), `descripcion` VARCHAR(25), `cantidad` INT(11), `valorunit` DOUBLE, `valortotal` DOUBLE)  insert into inventarios(invId,invNombre,invDescripcion, invCantidad,invValorUnit,invValorTotal)
 values ('id','nombre','descripcion','cantidad','valorunit','valortotal')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarPedido` (`id` INT(11), `fecha` DATE, `descripcion` VARCHAR(25), `cantidad` INT(11), `valor` DOUBLE)  insert into pedidos(pedId,pedFecha,pedDescripcion,pedCantidad,pedValor)
values('id','fecha', 'descripcion','cantidad','valor')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarProducto` (`id` INT(11), `nombre` VARCHAR(25), `descripcion` VARCHAR(25), `Valor` DOUBLE)  insert into productos(ProId, proCodigo, ProNombre, ProDescripcion, ProValor)
values('id','codigo', 'nombre', 'descripcion', 'valor')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarProveedor` (`id` INT(11), `nombre` VARCHAR(25), `Apellido` VARCHAR(25), `Direccion` VARCHAR(25), `Telefono` VARCHAR(25))  insert into proveedores(ProId, ProNombre, ProApellido, ProDireccion, proTelefono)
 values('id', 'nombre', 'apellido', 'direccion','telefono')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ped_cos` ()  BEGIN
SELECT max(pedValor), cliNombre, pedFecha, pedValor from clientes, pedidos where1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Valorped` ()  BEGIN
SELECT * FROM pedidos where  pedValor >600000;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ValorProducto` ()  BEGIN
Select * from productos order by ProValor asc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `´cliente_nombre´` ()  select cliNombre from clientes order by cliNombre$$

--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `cantidad_clientes` () RETURNS INT(11) BEGIN
DECLARE cantidad int;
SELECT count(*) into cantidad from clientes;
RETURN cantidad;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `cantidad_cotizaciones` () RETURNS INT(11) BEGIN
DECLARE cantidad int;
SELECT count(*) into cantidad from cotizaciones;
RETURN cantidad;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `cantidad_proveedores` () RETURNS INT(11) BEGIN
DECLARE cantidad int;
SELECT count(*) into cantidad from proveedores;
RETURN cantidad;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `pedido-val` () RETURNS VARCHAR(25) CHARSET utf8 BEGIN
DECLARE salida varchar(25);
SELECT CONCAT(cliNombre,' ', pedFecha, ' ', pedValor)
INTO salida
FROM pedidos, clientes
WHERE idcliente=idPedido_Cliente and pedvalor=(SELECT max(pedValor) from pedidos);
RETURN salida;

END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `prod_cos1` () RETURNS VARCHAR(25) CHARSET utf8 BEGIN
declare pc varchar(25);
select concat( proNombre, ' ', proValor) into pc
from productos
where proValor=(select max(proValor) from productos);
return pc;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `idCategory` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`idCategory`, `Name`) VALUES
(1, 'sports'),
(2, 'Health'),
(3, 'Education'),
(4, 'Beauty'),
(5, 'Animals'),
(6, 'Hobbies'),
(7, 'Salud'),
(8, 'Professions');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `idCourse` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `idCourse_Teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`idCourse`, `Name`, `idCourse_Teacher`) VALUES
(3, 'Ingles Basico', 1087654345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `idcurso` int(11) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `mes` varchar(25) NOT NULL,
  `total` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `level`
--

CREATE TABLE `level` (
  `idLevel` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `level`
--

INSERT INTO `level` (`idLevel`, `Name`) VALUES
(1, 'Basic English'),
(2, 'Intermediate English'),
(3, 'Advanced English');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `idStudent` int(11) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Phone` char(30) NOT NULL,
  `Level` int(30) NOT NULL,
  `Identification` int(15) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`idStudent`, `LastName`, `Address`, `Phone`, `Level`, `Identification`, `Name`) VALUES
(1, 'Vargas', 'Calle 67 cra 6', '7799089', 2, 23456777, 'Gerrard'),
(2, 'Roa', 'Pasaje el Vienez 21-34', '321234566', 2, 567789099, 'Yeremy'),
(3, 'Villaalba', 'Pasaje el Pirineo 32-45', '2234566', 2, 1345676677, 'Miriam'),
(4, 'Salazar', 'calle el canquen', '7709890', 1, 23456778, 'Jose'),
(6, 'Medina', 'Calle 67 cra 56', '3234567789', 2, 45666543, 'Polo'),
(7, 'Caceres', 'Pasaje 45 cra 7', '3213234456', 2, 8765445, 'Miguel'),
(8, 'Manriquez', 'Calle 45 cra 1', '', 3, 9876776, 'Ariel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories`
--

CREATE TABLE `subcategories` (
  `idSubcategory` int(11) NOT NULL,
  `idSubcategory_Category` int(25) NOT NULL,
  `Name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcategories`
--

INSERT INTO `subcategories` (`idSubcategory`, `idSubcategory_Category`, `Name`) VALUES
(1, 5, 'artropodos'),
(2, 5, 'Anfidios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `idTeacher` int(11) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `LastName` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Phone` char(25) NOT NULL,
  `Identification` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `teachers`
--

INSERT INTO `teachers` (`idTeacher`, `Name`, `LastName`, `Address`, `Phone`, `Identification`) VALUES
(47, 'Alejandra', 'Villanueva', 'calle 5 Transversal 23', '6789900', '10567890'),
(60, 'Juan', 'Castillo', 'pje 45', '23456678', '12456789'),
(66, 'Dany', 'Leon', 'Pasaje el picurio 88-77', '9879900', '17654321'),
(69, 'Ariel', 'Condor', 'Calle 12 con Cra 123', '9786576', '9345678'),
(222, 'Carolina', 'Lopez', 'Trasversal 50 con cra 12', '7708741', '23456778'),
(238, 'Leidy', 'Chia', 'calle Canquen', '8998800', '24567890'),
(877, 'Luis', 'Vallejo', 'Pasaje 4 cra 89', '7789907', '105787655'),
(1124, 'Edgar', 'Mendivelso', 'calle 70 N° 11-12', '7709080', '23455788'),
(1987654, 'Sandra', 'Jimenez', 'Diagonal 28 N°10-54', '5678987', '4567889'),
(2345678, 'Luis', 'Leon', 'Diagonal 45 N° 24-11', '6765433', '9887776'),
(11165453, 'Aurelio', 'Muñoz', 'calle 29N°46-25', '7888900', '54345667'),
(71564327, 'Salome', 'Cuchigay', 'carrera 21 10-45', '7888997', '4567890'),
(1058765332, 'Ruben', 'Herrera', 'calle 12 N° 14-09', '8799997', '1567890'),
(1087654345, 'Bernardo', 'Angulo', 'carrera 32 01-25', '5678899', '13456788'),
(1087654346, 'Manuel', 'Ariza', 'calle 73 N° 11-12', '7789983', '44667890'),
(1087654347, 'Lala', 'Galviz', 'Calle 1 con cra 87', '7798808', '2334555'),
(1087654348, 'Martin', 'Ponguta', 'calle 10 N° 11-19', '999088777', '986565533'),
(1087654349, 'Luis', 'Cardozo', 'Calle 30 con cra 56', '8777666555', '2443333'),
(1087654350, 'julio', 'Jaramillo', 'calle 700', '8887777666', '78888890'),
(1087654351, 'Arnoldo', 'Topo', 'calle 10 N° 11-17', '77052348', '2347766'),
(1087654352, 'Adsi', 'Prueba', 'Sena', '77667655', '2332211'),
(1087654354, 'Miriam', 'Ayala', '879kkkk', '7765545', '34677890'),
(1087654355, 'Gerrard', 'Malpica', 'Calle 11 cra 9', '7709879', '11987678'),
(1087654356, 'Ivan', 'Cuadra', 'Cra 65 tranversal 21', '7713455', '23655432'),
(1087654357, 'Mario', 'Vargas', 'Calle 67 cra 7', '', '23654567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idUsuario` int(11) NOT NULL,
  `usuLogin` char(15) NOT NULL,
  `usuPassword` varchar(60) NOT NULL,
  `usuRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUsuario`, `usuLogin`, `usuPassword`, `usuRol`) VALUES
(1, 'profesor', '7efef3fb2ec47bd2bb0d79f58a0312a6', 2),
(2, 'Estudiante', '03edc4004ba1ec8ac31be6e8ab5291c4', 3),
(3, 'Administrador', '2a2e9a58102784ca18e2605a4e727b5f', 1),
(4, 'LuzDary', '74ec5afbfc876dd6b12c571542991364', 1),
(6, 'JuanCastro', 'd4f1d5711a23a6c2d211be77a40a7f88', 3),
(7, 'JhonAngulo', '7e286798f0612acee3428d14a4654b5d', 2),
(8, 'AngelicaPerez', '4a881c24742ff6adeb3c1770f9ba28c0', 2),
(9, 'TuliaCardenas', 'cc60e71f927137bbbe627a20390791d9', 2),
(10, 'EduardoRoblero', 'b8ac3346bc3db85bae17ac3faa35a84f', 2),
(11, 'BernardoAngulo', 'c5b3c680cff773f65e03cdc7239c26ab', 3),
(12, 'RubenHerrera', '13c54676453d4c7b8bd7af2a152dad4d', 3),
(13, 'SalomeCuchigay', 'a14b1bbaad4c127657d9c8d907fc6a75', 3),
(14, 'AurelioMuñoz', '7187d450759fb029ea3d65d2e9fa5788', 3),
(15, 'LauraValencia', 'fcea920f7412b5da7be0cf42b8c93759', 2),
(16, 'MariaMartinez', 'e71371f4136210d8b61146390842f80a', 2),
(17, 'AdsiPrueba', '3720e89b1dd44e14ebaf78e238892643', 1),
(18, 'AdsiPruebaPro', '140635c5370ea3bd902e7643c182298c', 3),
(21, 'sena', '968bfadd7c1fb565e8cb8eca3a2d938f', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_role`
--

CREATE TABLE `user_role` (
  `idRole` int(11) NOT NULL,
  `rolName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_role`
--

INSERT INTO `user_role` (`idRole`, `rolName`) VALUES
(1, 'Administrador'),
(2, 'Profesor'),
(3, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vocabulary`
--

CREATE TABLE `vocabulary` (
  `id_vocabulary` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `image` varchar(60) NOT NULL,
  `description` varchar(25) NOT NULL,
  `example` varchar(30) NOT NULL,
  `idvocabulary_idcategoria` int(15) NOT NULL,
  `idvocabulary_idsubcategoria` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vocabulary`
--

INSERT INTO `vocabulary` (`id_vocabulary`, `Name`, `image`, `description`, `example`, `idvocabulary_idcategoria`, `idvocabulary_idsubcategoria`) VALUES
(1, 'Dog', 'jpg', 'the dog is beautiful', 'the dog live in the house', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vocabulary1`
--

CREATE TABLE `vocabulary1` (
  `id_vocabulary` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `example` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vocabulary1`
--

INSERT INTO `vocabulary1` (`id_vocabulary`, `image`, `name`, `description`, `example`) VALUES
(24, '931949.jpg', 'Dog', 'THe dog drink water', 'THe dog drink water'),
(25, '339866.gif', 'House', 'The house is beautiful', 'The house is beautiful'),
(26, '859156.jpg', 'Mother', 'my mother is beuatiful, I love you.', 'my mother is beuatiful, I love you.'),
(28, '965826.jpg', 'eduardito.', 'the children is beautiful', 'the children is beautiful');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`idCourse`),
  ADD KEY `cursos_ibfk_1_idx` (`idCourse_Teacher`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idcurso`);

--
-- Indices de la tabla `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`idLevel`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`idStudent`),
  ADD KEY `students_ibfk_1_idx` (`Level`);

--
-- Indices de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`idSubcategory`),
  ADD KEY `subcategories_ibfk_1_idx` (`idSubcategory_Category`);

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`idTeacher`),
  ADD UNIQUE KEY `proCedula` (`Identification`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idUsuarios_rol_usuario` (`usuRol`);

--
-- Indices de la tabla `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indices de la tabla `vocabulary`
--
ALTER TABLE `vocabulary`
  ADD PRIMARY KEY (`id_vocabulary`),
  ADD KEY `vocabulary_ibfk_1_idx` (`idvocabulary_idcategoria`),
  ADD KEY `vocabulary_ibfk_1_idx1` (`idvocabulary_idsubcategoria`);

--
-- Indices de la tabla `vocabulary1`
--
ALTER TABLE `vocabulary1`
  ADD PRIMARY KEY (`id_vocabulary`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `idCourse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `level`
--
ALTER TABLE `level`
  MODIFY `idLevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `idStudent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `idSubcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `idTeacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1087654358;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `user_role`
--
ALTER TABLE `user_role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vocabulary`
--
ALTER TABLE `vocabulary`
  MODIFY `id_vocabulary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vocabulary1`
--
ALTER TABLE `vocabulary1`
  MODIFY `id_vocabulary` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`idCourse_Teacher`) REFERENCES `teachers` (`idTeacher`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`Level`) REFERENCES `level` (`idLevel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`idSubcategory_Category`) REFERENCES `categories` (`idCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`usuRol`) REFERENCES `user_role` (`idRole`);

--
-- Filtros para la tabla `vocabulary`
--
ALTER TABLE `vocabulary`
  ADD CONSTRAINT `vocabulary_ibfk_1` FOREIGN KEY (`idvocabulary_idcategoria`) REFERENCES `categories` (`idCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vocabulary_ibfk_2` FOREIGN KEY (`idvocabulary_idsubcategoria`) REFERENCES `subcategories` (`idSubcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
