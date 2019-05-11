<?php 

/*
 * Nesse script getListaUsuario, tem a função de retornar uma lista de usuários em ordem alfabética.
 * No código passado no exercício, para o funcionamento do método é instanciado um objeto para conexão 
 * com o banco de dados toda vez que o método for chamado.
 * Com as alterações é possível utilizar o método sem a necessidade de criar um novo objeto. 
 * Além de permitir utilizar o mesmo método em diferentes conexões com o banco de dados.
 *
 * Fazer a importação do arquivo sql onde consta uma tabela que tem os registros do usuarios.
 */

class MyUserClass
{
    const HOST = '127.0.0.1';
    const DATABASE = 'sys_bdr';
    const USER = 'root';
    const PASSWORD = '';

    public function getListaUsuario()
    { 
        $dsn = 'mysql://host='.self::HOST.';dbname='.self::DATABASE;

        $dbconn = new PDO($dsn, self::USER, self::PASSWORD);
        $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = 'SELECT user_fullname FROM users ORDER BY user_fullname ASC';

        $params = [date('Y-m-d H:i:s')];
        $stmt = $dbconn->prepare($sql);
        $stmt->execute($params);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
       
        sort($rows);
        return $rows; 
    } 
}