<?php 
class Location{
    private $start_point;
    private $route = array();
#constructor
    function __construct($st_loc = "QAU", $route = array("Pindi point", "Isb point"))  {
        $this->start_point =$st_loc;
        $this->route = $route;
      }
    function set_start_loc($st_loc) {
      $this->start_point = $st_loc;
    } 
    function set_route($route) {
        $this->route = $route;
    } 
    function get_start_loc() {
        return $this->start_point;        
      }   
    function get_route() {
      return $this->route;        
    }   
}


$route = array("blue Area", "G9", "G12");
$loc =  new Location();
$loc->set_start_loc("Masjid Point");
$loc->set_route($route);

$loc->get_start_loc();
$loc->get_route();
?>
