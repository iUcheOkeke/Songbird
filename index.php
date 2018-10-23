<!-- <? php include 'db.php'; ?>
<? php 
   //SELECT query
   $query = 'SELECT * FROM profile';
   $profile = mysqli_query($conn, $query);
?> -->
<?php include_once 'config/init.php'; ?>

<?php 
   $template = new Template('templates/frontpage.php');
   $template -> title = 'latest jobs' ;
   echo $template;


