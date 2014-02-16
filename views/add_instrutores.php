<form role="form" action="<?php echo $link_projeto;?>/models/inserir_dados.php" method="POST">
	<legend class="text-center">Cadastro de Instrutores</legend>
	<input type="hidden" name="instrutor_status" value="1" />
	Instrutores
	<select class="form-control" name="pessoa_id" required>
		<option selectec value=""> -- Selecione -- </option>
		<?php 
			foreach($busca as $v):
					echo '<option value="'.$v['id_pessoas'].'">'.$v['pessoa_nome'].'</option>';
			endforeach;
		?>
	</select><br />
	Salario <br />
	<input type="text" class="form-control" name="instrutor_salario" /><br /><br />
	Formação <br />
	<textarea style="height:120px;" class="form-control" name="instrutor_formacao"></textarea><br /><br />
	<input type="hidden" name="nome" value="<?php echo base64_encode('tb_instrutores')?>" />
	<input type="submit" class="form-control btn btn-success" value="Transformar" />
</form>