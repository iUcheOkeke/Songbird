<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title>For Artistes</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpeg" href="Songbirdicon.jpg">
	<style type="text/css">
	body {
		margin: 0;
		padding: 0;
		color: #daa520;
	}
	#container {
		margin: 0px;
		padding: 0px;
	}
		ul {
			list-style-type: none;
			display: block;

		}
		li {
			/*border-style: solid;*/
			border-bottom: 2px solid darkgrey;
			padding: 15px;
			color: #000000

		}
		li:hover {
			background-color: #110000;
			border-left-width: 5px solid black;
			border-left-style: solid;
			color: #daa520;
		}

		#passport {
            width: 200px;
			height: 200px;
			background-color: black;
			margin-left: 2.5em;
			margin-top: 2.5em;
			border-radius: 50%;
		}
		#dashboard {
			width: 30%;
			background-color: lightgrey; 
			float: left;
			position: fixed;

		}
		#dashboardcontent {
           width: 70%; 
           background-color:#110000; 
           float: left; 
           margin-left: 30%; 
           height: 35em;
		}
		
	</style>
</head>
<body>
	<div id="container">

	<div id="dashboard">
		<div id="passport">
			<!-- This will contain the icon for user -->
			<img src="../images/adminpic.png">
		</div>
		<ul>
			<li>Artiste Profile</li>
			<li>Tracks</li>
			<li>eWallet</li>
			<li>Analytics</li>
			<li>Promote Project</li>
		</ul>

	</div>

	<div id="dashboardcontent">
		<header>
		<h1>Upload Music Here</h1>	
		</header>
		<a href="frontPage.php" class="homebutton" style="display: block;background-color: #ffa500; width:5em; border-radius: 5px; text-decoration: none; color: white;padding: 5px; ">
        HOME
     </a><br><br><br><br>

		<main>

			<form action="upload.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="audioFile"/>
				<input type="submit" value="Upload Audio" name="save_audio">
			</form>
		</main>

		
	</div>

    </div>

</body>
</html>