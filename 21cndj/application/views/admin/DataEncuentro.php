<div class="row">													
	<div class="col-md-6">
		<table class="table table-striped">
			<tr>
				<td>Categoria</td><td><b class="text-primary" id="modal_nombre" ><?= $encuentro->categoria ?> </b></td>
			</tr>
			<tr>
				<td>Nombre Coreografía</td><td><b class="text-primary" id="modal_fnac"><?= $encuentro->nombre_coreografia?></b></td>
			</tr>										
			<tr>
				<td>Director</td><td><b class="text-primary" id="modal_nombre" ><?= $encuentro->nombre ?> </b></td>
			</tr>
			<tr>
				<td>Teléfono</td><td><b class="text-primary" id="modal_nombre" ><?= $encuentro->telefono ?> </b></td>
			</tr>			
			<tr>
				<td>Email</td><td><b class="text-primary" id="modal_nombre" ><?= $encuentro->email ?> </b></td>
			</tr>			
			<tr>
				<td>Coreografo</td><td><b class="text-primary" id="modal_fnac"><?= $encuentro->coreografo?></b></td>
			</tr>										
			<tr>
				<td>Música</td><td><b class="text-primary" id="modal_fnac"><?= $encuentro->musica?></b></td>
			</tr>			
		</table>
	</div>
	<div class="col-md-6">		
		<h3> Interpretes:</h3>
		<table class="table table-striped">
			<tr>
				<td class="text-primary" >No.</td>
				<td class="text-primary" >Nombre</td>
				<td class="text-primary">Edad</td>
				<td class="text-primary">Correo</td>								
			</tr>
			<?php 
			$i=1;
				foreach ($interpretes->result() as $interprete) { 
				if ($interprete->nombre){ ?>
			<tr>
				<td><?= $i?></td>
				<td><?= $interprete->nombre?></td>
				<td><?= $interprete->fecha_nacimiento?></td>
				<td><?= $interprete->email?></td>								
			</tr>			
			<?php  
			$i++;
			}
			} ?>
		</table>												

	</div>
</div>

