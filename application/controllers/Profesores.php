<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		

		//$this->load->model('Estudiante');

		$this->load->helper('form');
		$this->load->helper('url');
		
		$this->load->view('menu');
		
	}
	

	public function crear()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$data['msg']="";
		

		if($this->input->post()){
			$cedula=$this->input->post('cedula');
			$nombre=$this->input->post('nombre');

			$this->load->model('Profesor_model');
			$this->Profesor_model->setCedula($cedula);
			$this->Profesor_model->setNombre($nombre);
			$this->Profesor_model->insert();
			$data['msg']="Usuario ingresado con exito";
			$this->load->view('crud/crear',$data);

		}
		else{
			$this->load->view('crud/crear',$data);
		}
		
		
	}
	public function leer()
	{
		$this->load->helper('form');
		$this->load->helper('url');

		$this->load->model('Profesor_model');
		$data['profesores']= $this->Profesor_model->getProfesores();
		$this->load->view('crud/listar', $data);
		
	}
	public function actualizar()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$data['msg']="";
		$this->load->model('Profesor_model');
		$data['profesores']= $this->Profesor_model->getProfesores();
		

		if($this->input->post()){
			

			$this->Profesor_model->setId($this->input->post('id'));
			$this->Profesor_model->setCedula($this->input->post('cedula'));
			$this->Profesor_model->setNombre($this->input->post('nombre'));
			$this->Profesor_model->update();

			$data['profesores']= $this->Profesor_model->getProfesores();

			
			$data['msg']="Usuario actualizado con exito";
			$this->load->view('crud/actualizar',$data);

		}
		else{

			$this->load->view('crud/actualizar',$data);
		}
	}
	public function borrar()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$data['msg']="";
		$this->load->model('Profesor_model');
		$data['profesores']= $this->Profesor_model->getProfesores();
		

		if($this->input->post()){
			
			$id=$this->input->post('id');

			

			$this->Profesor_model->setId($id);
			
			$this->Profesor_model->delete();

			$data['profesores']= $this->Profesor_model->getProfesores();

			
			$data['msg']="Usuario eliminado con exito";
			$this->load->view('crud/eliminar',$data);

		}
		else{

			$this->load->view('crud/eliminar',$data);
		}
	}
}
