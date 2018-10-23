<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport, width=device-width,initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../css/signupStyle.css">
  <link rel="icon" type="image/jpeg" href="Songbirdicon.jpg">
	
	<title>Create Account</title>
</head>
<body>

	<div id="container">
     <div id="header">
     
      </div>
      <a href="frontPage.php" class="homebutton" style="display: block;background-color: #ffa500; width:5em; border-radius: 5px; text-decoration: none; color: white;padding: 5px; ">
        HOME
     </a><br><br><br><br>
     	

       <div id="main">
         <form method="post" action="formaction_page.php">
<h2>Become a Songbird </h2>
 <div class="row">
    <div class="col-md-6">
	      <label for="name">Full name</label><br>
	        <input type="text" name="name" id="name" placeholder="Eg. Chibuzor Olumide" required="true"><br><br>
    </div>
      <div class="col-md-6">
          <label for="email">Email Address<br>
            <input type="email" name="email" id="email" required="true">
	      </label>
	  </div>
 
          
 </div>



  <div class="row">
    <div class="col-md-6">
        <label for="password">Password<br>
            <input type="password" name="password" id="password" required="true"  pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
          </label>
    </div>
     <div class="col-md-6">      
        <label for="confirm">Confirm Password</label><br>
            <input type="password" name="password" id="password" required="true"  pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
        
   </div>
  
  </div><br>
	      <button type="submit" class="button">PROCEED</button></form></button><br><br>

    </form>
    <p>I already have an account.&nbsp;&nbsp; <a href="loginPage.php">Log Me In</a></p>
   </div>
  </div>
 </body>
</html>