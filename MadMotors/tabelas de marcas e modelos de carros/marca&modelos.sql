/* Criação das tabelas */
CREATE TABLE Marca (
idMarca int serial,
nome Text(15)
);

CREATE TABLE Modelo (
idModelo int serial,
idMarca int,
nome Text(20)
)
ALTER TABLE Modelo ADD FOREIGN KEY(idMarca) REFERENCES Marca (idMarca);

/*Select para os Campos */

/*Seleciona o nome dos modelos de acordo com a "marca selecionada", para o select de modelos */
SELECT mo.nome
FROM Modelo mo LEFT JOIN Marca ma
	ON mo.idMarca = ma.idMarca
WHERE(idMarca = marca selecionada);

/*Seleciona todas as marcas, para o select de marcas*/
SELECT ma.nome
FROM Marca ma;


