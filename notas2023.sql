create database notas2023;
use notas2023;
create table usuarios(
id_usuario int(15) primary key not null auto_increment,
NombreUsu varchar(60) not null,
ApellidoUsu varchar(60) not null,
Usuario varchar(40) not null unique,
Contraseña varchar(80) not null,
Perfil varchar(30) not null,
Estado varchar(20) not null
);

create table materias(
id_materia int(15) primary key not null auto_increment,
Materia varchar(30) not null
);
create table estudiante(
id_Estudiante int(15) primary key not null auto_increment,
NombreEst varchar(60) not null,
ApellidoEst varchar(60) not null,
DocumentoEst varchar(12) not null,
CorreoEst varchar(60) not null,
MateriaEst varchar(30) not null,
DocenteEst varchar(60) not null,
PromedioEst int(3) not null,
Fecha_registro date not null
);
create table docente(
id_docente int(15) primary key not null auto_increment,
NombreDoc varchar(60) not null,
ApellidoDoc varchar(60) not null,
DocumentoDoc varchar(12) not null,
CorreoDoc varchar(60) not null,
MateriaDoc varchar(30) not null,
Notas decimal(5,1) not null
);
create table notas_estudiantes_materias(
id int unique not null primary key auto_increment,
id_Est int(15) not null,
id_Mat int(15) not null,
id_Doc int(15) not null,
Puntaje decimal(5,1)not null,
foreign key(id_Est)references Estudiante(id_Estudiante),
foreign key(id_Mat)references Materias(id_materia),
foreign key(id_Doc)references Docente(id_docente)
);
