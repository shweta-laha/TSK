<?php
include("config.php");
error_reporting(0);
$Account_No= $_GET['Account_No'];
$query ="DELETE FROM `amount` WHERE `Account_No`=$Account_No"; 
if($query)
{
    echo " records Deleted Succesfully";  // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}


?>

