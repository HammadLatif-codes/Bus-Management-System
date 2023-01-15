<?php
require_once 'action_location.php';
require_once 'action_vehicle.php';
require_once 'facade.php';
// echo $_POST;
// exit();
// echo $_POST['routes'];
// echo $_POST['d_time'];
// echo $_POST['vehicle_type'];
// echo $_POST['vehicle_no'];

class Vehicle_Schedule{
    private $departure_time;
    private $location;  
    private $vehicle;
  

#constructor
    function __construct(Location $loc, Vehicle $v)  {
        $this->vehicle = $v;
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
    function set_vehicle_num($v_number) {
        $this->vehicle->set_vehicle_num($v_number);
    } 
    function set_vehicle_type($v_type) {
      $this->vehicle->set_vehicle_type($v_type);
  }
  function get_location()
  {
   echo  $this->location->get_start_loc(). PHP_EOL ;
    echo $this->location->get_route();

  }  
  function get_vehicle_data()
  {
    echo $this->vehicle->get_vehicle_type(). PHP_EOL ;
    echo $this->vehicle->get_vehicle_num(). PHP_EOL ;

  }
  function get_departure_time() {
        return $this->departure_time;        
      }   
   
}
$db_layer = new Technical_layer();
$location = new Location();
$vehicle = new Vehicle();
$vehicle_schedule =  new Vehicle_Schedule($location, $vehicle );
$vehicle_schedule->set_departure_time($_POST['d_time']); //$_POST['d_time']
$vehicle_schedule->set_location( "start", array($_POST["Start_point"], $_POST["routes"]));  // $_POST["Start_point"], $_POST["routes"]
$vehicle_schedule->set_vehicle_num($_POST["vehicle_no"]); //$_POST["vehicle_no"]
$vehicle_schedule->set_vehicle_type( $_POST["vehicle_type"]); // $_POST["vehicle_type"]


$d_time = $vehicle_schedule->get_departure_time();
$starting_loc = $location->get_start_loc();
$route = $location->get_route();
$vehicleNumber = $vehicle->get_vehicle_num();
$vehicleType = $vehicle->get_vehicle_type();

// echo $d_time ;
// echo $starting_loc;
// echo $route ;
// echo $vehicleNumber;
// echo $vehicleType;
 ////////////////////////////////////////////////////  Passing data to Technical Layer ////////////////////////  
 
$db_layer->add_bs_ToDB($d_time, $starting_loc, $route, $vehicleNumber, $vehicleType);
?>
