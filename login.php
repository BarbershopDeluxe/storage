<?php

<form action="" method="post">

	session_start();

	if(isset($_POST['usuario'], $_POST['senha'])){

	if($_POST['usuario']='maria' && $_POST['senha']='123'){

		$_SESSION['usuario'] = $_POST['usuario'];

		header('Location:clientes.php');
	
	}
}

if (isset($_GET['erro'])){
	
	$erro = 'É necessário login para acessao o sistema!';
}

?>

<div style="background-color:coral; margin:10px"> 

<?php echo $erro ?? '' ?>

</div>

	<input type ="text" name="usuario placeholder="Usuário">

	<input type ="text" name="senha" placeholder="Insira sua senha">

	<input type ="text" name="login" value="Login">

</form>
















/>