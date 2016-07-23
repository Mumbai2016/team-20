
<!DOCTYPE html>
<html lang="en">
<head>
<link href="styles.css" type="text/css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
<a class="navbar-brand" href="index.php"><img style="max-height:35px; margin-top: -3px;margin-left: 0px;background-color:" src="image/logo1.png"></a>
<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-center">
 <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="search" style="margin:10px">
    <button type="button" class="btn btn-primary">Search</button>
  </form>
  </ul>
  </div>
</nav>
<div class="container-fluid">
  <h3 class="text-primary text-center">Approved Request & Leader board</h3>
  <div class="row">
    <div class="col-xs-6">
      <div class="well">
  <table class="table">
  <thead>
      <tr>
        <th>Username</th>
        <th>Approve?</th>
        <th>Don't Approve?</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $host = 'localhost';
      $username = 'root';
      $password = '';
      $database = 'katalyst';
      $conn = new mysqli($host,$username,$password,$database);
      $res = $conn->query("SELECT * FROM `katalyst`.`user`");
      while($row=$res->fetch_assoc())
      {

        if(0 == $row['confirmation']){
          $username=$row['username'];

          echo '<tr>
              <td>'.$username.'</td>
              <td><button>Approve</button></td>
              <td><button>Not Approve</button></td>
              </tr>';
         }
      }
  ?>
    </tbody>
  </table>
      </div>
    </div>
    <div class="col-xs-6">
    <div class="well">
    <table class="table">
    <thead>
      <tr>
        <th>Mentor</th>
        <th>Mentee</th>
        <th>Score card</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $host = 'localhost';
      $username = 'root';
      $password = '';

      $database = 'katalyst';
      $conn = new mysqli($host,$username,$password,$database);
      $res = $conn->query("SELECT * FROM `katalyst`.`mapping`");
      while($row=$res->fetch_assoc())
      {
          $mentor=$row['mentor_username'];
          $mentee=$row['mentee_username'];
          $score=$row['score'];
          echo '<tr>
              <td>'.$mentor.'</td>
              <td>'.$mentee.'</td>
              <td>'.$score.'</td>
              </tr>';
      }
  ?>
    </tbody>
  </table>
      </div>
    </div>
  </div>
</div>
<form name='import' method='post' enctype='multipart/form-data'>
<input type='file' name='file' /><br />
<input type='submit' name='submit' value='Submit' />
</form>
<?php
if(isset($_POST['submit']))
{
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'katalyst';
$conn = new mysqli($host,$username,$password,$database);
$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, 'r');
$c=0;
while(($filesop = fgetcsv($handle, 1000, ',')) !== false)
{
$date=$filesop[2];
$username=$filesop[5];
$email=$filesop[6];
$password = $filesop[7];
$name =  $filesop[1];
$location = $filesop[3];
$address = $filesop[8];
$mobileno=(int)$filesop[4];
$qual=$filesop[9];
$colg=$filesop[10];
$comp=$filesop[11];
$designation=$filesop[12];
$compaddress=$filesop[13];
$field=$filesop[14];
$gender=$filesop[15];
$role=$filesop[16];
$conf=(int)$filesop[17];
$sql=("INSERT INTO `katalyst`.`user` (`name`, `dob`, `location`, `mobile`, `email`, `username`, `password`, `address`, `qualification`, `college`, `company`, `designation`, `compAddr`, `field`, `gender`, `role`, `confirmation`) VALUES ('$name', $date, '$location', $mobileno, '$email', '$username', '$password', '$address', '$qual', '$colg', '$comp', '$designation', '$compaddress', '$field', '$gender', '$role', $conf);");
$res=$conn->query($sql);
$c=$c+1;

}
if($res){
echo 'You database has imported successfully. You have inserted'.$c.'records';
}else{
echo 'Sorry! There is some problem.';
}
}
?>
</body>
</html>