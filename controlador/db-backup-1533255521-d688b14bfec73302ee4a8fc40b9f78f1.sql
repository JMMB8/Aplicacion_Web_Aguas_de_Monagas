DROP TABLE cargos;

CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO cargos VALUES("1","CHOFER");
INSERT INTO cargos VALUES("2","EMPLEADO");
INSERT INTO cargos VALUES("3","SECRETARIA");



DROP TABLE ciudad;

CREATE TABLE `ciudad` (
  `id_ciudad` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_edo` int(5) NOT NULL,
  PRIMARY KEY (`id_ciudad`),
  KEY `id_edo` (`id_edo`),
  CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`id_edo`) REFERENCES `estados` (`id_edo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO ciudad VALUES("1","MATURÍN","1");
INSERT INTO ciudad VALUES("2","PUNTA DE MATA","1");
INSERT INTO ciudad VALUES("3","CARIPITO","1");
INSERT INTO ciudad VALUES("4","AGUAZAY","1");
INSERT INTO ciudad VALUES("5","BARRANCA DEL ORINOCO","1");
INSERT INTO ciudad VALUES("6","TEMBLADOR","1");
INSERT INTO ciudad VALUES("7","CARIPE","1");
INSERT INTO ciudad VALUES("8","ARAGUA DE MATUÍN","1");



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
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `cuenta_usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `cuenta_usuario_ibfk_2` FOREIGN KEY (`cedula`) REFERENCES `personal` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO cuenta_usuario VALUES("1","14940354","1","fuentescce","20012018","2018-07-04 08:14:24");
INSERT INTO cuenta_usuario VALUES("2","37489300","2","leonramon","123456","2018-07-04 23:31:12");



DROP TABLE estados;

CREATE TABLE `estados` (
  `id_edo` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_edo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO estados VALUES("1","MONAGAS");
INSERT INTO estados VALUES("2","SUCRE");
INSERT INTO estados VALUES("3","BOLÍVAR");
INSERT INTO estados VALUES("4","ANZOATEGUI");
INSERT INTO estados VALUES("5","LARA");
INSERT INTO estados VALUES("6","ZULIA");



DROP TABLE maquinaria;

CREATE TABLE `maquinaria` (
  `id_maq` int(11) NOT NULL AUTO_INCREMENT,
  `cod_maq` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `marca` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `modelo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `color` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `serial` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `ano` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `id_tipo` int(5) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id_maq`),
  UNIQUE KEY `cod_maq` (`cod_maq`),
  KEY `id_tipo` (`id_tipo`),
  CONSTRAINT `maquinaria_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_maquinaria` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO maquinaria VALUES("1","GDH906","FORD","GANDOLA MACK F-658","AMARILLO","948473889","1980","1","3");
INSERT INTO maquinaria VALUES("3","678HYT","MACK","MACK GANDOLA TOK-767","BLANCO","8443643","2000","1","1");
INSERT INTO maquinaria VALUES("4","67Y77","CHEVROLET","CAMION 750","ROJO","7432470986","1987","1","1");



DROP TABLE material;

CREATE TABLE `material` (
  `id_mat` int(11) NOT NULL AUTO_INCREMENT,
  `cod_mat` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_medida` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id_mat`),
  UNIQUE KEY `cod_mat` (`cod_mat`),
  KEY `id_medida` (`id_medida`),
  CONSTRAINT `material_ibfk_1` FOREIGN KEY (`id_medida`) REFERENCES `medida` (`id_medida`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO material VALUES("1","54548900","GASOIL","3","1");



DROP TABLE medida;

CREATE TABLE `medida` (
  `id_medida` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id_medida`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO medida VALUES("1","METROS","1");
INSERT INTO medida VALUES("2","TONELADAS","1");
INSERT INTO medida VALUES("3","LITROS","1");



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
  KEY `id_cargo` (`id_cargo`),
  CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO personal VALUES("14940354","LUIS","CALDERON","M","1979-12-09","38","fuentescce@gmail.com","04263341746","1","2");
INSERT INTO personal VALUES("19093278","CARLOS","CHAURAN","M","1981-12-05","36","carlosch@gmail.com","04129809900","3","1");
INSERT INTO personal VALUES("37489300","RAMON","LEON","M","1984-04-03","34","ramonll@gmail.com","04169083456","1","1");



DROP TABLE roles;

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `tipos` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO roles VALUES("1","ADMINISTRADOR DE SISTEMA","1");
INSERT INTO roles VALUES("2","OPERADOR","1");
INSERT INTO roles VALUES("3","USUARIO","1");



DROP TABLE tipo_maquinaria;

CREATE TABLE `tipo_maquinaria` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO tipo_maquinaria VALUES("1","TRANSPORTE DE CARGA","A");
INSERT INTO tipo_maquinaria VALUES("2","PESADA","A");



DROP TABLE traslados;

CREATE TABLE `traslados` (
  `id_traslado` int(5) NOT NULL AUTO_INCREMENT,
  `codigo_traslado` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `cod_transp` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `edo_destino` int(3) NOT NULL,
  `ciudad` int(11) NOT NULL,
  `lugar` blob NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_entrada` date NOT NULL,
  `tipo_carga` int(2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `observ_salida` blob NOT NULL,
  `observ_entrada` blob NOT NULL,
  `estado` int(1) NOT NULL,
  `chofer` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `date_salida` datetime NOT NULL,
  `date_entrada` datetime NOT NULL,
  PRIMARY KEY (`id_traslado`),
  KEY `cod_transp` (`cod_transp`,`edo_destino`,`ciudad`,`tipo_carga`,`chofer`),
  KEY `chofer` (`chofer`),
  KEY `edo_destino` (`edo_destino`),
  KEY `tipo_carga` (`tipo_carga`),
  CONSTRAINT `traslados_ibfk_1` FOREIGN KEY (`chofer`) REFERENCES `personal` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `traslados_ibfk_2` FOREIGN KEY (`cod_transp`) REFERENCES `maquinaria` (`cod_maq`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `traslados_ibfk_3` FOREIGN KEY (`edo_destino`) REFERENCES `estados` (`id_edo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `traslados_ibfk_4` FOREIGN KEY (`tipo_carga`) REFERENCES `material` (`id_mat`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Almacenamiento de los datos, para cada salida y entrada de los transportes';

INSERT INTO traslados VALUES("1","7720055","GDH906","1","5","los mulatos","2018-07-06","0000-00-00","1","1500","1500 LITROS DE GASOIL","","1","19093278","2018-07-05 19:53:58","0000-00-00 00:00:00");
INSERT INTO traslados VALUES("2","7720056","67Y77","1","8","AAD","2018-03-03","2018-07-08","1","556","BGHGH","NINGUNA","2","37489300","2018-07-05 20:09:49","2018-07-09 19:23:11");
INSERT INTO traslados VALUES("3","7720027","678HYT","1","6","BVBVBN","2018-07-10","0000-00-00","1","4500000","VGFGG","","4","37489300","2018-07-09 19:44:10","0000-00-00 00:00:00");



