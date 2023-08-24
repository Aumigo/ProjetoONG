CREATE DATABASE sistemas_adms;
use sistemas_adms;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (nome, email, senha) VALUES
    ('Administrador 1', 'admin1@example.com', 'senha1'),
    ('Administrador 2', 'admin2@example.com', 'senha2');

CREATE TABLE imagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    caminho_da_imagem VARCHAR(255) NOT NULL,
    
);