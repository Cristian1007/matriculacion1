<?php
/**
 *
 */
class Estudiante extends CI_Model
{

  function __construct()
  {
    parent::__construct();

  }
  public function insertar($datos){
    return $this->db->insert("estudiantes",$datos);

  }
  ///funcion que consulta todos los estudiantes de la bdd

  public function obtenerTodo(){
    $estudiantes=$this->db->get('estudiantes');  ///cambiar las bariables $estudiantes y el nombre de las base de daros
    ///validamos la base de datos
     if ($estudiantes->num_rows()>0) {
      return $estudiantes;

     }else {
       return  false;

     }
  }
///eliminar los datos de la base de datos
  public function eliminarPorId($id){
    $this->db->where('id_est',$id);
    return $this->db->delete("estudiantes");
  }
  //actualisar los datos en la base de datos
  //consultando al estudiante por su //
  public function obtenerPorId($id){
    $this->db->where("id_est",$id);
    $estudiante=$this->db->get("estudiantes");
    //validacion si existe un estudiantes
    if ($estudiante->num_rows()>0) {
      return $estudiante->row();//si existe
    } else {
      return false;
    }
  }
  //proceso de actualisacion de estudiantes
  public function actualizar($id, $datos){
    $this->db->where("id_est",$id);
    return $this->db->update("estudiantes",$datos);

  }

}//cierre
