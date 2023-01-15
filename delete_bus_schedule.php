<!DOCTYPE html>

<head>
    <title>Delete Vehicle Schedule</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap.css">


</head>

<body class="p-3 mb-2 bg-dark text-white">
    <h1 class="d-flex justify-content-center">University Vehicle Management System</h1>
    <h2 class="d-flex justify-content-center pb-4 pt-2">Delete Vehicle Schedule </h2>
    <form>

        <!-- ROW-1 Search by Vehicle number -->
        <div class="form-group row pt-4 mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <!-- setting mb-0 to remove space b/w rows to make admin session block-->
            <div class="col-lg-2">
                
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

        <!--ROW-2 Search by Vehicle Timing -->
        <div class="form-group row mb-0 ">
            <!-- setting mb-0 to remove space b/w rows to make admin session block-->
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <div class="col-lg-2 ">
            <h3>Admin</h3>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pb-4 pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <p>Search Vehicle whose schedule you want to delete</p>

            </div>
            <div class="col-lg-4  ">
            </div>
        </div>

        <!--ROW-3 Search by Vehicle route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <div class="col-lg-2 pt-0">
            <a href="./add_Vehicle_s.html" class="link-warning">Add Vehicle Schedule</a>

                <!-- <a href="./add_Vehicle_s.html">Add Vehicle Schedule</a> -->
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pl-4 pb-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <p>Use any of the following search bar </p>

            </div>
            <div class="col-lg-4 pl-5 ">
            <a href="./add_Vehicle_s.html" class="link-warning pl-5" >Add Vehicle Schedule</a>

            </div>
        </div>

        <!--ROW-4 Search by Vehicle route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2 pb-3">
                <a href="./add_Vehicle_s.html">Add Vehicle Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pl-4 pb-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->

                <input class="form-control" id="ex3" type="text" placeholder="search by Vehicle number...">
            </div>
            <div class="col-lg-4  ">
                <button type="button" class="btn btn-secondary" id="btn3">search</button>
                <a href="./add_Vehicle_s.html" class="link-warning">Add Vehicle Schedule</a>

            </div>
        </div>

        <!--ROW-5 Search by Vehicle route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2  pt-0 pb-3">
                <a href="./add_Vehicle_s.html">Add Vehicle Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pb-4 pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->

                <input class="form-control" id="ex3" type="text" placeholder="search by Vehicle timing...">
            </div>
            <div class="col-lg-4  ">
                <button type="button" class="btn btn-secondary" id="btn2">search</button>
                <a href="./add_Vehicle_s.html" class="link-warning">Add Vehicle Schedule</a>

            </div>
        </div>

        <!--ROW-6 Search by Vehicle route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2 pt-0 pb-3">
                <a href="./add_Vehicle_s.html">Add Vehicle Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pl-4 pb-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->

                <input class="form-control" id="ex3" type="text" placeholder="search by Vehicle route...">
            </div>
            <div class="col-lg-4  ">
                <button type="button" class="btn btn-secondary" id="btn3">search</button>
                <a href="./add_Vehicle_s.html" class="link-warning">Add Vehicle Schedule</a>

            </div>
        </div>

        <!--ROW-7 Search by Vehicle route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2 pt-0 pb-4">
                <a href="./add_Vehicle_s.html">Add Vehicle Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pl-4 ">  <!-- (Add when hide delete button) pb-4-->
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <button type="button" class="btn btn-secondary btn-lg btn-block">Delete Schedule</button>         

            </div>
            <div class="col-lg-4 pl-5 ">  <!-- (Add when hide delete button) pb-4-->
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <a href="./add_Vehicle_s.html" class="link-warning pl-5">Add Vehicle Schedule</a>


            </div>
        </div>

        <!--ROW-8 Search by Vehicle route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2  pt-4 pb-3">
                <!-- <a href="./add_Vehicle_s.html">Add Vehicle Schedule</a> -->
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pl-4 ">  <!-- (Add when hide delete button) pb-4-->
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <span>Schedule is not found</span>
            </div>
        </div>

        <!--ROW-9 Search by Vehicle route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2  pt-4 pb-4">
                <!-- <a href="./add_Vehicle_s.html">Add Vehicle Schedule</a> -->
            </div>
        </div>
        <!--ROW-10 Search by Vehicle route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2  pt-4 pb-4">
                <!-- <a href="./add_Vehicle_s.html">Add Vehicle Schedule</a> -->
            </div>
        </div>
        <!--ROW-11 Search by Vehicle route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2 pt-0 pb-3">
                <!-- <a href="./add_Vehicle_s.html">Add Vehicle Schedule</a> -->
            </div>
        </div>
    </form>
</body>

</html>