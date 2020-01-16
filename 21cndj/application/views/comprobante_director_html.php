<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">	

<style type="text/css">
@page { margin: 60px 50px; }


body {
	color: #7d7a7a;
	font-family: "Helvetica";
	font-size: 12px;
	width: 100%;
}

h2{
	font-family: "Helvetica";
	color:#a82737;
	font-weight: 200px;
	line-height: 3px;
	letter-spacing: 5px;
	font-size: 36px
}
h5{
	font-family: "Helvetica";
	color:#a82737;
	font-weight: 200px;
	line-height: 3px;
	letter-spacing: 5px;
	font-size: 28px;
}	
.text-primary{
	font-family: "Helvetica";
	color:#a82737;
	font-weight: 200px;
	line-height: 2px;
	font-size: 20px;
}		
.border{
	border-left: 2px dashed;
	padding-left: 25px;
}
</style>
<body>
	<table align="center" width="80%">
		<tr>
			<td><h3>Comprobante de director</h3></td>
			<td><img src="assets/img/logo.jpg" width="100px"></td>
		</tr>
	</table>
	<br>
	<table border="0">
		<tr>
			<td>Nombre: <span class="text-primary"><?= $director->nombre." "; ?></span></td>	
		</tr>
		<tr>
			<td>Sede: <span class="text-primary"><?= $director->nombre_sede ?></span></td>
		</tr>
		<tr>
			<td>Adademia: <span class="text-primary"><?= $director->academia ?></span></td>
		</tr>
		<tr>
			<td>Fecha de registro: <span class="text-primary"><?= $director->fecha_registro ?></span></td>
		</tr>				
	</table>
	<br><br>
	<center><span class="text-primary">Listado de alumnos</span> </center>
	<br><br>
	<table>
		<?php 
		if ($alumnos){?>
			<?php foreach ($alumnos->result() as $alumno){?>
				<tr>
					<td>				
						<img src="assets/qr/<?= $alumno->token_qr?>.png" width="100px">
					</td>
					<td class="text-primary">
						<?= $alumno->nombre." ".$alumno->paterno." ".$alumno->materno?>
					</td>
					<td class="text-primary">
						: <?= $alumno->nivel?>
					</td>					
				</tr>
			<?php } 
		} ?>
	</table>

</body>
