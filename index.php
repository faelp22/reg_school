<?php
	/**
	 * Inicio da pagina
	 */
	//arquivo de configuração do sistema.
	include_once 'models/urls.php';
	/**
	 * Conteudo do site
	 */
	//Validar as urls
	include_once 'models/validar.php';
	include_once 'controls/gerenciador.php';
	
	function conteudo(){
		global $raiz_dir, $link_projeto;
		valida_resultado();
		valida_menu();
		lista_menu();
	}
	/**
	 * fim da pagina
	 */
	//arquivo de layout.
	include_once 'views/template.html';
?>