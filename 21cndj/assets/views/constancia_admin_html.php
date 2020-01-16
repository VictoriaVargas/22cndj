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


<?php
switch ($alumno->id_sede) {
	case 1:
		?>	
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
		<?
		break;	
	case 2:
		?>	
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
		<?
		break;
	case 3:
		?>	
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
		<?
		break;						
	case 4:
		?>	
			.sede {
				margin-top: 65px;
				color: #c54448;
				font-size: 30px;
				text-align: center;
				margin-left: 130px;

			}		
			.del{
				margin-left:435px; 
			}

			.al{
				margin-left:35px; 
			}	
			.de{
				margin-left:50px; 
			}
		<?
		break;	
	case 6:
		?>	
			.sede {
				margin-top: 65px;
				color: #c54448;
				font-size: 30px;
				text-align: center;
				margin-left: 10px;

			}		
			.del{
				margin-left:422px; 
			}

			.al{
				margin-left:35px; 
			}	
			.de{
				margin-left:50px; 
			}
		<?
		break;			
	default:
		?>
			.sede {
				margin-top: 65px;
				color: #c54448;
				font-size: 30px;
				text-align: center;
				margin-left: 130px;

			}		
			.del{
				margin-left:435px; 
			}
			.al{
				margin-left:35px; 
			}	
			.de{
				margin-left:50px; 
			}
		<?
		break;
}
?>
		
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
			<span class="del"><?= $alumno->del; ?></span>
			<span class="al"><?= $alumno->al; ?></span>
			<span class="de"><?= $alumno->de; ?></span>
		</div>		
		<div class="maestros"><?= $alumno->maestros; ?></div>
		<div class="organizadores"><?= $alumno->organizadores; ?></div>
	</div>
</body>
</html>