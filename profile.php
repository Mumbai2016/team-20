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
		<p>
		<?php
			if(isset($_SESSION['username'])){
				echo $row['name'];
			}
		?></p>
		</body>
			
	</html>
