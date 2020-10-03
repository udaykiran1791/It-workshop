<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survey";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


//insertion into db
$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$age=filter_input(INPUT_POST,'age');
$no_of_days=filter_input(INPUT_POST,'days');
$status=filter_input(INPUT_POST,'status');



$sql11="insert into users(name,email,age,no_of_days,status) values('$name','$email',$age,$no_of_days,'$status')";

if($conn->query($sql11)==TRUE)
{
include 'portfolio.html';
}

else
{echo "error";}

$conn->close();
?>