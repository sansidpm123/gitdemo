<?php
	require "sqlconfig.php";
	class general
	{
	    function insert_allrows($table,$field,$value)
	    {
	     global $con;
		 $sql="INSERT INTO $table($field)VALUES($value)";
		 mysqli_query($con,$sql);
	    }
		function getOneRow($table,$where)                              
		{
			global $con;
			$sql="SELECT * FROM $table WHERE $where";
			return $sql;
		}	
		function update_rows($table,$set,$where)
		{	
			global $con;
			$sql="UPDATE $table SET $set WHERE $where";
			return $sql;
		}	
	   function delete_status_row($table,$set,$where)
		{
			global $con;
			$sql="UPDATE $table SET $set WHERE $where";
			mysqli_query($con,$sql);
			return $sql;
		}
		function event_fetch($table,$where)
		{
			global $con;
			$sql="SELECT * FROM $table WHERE $where ORDER BY event_id desc limit 2";
			return $sql;
		}
		function all_event_fetch($table,$where)
		{
			global $con;
			$sql="SELECT * FROM $table WHERE $where ORDER BY event_id desc";
			return $sql;
		}
		function fetch_allrows($table)
			{
			 global $con;
			 $sql="SELECT * FROM $table";
			 $res=mysqli_query($con,$sql);
			 return $res;
			}
	   function gallery_fetch($table,$where)
		{
			global $con;
			$sql="SELECT * FROM $table WHERE $where ORDER BY gallery_id desc limit 3";
			return $sql;
		}
	}
?>