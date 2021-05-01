<?php

	print_r($_POST);
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
		header('Location: index.php?login=erro');
	}

	

?>