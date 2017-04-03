<?php
require "login.php";

if(isset($_SESSION['id']))
{
#$session =   $_SESSION['id'];
echo " " . $_SESSION['id'] . " ";
}

?>