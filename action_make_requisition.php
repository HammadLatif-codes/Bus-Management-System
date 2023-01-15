<?php
require_once 'action_location.php';
require_once 'facade.php';
// echo $_POST['Start_point'];
// echo $_POST['routes'];
// echo $_POST['d_time'];
// echo $_POST['vehicle_type'];
// echo $_POST['vehicle_no'];
//echo $_POST;

class Requisition{
    private $departure_time;
    private $arrival_time;
    private $location;  
    private $date;
    private $requisition_id;

#constructor
    function __construct(Location $loc)  {
        $this->arrival_time = "";
        $this->departure_time = "";
        $this->date = "";
        $this->requisition_id = "";
        $this->location = $loc;
      }

    function set_location($loc, $route)
    {
      $this->location->set_start_loc($loc);   
      $this->location->set_route($route);
    }         
    function set_departure_time($d_time) {
      $this->departure_time = $d_time;
    } 
    function set_arrival_time($a_time) {
        $this->arrival_time = $a_time;
      } 
    function set_requisitionID($id)
    {
        $this->requisition_id = $id;
    }
    
    function set_date($date)
    {
         $this->date = $date;
    }
  function get_location()
  {
   echo  $this->location->get_start_loc(). PHP_EOL ;
    echo $this->location->get_route();
  }  
  function get_date()
  {
        return $this->date;
  }
  function get_requisitionID()
  {
        return $this->requisition_id;
  }
  function get_departure_time() {
        return $this->departure_time;        
      }   

 function get_arrival_time() {
  return $this->arrival_time ;
 }     
}

$db_layer = new Technical_layer();
$location = new Location();
$requisition =  new Requisition($location);
$requisition->set_departure_time($_POST['d_time']);// $_POST['d_time']
$requisition->set_location( "start", array($_POST["Start_point"], $_POST["routes"]));
// $requisition->set_location( $_POST["Start_point"], $_POST["routes"]);  // $_POST["Start_point"], $_POST["routes"]
$requisition->set_date($_POST["Date"]); //$_POST["Date"]
$requisition->set_requisitionID($_POST["req_id"]); //$_POST["req_id"]
$requisition->set_arrival_time($_POST["a_time"]); //$_POST["a_time"];


$d_time =  $requisition->get_departure_time();
$starting_loc = $location->get_start_loc();
$route = $location->get_route();
$a_time =  $requisition->get_arrival_time();
$date =  $requisition->get_date();
$req =  $requisition->get_requisitionID();

 ////////////////////////////////////////////////////  Passing data to Technical Layer ////////////////////////  
 
 $db_layer->add_requisition_ToDB($d_time, $starting_loc, $route, $a_time, $date, $req);
?>
