#drop database practicas;
create database practicas;
use practicas;

create table Persona_contacto (
	id int auto_increment primary key,
    direccion varchar(200),
    email varchar(50),
    nombre varchar(30)
);

create table Empresas (
	id int auto_increment primary key,
    direccion varchar(200),
    nombre varchar(30),
    fk_persona_contacto int,
    
    foreign key(fk_persona_contacto) references Persona_contacto(id)
);

create table Practicas (
	id int auto_increment primary key,
	tipo varchar(50),
    horario varchar(10),
    fk_empresa int,
    
    foreign key(fk_empresa) references Empresas(id)
);

 create table Alumnos (
	id int auto_increment primary key,
	dni varchar(10) not null,
    nombre varchar(30),
    apellidos varchar(100),
    empresa_asignada int,
    tipo_practicas int,
    
    foreign key(empresa_asignada) references Empresas(id),
    foreign key(tipo_practicas) references Practicas(id)
 );