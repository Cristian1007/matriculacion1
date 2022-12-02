<?php
  // definir clase
  class Colegio extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("colegio_crt",$datos);
    }
    // funcion de consulta de todos los estudiantes de la base de datos
    public function obtenerTodos(){
      $colegios=$this->db->get("colegio_crt");
        if ($colegios->num_rows()>0) {
          return $colegios;
        } else {
          return false;   //cuando no existen datos
        }
    }
    //funcion para eliminar estudiante
    public function eliminarPorId($id){
      $this->db->where("id_crt",$id);
      return $this->db->delete("colegio_crt");//nombre de a tabla
    }

    ///actualizar COLEGIO
    public function obtenerPorId($id){
      $this->db->where("id_crt",$id);
      $colegio=$this->db->get("colegio_crt");
      if ($colegio->num_rows()>0) {
        return $colegio->row();
      } else {
        return false;
      }
    }
    //actualizarDATOA
    public function actualizar($id,$datos){
      $this->db->where("id_crt",$id);
      return $this->db->update("colegio_crt",$datos);
    }

  }
