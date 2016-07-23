<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "formc.css">
	<script>
function validate() {
	//validating name
	var x = 0;

	var attr = document.getElementById('name').value;

	if(attr == null || attr == ""){
		document.getElementById('fn').innerHTML = "*enter name";
		x=1;
	}
	else if(!((/^[a-zA-Z]+$/).test(attr))) {
		document.getElementById('fn').innerHTML = "Name can contain a-z, A-Z";
		x = 1;
	}
	else
		document.getElementById('fn').innerHTML = "";

	//location
	var loc = document.getElementById('location').value;

	if(loc == null || loc == ""){
		document.getElementById('location').innerHTML = "*enter location";
		x=1;
	}
	else
		document.getElementById('location').innerHTML = "";

	//address
	var address = document.getElementById('address').value;

	if(address == null || address == ""){
		document.getElementById('address').innerHTML = "*enter address";
		x=1;
	}
	else
		document.getElementById('address').innerHTML = "";
	//qualification
	var qualification = document.getElementById('qualification').value;

	if(qualification == null || qualification == ""){
		document.getElementById('qualification').innerHTML = "*enter qualification";
		x=1;
	}
	else
		document.getElementById('qualification').innerHTML = "";
	//college
	var college = document.getElementById('college').value;

	if(college == null || college == ""){
		document.getElementById('college').innerHTML = "*enter college";
		x=1;
	}
	else
		document.getElementById('college').innerHTML = "";
	//company
	var company = document.getElementById('company').value;

	if(company == null || company == ""){
		document.getElementById('company').innerHTML = "*enter company";
		x=1;
	}
	else
		document.getElementById('company').innerHTML = "";
	//designation
var designation = document.getElementById('designation').value;
	if(designation == null || designation == ""){
		document.getElementById('designation').innerHTML = "*enter designation";
		x=1;
	}
	else
		document.getElementById('designation').innerHTML = "";

	//company address
var compAddr = document.getElementById('compAddr').value;
if(compAddr == null || compAddr == ""){
		document.getElementById('compAddr').innerHTML = "*enter company address";
		x=1;
	}
	else
		document.getElementById('compAddr').innerHTML = "";

	//validate email
	var email = document.getElementById("email").value;
	if(!((/[a-z][a-z0-9]*\w@[a-z]+\.(com)/).test(email))){
			document.getElementById('em').innerHTML = "*invalid email, email cannot contain digit at the beginning";
			x=1;
	}
	else
		document.getElementById('em').innerHTML = "";


	//validate username
	var un = document.getElementById('username').value;
	if(!(/\w/.test(un))) {
		document.getElementById('un').innerHTML = "Username can contain alpha-numeric values and _";
		x = 1;
	}
	else
		document.getElementById('un').innerHTML = "";

	//validate password
	var pw = document.getElementById('password').value;
	if(!(/\w/.test(pw))) {
		document.getElementById('pw').innerHTML = "Password can contain alpha-numeric values and _";
		x = 1;
	}
	else
		document.getElementById('pw').innerHTML = "";

	//validate phone number
	var mob = document.getElementById("mobile-no").value;
	if(!(/^[0-9]{10}$/).test(mob))
	{
		document.getElementById('mob').innerHTML = "number should be 10 digit long";
		x=1;
	}
	else
		document.getElementById('mob').innerHTML = "";

	//validate dob
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1;
	var yyyy = today.getFullYear();
	var d =  document.getElementById('DOBDay').value;
	var m = document.getElementById('DOBMonth').value;
	var y = document.getElementById('DOBYear').value;
	
	var c=0;

	if(y%1000 == 0)
	{
		if(y%400 == 0)
			var c = 1; 
	}
	else
	{
		if(y%4 == 0)
			var c = 1;
	}
	if(m.localeCompare("- Month -")==0 || d.localeCompare("- Date -")==0 || y.localeCompare("- Year -")==0)
	{
		document.getElementById('dob').innerHTML = "*enter date";
		x=1;
	}	

	else if((m.localeCompare("February")==0 && d>29) || (m.localeCompare("February")==0 && d==29 && !c) || 
		(m == "April" && d==31) || (m == "June" && d==31) || (m == "September" && d==31) || (m == "November" && d == 31))
	{
		document.getElementById('dob').innerHTML = "*enter valid date";
		x=1;
	}	
	else
		document.getElementById('dob').innerHTML = "";
	if(x==1)
		return false;
	else
		return true;
}</script>
	<title>FORM</title>
	<?php
		session_start();
		if(isset($_POST['submit']))
		{
			$host = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'wtminiproject';
			$conn = new mysqli($host,$username,$password,$database);
			$un = $_POST['username'];
			$flag=0;
			$email = $_POST['email'];
			$res = $conn->query("select email,username from users");
			while($row=$res->fetch_assoc())
			{
				if($un==$row['username'])
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
			$string=$_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
			$pw = $_POST['password'];
			$fn = $_POST['fname'];
			$ln = $_POST['lname'];
			$mno = $_POST['mno'];
				$res=$conn->query("INSERT INTO `wtminiproject`.`users` (`fname`, `lname`, `email`, `username`, `password`, `mno`, `dob`) VALUES ('$fn','$ln','$email','$un','$pw','$mno','$string')");
			}
			$_SESSION['username']=$un;	
			header("Location: profile.php");
		}
	?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
		</script>
		<script type="text/javascript" src="formscripts.js"></script>
		<style type="text/css">
			.error{
	color: red;
	font-size: 17px;
}
		</style>
	</head>
	<body>
	     
		 
		
		 <form action="info.php" method="post" id="form">
			 
				 
			 
			
			 
			 Name:</br></br><input type="text" name="name" id= "name" required>	</br></br><p class="error" id="name-err"></p>
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
             Location:</br></br><input type="text" name="location" id= "location" required>	</br></br><p class="error" id="loc"></p>
             Email ID:</br></br><input type="text" name="email" id= "email"required></br></br>  <p class="error" id="em"></p>
             Username:</br></br><input type="text" name="user" id= "username" required>	</br></br> <p class="error" id="un"></p>
             Password:</br></br><input type="password" name="password" id= "password" required>	</br></br><p class="error" id="pwd"></p>
             Address:</br></br><input type="text" name="name" id= "address" required>	</br></br> <p class="error" id="addr"></p>
             Mobile:</br></br><input type="text" name="mobileno" id= "mobileno" required>	</br></br> <p class="error" id="mob"></p>
             Qualification:</br></br><input type="text" name="qual" id= "qualifications" required>	</br></br> <p class="error" id="qual"></p>
             College:</br></br ><input type="text" name="colg" id= "college" required>	</br></br> <p class="error" id="colg"></p>
             Company:</br></br ><input type="text" name="company" id= "company" required>	</br></br> <p class="error" id="comp"></p>
             Designation:</br></br><input type="text" name="designation" id= "designation" required>	</br></br> <p class="error" id="des"></p>
             Company address:</br></br><input type="text" name="compaddress" id= "compAddr" required>	</br></br> <p class="error" id="comadd"></p>
             Enter your field:</br></br><input type="text" name="field" id= "field" required>	</br></br> <p class="error" id="fieldexp"></p>
             
             
			Gender:</br></br><input type="radio" name="gender" id= "gender"value="Male"checked>Male</input>
			<input type="radio" name="gender" id= "gender"value="Female"checked>Female</input></br></br>

    
   </select>
  <br><br>	</br></br> 
			 
			 <input type="submit" name="submit" value="submit">
			
			
			
			  
		 </form>
            
	</body>
</html>
	<form style = "display: inline-block"  method = "post" action="form.php" onsubmit="return validate();" id="theform">