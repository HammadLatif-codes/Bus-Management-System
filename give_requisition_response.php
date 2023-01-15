<!DOCTYPE html>

<head>
    <title>Response to Requisition</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="p-3 mb-2 bg-dark text-white">
    <h1 class="d-flex justify-content-center">University Bus Management System</h1>
    <h2 class="d-flex justify-content-center pb-4 pt-2">Response to Requisition </h2>
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
            <div class="col-lg-4  pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
            </div>
            <div class="col-lg-4  ">
            </div>
        </div>

        <!--ROW-2 Search by bus Timing -->
        <div class="form-group row mb-0 ">
            <!-- setting mb-0 to remove space b/w rows to make admin session block-->
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <div class="col-lg-2 ">
                <a href="./add_bus_s.html" class="link-warning">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pb-4 pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <p>Assign Vehicle for requisition</p>

            </div>
            <div class="col-lg-1  ">
            </div>
            <div class="col-lg-2 pt-0 pb-3">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
        </div>

        <!--ROW-3 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <div class="col-lg-2 pt-0">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pl-4 pb-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <p></p>
            </div>
            <div class="col-lg-1  ">
            </div>
            <div class="col-lg-2 pt-0 pb-3">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
        </div>

        <!--ROW-4 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2 pb-3">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2 pl-4 pb-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <label for="req">Requisition ID</label>
            </div>
            <div class="col-lg-2 ">
                <input class="form-control" id="req" type="text" placeholder="ID...">
            </div>
            <div class="col-lg-1 ">
                <!-- can be used for ads -->
            </div>
            <div class="col-lg-2 pt-0 pb-3">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
        </div>

        <!--ROW-5 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2 pt-0 pb-3">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-2 pl-4 pb-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <label for="v_no">Vehicle Number</label>
            </div>
            <div class="col-lg-2 ">
                <input class="form-control" id="v_no" type="text" placeholder="Number...">
            </div>
            <div class="col-lg-1 ">
                <!-- can be used for ads -->
            </div>
            <div class="col-lg-2 pt-0 pb-3">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
        </div>

        <!--ROW-6 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2 pt-0 pb-3">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pl-4 pb-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->

            </div>
            <div class="col-lg-1  ">
            </div>
            <div class="col-lg-2 pt-0 pb-3">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
        </div>

        <!--ROW-7 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2 pt-0 pb-4">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pl-4 ">  <!-- (Add when hide delete button) pb-4-->
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <button type="button" class="btn btn-secondary btn-lg btn-block">Accept Requisition</button>         

            </div>
        </div>

        
    </form>
</body>

</html>