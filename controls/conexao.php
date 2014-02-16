<?php
	/**
	 * Este arquivo é necessario para fazer conexão com o banco de dados
	 * @author <Isael Sousa Santos>
	 * 
	 */

	$servidor = ""; // Endereco do banco
	$usuario_banco = ""; // Usuario do banco
	$senha_banco = ""; // Senha do usuario do banco
	$nome_banco = ""; //Nome do banco de dados
	
	//Conectando com o SGBD
	$con = mysql_connect($servidor, $usuario_banco, $senha_banco) or die(mysql_error());
	
	// Selecionando o banco de dados
	$banco = mysql_select_db($nome_banco, $con) or die(mysql_error());