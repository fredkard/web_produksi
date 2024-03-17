<?php
session_start();
$user = $_SESSION['username'];
$pass = $_SESSION['passwd'];
$dbhost = 'localhost'; 
$dbuser = 'udo'; 
$dbpass = 'udapedi123'; 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass); 
if(! $conn ) { die('Could not connect: ' . mysql_error()); } 
$sql = 'SELECT * from user where `username` = "'.$user.'" and `password` = "'.$pass.'";'; 
mysqli_select_db($conn,'Produksi'); 
$retval = mysqli_query($conn,$sql ); 
if(! $retval ) { die('Could not get data: ' . mysql_error()); }
print_r($retval);

if (match_found_in_database()) {
	    $_SESSION['loggedin'] = true;
	    $_SESSION['username'] = $username; // $username coming from the form, such as $_POST['username']
	    //                                        // something like this is optional, of course
	    }
