create database ice;

use ice;

create table perfiles(
	perfil int not null AUTO_INCREMENT,
	nombrePerfil varchar(50),
	primary key(perfil)
);

create table usuarios(
	usuario varchar(20),
	contrasena varchar(20),
	perfil int,
	primary key (usuario),
	FOREIGN KEY(perfil) REFERENCES perfiles(perfil)
);



insert into perfiles (nombrePerfil) value("ADMINISTRADOR");
insert into perfiles (nombrePerfil) value("INSTITUCIÓN");
insert into perfiles (nombrePerfil) value("DOCENTE");
insert into perfiles (nombrePerfil) value("ESTUDIANTE");

insert into usuarios value("hguzman","12345",2); 
insert into usuarios value("luis","12345",3); 
insert into usuarios value("102446569","123",1); 
insert into usuarios value("1","1",4); 

select * from usuarios;
