<!DOCTYPE html>
<html lang="PT-br">
	<head>
		<meta charset="UTF-8" />
		<title>Projeto UTD</title>
		<link href="<?php echo $link_projeto; ?>/static/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
		
		
	</head>
	<body>
		<?php include_once($raiz_dir."/views/menu.html"); ?>
		<div style="width: 75%;
					float: center;
					margin-left: auto;
					margin-right: auto;">
		
		<?php
		
			conteudo();
		
		?>
		</div>
		<!-- Dica O bootstrap não consegue carregar os scrips se os mesmo estiverem lincados no inicio do arquivo -->
		<script type="text/javascript" src="<?php echo $link_projeto; ?>/static/bootstrap/js/google-jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $link_projeto; ?>/static/bootstrap/js/bootstrap.js"></script>
	</body>
</html>