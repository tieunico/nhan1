<?php
    $servername="localhost";
    $username="root";
    $password="";
    //$db="whatdoesthefoxsay";

    //create connection for database
    $conn= new mysqli($servername, $username, $password, $db);
    //check connection
    if(mysqli_connect_error()){
        die("Connection failed: ".mysqli_connect_error());
    }
    echo"Connect successfully!";
    echo "<br>";

    //Create Database
    $sql="CREATE DATABASE whatdoesthefoxsaid";
    if($conn->query($sql)===TRUE){
        echo "Database created successfully";
        echo "<br>";
    }
    else {
        echo "Failed creating database";
        echo "<br>";
    }
    //create table inside database "testDB
    //Table for Bay 1 breaker
    $bay1 = "CREATE TABLE breaker15(
        id          int AUTO_INCREMENT PRIMARY KEY,
        status      VARCHAR(5),
        Voltage     FLOAT(5,3),
        Current     FLOAT(5,3),
        Power       FLOAT(5,3),
        Reg_time    TIMESTAMP
    )";

    //Check if table were created successfully
    if (mysqli_query($conn,$bay1)){
        echo "Table bay1 created successfully";
    } else {
        echo "Error creating table: " . mysqli_query($conn,$bay1);
    }
    $conn->close();

 ?>
