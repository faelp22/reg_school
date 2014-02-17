<table class="table table-hover">
	<thead>
			<tr>
				<?php
					foreach($titulos as $cada_titulo):
						echo '<th>'.$cada_titulo. '</th>';
					endforeach;
				?>
			</tr>
	</thead>
	<tbody>
		
			<?php
				foreach($dados as $cada_linha):
					echo '<tr>';
					foreach($titulos as $campo=>$titulo):
						//echo '<td>'.$campo.'</td>';
						echo '<td>'.$cada_linha[$campo].'</td>';
					endforeach;
					echo '</tr>';
				endforeach;
			?>
	</tbody>
</table>