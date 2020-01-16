			<center>
				<h3>Registrado con asistencia: <?= date("Y-M-d h:i:s ")?></h3>
			<?php if ($alumno->observaciones!= ""){ ?>
				<p style='color:green'>OBSERVACIONES :<?= $alumno->observaciones ?></p>
			<?php } ?>
			
			<p style='color:green'>Fecha de Pago :<?= $alumno->fecha_pago ?> / Pronto pago para esta sede <?= $fecha_pronto_pago ?></p> 
			<?php if ($pronto_pago){?> 
				<h2 style="font-size: 20px; text-decoration: underline;">PRONTO PAGO -- ok </h2>
			<?}?>
			<?php if ($asistencias>1){ ?>
				<center> <h3 style='color:red'><i class='fa fa-warning'></i>Este código se ha escaneado : <?= $asistencias ?> veces </h3></center>
			<?php } ?>