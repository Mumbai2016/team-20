
		<?php
		session_start();
		
		if(isset($_POST['submit']))
		{
			$host = 'localhost';
			$username = 'root';
			$password = 'ankita';
			$database = 'katalyst';
			$conn = new mysqli($host,$username,$password,$database);
			$username = $_POST['username'];
			$flag=0;
			$email = $_POST['email'];
			$res = $conn->query("select email,username from user");
			while($row=$res->fetch_assoc())
			{
				if($username==$row['username'])
					$flag=1;
				if($email==$row['email'])
					$flag=2;
			}
			if($flag==1)
			{
				?> 
				  <script type="text/javascript"> 
				    alert("The username <?php echo $_POST['username']; ?> is already registered."); 
				    history.back(); 
				  </script> 
				<?php 
			}
			else if($flag==2)
			{
				?> 
				  <script type="text/javascript"> 
				    alert("The email <?php echo $_POST['email']; ?> is already registered."); 
				    history.back(); 
				  </script> 
				<?php
			}
			else
			{
				$date=$_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
				$password = $_POST['password'];
				$name = $_POST['name'];
				$location = $_POST['location'];
				$address = $_POST['address'];
				$mobileno=$_POST['mobile'];
				
				$colg=$_POST['college'];
				
				
				$colgaddress=$_POST['collegeaddress'];
				$field=$_POST['field'];
				$gender=$_POST['gender'];
				$conf=0;
				echo 2323;
				$sql=("INSERT INTO `katalyst`.`user` (`serialno`, `name`, `dob`, `location`, `mobile`, `email`, `username`, `password`, `address`, `college`, `compAddr`, `field`, `gender`, `role`, `confirmation`) VALUES (NULL, '$name', '$date', '$location', '$mobileno', '$email', '$username', '$password', '$address', '$colg', '$colgaddress', '$field', '$gender', 'Mentee', '$conf');");
				$res=$conn->query($sql);
				$_SESSION['username']=$username;
			}

			
			header("Location: .php");
		}
	?>
		
	     
		 
		
		 