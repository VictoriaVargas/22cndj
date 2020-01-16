<!DOCTYPE html>
<html>
<head>
	<title>Constancia</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">	
<style type="text/css">

   @page { margin: 180px 50px; }
   

	body {
		width: 90%;
		margin: 0 auto;
		background-image: url("<?= base_url()?>assets/img/constancia.jpg");

	}
	h1 {
		font-family: "Helvetica";
		color:#00569b;
		font-size: 22px;
		font-weight: 200px;
		line-height: 3px;
		letter-spacing: 5px;
	}

	h2 {
		font-family: "Helvetica";
		color:#00569b;
		font-size: 16px;
		font-weight: 200px;
		line-height: 16px;
	}

	h3 {
		font-family: "Helvetica";
		color:#00569b;
		font-size: 12px;
		font-weight: 200px;
	}


	p, ul, li{
		font-family: "Helvetica";
		color:#000;
		font-size: 12px;
		font-weight: 200px;
		text-align: justify;
	}
	.fecha{
		text-align: right;
		font-family: "Helvetica";
		font-size: 14px;
		color:#00569b;
		width: 100%;				
	}

	.destinatario {
		font-weight: 100px;
		line-height: 5px;
		letter-spacing: 3px;
	}
	.tabla{
		width: 80%;
		text-align: center;
		border: 1px solid;
		font-family: "Helvetica";
		color: #FFF;
		font-size: 18px;
	}
	#content{
		text-align: center;
	}

</style>
</head>
<body>
	<div id="content">

		<h1><?= $alumno->nombre." ".$alumno->paterno." ".$alumno->materno; ?></h1>

		<img src="<?php echo base_url();?>assets/img/constancia.jpg" width="200px" >
		<br>
		
	</div>
</body>
</html>