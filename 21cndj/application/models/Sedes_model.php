<?php

class Sedes_model extends CI_Model {

	function getSedes(){
		$sql = 'SELECT nombre_sede,id_sede,fecha from sedes where status =? order by id_sede';	
		return $this->db->query($sql,array(1));	// Status 1 = activo
	}

	function getSedeData($id_sede){
		$sql = 'SELECT nombre_sede,id_sede,fecha from sedes where id_sede=? order by id_sede';	
		$res = $this->db->query($sql,array($id_sede));	// Status 1 = activo
		return $res->row();		
	}


	function getAlumnos($id_sede){
		$sql = 'select * from alumnos join sedes on alumnos.id_sede = sedes.id_sede where alumnos.id_sede=?';
		return $this->db->query($sql,array($id_sede));	// Status 1 = activo
	}

	function getEncuentro($id_sede){
		$sql = 'select * from encuentro join sedes on encuentro.id_sede = sedes.id_sede join directores on directores.id_tmp = encuentro.id_tmp where encuentro.id_sede=?';
		return $this->db->query($sql,array($id_sede));	// Status 1 = activo
	}	

	function getConcurso($id_sede){
		$sql = 'select * from concurso join sedes on concurso.id_sede = sedes.id_sede join directores on concurso.id_director= directores.id_director where concurso.id_sede=?';
		return $this->db->query($sql,array($id_sede));	// Status 1 = activo
	}

	function getEnsamble($id_sede){
		$sql = 'select * from ensamble join sedes on ensamble.id_sede = sedes.id_sede  where ensamble.id_sede=?';
		return $this->db->query($sql,array($id_sede));	// Status 1 = activo
	}

	function getAlumnoConcuros($id_concurso){
		$sql = 'select * from concurso join sedes on concurso.id_sede = sedes.id_sede join directores on concurso.id_director= directores.id_director where concurso.id_concurso=?';
		$res = $this->db->query($sql,array($id_concurso));	// Status 1 = activo		
		return $res->row();
	}

	function getEncuentroDetalle($id_encuentro){
		$sql = 'select * from encuentro join sedes on encuentro.id_sede = sedes.id_sede join directores on directores.id_tmp = encuentro.id_tmp where encuentro.id_encuentro=?';
		$res = $this->db->query($sql,array($id_encuentro));	// Status 1 = activo
		return $res->row();
	}

	function getEncuentroInterprestes($id_encuentro, $id_tmp){
		echo $id_tmp."-";
		echo $id_encuentro."-";
		$sql = 'select * from alumnos_encuentro  where id_encuentro=?';
		$res = $this->db->query($sql,array($id_encuentro));	// Status 1 = activo
		
		if($res->num_rows()>0){		
			return $res;
		}
		else{
			echo $sql = 'select * from alumnos_encuentro  where id_tmp=?';
			$res = $this->db->query($sql,array($id_tmp));	// Status 1 = activo
			if($res->num_rows()>0){		
				return $res;
			}

		}
	}

	function getConstancias($id_sede){
		$sql = 'select 
		constancias.id_constancia,
		constancias.nombre as nombre ,
		constancias.email as email,		
		constancias.lugar  as lugar,
		constancias.como  as como,
		constancias.sede  as sede,
		constancias.del as del,
		constancias.al as al,
		constancias.de as de,
		constancias.maestros  as maestros,
		constancias.organizadores  as organizadores,
		constancias.status  as status,
		constancias.tipo  as tipo
		from constancias join sedes on constancias.id_sede = sedes.id_sede where constancias.id_sede=?';
		return $this->db->query($sql,array($id_sede));	// Status 1 = activo
	}	

	function getTotalNivel1(){
		$sql = 'SELECT count(*) as total FROM `alumnos` WHERE `nivel`="Nivel 1 (Intermedio-Avanzado) Grupo A"';
		$res = $this->db->query($sql);	// Status 1 = activo				
		return $res->row()->total;		
	}

}
?>