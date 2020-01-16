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
	<center>
<h2 style="margin: 100px">CÓDIGO DE ACCESO</h4>
	<span style="font-size: 20px"> Presenta este código, para facilitar tu proceso de registro</span>
	<br><br>
<img src="<?= base_url()?>assets/img/logo.jpg" width="100px">
</center>
<br>
<table border="0" align="center">
	<tr>
		<td>Nombre:  <span class="text-primary"><?= $alumno->nombre." ".$alumno->paterno." ".$alumno->materno." "; ?></span></td>
		<td align="center" rowspan="4" class="border">
			<h5><?= $alumno->token_qr ?></h5>
			Te esperamos en el evento
		</td>	
	</tr>
	<tr>
		<td>Sede: <span class="text-primary"><?= $alumno->nombre_sede ?></span></td>
	</tr>
	<tr>
		<td>Nivel: <span class="text-primary"><?= $alumno->nivel ?></span></td>
	</tr>
	<tr>
		<td>Fecha de registro: <span class="text-primary"><?= $alumno->fecha_registro ?></span></td>
	</tr>				
</table>
</center>
</body>
