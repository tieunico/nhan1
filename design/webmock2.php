<html>
<head>
  <meta name"viewport" content="width=device-width, initial-scale=1">
  <style>
  .container {
  position: relative;
  width: 50%;
  }
  .container img{
    width: 200%;
    height: auto;
  }
  .container .btn0{
    position: absolute;
    height: 70px;
    width: 35px;
    top : 47%;
    left: 32%;
    background-color: green;
    color: red;
    border-radius: 5px;
    font-size: 12px;
    text-align: center;
    opacity: 0.5;
  }
  .container .btn1{
    position: absolute;
    height: 70px;
    width: 35px;      --50px;
    top: 47%;         --47%;
    left: 47.5%;      --47%;
    background-color: green; --white;
    color: black;
    border-radius: 5px;
    text-align: center;
    opacity: 0.75;
    opacity: 0.5;
    --font-size
  }
  .container .btn2{
    position: absolute;
    height: 70px;
    width: 35px;
    top: 47%;
    left: 63%;
    background-color: red;
    color: black;
    border-radius: 5px;
    text-align: center;
    opacity: 0.5;
  }
  .container .btn3{
    position: absolute;
    height: 70px;
    width: 35px;
    top: 47%;
    left: 78.5%;
    background-color: green;
    color: black;
    border-radius: 5px;
    text-align: center;
    opacity: 0.5;
  }
  .container .btn4{
    position: absolute;
    height: 70px;
    width: 35px;
    top: 47%;
    left: 122%;
    background-color: green;
    color: black;
    border-radius: 5px;
    text-align: center;
    opacity: 0.5;
  }
  .container .btn_aux{
    position: absolute;
    height: 70px;
    width: 35px;
    top: 17%;
    left: 132%;
    background-color: green;
    color: black;
    border-radius: 5px;
    text-align: center;
    opacity: 0.5;
  }
  .container .btn6{
    position: absolute;
    height: 70px;
    width: 35px;
    top: 47%;
    left: 137.5%;
    background-color: green;
    color: black;
    border-radius: 5px;
    text-align: center;
    opacity: 0.5;
  }
  .container .btn7{
    position: absolute;
    height: 70px;
    width: 35px;
    top: 47%;
    left: 152.5%;
    background-color: green;
    color: black;
    border-radius: 5px;
    text-align: center;
    opacity: 0.5;
  }
  .container .btn89{
    position: absolute;
    height: 70px;
    width: 35px;
    top: 47%;
    left: 168.5%;
    background-color: green;
    color: black;
    border-radius: 5px;
    text-align: center;
    opacity: 0.5;
  }
  .container .btn_m1{
    position: absolute;
    height: 30px;
    width: 50px;
    top: 10%;
    left: 12.5%;
    background-color: green;
    color: black;
    border-radius: 5px;
    text-align: center;
    opacity: 0.5;
  }
  .container .btn_m2{
    position: absolute;
    height: 70px;
    width: 35px;
    top: 17%;
    left: 22%;
    background-color: green;
    color: black;
    border-radius: 5px;
    text-align: center;
    opacity: 0.5;
  }
  .container .btn_tie{
    position: absolute;
    height: 70px;
    width: 35px;
    top: 17%;
    left: 89%;
    background-color: green;
    color: black;
    border-radius: 5px;
    text-align: center;
    opacity: 0.5;
  }
  .container .textspan{
      position: relative;
      top: 55%;
      left: 15%;
      width:100px;
      margin: auto;
      border: 3px solid #73AD21;
  }
  </style>
</head>
  <body>

        <?php
        /*
        $servername="localhost";
        $username="root";
        $password="";
        $db="testDB";
        //create connection to Database
        $conn= mysqli_connect($servername,$username,$password,$db);
        //check connection
        if(mysqli_connect_error()){
            die("connection failed: ". mysqli_connect_error());
        }
            echo "Connection successfully!";
            echo "<br>";

        //Select data from breaker1
        $sql="SELECT id, current, po, voltage, status, reg_time FROM breaker1";
        $result=$conn->query($sql);

        if(mysqli_num_rows($result)>0){
            echo "<table><tr><th>ID</th><th>Current</th><th>Voltage</th>
            <th>Power</th><th>Status</th><th>Register Time</th>
            </tr>";

            while($row=mysqli_fetch_assoc($result)){
                echo "<tr><td>".$row['id']."</td><td>".$row["current"]."</td>
                <td>".$row["voltage"]."</td><td>".$row["po"]."</td>
                <td>".$row["status"]."</td><td>".$row['reg_time']."</td></tr>";
            }
                echo "</table";
        }else{
            echo "0 result!";
        }
        */
        ?>

      <div class="container">

          <img src="oneLineMockup-noButton.svg">

          <button class="btn0" id="select0"   onclick="colorchange('select0')"> </button>      <!-- bay 1 button-->
          <button class="btn1" id="select1"  onclick="colorchange('select1')"></button>      <!-- bay 2 button-->
          <button class="btn2"  id="select2"   onclick="colorchange('select2')"></button>      <!-- bay 3 button-->
          <button class="btn3"  id="select3"   onclick="colorchange('select3')"></button>      <!-- bay 4 button-->
          <button class="btn4"  id="select4"   onclick="colorchange('select4')"></button>      <!-- bay 5 button-->
          <button class="btn_aux" id="select5"   onclick="colorchange('select5')"></button>   <!-- aux button-->
          <button class="btn6"  id="select6"   onclick="colorchange('select6')"></button>      <!-- bay 6 button-->
          <button class="btn7"  id="select7"   onclick="colorchange('select7')"></button>      <!-- bay 7 button-->
          <button class="btn89" id="select8"   onclick="colorchange('select8')"></button>     <!-- bay 8&9 button-->
          <button class="btn_m1"  id="select9"   onclick="colorchange('select9')"></button>    <!-- main 1 button-->
          <button class="btn_m2"  id="select10"   onclick="colorchange('select10')"></button>    <!-- main 2 button-->
          <button class="btn_tie" id="select11"   onclick="colorchange('select11')"></button>   <!-- tie button-->

        <div class="textspan"><textarea>sdfsdfdsfs</textarea></div>
      </div>
      <script>
          function colorchange(id){
            var background=document.getElementById(id).style.backgroundColor;
            if(background=="red"){
              document.getElementById(id).style.background="green";
            }
            else {
              document.getElementById(id).style.background="red";
            }
          }
      </script>
  </body>
</html>
