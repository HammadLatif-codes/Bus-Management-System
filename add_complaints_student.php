<?php 
?>
<!DOCTYPE html>
<head>
    <title>Add Complaints</title>
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
    <h1 class="d-flex justify-content-center">University Bus Management System</h1>
    <h2 class="d-flex justify-content-center pb-4 pt-2">Add Complaints</h2>

    <form method="POST" action="/action_add_complaints_student.php">
 
        <!-- Row 1 -->
        <div class="form-group row pt-4 mb-4 ">
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
            <h3>Student</h3>
                <!-- <a href="/view_bus_schedule.php" class="link-warning">View Schedule</a> -->
            </div>
            <div class="col-lg-1 pt-0">
                
            </div>

            <div class="col-lg-4 pt-0">
                <span>Want to register any complaint?</span>
            </div>
            <div class="col-lg-1 pt-0">
            </div>
            <div class="col-lg-3 pt-0">
                <!-- <a href="./add_bus_s.html" class="link-warning">Add Bus Schedule</a> -->

            </div>
        </div>  
             <!--Row 3  -->

       <div class="form-group row pt-4 mt-0 mb-0 ">
          <div class="col-lg-1 pt-0">
          </div>
          <div class="col-lg-2 pt-0">
          <a href="/view_bus_schedule.php" class="link-warning">View Schedule</a>

              
          </div>
          <div class="col-lg-1 pt-0">
          </div>
          <div class="col-lg-2 pt-0">
            <label for="pick_up">Add complaint</label>

          </div>
          <div class="col-lg-2 pt-0">
          </div>
          <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-3 pt-0">
        <a href="/" class="link-warning">Log out</a>

            <!-- <a href="./add_bus_s.html" class="link-warning">Add Bus Schedule</a> -->

        </div>
      </div> 

                         <!--Row 4  -->

      <div class="form-group row pt-4 mb-0 ">
         <div class="col-lg-1 pt-0">
         </div>
         <div class="col-lg-2 pt-0">
         <a href="./search_schedule_hod.html" class="link-warning">Search Vehicle Schedule</a>
             <!-- <a href="./search_req_hod.html" class="link-warning">Search Requisition</a> -->
         </div>
         <div class="col-lg-1 pt-0">
         </div>
         <div class="col-lg-4 pt-0">
            <input type="text" class="form-control" id="complaints" name="complaint" value="" >
            <span class="errorMsg" id="errorComplaints">Complaints should be between 1-75 characters.</span> 

        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-3 pt-0">
            <!-- <a href="./add_bus_s.html" class="link-warning">Add Bus Schedule</a> -->

        </div>
     </div> 
                         
     <!--Row 5 -->

     <div class="form-group row pt-4 mb-0 ">
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
            <!-- <a href="./search_req_hod.html" class="link-warning">Update Requisition </a> -->
        </div>
        <div class="col-lg-1 pt-0">
        </div>
 
        <div class="col-lg-2 pt-0">
            <label for="comp-id">Complaint ID</label>
        </div>
        <div class="col-lg-2 pt-0">
            <input type="text" class="form-control" id="id" name="comp_id" value="" minlength="3" >
            <span class="errorMsg" id="errorID">No special characters(e.g. @,/,& etc).Combination of alphanumeric.</span>
        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-3 pt-0">
            <!-- <a href="./add_bus_s.html" class="link-warning">Add Bus Schedule</a> -->

        </div>
    </div> 

     <!--Row 6 -->

     <div class="form-group row pt-4 mb-0 ">
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
            <!-- <a href="./add_bus_s.html" class="link-warning">Add Bus Schedule</a> -->
        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
            <div class="d-flex justify-content-center mt-4"><button type="submit" class="btn btn-secondary btn-lg" id="submit">Add complaint</button></div>

        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-3 pt-0">
            <!-- <a href="./add_bus_s.html" class="link-warning">Add Bus Schedule</a> -->

        </div>
    </div> 

 <!--ROW-7  -->
    <div class="form-group row pt-4 mb-0 ">
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
            <!-- <a href="./add_bus_s.html" class="link-warning">Add Bus Schedule</a> -->
        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
        </div>
        <div class="col-lg-2 pt-0">
        </div>
        <div class="col-lg-1 pt-0">
        </div>
        <div class="col-lg-3 pt-0">
            <!-- <a href="./add_bus_s.html" class="link-warning">Add Bus Schedule</a> -->

        </div>
    </div> 
      
        <!--ROW-8  -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2 pt-4 pb-3">
                <!-- <a href="./add_bus_s.html">Add Bus Schedule</a> -->
            </div>
            <div class="col-lg-3 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2 pl-4 pt-4">  

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
      <script src="add_complaint_validation.js"></script>


<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------ -->


</body>
</html>