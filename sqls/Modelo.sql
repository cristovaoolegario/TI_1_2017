CREATE TABLE Modelo (
id int PRIMARY KEY AUTO_INCREMENT,
id_Marca int,
nome varchar(20)
)
ALTER TABLE Modelo ADD FOREIGN KEY(id_Marca) REFERENCES Marca (id);
