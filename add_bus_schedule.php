<?php 

?>
<!DOCTYPE html>

<head>
    <title>Add Vehicle Schedule</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">

</head>
<style>
      .errorMsg{
  color: rgb(223, 180, 180);
  margin-bottom: 10px;
  display:none;
  }
</style>

<body class="p-3 mb-2 bg-dark text-white">
    <h1 class="d-flex justify-content-center">University Vehicle Management System</h1>
    <h2 class="d-flex justify-content-center pb-4 pt-2">Add Vehicle Schedule</h2>
    
    <form method="POST" action="/action_Vehicle_schedule.php">

        <!-- ROW-1 Search by Vehicle number -->
        <div class="form-group row pt-4 mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <!-- setting mb-0 to remove space b/w rows to make admin session block-->
            <div class="col-lg-2 ">
                <h3>Admin</h3>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2  pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <label for="d_time">Departure time</label>
            </div>
            <div class="col-lg-2 pl-0 ">
                <input type="time" class="form-control" id="d_time" name="d_time" placeholder="Time" required>
            </div>
            <div class="col-lg-2 pt-0">
                <!-- empty div ... Can be used to add ads-->
            </div>
        </div>

        <!--ROW-2 Search by Vehicle Timing -->
        <div class="form-group row pt-4 mb-0">
            <!-- setting mb-0 to remove space b/w rows to make admin session block-->
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <div class="col-lg-2  ">
                <a href="/add_Vehicle_schedule.php" class="link-warning">Add Vehicle Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2  pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <label for="destination"> Starting Location</label>
            </div>
            <div class="col-lg-2 pl-0">
                <input type="text" class="form-control" id="destination" name="Start_point"
                    placeholder="Final Destination">
                <span class="errorMsg" id="errordestination">Destination should be between 1-75 characters.</span> 
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div ... Can be used to add ads-->
            </div>
            <div class="col-lg-2 pt-0">
                <a href="/view_Vehicle_schedule.php" class="link-warning">View Vehicle Schedule</a>
            </div>
        </div>
        <!--ROW-3 Search by Vehicle route -->
        <div class="form-group row pt-4 mb-0">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <div class="col-lg-2 ">
                <a href="/search_Vehicle_schedule.php" class="link-warning">Search Vehicle Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2  pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <label for="routes"> Routes </label>
            </div>
            <div class="col-lg-2 pl-0">
                <input type="text" class="form-control" id="routes" name="routes" placeholder="Faizabad,6th road...">
                <span class="errorMsg" id="errorRoutes">Routes should be between 1-75 characters.</span> 
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div ... Can be used to add ads-->
            </div>
            <div class="col-lg-2 pt-0">
              <a href="/update_Vehicle_schedule.php" class="link-warning">Update Vehicle Schedule</a>
          </div>
        </div>

        <!--ROW-4 Search by Vehicle route -->
        <div class="form-group row pt-4 mb-0">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2  pt-0">
                <a href="/delete_Vehicle_schedule.php" class="link-warning">Delete Vehicle Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2 pl-4">
                <label>Vehicle Type</label>
            </div>
            <div class="col-lg-2 pl-0">
                <select class="form-control">
                    <option>Vehicle</option>
                    <option>Couch</option>
                    <option>Carry</option>
                </select>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div ... Can be used to add ads-->
            </div>
            <div class="col-lg-2 pt-0">
              <a href="/view_requisition.php" class="link-warning">View Requisition</a>
          </div>
        </div>

        <!--ROW-5 Search by Vehicle route -->
        <div class="form-group row pt-4 mb-0">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2  pt-0">
                <a href="/give_requisition_response.php" class="link-warning">Give Requisition Response</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2  pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <label for="number">Vehicle number</label>
            </div>
            <div class="col-lg-2 pl-0">
                <input type="text" class="form-control" id="number" name="vehicle_no" placeholder="e.g ICT 917" required>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div ... Can be used to add ads-->
            </div>
            <div class="col-lg-2 pt-0">
              <a href="/view_Vehicle_status.php" class="link-warning">View Vehicle Status</a>
          </div>
        </div>

        <!--ROW-6 Search by Vehicle route -->
        <div class="form-group row pt-4 mb-0">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2  pt-0">
                <a href="/search_Vehicle_status.php" class="link-warning">Search Vehicle Status</a>
            </div>
            <div class="col-lg-3  pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
            </div>
            <div class="col-lg-2 pl-0">
                <div class="d-flex justify-content-center"><button type="submit" class="btn btn-secondary" id="submit">Add Schedule</button></div>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div ... Can be used to add ads-->
            </div>
            <div class="col-lg-3  pt-0">
              <a href="/view_complaints.php" class="link-warning">View Complaints</a>
          </div>
        </div>

        


    </form>
    <script src="JQuery.js"></script>
    <script src="add_Vehicle_validation.js"></script>
</body>

</html>
