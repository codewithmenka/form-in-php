<?php

include 'conn.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $number = $_POST['number'];
    $password = $_POST['password'];




    $query ="INSERT INTO `form3`(`name`, `fathername`, `number`, `password`) VALUES ('$name','$fathername','$number','$password')";
    $insert = mysqli_query($conn, $query);


    if ($insert) {
        echo "<script>alert('Data Sent Successfully');</script>";
    } else {
        echo "<script>alert('Data Sending Failed: " . mysqli_error($conn) . "');</script>";  
    }

}                                   

    mysqli_close($conn);


?>
