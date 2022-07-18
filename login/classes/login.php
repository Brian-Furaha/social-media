<?php
/*
 	include("classes\conn.php");
	include("functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST") 
	{
		// something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) 
		{
			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";

			$result = mysqli_query($con, $query);
			if($result)
			{

				if ($result && mysqli_num_rows($result) > 0)
				{
			
					$user_data = mysqli_fetch_assoc($result);
					
					if ($user_data['password'] === $password) 
					{
						
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			echo "Wrong username or password!";
		}else
		{
			echo "Wrong username or password!";
		}
	}

	function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if ($result && mysqli_num_rows($result) > 0)
		{
			
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("location: login.php");
	die;
*/
class Login
{
	
	private $error = "";

	public function eval($data)
	{


		$email = addslashes($data['email']);
		$password = addslashes($data['password']);

		$query = "select * from users where email = '$email' limit 1";

		//echo "$query";
		$DB = new DB();
		$result = $DB->read($query);

		if ($result) 
		{
			$row = $result[0];

			if ($password == $row['password']) 
			{
				$_SESSION['userid'] = $row['userid'];
			}else
			{
				$this->error .= "Incorrect email or password!<br>";
			}
		}else
		{
			$this->error .= "Incorrect email or password!<br>";
		}
		
		return $this->error;
		
	}

	public function check_login($id)
	{

		$query = "select userid from users where userid = '$id' limit 1";

		//echo "$query";
		$DB = new DB();
		$result = $DB->read($query);

		if($result) 
		{
			return true;
		}
		
		return false;
	}
}