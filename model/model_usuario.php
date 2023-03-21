<?php

class model_usuario{

  private $id_usuario;
  private $nombre;
  private $apell1;
  private $apell2;
  private $usu;
  private $pass;
  private $correo;
  private $perfil;
  private $estado;

  public function __construct(){}

  public function get_id_usuario(){
    return $this->id_usuario;
  }

  public function set_id_usuario($n){
    $this->id_usuario =$n;
  }

  public function get_nombre(){
    return $this->nombre;
  }

  public function set_nombre($n){
    $this->nombre =$n;
  }


  public function get_apell1(){
    return $this->apell1;
  }

  public function set_apell1($n){
    $this->apell1 =$n;
  }

  public function get_apell2(){
    return $this->apell2;
  }

  public function set_apell2($n){
    $this->apell2 =$n;
  }

  public function get_usu(){
    return $this->usu;
  }

  public function set_usu($n){
    $this->usu =$n;
  }


  public function get_pass(){
    return $this->pass;
  }

  public function set_pass($n){
    $this->pass =$n;
  }

  public function get_correo(){
    return $this->correo;
  }

  public function set_correo($n){
    $this->correo =$n;
  }


  public function get_perfil(){
    return $this->perfil;
  }

  public function set_perfil($n){
    $this->perfil =$n;
  }

  public function get_estado(){
    return $this->estado;
  }

  public function set_estado($n){
    $this->estado =$n;
  }

}

?>
