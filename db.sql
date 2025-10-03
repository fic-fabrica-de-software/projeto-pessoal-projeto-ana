CREATE DATABASE db_prestaris;
USE db_prestaris;

CREATE TABLE prestadores(
    id INT primary key AUTO_INCREMENT NOT NULL,
    nome varchar(120) NOT NULL,
    data_nascimento DATETIME NOT NULL,
    email varchar(45) NOT NULL,
    senha varchar(255) NOT NULL,
    cpf varchar(11) NOT NULL,
    telefone varchar(45) NOT NULL,
    servico varchar(45) NOT NULL,
    localizacao varchar(45) NOT NULL
);

CREATE TABLE clientes(
    id INT primary key AUTO_INCREMENT NOT NULL,
    nome varchar(120) NOT NULL,
    data_nascimento DATETIME NOT NULL,
    email varchar(45) NOT NULL,
    senha varchar(255) NOT NULL,
    cpf varchar(11) NOT NULL,
    telefone varchar(45) NOT NULL
);

CREATE TABLE servicos(
    id INT primary key AUTO_INCREMENT NOT NULL,
    valor INT(10) NOT NULL,
    tempo TIME NOT NULL,
    tipo varchar(45) NOT NULL,
    data_servico DATETIME NOT NULL,
    prestador_responsavel INT NOT NULL,
    FOREIGN KEY (prestador_responsavel) REFERENCES prestadores(id),
    cliente_responsavel INT NOT NULL,
    FOREIGN KEY (cliente_responsavel) REFERENCES clientes(id)
);

CREATE TABLE cupons(
    id INT primary key AUTO_INCREMENT NOT NULL,
    valor INT(10) NOT NULL,
    tempo_disponivel TIME NOT NULL,
    quantidade_disponivel TIME NOT NULL
);

CREATE TABLE cartoes(
    id INT primary key AUTO_INCREMENT NOT NULL,
    digito INT(4) NOT NULL,
    validade DATE NOT NULL,
    cvv INT(3) NOT NULL,
    bandeira ENUM ( 'Visa', 'Mastercard', 'Elo', 'HIpercard', 'American Express') NOT NULL,
    tipo ENUM ( 'Débito', 'Crédito') NOT NULL
);

CREATE TABLE pagamento(
    id INT primary key AUTO_INCREMENT NOT NULL,
    valor INT(10) NOT NULL,
    forma ENUM ( 'Pagar pelo APP', 'Pessoalmente') NOT NULL,

    prestador_recebidor INT NOT NULL,
    FOREIGN KEY (prestador_recebidor) REFERENCES prestadores(id),
    cliente_pagador INT NOT NULL,
    FOREIGN KEY (cliente_pagador) REFERENCES clientes(id),

    cupom_compra INT NOT NULL,
    FOREIGN KEY (cupom_compra) REFERENCES cupons(id),
    cartao_compra INT NOT NULL,
    FOREIGN KEY (cartao_compra) REFERENCES cartoes(id)
);
