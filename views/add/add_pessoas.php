<form role="form" action="<?php echo $link_projeto;?>/models/inserir_dados.php" method="POST">
	<legend class="text-center">Cadastro de Pessoas</legend>
	Nome <br />
	<input type="text" class="form-control" name="pessoa_nome" /><br /><br />
	Email <br />
	<input type="text" class="form-control" name="pessoa_email" /><br /><br />
	Data de Nascimento <br />
	<input type="text" class="form-control" name="pessoa_nasc" /><br />
	Escolha seu sexo<br />
	<label>M <input required type="radio" name="pessoa_sexo" value="Masculino" /></label>
	<span> ou </span>
	<label>F <input required type="radio" name="pessoa_sexo" value="Feninino" /></label><br /><br />
	<?php //name="nome" referencia a tabela ?>
	<input type="hidden" name="nome" value="<?php echo base64_encode('tb_pessoas')?>" />
	<input type="submit" class="form-control btn btn-success" />
</form>