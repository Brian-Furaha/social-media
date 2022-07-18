<?php
//include("functions.php");
/*
 // something was posted

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$user_name = $_POST['user_name'];
		$gender = $_POST['gender'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];

		if ($password != $password2) 
		{
			echo "Password does not match!";
		}
		if (!empty($first_name) &&!empty($last_name) &&!empty($user_name) && !empty($gender) && !empty($password) && !is_numeric($user_name)) 
		{
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,first_name,last_name,user_name,gender,password) values ('$user_id','$first_name','$last_name','$user_name','$gender','$password')";

			$data
			header("Location: Login.php");
			die;
		}else
		{
			echo "Please enter valid information!";
		}
 */


class signup
{
	private $error = "";
	//evaluate data

	private function random_num($length)
	{

	$text = "";
	if ($length < 5) 
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		// code...

		$text .= rand(0,9);
	}

	return $text;
	}
	public function eval($data)
	{
		foreach ($data as $key => $value) 
		{
			if (empty($value)) 
			{
				$this->error .= $key . " is empty!<br>";
			}

			if ($key == "firstname") 
			{
				if(is_numeric($value) || strstr($value, " ")) 
				{
				$this->error .= " First name cannot be a number or have spaces!<br>";
				}
			}

			if ($key == "lastname") 
			{
				if(is_numeric($value) || strstr($value, " ")) 
				{
				$this->error .= " Last name cannot be a number or have spaces!<br>";
				}
			}
		
			if ($key == "email") 
			{
				if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) 
				{
					$this->error .= " Invalid email address!<br>";
				}
				
			}
			
			
		}
		if ($this->error == "")
		{
			// no error
			$this->new($data);
		}else
		{
			return $this->error;
		}
	}

	//create new user
	public function new($data)
	{

		$firstname = ucfirst($data['firstname']);
		$lastname = ucfirst($data['lastname']);
		$email = $data['email'];
		$gender = $data['gender'];
		$password = $data['password'];
		//$encrypted_pwd = md5($password);
		$password2 = $data['password2'];

		$url_address = "@" . strtolower($firstname) . "." . strtolower($lastname);
		$username = strtolower($firstname) . " " . strtolower($lastname);
		$userid = $this->random_num(19);
		$query = "insert into users 
		(userid,firstname,lastname,email,gender,password,url_address,username) 
		values 
		('$userid','$firstname','$lastname','$email','$gender','$password','$url_address','$username')";

		//echo "$query";
		$DB = new DB();
		$DB->save($query);
	}

}