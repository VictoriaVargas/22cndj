<div class="row">													
	<div class="col-md-6">
		<table class="table table-striped">
			<tr>
				<td>Nombre</td><td><b class="text-primary" id="modal_nombre" ><?= $alumno->nombre." ".$alumno->paterno." ".$alumno->materno ?> </b></td>
			</tr>
			<tr>
				<td>Fecha de nacimiento</td><td><b class="text-primary" id="modal_fnac"><?= $alumno->fecha_nac?></b></td>
			</tr>										
			<tr>
				<td>Teléfono: <b class="text-primary" id="modal_tel"><?= $alumno->telefono?></b></td><td>Email:<b class="text-primary" id="modal_mail"><?= $alumno->email?></b></td>
			</tr>
			<tr>
				<td>Facebook: <b class="text-primary" id="modal_tel"><?= $alumno->facebook?></b></td>
			</tr>			
			<tr>
				<td colspan="2">Pais: <b class="text-primary" id="modal_pais"><?= $alumno->pais?></b> Estado: <b class="text-primary" id="modal_estado"><?= $alumno->estado?></b> Ciudad: <b class="text-primary" id="modal_ciudad"><?= $alumno->ciudad?></b></td>
			</tr>																														
			<tr>
				<td >Sede: <b class="text-primary" id="modal_sede"><?= $alumno->nombre_sede?></b></td> 
				<td >Grupo: <b class="text-primary" id="modal_grupo"><?= $alumno->academia?></b></td>
			</tr>																												
			<tr>
				<td >Tipo pago: <b class="text-primary" id="modal_paquete"><?= $alumno->tipo_pago?></b></td> 
				<td>Nivel: <b class="text-primary" id="modal_nivel"><?= $alumno->nivel?></b></td> 
			</tr>	
			<tr>
				<td >Hotel Sede: <b class="text-primary" id="modal_paquete"><?= $alumno->hotel_sede?></b></td> 
			</tr>	
			<tr>
				<td >Talla Playera: <b class="text-primary" id="modal_paquete"><?= $alumno->talla_playera?></b></td> 
			</tr>	

		</table>
	</div>
	<div class="col-md-6">													
		<table class="table table-striped">
			<tr>
				<td>Deposito realizado:</td><td><b class="text-primary" id="modal_deposito">$ <?= $alumno->deposito?></b></td>
			</tr>
			<tr>
				<td>Fecha de pago: 
						<p class="input-group input-append datepicker date">
							<input type="text" class="form-control format-datepicker" name="fecha_pago"  id="fecha_pago" value="<?= $alumno->fecha_pago?>" required="" />
							<span class="input-group-btn" style="display: none">
								<button type="button" class="btn btn-default">
									<i class="glyphicon glyphicon-calendar"></i>
								</button> </span>
						</p>
				</td>
				<td>Forma de pago: <b class="text-primary" id="modal_formapago"><?= $alumno->forma_pago?></b></td>
			</tr>
			<tr>
				<td>Numero de folio: </td><td><b class="text-primary" id="modal_folio"><?= $alumno->numero_folio?></b></td>
			</tr>
			<tr>
				<td >Lugar de pago: <b class="text-primary" id="modal_lugarpago"><?= $alumno->lugar_pago?></b></td><td>Ciudad :<b class="text-primary" id="modal_ciudadpago"><?= $alumno->ciudad_pago?></b></td>
			</tr>	
			<tr>
				<td>Archivo de depósito:</td><td><img src="<?= base_url() ?>assets/comprobantes/<?= $alumno->file_comprobante ?>" height="100px"><a class="btn btn-primary margin-left-20" href="<?= base_url() ?>assets/comprobantes/<?= $alumno->file_comprobante ?>" target="_blank"> Ampliar <i class="fa fa-search"></i></a></td>
			</tr>
			<tr>
				<td>Observaciones:</td><td><textarea cols="50" rows="6" id="obs_alumno"><?= $alumno->observaciones?></textarea></td>
			</tr>													
		</table>
		<input type="hidden" value="<?= $alumno->token_qr?>" id="token_alumno">
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Código de acceso</label>
			<img src="<?= base_url() ?>assets/qr/<?= $alumno->token_qr ?>.png" width="100px" class="margin-left-20">
			<a class="btn btn-primary margin-left-20" href="<?= base_url()?>inicio/comprobante/<?= $alumno->token_qr?>" target="_blank">Reimprimir comprobante <i class="fa fa-file-o"></i></a>
			<a class="btn btn-primary margin-left-20" href="<?= base_url()?>inicio/comprobante_mail/<?= $alumno->token_qr?>" target="_blank">Re-enviar email <i class="fa fa-envelope"></i></a>

		</div>

	</div>

	<div class="col-md-6">
		<label>Status de Asistencia: </label> <span class="text-primary"><? echo ($alumno->status_asistencia==1)?"Asistió":"No asistió";?></span> <br>
			<a class="btn btn-primary" href="<?= base_url()?>check-in/<?= $alumno->token_qr?>" target="_blank">Marcar como asistencia</a>
		 <label>Constancia a:</label><input type="text" value="<?= $alumno->email?>"> <button class="btn btn-success"><i class="fa fa-envelope"></i> Enviar </button> 
		 <a href="<?= base_url()?>JazzAdmin/constancia/<?= $alumno->token_qr?>" target="_blank" class="btn btn-success"><i class="fa fa-eye"></i> ver </a>

	</div>
</div>

<script type="text/javascript">

        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        $('.format-datepicker').datepicker({
            format:  "yyyy-m-d",
            todayHighlight: true
        });

</script>
