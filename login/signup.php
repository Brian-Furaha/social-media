<?php
session_start();

	include("classes\conn.php");
	include("classes\signup.php");

	$firstname = "";
	$lastname = "";
	$email = "";
	$gender = "";

	if ($_SERVER['REQUEST_METHOD'] == "POST") 
	{
		$signup = new Signup();
		$result= $signup->eval($_POST);

		if ($result != "") 
		{
			echo "<div style ='text-align: center;font-size: 20px;colour: white;background_color: grey;'>";
			echo "The following errors occured: <br>";
			echo $result;
			echo "</div>";
		}else
		{
			header("Location: login.php");
			die;
		}

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
	}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
</head>

	<style type="text/css">
		
			#bar{

		height:50px;
		background-color: #405d9b;
		color: azure;
		padding: 4px;
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

		#login {
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

		#gen{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 90px;
		}
	</style>

<body style="font-family: tahoma;background-color: whitesmoke;">

	<div id="bar">
		
		<div style="font-size: 40px;">MyPortfolio
		<div id="login" style="text-align: center;font-size: 20px;padding: auto;"><a href="login.php">Signup</a></div></div>
	</div>

	
	<div id="box">
		<form method="post">
			<div id="tt">Signup to MyPortfolio </div>

			<input id="text" type="text" name="firstname" value="<?php echo $firstname ?>" placeholder="First name"><br><br>
			<input id="text" type="text" name="lastname" value="<?php echo $lastname ?>" placeholder="Last name"><br><br>
			<input id="text" type="text" name="email" value="<?php echo $email ?>" placeholder="Enter email"><br><br>
			<div style="text-align: left;">Gender:
				<select id="gen" name="gender">
				<option><?php echo $gender ?></option>
				<option>Male</option>
				<option>Female</option>
				<option>Other</option>
			</select>
			</div><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			<input id="text" type="password" name="password2" placeholder="Retype Password"><br><br>

			<input id="button" type="submit" value="Signup"><br>
		</form>
	</div>
</body>
</html>