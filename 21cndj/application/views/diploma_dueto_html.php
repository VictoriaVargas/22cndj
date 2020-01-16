<!DOCTYPE html>
<html>
<head>
	<title>Diploma Dueto</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">	
<style type="text/css">

   @page { margin: 0px 0px; }
   

	body {
		width: 100%;
		margin: 0 0;
		background-image: url("assets/img/duetos.jpg");
		background-repeat: no-repeat;
	}

	#content{
	}
	.nombre{
		margin-top: 360px;
		margin-left: 100px;
		color: #3e3e3e;
		font-size: 40px;
		text-align: center;
		font-family: "Helvetica"

	}
	.como{
		margin-top: 35px;
		margin-left: 10px;
		color: #0b77c2;
		font-size: 20px;
		text-align: center;
		font-family: "Helvetica"
	}
	.lugar_categoria{
		margin-top: 2px;
		margin-left: 500px;
		color: #0b77c2;
		font-size: 20px;
		font-family: "Helvetica"
	}
	.categoria{
		margin-left: 150px;
	}
}			

</style>
</head>
<body>
	<div id="content">
		<div class="nombre"><? echo $alumno->nombre?> <? echo $alumno->paterno?> <? echo $alumno->materno?></div>
		<div class="como"><? echo $alumno->participo_como ?></div>
		<div class="lugar_categoria"><? echo $alumno->lugar_dueto ?> <span class="categoria"><? echo $alumno->categoria_dueto ?></span></div>
	</div>
</body>
</html>