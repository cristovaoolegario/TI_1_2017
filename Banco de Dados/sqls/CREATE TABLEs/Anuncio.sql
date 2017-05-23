CREATE TABLE Anuncio (
 id int PRIMARY KEY AUTO_INCREMENT,
 estadoVeiculo varchar(10),
 ano date,
 cor varchar(10),
 numeroPortas int,
 quilometragem int,
 cambio varchar(10),
 combustivel varchar(15),
 finalPlaca varchar(4),
 tipoCarroceria varchar(15),
 dataAnuncio date,
 id_Endereco int,
 id_Modelo int,
 id_Usuario int,
 preco int
);

ALTER TABLE Anuncio ADD FOREIGN KEY(id_Endereco) REFERENCES Endereco (id);
ALTER TABLE Anuncio ADD FOREIGN KEY(id_Modelo) REFERENCES Modelo (id);
ALTER TABLE Anuncio ADD FOREIGN KEY(id_Usuario) REFERENCES Usuario (id);
