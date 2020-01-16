<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Alumnos_model');
        $this->load->model('Sedes_model');

        $this->load->helper('url');
    }	

	// Pantalla de seleccion Grupal o Individual

	public function index(){
	 	$this->load->view('select');
	 }

	public function individual(){
		$data["sedes"]= $this->Sedes_model->getSedes();
		$data["Total_nivel1"] = $this->Sedes_model->getTotalNivel1();
		$this->load->view('inicio',$data);
	}

	public function grupal(){
		$data["sedes"]= $this->Sedes_model->getSedes();		
		$data["id_tmp"] = $this->Alumnos_model->geTmpId();
		$data["Total_nivel1"] = $this->Sedes_model->getTotalNivel1();
		$this->load->view('grupal',$data);
	}

	public function confirmacion($token){
		$data['alumno'] = $this->Alumnos_model->getAlumnobyToken($token);
		$data['token'] = $token;		
		$this->load->view('confirmacion',$data);
	}

	public function confirmacionGrupal($token){
		$director = $this->Alumnos_model->getDirectorbyToken($token);
		$data['director']= $director;
		$data['token'] = $token;	
		if ($director){
			$data['alumnos']= $this->Alumnos_model->getAlumnosbyIdDirector($director->id_director);			
		}
		$this->load->view('confirmacionGrupal',$data);
	}


	public function comprobante($token){
		ob_start();
        $this->load->helper('generacionpdf');          
        $data["token"] = $token;
		$data['alumno'] = $this->Alumnos_model->getAlumnobyToken($token);
		if ($data["alumno"]!=""){
			$html = $this->load->view('comprobante_html', $data, true);    
	        $filename = "comprobante_".$token.".pdf"; 
	        pdf_create($html, $filename);
		}
		else{
			echo "<center><h1 style='color:#a82737; font-family:Arial; margin-top:100px'> Usuario no encontrado</h1></center>";
		}
	}

	public function comprobante_mail($token){
		ob_start();
        $this->load->helper('generacionpdf');          
        $data["token"] = $token;
		$alumno = $this->Alumnos_model->getAlumnobyToken($token);
		$data['alumno'] = $alumno;
		if ($data["alumno"]!=""){
			// crear pdf
       		$calendario = base_url()."assets/email/".$alumno->id_sede.".jpg";
       		$data["calendario"] = $calendario;

			$html = $this->load->view('comprobante_html', $data, true);    
	        $filename = "comprobante_".$token.".pdf"; 
	        //pdf_create($html, $filename);

	        /// Enviar mail

            $from = "info@danzajazz.com.mx";
            $title_mail = "Confirmación registro Danza Jazz";
			$to = $alumno->email;            
            //$to = 'ivnnez@gmail.com';
            $asunto = "21° Congreso Nacional de Danza ";

        	$body = $this->load->view("email_confirmacion",$data,TRUE);
       		$archivo = base_url()."assets/confirmacion/".$alumno->token_qr.".pdf";

            if ($resp = $this->Alumnos_model->enviarNotificacionCorreoArchivo($from, $title_mail, $to, $asunto, $body, $archivo, $calendario)){
            	echo "<h1>Enviado correctamente </h1>";
            }else{
            	echo "<h1>Error al enviar</h1><br>".$resp;
            }
		}
		else{
			echo "<center><h1 style='color:#a82737; font-family:Arial; margin-top:100px'> Usuario no encontrado</h1></center>";
		}
	

	}

	public function comprobanteDirector($token){
		ob_start();
        $this->load->helper('generacionpdf');          
        $data["token"] = $token;
		$director = $this->Alumnos_model->getDirectorbyToken($token);
		$data['director'] = $director;
		if ($data["director"]!=""){
			$data['alumnos']= $this->Alumnos_model->getAlumnosbyIdDirector($director->id_director);
			$html = $this->load->view('comprobante_director_html', $data, true);    
	        $filename = "comprobante_".$token.".pdf"; 
	        pdf_create($html, $filename);
		}
		else{
			echo "<center><h1 style='color:#a82737; font-family:Arial; margin-top:100px'> Usuario no encontrado</h1></center>";
		}
	}

	public function saveDataIndividual() {
        $resp = $this->Alumnos_model->saveProfileAlumno();

        if($this->input->post("participa_concurso",TRUE)=="true"){ // Alumno participa en Concurso
			$id_alumno = $this->Alumnos_model->getAlumnobyToken($resp);

			$id_director = $this->Alumnos_model->saveDirectorConcursobyAlumno($id_alumno->id_alumno);
        	$this->Alumnos_model->saveAlumnoConcurso($id_director, $id_alumno->id_alumno);
        }


		//echo ">>".$this->input->post("participa_ensamble",TRUE);


        if($this->input->post("participa_ensamble",TRUE)=="true"){
        	if ($this->input->post("participaras_ensamble",TRUE)=="si"){
        		$this->Alumnos_model->saveEnsamblebyAlumno($id_alumno->id_alumno);
        	}
        }

        if ($resp!="error"){
        	$token = $resp;     	
        	$url = base_url()."check-in/".$token;

	        require_once(APPPATH . "libraries/phpqrcode/qrlib.php");
		    $PNG_TEMP_DIR = FCPATH.'assets'.DIRECTORY_SEPARATOR.'qr'.DIRECTORY_SEPARATOR;
	    	$PNG_WEB_DIR = 'assets/qr/';

			$filename = $PNG_TEMP_DIR.$token.'.png';
        	QRcode::png($url, $filename, 'M', 5, 2);   // url, nombre de archivo, calidad, tamaño , 2 ??


			// Envio Email

			$alumno = $this->Alumnos_model->getAlumnobyToken($resp);
			$data['alumno'] = $alumno;

        	$from = "info@danzajazz.com.mx";
            $title_mail = "Confirmación registro Danza Jazz";
			$to = $alumno->email;            
            //$to = 'ivnnez@gmail.com';
            $asunto = "21° Congreso Nacional de Danza ";

       		$calendario = base_url()."assets/email/calendario.jpg";
       		$data["calendario"] = $calendario;            

        	$body = $this->load->view("email_confirmacion",$data,TRUE);
       		$archivo = base_url()."assets/confirmacion/".$alumno->token_qr.".pdf";


            if ($resp_mail = $this->Alumnos_model->enviarNotificacionCorreoArchivo($from, $title_mail, $to, $asunto, $body, $archivo, $calendario)){
            	$r = "<h1>Enviado correctamente </h1>";
            }else{
            	$r = "<h1>Error al enviar</h1><br>".$resp_mail;
            }

        }

        echo $resp;
	}


	public function saveDataGrupal() {
        $resp = $this->Alumnos_model->saveProfileGrupal();
        if ($resp!="error"){        	
        	$token = $resp;
        	$url = base_url()."check-in/".$token;	      
        }

		// Envio Email
			$director = $this->Alumnos_model->getDirectorbyToken($token);
			$data['director'] = $director;
			$data['alumnos']= $this->Alumnos_model->getAlumnosbyIdDirector($director->id_director);

        	$from = "info@danzajazz.com.mx";
            $title_mail = "Confirmación registro Danza Jazz";
			$to = $director->email;            
            //$to = 'ivnnez@gmail.com';
            $asunto = "21° Congreso Nacional de Danza ";

       		$calendario = base_url()."assets/email/calendario.jpg";
       		$data["calendario"] = $calendario;            

        	$body = $this->load->view("email_confirmacion_director",$data,TRUE);
       		$archivo = base_url()."assets/confirmacion/".$director->token_qr.".pdf";


            if ($resp_mail = $this->Alumnos_model->enviarNotificacionCorreoArchivo($from, $title_mail, $to, $asunto, $body, $archivo, $calendario)){
            	$r = "<h1>Enviado correctamente </h1>";
            }else{
            	$r = "<h1>Error al enviar</h1><br>".$resp_mail;
            }

        echo $resp;
	}

	public function saveDataAlTmp() {
        $resp = $this->Alumnos_model->saveProfileAlumnoTmp();
        if ($resp!="error"){        	
        	$token = $resp["token_qr"];     	
        	$url = base_url()."check-in/".$token;

	        require_once(APPPATH . "libraries/phpqrcode/qrlib.php");
		    $PNG_TEMP_DIR = FCPATH.'assets'.DIRECTORY_SEPARATOR.'qr'.DIRECTORY_SEPARATOR;
	    	$PNG_WEB_DIR = 'assets/qr/';

			$filename = $PNG_TEMP_DIR.$token.'.png';
        	QRcode::png($url, $filename, 'M', 5, 2);   // url, nombre de archivo, calidad, tamaño , 2 ??
        }

     	echo json_encode($resp);	        
	}

	public function saveDataEncuentro(){
        $resp = $this->Alumnos_model->saveEncuento();
		echo json_encode($resp);	        
	}


	public function saveDataConcurso(){
        $resp = $this->Alumnos_model->saveConcurso();
		echo json_encode($resp);	        
	}


	public function saveComprobante(){
		$whitelist = array('jpg', 'jpeg', 'png', 'gif','JPG', 'JPEG', 'PNG', 'GIF');
		$name      = null;
		$error     = 'No se pudo subir.';
		$aleatorio = mt_rand();
		if (isset($_FILES)) {
			if (isset($_FILES['comprobante'])) {
				$tmp_name = $_FILES['comprobante']['tmp_name'];
				$name     = basename($_FILES['comprobante']['name']);
				$error    = $_FILES['comprobante']['error'];
				
				if ($error === UPLOAD_ERR_OK) {
					$extension = pathinfo($name, PATHINFO_EXTENSION);

					if (!in_array($extension, $whitelist)) {
						$error = 'El formato no es soportado.';
					} else {
						move_uploaded_file($tmp_name, $_SERVER["DOCUMENT_ROOT"]."/22cndj/assets/comprobantes/".$aleatorio.".".$extension);
					}
				}
			}
		}

		echo json_encode(array(
			'name'  => $aleatorio.".".$extension,
			'error' => $error,
		));
		die();
	}

	public function interpretesTmp($idTmp){
		$interpretesTmp = $this->Alumnos_model->getAlumnosTmpbyTokenTmp($idTmp);
		if ($interpretesTmp){
			$data["interpretes"] = $interpretesTmp;
        	$body = $this->load->view("interpretes_tmp",$data);

		}
		else{
			echo "<h1 class='text-primary'> Aun no se han registrado alumnos</h1>";
		}
	}

}
