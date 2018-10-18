<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="phpmyadmin";

    $db= new mysqli($servername,$username,$password,$db);

    if (mysqli_connect_error()){
      die ("Database connection failed: ". mysqli_connect_error());
    }
    echo "Connect successfully";

 ?>
