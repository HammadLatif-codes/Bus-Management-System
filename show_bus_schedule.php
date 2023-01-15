

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
    <title>Show Bus Schedule</title>
</head>
<body>
<h2 class="text-center">Vehicle Schedule</h2>
</body>
<?php
    // Connect to the database
    $conn = mysqli_connect("localhost","root","","bus");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Fetch data from the "vehicle_schedule" and "location" tables
    $result = mysqli_query($conn, "SELECT vs.scheduleID, vs.departureTime, loc.pickUpLocation,loc.dropOffLocation,
                                                          v.vehicleNO,v.vehicleType
                                                          FROM vehicle_schedule vs
                                                          LEFT JOIN location loc
                                                          ON vs.locID = loc.locID
                                                          LEFT JOIN vehicle v
                                                          ON vs.vehicleID = v.vehicleID");   
    

                                                                               
    echo "<table class='table table-bordered table-hover'>
              <thead class='thead-dark'>
                <tr>
                  <th>Departure Time</th>
                  <th>Starting Location</th>
                  <th>Ending Location</th>
                  <th>Vehicle Number</th>
                  <th>Vehicle Type</th>
                </tr>
              </thead>
              <tbody>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                  <td>".$row["departureTime"]."</td>
                  <td>".$row["pickUpLocation"]."</td>
                  <td>".$row["dropOffLocation"]."</td>
                  <td>".$row["vehicleNO"]."</td>
                  <td>".$row["vehicleType"]."</td>
              </tr>";
    }
    echo "</tbody></table>";
    mysqli_close($conn);
?>
