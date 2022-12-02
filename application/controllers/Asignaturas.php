 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignaturas extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model("asignatura");
	}

//renderisa la vista de estudiantes/ presentar
	public function index()
	{
		$this->load->view('encabezado');
		$this->load->view('asignaturas/index');
		$this->load->view('pie');
	}
// renderisa la viata de nuevo de estudiantes/ presentar
  public function nuevo()
  {
		$data["listaAsignaturas"]=$this->asignatura->obtenerTodo();
    $this->load->view('encabezado');
    $this->load->view('asignaturas/nuevo',$data);
    $this->load->view('pie');
  }

	public function guardarAsignatura(){
		$datosAsignatura=array(
			"materia_asi"=>$this->input->post('materia_asi'),
			"numero_creditos_asi"=>$this->input->post('numero_creditos_asi'),
			"descripcion_asi"=>$this->input->post('descripcion_asi'),
			"jornada_asi"=>$this->input->post('jornada_asi'),
		);
		print_r($datosAsignatura);
		if ($this->asignatura->insertar($datosAsignatura)) {
			redirect('asignaturas/nuevo');
		}else {
			echo "<h1>Error</h1> ";
		}
	}

	public function borrar($id_asi){
		if ($this->asignatura->eliminarPorId($id_asi)) {
			redirect('asignaturas/nuevo');
		} else {
			echo "error al eliminar";
		}

	}
  ///
  public function actualizar($id){
    $data["asignaturaEditar"]=$this->asignatura->obtenerPorId($id);
    $this->load->view('encabezado');
    $this->load->view('asignaturas/actualizar',$data);
    $this->load->view('pie');
  }
  ///actualizarAsignatura
  public function actualizarAsignatura(){
    ///crear array asociativo
    $datosEditado=array(
      "materia_asi"=>$this->input->post('materia_asi'),
      "numero_creditos_asi"=>$this->input->post('numero_creditos_asi'),
      "descripcion_asi"=>$this->input->post('descripcion_asi'),
      "jornada_asi"=>$this->input->post('jornada_asi'),


     );
     $id=$this->input->post("id_asi");
     if ($this->asignatura->actualizar($id,$datosEditado)) {
      redirect('asignaturas/nuevo');
    }else {
      echo " <h1>ERROR</h1>";
    }
  }


}
