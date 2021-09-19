<?php 
    $db = mysqli_connect("localhost","root","","covid");

    if(!$db)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
