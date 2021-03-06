<!doctype html>
	<html lang="en">
	<html>
	<head>
	<meta charset="UTF-8">
	<title> Registration </title>
	<link rel="stylesheet" type="text/css" href="regdesign.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="regscripts.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</head
	<body>
	<nav id="register">
	    <a id ="mentor" href="#container1">Mentor Register</a>
		<a id ="mentee" href="#container2">Mentee Register</a>
	   </nav>
	  <body color="blue">

<div id="container1">

<div class="page-header">
    <h1>Registration form for mentor</h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form role="form" method="post" action="registration.php">
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
                   <select id="DOBYear" name="year">
                      <div class="input-group">

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
                        <input type="mobile" class="form-control" id="mobile" name="mobile-no" placeholder="Enter mobile no" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="qualifications">Enter your qualifications</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="qual" name="qual" placeholder="Enter your qualifications" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="designation">Enter your designation</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter the designation" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>


                <div class="form-group">
                    <label for="company">Enter your company</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="company" name="company" placeholder="Enter your company" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>



                 <div class="form-group">
                    <label for="company">Enter your company address</label>
                    <div class="input-group">
                        <input type="address" class="form-control" id="compAddr" name="companyaddress" placeholder="Enter the company name" required>
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
        
    </div>
</div>
</div>
<!-- Registration form - END -->

<div id="container2">
<div class="page-header">
    <h1>Registration form for mentee</h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form role="form">
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
                        <input type="email" class="form-control" id="username" name="username" placeholder="Enter Username" required>
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
       
    </div>
</div>
</div>
<!-- Registration form - END -->




	
	</body>
	</html>