<!doctype html>
	<html lang="en">
	<html>
	<head>
	<meta charset="UTF-8">
	<title> Mentee DashBoard </title>
	<link rel="stylesheet" type="text/css" href="mentee.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="mentee.js"></script>
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
	  <form id="form" action='menteedashboard.php' method='post'>
	         TO:</br><input type="text" name="rid" id= "rid"required></br></br>
			 Time:</br><input type="text" name="name" id= "name" required>	</br></br>
			 Date:</br><input type="text" name="gender" id= "gender"required></br></br>
			 location:</br><input type="option" name="age" id="age"required></br></br>
			 <input type="submit" value="Submit" id="submit"></br></br>
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