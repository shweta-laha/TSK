<? php
include("config.php");
error_reporting(0);
?>

<DOCTYPE! html>
<head>
<title>Register</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Yaldevi:wght@300&display=swap');
html {
  height: 100%;

}
body {
  margin:0;
  padding:0;
  background: linear-gradient(to right,#f54242, #1f0303);
}

.topnav {
  overflow: hidden;
  font-family: 'Cairo', sans-serif;
  font-family: 'Yaldevi', sans-serif;
  background-color:black;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  font-family: 'Cairo', sans-serif;
  font-family: 'Yaldevi', sans-serif;
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

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
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
}

.login-box {
  position: relative;
  top: 70%;
  left: 50%;
  width: 400px;
  padding: 40px;
  font-family: 'Cairo', sans-serif;
  font-family: 'Yaldevi', sans-serif;
  transform: translate(-50%, -50%);
  background: linear-gradient(to right,#1f0303,#9e180e,#1f0303);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #05fdfd;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  justify-content:center;
  margin-left:28%;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #4e0404;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #f43303,
              0 0 25px #f41303,
              0 0 50px #f40303,
              0 0 100px #360404;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
footer {
    background: #000000;
    color: #868c96;
    top:300px;
   position: relative;
   bottom: 0;
   left: 0;
  margin-bottom: 0;
}

footer p {
    padding: 40px 0;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    color: aliceblue;
}

footer img {
    width: 44px;
}

button {
  background: #ff4d00;
  color: white;
  width: 100px;
  height: 50px;
  border: 0;
  font-size: 18px;
  border-radius: 4px;
  font-family: 'Cairo', sans-serif;
  font-family: 'Yaldevi', sans-serif;
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

	<div class="login-box">
		<h2>Create Account <img src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/64/000000/external-bank-banking-and-finance-kiranshastry-gradient-kiranshastry.png"/></h2>
		 <form action="" method="post" >
		  <div class="user-box">
			<input type="text" name="First_Name" required="">
			<label>First Name</label>
		  </div>
          <div class="user-box">
			<input type="text" name="Last_Name" required="">
			<label>Last Name</label>
		  </div>
		  <div class="user-box">
			<input type="Email" name="Email" required="">
			<label>Email</label>
		  </div>
		  <div class="user-box">
			<input type="number" name="Customer_No" required="">
			<label>Customer No</label>
		  </div>
          <div class="user-box">
                <button onclick=myFunction() type="submit" name="Submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit
                 </button>
              </div>
         <br><br>
          <label style="color:white">
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      <p style="color:white">By creating an account you agree to our <p style="color:dodgerblue">Terms & Privacy</a>.</p>
    </form>
	  </div>
      <script>
function myFunction() {
  alert("Account Created Succesfully");
}
</script>

      <?php
     if (isset( $_REQUEST['First_Name']) && isset($_REQUEST['Last_Name']) && isset($_REQUEST['Email']) && isset($_REQUEST['Customer_No']) ){
     $dbhost = 'localhost';
     $dbname = 'transfer';
     $dbusername = 'root';
     $dbpass = '';
     $conn = mysqli_connect("localhost", "root", "", "transfer");

      //check connection
      if(!$conn){
        die('Could not Connect My Sql:'.mysql_error());
     }


    $First_Name =(isset( $_REQUEST['First_Name'])? $_REQUEST['First_Name'] : '');
    $Last_Name =(isset($_REQUEST['Last_Name']) ? $_REQUEST['Last_Name'] : '');
    $Email = (isset($_REQUEST['Email']) ? $_REQUEST['Email'] : '') ;
    $Customer_No = (isset($_REQUEST['Customer_No']) ? $_REQUEST['Customer_No'] : '') ;

    $sql = "INSERT INTO user VALUES('$First_Name', 
        '$Last_Name','$Email','$Customer_No')";


     
   if(mysqli_query($conn, $sql)){
      echo '<script>alert("\n Account Created Successfully!")</script>';
 
  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }
       $conn->close();
} 
 ?>

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