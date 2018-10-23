<?php 
//connect to mysql
$conn = mysqli_connect('localhost', 'root', 'admin0000', 'songbird');

//test connection
if (mysqli_connect_errno()) {
	echo "db connection error:".mysqli_connect_error();
}
?>