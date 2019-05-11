# Teste de Conhecimentos – Analista Desenvolvedor

## Questão 1 - Pasta "questao-1"
* Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.

### Solução: 
* Foi utilizado o operador "for" como laço de repetição
* (verificando se é múltiplo de 3 ou 5).

### Instalação
* Não há a necessidade de nenhuma dependência.
* Apenas coloque a pasta "questao-1" em um servidor apache funcional com PHP instalado e acesse o arquivo "index-1.php".
* http://127.0.0.1/provaTecnica-BDR/questao-1/index.php

## Questão 2 - Pasta "questao-2"
* Refatore o código abaixo, fazendo as alterações que julgar necessário.
```
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
} elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
}
```

### Solução: 
```
function redirect() {
    header('Location: http://www.google.com');
}

$sLoggedin = (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true);
$cLoggedin = (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true);

if ($sLoggedin || $cLoggedin) {
    redirect();
}
```

### Instalação
* Para executar a solução acesse http://localhost/provaTecnica-BDR/questao-2/

## Questão 3 - Pasta "questao-3"
* Refatore o código abaixo, fazendo as alterações que julgar necessário.
```
<?php
class MyUserClass {
    public function getUserList() {
        $dbconn = new DatabaseConnection('localhost','user','password');
        $results = $dbconn->query('select name from user');
        sort($results);
        return $results;
    }
}
```

### Solução: 
* Nessa class MyUserClass, foi alterada conforme a analise do arquivo, onde foi criada algumas CONSTANTS para conexão com o banco de dados.
* Onde foi usado o objeto PDO da versão do php5.6 para conexao com o banco.

### Instalação
* Fazer a importação do arquivo sql-sys_bdr.sql onde consta uma tabela users que tem os registros do usuarios para ser listados.
* Ou poder ser criado um banco de dados adicionando comando a seguir:
```
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fullname` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

INSERT INTO `users`(`id`,`user_fullname`) VALUES (1,'Prime'),(6,'Summas Than');
```

## Questão 4 - Pasta "questao-4"
* Desenvolva uma API Rest para um sistema gerenciador de tarefas (inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por prioridade.

Desenvolver utilizando:
* Linguagem PHP (ou framework CakePHP);
* Banco de dados MySQL;

Diferenciais:
* Criação de interface para visualização da lista de tarefas; (Implementado)
* Interface com drag and drop;
* Interface responsiva (desktop e mobile); (Implementado)

### Solução: 
- Rest API que suporta operações de List, View, Add, Update e Delete
- Interface para gerênciamento das tarefas
- Interface para teste das requisições JSON na Rest API
- Adequada às regras da PSR-2
- Desenvolvido em CakePHP 2.6, respeitando o requisito da versão PHP 5.3.

### Requisitos
* HTTP Server. Por exemplo: Apache. Mod_rewrite ativado.
* PHP 5.3 ou superior.
* MySQL

### Instalação
* Colocar a pasta "questao-4" no servidor
* Importar o arquivo "questao-4/dbase/desafio_bdr.sql" no PhpMyAdmin ou diretamente no console mysql
* Reconfigurar os dados de acesso a banco no arquivo "questao-4/app/Config/database.php" adequando "host", "username" e "password"
