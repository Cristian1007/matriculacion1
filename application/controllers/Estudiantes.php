<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model("estudiante");
	}

//renderisa la vista de estudiantes/ presentar
	public function index()
	{
		$data["listadoEstudiantes"]=$this->estudiante->obtenerTodo();
		$this->load->view('encabezado');
		$this->load->view('estudiantes/index',$data);
		$this->load->view('pie');
	}
//renderisa la viata de nuevo de estudiantes/ presentar
  public function nuevo()
  {

    $this->load->view('encabezado');
    $this->load->view('estudiantes/nuevo');
    $this->load->view('pie');
  }




	// public function asignatura(){
	// 	$this->load-> view('encabezado');
	// 	$this->load->view('estudiantes/asignatura'
	// 	$this->load->view('pie');
	//
	// }


	//funcion para capturar los valores del formulario nuevo
	public function guardarEstudiante(){
		///crear array asociativo
		$datosNuevoEstudiante=array(
			"cedula_est"=>$this->input->post('cedula_est'),
			"apellido_est"=>$this->input->post('apellido_est'),
			"nombre_est"=>$this->input->post('nombre_est'),
			"telefono_est"=>$this->input->post('telefono_est'),
			"direccion_est"=>$this->input->post('direccion_est'),
			"fecha_nacimiento_est"=>$this->input->post('fecha_nacimiento_est')

		 );
		 print_r($datosNuevoEstudiante);
		 if ($this->estudiante->insertar($datosNuevoEstudiante)) {
		 	redirect('estudiantes/index');
		}else {
			echo " <h1>ERROR</h1>";
		}
	}
///generar una funcion para eliminar Estudiantes
  public function borrar($id_est){
		if ($this->estudiante->eliminarPorId($id_est)) {
			redirect('estudiantes/index');
		} else {
			echo "error al eliminar :()";
		}


	}
//actualizarDATOA
	public function actualizar($id){
		$data["estudianteEditar"]=$this->estudiante->obtenerPorId($id);
		$this->load->view('encabezado');
    $this->load->view('estudiantes/actualizar',$data);
    $this->load->view('pie');
	}

	//crear la funcion de actualizar
	public function procesarActualizacion(){
		///crear array asociativo
		$datosEstudianteEditado=array(
			"cedula_est"=>$this->input->post('cedula_est'),
			"apellido_est"=>$this->input->post('apellido_est'),
			"nombre_est"=>$this->input->post('nombre_est'),
			"telefono_est"=>$this->input->post('telefono_est'),
			"direccion_est"=>$this->input->post('direccion_est'),
			"fecha_nacimiento_est"=>$this->input->post('fecha_nacimiento_est')

		 );
		 $id=$this->input->post("id_est");
		 if ($this->estudiante->actualizar($id,$datosEstudianteEditado)) {
		 	redirect('estudiantes/index');
		}else {
			echo " <h1>ERROR</h1>";
		}
	}


}
