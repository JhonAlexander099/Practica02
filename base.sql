create database leccion;
use leccion;

create table Profesor(
id int auto_increment,
nombre varchar(50),
idioma varchar(50),
primary key(id)
);
create table Programacion(
id int auto_increment,
inicio varchar(20),
tipo varchar(20),
idprof int,
primary key (id),
constraint fk_prog_prof foreign key(idprof) references Profesor(id)
);
create table Leccion(
id int auto_increment,
numero int,
stado varchar(20),
idprog int,
comentario_profesor varchar(20),
comentario_estudiante varchar(20),
primary key(id),
constraint fk_lec_prog foreign key(idprog) references Programacion(id)
);
create table Estudiante(
id int auto_increment,
nombre varchar(20),
email varchar(20),
idleccion int,
primary key(id),
constraint fk_est_lec foreign key (idleccion) references Leccion(id)
);