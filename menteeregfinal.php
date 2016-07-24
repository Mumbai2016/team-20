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
                $name = $_POST['name'];
                $location = $_POST['location'];
                $address = $_POST['address'];
                $mobile=$_POST['mobile'];
                $qual=$_POST['qual'];
                $colg=$_POST['colg'];
                $comp=$_POST['company'];
                $designation=$_POST['designation'];
                $compaddress=$_POST['compaddress'];
                $field=$_POST['field'];
                $gender=$_POST['gender'];
                $conf=0;
                $sql=("INSERT INTO `katalyst`.`user` (`serialno`, `name`, `dob`, `location`, `mobile`, `email`, `username`, `password`, `address`, `qualification`, `college`, `company`, `designation`, `compAddr`, `field`, `gender`, `role`, `confirmation`) VALUES (NULL, '$name', '$date', '$location', '$mobile', '$email', '$username', '$password', '$address', '$qual', '$colg', '$comp', '$designation', '$compaddress', '$field', '$gender', 'Mentor', '$conf');");
                $res=$conn->query($sql);
                $_SESSION['username']=$username;
                $_SESSION['role']='Mentee';
                header('Location: menteeindex.php');
            }

            
            //header("Location: profile.php");
        }
    ?>
        
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Registration form for mentee</h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form action="menteeregfinal.php" method="post" id="form" role="form">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="name" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                   <div class="form-group">
                
                    <label for="DOB">Date of Birth:</label></br></br>
                    <div class="input-group">
                    <select id="DOBMonth" name="month">
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
                    </select></div></div>

                    <div class="form-group">
                    <select id="DOBDay" name="day">
                     <div class="input-group">
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
                    </select></div></div>
                     

                      <div class="form-group">
                    <label for="location">Enter Location</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="location" id="name" placeholder="Enter location" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                     <div class="form-group">
                    <label for="email">Enter Email</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter emailid" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username">Enter Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="password">Enter password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="mobile">Enter mobile no</label>
                    <div class="input-group">
                        <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile no" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address">Enter your address</label>
                    <div class="input-group">
                        <input type="address" class="form-control" id="address" name="address" placeholder="Enter the address" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>


                <div class="form-group">
                    <label for="college">Enter your college</label>
                    <div class="input-group">
                        <input type="address" class="form-control" id="college" name="college" placeholder="Enter the college" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>



                 <div class="form-group">
                    <label for="college">Enter your college address</label>
                    <div class="input-group">
                        <input type="address" class="form-control" id="college" name="collegeaddress" placeholder="Enter the college" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                  <div class="form-group">
                    <label for="field">Enter your field</label>
                    <div class="input-group">
                        <input type="address" class="form-control" id="field" name="field" placeholder="Enter the field" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="radio">Enter your gender</label>
                    <div class="input-group">
                       <input type="radio" name="gender" id= "gender"value="Male"checked>Male</input>
            <input type="radio" name="gender" id= "gender"value="Female"checked>Female</input></br></br>
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