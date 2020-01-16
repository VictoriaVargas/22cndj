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
<h2>Comprobante de registro</h4>
<img src="assets/img/logo.jpg" width="100px">
<br>
<table border="0">
	<tr>
		<td>Nombre:  <span class="text-primary"><?= $alumno->nombre." ".$alumno->paterno." ".$alumno->materno." "; ?></span></td>
		<td align="center" rowspan="4" class="border">
			<img src="assets/qr/<?= $alumno->token_qr ?>.png" width="150px">
			<h5><?= $alumno->token_qr ?></h5>
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
