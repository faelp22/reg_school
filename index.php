<?php
	/**
	 * Inicio da pagina
	 */
	//arquivo de configuração do sistema.
	require_once 'models/urls.php';
	/**
	 * Conteudo do site
	 */
	//Validar as urls
	require_once 'models/validar.php';
	require_once 'controls/gerenciador.php';
	
	function conteudo(){
		global $raiz_dir, $link_projeto;
		echo "<h3>Sistema em construção</h3>";
		valida_resultado();
		valida_menu();
		lista_menu();
		
	}
	/**
	 * fim da pagina
	 */
	//arquivo de layout.
	require_once 'views/template.php';
?>