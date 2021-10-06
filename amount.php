<? php
include("config.php");
error_reporting(0);
?>
<html>
  <title>Money Transaction</title>
    <head>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Exo:400,900' rel='stylesheet' type='text/css'>
    </head> 
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Yaldevi:wght@300&display=swap');
html, body{
  height: 100%;
}
body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: linear-gradient(to right,#f54242, #1f0303);
}

div, body{
  margin: 0;
  padding: 0;
  font-family: exo, sans-serif;
  
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

button {
  background: #ff4d00;
  color: white;
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

    <div class="container">
    <h3 style="color:#07faf6;   font-family: 'Cairo', sans-serif; font-family: 'Yaldevi', sans-serif;" >MONEY TRANSACTION <img src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/64/000000/external-transfer-data-science-kiranshastry-gradient-kiranshastry-3.png"/></h3>
            <form action="" method="post" >
              <div class="row">
                <div class="col-25">
                  <label for="fname">SENDER_Name</label>
                </div>
                <div class="col-75">
                <input type="text" name="SENDER_Name" placeholder="Sender's Name"  required="">
                </div>
              </div>

              <div class="row">
                <div class="col-25">
                  <label for="lname">RECIVER_Name</label>
                </div>
                <div class="col-75">
                  <input type="text"  name="RECIVER_Name" placeholder="Reciever's Name"  required="">
                </div>
               </div>
                <div class="row">
                  <div class="col-25">
                    <label >Amount</label>
                  </div>
                  <div class="col-75">
                    <input type="text"  name="Amount" placeholder="Enter the Amount"  required="">
                  </div>
              </div>

              <div class="row">
                  <div class="col-25">
                    <label >Account_No</label>
                  </div>
                  <div class="col-75">
                    <input type="text"  name="Account_No" placeholder="Enter the Amount"  required="">
                  </div>
              </div>
              <div class="row">
                <button type="submit" name="Submit">Submit</button>
              </div>
            </form>
        </div>

        <?php
       if (isset( $_REQUEST['SENDER_Name']) && isset($_REQUEST['RECIVER_Name']) && isset($_REQUEST['Amount'])){
     $dbhost = 'localhost';
     $dbname = 'transfer';
     $dbusername = 'root';
     $dbpass = '';
     $conn = mysqli_connect("localhost", "root", "", "transfer");

      //check connection
      if(!$conn){
        die('Could not Connect My Sql:'.mysql_error());
     }


    $SENDER_Name =(isset( $_REQUEST['SENDER_Name'])? $_REQUEST['SENDER_Name'] : '');
    $RECIVER_Name =(isset($_REQUEST['RECIVER_Name']) ? $_REQUEST['RECIVER_Name'] : '');
    $Amount = (isset($_REQUEST['Amount']) ? $_REQUEST['Amount'] : '') ;
    $Account_No = (isset($_REQUEST['Account_No']) ? $_REQUEST['Account_No'] : '') ;
    
    $sql = "INSERT INTO amount VALUES('$SENDER_Name', 
        '$RECIVER_Name','$Amount','$Account_No')";
     
   if(mysqli_query($conn, $sql)){
      echo '<script>alert("\n Money Transfered Successfully")</script>';
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