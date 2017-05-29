CREATE TABLE Usuario (
 id_Usuario int PRIMARY KEY AUTO_INCREMENT,
 nomeUsuario varchar(50),
 sexo char(1),
 dtNascimento date,
 rg varchar(11), 
 nacionalidade varchar(20),
 naturalidade varchar(20),
 email varchar(50),
 foto varchar(300),
 telefone1 int,
 telefone2 int,
 id_Endereco int
);

ALTER TABLE Usuario ADD FOREIGN KEY(id_Endereco) REFERENCES Endereco (id_Endereco);
