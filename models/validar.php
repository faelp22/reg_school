<?php
	// função para validar as opções do menu
	function valida_menu(){
		global $raiz_dir, $link_projeto;
		if(isset($_GET['option']) != true):
			return false;
		endif;
		switch ($_GET['option']):
			case 'login':
					include_once ($raiz_dir.'/views/login.php');
			break;
			case 'add_pessoas':
					include_once ($raiz_dir.'/views/add/add_pessoas.php');
			break;
			case 'add_alunos':
				$busca = selecionar("tb_pessoas", NULL, NULL);
					if($busca === false):
						$alert_class = "warning";
						$alert_texto = "Não existe pessoas cadastrada! <a href=\"$link_projeto/?option=add_pessoas\" title=\"Clique aqui para adicionar pessoas\" >ADD Pessoa</a>";
						include_once ($raiz_dir.'/views/alerts/alerts.php');
						break;
					endif;
				include_once ($raiz_dir.'/views/add/add_alunos.php');
			break;
			case 'add_instrutores':
				$busca = selecionar("tb_pessoas", NULL, NULL);
					if($busca === false):
						$alert_class = "warning";
						$alert_texto = "Não existe pessoas cadastrada! <a href=\"$link_projeto/?option=add_pessoas\" title=\"Clique aqui para adicionar pessoas\" >ADD Pessoa</a>";
						include_once ($raiz_dir.'/views/alerts/alerts.php');
						break;
					endif;
				include_once ($raiz_dir.'/views/add/add_instrutores.php');
			break;
			case 'add_monitores':
				$busca = selecionar("tb_pessoas", NULL, NULL);
					if($busca === false):
						$alert_class = "warning";
						$alert_texto = "Não existe pessoas cadastrada! <a href=\"$link_projeto/?option=add_pessoas\" title=\"Clique aqui para adicionar pessoas\" >ADD Pessoas</a>";
						include_once ($raiz_dir.'/views/alerts/alerts.php');
						break;
					endif;
				include_once ($raiz_dir.'/views/add/add_monitores.php');
			break;
			case 'add_laboratorios':
				include_once ($raiz_dir.'/views/add/add_laboratorios.php');
			break;
			case 'add_lotacaes':
				$busca_laboratorios = selecionar("tb_laboratorios", NULL, NULL);
				if($busca_laboratorios === false):
					$alert_class = "warning";
					$alert_texto = "Não existe laboratorios cadastrados! <a href=\"$link_projeto/?option=add_laboratorios\" title=\"Clique aqui para adicionar laboratorios\" >ADD laboratorios</a>";
					include_once ($raiz_dir.'/views/alerts/alerts.php');
					break;
				endif;
				$busca_cursos = selecionar("tb_cursos", NULL, NULL);
				if($busca_cursos === false):
					$alert_class = "warning";
					$alert_texto = "Não existe Cursos cadastrados! <a href=\"$link_projeto/?option=add_cursos\" title=\"Clique aqui para adicionar pessoas\" >ADD Cursos</a>";
					include_once ($raiz_dir.'/views/alerts/alerts.php');
					break;
				endif;
				$busca_instrutores = selecionar("tb_instrutores", NULL, NULL);
				if($busca_instrutores === false):
					$alert_class = "warning";
					$alert_texto = "Não existe instrutores cadastrados! <a href=\"$link_projeto/?option=add_instrutores\" title=\"Clique aqui para adicionar pessoas\" >ADD Instrutores</a>";
					include_once ($raiz_dir.'/views/alerts/alerts.php');
					break;
				endif;
				foreach ($busca_instrutores as $inst_casa=>$instrutor):
					$busca_pessoa = selecionar("tb_pessoas", "id_pessoas", $instrutor['pessoa_id']);
					$busca_instrutores[$inst_casa]['instrutor_nome'] = $busca_pessoa[0]['pessoa_nome'];
				endforeach;
				$busca_monitores = selecionar("tb_monitores", NULL, NULL);
				if($busca_monitores === false):
					$alert_class = "warning";
					$alert_texto = "Não existe monitores cadastrados! <a href=\"$link_projeto/?option=add_monitores\" title=\"Clique aqui para adicionar pessoas\" >ADD Monitores</a>";
					include_once ($raiz_dir.'/views/alerts/alerts.php');
					break;
				endif;
				foreach ($busca_monitores as $inst_casa=>$monitor):
					$busca_pessoa = selecionar("tb_pessoas", "id_pessoas", $monitor['pessoa_id']);
					$busca_monitores[$inst_casa]['monitor_nome'] = $busca_pessoa[0]['pessoa_nome'];
				endforeach;
				include_once ($raiz_dir.'/views/add/add_lotacaes.php');
				break;
			case 'add_cursos':
				include_once ($raiz_dir.'/views/add/add_cursos.php');
			break;
		endswitch;
	}
	function lista_menu(){
		global $raiz_dir, $link_projeto;
		if(isset($_GET['option']) != true):
			return false;
		endif;
		switch ($_GET['option']):
			case 'liste_pessoas':
				$dados = selecionar("tb_pessoas", NULL, NULL);
				if($dados === false):
					$alert_class = "warning";
					$alert_texto = "Não existe pessoas cadastrada! <a href=\"$link_projeto/?option=add_pessoas\" title=\"Clique aqui para adicionar pessoas\" >ADD Pessoa</a>";
					include_once ($raiz_dir.'/views/alerts/alerts.php');
					break;
				endif;
				$titulos['id_pessoas'] = "ID";
				$titulos['pessoa_nome'] = "Nome";
				$titulos['pessoa_email'] = "Email";
				$titulos['pessoa_nasc'] = "Nascimento";
				$titulos['pessoa_sexo'] = "Sexo";
				include_once ($raiz_dir.'/views/list/liste.php');
				break;
			case 'liste_alunos':
				$dados = selecionar("tb_alunos", NULL, NULL);
				if($dados === false):
				$alert_class = "warning";
				$alert_texto = "Não existe pessoas cadastrada! <a href=\"$link_projeto/?option=add_alunos\" title=\"Clique aqui para adicionar alunos\" >ADD Alunos</a>";
				include_once ($raiz_dir.'/views/alerts/alerts.php');
				break;
				endif;
				
				foreach ($dados as $aluno_casa=>$aluno):
				$busca_pessoas = selecionar('tb_pessoas', 'id_pessoas', $aluno['pessoa_id']);
				
				
				$aluno_nome = $busca_pessoas[0]['pessoa_nome'];
				$aluno_email = $busca_pessoas[0]['pessoa_email'];
				$dados[$aluno_casa]['aluno_nome'] = $aluno_nome;
				$dados[$aluno_casa]['aluno_email'] = $aluno_email;
				endforeach;
				
				
				$titulos['id_alunos'] = "ID";
				$titulos['aluno_nome'] = "Nome";
				$titulos['aluno_email'] = "Email";
				$titulos['aluno_status'] = "Status";
				include_once ($raiz_dir.'/views/list/liste.php');
				break;
				endswitch;
				
				/**
				 * Ainda fauta adicionar os emia campos
				 */
				
				
				
				
	}// FIM da lista menu
	
	
	
	function valida_resultado(){
		global $raiz_dir, $link_projeto;
		if(isset($_GET['resultado']) != true):
			return false;
		endif;
		switch ($_GET['resultado']):
		case 'inserir_sucesso':
			$alert_class = "success";
			$alert_texto = "Inserido com sucesso";
			include_once ($raiz_dir.'/views/alerts/alerts.php');
			break;
		case 'inserir_error':
			$alert_class = "danger";
			$alert_texto = "Error ao inserir";
			include_once ($raiz_dir.'/views/alerts/alerts.php');
			break;
		endswitch;
	}