<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            if(isset($_GET['msg'])){
                echo("<h1>".$_GET['msg']."</h1>");
            }
        ?>
        <form name="login" method="post" action="verifica-login.php">
            <label>Login:</label>
            <input type="text" name="txtlogin">
            <label>Senha:</label>
            <input type="password" name="txtsenha">
            <input type="submit" value="Entrar">
        </form>
    </body>
</html>