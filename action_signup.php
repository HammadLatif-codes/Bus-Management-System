<?php
require_once 'facade.php';
//echo $_POST["userID"];
class Users{
    private $ID;
    private $password;
    private $designation;
#constructor
    function __construct()  {
        $this->ID= "";
        $this->password= "";
        $this->designation= "";
      }
    function set_ID($id) {
      $this->ID = $id;
    } 
    function set_password($p) {
        $this->password = $p;
    } 
    function set_designation($d) {
        $this->designation = $d;
    } 
    function get_ID() {
        return $this->ID;
      }   
      function get_password() {
        return $this->password;
    }  
    function get_designation() {
       return $this->designation;
    } 

}

$db_layer = new Technical_layer();
$user = new Users();
$user->set_ID($_POST["ID"]); //$_POST["userID"]
$user->set_password($_POST["designation"]); //$_POST["designation"]
$user->set_designation($_POST["password"]); //$_POST["password"]
// $user->get_ID();
// $user->get_designation();
// $user->get_password();

$db_layer->add_user_ToDB($user->get_ID(), $user->get_designation(),  $user->get_password() )


?>
