CREATE DATABASE gatos;
USE gatos;

CREATE TABLE gatos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    idade INT,
    estado_de_saude VARCHAR(50),
    descricao TEXT,
    sexo VARCHAR(10)
);

INSERT INTO gatos VALUES
    ('2', 'Gato Fofo', 'Esse é um gato muito fofo e brincalhão.');
