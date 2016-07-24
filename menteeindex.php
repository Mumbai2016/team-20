<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>KATALYST / Non-profit responsive Bootstrap HTML5 template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>
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
	<nav class="navbar navbar-static-top">

            
            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="index.html"><img style="max-height:35px; margin-top: -3px;margin-left: 0px;background-color:" src="image/logo1.png"></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a class="is-active" href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>

                    <li><a href="index.html">LOGOUT</a></li>
                    <?php
	  if($_SESSION['role']=='Mentor')
	  echo'<li><a href="profile.php">PROFILE</a></li>';
	  else
	  echo'<li><a href="profile-mentee.php">PROFILE</a></li>';
	 ?>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

	
	  <header>
	  <?php
	  if($_SESSION['role']=='Mentor')
	  echo'<p id="p1">Mentor Dashboard</p>';
	  else
	  echo'<p id="p2">Mentee DashBoard</p>';
	 ?>
	 </header>
	 <div id="progress">
	 <body>
   <div >
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