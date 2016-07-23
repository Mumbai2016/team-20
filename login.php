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
			if(isset($_POST['submit']))
		{
			$host = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'katalyst';
			$conn = new mysqli($host,$username,$password,$database) or die(mysql_error());
			$un1=$_POST['username'];
			$pw1=$_POST['password'];
			$usernamepresent=0;
			$res = $conn->query("SELECT * FROM `katalyst`.`user`");
			while($row=$res->fetch_assoc())
			{
				if($un1 === $row['username'])
				{
					$usernamepresent=1;
					$role=$row['role'];
					break;
				}
			}
			
			if($usernamepresent==0||!($row['password']===$pw1) || $pw1==NULL)
			{
				?> 
				  <script type="text/javascript"> 
				    alert("Invalid username or password. Retry!"); 
				    history.back(); 
				  </script> 
				<?php
			}
			else
			{
				$_SESSION['username']=$un1;
				$_SESSION['role']=$role;
			header("Location: menteeindex.php");//to be chnaged to dashboard.php
			}
		}
		?>
	</head>
	<body>
	     
		 
		
		 <form action="login.php" method="post" id="form">
			 
	     Username:</br></br><input type="text" name="username" id= "username" required>	</br></br>
   		 Password:</br></br><input type="password" name="password" id= "password" required></br></br>
  <br><br>	</br></br> 
			 
			 <input type="submit" name="submit" value="submit">
			
			
			
			  
		 </form>
            
	</body>
	</html>