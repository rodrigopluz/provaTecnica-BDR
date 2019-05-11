<?php

/**
 * Foi mantida a diferença de caso das variavies "Loggedin" e "loggedin" para compatibilidade com a aplicação. 

 * Como o session e o cookie numca iriam ser TRUE.
 * Fiz a comparação de que se a session ou o cookie forem vazios ou forem igual a FALSE
 */
session_start();
unset($_SESSION['loggedin']);

if (isset($_POST['bdr'])) {
    $_SESSION['loggedin'] = true;
}

?>

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
                <h1> Pergunta 2</h1>
                <p>Refatore o código abaixo, fazendo as alterações que julgar necessário.</p>
                <pre>
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        header("Location: http://www.google.com");
                        exit();
                    } elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
                        header("Location: http://www.google.com");
                        exit();
                    }
                </pre>
                <form action="" method="post">
                    <input class="btn btn-primary btn-lg" type="submit" name="bdr" value="resultado"/>
                </form>
            </div>
        </div>
        <div class="container buzz">
            <?php
                function redirect() {
                    header('Location: http://www.google.com');
                }
                
                $sLoggedin = (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true);
                $cLoggedin = (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true);
                
                if ($sLoggedin || $cLoggedin) {
                    redirect();
                }
            ?>
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


