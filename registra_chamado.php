<?php

	session_start();
	
	//gera o texto
	$titulo = str_replace("#",'-',$_POST['titulo']);
	$categoria = str_replace("#",'-',$_POST['categoria']);
	$descricao = str_replace("#",'-',$_POST['descricao']);
	
	$texto = $_SESSION['id'].'#'.$titulo.'#'.$categoria.'#'.$descricao.PHP_EOL;


	$arquivo = fopen('arquivo.hd','a'); //abre arquivo
	fwrite($arquivo, $texto); //escreve texto
	fclose($arquivo); //fecha arquivo

	header('Location: abrir_chamado.php');

?>