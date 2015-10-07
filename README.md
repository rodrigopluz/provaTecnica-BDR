# Teste de Conhecimentos – Analista Desenvolvedor

## Questão 1 - Pasta "questao-1"
* Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.

### Solução: 
* Foi utilizado o operador aritmético módulo (%) para calcular o resto da divisão (verificando se é múltiplo de 3 ou 5).
* A função foi desenvolvida para poder adaptar o script futuramente (caso seja necessário imprimir de 2 a 200, por exemplo).

### Instalação
* Não há a necessidade de nenhuma dependência.
* Apenas coloque a pasta "questao-1" em um servidor apache funcional com PHP instalado e acesse o arquivo "index-1.php".
* Siga as instruções na tela.

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
* Foi mantida a diferença de caso das variavies "Loggedin" e "loggedin" para compatibilidade com a aplicação.
* Verifico se há cookie ou sessão configurada com usuário logado
* Parece ser proposital a diferença case_sensitive entre loggedin e Loggedin, por isso não refatorei, pois a aplicação pode estar armazenando das 2 maneiras

### Instalação
* O código é apenas parcial. O mesmo deve ser aberto em um editor de texto e avaliado.

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
* Nesse script getListaUsuario, tem a função de retornar uma lista de usuários em ordem alfabética.
* No código passado no exercício, para o funcionamento do método é instanciado um objeto para conexão com o banco de dados toda vez que o método for chamado.
* Com as alterações é possível utilizar o método sem a necessidade de criar um novo objeto. 
* Além de permitir utilizar o mesmo método em diferentes conexões com o banco de dados.

### Instalação
* O código é apenas parcial. O mesmo deve ser aberto em um editor de texto e avaliado.

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
