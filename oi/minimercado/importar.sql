CREATE DATABASE registrar;
USE registrar;
CREATE TABLE cadastro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
    usuario VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL
);
CREATE DATABASE contato;
CREATE DATABASE produtos;
CREATE DATABASE fornecedores;
CREATE DATABASE login;

