/*Select para os Campos */

/*Seleciona o nome dos modelos de acordo com a "marca selecionada", para o select de modelos */
SELECT mo.nome
FROM Modelo mo LEFT JOIN Marca ma
	ON mo.idMarca = ma.idMarca
WHERE(idMarca = marca selecionada);

/*Seleciona todas as marcas, para o select de marcas*/
SELECT ma.nome
FROM Marca ma;


