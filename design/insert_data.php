<html>
    <head>
        <title></title>
    <style>
    </style>
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "testDB";
            //Create connection to Database
            $conn = new mysqli( $servername = "localhost",
                                $username = "root",
                                $password = "",
                                $db = "testDB");
            //Check connection
            if (mysqli_connect_error()) {
                die("Connection failed " . mysqli_connect_error());
            }
            echo "Connect successfully!";
            echo "<br>";
            //Insert Data into database testDB
            $breaker2_data = "INSERT INTO breaker2 (current, po, voltage)
            VALUES ('1.1', '50.1', '60.1');";
            $breaker2_data .="INSERT INTO breaker2 (current, po, voltage)
            VALUES ('2.1', '20.1', '70.1');";
            $breaker2_data .="INSERT INTO breaker2 (current, po, voltage)
            VALUES ('3.1', '30.1', '80.1');";
            $breaker2_data .="INSERT INTO breaker2 (current, po, voltage)
            VALUES ('4.1', '40.1', '90.1')";
            //check if data were inserted
            if ($conn->multi_query($breaker2_data)==TRUE){
                echo "New data recorded successfully! <br>";
            }else {
                echo "Error: ".$breaker2_data. "<br>" .$conn->error;;
            }

            $conn->close();
        ?>
    </body>
</html>
