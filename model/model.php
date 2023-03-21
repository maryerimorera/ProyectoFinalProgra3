<?php
require_once "db/conn.php";

class model{

  private $ins_conexion;
  public function __construct(){
      $this->ins_conexion = new conn();

  }

//public function m_Validar_Login($usu, $pass){
  public function m_Validar_Login($obj_u){

    $usu  = $obj_u->get_usu();
    $pass = $obj_u->get_pass();

    $sql = "SELECT id_usuario,nombre,apell1,apell2,usu,pass,correo,perfil,estado FROM usuarios where usu='$usu' and pass='$pass'";
    $rs = $this->ins_conexion->ejecutar($sql);

    $arrUsu = array();
    while ($row = mysqli_fetch_assoc($rs)) {

      $obj_u->set_id_usuario($row['id_usuario']);//$arrUsu['id_usuario'] = $row['id_usuario'];
      $obj_u->set_nombre($row['nombre']);//$arrUsu['nombre'] = $row['nombre'];
      $obj_u->set_apell1($row['apell1']);//$arrUsu['apell1'] = $row['apell1'];
      $obj_u->set_apell2($row['apell2']);//$arrUsu['apell2'] = $row['apell2'];

      $obj_u->set_correo($row['correo']);//$arrUsu['correo'] = $row['correo'];
      $obj_u->set_perfil($row['perfil']);//$arrUsu['perfil'] = $row['perfil'];
      $obj_u->set_estado($row['estado']);//$arrUsu['estado'] = $row['estado'];
    }

    //$this->ins_conexion->cerrarConn();
    return $obj_u;

  }



}

/*


 CREATE
 READ
 UPDATE
 DELETE

*/



?>
