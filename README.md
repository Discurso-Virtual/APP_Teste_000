# ReadMe

 Para começar fazer o download do [MySQL installer community](https://dev.mysql.com/downloads/installer/), sendo a versão mais recente de momento a 8.0.19 

 De seguida instalar o MySQL Server e o MySQL Workbench, ambos incluidos no MySQL installer acima referido, para aceder há base de dados, deste repositório, entrar com :
  ```
  user:root
  pass:1234
  ```
 
 Instalar [Apache](http://httpd.apache.org/download.cgi#apache24) 2.x, depois de instalar mudar a pasta onde o Apache irá procurar por sites, por predefinição a pasta selecionada é a 
**htdocs**, alterar para uma pasta com o nome **sites** criada pelo utlizador dentro do disco local C:.
 
 Para efetuar essa alteração terá de abrir o ficheiro **httpd.conf**, este ficheiro encontra-se em _Apache24\conf_, num bloco de notas e alterar a linha de código:
 
 > DocumentRoot "htdocs" ---> DocumentRoot "C:\sites"
  

 Efetuar também a instalação do php7 no disco local C:, para isso fazer o download no site do [PHP](https://windows.php.net/download#php-7.4), tendo em atenção para fazer o download da versão _Thread Safe_, de seguida voltar a alterar o ficheiro **httpd.conf**, já referido acima, com o adicionando o seguinte código:


```
 LoadModule php7_module "c:/php/php7apache2_4.dll"
 AddType application/x-httpd-php .php
 PHPIniDir "C:/php"
```

Dentro deste repositório **teste**, teremos também as seguintes pastas ```common, css, DB, delete, forms, inserts, js, update```, sendo que cada uma terá os seguintes ficheiros:

* Dentro da pasta ```common```, estarão os ficheiros comuns a todos os outros como cabeçaho e rodapé.

* Dentro das pastas ```delete, inserts, update```, estarão os ficheiros que executarão as queries de delete, update e insert da informação da base de dados ou a inserir na mesma.

* Dentro das pastas ```css e js```, estarão os ficheiros do bootsrap e também os ficheiros style e script.

* Por fim, dentro da pasta ```DB```, é onde estará a base de dados em MySQL.


