<?php

session_start() ;
//print_r($_SESSION);


if(isset($_SESSION['user_id'])) {

$user_id = $_SESSION['user_id'];


require "database.php" ;
$data = "SELECT * FROM user WHERE id = '$user_id' ";

$data_result = $mysqli->query($data);

$user_full_data = $data_result->fetch_assoc();



}



?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h1>welcome to homepage!</h1>
<body>

<?php if(isset($user_full_data)): ?>

        <p>Hello <?= htmlspecialchars($user_full_data["name"]) ?></p>
        <p>if you like to <a href="logout.php">log out</a></p>

<?php else : ?>

<p><a href='login.php'>log in</a> or <a href="signup.php">sign up </a></p> 



<?php endif ?>




</body>