<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
</head>
<body>
	<!-- form[method(get&post) && action] -->
	<?php
		if (isset($_GET["submit"])){
			if (!empty($_GET["username"])){
				echo $_GET["username"];	
			}else{
				echo "invalid";
			}


		 	// print_r($_GET);
		}
		if (isset($_POST["multi"])){
			if (!empty($_POST["num1"]) && !empty($_POST["num2"])){
				echo multi($_POST["num1"],$_POST["num2"]);		
			}else{
				echo "invalid";
			}
		}else if (isset($_POST["div"])){
			if (!empty($_POST["num1"]) && !empty($_POST["num2"])){
				echo divi($_POST["num1"],$_POST["num2"]);		
			}else{
				echo "invalid";
			}
		}
		function multi($num1,$num2){
			return $num1*$num2;
		}
		function divi($num1,$num2){
			return $num1/$num2;
		}
	?>
	<form method="" action="">
		<input type="text" name="username"><br>
		<input type="submit" name="submit" value="Send">
	</form>
	<br>
	<br>
	<form method="POST" action="">
		<input type="number" name="num1">
		<input type="number" name="num2">
		<input type="submit" name="multi" value="multi">
		<input type="submit" name="div" value="div">
		
	</form>

</body>
</html>