<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Asistencia extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->helper('url','file');
        $this->load->model('Alumnos_model');   
        $this->load->library("session");
	}

	public function index(){
		echo "here";
	}

	public function asiste($token){

		$data['alumno'] = $this->Alumnos_model->getAlumnobyToken($token);
		$data['director'] = $this->Alumnos_model->getDirectorbyToken($token);
		
		$data["pronto_pago"] = false;

		switch ($data['alumno']->id_sede) {
			case 1:
				// Sede Jalisco
				$data["fecha_pronto_pago"] = "2019-04-30";
				if ($data["alumno"]->fecha_pago!="0000-00-00"){
					$data["pronto_pago"] = ($data["alumno"]->fecha_pago<= "2019-04-30")? true:false;
				}
				break;
			case 2:
				// Sede Estado de México
				$data["fecha_pronto_pago"] = "2018-10-12";	
				if ($data["alumno"]->fecha_pago!="0000-00-00"){						
					$data["pronto_pago"] = ($data["alumno"]->fecha_pago<= "2018-10-12")? true:false;
				}
				break;
			case 3:
				// Sede Michoacán
				$data["fecha_pronto_pago"] = "2018-10-12";	
				if ($data["alumno"]->fecha_pago!="0000-00-00"){						
					$data["pronto_pago"] = ($data["alumno"]->fecha_pago<= "2018-10-12")? true:false;
				}
				break;
			case 4:
				// Sede Baja California / Mexicali	
				$data["fecha_pronto_pago"] = "2018-10-26";	
				if ($data["alumno"]->fecha_pago!="0000-00-00"){												
					$data["pronto_pago"] = ($data["alumno"]->fecha_pago<= "2018-10-26")? true:false;
				}					
				break;
			case 5:
				// Sede San Luis Potosí	
				$data["fecha_pronto_pago"] = "2018-10-26";			
				if ($data["alumno"]->fecha_pago!="0000-00-00"){										
					$data["pronto_pago"] = ($data["alumno"]->fecha_pago<= "2018-10-26")? true:false;
				}
				break;
			case 6:
				// Sede Veracruz
				$data["fecha_pronto_pago"] = "2018-11-08";	
				if ($data["alumno"]->fecha_pago!="0000-00-00"){												
					$data["pronto_pago"] = ($data["alumno"]->fecha_pago<= "2018-11-08")? true:false;
				}
				break;
			case 7:
				// Sede Baja California/Tijuana	
				$data["fecha_pronto_pago"] = "2018-11-16";			
				if ($data["alumno"]->fecha_pago!="0000-00-00"){										
					$data["pronto_pago"] = ($data["alumno"]->fecha_pago<= "2018-11-16")? true:false;
				}	
				break;
			case 8:
				// Sede Quintana Roo	
				$data["fecha_pronto_pago"] = "2018-11-23";			
				if ($data["alumno"]->fecha_pago!="0000-00-00"){										
					$data["pronto_pago"] = ($data["alumno"]->fecha_pago<= "2018-11-23")? true:false;
				}
				break;
			default:
				$data["fecha_pronto_pago"] = "Es necesario conciliar"; // como no sé que sede es no puedo saber si cumplió con su pronto pago			
				$data["pronto_pago"] = false;
				break;							
		};

        if($this->session->DJazz_it18['id_user']!=null) {         	
			$data["asistencias"] = $this->Alumnos_model->updateStatusAsistenciaAlumno($token);
			$this->load->view('admin/informacion_qr',$data);
			
        }   

		// !if session curioso qr.

		if ($data["alumno"]!="" ){
			$this->load->view('lectura_qr_invitado',$data);
		}
		
		if ($data["director"]!="" ){
			$this->load->view('lectura_qr_invitado_director',$data);
		}

        

		// else admin, asistencia		
	}


	public function asiste_admin_alumno($token, $sede){
        if($this->session->DJazz_it18['id_user']!=null) { 
			$this->Alumnos_model->updateStatusAsistenciaAlumnoSwitch($token);
        } 		
        redirect("/JazzAdmin/alumnos/".$sede);
	}
}