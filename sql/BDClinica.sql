create database clinica;
use clinica;
create table usuarios(
nombre_usuario varchar(20) primary key,
pass varchar(40),
id_tipo int not null
);
-- estoy insertando el usuario que usaré para poder hacer las pruebas de todo tipo, por el momento es un usuario maestro
insert into usuarios values('dani','123',1);
create table pacientes(
id_paciente int not null primary key auto_increment,
apellido1 varchar(20),
apellido2 varchar(20),
nombre1 varchar(20),
nombre2 varchar(20),
sexo varchar(10),
f_nacimiento date,
l_nacimiento varchar(30),
l_residencia varchar(30)
);
create table consultas(
id_consulta int not null primary key auto_increment,
id_paciente int not null,
fecha_consulta date,
motivo_consulta text,
FOREIGN KEY (id_paciente) REFERENCES pacientes(id_paciente)
);

create table historias(
id_historia int not null primary key auto_increment,
id_consulta int not null,
historia text,
FOREIGN KEY(id_consulta) REFERENCES consultas(id_consulta)
);
create table antecedentes(
id_antecedentes int not null primary key auto_increment,
id_consulta int not null,
antecedentes_familiares text,
antecedentes_medicos text,
antecedentes_quirurgicos text,
antecedentes_traumaticos text,
obstetricos text,
gestacion int,
partos int,
cesareas int,
abortos int,
menarquia text,
ur text,
habitos text,
FOREIGN KEY(id_consulta) REFERENCES consultas(id_consulta)
);

create table examenes_fisicos(
id_examen_fisico int not null primary key auto_increment,
id_consulta int not null,
presion_arterial text,
pulso int,
freq_resp int,
freq_cardiaca int,
temperatura int,
talla int,
peso int,
imc int,
peso_cat varchar(60),
peso_ideal int,
observaciones text,
FOREIGN KEY(id_consulta) REFERENCES consultas(id_consulta)
);







