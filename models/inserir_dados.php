<?php
	// esté arquivo é responsavel por receber e tratar os dados
	include_once 'urls.php';
	include_once ($raiz_dir.'/controls/gerenciador.php');
	$dados = $_POST;
	
	//recebendo o nome da tabela
	$tabela_nome = base64_decode($_POST['nome']);
	
	array_pop($dados);
	
	$resultado = inserir($tabela_nome, $dados);
	
	if($resultado === true):
		header("location: $link_projeto/?resultado=inserir_sucesso");
	else:
		header("location: $link_projeto/?resultado=inserir_error");
	endif;