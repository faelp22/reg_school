<form role="form" action="<?php echo $link_projeto;?>/models/inserir_dados.php" method="POST">
	<legend class="text-center">Cadastro de Cursos</legend>
	Curso <br />
	<input type="text" class="form-control" name="curso_nome" /><br /><br />
	Carga Horaria <br />
	<input type="text" class="form-control" name="curso_ch" /><br /><br />
	Descrição <br />
	<textarea style="height:120px;" class="form-control" name="curso_descricao"></textarea><br /><br />
	<?php //name="nome" referencia a tabela ?>
	<input type="hidden" name="nome" value="<?php echo base64_encode('tb_cursos')?>" />
	<input type="submit" class="form-control btn btn-success" />
</form>