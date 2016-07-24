
<?php
session_start();


	
		
		if(isset($_POST['submit']))
		{
			$host = 'localhost';
			$username = 'root';
			$password = '';
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
				$name = $_POST['Inputname'];
				$location = $_POST['location'];
				$address = $_POST['address'];
				$mobileno=$_POST['mobile-no'];
				$qual=$_POST['qual'];
				$colg=$_POST['colg'];
				$comp=$_POST['company'];
				$designation=$_POST['designation'];
				$compaddress=$_POST['companyaddress'];
				$field=$_POST['field'];
				$gender=$_POST['gender'];
				$conf=0;
				$sql=("INSERT INTO `katalyst`.`user` (`serialno`, `name`, `dob`, `location`, `mobile`, `email`, `username`, `password`, `address`, `qualification`, `college`, `company`, `designation`, `compAddr`, `field`, `gender`, `role`, `confirmation`) VALUES (NULL, '$name', '$date', '$location', '$mobileno', '$email', '$username', '$password', '$address', '$qual', '$colg', '$comp', '$designation', '$compaddress', '$field', '$gender', 'Mentor', '$conf');");
				$res=$conn->query($sql);
				$_SESSION['username']=$username;
				$_SESSION['roll']=$Mentor;
			}

			
			header("Location: menteeindex.php");
		}
	?>
		
	