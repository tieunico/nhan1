<?php
    $x=$_POST['button1'];

    $username="localhost";
    $servername="root";
    $password="";
    $db="testDB";

    //connect to database
    $conn=mysqli_connect($username,$servername,$password,$db);
    //check connection
    if(mysqli_connect_error()){
        die ("Connection failed ".mysqli_connect_error());
    }else {
        echo "Connect successfully!";
    }
    //query into Database
    $sql="INSERT into breaker1 (status) values ($x)";
    $result=mysqli_query($conn,$sql);

    $sql1="SELECT status FROM breaker1";
    $run_query_sql1=mysqli_query($conn,$sql1);

    if(mysqli_num_rows($run_query_sql1)>0){
        //header('location:htmlmockup.html');
    }else {
        echo "return 0 result!";
    }


    $conn->close();
 ?>
