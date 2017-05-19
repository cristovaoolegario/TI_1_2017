CREATE TABLE Usuario (
 idUsuario int PRIMARY KEY,
 nome varchar(50),
 sexo char(1),
 dtNascimento date,
 rg varchar(11), 
 nacionalidade varchar(20),
 naturalidade varchar(20),
 email varchar(50),
 foto varchar(300),
 telefone1 int,
 telefone2 int,
 cep int
);

ALTER TABLE Usuario ADD FOREIGN KEY(cep) REFERENCES Endereco (cep);
