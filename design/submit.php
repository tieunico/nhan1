<html>
<title></title>
<style>
table{
    border-collapse: collapse;
    width: 100%;
    color: blue;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
}
th{
    background-color: purple;
    color: white;
}
tr:nth-child(even){
    background-color: #f2f2f2;
}
</style>
<head>
</head>
<body>
<?php
    $x=$_POST['current'];
    $y=$_POST['voltage'];
    $z=$_POST['po'];
    $s=$_POST['status'];

    $servername ="localhost";
    $username ="root";
    $password ="";
    $db ="testDB";

    //Create Connection to testDB
    $conn = new mysqli ($servername, $username, $password, $db);

    //Check connection
    if(mysqli_connect_error()){
        die("Connection failed: ".mysqli_connect_error());
    }
    echo"Connect successfully!";
    echo "<br>";

    //Insert data into table
    $sql ="INSERT INTO breaker1 (current, voltage, po, status)
    VALUE ($x,$y,$z,$s) ";

    //Check if data were able to insert into table successfully
    if($conn->query($sql)==TRUE){
        echo "New data created successfully";
    } else {
        echo "Error " .$sql . "<br>" . $conn->error;
    }
    //Display selected data in table form
    $sql = "SELECT id,current, voltage, po, status, reg_time FROM breaker1 order by id desc ";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result)>0){
        echo "<table><tr><th>ID</th><th>Current</th><th>Voltage</th>
        <th>Power</th><th>Status</th><th>Register Time</th>
        </tr>";

        while($row=mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row['id']."</td><td>".$row["current"]."</td>
            <td>".$row["voltage"]."</td><td>".$row["po"]."</td>
            <td>".$row["status"]."</td><td>".$row['reg_time']."</td></tr>";
            echo "<br";
        }
            echo "</table>";
    }else{
        echo "0 result!";
    }


    $conn->close();
?>
</body>
</html>
