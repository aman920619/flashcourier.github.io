<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="flash_db";

    $con=mysqli_connect($servername,$username,$password,$database);

    if(!$con){

        echo"Error in DB Connection";
        die();
    }
?>