<form role="form" action="<?php echo $link_projeto;?>/models/inserir_dados.php" method="POST">
	<legend class="text-center">Cadastro de Laboratorios</legend>
	
	Nome do Laboratorio <br />
	<input type="text" class="form-control" name="laboratorio_nome" /><br /><br />
	
	Andar do Laboratorio <br />
	<select name="laboratorio_andar" class="form-control">
		<option selected value="">-- Selecione --</option>
		<?php
			for($op = 0; $op <= 13; $op++):
				echo '<option value="'.$op.'">'.$op.'</option>';
			endfor;
		?>
	</select><br /><br />
	
	Numero de PCs<br />
	<select name="laboratorio_num_pc" class="form-control">
		<option selected value="">-- Selecione --</option>
		<?php
			for($op = 0; $op <= 50; $op++):
				echo '<option value="'.$op.'">'.$op.'</option>';
			endfor;
		?>
	</select><br /><br />

	<input type="hidden" name="laboratorio_status" value="1" />
	<?php //name="nome" referencia a tabela ?>
	<input type="hidden" name="nome" value="<?php echo base64_encode('tb_laboratorios')?>" />
	
	<input type="submit" class="form-control btn btn-success" />
	
</form>