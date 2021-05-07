<?php

	session_start();
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;


	//Perfis de Usuários
	$perfis = array(1 => 'Administrativo', 2 =>'Usuario' );

	//Usuarios do sistema
	$usuarios_app = array(
		array('id'=>1 , 'email' => 'josue@yahoo.com.br' , 'senha'=>'1234' , 'perfil_id'=> 1),
    	array('id'=>2 , 'email' => 'user@teste.com.br'  , 'senha'=>'1234' , 'perfil_id'=> 1),
		array('id'=>3 , 'email' => 'jose@teste.com.br'  , 'senha'=>'1234' , 'perfil_id'=> 2),
		array('id'=>4 , 'email' => 'maria@teste.com.br' , 'senha'=>'1234' , 'perfil_id'=> 2)


	);

	foreach ($usuarios_app as $user ) {
		if($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha']) {
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
			break;
		}
	}	

	if(!($usuario_autenticado)){
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	} else{
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php');
	}

	

?>