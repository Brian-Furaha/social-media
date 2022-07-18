<?php

/**
 * 
 */
class User
{
	private $error = "";


	public function get_data($id)
	{
		
		$query = "select * from users where userid = '$id' limit 1";

		$DB = new DB();
		$result = $DB->read($query);


		if($result) 
		{

			$row = $result[0];
			//var_dump($row);
			//var_dump($result);
			return $row;
		}else
		{
			//var_dump($result);
			return false;
		}
	}
}