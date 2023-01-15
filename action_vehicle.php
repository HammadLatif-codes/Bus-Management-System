<?php 
class Vehicle{
    private $vehicle_type;
    private $vehicle_num ;
#constructor
    function __construct($vehicle_type = "Van", $vehicle_num = "b-888")  {
        $this->$vehicle_type=$vehicle_type;
        $this->$vehicle_num = $vehicle_num;
      }
    function set_vehicle_type($v_type) {
      $this->vehicle_type = $v_type;
    } 
    function set_vehicle_num($v_number) {
        $this->vehicle_num = $v_number;
    } 
    function get_vehicle_type() {
        return $this->vehicle_type;        
      }   
    function get_vehicle_num() {
      return $this->vehicle_num;        
    }   
}


// $vehicle =  new Vehicle();
// $vehicle->set_vehicle_type("Bus");
// $vehicle->set_vehicle_num("b-457");

// echo $vehicle ->get_vehicle_type();
// echo $vehicle ->get_vehicle_num();
?>
