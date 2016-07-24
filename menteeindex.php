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
if(isset($_POST['log']))
{
	session_destroy();
	header("Location: index.html");
}
			
	if($_SESSION['role']=='Mentee'){
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
      $score=(int)$row['score'];
      $score=$score*10;
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
      	$subject="New Mentee Invitation Received";
      	$message="Hello, I want to schedule a meeting on ".$date." at ".$time." at ".$location.". Thank you. ".$menteename;
      	mail($to,$subject,$message);
      }
  }
	?>
	</head>
	<body>
	
	
	  <header>
	  <?php
	  if($_SESSION['role']=='Mentor')
	  echo'<p id="p1">Mentor Dashboard</p>';
	  else
	  echo'<p id="p2">Mentee DashBoard</p>';
	 ?>
	 <form action="menteeindex.php" method="post"><input type="submit" name="log" value="Logout" style="float: right;margin-right: 50px"></button></form>
	 </header>
	 <div id="progress">
	 <body>
   <div>
    <h3 style="float:left;">How am I doing?</h3>
    <div style="border: solid black 1px;
      height: 30px;
      width: 500px;float:left;">
          <div style="height: 30px; width:300px; background-color: blue;" ></div>
    </div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    
	 
	 
	 </div>
	 <div id="menu1">
	 
	  <form id="form" action='menteeindex.php' method='post'>
	         TO:</br><input type="text" name="rid" id= "rid" /></br></br>
			 Time:</br><input type="text" name="time" id= "name" required>	</br></br>
			 Date:</br><input type="text" name="date" id= "gender"required></br></br>
			 location:</br><input type="option" name="location" id="age"required></br></br>
			 <input type="submit" value="submit" name="submit"id="submit"></br></br>
	 </form>
	 </div>
	 
	 <nav id="menu3">
	 <?php
	  if($_SESSION['role']=='Mentor')
	  echo'<a href="profile.php">Profile</a>';
	  else
	  echo'<a href="profile-mentee.php">Profile</a>';
	 ?>
     </nav>
	 
	 <div id="menu4">
	 <h1 style="float:right;margin-right:200px">Upcoming Meetings:</h1></br></br>
	 <table id="schedule">
    <tr>
    <th>Mentee Name</t></th>
    <th>Time</th> 
    <th>Date</th>
    <th>Location</th>
    </tr>
    <?php
    if($_SESSION['role']=='Mentor'){
    	$host = 'localhost';
$username = 'root';
$password = '';
$database = 'katalyst';
$conn = new mysqli($host,$username,$password,$database);
    	$mentorname=$_SESSION['username'];
    	$res = $conn->query("SELECT * FROM `katalyst`.`meeting`");
      while($row=$res->fetch_assoc())
      {
        if($row['mentor_name']==$mentorname && 0 == $row['completed']){

          echo '<tr><td>'.$row['metee_name'].'</td>
              <td>'.$row['time'].'</td>
              <td>'.$row['date'].'</td>
              <td>'.$row['location'].'</td>';
              if($row['approved']==0)
              	echo '<td><button>Approve</button></td>';
          echo '</tr>';
         }
      }
    }

    ?>
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