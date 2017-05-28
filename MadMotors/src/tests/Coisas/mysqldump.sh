//Gera o xlm do banco para que os testes possam ser feitos com o phpUnit
mysqldump --xml -t -h pucsi.mysql.database.azure.com -u pucsi@pucsi --password ti_testes > ti_testes.xml
