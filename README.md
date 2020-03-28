# Teste de Conhecimentos – Analista Desenvolvedor

![version](https://img.shields.io/badge/version-1.0.0-blue.svg) 
[![license](https://img.shields.io/apm/l/vim-mode.svg)](LICENSE)

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
* Para executar a solução acesse http://127.0.0.1/provaTecnica-BDR/questao-2/

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
* Onde foi usado o objeto PDO da versão do php5.3 para conexao com o banco.

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
* Fazer a importação do arquivo sql-sys_bdr.sql onde consta uma tabela users que tem os registros do usuarios para ser listados.
- Operações do API Index, View, Add, Edit e Delete
- Desenvolvido em CakePHP 3.5

### Requisitos
* HTTP Server. Por exemplo: Apache. De preferência com mod_rewrite ativo, mas não é obrigatório.
* PHP 5.6.0 ou superior.
* extensão mbstring
* extensão intl
* MySQL

### Instalação
* Criar banco de dados mysql e adicionar a tabela tarefas:
* Criar um banco de dados e adicionar a tabela com o comando:
```
CREATE TABLE `api_cake`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NULL,
  `descricao` text NULL,
  `prioridade` int(11) NULL,
  PRIMARY KEY (`id`)
);
```
* Colocar a pasta "questao-4" no servidor
* Reconfigurar os dados de acesso a banco no arquivo "http://127.0.0.1/provaTecnica-BDR/questao-4/config/app.php" adequando "host", "username" e "password" apartir da linha 220;
* Se precisar executar o comando para instalar os componentes do composer. 
```
composer install
```

## Browser Suportados

<img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/chrome.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/firefox.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/edge.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/safari.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/opera.png" width="64" height="64">

## Autor

<table>
  <tr>
    <td>
      <img src="https://avatars2.githubusercontent.com/u/8739638?s=460&v=4" width="100">
    </td>
    <td>
      :octocat: Rodrigo Pereira<br />
      <a href="mailto:rodrigopluz@gmail.com">:point_right: rodrigopluz@gmail.com</a><br />
    </td>
  </tr>
</table>
