<?php
	session_start();
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="formdesign.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
		</script>
		<script type="text/javascript" src="formscripts.js"></script>
		<?php
			$host = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'katalyst';
			$conn = new mysqli($host,$username,$password,$database);
			$res = $conn->query("SELECT * FROM `katalyst`.`user`");
			if(isset($_SESSION['username']))
				$username=$_SESSION['username'];
			while($row=$res->fetch_assoc())
			{
				if($row['username']==$username)
					break;
			}
			
		?>

		</head>

		<body>
		<fieldset>
		<p align="center">
		<h2>Name:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['name'];
			}
		?></p>
		<p align="center">
		<h2>Date of birth:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['dob'];
			}
		?></p>
		<p align="center">
		<h2>Location:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['location'];
			}
		?></p>
		<p align="center">
		<h2>Email ID:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['email'];
			}
		?></p>
		<p align="center">
		<h2>Username:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['username'];
			}
		?></p>
		<p align="center">
		<h2>Password:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['password'];
			}
		?></p>
		<p align="center">
		<h2>Mobile No.:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['mobile'];
			}
		?></p>
		<p align="center">
		<h2>Qualification:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['qualification'];
			}
		?></p>
		<p align="center">
		<h2>Designation:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['designation'];
			}
		?></p>
		<p align="center">
		<h2>Company:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['company'];
			}
		?></p>
		<p align="center">
		<h2>Company Address:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['compAddr'];
			}
		?></p>
		<p align="center">
		<h2>Field for Expertise:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['field'];
			}
		?></p>
		<p align="center">
		<h2>Gender:</h2>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['gender'];
			}
		?></p>
		</fieldset>
		</body>
			
	</html>