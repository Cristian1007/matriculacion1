<?php
/**
 *
 */
class tipoMatricula extends CI_Model
{

  function __construct()
  {
    parent::__construct();

  }
  public function insertar($datos){
    return $this->db->insert("tipomatricula",$datos);

  }
  public function obtenerTodos(){
    $asignaturas=$this->db->get('tipomatricula');
    if ($asignaturas->num_rows()>0) {
      return $asignaturas;
    } else {
      return false;
    }

  }
  public function eliminarPorId($id){
    $this->db->where('id_ti',$id);
    return $this->db->delete('tipomatricula');
  }

  public function obtenerPorId($id){
    $this->db->where("id_ti",$id);
    $matricula=$this->db->get("tipomatricula");
    //validacion si existe un estudiantes
    if ($matricula->num_rows()>0) {
      return $matricula->row();//si existe
    } else {
      return false;
    }
  }
  //proceso de actualisacion de estudiantes
  public function actualizar($id, $datos){
    $this->db->where("id_ti",$id);
    return $this->db->update("tipomatricula",$datos);

  }









}
