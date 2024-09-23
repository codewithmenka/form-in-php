<?php

    include 'conn.php';
    
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
    
        // Prepare the SQL query
        $query = "INSERT INTO `form` (`name`, `phone`) VALUES ('$name', '$phoneNumber')";
    
        // Execute the query
        $insert = mysqli_query($con, $query);
    
        // Check if the query was successful
        if ($insert) {
            echo "<script>alert('Data Sent Successfully');</script>";
        } else {
            echo "<script>alert('Data Sending Failed: " . mysqli_error($con) . "');</script>";
        }
    }
    
    // Close the database connection
    mysqli_close($con);


?>



