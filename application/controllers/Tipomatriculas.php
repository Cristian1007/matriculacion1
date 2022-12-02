<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipomatriculas extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model("tipomatricula");
	}

//renderisa la vista de estudiantes/ presentar
	public function index()
	{
		$this->load->view('encabezado');
		$this->load->view('tipoMatriculas/index');
		$this->load->view('pie');
	}
// renderisa la viata de nuevo de estudiantes/ presentar
  public function nuevo()
  {
		$data["listaTipo"]=$this->tipomatricula->obtenerTodos();
    $this->load->view('encabezado');
    $this->load->view('tipoMatriculas/nuevo',$data);
    $this->load->view('pie');
  }

	//funcion para capturar los valores del formulario nuevo


	public function guardartipo(){
		$datosAsignatura=array(
			"tipoMatricula_ti"=>$this->input->post('tipoMatricula_ti'),
			"nombre_ti"=>$this->input->post('nombre_ti'),
			"observaciones_ti"=>$this->input->post('observaciones_ti'),
			"estado_ti"=>$this->input->post('estado_ti'),
		);
		print_r($datosAsignatura);
		if ($this->tipomatricula->insertar($datosAsignatura)) {
			redirect('tipoMatriculas/nuevo');
		}else {
			echo "<h1>ERROR</h1> ";
		}
	}

	public function borrar($id_ti){
		if ($this->tipomatricula->eliminarPorId($id_ti)) {
			redirect('tipoMatriculas/nuevo');
		} else {
			echo "error al eliminar";
		}

	}
	//actualizar tipoMatricula
	public function actualizar($id){
		$data["matriculaEditada"]=$this->tipomatricula->obtenerPorId($id);
		$this->load->view('encabezado');
		$this->load->view('tipoMatriculas/actualizar',$data);
		$this->load->view('pie');

	}
	public function procesarActualizacion(){
	$datosMatriculaEditado=array(
		"tipoMatricula_ti"=>$this->input->post('tipoMatricula_ti'),
		"nombre_ti"=>$this->input->post('nombre_ti'),
		"observaciones_ti"=>$this->input->post('observaciones_ti'),
		"estado_ti"=>$this->input->post('estado_ti')

	 );
	 $id=$this->input->post("id_ti");
	 if ($this->tipomatricula->actualizar($id,$datosMatriculaEditado)) {
		redirect('tipoMatriculas/nuevo');
	}else {
		echo " <h1>ERROR</h1>";
	}
}

















}
