<?php
session_start();
if(isset($_SESSION['username']))
{

			$host = 'localhost';
			$username = 'root';
			$password = 'ankita';
			$database = 'katalyst';
			$conn = mysql_connect($host, $username, $password) or die(mysql_error());
			mysql_select_db($database);


			$menteename=$_SESSION['username'];
			echo $menteename;
			$sql="select * from mapping where menteeusername=='gaurav'";
			$res= mysql_query($sql);
			echo $res;
			echo "hello";


   








}
else
{
	echo "jakdsd";
}
?>