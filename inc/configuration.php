<?php 

/**
* 
*/
class Sql
{
	public $conn;

	function __construct()
	{
		return $this->conn = mysqli_connect("127.0.0.1", "root", "secret", "hcode_shop");
	}

	public function query($string_query)
	{
		return mysqli_query($this->conn, $string_query);
	}

	function __destruct()
	{
		mysqli_close($this->conn);
	}

}

?>