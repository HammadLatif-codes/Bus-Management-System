<!DOCTYPE html>

<head>
    <title>View Vehicle Schedule</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="p-3 mb-2 bg-dark text-white">
    <h1 class="d-flex justify-content-center">University Bus Management System</h1>
    <h2 class="d-flex justify-content-center pb-4 pt-2">View Vehicle Schedule</h2>
    <form>

        <!-- ROW-1 Search by bus number -->
        <div class="form-group row pt-4 mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <!-- setting mb-0 to remove space b/w rows to make admin session block-->
            <div class="col-lg-2    ">
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
            <div class="col-lg-2    ">
                <a href="./add_bus_s.html" class="link-warning">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pb-4 pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <p>Click the button to see vehicle schedule</p>

            </div>
            <div class="col-lg-1  ">
            </div>
            <div class="col-lg-2    pt-0 pb-4">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
        </div>

        <!--ROW-3 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left and right of col-2-->
            </div>
            <div class="col-lg-2    pb-4">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pl-4 pb-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <!-- <p>Use any of the following search bar </p> -->
            </div>
            <div class="col-lg-1 ">
            </div>
            <div class="col-lg-2    pt-0 pb-4">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
        </div>

        <!--ROW-4 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2    pb-3">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pl-4 pb-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->

                <button type="button" class="btn btn-secondary btn-lg btn-block">View Bus Schedule</button>         
               </div>
            <div class="col-lg-1 ">
            </div>
            <div class="col-lg-2    pt-0 pb-4">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
        </div>

        <!--ROW-5 Search by bus route -->
        <div class="form-group row mb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2    pt-0 pb-3">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pb-4 pl-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <button type="button" class="btn btn-secondary btn-lg btn-block">View Van Schedule</button>      

            </div>
            <div class="col-lg-1 ">
            </div>
            <div class="col-lg-2    pt-0 pb-4">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
        </div>

        <!--ROW-6 Search by bus route -->
        <div class="form-group row mb-0 pt-0 pb-0 ">
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space to left of col-2-->
            </div>
            <div class="col-lg-2    pt-0 pb-3">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
            <div class="col-lg-1 pt-0">
                <!-- empty div to add space b/w col-2 and col-4-->
            </div>
            <div class="col-lg-4 pl-4 pb-4">
                <!-- pd to separate col-2 from under row AND pl to push col-2 to right-->
                <button type="button" class="btn btn-secondary btn-lg btn-block">View Carry Schedule</button>      

            </div>
            <div class="col-lg-1  ">
            </div>
            <div class="col-lg-2    pt-0 pb-4">
                <a href="./add_bus_s.html">Add Bus Schedule</a>
            </div>
        </div>
    </form>
</body>

</html>