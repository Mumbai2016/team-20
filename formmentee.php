<!DOCTYPE html>
	<html>
	<head>
		<title>Get Traditional</title>

		<?php
		
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
				$mobileno=$_POST['mobileno'];
				
				$colg=$_POST['college'];
				
				
				$colgaddress=$_POST['colgaddress'];
				$field=$_POST['field'];
				$gender=$_POST['gender'];
				$conf=0;
				echo 2323;
				$sql=("INSERT INTO `katalyst`.`user` (`serialno`, `name`, `dob`, `location`, `mobile`, `email`, `username`, `password`, `address`, `college`, `compAddr`, `field`, `gender`, `role`, `confirmation`) VALUES (NULL, '$name', '$date', '$location', '$mobileno', '$email', '$username', '$password', '$address', '$colg', '$colgaddress', '$field', '$gender', 'Mentee', '$conf');");
				$res=$conn->query($sql);
			}

			
			//header("Location: profile.php");
		}
	?>
		<link rel="stylesheet" type="text/css" href="formdesign.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
		</script>
		<script type="text/javascript" src="formscripts.js"></script>
	</head>
	<body>
	     
		 
		
		 <form action="formmentee.php" method="post" id="form">
			 
				 
			 
			
			 
			 Name:</br></br><input type="text" name="name" id= "name" required>	</br></br>
             Date of Birth:</br></br><select id="DOBMonth" name="month">
						<option> - Month - </option>
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
					</select>

					<select id="DOBDay" name="day">
						<option> - Day - </option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>

					<select id="DOBYear" name="year">
						<option> - Year - </option>
						<option value="2003">2003</option>
						<option value="2002">2002</option>
						<option value="2001">2001</option>
						<option value="2000">2000</option>
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>
						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
					</select>
					<p id="dob" class="error"></p>
             Location:</br></br><input type="text" name="location" id= "location" required>	</br></br>
             Email ID:</br></br><input type="text" name="email" id= "email"required></br></br>  
             Username:</br></br><input type="text" name="username" id= "username" required>	</br></br> 

             Password:</br></br><input type="password" name="password" id= "password" required>	</br></br>
             Mobile:</br></br><input type="text" name="mobile" id= "mobile" required>	</br></br> 
             Address:</br></br><input type="text" name="name" id= "address" required>	</br></br> 
            
             College:</br></br ><input type="text" name="college" id= "college" required>	</br></br> 
             College Address:</br></br ><input type="text" name="collegeaddress" id= "college" required>	</br></br> 
            
           
             Enter your field:</br></br><input type="text" name="field" id= "field" required>	</br></br> 
             
             
			Gender:</br></br><input type="radio" name="gender" id= "gender"value="Male"checked>Male</input>
			<input type="radio" name="gender" id= "gender"value="Female"checked>Female</input></br></br>
		
		
  <br><br>	</br></br> 
			 
			 <input type="submit" name="submit" value="submit">
			
			
			
			  
		 </form>
            
	</body>
	</html>