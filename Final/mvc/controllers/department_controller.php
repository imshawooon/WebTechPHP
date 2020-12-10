<?php
	require_once 'models/db_connect.php';

	
	function getalldepartment()
	{
		
		$query="select * from departments";
		$result=get($query);
		return $result;
	}
	
	
	
?>