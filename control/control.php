<?php
session_start();
require_once "libs/smarty_4_3_0/config_smarty.php";
require_once "model/model.php";
require_once "model/model_usuario.php";


class control{


    private $obj_smarty;
    private $objModel;
    private $nombreApp;

    public function __construct(){
      $this->nombreApp   = "Sistema UH";
      $this->obj_smarty  = new config_smarty();
      $this->objModel    = new model();
    }
    public function test(){
       $nom = "Sistema Progra 3";
       $arr_colores = array("Negro","Verde","Rojo","Azul");
        $this->obj_smarty->setAssign("nombre",$nom);
        $this->obj_smarty->setAssign("colores",$arr_colores);
        $this->obj_smarty->setAssign("perfil",3);
        $this->obj_smarty->setDisplay("test.tpl");
    }

    public function saludar(){
      echo "Hola";
    }
    public function gestor_solicitudes(){

      if(isset($_REQUEST['accion'])){

        $accion = $_REQUEST['accion'];

        switch ($accion) {
          case 'validar_login':
              $this->ctl_validar_login();
            break;
        }
      }else{
        //echo "Giro 2";
            if(isset($_SESSION['USUARIO'])){


                  $rs = unserialize($_SESSION['USUARIO']);
                 
                  if($rs->get_id_usuario()>0){
                    echo "Hola, entro al sistema";
                  }else{
                        $this->obj_smarty->setDisplay("frm_login.tpl");

                  }

            }else{

                $this->obj_smarty->setDisplay("frm_login.tpl");
            }
      }

    }

public function ctl_validar_login(){
  //echo "Giro 1";

  $obj_u = new model_usuario();
  $obj_u->set_usu($_REQUEST['txt_usuario']);
  $obj_u->set_pass($_REQUEST['pwd_password']);

  //$usu  = $_REQUEST['txt_usuario'];//$_POST['txt_usuario'];//$_GET['txt_usuario'];
  //$pass = $_REQUEST['pwd_password'];//$_POST['pwd_password'];//$_GET['pwd_password']
  //$rs = $this->objModel->m_Validar_Login($usu, $pass);
  $rs = $this->objModel->m_Validar_Login($obj_u);

  if($rs->get_id_usuario()>0){
    //var_dump($rs);
      echo "Hola, entro al sistema";
      $_SESSION['USUARIO'] = serialize($rs);
      //$this->obj_smarty->setDisplay("frm_principal.tpl");
  }else{
      echo "Usuario o pass Invalido";
      $this->obj_smarty->setDisplay("frm_login.tpl");
  }

  //echo "Iniciando Validacion";

}

    public function validar_inactividad(){}


}

?>
