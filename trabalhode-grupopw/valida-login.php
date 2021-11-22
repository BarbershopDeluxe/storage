<?php
    //criando as variaveis 
    $login = $_POST['username'];
    $senha = $_POST['password'];


    //verificar se o usuario tem acesso
    if(($login == 'adm') && ($senha == '123')){
          //quando tiver acesso ao sistema ele vai criar umna sessão 
            session_start();
            // criando uma variavel de sessão
           $_SESSION['login-session']=$login;
           $_SESSION['senha-session']=$senha;

           //esta redirencionando um caminho para outro arquivo
           header("Location: area-restrita/index-area-restrita.php");

    }
    else{
        //devolve de volta para a area de login
        header("Location:login.php");
    }


?>