CREATE DATABASE db_prestaris;
USE db_prestaris;

CREATE TABLE usuários(
    id INT primary key AUTO_INCREMENT NOT NULL,
    nome varchar(120) NOT NULL,
    datana DATETIME NOT NULL,
    email varchar(45) NOT NULL,
    senha varchar(255) NOT NULL,
    cpf varchar(11) NOT NULL,
    telefone varchar(45) NOT NULL
);