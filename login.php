<center>
<form action="login.php" method='post'>
    <input type="text" placeholder='username' name='un'><br><br>
    <input type="password" placeholder='passwprd' name='ps'><br><br>
    <button type='submit'>login</button>
</form></center>
<?php
 @$username = $_POST['un'];
 @$password = $_POST['ps'];

 $con=mysqli_connect('localhost','root','','myweb');

 $query = "SELECT * FROM users WHERE username = '$username' and password='$password'";
$res= mysqli_query($con,$query);
$count=mysqli_num_rows($res);
 $count;
 if($count==1){
    session_start();
    $_SESSION['username']= $username;
    header("Location: users/home.php");
 }else {
    echo 'login again';
 }




?>