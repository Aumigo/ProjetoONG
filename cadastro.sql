create database cadastro;
use cadastro;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    primeironome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    numero VARCHAR(15) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    tipo ENUM('cliente', 'admin') NOT NULL
);
