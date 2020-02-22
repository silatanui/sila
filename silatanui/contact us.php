<?php

$name =$_POST['name'];
$email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contactus';

$conn=new mysqli( $servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO contactus(name,email,subject,message) VALUES('$name','$email','$subject','$message')";

if($conn->query($sql)===TRUE)
{
    echo "NEW RECORD ADDED SUCCESSFULLY";
}else{
    echo "ERROR!" ."<br>" . $conn->error;
}
$conn->close();


?>