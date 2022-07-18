<?php 
/**
 * connect to database, save and read. 
 */
class DB
{
	private $dbhost = "localhost";
	private $dbuser = "root";
	private $dbpass = "";
	private $dbname = "myport_db";

	function con()
	{
		$conn = mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
			return $conn;		
	}

	function read($query)
	{
		$connn = $this->con();
		$result = mysqli_query($connn,$query);
		if(!$result) 
		{
			return false;
		} else 
		{
			$data = false;
			while ($row = mysqli_fetch_assoc($result)) 
			{
				$data[] = $row;
			}
			return $data;
		}
		
	}
	
	function save($query)
	{
		$connn=$this->con();
		$result = mysqli_query($connn,$query);

		if(!$result) 
		{
			return false;
		} else 
		{
			return true;
		}
	}
}