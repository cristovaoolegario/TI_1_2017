CREATE TABLE Revendedora (
 idRevendedora int PRIMARY KEY,
 cnpj varchar(14),
 telefone1 int,
 telefone2 int,
 razaoSocial text(50),
 email varchar(150),
 banner varchar,
 idUsuario int,
 cep int
);

ALTER TABLE Revendedora ADD FOREIGN KEY(idUsuario) REFERENCES Usuario (idUsuario);
ALTER TABLE Revendedora ADD FOREIGN KEY(cep) REFERENCES Endereco (cep);
