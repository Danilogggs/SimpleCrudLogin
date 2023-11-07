CREATE DATABASE login;

USE login;

/* Lógico_1: */

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role INT NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

INSERT INTO user (role, username, password) VALUES 	
(1,'admin','admin');

CREATE TABLE tableusers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
	cidade VARCHAR(50) NOT NULL
);

INSERT INTO tableusers (nome, cidade) VALUES
    ('João', 'São Paulo'),
    ('Maria', 'Rio de Janeiro'),
    ('Pedro', 'Belo Horizonte'),
    ('Ana', 'Salvador'),
    ('Lucas', 'Brasília'),
    ('Sofia', 'Porto Alegre'),
    ('Miguel', 'Recife'),
    ('Julia', 'Fortaleza'),
    ('Gustavo', 'Curitiba'),
    ('Camila', 'Manaus');    

