<?php 

/*
 * Nesse script getListaUsuario, tem a função de retornar uma lista de usuários em ordem alfabética.
 * No código passado no exercício, para o funcionamento do método é instanciado um objeto para conexão 
 * com o banco de dados toda vez que o método for chamado.
 * Com as alterações é possível utilizar o método sem a necessidade de criar um novo objeto. 
 * Além de permitir utilizar o mesmo método em diferentes conexões com o banco de dados.
 */

class MyUserClass { 
    public function getListaUsuario($dbconn = null) { 
        if ( !isset($dbconn) || !( $dbconn instanceOf DatabaseConnection ) ) { 
            $dbconn = new DatabaseConnection('localhost','root',''); 
        }

        $results = $dbconn->query('SELECT name FROM users');
        sort($results);         
        return $results; 
    } 
}

?>