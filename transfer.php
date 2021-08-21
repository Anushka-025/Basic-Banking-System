<?php
session_start();
$server="localhost";
$username="id17440009_anushka";
$password="vn?_muoC3~>)WrqI";
$db="id17440009_bank_system";


$con = mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("Connection failed");
} 

$flag=false;

if (isset($_POST['transfer']))
{
$sender=$_SESSION['sender'];
$receiver=$_POST["receiver"];
$amount=$_POST["amount"];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Bank Serivice</title>
<meta Name="viewport" content="width=device-width, initial-scale=1">    
<link rel="stylesheet" href="bootstrap.min.css">
<style>
body{
  background-color: white;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
  
}

@media screen and (max-width: 400px) {
  .topnav.responsive {position: relative;}
<?php

session_start();
$server="localhost";
$username="id17440009_anushka";
$password="vn?_muoC3~>)WrqI";
$db="id17440009_bank_system";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("Connection failed");
} 


$flag=false;

if (isset($_POST['transfer']))
{
$sender=$_SESSION['sender'];
$receiver=$_POST["receiver"];
$amount=$_POST["amount"];}
?>
</style>
</head>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BOAT bank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">    
<link rel="stylesheet" href="bootstrap.min.css">
<style>
body{
  background-color: white;
}
</style>
</head>
<body>
	<script src="jquery.min.js" type="text/javascript"></script>
	<script src="popper.min.js" type="text/javascript"></script>
	<script src="sweetalert.min.js" type="text/javascript"></script>
</body>
</html>
<?php

$sql = "SELECT Balance FROM customer WHERE Name='$sender'";
$result = $con->query($sql) or die($con->error);

  while($row = $result->fetch_assoc()) {
 if($amount>$row["Balance"] or $row["Balance"]-$amount<100){
    echo "<script>swal( 'Transaction Denied','Insufficient Balance!','error' ).then(function() { window. location = 'View.php'; });;</script>";
   
 }
else{
    $sql = "UPDATE `customer` SET Balance=(Balance-$amount) WHERE Name='$sender'";
    
}
if ($con->query($sql) === TRUE) {
  $flag=true;
} else {
  echo "Error in updating record: " . $con->error;
}
 }
 


if($flag==true){
$sql = "UPDATE `customer` SET Balance=(Balance+$amount) WHERE Name='$receiver'";

if ($con->query($sql) === TRUE) {
  $flag=true;  
  
} else {
  echo "Error in updating record: " . $con->error;
}
}
if($flag==true){
    $sql = "SELECT * FROM customer WHERE Name='$sender'";
    $result = $con->query($sql) or die($con->error);
    while($row = $result->fetch_assoc())
     {
         $s_acc=$row['Acc_Number'];
 }
 $sql = "SELECT * FROM customer WHERE Name='$receiver'";
 $result = $con->query($sql) or die($con->error);
while($row = $result->fetch_assoc())
  {
      $r_acc=$row['Acc_Number'];
}        
$sql = "INSERT INTO `transfer`(s_name,s_acc_no,r_name,r_acc_no,amount) VALUES ($sender','$s_acc','$receiver','$r_acc','$amount')";
if ($con->query($sql) === TRUE) {
} else 
{
  echo "Error updating record: " . $con->error;
}
}

if($flag==true){
echo "<script>swal('Money sent', 'Your transaction was successful','success').then(function() { window. location = 'View.php'; });;</script>";
}
elseif($flag==false)
{
    echo "<script>
        $('#text2').show()
     </script>";
}
?>

  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>
	<script src="jquery.min.js" type="text/javascript"></script>
	<script src="popper.min.js" type="text/javascript"></script>
	<script src="sweetalert.min.js" type="text/javascript"></script>
</body>
</html>
<?php

$sql = "SELECT Balance FROM customer WHERE Name='$sender'";
echo $sql;
$result = $con->query($sql);


  while($row = $result->fetch_assoc()) {
 if($amount>$row["Balance"] or $row["Balance"]-$amount<100){
    echo "<script>swal( 'Transaction Denied','Insufficient Balance!','error' ).then(function() { window. location = 'View.php'; });;</script>";
   
 }
else{
    $sql = "UPDATE `customer` SET Balance=(Balance-$amount) WHERE Name='$sender'";
    

if ($con->query($sql) === TRUE) {
  $flag=true;
} else {
  echo "Error in updating record: " . $con->error;
}
 }
 
  }

if($flag==true){
$sql = "UPDATE `customer` SET Balance=(Balance+$amount) WHERE Name='$receiver'";

if ($con->query($sql) === TRUE) {
  $flag=true;  
  
} else {
  echo "Error in updating record: " . $con->error;
}
}
if($flag==true){
    $sql = "SELECT * FROM customer WHERE Name='$sender'";
     $result = $con->query($sql) or die($con->error);
    while($row = $result->fetch_assoc())
     {
         $s_acc=$row['Acc_Number'];
 }
//  Transcation DEatiled Stored in the DB

 $sql = "SELECT * FROM customer WHERE Name='$receiver'";
 $result = $con->query($sql) or die($con->error);
while($row = $result->fetch_assoc())
  {
      $r_acc=$row['Acc_Number'];
}        
$sql = "INSERT INTO `transfer`(s_name,s_acc_no,r_name,r_acc_no,amount) VALUES ('$sender','$s_acc','$receiver','$r_acc','$amount')";
if ($con->query($sql) === TRUE) {
} else 
{
  echo "Error updating record: " . $con->error;
}
}

if($flag==true){
echo "<script>swal('Money sent', 'Your transaction was successful','success').then(function() { window. location = 'View.php'; });;</script>";
}
elseif($flag==false)
{
    echo "<script>
        $('#text2').show()
     </script>";
}
?>
