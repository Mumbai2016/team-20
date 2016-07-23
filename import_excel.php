<html>
<head>
<style type='text/css'>
body
{
margin: 0;
padding: 0;
background-color:#FFFFFF;
text-align:center;
}
.top-bar
{
width: 100%;
height: auto;
text-align: center;
background-color:#FFF;
border-bottom: 1px solid #000;
margin-bottom: 20px;
}
.inside-top-bar
{
margin-top: 5px;
margin-bottom: 5px;
}
.link
{
font-size: 18px;
text-decoration: none;
background-color: #000;
color: #FFF;
padding: 5px;
}
.link:hover
{
background-color: #FCF3F3;
}
</style>

</head>
<body>
<div class='top-bar'>
<div class='inside-top-bar'>Import Excelsheet Data in mysql table<br><br>
</div>
</div>
<div style='text-align:left; border:1px solid #333333; width:300px; margin:0 auto; padding:10px;'>

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

if($res){
echo 'You database has imported successfully. You have inserted recoreds';
}else{
echo 'Sorry! There is some problem.';
}
}
}

?>
</div>
</body>
</html>