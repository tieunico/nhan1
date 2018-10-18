<?php
$servername="localhost";
$username="root";
$password="";
$db="testDB";

$conn = new mysqli ($servername, $username, $password, $db);

//Check connection
if(mysqli_connect_error()){
    die("Connection failed: ".mysqli_connect_error());
}
echo"Connect successfully!";
echo "<br>";
 ?>
