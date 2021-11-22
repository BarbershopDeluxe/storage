<?php
    //vai vai olhar os dados da sessão e verificar se nao tem 
    //o valores que são necessarios para permanecer ali dentro
    session_start();
    // se o login-session é diferente de adm ouse o senha-session é diferente de 123 
    if(($_SESSION['login-session'] != 'adm') || 
    ($_SESSION['senha-session'] != '123') ){
        //vai mandar o usuario para a index inicial
        header("Location: ../login.php");
    }

?>