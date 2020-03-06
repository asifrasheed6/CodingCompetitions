<?php
$web_url = "http://localhost/competition/"; // YOUR WEBSITE URL (MAKE SURE IT ENDS WITH /
$web_email = "asif@linuxmail.org"; // YOUR WEBSITE EMAIL
$web_name = "BaseCode"; // YOUR COMPETITION NAME GOES HERE

// MYSQL CONFIGUATION:
$username="asif";
$password="password";
$host="localhost";
$database="Competition";

    $database = mysqli_connect($host, $username, $password, $database);
    
    if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
	}
?>

