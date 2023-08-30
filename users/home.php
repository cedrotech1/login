<?php
session_start();
$user=$_SESSION['username'];
if(!isset($user))
{
    header("Location: login.php");
}

echo 'welcame '.$user;

?>
<br>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi at blanditiis fuga doloremque totam sapiente reiciendis neque rem, facere ad doloribus cumque repellat, temporibus minima recusandae quod. Officia, iste dignissimos.
<br>
<h1>home page </h1>
<a href="logout.php">logout</a>