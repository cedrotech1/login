<?php
session_start();
$user=$_SESSION['username'];
if(!isset($user))
{
    header("Location: ../login.php");
}


?>
<h1>view page </h1><br>
<a href="logout.php">logout</a>