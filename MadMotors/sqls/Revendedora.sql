CREATE TABLE Revendedora (
 idRevendedora int PRIMARY KEY AUTO_INCREMENT,
 cnpj varchar(14),
 telefone1 int,
 telefone2 int,
 razaoSocial varchar(50),
 email varchar(150),
 banner varchar(300),
 idUsuario int,
 cep int
);

ALTER TABLE Revendedora ADD FOREIGN KEY(idUsuario) REFERENCES Usuario (idUsuario);
ALTER TABLE Revendedora ADD FOREIGN KEY(cep) REFERENCES Endereco (cep);
