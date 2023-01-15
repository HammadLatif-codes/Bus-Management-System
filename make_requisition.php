<?php 
?>


<!DOCTYPE html>
<head>
    <title>Make Requisition</title>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">

</head>
<style>
    .errorMsg{
color: rgb(223, 180, 180);
margin-bottom: 10px;
display:none;
}
</style>
<body class="p-3 mb-2 bg-dark text-white"></body>
    <h1 class="d-flex justify-content-center">University Vehicle Management System</h1>
    <h2 class="d-flex justify-content-center pb-4 pt-2">Make Requisition</h2>
    <form method="POST" action="/action_make_requisition.php">
 
        <!-- Row 1 -->
        <div class="form-group row pt-4 mb-0 ">
            <div class="col-lg-1 pt-0">
            </div>
            <div class="col-lg-2 pt-0">
                
            </div>
            <div class="col-lg-6 pt-0">
            </div>
            <div class="col-lg-3 pt-0">
                <!-- <h3>HOD</h3> -->
            </div>
        </div>  
        <!-- Row 2 -->
        <div class="form-group row pt-4 mb-0 ">
            <div class="col-lg-1 pt-0">
            </div>
            <div class="col-lg-2 pt-0">
            <h3>HOD</h3>
                
            </div>
            <div class="col-lg-1 pt-0">
            </div>
            <div class="col-lg-2 pt-0">
                <label for="r_date">Enter date</label>
            </div>
            <div class="col-lg-2 pt-0">
                <input type="date" class="form-control" id="rdate" name="Date" required>
                <span class="errorMsg" id="errorRDate">Date can not be negative.</span> 
            </div>
            <div class="col-lg-1 pt-0">
            </div>
            <div class="col-lg-3 pt-0">
                <!-- <a href="./add_Vehicle_s.html" class="link-warning">Add Complaints</a> -->

            </div>
        </div>  
             <!--Row 3  -->

       <div class="form-group row pt-4 mb-0 ">
          <div class="col-lg-1 pt-0">
          </div>
          <div class="col-lg-2 pt-0">
          <a href="./view_schedules_hod.html" class="link-warning">View Schedule</a>
              
          </div>
          <div class="col-lg-1 pt-0">
          </div>
          <div class="col-lg-2 pt-0">
              <label for="d_time">Departure time</label>
          </div>
          <div class="col-lg-2 pt-0">
              <input type="time" class="form-control" id="d_time" name="d_time" required>
          </div>
          <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-3 pt-0">
        <a href="./add_Vehicle_s.html" class="link-warning">Add Complaints</a>

            <!-- <a href="./add_Vehicle_s.html" class="link-warning">Update Complaints</a> -->

        </div>
      </div> 

                         <!--Row 4  -->

      <div class="form-group row pt-4 mb-0 ">
         <div class="col-lg-1 pt-0">
         </div>
         <div class="col-lg-2 pt-0">
             <!-- <a href="./search_req_hod.html" class="link-warning">Search Requisition</a> -->
             <a href="./search_schedule_hod.html" class="link-warning">Search Vehicle Schedule</a>
         </div>
         <div class="col-lg-1 pt-0">
         </div>
         <div class="col-lg-2 pt-0">
            <label for="a_time">Arrival time</label>
        </div>
         <div class="col-lg-2 pt-0">
            <input type="time" class="form-control" id="a_time" name="a_time" required >
        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-3 pt-0">
        <a href="./add_Vehicle_s.html" class="link-warning">Logout</a>


            <!-- <a href="./add_Vehicle_s.html" class="link-warning">Logout</a> -->

        </div>
     </div> 
                         
     <!--Row 5 -->

     <div class="form-group row pt-4 mb-0 ">
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
            <a href="./search_req_hod.html" class="link-warning">Search Requisition</a>

        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
            <label for="pick_up">Starting Pick up Location</label>
        </div>
        <div class="col-lg-2 pt-0">
            <input  type="text" class="form-control" id="ploc" name="p_loc" placeholder="Pindi Point...">
            <span class="errorMsg" id="errorPickLoc">Pick Location should be between 1-75.</span> 
        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-3 pt-0">

            <!-- <a href="./add_Vehicle_s.html" class="link-warning">Add Vehicle Schedule</a> -->

        </div>
    </div> 

     <!--Row 6 -->

     <div class="form-group row pt-4 mb-0 ">
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
        <a href="./search_req_hod.html" class="link-warning">Update Requisition </a>

            <!-- <a href="./add_Vehicle_s.html" class="link-warning">Add Vehicle Schedule</a> -->
        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
            <label for="drop_off">Route</label>
        </div>
        <div class="col-lg-2 pt-0">
            <input type="text" class="form-control" id="dloc" name="route" value="" placeholder="Faizabad, Rawalpindi"  >
            <span class="errorMsg" id="errorDropLoc">Drop Location should be between 1-75.</span> 
        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-3 pt-0">
            <!-- <a href="./add_Vehicle_s.html" class="link-warning">Add Vehicle Schedule</a> -->

        </div>
    </div> 

 <!--ROW-7  -->
    <div class="form-group row pt-4 mb-0 ">
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
            <!-- <a href="./add_Vehicle_s.html" class="link-warning">Add Vehicle Schedule</a> -->
        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
            <label for="req-id">Requisition ID</label>
        </div>
        <div class="col-lg-2 pt-0">
            <input type="text" class="form-control" id="rid" name="req_id" value="" minlength="2" placeholder="e.g. 1a or a1">
            <span class="errorMsg" id="errorRID">No special characters(e.g. @,/,& etc).Combination of alphanumeric.</span> 
        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-3 pt-0">
            <!-- <a href="./add_Vehicle_s.html" class="link-warning">Add Vehicle Schedule</a> -->

        </div>
    </div> 
      
        <!--ROW-8  -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2 pt-4 pb-3">
                <!-- <a href="./add_Vehicle_s.html">Add Vehicle Schedule</a> -->
            </div>
            <div class="col-lg-3 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2 pl-2">  
                <div class="d-flex justify-content-center mt-4"><button type="submit" class="btn btn-secondary btn-lg" id="submit">Make Requisition</button></div>

                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
            </div>
            <div class="col-lg-1 pt-4 pb-3">
            </div>
            <div class="col-lg-3 pt-4 pb-3">
                <!-- <a href="/">Log out</a> -->
            </div>
        </div>



      </form>
      <script src="JQuery.js"></script>
      <script src="make_req_validation.js"></script>

</body>
</html>