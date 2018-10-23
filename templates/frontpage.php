<?php include 'inc/header.php'; ?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Welcome SongBirds</h1>

          <p>This is the Songbirds Community. Here you discover your favourite artistes, expand your playlist and make friends who share your taste in music. Play on!</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>
         
        <div class="container">
		<div class="slideshow-container">
		    
		  <h2>Trending</h2><br>	
		<!-- Below is where you add the sliding images -->
		<div class="row">
		<div class="mySlides fade">
		  <!-- <div class="numbertext">1 / 3</div> -->
		  <img src="images/shaydee.jpg" width="300px" height="300px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <!-- <div class="text">Caption Text</div> -->
		  <img src="images/revival.jpg" width="300px" height="300px">
		</div>
	</div>

        <div class="row">
		<div class="mySlides fade">
		  <!-- <div class="numbertext">2 / 3</div> -->
		  <img src="images/obo.jpg" width="300px" height="300px" style="float: left;"> &nbsp;&nbsp;&nbsp;&nbsp;
		  <img src="images/kimani.jpg" width="300px" height="300px" tyle="float: left;>
		  <!-- <div class="text">Caption Two</div> -->
		</div>
	</div>

        <div class="row">
		<div class="mySlides fade">
		  <div class="col-md-12">
		  <img src="images/migos.jpg" width="300px" height="300px"> &nbsp;&nbsp;&nbsp;&nbsp;</div>
		  
		  <img src="images/tiwa.jpg" width="300px" height="300px">
		  
		</div>
	</div>
		  <br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>
		</div>
      </div><!--  this ends the container above -->
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-6">
            <h2>Are you an Artiste?</h2>
            <p>Get in here to grow your fanbase, network with fans and promoters and make some money from your music. Here at Songbirds Community, we believe that their is no limit to what you can achieve. </p>
            <p><a class="btn btn-secondary" href="artistePage.php" role="button">Upload Music &raquo;</a></p>
          </div>
          
          <div class="col-md-6">
            <h2>You love Music?</h2>
            <p>Become a Songbird today. Save tracks, follow and rate your favourite artistes, build your playlist. We are Unlimited. Play on...</p>
            <p><a class="btn btn-secondary" href="loginPage.php" role="button">Log In &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

   <!-- My baby slider starts here -->
    <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}

</script>
   

<?php include 'inc/footer.php'; ?>