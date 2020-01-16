<!DOCTYPE html>
<html>
<head>
	<title>Constancia</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">	
<style type="text/css">

   @page { margin: 0px 0px; }
   

	body {
		width: 100%;
		margin: 0 0;
		background-image: url("assets/img/constancia_tijuana.jpg");
		background-repeat: no-repeat;
	}

	#content{
	}
	.nombre{
		margin-top: 200px;
		color: #c54448;
		font-size: 40px;
		font-weight: bold;
		text-align: center;

	}
	.como {
		margin-top: 50px;
		color: #c54448;
		font-size: 30px;	
		text-align: center;

	}
	

	.fecha {
		margin-top: 25px;
		color: #c54448;
		font-size: 30px;
	}



	.sede {
		margin-top: 65px;
		color: #c54448;
		font-size: 30px;
		margin-left: 450px;
	}		
	.del{
		margin-left:425px; 
	}

	.al{
		margin-left:25px; 
	}	
	.de{
		margin-left:65px; 
	}

	.maestros {
		margin-top: 40px;
		color: #c54448;
		font-size: 30px;
		text-align: center;

	}
	.organizadores {
		margin-top: 30px;
		color: #c54448;
		font-size: 30px;
		text-align: center;

	}			

</style>
</head>
<body>
	<div id="content">

		<div class="nombre"><?= $alumno->nombre ?></div>
		<div class="como"><?= $alumno->como; ?></div>
		<div class="sede"><?= $alumno->sede; ?></div>
		<div class="fecha">
			<span class="del"><?= $alumno->del; ?></span> de Nov. -
			<span class="al"><?= $alumno->al; ?></span> de Dic.
		</div>		
		<div class="maestros"><?= $alumno->maestros; ?></div>
		<div class="organizadores"><?= $alumno->organizadores; ?></div>
	</div>
</body>
</html>