<?php

	session_start();
	$usuario_autenticado = false;

	//Usuarios do sistema
	$usuarios_app = array(
		'josue@yahoo.com.br'=>'1234',
		'user@teste.com.br'=>'abcd'
	);

	foreach ($usuarios_app as $user => $senha) {
		if($_POST['email'] == $user && $_POST['senha'] == $senha) {
			$usuario_autenticado = true;
			break;
		}
	}	

	if(!($usuario_autenticado)){
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	} else{
		$_SESSION['autenticado'] = 'SIM';
		header('Location: home.php');
	}

	

?>