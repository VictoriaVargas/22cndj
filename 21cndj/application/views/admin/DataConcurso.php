<div class="row">													
	<div class="col-md-6">
		<table class="table table-striped">
			<tr>
				<td>Nombre Sede </td><td><b class="text-primary" id="modal_nombre" ><?= $alumno->nombre_sede ?> </b></td>
			</tr>			
			<tr>
				<td>Nombre Director </td><td><b class="text-primary" id="modal_nombre" ><?= $alumno->nombre ?> </b></td>
			</tr>			
			<tr>
				<td>Categoría </td><td><b class="text-primary" id="modal_nombre" ><?= $alumno->categoria ?> </b></td>
			</tr>			
			<tr>
				<td>Nombre de la Coreografía </td><td><b class="text-primary" id="modal_nombre" ><?= $alumno->nombre_coreografia ?> </b></td>
			</tr>
			<tr>
				<td>Nombre del coreografo </td><td><b class="text-primary" id="modal_nombre" ><?= $alumno->coreografo ?> </b></td>
			</tr>			
			<tr>
				<td>Música </td><td><b class="text-primary" id="modal_nombre" ><?= $alumno->musica ?> </b></td>
			</tr>
			
		</table>
	</div>
	<div class="col-md-6">													
		<table class="table table-striped">
			<tr>
				<td>Nombre </td><td><b class="text-primary" id="modal_nombre" ><?= $alumno->nombre1 ?> </b></td>
			</tr>
			<tr>
				<td>Fecha de nacimiento</td><td><b class="text-primary" id="modal_fnac"><?= $alumno->fecha1?></b></td>
			</tr>
			<tr>
				<td>Email </td><td><b class="text-primary" id="modal_nombre" ><?= $alumno->mail1 ?> </b></td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
			<tr>
				<td>Nombre 2</td><td><b class="text-primary" id="modal_nombre" ><?= $alumno->nombre2 ?> </b></td>
			</tr>
			<tr>
				<td>Fecha de nacimiento2</td><td><b class="text-primary" id="modal_fnac"><? echo ($alumno->fecha2!="0000-00-00")?$alumno->fecha2:""; ?></b></td>
			</tr>
			<tr>
				<td>Email 2</td><td><b class="text-primary" id="modal_nombre" ><?= $alumno->mail2 ?> </b></td>
			</tr>												
		</table>
	</div>
</div>
<hr>

