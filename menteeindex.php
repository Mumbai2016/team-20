<?php
session_start();
?>
	<!doctype html>
	<html lang="en">
	<html>
	<head>
	<meta charset="UTF-8">
	<title> Mentee DashBoard </title>
	<link rel="stylesheet" type="text/css" href="mentee.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="mentee.js"></script>
	<?php

			$host = 'localhost';
$username = 'root';
$password = '';
$database = 'katalyst';
$conn = new mysqli($host,$username,$password,$database);

			$menteename=$_SESSION['username'];
			$res = $conn->query("SELECT * FROM `katalyst`.`mapping`");
      while($row=$res->fetch_assoc())
      {
      		if($row['mentee_username']==$menteename)
      			break;
      }
      $mentorname=$row['mentor_username'];
      $score=$row['score'];
      $res = $conn->query("SELECT * FROM `katalyst`.`user`");
      while($row=$res->fetch_assoc())
      {
      		if($row['username']==$mentorname)
      			break;
      }

      $mentoremail=$row['email'];
      


      if(isset($_POST['submit']))
      {
      	$result = $conn->query("insert into meeting (time,date,location)  values($time,$date,$location)");
      	$time=$_POST['time'];
      $date=$_POST['date'];
      $location=$_POST['location'];
      	$to=$mentoremail;
      	$subject="New Mentoee Invitation Received";
      	$message="Hello, I want to schedule a meeting on ".$date." at ".$time." at ".$location.". Thank you. ".$menteename;
      	mail($to,$subject,$message);
      }
	?>
	</head>
	<body>
	
	  <header>
	  <p id="p1">Mentor Dashboard</p>
	  <p id="p2">Mentee DashBoard</p>
	 </header>
	 <div id="menu1">
	 <nav id="menu">
	    <a id ="schedule" href="#schedule">Schedule</a>
		<a id ="schedule" href="#feedback">Feedback</a>
		<a href="#profile">Profile</a>
     </nav>
	  <form id="form" action='menteeindex.php' method='post'>
	         TO:</br><input type="text" name="rid" id= "rid" value="<?php if(isset($_SESSION['username'])) echo $mentoremail; ?>"/></br></br>
			 Time:</br><input type="text" name="time" id= "name" required>	</br></br>
			 Date:</br><input type="text" name="date" id= "gender"required></br></br>
			 location:</br><input type="option" name="location" id="age"required></br></br>
			 <input type="submit" value="submit" name="submit"id="submit"></br></br>
	 </form>
	 </div>
	 
	 <nav id="menu3">
	    <a id ="schedule" href="#schedule">Schedule</a>
		<a id ="schedule" href="#feedback">Feedback</a>
		<a href="#profile">Profile</a>
     </nav>
	 
	 <div id="menu4">
	 
	 <table id="schedule">
    <tr>
    <th>Mentee Name</t></th>
    <th>Time</th> 
    <th>Place</th>
    <th>Location</th>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
</table>

<h1>Feedback Form</h1>
<form>
    Date of Interaction:<br>
  <input type="text" name="doi"><br>
  Name of Mentee:<br>
  <input type="text" name="menteename"></br>
  Name of Menter:</br>
  <input type="text" name="mentorname"></br>
  Duration of Interaction in hours:</br>
  <input type="text" name="duration"></br>
  Points Discussed:</br>
  <input type="text" name="discussed"></br>
  Feedback for Interaction Session:</br>
  <input type="text" name="feedback"></br>
  Action Plan:</br>
  <input type="text" name="discussed"></br></br>
  <input type="button" value="Submit">
</form>
</div>

	 
	 
	 
	 	  
	</body>
	</html>