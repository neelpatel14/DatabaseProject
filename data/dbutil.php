<?php

class DbUtil{
	public static $loginUser = "CS4750mih7gf";
	public static $loginPass = "---------";
	public static $host = "stardock.cs.virginia.edu"; // DB Host
	public static $schema = "CS4750mih7gf"; // DB Schema

	public static function loginConnection(){
		$db = new mysqli(DbUtil::$host, DbUtil::$loginUser, DbUtil::$loginPass, DbUtil::$schema);

		if($db->connect_errno){
			echo("Could not connect to db");
			$db->close();
			exit();
		}

		return $db;
	}

}
?>
