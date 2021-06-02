CREATE TABLE `empleados` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255),
  `a_paterno` varchar(255),
  `a_materno` varchar(255),
  `curp` varchar(255),
  `id_rol` int
);

CREATE TABLE `usuarios` (
  `nombre` varchar(255),
  `password` varchar(255),
  `id_empleado` int
);

CREATE TABLE `contacto` (
  `tel_cel` varchar(255),
  `tel_casa` varchar(255),
  `correo` varchar(255),
  `id_empleado` int
);

CREATE TABLE `rol` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255)
);

CREATE TABLE `ventas` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `fecha_hora` datetime,
  `forma_pago` varchar(255),
  `monto` double,
  `id_empleado` int,
  `id_producto` int
);

CREATE TABLE `productos` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255),
  `descripcion` varchar(255),
  `precio` double,
  `cantidad` int,
  `id_desarrolladora` int,
  `clasificacion` varchar(255)
);

CREATE TABLE `clasificaciones` (
  `id` varchar(255) PRIMARY KEY
);

CREATE TABLE `desarrolladoras` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255),
  `tel` varchar(255)
);

CREATE TABLE `cuentas_pagar` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `monto_abonado` double,
  `monto_restante` double,
  `monto_total` double,
  `id_desarrolladora` int
);

CREATE TABLE `cuentas_cobrar` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `cliente` varchar(255),
  `monto_abonado` double,
  `monto_restante` double,
  `monto_total` double,
  `id_tarjeta` int
);

CREATE TABLE `tarjeta` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `numero` varchar(255),
  `nombre` varchar(255),
  `mes_vencimiento` varchar(255),
  `anio_vencimiento` varchar(255),
  `ccv` varchar(255),
  `tipo` varchar(255)
);

CREATE TABLE `lista_productos` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_producto` int,
  `precio` double,
  `cantidad` int,
  `total` double
);

CREATE TABLE `bitacora` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `tabla` varchar(255),
  `descripcion` varchar(255),
  `hora_fecha` datetime
);

ALTER TABLE `empleados` ADD FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`);

ALTER TABLE `usuarios` ADD FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`);

ALTER TABLE `contacto` ADD FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`);

ALTER TABLE `productos` ADD FOREIGN KEY (`id_desarrolladora`) REFERENCES `desarrolladoras` (`id`);

ALTER TABLE `productos` ADD FOREIGN KEY (`clasificacion`) REFERENCES `clasificaciones` (`id`);

ALTER TABLE `cuentas_pagar` ADD FOREIGN KEY (`id_desarrolladora`) REFERENCES `desarrolladoras` (`id`);

ALTER TABLE `cuentas_cobrar` ADD FOREIGN KEY (`id_tarjeta`) REFERENCES `tarjeta` (`id`);

ALTER TABLE `lista_productos` ADD FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);
