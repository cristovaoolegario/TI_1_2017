CREATE TABLE Anuncio (
 idAnuncio int PRIMARY KEY,
 estadoVeiculo text(10),
 ano date,
 cor text(10),
 numeroPortas int,
 quilometragem int,
 cambio text(10),
 combustivel text(15),
 finalPlaca varchar(4),
 tipoCarroceria text(15),
 dataAnuncio date,
 cep int,
 idModelo int,
 idUsuario int
);

ALTER TABLE Anuncio ADD FOREIGN KEY(cep) REFERENCES Endereco (cep);
ALTER TABLE Anuncio ADD FOREIGN KEY(idModelo) REFERENCES Modelo (idModelo);
ALTER TABLE Anuncio ADD FOREIGN KEY(idUsuario) REFERENCES Usuario (idUsuario);
