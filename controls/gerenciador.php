<?php
	include_once ($raiz_dir.'/controls/conexao.php');
	
	function inserir($tabela_nome, $tabela_dados){
		global $con;
		
		// incluindo query
		$query = "INSERT INTO `$tabela_nome` ";
		
		// segunda parte da query, reconhecimento dos campos
		
		$query .="(";
		$rodada = 1;
			foreach ($tabela_dados as $campo=>$valor):
				if($rodada > 1):
					$query .= ", ";
				endif;
				$query .= "`$campo`";
				$rodada++;
			endforeach;
		$query .=")";
		
		// terceira parte da query,
		
		$query .= " VALUES (";
				
		$rodada = 1;
			foreach ($tabela_dados as $campo=>$valor):
				if($rodada > 1):
					$query .= ", ";
				endif;
				$query .= "'$valor'";
				$rodada++;
			endforeach;
		$query .=");";
		
		$resultado = mysql_query($query, $con) or die(mysql_error());
		
		if ($resultado == true):
			mysql_close();
			return true;
		else:
			mysql_close();
			return false;
		endif;
	}// FIM inserir
	
	function selecionar($tabela_nome, $cond_campo, $cond_valor){
		global $con;
		
		//iniciando query reconhecimento da tabela
		$query = "SELECT * FROM `$tabela_nome`";
		
		//Verifica se precisa de condição
		if($cond_campo && $cond_valor):
			$query .= "WHERE `$cond_campo`='$cond_valor'";
		endif;
		
		$resultado = mysql_query($query, $con) or die(mysql_error());
		
		//mysql_close();
		
		//checa se existe alguma coisa na busca
		if(mysql_num_rows($resultado) > 0):
			//pegar os dados e guardar num array pro php
			while ($linha = mysql_fetch_array($resultado)):
				$busca[] = $linha;
			endwhile;
			return $busca;
		else:
			return false;
		endif;
	}//FIM selecionar
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	