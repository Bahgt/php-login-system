


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SignUp Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
	<script src="/js/validation.js" defer></script>
</head>
<body>

<div class="container">

<img src="hm.webp" alt='icon animated' width="90px" draggable="false" >
<h2>Sign Up</h2>

<form action ="process.php" method="post" id="form" novalidate>
    
     <div>
            <label for="name"></label>
    
	<input type="text" name="name" id="name" placeholder="User name" autofocus ><br>
        </div>
<div>
    <label for="email"></label>
	<input type="text" name="email" id="email" placeholder="Email" autocomplete="on"><br>
</div>

    <div>
        <label for ="password"></label>
    <input type="password" name="password" id="password" placeholder="Password"><br>
    
</div>
    <div>
        <label for="confirm_password"></label>
    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password"><br>

</div>

    <input type="submit" id="submit"value="Sign Up"><br>
</form>    

<a href="#">Forgot Account</a> |<a class="sup" href="https://el7amama.000webhostapp.com/login.php"> Log In</a>
<br><br><br><br><p>Made By: Bahgat Tarek</p>
</div>
</body>
</html>