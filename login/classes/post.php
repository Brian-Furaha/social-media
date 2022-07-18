<?php

/**
 * 
 */
class Post
{
	private $error = "";


	private function random_num($length)
	{

	$text = "";
	if($length < 5) 
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for($i=0; $i < $len; $i++) { 
		// code...

		$text .= rand(0,9);
	}
	return $text;
	}

	//$userid = $this->random_num(19);
	public function create_post($userid, $data)
	{
		
		if(!empty($data['post'])) 
		{
			$post = addslashes($data['post']);
			$postid = $this->random_num(19);

			$query = "insert into post 
			(userid,postid,post) 
			values 
			('$userid','$postid','$post')";

			$DB = new DB();
			$DB->save($query);

		} else 
		{
			$this->error .= "Post is blank!";
		}
		
		return $this->error;
	}
}