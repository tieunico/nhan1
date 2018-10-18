<html>
	<head>
		<title></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>

		.button {
    background-color: red; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: red;
    color: black;
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: red;
    color: white;
}

.button2 {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

.button3 {
    background-color: white;
    color: black;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;
}




		</style>

	</head>
		<body>

			<div id="demo"></div>
			<!--<form action="test.php" method="POST">-->
				<input  id="bay1" onclick="colorchange('bay1')" type="button" name="button1" class="button button1" value="0"></input>
				<button id="bay2" class="button button2">Button</button>
			<!--</form>-->
			<script>
			$(document).ready(function(){
				$('#bay2').click(function(){
					if($('#bay1').val()==1){
						$('#bay1').val('5');
					}else if($('#bay1').val()==0){
						$('$bay1').val('10');
					}else{
						$('$bay1').val('2');
					}
				});
			});

			</script>

			<script>
	            function colorchange(id){
	              //var background =document.getElementById(id).style.background;
				  //var changeValue=document.getElementById(bay1);
				  var changeValue=document.getElementById("bay1").value;
				  //document.getElementById("demo").innerHTML=changeValue;
	              if(changeValue=="0"){
					document.getElementById(id).style.background="green";
	                document.getElementById(id).value="1";
	              }
	              else {
					document.getElementById(id).style.background="red";
	                document.getElementById(id).value="0";
	              }
	            }
	        </script>

		</body>
</html>
