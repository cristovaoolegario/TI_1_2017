CREATE TABLE Endereco (
 id int PRIMARY KEY,
 cep int NOT NULL,
 rua varchar(30),
 bairro varchar(20),
 numero int,
 cidade varchar(20),
 estado varchar(2),
 pais varchar(20)
);
