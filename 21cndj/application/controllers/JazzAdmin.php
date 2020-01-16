<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JazzAdmin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library("session");        
        $this->load->model('Sedes_model');
        $this->load->model('Alumnos_model');
        $this->load->model('User_model');

    }	

	public function index(){
        if($this->session->DJazz_it18['id_user']!=null) {            
            redirect(base_url()."JazzAdmin/Tablero");  // Si existe la sesion se redirige al panel de control
        } 
		$this->load->view('admin/login');
	}

	public function Tablero(){
        if($this->session->DJazz_it18['id_user']==null) {            
            redirect(base_url()."JazzAdmin");  // Si existe la sesion se redirige al panel de control
        }
		$data["sedes"]= $this->Sedes_model->getSedes();		
		$this->load->view('admin/tablero',$data);
	}

	public function sede($id_sede){
        if($this->session->DJazz_it18['id_user']==null) {            
            redirect(base_url()."JazzAdmin");  // Si existe la sesion se redirige al panel de control
        }		
		$data["sede"] = $this->Sedes_model->getSedeData($id_sede);		
		if ($data["sede"]){
			$this->load->view('admin/sede',$data);	
		}
		else{
			echo "<h1>No existe esa sede</h1>";
		}		
	}

	public function alumnos($id_sede){
        if($this->session->DJazz_it18['id_user']==null) {            
            redirect(base_url()."JazzAdmin");  // Si existe la sesion se redirige al panel de control
        }		
		$data["sede"] = $this->Sedes_model->getSedeData($id_sede);				
		$data["alumnos"] = $this->Sedes_model->getAlumnos($id_sede);		
		if ($data["sede"]){
			$this->load->view('admin/alumnos',$data);	
		}
		else{
			echo "<h1>No existe esa sede</h1>";
		}		
	}

	public function DatosConstancia($token){
		$data["sede"] = $this->Sedes_model->getSedeData(1);	
		$data["alumno"]= $this->Alumnos_model->getAlumnobyToken($token);			
		$this->load->view('admin/DataConstancia',$data);		
	}

	public function DatosDueto($token){
		$data["sede"] = $this->Sedes_model->getSedeData(1);	
		$data["alumno"]= $this->Alumnos_model->getAlumnobyToken($token);			
		$this->load->view('admin/DataDueto',$data);		
	}	

	public function DatosConcurso($token){
		$data["sede"] = $this->Sedes_model->getSedeData(1);	
		$data["alumno"]= $this->Alumnos_model->getAlumnobyToken($token);			
		$this->load->view('admin/DataConstanciaConcurso',$data);		
	}		

	public function EditDatosConstancia(){
		$this->Alumnos_model->EditDatosConstanciaModel();
		$token =  $this->input->post("token_alumno",TRUE);
		redirect (base_url("JazzAdmin/DatosConstancia/".$token));
	}

	public function EditDatosDueto(){
		$this->Alumnos_model->EditDatosDuetoModel();
		$token =  $this->input->post("token_alumno",TRUE);
		redirect (base_url("JazzAdmin/DatosDueto/".$token));
	}

	public function EditDatosConcurso(){
		$this->Alumnos_model->EditDatosConcursoModel();
		$token =  $this->input->post("token_alumno",TRUE);
		redirect (base_url("JazzAdmin/DatosConcurso/".$token));
	}		

	public function alumno(){
        if($this->session->DJazz_it18['id_user']==null) {            
            redirect(base_url()."JazzAdmin");  // Si existe la sesion se redirige al panel de control
        }		
		if (!$this->input->post("token",TRUE)){
			echo "<h1>No existe este alumno</h1>";
		}
		else{
			$token = $this->input->post("token",TRUE);
			$data['alumno'] = $this->Alumnos_model->getAlumnobyToken($token);
			echo $data['alumno']->nombre;
			$this->load->view('admin/DataAlumno',$data);	
		}
	}	

	public function encuentro($id_sede){
        if($this->session->DJazz_it18['id_user']==null) {            
            redirect(base_url()."JazzAdmin");  // Si existe la sesion se redirige al panel de control
        }		
		$data["sede"] = $this->Sedes_model->getSedeData($id_sede);				
		$data["encuentros"] = $this->Sedes_model->getEncuentro($id_sede);		
		if ($data["sede"]){
			$this->load->view('admin/encuentro',$data);	
		}
		else{
			echo "<h1>No existe esa sede</h1>";
		}	
	}	


	public function encuentro_detalle(){
		$id_encuentro = $this->input->post("id_encuentro",TRUE);	
		if ($id_encuentro ){	
		$encuentro = $this->Sedes_model->getEncuentroDetalle($id_encuentro);
		$data["encuentro"] = $encuentro;
		$data["interpretes"] = $this->Sedes_model->getEncuentroInterprestes($encuentro->id_encuentro,$encuentro->id_tmp);
	    $this->load->view('admin/DataEncuentro',$data);	
		}
	}

	public function concurso($id_sede){
        if($this->session->DJazz_it18['id_user']==null) {            
            redirect(base_url()."JazzAdmin");  // Si existe la sesion se redirige al panel de control
        }		
		$data["sede"] = $this->Sedes_model->getSedeData($id_sede);				
		$data["alumnos"] = $this->Sedes_model->getConcurso($id_sede);
		if ($data["sede"]){
			$this->load->view('admin/concurso',$data);	
		}
		else{
			echo "<h1>No existe esa sede</h1>";
		}	
	}	

	public function alumno_concurso(){
		$id_concurso = $this->input->post("id_concurso",TRUE);
		$data["alumno"] = $this->Sedes_model->getAlumnoConcuros($id_concurso);
		$this->load->view('admin/DataConcurso',$data);	

	}

	public function ensamble($id_sede){
        if($this->session->DJazz_it18['id_user']==null) {            
            redirect(base_url()."JazzAdmin");  // Si existe la sesion se redirige al panel de control
        }		
		$data["sede"] = $this->Sedes_model->getSedeData($id_sede);				
		$data["alumnos"] = $this->Sedes_model->getEnsamble($id_sede);		
		if ($data["sede"]){
			$this->load->view('admin/ensamble',$data);	
		}
		else{
			echo "<h1>No existe esa sede</h1>";
		}	
	}			

	public function loginUser(){ 
			$userData 			=	$this->input->post("user",TRUE);
			$userPassword 		=	$this->input->post("password",TRUE);


		if (($userData!="") && ($userPassword!="") ){
			$this->User_model->loginUserModel();
		}

		$url=base_url()."JazzAdmin";
		redirect($url);       
    }


    public function logoutUser(){
		$this->User_model->logoutUserModel();
        redirect(base_url()."JazzAdmin");
    }       

    public function saveObservacion(){
    	$this->Alumnos_model->updateObservaciones();
    }


    public function constancia($token){
    	ob_start();
        $this->load->helper('generacionpdf');          
        $data["token"] = $token;
    	$alumno = $this->Alumnos_model->getAlumnobyToken($token);

		$data['alumno'] = $this->Alumnos_model->getAlumnobyToken($token);
		if ($data["alumno"]!=""){
			$html = $this->load->view('constancia_html', $data, true);    
	        $filename = "constancia_".$token.".pdf"; 
	        //echo $html;
	        pdf_create_horizontal($html, $filename);
		}
		else{
			echo "<center><h1 style='color:#a82737; font-family:Arial; margin-top:100px'> Usuario no encontrado</h1></center>";
		}    	
    }


    public function DiplomaDueto($token){
    	ob_start();
        $this->load->helper('generacionpdf');          
        $data["token"] = $token;
    	$alumno = $this->Alumnos_model->getAlumnobyToken($token);

		$data['alumno'] = $this->Alumnos_model->getAlumnobyToken($token);
		if ($data["alumno"]!=""){
			$html = $this->load->view('diploma_dueto_html', $data, true);    
	        $filename = "constancia_".$token.".pdf"; 
	        //echo $html;
	        pdf_create_horizontal($html, $filename);
		}
		else{
			echo "<center><h1 style='color:#a82737; font-family:Arial; margin-top:100px'> Usuario no encontrado</h1></center>";
		}    	
    }


    public function DiplomaConcurso($token){
    	ob_start();
        $this->load->helper('generacionpdf');          
        $data["token"] = $token;
    	$alumno = $this->Alumnos_model->getAlumnobyToken($token);

		$data['alumno'] = $this->Alumnos_model->getAlumnobyToken($token);
		if ($data["alumno"]!=""){
			$html = $this->load->view('diploma_12_concurso_html', $data, true);    
	        $filename = "constancia_".$token.".pdf"; 
	        //echo $html;
	        pdf_create_horizontal($html, $filename);
		}
		else{
			echo "<center><h1 style='color:#a82737; font-family:Arial; margin-top:100px'> Usuario no encontrado</h1></center>";
		}    	
    }


       public function getConstancia($id_constancia){
    	ob_start();
        $this->load->helper('generacionpdf');          
    	$alumno = $this->Alumnos_model->getDataConstancia($id_constancia);

		if ($alumno!=""){
			$data["alumno"]= $alumno;

			if ($alumno->id_sede==7){
				$html = $this->load->view('constancia_admin_tijuana_html', $data, true);    
			}
			else{
				$html = $this->load->view('constancia_admin_html', $data, true);    
			}
	        $filename = "constancia_".$id_constancia.".pdf"; 
	        pdf_create_horizontal($html, $filename);
		}
		else{
			echo "<center><h1 style='color:#a82737; font-family:Arial; margin-top:100px'> Usuario no encontrado</h1></center>";
		}    	
    } 

	public function constancias($id_sede){
        if($this->session->DJazz_it18['id_user']==null) {            
            redirect(base_url()."JazzAdmin");  // Si existe la sesion se redirige al panel de control
        }		
		$data["sede"] = $this->Sedes_model->getSedeData($id_sede);				
		$data["constancias"] = $this->Sedes_model->getConstancias($id_sede);		
		if ($data["sede"]){
			$this->load->view('admin/constancias',$data);	
		}
		else{
			echo "<h1>No existe esa sede</h1>";
		}		
	}    



	public function sendConstancia($token_alumno){
		ob_start();
		$data["alumno"]= $this->Alumnos_model->getAlumnobyToken($token_alumno);			
		$alumno=$data["alumno"];

		$to = $this->input->post("to",TRUE);
        $this->load->helper('generacionpdf');          

			///// :::::: crear pdf
			
			$title_mail = "Constancia 22 Congreso de Danza Jazz";
			$html = $this->load->view('constancia_html', $data, true);

			$filename = $token_alumno.".pdf"; 
        	$path = "assets/constancias/";        
	        pdf_save_horizontal($html, $filename, $path, $stream=TRUE);
	       
	        /// :::::: Enviar mail

            $from = "info@danzajazz.com.mx";
			$to = $alumno->email;            
            //$to = 'ivnnez@gmail.com';
            $asunto = "22° Congreso Nacional de Danza ";
       		$archivo = base_url()."assets/constancias/".$filename;
       		$data["archivo"]= $archivo;

        	echo $body = $this->load->view("email_constancia",$data,TRUE);

        	$archivo_mail = $_SERVER["DOCUMENT_ROOT"]."/assets/constancias/".$filename;
        	$bcc=0 ; // envia copia a ivn_nez@hotmail.com y barbaraluna@hotmail.com
        	
       		if ($resp = $this->Alumnos_model->enviarConstanciaCorreoArchivo($from, $title_mail, $to, $asunto, $body, $archivo_mail,$bcc,$token_alumno)){
            	echo "<center><h1>Enviado correctamente a: ".$to."</h1></center>";
            	$this->Alumnos_model->updateStatusConstancia($token_alumno);
            }else{
            	echo "<h1>Error al enviar</h1><br>".$resp;
            }
	}


	public function sendDiplomaDueto($token_alumno){
		ob_start();
		$data["alumno"]= $this->Alumnos_model->getAlumnobyToken($token_alumno);			
		$alumno=$data["alumno"];

		$to = $this->input->post("to",TRUE);
        $this->load->helper('generacionpdf');          

			///// :::::: crear pdf
			
			$title_mail = "Diploma  22 Congreso de Danza Jazz";
			$html = $this->load->view('diploma_dueto_html', $data, true);

			$filename = $token_alumno.".pdf"; 
        	$path = "assets/diplomas/";        
	        pdf_save_horizontal($html, $filename, $path, $stream=TRUE);
	       
	        /// :::::: Enviar mail

            $from = "info@danzajazz.com.mx";
			$to = $alumno->email;            
            //$to = 'ivnnez@gmail.com';
            $asunto = "22° Congreso Nacional de Danza ";
       		$archivo = base_url()."assets/diplomas/".$filename;
       		$data["archivo"]= $archivo;

        	echo $body = $this->load->view("email_diploma",$data,TRUE);

        	$archivo_mail = $_SERVER["DOCUMENT_ROOT"]."/assets/diplomas/".$filename;
        	$bcc=0 ; // envia copia a ivn_nez@hotmail.com y barbaraluna@hotmail.com
        	
       		if ($resp = $this->Alumnos_model->enviarConstanciaCorreoArchivo($from, $title_mail, $to, $asunto, $body, $archivo_mail,$bcc,$token_alumno)){
            	echo "<center><h1>Enviado correctamente a: ".$to."</h1></center>";
            	$this->Alumnos_model->updateStatusDuetos($token_alumno);
            }else{
            	echo "<h1>Error al enviar</h1><br>".$resp;
            }
	}


	public function sendDiplomaConcurso($token_alumno){
		ob_start();
		$data["alumno"]= $this->Alumnos_model->getAlumnobyToken($token_alumno);			
		$alumno=$data["alumno"];

		$to = $this->input->post("to",TRUE);
        $this->load->helper('generacionpdf');          

			///// :::::: crear pdf
			
			$title_mail = "Diploma  22 Congreso de Danza Jazz";
			$html = $this->load->view('diploma_12_concurso_html', $data, true);

			$filename = $token_alumno.".pdf"; 
        	$path = "assets/12_concurso/";        
	        pdf_save_horizontal($html, $filename, $path, $stream=TRUE);
	       
	        /// :::::: Enviar mail

            $from = "info@danzajazz.com.mx";
			$to = $alumno->email;            
            //$to = 'ivnnez@gmail.com';
            $asunto = "22° Congreso Nacional de Danza ";
       		$archivo = base_url()."assets/12_concurso/".$filename;
       		$data["archivo"]= $archivo;

        	echo $body = $this->load->view("email_diploma",$data,TRUE);

        	$archivo_mail = $_SERVER["DOCUMENT_ROOT"]."/assets/12_concurso/".$filename;
        	$bcc=0 ; // envia copia a ivn_nez@hotmail.com y barbaraluna@hotmail.com
        	
       		if ($resp = $this->Alumnos_model->enviarConstanciaCorreoArchivo($from, $title_mail, $to, $asunto, $body, $archivo_mail,$bcc,$token_alumno)){
            	echo "<center><h1>Enviado correctamente a: ".$to."</h1></center>";
            	$this->Alumnos_model->updateStatusConcurso($token_alumno);
            }else{
            	echo "<h1>Error al enviar</h1><br>".$resp;
            }
	}

       public function getDiploma($id_constancia){
    	ob_start();
        $this->load->helper('generacionpdf');          
    	$alumno = $this->Alumnos_model->getDataConstancia($id_constancia);

		if ($alumno!=""){
			$data["alumno"]= $alumno;

			$html = $this->load->view('diploma_html', $data, true);    
	        $filename = "diploma_".$id_constancia.".pdf"; 
	        pdf_create_horizontal($html, $filename);
		}
		else{
			echo "<center><h1 style='color:#a82737; font-family:Arial; margin-top:100px'> Usuario no encontrado</h1></center>";
		}    	
    } 


}
