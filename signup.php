
<?php

$conn= mysqli_connect("localhost","root" ,"","login");

if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}



$first=$_POST['firstname'];
$last=$_POST['lastname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];



$sql= "INSERT INTO user (first, last, phone, email, pwd) VALUES ('$first', '$last','$phone','$email','$pwd')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

header("Location:../index.php");
?>
