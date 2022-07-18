<?php 
	session_start();

	include("classes\conn.php");
	include("classes\login.php");

	$email = "";
	$password = "";

	if ($_SERVER['REQUEST_METHOD'] == "POST") 
	{
		$login = new Login();
		$result= $login->eval($_POST);

		if ($result != "") 
		{
			echo "<div style ='text-align: center;font-size: 20px;colour: white;background_color: grey;'>";
			echo "The following errors occured: <br>";
			echo $result;
			echo "</div>";
		}else
		{
			header("Location: index.php");
			die;
		}

		$email = $_POST['email'];
		$password = $_POST['password'];
	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyPortfolio | Login</title>
</head>

<style type="text/css">
	
	#bar{

		height:50px;
		background-color: #405d9b;
		color: azure;
		padding: 4px;
		text-align: left;
	}

	#text{

			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}

	#button{

			padding: 10px;
			font-size: 20px;
			width: 400px;
			color: black;
			background-color: #405d9b;
			border: none;
			border-radius: 10px;
			font-weight: bold;
		}

	#box{

			background-color: beige;
			margin: auto;
			width: 400px;
			padding: 20px;
			margin-top: 50px;
			text-align: center;
		}

	#signup {
			background-color: lightgreen;
			width: 60px;
			text-align: center;
			padding: 4px;
			border-radius: 4px;
			float: right;
		}

	#tt{
			font-size: 20px; 
			margin: 10px; 
			color:black;
			text-align: center;
		}

</style>

<body style="font-family: tahoma;background-color: whitesmoke;">

	<div id="bar">
		
		<div style="font-size: 40px;">MyPortfolio
		<div id="signup" style="text-align: center;font-size: 20px;padding: auto;"><a href="signup.php">Signup</a></div></div> 
	</div>

	<div id="box">
		<form method="post">
			<div id="tt">Login to MyPortfolio </div>

			<input id="text" type="text" name="email" value="<?php echo $email ?>" placeholder="Enter email"><br><br>
			<input id="text" type="password" name="password" value="<?php echo $password ?>" placeholder="Password" required><br><br>

			<input id="button" type="submit" value="Login">

			<br><br>
		</form>
	</div>
</body>
</html>
