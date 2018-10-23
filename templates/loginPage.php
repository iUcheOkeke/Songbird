<?php ?>

<!-- The user is redirected here when they click the login/signin buttons -->
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"><meta charset="utf-8">
	<meta name="viewport, width=device-width,initial-scale=1.0">
	<title>Welcome Back!</title>
	<link rel="icon" type="image/jpeg" href="Songbirdicon.jpg">
	<style type="text/css">
	body {
		text-align: center;
		margin: 0;
		padding: 0;
		font-family: 'Open Sans', sans-serif;

	}
		 #header{
    background-image: url("../images/burg.jpg");
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    height: 100px;
    
}
    fieldset {
    	margin: auto;
    	padding: 20px;
    	width: 40%;
    	background-color: #e5e5d8;
    	border-radius: 5px;
    }
    button {
    		background-color: #800020;
    		padding: 10px;
    		border-radius: 30px;
    		color: #daa520;
    		border-style: solid;
	        border-color: #800030;
    }
    button:hover {
    	background-color: #ffd700;
    	color:#800020;
    }
    a {
    	text-decoration: none;

    }
    input{
	border-radius: 3px;
	box-sizing: border-box;
	padding: 8px;
	width: 40%;
	border-style: solid;
	border-width: 0px 0px 0px 2px;
	border-left-color: #ffd700;

}

	</style>
</head>
<body>
<div id="container">
     <div id="header">
      </div>
      <a href="frontPage.php" class="homebutton" style="display: block;background-color: #ffa500; width:5em; border-radius: 5px; text-decoration: none; color: white;padding: 5px; ">
        HOME
     </a><br><br><br><br>

<div class="main">
	<h2>Welcome back Songbirds!</h2>
	<form>
		<fieldset>
		<label for="username">Username:&nbsp;&nbsp;</label>
		<input type="text" name="username" id="username" placeholder="Username" required="true"><br><br>
		<label for="password">Password: &nbsp;&nbsp;</label>
		<input type="password" name="password" id="password" placeholder="Password" required="true"><br><br>
		<button type="submit" id="Loginbutton">Open Sesame</button><br><br>
         </fieldset>
	</form>
	<p>Dont have an existing account? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Create Account <a href="signUpPage.php">here</a></p>
    </div>
    
</body>
</html>