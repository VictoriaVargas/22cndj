<?php
class User_model extends CI_Model {
	function __construct(){
	}

	public function loginUserModel() {
		try {
			$userData 			=	$this->input->post("user",TRUE);
			$userPassword 		=	$this->input->post("password",TRUE);

			$sql='SELECT * from usuarios where usuario=?  and password=?';
			$user=$this->db->query($sql,array($userData, $userPassword));

			if($user->num_rows()>0){
				$data= array(
					'id_user' => $user->row()->id_usuario,
					'user' => $user->row()->usuario,
					'ultimo_inicio' => $user->row()->ultimo_inicio,
				);			
				$this->session->set_userdata("DJazz_it18",$data);
			}			
		} catch (Exception $e) {
			echo "error";
		}
	}


	public function logoutUserModel(){
		$this->session->unset_userdata("DJazz_it18");
		return true;
	}	

}