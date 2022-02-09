<!DOCTYPE html>
<html>
<head>
	<style>
		form{
			background-color: purple;
			color:white;
			box-shadow: 10px 15px 5px rgba(0,0,0,0.3);
			width: 300px;
			height: 210px;
			padding: 20px;
			margin-left: 400px;
			margin-top:200px;
			text-transform: capitalize;
			font-size: 20px;


		}
		input[type="submit"]{
			width: 200px;
			padding:7px;
			background-color: green;
			color: white;
			font-size: 19px;


		}


	</style>




	<title>hello coding lovers:::</title>
</head>
<body>
<form method="post">
	<label>first number:</label><br>
	<input type="number" name="num1"><br><br>
	<label>second number:</label><br>
	<input type="number" name="num2"><br><br>

	<input type="submit" name="submit" value="submit" ><br><br>

	<?php

	if (isset($_POST['submit'])) {
	$num1 =	$_POST['num1'];
	$num2 = $_POST['num2'];
	$sum = $num1 + $num2;
	echo "the  sum of two numbe is::"." ". $sum;
	
	 } 






	 ?>
	



</form>


</body>
</html>