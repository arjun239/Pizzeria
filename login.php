<?php
session_start();
include 'db_connect.php';

if(isset($_POST['email']))
if(isset($_POST['email']))
{
$email=$_POST['email'];
$pwd=$_POST['pwd'];


$sql= "SELECT * FROM user WHERE email='$email' AND pwd='$pwd'";
#$result=$conn->query($sql);
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
if(!$row)
{
	echo "Email or pwd incorrect";
}
else{

      	 $_SESSION['id']=$row["first"];
	 #echo $_SESSION['id'];

header("Location:home.php");

	}
}
else
{
echo "enter the password and email ID";
}

	?>
	