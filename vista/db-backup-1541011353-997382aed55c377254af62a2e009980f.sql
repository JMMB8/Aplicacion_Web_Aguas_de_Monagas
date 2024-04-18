DROP TABLE cargos;

CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO cargos VALUES("1","EMPLEADO");
INSERT INTO cargos VALUES("2","SECRETARIA");



DROP TABLE casos;

CREATE TABLE `casos` (
  `codigo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `id_parroquia` int(3) NOT NULL,
  `id_sector` int(4) NOT NULL,
  `cedula` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `id_tipo` int(3) NOT NULL,
  `descripcion` blob NOT NULL,
  `observ` blob NOT NULL,
  `fecha_prog` date NOT NULL,
  `fecha_rep` date NOT NULL,
  `responsable` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `id_parroquia` (`id_parroquia`,`id_sector`,`cedula`,`id_tipo`),
  KEY `responsable` (`responsable`),
  KEY `cedula` (`cedula`),
  KEY `id_sector` (`id_sector`),
  KEY `id_tipo` (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO casos VALUES("201808011","2018-08-01 00:00:00","3","1","16456893","3","CLOACAS","","2018-08-02","2018-08-03","24908567");
INSERT INTO casos VALUES("201808012","2018-08-01 00:00:00","3","1","17900834","2","TUBO MATRIZ ROTO (URGENTE)","5 DIAS SIN AGUA","2018-08-04","2018-08-02","24908567");
INSERT INTO casos VALUES("201808013","2018-08-01 12:54:38","1","5","19680453","2","TUBO MATRIZ ROTO (URGENTE)","","2018-08-02","0000-00-00","24908567");
INSERT INTO casos VALUES("201808024","2018-08-01 22:08:04","6","7","3754388","1","DFSD","GHGHG","2018-08-04","0000-00-00","24908567");
INSERT INTO casos VALUES("201808025","2018-08-10 22:15:26","3","1","16456893","3","SFSFGSFF","VCCCVCV","2018-08-05","0000-00-00","24908567");
INSERT INTO casos VALUES("201810296","2018-10-28 22:52:18","3","1","14508847","1","UNA SEMANA SIN AGUA ","LO ANTES POSIBLE","2018-10-29","2018-10-29","24908567");



DROP TABLE contactos;

CREATE TABLE `contactos` (
  `cedula` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tlf` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_parroquia` int(3) NOT NULL,
  `id_sector` int(3) NOT NULL,
  PRIMARY KEY (`cedula`),
  KEY `id_parroquia` (`id_parroquia`,`id_sector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO contactos VALUES("14508847","JUAN MIJARES","04249475034","URBANIZACION LA FLORESTA CALLE 1 CASA 4","jorgemanuel1986@gmail.com","3","1");
INSERT INTO contactos VALUES("16456893","RAFAEL MENDOZA","04147727926","URB. FRENTE A LA UDO DE JUANICO","","3","1");
INSERT INTO contactos VALUES("17900834","FERMIN MARCOS","04243451290","LA REDOMA DE LOS CORTIJOS","ferminmark@gmail.com","3","3");
INSERT INTO contactos VALUES("19680453","JESUS SOLARZONO","04249967908","LUIS DEL VALLE GARCIA, AL FRENTE DE LA ROSA  MISTICA","","1","5");
INSERT INTO contactos VALUES("3754388","DSFHDSH","98788","GFGFG","ggf","3","1");



DROP TABLE cuenta_usuario;

CREATE TABLE `cuenta_usuario` (
  `id_cta` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `id_rol` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_reg` datetime NOT NULL,
  PRIMARY KEY (`id_cta`),
  KEY `cedula` (`cedula`,`id_rol`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO cuenta_usuario VALUES("2","24908567","1","montaniojorg2018","0987654","2018-08-02 18:17:22");
INSERT INTO cuenta_usuario VALUES("3","16893925","2","bernard86","5411747","2018-10-28 23:00:20");



DROP TABLE parroquia;

CREATE TABLE `parroquia` (
  `id_parroquia` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_parroquia`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO parroquia VALUES("1","SAN SIMON","A");
INSERT INTO parroquia VALUES("3","LAS COCUIZAS","A");
INSERT INTO parroquia VALUES("4","BOQUERON","A");
INSERT INTO parroquia VALUES("6","LOS GODOS","A");
INSERT INTO parroquia VALUES("7","SANTA CRUZ","I");
INSERT INTO parroquia VALUES("8","SAN SIMON SUR","I");



DROP TABLE personal;

CREATE TABLE `personal` (
  `cedula` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `nombres` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_naci` date NOT NULL,
  `edad` int(2) NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tlf` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `estatus` int(1) NOT NULL,
  `id_cargo` int(2) NOT NULL,
  PRIMARY KEY (`cedula`),
  KEY `id_cargo` (`id_cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO personal VALUES("16893925","MANUEL","BERNARD","M","1986-09-08","32","jorgemanuel1986@gmail.com","04249265550","1","1");
INSERT INTO personal VALUES("24908567","JORGE","MONTANIO","M","1999-07-15","19","montaniojorg1999@gmail.com","04129802415","1","1");



DROP TABLE roles;

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `tipos` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO roles VALUES("1","ADMINISTRADOR DE SISTEMA","1");
INSERT INTO roles VALUES("2","OPERADOR","1");



DROP TABLE sectores;

CREATE TABLE `sectores` (
  `id_sector` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `id_parroquia` int(3) NOT NULL,
  PRIMARY KEY (`id_sector`),
  KEY `id_parroquia` (`id_parroquia`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO sectores VALUES("1","JUANICO","3");
INSERT INTO sectores VALUES("3","LOS CORTIJOS","3");
INSERT INTO sectores VALUES("4","BRISAS DEL AREPUERTO","1");
INSERT INTO sectores VALUES("5","CENTRO","1");
INSERT INTO sectores VALUES("6","LA MURALLA","6");
INSERT INTO sectores VALUES("7","ALTO PARAMACONI I","6");
INSERT INTO sectores VALUES("8","CALLE JUNIN","1");



DROP TABLE tipo_servicio;

CREATE TABLE `tipo_servicio` (
  `id_tipo` int(3) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO tipo_servicio VALUES("1","CISTERNA","A");
INSERT INTO tipo_servicio VALUES("2","AGUA POTABLE","A");
INSERT INTO tipo_servicio VALUES("3","AGUA SERVIDA","A");



