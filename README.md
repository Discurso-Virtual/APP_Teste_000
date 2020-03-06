# ReadMe

 Para começar fazer o download do MySQL installer community, sendo a versão mais recente de momento a 8.0.19 

 De seguida instalar o MySQL Server e o MySQL Workbench, ambos incluidos no MySQL installer acima referido
 
 Instalar Apache 2.x, depois de instalar mudar a pasta onde o Apache irá procurar por sites, por predefinição a pasta selecionada é a 
**htdocs**, alterar para uma pasta com o nome **sites** criada pelo utlizador dentro do disco local C:.
 
 Para efetuar essa alteração terá de abrir o ficheiro **httpd.conf**, este ficheiro encontra-se em _Apache24\conf_, num bloco de notas e alterar a linha de código:
 
 > DocumentRoot "htdocs" ---> DocumentRoot "C:\sites"
  

Efetuar também a instalação do php7 no disco local C:, para isso fazer o download no site do [PHP](https://windows.php.net/download#php-7.4), tendo em atenção para fazer o download da versão _Thread Safe_, de seguida voltar a alterar o ficheiro **httpd.conf**, já referido acima, com o adicionando o seguinte código:


```
LoadModule php7_module "c:/php/php7apache2_4.dll"
AddType application/x-httpd-php .php
PHPIniDir "C:/php"
```



