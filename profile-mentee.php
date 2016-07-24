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

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    

    </head>
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
<div class="row">
<div class="well">
		<p class="text-primary text-center">
		<h2 class="text-primary text-center">Name:</h2>
		<div class="text-primary text-center">
		<?php
			if(isset($_SESSION['username'])){				
				echo $row['name'];
			}
		?>
		</div>
		</p>
		</div>
		</div>
		<div class="row">
<div class="well">
		<p class="text-primary text-center">
		<h2 class="text-primary text-center">Date of birth:</h2>
		<div class="text-primary text-center">
		<?php
			if(isset($_SESSION['username'])){
				echo $row['dob'];
			}
		?>
		</div>
		</p>
		</div>
		</div>
		<div class="row">
<div class="well">
		<p class="text-primary text-center">
		<h2 class="text-primary text-center">Location:</h2>
		<div class="text-primary text-center">

		<?php
			if(isset($_SESSION['username'])){
				echo $row['location'];
			}
		?>
		</div></p></div></div>
		<div class="row">
<div class="well">
		<p class="text-primary text-center">
		<h2 class="text-primary text-center">Email ID:</h2>
		<div class="text-primary text-center">
		<?php
			if(isset($_SESSION['username'])){
				echo $row['email'];
			}
		?>
		</div></p>
		</div></div>
		<div class="row">
<div class="well">
		<p class="text-primary text-center">
		<h2 class="text-primary text-center">Username:</h2>
		<div class="text-primary text-center">
		<?php
			if(isset($_SESSION['username'])){
				echo $row['username'];
			}
		?></div></p></div></div>
		<div class="row">
<div class="well">
		<p class="text-primary text-center">
		<h2 class="text-primary text-center">Password:</h2>
		<div class="text-primary text-center">
		<?php
			if(isset($_SESSION['username'])){
				echo $row['password'];
			}
		?></div></p></div></div>
		<div class="row">
<div class="well">
		<p class="text-primary text-center">
		<h2 class="text-primary text-center">Mobile No.:</h2>
		<div class="text-primary text-center">
		<?php
			if(isset($_SESSION['username'])){
				echo $row['mobile'];
			}
		?></div></p></div></div>
		<div class="row">
<div class="well">
		<p class="text-primary text-center">
		<h2 class="text-primary text-center">Address:</h2>
		<div class="text-primary text-center">
		<?php
			if(isset($_SESSION['username'])){
				echo $row['address'];
			}
		?></div></p></div></div>
		<div class="row">
<div class="well">
		<p class="text-primary text-center">
		<h2 class="text-primary text-center">College Name:</h2>
		<div class="text-primary text-center">
		<?php
			if(isset($_SESSION['username'])){
				echo $row['college'];
			}
		?></div></p></div></div>
		<div class="row">
<div class="well">
		<p class="text-primary text-center">
		<h2 class="text-primary text-center">College Address:</h2>
		<div class="text-primary text-center">
		<?php
			if(isset($_SESSION['username'])){
				echo $row['compAddr'];
			}
		?></div></p></div></div>
		<div class="row">
<div class="well">
		<p class="text-primary text-center">
		<h2 class="text-primary text-center">Field for Expertise:</h2>
		<div class="text-primary text-center">
		<?php
			if(isset($_SESSION['username'])){
				echo $row['field'];
			}
		?></div></p></div></div>
		<div class="row">
<div class="well">
		<p class="text-primary text-center">
		<h2 class="text-primary text-center">Gender:</h2>
		<div class="text-primary text-center">
		<?php
			if(isset($_SESSION['username'])){
				echo $row['gender'];
			}
		?>
		</div></p></div></div>
		</body>
			
	</html>
