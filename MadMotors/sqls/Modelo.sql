CREATE TABLE Modelo (
idModelo int PRIMARY KEY AUTO_INCREMENT,
idMarca int,
nome varchar(20)
)
ALTER TABLE Modelo ADD FOREIGN KEY(idMarca) REFERENCES Marca (idMarca);
