<!DOCTYPE html>

<head>
    <title>Update Bus Schedule</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style>
      .errorMsg{
  color: rgb(223, 180, 180);
  margin-bottom: 10px;
  display:none;
  }
</style>
<body class="p-3 mb-2 bg-dark text-white">
    <h1 class="d-flex justify-content-center">University Bus Management System</h1>
    <h2 class="d-flex justify-content-center pb-4 pt-2">Update Bus Schedule</h2>
    <form>

        <!-- ROW-1 Search by bus number -->
        <div class="form-group row pt-4 mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <!-- setting mb-0 to remove space b/w rows to make admin session block-->
            <div class="col-lg-2 ">
                <h1>Admin</h1>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2  pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <label for="d_time">Departure time</label>
            </div>
            <div class="col-lg-2 pl-0 ">
                <input type="time" class="form-control" id="time" name="d_time" placeholder="Time" required>
            </div>
            <div class="col-lg-2 pt-0">
                <!-- empty div ... Can be used to add ads-->
            </div>
        </div>

        <!--ROW-2 Search by bus Timing -->
        <div class="form-group row mb-0 ">
            <!-- setting mb-0 to remove space b/w rows to make admin session block-->
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <div class="col-lg-2  ">
                <a href="./add_bus_s.html" class="link-warning">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2  pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <label for="destination"> Final Destination</label>
            </div>
            <div class="col-lg-2 pl-0 pb-3 ">
                <input type="text" class="form-control" id="destination" name="destination"
                    placeholder="Final Destination">
                <span class="errorMsg" id="errordestination">Destination should be between 1-75 characters.</span> 
            </div>
            <!-- <span class="errorMsg" id="errordestination">Can not be greater than 75 characters.</span>  -->
            <div class="col-lg-1 pt-0">
                <!-- empty div ... Can be used to add ads-->
            </div>
            <div class="col-lg-2 pt-0">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
        </div>
        <!--ROW-3 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <div class="col-lg-2 ">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2  pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <label for="routes"> Routes </label>
            </div>
            <div class="col-lg-2 pl-0 pb-3 ">
                <input type="text" class="form-control" id="routes" name="routes" placeholder="Faizabad,6th road...">
                <span class="errorMsg" id="errorRoutes">Routes should be between 1-75 characters.</span> 
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div ... Can be used to add ads-->
            </div>
            <div class="col-lg-2 pt-0">
              <a href="./add_bus_s.html">Add Bus Schedule</a>
          </div>
        </div>

        <!--ROW-4 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2  pt-0">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2  pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <label for="vehicle">Vehicle Type</label>
            </div>
            <div class="col-lg-2 pl-0 pb-3 ">
                <select class="form-control">
                    <option>Bus</option>
                    <option>Couch</option>
                    <option>Carry</option>
                  </select>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div ... Can be used to add ads-->
            </div>
            <div class="col-lg-2 pt-0">
              <a href="./add_bus_s.html">Add Bus Schedule</a>
          </div>
        </div>

        <!--ROW-5 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2  pt-0">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2  pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <label for="number">Vehicle number</label>
            </div>
            <div class="col-lg-2 pl-0 pb-3 ">
                <input type="text" class="form-control" id="number" name="vehicle_no" placeholder="Vehicle Number">
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div ... Can be used to add ads-->
            </div>
            <div class="col-lg-2 pt-0">
              <a href="./add_bus_s.html">Add Bus Schedule</a>
          </div>
        </div>

        <!--ROW-6 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2  pt-0">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-3  pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
            </div>
            <div class="col-lg-2 pl-0 pb-3 ">
                <div class="d-flex justify-content-center"><button type="submit" class="btn btn-secondary"id= "submit">Update Schedule</button></div>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div ... Can be used to add ads-->
            </div>
            <div class="col-lg-3  pt-0">
              <a href="./add_bus_s.html">Add Bus Schedule</a>
          </div>
        </div>



        <!--ROW-8 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2 pt-0">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
        </div>


    </form>
    <script src="JQuery.js"></script>
    <script src="update_bus_validation.js"></script>
</body>

</html>