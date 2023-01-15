<?php
require_once 'facade.php';
//echo $_POST["userID"];
class Complaints{
    private $c_ID;
    private $user_ID;
    private $complaint;
#constructor
    function __construct()  {
        $this->c_ID = "";
        $this->user_ID = "";
        $this->complaint= "";
    }
    function set_c_ID($id) {
      $this->c_ID = $id;
    } 
    function set_user_ID($id) {
        $this->user_ID = $id;
      }

    function set_complaint($c) {
        $this->complaint = $c;
    } 
    function get_c_ID() {
        return $this->c_ID;
      }  
    function get_user_ID() {
       return $this->user_ID;
    }   

    function get_complaint() {
       return $this->complaint;
    } 

}

$db_layer = new Technical_layer();
$complaint = new Complaints();
$complaint->set_c_ID($_POST["comp_id"]); //$_POST["comp_id"]
// $complaint->set_user_ID("u userID"); //$_POST["userID"]
$complaint->set_complaint($_POST["complaint"]); //$_POST["complaint"]


///////////////////////////////////// passing to technical layer ////////////////////////

$db_layer->add_complaint_ToDB($complaint->get_c_ID(),  $complaint->get_complaint() )
// $db_layer->add_complaint_ToDB($complaint->get_c_ID(), $complaint->get_user_ID(),  $complaint->get_complaint() )



?>
