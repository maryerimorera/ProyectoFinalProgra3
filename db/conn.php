<?php

class conn{

  private $server;
  private $db;
  private $usu;
  private $pass;
  private $link;

  public function __construct(){
    $this->server = "localhost";
    $this->db     = "progra3_l";
    $this->usu    = "root";
    $this->pass   = "";

  }

  public function conectar(){

    $this->link = mysqli_connect($this->server,$this->usu,$this->pass,$this->db);

    if (!$this->link) {
      echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
      echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
      exit;
    }

  //  return $this->link;

  }
  public function ejecutar($sql){

    $this->conectar();

    $rs = $this->link->query($sql);

    return $rs;

  }



}
?>
