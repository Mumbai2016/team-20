<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registration form for mentee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
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
<body style="background-color:powderblue;">

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