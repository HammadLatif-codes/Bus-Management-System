<?php


?>

<!DOCTYPE html>
<head>
    <title>University Bus Management System</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- <link rel="stylesheet" href ="admin_sc3.css"> </link>  -->
</head>
<style>
    hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid white;
}
</style>
    <body class="p-3 mb-2 bg-dark text-white ">
        <div class="d-flex justify-content-center pt-3"><h1 >University Bus Management System</h1></div>
        <div class=" d-flex justify-content-center pt-5"><h2>Admin</h2></div>
        <containter>
            <div class="row ">
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
                <a href="add_bus_schedule.php">
                <div class="col-4 pt-3 col-sm-4 col-md-6 col-lg 12"> <button class="btn btn-secondary btn-lg btn-block" >Add Bus Schedule</button></div> 
                </a>
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
                <div class="col-4 pt-3 col-sm-4 col-md-6 col-lg 12"><button class="btn btn-secondary btn-lg btn-block">View Bus Schedule</button></div> 
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
                <div class="col-4 pt-3 col-sm-4 col-md-6 col-lg 12"><button class="btn btn-secondary btn-lg btn-block">Search Bus Schedule</button></div> 
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
                <div class="col-4 pt-3 col-sm-4 col-md-6 col-lg 12 "><button class="btn btn-secondary btn-lg btn-block ">Update Bus Schedule</button></div>
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
                <div class="col-4 pt-3 col-sm-4 col-md-6 col-lg 12"> <button class="btn btn-secondary btn-lg btn-block">Delete Bus Schedule</button></div>
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
                <div class="col-4 pt-3 col-sm-4 col-md-6 col-lg 12 "> <button class="btn btn-secondary btn-lg btn-block">View Requisition</button></div> 
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
                <div class="col-4 pt-3 col-sm-4 col-md-6 col-lg 12"><button class="btn btn-secondary btn-lg btn-block ">Give Requisition Response</button></div>
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
                <div class="col-4 pt-3 col-sm-4 col-md-6 col-lg 12"> <button class="btn btn-secondary btn-lg btn-block">View Bus Status</button></div> 
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
                <div class="col-4 pt-3 col-sm-4 col-md-6 col-lg 12"><button class="btn btn-secondary btn-lg btn-block">Search Bus Status</button></div>
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
                <div class="col-4 pt-3 col-sm-4 col-md-6 col-lg 12"><button class="btn btn-secondary btn-lg btn-block" >View Complaints</button></div> 
                <div class="col-4 col-sm-4 col-md-6 col-lg 12"></div>
            </div>

            <div class="row">
                <div class="col-5 col-sm-4 col-md-6 col-lg 12"></div>
                <div class="col-2 pt-5 col-sm-4 col-md-6 col-lg 12"><button class="btn btn-secondary btn-block btn-md">Log out</button></div> 
                <div class="col-5 col-sm-4 col-md-6 col-lg 12"></div>
            </div>
            
              
            
            
             
            
              
            
        </containter>
        <p>
            <hr/>
         </p>
        <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <!-- <div class="col-md-6 mt-md-0 mt-3">
  
          Content
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns to organize your footer content.</p>
  
        </div> -->
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <!-- <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li> -->
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase"></h5>
  
          <ul class="list-unstyled">
            <li>
              <!-- <a href="#!">Link 1</a> -->
            </li>
            <!-- <li>
              <a href="#!">Link 2</a>
            </li> -->
            <!-- <li>
              <a href="#!">Link 3</a>
            </li> -->
            <!-- <li>
              <a href="#!">Link 4</a>
            </li> -->
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2022 Copyright:
      <a href="/alishahzad82313@gmail.com">Ali & Hammad</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
 
 
    </body>