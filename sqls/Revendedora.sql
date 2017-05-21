CREATE TABLE Revendedora (
 id int PRIMARY KEY AUTO_INCREMENT,
 cnpj varchar(14),
 telefone1 int,
 telefone2 int,
 razaoSocial varchar(50),
 email varchar(150),
 banner varchar(300),
 id_Usuario int,
 id_Endereco int
);

ALTER TABLE Revendedora ADD FOREIGN KEY(id_Usuario) REFERENCES Usuario (id);
ALTER TABLE Revendedora ADD FOREIGN KEY(id_Endereco) REFERENCES Endereco (id);
