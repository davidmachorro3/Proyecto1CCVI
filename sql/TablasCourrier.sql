CREATE DATABASE Proyecto1CC6;

CREATE TABLE Usuario (
	username varchar(50),
	passwrd varchar(150),
	PRIMARY KEY(username)
);

CREATE TABLE Destino (
	codigo char(5),
	costo float,
	PRIMARY KEY(codigo)
);

CREATE TABLE Envio (
	codigo varchar(50),
	destinatario varchar(100),
	direccion varchar(100),
	estado int,
	tienda varchar(50), --Preguntarle a Ronald si las tiendas tambien tendran codigo de 15 caracteres
	codigoDestino char(5),
	CHECK(estado in (1,2,3,4,5)),
	PRIMARY KEY(codigo),
	FOREIGN KEY(codigoDestino) REFERENCES Destino(codigo)
);
