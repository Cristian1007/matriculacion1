<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colegios extends CI_Controller {
 public function __construct(){
   parent:: __construct();
   $this->load->model("colegio");
 }
 public function index()
 {
   $data["listadoColegio"]=$this->colegio->obtenerTodos();
   $this->load->view('encabezado');
   $this->load->view('colegios/index',$data);
   $this->load->view('pie');
 }
 public function Nuevo()
 {
   $this->load->view('encabezado');
   $this->load->view('colegios/nuevo');
   $this->load->view('pie');
 }

 public function guardarColegios(){
   $datosColegio=array(
     "nombre_crt"=>$this->input->post('nombre_crt'),
     "direccion_crt"=>$this->input->post('direccion_crt'),
     "telefono_crt"=>$this->input->post('telefono_crt'),
     "distrito_crt"=>$this->input->post('distrito_crt')

   );
   print_r($datosColegio);
   if ($this->colegio->insertar($datosColegio)) {
     redirect('colegios/index');
   } else {
     echo "error";
   }

 }

 public function borrar($id_crt){
   if ($this->colegio->eliminarPorId($id_crt)) {
     redirect('colegios/index');
   }else {
     echo "error al eliminar";
   }
 }

 //actualizar estudiantes\
 public function actualizar($id){
   $data["colegioEditar"]=$this->colegio->obtenerPorId($id);
   $this->load->view('encabezado');
   $this->load->view('colegios/actualizar',$data);
   $this->load->view('pie');
 }

 public function procesarActualizacion(){
   $datosColegioEditado=array(
     "nombre_crt"=>$this->input->post("nombre_crt"),
     "direccion_crt"=>$this->input->post("direccion_crt"),
     "telefono_crt"=>$this->input->post("telefono_crt"),
     "distrito_crt"=>$this->input->post("distrito_crt")
   );
   $id=$this->input->post("id_crt");
   if ($this->colegio->actualizar($id,$datosColegioEditado)) {
     redirect('colegios/index');
   } else {
     echo "error";
   }

 }

}
