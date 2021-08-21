<!DOCTYPE html>
<html>
<title>BankNine</title> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{

  }
.button {
      background-color: #2b67f8; 
      border-radius: 29px;
    border-bottom-color:red;
      color: white;
      padding: 10px 25px;
      text-align: center;
      text-decoration:none;
      display: inline-block;
      font-size: 20px;
    }
     .header {
    margin-left: -2px;
    color: #243e83;
    font-size: 61px;
    font-variant: small-caps;
    margin-top: -140px;
}
    .button:hover {background-color: #1844aa}
    
    .button:active {
      background-color: #1844aa;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }
            
    .topnav {
  overflow: hidden;
 
}
.btnstyle{
  padding-left: 7rem;
  padding-top: 34px;
}


.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #2b67f8;
  color: white;
}

.topnav a.active {
  background-color: #2b67f8;
  color: white;
}

.topnav-right {
  float: right;
}
body{
  background-image:url('16582.jpg');
  width:auto;
  height:100%;
  background-size:cover;
}

button {
  display: inline-block;
  border-radius: 4px;
  background-color:#2b67f8;
  border: none;
  color: white;
  text-align: center;
  font-size: 15px;
  font-family:'Trebuchet MS';
  padding: 10px;
  width: 90%;
  margin: 5px;
}

.tablediv{
  float: left;
  padding: 8px;
  margin:5px;
  width:70%; 
  /*margin-left:15%; 
  margin-right:15%;*/
  border:2px solid white;
  padding-left:-20rem;
}
.img{
     height: 19rem;
     padding-left: 69rem;
     padding-bottom: 100rem;
     margin-top: -300px;
     position: absolute;
    }

table{
  
  font-family:'Trebuchet MS',sans-serif;
  font-weight:bold;
  padding:5px;
  margin:2px;
  background: white;
  width: 100%;  
  border:0px solid black;

}
th{
  padding: 10px 10px;
  text-align: center;
  font-weight: 500;
  font-size: 20px;
  color: navy;
  text-transform: uppercase;
}
td{
  padding: 0px;
  text-align: center;
  vertical-align:middle;
  font-weight: bold;
  font-size: 18px;
  color: black;
}
@media screen and (max-width: 800px){
    div.tablediv{
        width:100%; 
        margin-left:0%; 
        margin-right:0%;
        padding:0px;
        margin:0px;
        }
     table{
         padding:0px;
         margin:0px;
     } 
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
   
   <div class="topnav">
    <div class="topnav-right">
        <a href="index.html"  >Home</a>
        <a class="active" href="View.php">View Customers</a>
        <a href="transc.php">View Transactions</a>
  </div>
</div>

<div class="header">
<h5 style="padding-right: 1rem">BankNine</h5>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<div style="float: center;">
<div class="tablediv"> 
<table>
<tr>
<th >Name</th>
<th>Account Number</th>
<th> Money</th>
</tr>

<?php
$con = mysqli_connect("localhost", "id17440009_anushka", "vn?_muoC3~>)WrqI", "id17440009_bank_system");

// Check connection

if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT Name, Acc_Number FROM customer";

$result = $con->query($sql) or die($con->error);


 

// output data of each row

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<form method ='post' action = 'OneCustomer.php'>";
    echo "<td>" . $row["Name"]. "</td><td>" . $row["Acc_Number"] . "</td>";
    echo "<td ><a href='OneCustomer.php'><button type='submit'' name='user'  id='users1' value= '{$row['Name']}' ><span>Expand</span></button></a></td>";
    echo "</tr>";
}
echo "</table>";

$con->close();

?>

</table>
<img src="2.png" class="img"></img>
</div>
</div>
</head>
</body>
</html>
