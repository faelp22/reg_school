<form role="form" action="<?php echo $link_projeto;?>/models/inserir_dados.php" method="POST">
	<legend class="text-center">Cadastro de Monitores</legend>
	<input type="hidden" name="monitor_status" value="1" />
	Monitores
	<select class="form-control" name="pessoa_id" required>
		<option selectec value=""> -- Selecione -- </option>
		<?php 
			foreach($busca as $v):
					echo '<option value="'.$v['id_pessoas'].'">'.$v['pessoa_nome'].'</option>';
			endforeach;
		?>
	</select><br />
	Salario <br />
	<input type="text" class="form-control" name="monitor_salario" /><br /><br />
	<input type="hidden" name="nome" value="<?php echo base64_encode('tb_monitores')?>" />
	<input type="submit" class="form-control btn btn-success" value="Transformar" />
</form>