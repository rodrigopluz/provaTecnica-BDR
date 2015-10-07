<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teste de Conhecimentos – Analista Desenvolvedor</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="">Teste de Conhecimentos – Analista Desenvolvedor – BDR</a>
                </div>
            </div>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <h1> Pergunta 1</h1>
                <p>Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número
                    e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.</p>
                <form action="" method="post">
                    <input class="btn btn-primary btn-lg" type="submit" name="bdr" value="resultado"/>
                </form>
            </div>
        </div>
        <div class="container buzz">
            <?php
                /*
                 * Foi utilizado o operador aritmético módulo (%) para calcular o resto da divisão 
                 * (verificando se é múltiplo de 3 ou 5).
                 * A função foi desenvolvida para poder adaptar o script futuramente 
                 * (caso seja necessário imprimir de 2 a 200, por exemplo).
                 */
                $bdr = filter_input(INPUT_POST, 'bdr');
                if (!empty($bdr) && isset($bdr)) {
                	function AnDv($x, $y){
    					for($x; $x<=$y; $x++) 
    						echo ($x % 3 ? ($x % 5 ? $x : "Buzz") : ($x % 5 ? "Fizz" : "FizzBuzz")) . "<br/>";
    				}
    				AnDv(1,100);
                }
            ?>
        </div>
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

