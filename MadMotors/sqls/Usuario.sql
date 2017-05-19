CREATE TABLE Usuario (
 idUsuario int PRIMARY KEY,
 nome text(50),
 sexo char(1),
 dtNascimento date,
 rg int, 
 nacionalidade text(20),
 naturalidade text(20),
 email text(50),
 foto varchar,
 telefone1 int,
 telefone2 int,
 cep int
);

ALTER TABLE Usuario ADD FOREIGN KEY(cep) REFERENCES Endereco (cep);
