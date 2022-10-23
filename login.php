<?php 
require "database.php" ;
if (isset($_POST["login"])){

    $email = $_POST['email'];
    $pass = $_POST['password'];


    $login = "SELECT * FROM user WHERE email = '$email' ";


   
    $result = $mysqli->query($login);
    $user_data = $result->fetch_assoc();

    if($user_data){

       if (password_verify($_POST['password'], $user_data['password_hash'])) {

        echo "Login succseful";

       }
       else  {

        echo "Login failed";

       }

?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">


<img src="hm.webp" alt='icon animated' width="90px" draggable="false" >
<h2>Log In</h2>
<form  method="post">

	<input id="text" type="text" name="email" id="" placeholder="Email" autofocus autocomplete="on"><br>

    <input type="password" name="password" id="" placeholder="Password"><br>



    <input id="button" type="submit" name="login" value="Log in"><br>

<a href="#">Forgot Account</a> |<a class="sup" href="https://el7amama.000webhostapp.com/signup.php"> Signup</a>
<br><br><br><br><p>Made By: Bahgat Tarek</p>
</div>
</body>
</html>