CREATE DATABASE IF NOT EXISTS miclinica;
SET NAMES UTF8;
USE miclinica;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE IF NOT EXISTS usuarios(
dni             varchar(9) not null, 
nombre          varchar(64) not null,
apellidos       varchar(64) not null,
correo          varchar(255) not null,
password        varchar(255) not null,
esAdmin         boolean not null,
CONSTRAINT pk_usuarios PRIMARY KEY(dni),
CONSTRAINT uq_correo UNIQUE(correo)
)ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO usuarios VALUES("12345678P","Marta","Martos Portellano","marta@marta.es","1234", 1);
INSERT INTO usuarios VALUES("87654321P","Pedro","Moreno Prieto","pedro@pedro.es","1234", 0);

DROP TABLE IF EXISTS especialidades;
CREATE TABLE IF NOT EXISTS especialidades(
nombre       varchar(255) not null,
CONSTRAINT pk_especialidad PRIMARY KEY(nombre)
)ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO especialidades VALUES("alergología");
INSERT INTO especialidades VALUES("dermatología");

DROP TABLE IF EXISTS doctores;
CREATE TABLE IF NOT EXISTS doctores( 
dni             varchar(9) not null, 
nombre          varchar(64) not null,
apellidos       varchar(64) not null,
telefono        varchar(9) not null,
especialidad    varchar(255) not null,
CONSTRAINT pk_doctores PRIMARY KEY(dni),
CONSTRAINT fk_especialidad FOREIGN KEY(especialidad) REFERENCES especialidades(nombre)
)ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO doctores VALUES("14785236P","Paula","Lozano Santiago","958123456","alergología");
INSERT INTO doctores VALUES("36258147P","Ignacio","Carretero Blanco","947234576","dermatología");

DROP TABLE IF EXISTS citas;
CREATE TABLE IF NOT EXISTS citas( 
id              int auto_increment not null,
paciente_dni    varchar(9) not null,
doctor_dni      varchar(9) not null,
fecha           date not null,
hora            time not null,
CONSTRAINT fk_cita_paciente FOREIGN KEY(paciente_dni) REFERENCES usuarios(dni),
CONSTRAINT fk_cita_doctor FOREIGN KEY(doctor_dni) REFERENCES doctores(dni),
CONSTRAINT pk_cita PRIMARY KEY(id)
)ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO citas VALUES(null,"12345678P","14785236P","2022-01-12","18:05:00");
INSERT INTO citas VALUES(null,"87654321P","36258147P","2022-01-25","17:15:00");
