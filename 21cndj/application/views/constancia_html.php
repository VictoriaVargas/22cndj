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
		background-image: url("assets/img/constancia.jpg");
		background-repeat: no-repeat;
	}

	#content{
	}
	.nombre{
		margin-top: 370px;
		margin-left: 100px;
		color: #3e3e3e;
		font-size: 32px;
		text-align: center;
		font-family: "Helvetica"

	}
	.como{
		margin-top: 40px;
		margin-left: 10px;
		color: #0b77c2;
		font-size: 20px;
		text-align: center;
		font-family: "Helvetica"
	}	

	}			

</style>
</head>
<body>
	<div id="content">
		<div class="nombre"><? echo $alumno->nombre?> <? echo $alumno->paterno?> <? echo $alumno->materno?></div>
		<div class="como"><? echo $alumno->participo_como ?></div>
	</div>
</body>
</html>