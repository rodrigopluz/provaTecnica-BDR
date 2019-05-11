<?php require 'class-user.php'; ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teste de Conhecimentos</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="">Teste de Conhecimentos – BDR</a>
                </div>
            </div>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <h1>Pergunta 3</h1>
                <p>Refatore o código abaixo, fazendo as alterações que julgar necessário.</p>
                <pre>
                    class MyUserClass {
                        public function getUserList() {
                            $dbconn = new DatabaseConnection('localhost','user','password');
                            $results = $dbconn->query('select name from user');
                            sort($results);
                            return $results;
                        }
                    }
                </pre>
            </div>
        </div>
        <div class="container buzz">
            <ul>
                <?php
                    /*
                     * Nessa class MyUserClass, foi alterada conforme a analise do arquivo, onde foi criada algumas CONSTANTS para conexão com o banco de dados.
                     * Onde foi usado o objeto PDO da versão do php5.6 para conexao com o banco.
                     */
                    $users = new MyUserClass;
                    foreach ($users->getListaUsuario() as $user) {
                        echo '<li>'. $user['user_fullname'] .'</li>';
                    }
                ?>
            </ul>
        </div>
        <div class="clearfix"><br/></div>
        <footer class="footer">
            <div class="container">
                <p class="text-muted">
                    E-mail: <a href="mailto:rodrigopluz@gmail.com?Subject=Pergunta 1" target="_blank">rodrigopluz@gmail.com</a> <br/>
                    GitHub: <a href="http://github.com/rodrigopluz" target="_blank">http://github.com/rodrigopluz</a>
                </p>
            </div>
        </footer>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>

