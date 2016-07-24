<!DOCTYPE html>
<html>
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
    
    <?php
        session_start();
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
                if($un1=='admin')
                    header('Location: admincss.php');
                else
                    header("Location:menteeindex.php");//to be chnaged to dashboard.php
            }
        }
        ?>
</head>
<body color="blue">
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

                    <li><a href="registerindex.php">SIGN UP</a></li>
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
<div class="container">

<div class="page-header">
    <h1>LOGIN</h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form role="form" action="loginneww.php" method="post">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter UserName</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                   

                 <div class="form-group">
                    <label for="password">Enter password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>


                 


                <br><br>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
        <div class="col-lg-5 col-md-push-1">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! Message sent.</strong>
                </div>
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Please check all page inputs.</strong>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registration form - END -->

</div>

</body>
</html>