CREATE TABLE usuario(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome VARCHAR (45),
cpf VARCHAR(15),
senha VARCHAR (45)
);

INSERT INTO usuario(nome, cpf, senha) VALUES 
('Matheus Da Cruz', '123.123.123-12','123'),
('Josiane Da Cruz', '321.321.321-32','321');