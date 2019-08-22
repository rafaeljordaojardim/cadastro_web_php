create database onesys;
use onesys;

CREATE TABLE clientes (
	id int NOT NULL AUTO_INCREMENT,
    nome varchar(60) NOT NULL,
    telefone varchar(15) NOT NULL,
    cpf varchar(13) NOT NULL,
    email varchar(60) NOT NULL,
    PRIMARY KEY(id)
);