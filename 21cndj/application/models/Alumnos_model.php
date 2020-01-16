<?php

class Alumnos_model extends CI_Model {


	/*
	Guardar o actualizar Perfil completo, despues de resgistrarse
	*/
	public function saveProfileAlumno(){
		try{

			$nombre = $this->input->post("nombreAlumno",TRUE);
			$paterno = $this->input->post("paterno",TRUE);
			$materno = $this->input->post("materno",TRUE);
			$fecha_nac=$this->input->post("agnoNacimiento",TRUE) ."/".$this->input->post("mesNacimiento",TRUE)."/".$this->input->post("diaNacimiento",TRUE);
			$telefono = $this->input->post("telefono_alumno",TRUE);
			$email = $this->input->post("email_alumno",TRUE);
			$facebook = $this->input->post("facebook_alumno",TRUE);
			$pais = $this->input->post("pais_alumno",TRUE);
			$estado = $this->input->post("estado_alumno",TRUE);
			$ciudad = $this->input->post("ciudad_alumno",TRUE);
			$sede = $this->input->post("sede",TRUE);
			$academia = $this->input->post("academia",TRUE);			
			$como_contactar = $this->input->post("como_contactar",TRUE);	

			$paquete=$this->input->post("paquete",TRUE);
			$nivel=$this->input->post("tipo_alumno",TRUE);			

			$importe=$this->input->post("importe",TRUE);
			$fecha_pago=$this->input->post("fecha_pago",TRUE);
			$forma_pago=$this->input->post("forma_pago",TRUE);
			$folio_pago=$this->input->post("folio_pago",TRUE);
			$lugar_pago=$this->input->post("lugar_pago",TRUE);			
			$ciudad_pago=$this->input->post("ciudad_pago",TRUE);
			$file_comprobante=$this->input->post("file_upload_alumno",TRUE);

			$talla_playera=$this->input->post("talla_playera",TRUE);			
			$tipo_pago=$this->input->post("tipo_pago",TRUE);
			$hotel_sede=$this->input->post("hotel_sede",TRUE);

			$token = $this->RandomToken();
			$data = array(
				'nombre'	=>	$nombre,
				'paterno'	=>	$paterno,
				'materno'	=>	$materno,
				'fecha_nac'	=>	$fecha_nac,
				'telefono'	=>	$telefono,
				'email'		=>	$email,
				'facebook'	=>	$facebook,
				'pais'		=>	$pais,
				'estado'	=>	$estado,
				'ciudad'	=>	$ciudad,
				'id_sede'	=>	$sede,
				'paquete'	=>	$paquete,
				'nivel'	=>	$nivel,								
				'academia'	=>	$academia,	
				'como_contactar'	=>	$como_contactar,
				'deposito'	=>	$importe,
				'fecha_pago'=>	$fecha_pago,
				'forma_pago'=>	$forma_pago,
				'numero_folio'=>	$folio_pago,
				'lugar_pago'=>	$lugar_pago,
				'ciudad_pago'=>	$ciudad_pago,
				'file_comprobante'=>$file_comprobante,				
				'token_qr'=>	$token,

				'talla_playera'=>	$talla_playera,
				'tipo_pago'=>	$tipo_pago,
				'hotel_sede'=>	$hotel_sede,								

				'fecha_registro'=>	date("Y-m-d H:i:s"),					
				'status_asistencia'=>0			
			 );
			
			if($this->db->insert('alumnos',$data)){
				return $token;
			}else{					
					return "error ";
			}

		} catch (Exception $e) {
			var_dump($e);
		}	
	}


	public function saveEnsamblebyAlumno($id_alumno){

		try{

			$sede = $this->input->post("sede",TRUE);
			$id_tmp = "byAlumno:".$id_alumno;
			$academia = $this->input->post("academia",TRUE);

			$nombre1 = $this->input->post("ensamble_nombre1",TRUE);
			$fecha1 = $this->input->post("ensamble_agno1",TRUE)."/".$this->input->post("ensamble_mes1",TRUE)."/".$this->input->post("ensamble_dia1",TRUE);
			$mail1 = $this->input->post("ensamble_email1",TRUE);


			$nombre2 = $this->input->post("ensamble_nombre2",TRUE);
			$fecha2 = $this->input->post("ensamble_agno2",TRUE)."/".$this->input->post("ensamble_mes2",TRUE)."/".$this->input->post("ensamble_dia2",TRUE);
			$mail2 = $this->input->post("ensamble_email2",TRUE);			

			$data = array(

				'id_sede'	=>	$sede,
				'id_tmp'	=>	$id_tmp,
				'academia'	=>	$academia,

				'nombre1'	=>	$nombre1,
				'fecha1'	=>	$fecha1,
				'email1'	=>	$mail1,

				'nombre2'	=>	$nombre2,
				'fecha2'	=>	$fecha2,
				'email2'	=>	$mail2,

				'fecha_registro'=>	date("Y-m-d H:i:s"),					
				'status'=>0			
			 );
			
			if($this->db->insert('ensamble',$data)){
				return true;
			}else{					
					return "error ";
			}

		} catch (Exception $e) {
			var_dump($e);
		}			

	}


	public function saveProfileGrupal(){
		try{

			$id_tmp = $this->input->post("id_tmp",TRUE);	

			$nombre = $this->input->post("nombre_director",TRUE);	
			$telefono = $this->input->post("telefono_director",TRUE);
			$email = $this->input->post("email_director",TRUE);
			$facebook = $this->input->post("facebook_director",TRUE);			
			$sede = $this->input->post("sede",TRUE);
			$academia = $this->input->post("academia",TRUE);			
			$como_contactar = $this->input->post("como_contactar",TRUE);	

			$token = $this->RandomToken();
			$data = array(
				'nombre'	=>	$nombre,
				'telefono'	=>	$telefono,
				'email'		=>	$email,
				'facebook'	=>	$facebook,				
				'id_sede'	=>	$sede,
				'academia'	=>	$academia,	
				'como_contactar'	=>	$como_contactar,
				'token_qr'=>	$token,
				'id_tmp'=> $id_tmp,
				'fecha_registro'=>	date("Y-m-d H:i:s"),					
				'status_asistencia'=>0			
			 );
			
			if($this->db->insert('directores',$data)){
				$id_director = $this->db->insert_id();				
				$error = $this ->moveAlumnosTmp_Alumnos($id_director,$id_tmp,$academia);
				// actualiza id director en encuentro
			    
				if ($error!="error"){
					return $token;
				}
			}else{					
					return "error ";
			}

		} catch (Exception $e) {
			var_dump($e);
		}
	}


	public function saveEnsambleGrupal($id_director, $id_tmp){
		$sede = $this->input->post("sede",TRUE);
		$academia = $this->input->post("academia",TRUE);
		$nombre1 = $this->input->post("ensamble1_nombre",TRUE);
		$fecha1 = $this->input->post("ensamble1_agno",TRUE)."/".$this->input->post("ensamble1_mes",TRUE)."/".$this->input->post("ensamble1_dia",TRUE);
		$mail1 = $this->input->post("ensamble1_mail",TRUE);

		$nombre2 = $this->input->post("ensamble2_nombre",TRUE);
		$fecha2 = $this->input->post("ensamble2_agno",TRUE)."/".$this->input->post("ensamble2_mes",TRUE)."/".$this->input->post("ensamble2_dia",TRUE);
		$mail2 = $this->input->post("ensamble2_mail",TRUE);

		$data = array(
			'id_sede'	=>	$sede,
			'id_tmp'	=>	$id_tmp,
			'academia'	=>	$academia,
			'nombre1'	=>	$nombre1,
			'fecha1'	=>	$fecha1,
			'email1'	=>	$mail1,
			'nombre2'	=>	$nombre2,
			'fecha2'	=>	$fecha2,
			'email2'	=>	$mail2,
			'fecha_registro' =>	date("Y-m-d H:i:s"),
			'status'=>0	
		 );
		$this->db->insert('ensamble',$data);
	}


	public function EditDatosConstanciaModel(){

		$token = $this->input->post("token_alumno",TRUE);
		$data = array(
			'nombre' => $this->input->post("nombre",TRUE),
			'paterno' => $this->input->post("paterno",TRUE),
			'materno' => $this->input->post("materno",TRUE),
			'email' => $this->input->post("mail",TRUE),
			'participo_como' => $this->input->post("rol",TRUE)			
		);		
		$this->db->where('token_qr',$token);
		$this->db->update('alumnos',$data);
		return true;
	}

	public function EditDatosDuetoModel(){

		$token = $this->input->post("token_alumno",TRUE);
		$data = array(
			'nombre' => $this->input->post("nombre",TRUE),
			'paterno' => $this->input->post("paterno",TRUE),
			'materno' => $this->input->post("materno",TRUE),
			'email' => $this->input->post("mail",TRUE),
			'participo_como' => $this->input->post("rol",TRUE),
			'lugar_dueto' => $this->input->post("lugar",TRUE),
			'categoria_dueto' => $this->input->post("categoria",TRUE),
		);		
		$this->db->where('token_qr',$token);
		$this->db->update('alumnos',$data);
		return true;
	}

	public function EditDatosConcursoModel(){

		$token = $this->input->post("token_alumno",TRUE);
		$data = array(
			'nombre' => $this->input->post("nombre",TRUE),
			'paterno' => $this->input->post("paterno",TRUE),
			'materno' => $this->input->post("materno",TRUE),
			'email' => $this->input->post("mail",TRUE),
			'participo_como' => $this->input->post("rol",TRUE),
			'lugar_concurso' => $this->input->post("lugar",TRUE),
			'categoria_concurso' => $this->input->post("categoria",TRUE),
		);		
		$this->db->where('token_qr',$token);
		$this->db->update('alumnos',$data);
		return true;
	}	

	public function updateIdDirectorConcurso($id_director,$id_tmp){
		$this->db->where('id_tmp',$id_tmp);
		$this->db->update('concurso',array('id_director' => $id_director));
	}

	public function getTotalAlumnos($id_sede){
		$sql = 'SELECT count(id_alumno) as total from alumnos where id_sede =? limit 1';	
		$query = $this->db->query($sql,array($id_sede));	
		if($query->num_rows()>0){		
			return $query->row()->total;
		}
		else{
			return "0";
		}
	}


	public function getTotalAlumnosConcurso($id_sede){
		$sql = 'SELECT count(id_concurso) as total from concurso join sedes on concurso.id_sede = sedes.id_sede join directores on concurso.id_director= directores.id_director where concurso.id_sede=?';	
		$query = $this->db->query($sql,array($id_sede));	
		if($query->num_rows()>0){		
			return $query->row()->total;
		}
		else{
			return "0";
		}
	}

	public function getTotalAlumnosEncuentro($id_sede){
		$sql = 'SELECT count(id_encuentro) as total from encuentro join sedes on encuentro.id_sede = sedes.id_sede join directores on directores.id_tmp = encuentro.id_tmp where encuentro.id_sede=?';	
		$query = $this->db->query($sql,array($id_sede));	
		if($query->num_rows()>0){		
			return $query->row()->total;
		}
		else{
			return "0";
		}
	}	

	public function getTotalAlumnosEnsamble($id_sede){
		$sql = 'SELECT count(id_ensamble) as total from ensamble where id_sede =? limit 1';	
		$query = $this->db->query($sql,array($id_sede));	
		if($query->num_rows()>0){		
			return $query->row()->total;
		}
		else{
			return "0";
		}
	}	


	public function getTotalDirectores($id_sede){
		$sql = 'SELECT count(id_director) as total from directores where id_sede =? limit 1';	
		$query = $this->db->query($sql,array($id_sede));	
		if($query->num_rows()>0){		
			return $query->row()->total;
		}
		else{
			return "0";
		}
	}		

	public function getAlumnobyToken($token){
		$sql = 'SELECT * from alumnos join sedes on alumnos.id_sede=sedes.id_sede where token_qr =? limit 1';	
		$query = $this->db->query($sql,array($token));	
		if($query->num_rows()>0){		
			return $query->row();
		}
		else{
			return false;
		}
	}


	public function getDirectorbyToken($token){
		$sql = 'SELECT * from directores join sedes on directores.id_sede=sedes.id_sede where token_qr =? limit 1';	
		$query = $this->db->query($sql,array($token));	
		if($query->num_rows()>0){		
			return $query->row();
		}
		else{
			return false;
		}
	}


	public function getTotalConstancias($id_sede){
		$sql = 'SELECT count(*) as total from constancias where id_sede =? limit 1';	
		$query = $this->db->query($sql,array($id_sede));	
		return $query->row()->total;		
	}

	public function getDataConstancia($id_constancia){
		$sql = 'SELECT * from constancias where id_constancia =? limit 1';	
		$query = $this->db->query($sql,array($id_constancia));	
		if($query->num_rows()>0){		
			return $query->row();
		}
		else{
			return false;
		}		

	}


	public function getAlumnosbyIdDirector($id_director){
		$sql = 'SELECT * from alumnos  where id_director =?';	
		$query = $this->db->query($sql,array($id_director));	
		if($query->num_rows()>0){		
			return $query;
		}
		else{
			return false;
		}		

	}


	
	public function saveDirectorConcursobyAlumno($id_alumno){
		$id_sede = $this->input->post("sede",TRUE);
		$id_tmp = "byAlumno:".$id_alumno; 

		$nombre = $this->input->post("nombre_director",TRUE);
		$telefono = $this->input->post("tel_director",TRUE);
		$email = $this->input->post("email_director",TRUE);
		$facebook = "";	
		$sede = $this->input->post("sede",TRUE);
		$academia = $this->input->post("academia",TRUE);

		$como_contactar = $this->input->post("como_contactar",TRUE);
		$token = $this->RandomToken();

		$data = array(
			'nombre'	=>	$nombre,
			'telefono'	=>	$telefono,
			'email'		=>	$email,
			'facebook'	=>	$facebook,
			'id_sede'	=>	$sede,
			'id_tmp'	=>	$id_tmp,
			'academia'	=>	$academia,
			'como_contactar'	=>	$como_contactar,
			'token_qr'=>	$token,
			'fecha_registro'=>	date("Y-m-d H:i:s"),
			'status_asistencia'=>0
		 );

		if($this->db->insert('directores',$data)) {
			$id_director =  $this->db->insert_id();
			return $id_director;
		}
		else {
			return "error ";
		}
	}


	public function saveAlumnoConcurso($id_director,$id_alumno) {
		try{
			$id_tmp = "byAlumno:".$id_alumno;
			$id_sede = $this->input->post("sede",TRUE);

			$categoria = $this->input->post("categoria_concurso",TRUE);
			$nombre_coreografia = $this->input->post("coreografia_concurso",TRUE);		
			$coreografo = $this->input->post("coreografo_concurso",TRUE);
			$musica = $this->input->post("musica_concurso",TRUE);

			$nombre1 = $this->input->post("nombre1",TRUE);
			$fecha1 = $this->input->post("agno1",TRUE)."/".$this->input->post("mes1",TRUE)."/".$this->input->post("dia1",TRUE);
			$mail1 = $this->input->post("email1",TRUE);


			$nombre2 = $this->input->post("nombre2",TRUE);
			$fecha2 = $this->input->post("agno2",TRUE)."/".$this->input->post("mes2",TRUE)."/".$this->input->post("dia2",TRUE);
			$mail2 = $this->input->post("email2",TRUE);

			$data = array(
				'id_sede'	=>	$id_sede,
				'id_director'=> $id_director,
				'id_tmp'	=>	$id_tmp,

				'categoria'	=>	$categoria,
				'nombre_coreografia'	=>	$nombre_coreografia,
				'coreografo'	=>	$coreografo,
				'musica'	=>	$musica,

				'nombre1'	=>	$nombre1,
				'fecha1'	=>	$fecha1,
				'mail1'	=>	$mail1,

				'nombre2'	=>	$nombre2,
				'fecha2'	=>	$fecha2,
				'mail2'	=>	$mail2,				

				'fecha_registro'=>	date("Y-m-d H:i:s"),
				'status'=>0			
			 );
			
			if($this->db->insert('concurso',$data)){
				return $data;
			}else{					
					return "error ";
			}
		} catch (Exception $e) {
			var_dump($e);
		}
	}

	//// Grupos

	public function saveProfileAlumnoTmp(){
		try{

			$id_tmp = $this->input->post("id_tmp",TRUE);
			$sede = $this->input->post("id_sede",TRUE);

			$nombre = $this->input->post("alumno_tmp_al",TRUE);
			$paterno = $this->input->post("paterno_tmp_al",TRUE);
			$materno = $this->input->post("materno_tmp_al",TRUE);
			$fecha_nac=$this->input->post("agnoNacimiento_tmp_al",TRUE) ."/".$this->input->post("mesNacimiento_tmp_al",TRUE)."/".$this->input->post("diaNacimiento_tmp_al",TRUE);
			$telefono = $this->input->post("telefono_tmp_al",TRUE);
			$email = $this->input->post("email_tmp_al",TRUE);
			$facebook = $this->input->post("facebook_tmp_al",TRUE);
			$pais = $this->input->post("pais_tmp_al",TRUE);
			$estado = $this->input->post("estado_tmp_al",TRUE);
			$ciudad = $this->input->post("ciudad_tmp_al",TRUE);

			$paquete=$this->input->post("paquete_tmp_al",TRUE);
			$nivel=$this->input->post("tipo_alumno_tmp_al",TRUE);			

			$importe=$this->input->post("importe_tmp_al",TRUE);
			$fecha_pago=$this->input->post("fecha_pago_tmp_al",TRUE);
			$forma_pago=$this->input->post("forma_pago_tmp_al",TRUE);

			$tipo_pago=$this->input->post("tipo_pago_tmp_al",TRUE);
			$hotel_sede=$this->input->post("hotel_sede_al_tmp",TRUE);
			$talla_playera=$this->input->post("talla_playera_al_tmp",TRUE);


			$folio_pago=$this->input->post("folio_pago_tmp_al",TRUE);
			$lugar_pago=$this->input->post("lugar_pago_tmp_al",TRUE);			
			$ciudad_pago=$this->input->post("ciudad_pago_tmp_al",TRUE);
			$file_comprobante=$this->input->post("file_upload_alumno_tmp_al",TRUE);

			$token = $this->RandomToken();
			$data = array(
				'id_tmp'	=>	$id_tmp,
				'nombre'	=>	$nombre,
				'paterno'	=>	$paterno,
				'materno'	=>	$materno,
				'fecha_nac'	=>	$fecha_nac,
				'telefono'	=>	$telefono,
				'email'		=>	$email,
				'facebook'	=>	$facebook,
				'pais'		=>	$pais,
				'estado'	=>	$estado,
				'ciudad'	=>	$ciudad,
				'id_sede'	=>	$sede,
				'paquete'	=>	$paquete,
				'nivel'	=>	$nivel,
				'deposito'	=>	$importe,
				'fecha_pago'=>	$fecha_pago,
				'forma_pago'=>	$forma_pago,
				
				'tipo_pago'=>	$tipo_pago,
				'hotel_sede'=>	$hotel_sede,
				'talla_playera' => $talla_playera,

				'numero_folio'=>	$folio_pago,
				'lugar_pago'=>	$lugar_pago,
				'ciudad_pago'=>	$ciudad_pago,
				'file_comprobante'=>$file_comprobante,
				'token_qr'=>	$token,
				'fecha_registro'=>	date("Y-m-d H:i:s"),
				'status_tmp'=>0			
			 );
			
			if($this->db->insert('alumnos_tmp',$data)){
				return $data;
			}else{					
					return "error ";
			}
		} catch (Exception $e) {
			var_dump($e);
		}	
	}	

	public function saveEncuento() {

		try{
			$id_tmp = $this->input->post("id_tmp",TRUE);
			$id_sede = $this->input->post("id_sede",TRUE);

			$categoria = $this->input->post("categoria_encuentro",TRUE);
			$nombre_coreografia = $this->input->post("coreografia_encuentro",TRUE);
			$coreografo = $this->input->post("coreografo_encuentro",TRUE);
			$musica = $this->input->post("musica_encuentro",TRUE);

			
			$data = array(
				'id_sede'	=>	$id_sede,
				'id_tmp'	=>	$id_tmp,
				'categoria'	=>	$categoria,
				'nombre_coreografia'	=>	$nombre_coreografia,
				'coreografo'	=>	$coreografo,
				'musica'	=>	$musica,
				'fecha_registro'=>	date("Y-m-d H:i:s"),
				'status'=>0			
			 );
			
			if($this->db->insert('encuentro',$data)){				


/*. MODELO ANTERIOR 


				// Agregando interpretes
				$interpretes = $this->input->post("nombreInterprete[]",TRUE);
				$agnos = $this->input->post("agnoInterprete[]",TRUE);
				$meses = $this->input->post("mesInterprete[]",TRUE);
				$dias = $this->input->post("diaInterprete[]",TRUE);
				$mails = $this->input->post("mailInterprete[]",TRUE);

				$elem = count($interpretes);
				// $elem = sizeof($interpretes);
				$nombres_return = " ";
				for ($i=0; $i < $elem; $i++){
					$interprete = $interpretes[$i]; 
					$fecha_int = $agnos[$i]."/".$meses[$i]."/".$dias[$i];
					$mail_int = $mails[$i];
					$this->SaveInterprete($id_tmp, $interprete, $fecha_int, $mail_int); 
					$nombres_return.= " ".$interprete;
				}
				$data += ['interpretes' => $nombres_return];
				return $data;
				
*/

				$interpretes = $this->input->post("al_tmp_check[]",TRUE);
				$elem = count($interpretes);
				$nombres_return = " ";
				$id_encuentro = $this->db->insert_id();
				for ($i=0; $i < $elem; $i++){
					$interprete = null;
					$interprete = $this->getTmpAlumnobyId($interpretes[$i]); 
					$nombre = $interprete->nombre." ".$interprete->paterno." ".$interprete->materno;

					$this->SaveInterprete($id_tmp, $nombre, $interprete->fecha_nac, $interprete->email,$id_encuentro); 
					$nombres_return.= $nombre."<br>";
				}

				$data += ['interpretes' => $nombres_return];
				return $data;

			}else{					
				return "error ";
			}
		} catch (Exception $e) {
			var_dump($e);
		}	
	}


	public function SaveInterprete($id_tmp,$nombre,$fecha,$mail,$id_encuentro){
		$data = array(
			'id_tmp'=>$id_tmp,
			'nombre'=>$nombre,
			'fecha_nacimiento'=>$fecha,
			'email'	=>$mail,
			'status'=> 0,
			'id_encuentro'=> $id_encuentro

		);
		$this->db->insert('alumnos_encuentro',$data);
	}





	public function saveConcurso(){
		try{
			$id_tmp = $this->input->post("id_tmp",TRUE);
			$id_sede = $this->input->post("id_sede",TRUE);

			$categoria = $this->input->post("categoria_concurso",TRUE);

			$nombre_coreografia = $this->input->post("coreografia_concurso",TRUE);
			$coreografo = $this->input->post("coreografo_concurso",TRUE);
			$musica = $this->input->post("musica_concurso",TRUE);

			$nombre1 = $this->input->post("nombre1",TRUE);
			$fecha1 = $this->input->post("agno1",TRUE)."/".$this->input->post("mes1",TRUE)."/".$this->input->post("dia1",TRUE);
			$mail1 = $this->input->post("correo1",TRUE);


			$nombre2 = $this->input->post("nombre2",TRUE);
			$fecha2 = $this->input->post("agno2",TRUE)."/".$this->input->post("mes2",TRUE)."/".$this->input->post("dia2",TRUE);
			$mail2 = $this->input->post("correo",TRUE);

			$data = array(
				'id_sede'	=>	$id_sede,
				'id_tmp'	=>	$id_tmp,

				'categoria'	=>	$categoria,
				'nombre_coreografia'	=>	$nombre_coreografia,
				'coreografo'	=>	$coreografo,
				'musica'	=>	$musica,

				'nombre1'	=>	$nombre1,
				'fecha1'	=>	$fecha1,
				'mail1'	=>	$mail1,

				'nombre2'	=>	$nombre2,
				'fecha2'	=>	$fecha2,
				'mail2'	=>	$mail2,				

				'fecha_registro'=>	date("Y-m-d H:i:s"),
				'status'=>0			
			 );
			
			if($this->db->insert('concurso',$data)){
				return $data;
			}else{					
					return "error ";
			}
		} catch (Exception $e) {
			var_dump($e);
		}
	}


	function moveAlumnosTmp_Alumnos($id_director, $id_tmp,$academia ){
		$sql = 'SELECT * from alumnos_tmp where id_tmp =? ';	
		$result = $this->db->query($sql,array($id_tmp));
		$error="";
		foreach ($result->result() as $al_tmp) {
			$data = array(
				'academia'  => $academia,
				'nombre'	=>	$al_tmp->nombre,
				'paterno'	=>	$al_tmp->paterno,
				'materno'	=>	$al_tmp->materno,
				'fecha_nac'	=>	$al_tmp->fecha_nac,
				'telefono'	=>	$al_tmp->telefono,
				'email'		=>	$al_tmp->email,
				'facebook'	=>	$al_tmp->facebook,
				'pais'		=>	$al_tmp->pais,
				'estado'	=>	$al_tmp->estado,
				'ciudad'	=>	$al_tmp->ciudad,
				'id_sede'	=>	$al_tmp->id_sede,
				'paquete'	=>	$al_tmp->paquete,
				'nivel'	=>	$al_tmp->nivel,								
				'deposito'	=>	$al_tmp->deposito,
				'fecha_pago'=>	$al_tmp->fecha_pago,
				'forma_pago'=>	$al_tmp->forma_pago,
				'numero_folio'=>	$al_tmp->numero_folio,
				'lugar_pago'=>	$al_tmp->lugar_pago,
				'ciudad_pago'=>	$al_tmp->ciudad_pago,
				'file_comprobante'=>$al_tmp->file_comprobante,				
				'token_qr'=>	$al_tmp->token_qr,
				'fecha_registro'=>	$al_tmp->fecha_registro,
				'tipo_pago'=>	$al_tmp->tipo_pago,
				'hotel_sede'=>	$al_tmp->hotel_sede,
				'talla_playera'=>	$al_tmp->talla_playera,																	
				'status_asistencia'=>0,
				'id_director'=>	$id_director,
			 );
			
			if($this->db->insert('alumnos',$data)){
 		    	$this->db->where('id_alumno_tmp',$al_tmp->id_alumno_tmp);
				$this->db->update('alumnos_tmp',array('status_tmp' => 1));
				// Actualiza estatus de los movidos. 
				$error = "success";
			}else{					
				$error= "error ";
			}

		}
		return $error;
	}


	public function enviarConstanciaCorreoArchivo($from, $title_mail, $to, $asunto, $body, $archivo, $bcc,$token_alumno){ 	
		//$to = "ivnnez@gmail.com";

		$this->load->library('email');

		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';

		$this->email->initialize($config);
		$this->email->set_newline("\r\n");		
		$this->email->set_alt_message('Mail enviado del sistema DanzaJazz');

		$this->email->from($from, $title_mail);
		$this->email->to($to);	
		
		if ($bcc){
			$bccs = array ('barbaraluna@hotmail.com','ivn_nez@hotmail.com');
			$this->email->bcc($bccs);
		}
		else{
			$bccs = array ('ivn_nez@hotmail.com');
			$this->email->bcc($bccs);
		}
		
		//$this->email->cc($ccs);	
		$this->email->subject($asunto);			
		$this->email->message($body);
		$this->email->attach($archivo);

		if($this->email->send()){		
			return true;
		}
		else{ 
			return $this->email->print_debugger();
		}	
	} 


	public function enviarNotificacionCorreoArchivo($from, $title_mail, $to, $asunto, $body, $archivo, $calendario){ 		

		$this->load->library('email');

		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';

		$this->email->initialize($config);
		$this->email->set_newline("\r\n");		
		$this->email->set_alt_message('Mail enviado del sistema DanzaJazz');

		$this->email->from($from, $title_mail);
		$this->email->to($to);	

		$bccs = array ('barbaraluna@hotmail.com','ivn_nez@hotmail.com');		
		//$bccs = array ('ivn_nez@hotmail.com');		
		//$this->email->cc($ccs);	
		$this->email->bcc($bccs);	
		$this->email->subject($asunto);			
		$this->email->message($body);
		//$this->email->attach($archivo);
		//$this->email->attach($calendario);

		if($this->email->send()){
			return true;
		}
		else{ 
			return $this->email->print_debugger();
		}	
	} 


	public function updateStatusAsistenciaAlumno($token){

		$sql = 'SELECT status_asistencia from alumnos where token_qr =? ';	
		$result = $this->db->query($sql,array($token));

		$total = $result->row()->status_asistencia +1;

	    $this->db->where('token_qr',$token);
		$this->db->update('alumnos',array('status_asistencia' => $total));
		return $total;
	}

	public function updateStatusAsistenciaAlumnoSwitch($token){

		$sql = 'SELECT status_asistencia from alumnos where token_qr =? ';	
		$result = $this->db->query($sql,array($token));


		if ($result->row()->status_asistencia>0){
			$new=0;
		}
		else{
			$new=1;
		}

	    $this->db->where('token_qr',$token);
		$this->db->update('alumnos',array('status_asistencia' => $new));
	}

	public function updateStatusConstancia($token_alumno){
	    	$this->db->where('token_qr',$token_alumno);
			$this->db->update('alumnos',array('status_constancia' => 1));	
	}

	public function updateStatusDuetos($token_alumno){
	    	$this->db->where('token_qr',$token_alumno);
			$this->db->update('alumnos',array('status_dueto' => 1));	
	}

	public function updateStatusConcurso($token_alumno){
	    	$this->db->where('token_qr',$token_alumno);
			$this->db->update('alumnos',array('status_12_concurso' => 1));	
	}

	public function getTmpAlumnobyId($id_Tmp){
		$sql = 'SELECT * from alumnos_tmp where id_alumno_tmp =? ';	
		$result = $this->db->query($sql,array($id_Tmp));
		return $result->row();		

	}


	public function updateObservaciones(){
		$observaciones = $this->input->post("observaciones",TRUE);
		$f_p = $this->input->post("f_p",TRUE);

		$token_qr = $this->input->post("token_qr",TRUE);		

  		$this->db->where('token_qr',$token_qr);
		$this->db->update('alumnos',array('observaciones' => $observaciones,'fecha_pago'=>$f_p));

	}
	/*
	function insert_alumnos($al_tmp,$id_director){

		$data = array(
				'nombre'	=>	$al_tmp.nombre,
				'paterno'	=>	$al_tmp->paterno,
				'materno'	=>	$al_tmp->materno,
				'fecha_nac'	=>	$al_tmp->fecha_nac,
				'telefono'	=>	$al_tmp->telefono,
				'email'		=>	$al_tmp->email,
				'facebook'	=>	$al_tmp->facebook,
				'pais'		=>	$al_tmp->pais,
				'estado'	=>	$al_tmp->estado,
				'ciudad'	=>	$al_tmp->ciudad,
				'id_sede'	=>	$al_tmp->id_sede,
				'paquete'	=>	$al_tmp->paquete,
				'nivel'	=>	$al_tmp->nivel,								
				'deposito'	=>	$al_tmp->deposito,
				'fecha_pago'=>	$al_tmp->fecha_pago,
				'forma_pago'=>	$al_tmp->forma_pago,
				'numero_folio'=>	$al_tmp->folio_pago,
				'lugar_pago'=>	$al_tmp->lugar_pago,
				'ciudad_pago'=>	$al_tmp->ciudad_pago,
				'file_comprobante'=>$al_tmp->file_comprobante,				
				'token_qr'=>	$al_tmp->token_qr,
				'fecha_registro'=>	$al_tmp->fecha_registro,					
				'status_asistencia'=>0,
				'id_director'=>	$id_director,
			 );
			
			if($this->db->insert('alumnos',$data)){
				// Actualiza estatus de los movidos. 
				return true;
			}else{					
					return "error ";
			}
	}
	*/

	///// Funciones comunes
	function RandomToken() {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randstring = '';
	    for ($i = 0; $i < 10; $i++) {
	        $randstring .= $characters[rand(0, 56)];
	    }
	    return $randstring;
	}

	public function geTmpId(){
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randstring = '';
	    for ($i = 0; $i < 16; $i++) {
	        $randstring .= $characters[rand(0, 56)];

	    }
	    return $randstring;		 
	}

	public function getAlumnosTmpbyTokenTmp($idTmp){
		$sql = 'SELECT * from alumnos_tmp  where id_tmp =?';	
		$query = $this->db->query($sql,array($idTmp));	
		if($query->num_rows()>0){		
			return $query;
		}
		else{
			return "0";
		}
		

	}

}

?>