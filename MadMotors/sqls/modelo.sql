CREATE TABLE Modelo (
idModelo int serial,
idMarca int,
nome Text(20)
)
ALTER TABLE Modelo ADD FOREIGN KEY(idMarca) REFERENCES Marca (idMarca);
