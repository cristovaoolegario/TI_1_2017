CREATE TABLE Anuncio (
 idAnuncio int PRIMARY KEY,
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
 cep int,
 idModelo int,
 idUsuario int
);

ALTER TABLE Anuncio ADD FOREIGN KEY(cep) REFERENCES Endereco (cep);
ALTER TABLE Anuncio ADD FOREIGN KEY(idModelo) REFERENCES Modelo (idModelo);
ALTER TABLE Anuncio ADD FOREIGN KEY(idUsuario) REFERENCES Usuario (idUsuario);
