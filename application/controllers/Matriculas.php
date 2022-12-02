<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matriculas extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model("estudiante");
    $this->load->model("asignatura");
	}
  public function index(){
    $this->load->view("encabezado");
    $this->load->view("matriculas/index");
    $this->load->view("pie");
  }

  public function nuevo(){
    $data["listadoEstudiantes"]=$this->estudiante->obtenerTodo();
    $data["listadoAsignaturas"]=$this->asignatura->obtenerTodo();
    $this->load->view("encabezado");
    $this->load->view("matriculas/nuevo",$data);
    $this->load->view("pie");
  }
 


}//cierre
