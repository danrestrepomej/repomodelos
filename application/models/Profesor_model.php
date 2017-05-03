<?php

class Profesor_model extends CI_Model {

	private $id = ""; 
	private $cedula = ""; 
	private $nombre = "";

	function __construct(){
		parent::__construct();
	}

	public function setData($data) { 
		$this->id = $data['id']; 
		$this->cedula = $data['cedula']; 
		$this->nombre = $data['nombre']; 
	}

	public function getId() { 
		return $this->id; 
	}

	public function setId($id) { 
		$this->id = $id; 
	}

	public function getCedula() { 
		return $this->cedula; 
	}

	public function setCedula($cedula) { 
		$this->cedula = $cedula; 
	}

	public function getNombre() { 
		return $this->nombre; 
	}

	public function setNombre($nombre) { 
		$this->nombre = $nombre; 
	}


	function getProfesores() { 
		//Produce:
		//		SELECT * FROM profesores
		//		ORDER BY cedula

		$this->load->database();
		$this->db->order_by('cedula'); 
		$query = $this->db->get('profesores'); 
		return $query->custom_result_object('Profesor_model'); 
	} 

	public function insert() { 
		// Produce: 
		//		INSERT INTO profesores (nombre, cedula) 
		//		VALUES ('{$this->nombre}', '{$this->cedula}')
		$this->load->database();
		$this->db->insert('profesores', array('nombre'=>$this->nombre, 'cedula'=>$this->cedula));
		$this->db->close();
	}

	public function update() { 
		// Produce:
		//
		//      UPDATE profesores
		//      SET cedula = '{$this->cedula}', nombre = '{$this->nombre}'
		//      WHERE id = $this->id

		$this->load->database();
		$data = array(
			'cedula' => $this->cedula,
			'nombre' => $this->nombre
			);
		

		$this->db->where('id', $this->id);
		$this->db->update('profesores', $data);
		$this->db->close();
	}

	public function delete() { 
		// Produce:
		// 		DELETE FROM profesores
		// 		WHERE id = $this->id

		$this->load->database();

		
		$this->db->where('id', $this->id);
		$this->db->delete('profesores');
		$this->db->close();
	}
}