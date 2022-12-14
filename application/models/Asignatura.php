<?php
/**
 *
 */
class Asignatura extends CI_Model
{

  function __construct()
  {
    parent::__construct();

  }
  public function insertar($datos){
    return $this->db->insert("asignatura",$datos);

  }
  public function obtenerTodo(){
    $asignaturas=$this->db->get('asignatura');
    if ($asignaturas->num_rows()>0) {
      return $asignaturas;
    }else {
      return false;
    }
  }

  public function eliminarPorId($id){
    $this->db->where('id_asi',$id);
    return $this->db->delete('asignatura');

  }
  ///asignatura
  public function obtenerPorId($id){
    $this->db->where("id_asi",$id);
    $asignatura=$this->db->get("asignatura");
    //validacion si existe un estudiantes
    if ($asignatura->num_rows()>0) {
      return $asignatura->row();//si existe
    } else {
      return false;
    }
  }
  //proceso de actualisacion de asignaturas
  public function actualizar($id, $datos){
    $this->db->where("id_asi",$id);
    return $this->db->update("asignatura",$datos);

  }


}
