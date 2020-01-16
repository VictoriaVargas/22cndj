<table class="table">
<?php  foreach ($interpretes->result() as $interprete) { ?>
	<tr>
		<td> <input type="checkbox" class="al_tmp_check" value="<?=  $interprete->id_alumno_tmp ?>" name="al_tmp_check[]"></td><td><?= $interprete->nombre." ".$interprete->paterno ?></td>
	</tr>
<?php 	} ?>
</table>