<?php 
 function redirect(){
    header("location:admin.php",true,302);
     die();
 }  
 function direct(){
    header("location:admin.php",true,302);
    die();
}     

class Technical_layer{
   

    function add_bs_ToDB($d_time, $starting_loc, array $route, $vehicleNumber, $vehicleType ) {
        $conn = mysqli_connect('localhost', 'root', '', 'bus');

    
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }   
        $route_string = implode(",", $route);


        $sql = "INSERT INTO vehicle (vehicleNO, vehicleType)
        VALUES ('$vehicleNumber', '$vehicleType')";
    
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        $sql = "INSERT INTO location (pickUpLocation, dropOffLocation) VALUES ('$starting_loc', '$route_string')";
         if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        // Insert the data into the table
        $sql = "INSERT INTO vehicle_schedule (departureTime,vehicleID,locID)VALUES ('$d_time',LAST_INSERT_ID(),LAST_INSERT_ID())";
         if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        // Close the connection
        // mysqli_close($conn);
        redirect();
        
    }
    
    function add_requisition_ToDB($d_time, $starting_loc,array $route, $a_time, $date, $req)
    {
        /////////////////////////////// addd query
        echo $d_time ;
        echo $starting_loc;
        echo $route[0] ;
        echo $a_time;
        echo $date;
        echo $req;

             $conn = mysqli_connect('localhost', 'root', '', 'bus');

    
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }   
        $r_string = implode("", $route);

        $sql = "INSERT INTO location (pickUpLocation, dropOffLocation) VALUES ('$starting_loc', '$r_string')";
         if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        $sql = "INSERT INTO requisition (request, departure_time,reqDate,arrivalTime,locID)
        VALUES ('$d_time', '$a_time','$req','$date',LAST_INSERT_ID())";
    
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        
    
        // Insert the data into the tabl


    }

    function add_user_ToDB($id, $password, $designation )
    {
        ///////////////////////////// addd query
        // 
        $conn = mysqli_connect('localhost', 'root', '', 'bus');

    
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }   


        $sql = "INSERT INTO user (username, designation,password) VALUES ('$id', '$designation','$password')";
    
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

        }
        direct();
    }

    // function add_complaint_ToDB($cID,  $complaint )
    // {
    //     /////////////////////////////// addd query
    //     // echo $cID;
    //     // echo $user_ID;
    //     // echo $complaint;
    //      $conn = mysqli_connect('localhost', 'root', '', 'bus');

    
    //     // Check connection
    //     if (!$conn) {
    //         die("Connection failed: " . mysqli_connect_error());
    //     }   


    //     $sql = "INSERT INTO complaints (complaintIDuser, complaint) VALUES ('$cID', '$complaint')";
    
    //     if (mysqli_query($conn, $sql)) {
    //         echo "New record created successfully";
    //     } else {
    //         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }
    // }

}

?>