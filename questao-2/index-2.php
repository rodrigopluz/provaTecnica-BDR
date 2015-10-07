<?php

/**
 * Foi mantida a diferença de caso das variavies "Loggedin" e "loggedin" para compatibilidade com a aplicação. 
 */
session_start();

/*
 * Verifico se há cookie ou sessão configurada com usuário logado
 * Parece ser proposital a diferença case_sensitive entre loggedin e Loggedin, 
 * por isso não refatorei, pois a aplicação pode estar armazenando das 2 maneiras
 */
$session = (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true);
$cookie  = (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true);

if ($session || $cookie) {
    header("Location: http://www.google.com");
    exit();
}

?>