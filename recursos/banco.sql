CREATE TABLE usuario(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome VARCHAR (45),
cpf VARCHAR(15),
senha VARCHAR (45)
);

INSERT INTO usuario(nome, cpf, senha) VALUES 
('Matheus Da Cruz', '123.123.123-12','123'),
('Josiane Da Cruz', '321.321.321-32','321');

CREATE TABLE cidade(
id int PRIMARY KEY NOT NULL AUTO_INCREMENT, 
nome VARCHAR(50),
cep varchar(15),
estado VARCHAR(15)
);

INSERT INTO cidade(nome, cep, estado) VALUES 
('Nova Londrina', '87-970-000', 'Paraná'), 
('Marilena','87-960-000', 'Paraná');

CREATE TABLE funcionario(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cpf VARCHAR(15),
    nome VARCHAR(255),
    celular VARCHAR(15),
    endereco VARCHAR(255),
    numero int,
    bairro VARCHAR(255),
    email VARCHAR(255),
    cargo VARCHAR(255),
    salario VARCHAR(50),
    cidade_id INT,
    FOREIGN KEY(cidade_id) REFERENCES cidade(id)
    );

    INSERT INTO funcionario(nome, cpf, celular, endereco, numero, bairro, email, cargo, salario, cidade_id) VALUES 
    ('Eliott ALderson', '777-777-777-77', '(1) 5555-5555', ' Aeroporto', 3, 'Downtown', 'eliotaldersonn@hotmail.com', 'Gerente', '4500', 1);

    insert into cliente(nome, cpf, celular, endereco, numero, bairro, email, cidade_id) VALUES 
    ('Dominique', '555-555-555-55' ,'(44)99999999','Rua ìndio', 5, 'Centro', 'dominiquemassa@gmail.com', 1) 

    CREATE TABLE venda(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
obs VARCHAR(255),
valor_total int,
quantidade_total int,
data_venda DATETIME DEFAULT CURRENT_TIMESTAMP,
cliente_id int,
funcionario_id int,
FOREIGN KEY (cliente_id) REFERENCES cliente(id),
FOREIGN KEY (funcionario_id) REFERENCES funcionario(id)
);

CREATE TABLE produto(
   id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   nome VARCHAR(255) NOT NULL, 
   preco DECIMAL(10,2) NOT NULL, 
   estoque INT,
   custo INT, 
   lucro INT,
   margin INT );

    INSERT INTO produto 
    (nome, preco, estoque, custo, lucro, margin) VALUES 
    ('mouse', 70, 3, 50, 70, 90); 

CREATE TABLE item_venda(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    quantidade INT,
    valor DECIMAL(10,2),
    venda_id INT, 
    produto_id INT,
    FOREIGN KEY (venda_id) REFERENCES venda(id),
    FOREIGN KEY (produto_id) REFERENCES produto(id)
    );
    