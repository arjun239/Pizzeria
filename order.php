<?php
include 'db_connect.php';
$itemName=$_POST['NameOfItem'];
$quantity=$_POST['quantity'];
$IndivPrice=$_POST['IndivPrice'];
$totalPrice=$quantity*$IndivPrice;

$sql= "INSERT INTO order(itemName, price, quantity, totalPrice) VALUES ('$itemName', '$quantity','$IndivPrice','$totalPrice)";
