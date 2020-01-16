<center>
	<table>
		<tr>
			<td>Registrado con asistencia: </td>
			<td><?= date("Y-M-d h:i:s ")?></td>
		</tr>
	<?php if ($alumno->observaciones!= ""){ ?>
		<tr>
			<td><img src="http://aux3.iconspalace.com/uploads/520401131720212498.png" width="20px">OBSERVACIONES :</td>
			<td><?= $alumno->observaciones ?></td>
		</tr>
		<?php } ?>

		<tr>
			<td>Nivel:</td>
			<td>
				<?php echo $alumno->nivel?>  color:

				<?php 
				switch ($alumno->nivel) {
					case 'Oyente':
						echo "ROSITA" ;
						$color="#fbadf1";
						break;
					case 'Pulsera VIP':
						echo "Verde fosforescente";
						$color="#05f726";						
						break;	
					case 'Kids (7 - 12 años)':
						echo "Amarillo fosforescente";
						$color="#ffeb3b";						
						break;					
					case 'Nivel 1 (Intermedio-Avanzado) Grupo A':					
						echo "Verde brilloso";
						$color="#25a000";						
						break;
					case 'Nivel 2 (Avanzado-Profesional)':
						echo "Amarillo brilloso";
						$color="#fdfb90";						
						break;
					case 'Nivel 2 (Avanzado-Profesional)    ':
						echo "Amarillo brilloso";
						$color="#fdfb90";						
						break;
					default:
						# code...
						break;
				}
				?> 				
				<span style="width: 20px; height: 20px;background: <? echo $color;?>; display: inline-block;"></span>
			</td>
		</tr>
		<tr>
			<td>Fecha de Pago :</td>
			<td><?= $alumno->fecha_pago ?> </td>
		</tr>
		<?php if ($pronto_pago){?> 					
		<tr>
			<td><img src="https://image.flaticon.com/icons/png/128/107/107499.png" width="20px">Playera</td>
			<td>SI</td>
		</tr>
		<?}?>
		<?php if ($asistencias>1){ ?>
			<tr>
				<td colspan="2"><img src="http://aux3.iconspalace.com/uploads/520401131720212498.png" width="20px">Este código se ha escaneado : <?= $asistencias ?> veces</td>
			</tr>
		<?php } ?>
	</table>
