CREATE TABLE IF NOT EXISTS alumno (
  id_alumno int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(250) DEFAULT NULL,
  apellido varchar(250) DEFAULT NULL,
  id_cursada int(11) DEFAULT NULL,
  PRIMARY KEY (id_alumno),
  UNIQUE KEY id_alumno (id_alumno),
  KEY id_cursada (id_cursada)
);

INSERT INTO alumno (id_alumno, nombre, apellido, id_cursada) VALUES
(1, 'Javier', 'Altmann', NULL),
(2, 'Carlos', 'Prueba', NULL);


CREATE TABLE IF NOT EXISTS asignatura (
  id_asignatura int(11) NOT NULL AUTO_INCREMENT,
  id_usuario int(11) DEFAULT NULL,
  nombre_asignatura varchar(250) DEFAULT NULL,
  PRIMARY KEY (id_asignatura),
  UNIQUE KEY id_asignatura (id_asignatura),
  KEY id_usuario (id_usuario)
);



CREATE TABLE IF NOT EXISTS cursada (
  id_cursada int(11) NOT NULL AUTO_INCREMENT,
  id_asignatura int(11) DEFAULT NULL,
  id_alumno int(11) DEFAULT NULL,
  PRIMARY KEY (id_cursada),
  UNIQUE KEY id_cursada (id_cursada),
  KEY id_asignatura (id_asignatura)
);

INSERT INTO cursada (id_cursada, id_asignatura, id_alumno) VALUES
(8, 45, 2),
(9, 45, 1),
(10, 46, 1),
(11, 47, 2),
(16, 47, 1);

CREATE TABLE IF NOT EXISTS notas_alumno (
  id_nota int(11) NOT NULL AUTO_INCREMENT,
  id_alumno int(11) DEFAULT NULL,
  id_asignatura int(11) DEFAULT NULL,
  nota double DEFAULT NULL,
  PRIMARY KEY (id_nota),
  UNIQUE KEY id_nota (id_nota),
  KEY id_alumno (id_alumno),
  KEY id_asignatura (id_asignatura)
);


CREATE TABLE usuario (
	id_usuario int PRIMARY KEY UNIQUE AUTO_INCREMENT, 
	nombre varchar(250),
	usuario varchar(250),
	contraseña varchar (250),
    rol varchar(255),
	id_permisos int
);

CREATE TABLE permiso(
	id_permiso int primary key auto_increment unique, 
	rol varchar(255), 

 FOREIGN KEY (id_permiso) REFERENCES Usuario(id_permiso)
);



ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

ALTER TABLE `cursada`
  ADD CONSTRAINT `cursada_ibfk_1` FOREIGN KEY (`id_asignatura`) REFERENCES `asignatura` (`id_asignatura`);

ALTER TABLE `notas_alumno`
  ADD CONSTRAINT `notas_alumno_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `notas_alumno_ibfk_2` FOREIGN KEY (`id_asignatura`) REFERENCES `asignatura` (`id_asignatura`);


