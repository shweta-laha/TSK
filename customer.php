<?php
 $dbhost = 'localhost';
 $dbname = 'transfer';
 $dbusername = 'root';
 $dbpass = '';
 $conn = mysqli_connect("localhost", "root", "", "transfer");
  //check connection
  if(!$conn){
    die('Could not Connect My Sql:'.mysql_error());
 }
 
// SQL query to select data from database
$sql = "SELECT * FROM amount ";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Transaction History</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Exo:400,900' rel='stylesheet' type='text/css'>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Yaldevi:wght@300&display=swap');
html, body{
  height: 100%;
}


div, body{
  margin: 0;
  padding: 0;
  font-family: exo, sans-serif;
  
}
body{
  background: -webkit-linear-gradient(left, #c4252d, #240103);
  background: linear-gradient(to right,#f54242, #1f0303);
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
.topnav {
  overflow: hidden;
  background-color:black;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #aa0404;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 1200px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive.topnav {position: relative;}
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
}
.wrapper {
  height: 100%; 
  width: 100%; 
}

.message {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%; 
  height:45%;
  bottom: 0; 
  display: block;
  position: absolute;
  background-color: rgba(0,0,0,0.6);
  color: #fff;
  padding: 0.5em;
  font-family: Arial, Helvetica, sans-serif;
}

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
  border-radius:2px;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
}
.tbl-header{
  background: linear-gradient(to right,#1f0303,#9e180e,#1f0303,#9e180e);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 18px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 16px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}
section{
  margin: 50px;
}

.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 18px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

@import url(https://fonts.googleapis.com/css?family=Raleway:300);
button {
  background: rgb(255, 69, 56,0.7);
  color: #ccc;
  width: 100px;
  height: 50px;
  border: 0;
  font-size: 18px;
  border-radius: 4px;
  font-family: "Raleway", sans-serif;
  transition: 0.6s;
  overflow: hidden;
}

button:hover {
  background: #4e0404;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #f43303,
              0 0 25px #f41303,
              0 0 50px #f40303,
              0 0 100px #360404;
}

@media screen (max-width: 600px) {
  .button{
    position: relative;
    width:50px;
  }
}

footer {
    background: #000000;
    color: #868c96;
    top:100px;
   position: relative;
   bottom: 0;
   left: 0;
  margin-bottom: 0;
}

footer p {
    padding: 40px 0;
    text-align: center;
    color: aliceblue;
}

footer img {
    width: 44px;
}


</style>
<body>

<div class="topnav" id="myTopnav">
  <a href="main.html" class="active">Home</a>
  <a href="http://localhost/TSK/user.php">Register</a>
  <a href="http://localhost/TSK/alluser.php">Users</a>
  <a href="http://localhost/TSK/amount.php">Money Transaction</a>
  <a href="http://localhost/TSK/customer.php">Transaction History</a>
  <a href="contact.html">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
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

	<section>
		<h1 style="  font-family: 'Cairo', sans-serif;  "><b>TRANSACTION HISTORY</b> <img src="https://img.icons8.com/color/48/000000/transaction.png"/> </h1>
		<!-- TABLE CONSTRUCTION-->
        <div class="tbl-header" class="container-sm">
		<table cellpadding="0" cellspacing="0"  class="container-sm">
			<tr>
       <b><th>SENDER's Name</th></b>
				<th>RECIVER's Name</th>
				<th>Amount</th>
        <th>Account_No</th>
			</tr>
        </div>

         <script>
       $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
       $('.tbl-header').css({'padding-right':scrollWidth});
        }).resize();
        </script>

	
    <?php // LOOP TILL END OF DATA
       while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['SENDER_Name'];?></td>
				<td><?php echo $rows['RECIVER_Name'];?></td>
				<td><?php echo $rows['Amount'];?></td>
        <td><?php echo $rows['Account_No'];?></td>
      
        
			</tr>
          
			<?php
				}
			?>
		</table>
    </section>   
      
    <footer>
  <p style="text-align: center;">CITY BANK OF SPAIN<br>
  &#169; The Sparks Foundation- <i>SHWETA LAHA</i> <img src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/64/4a90e2/external-bank-banking-and-finance-kiranshastry-gradient-kiranshastry.png"/>
<br>
<br>
<img src="https://img.icons8.com/fluency/48/000000/facebook-circled.png"/><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png"/> <img src="https://img.icons8.com/fluency/48/000000/linkedin-circled.png"/><img src="https://img.icons8.com/fluency/48/000000/twitter-circled.png"/>

</p>
</footer>

</body>
</html>
