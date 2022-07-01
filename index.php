<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="./favicon.ico" rel="icon">
    <style type="text/css">
      .signup-op a{
        text-decoration: none;
        border: 2px solid #000;
        background-color: rgba(68,241,154,1);
        padding: 8px 20px;
        color: black;
        transition: 0.8s ease;
      }
      .signup-op a:hover{
        background-color: white;
      }
    </style>
  </head>
  <body>
    <?php include("./header.php")?>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    <div class="title">
      <h1>Tourism Management System</h1>
    </div>
    <div class="contain">
      <div class="heading">
        <h2>Popular Destination</h2>
      </div>
      <div class="box">
        <div class="imgBox">
          <img src="images//destination//tajmahal1.jpg" alt="Taj Mahal Image" style="width: auto;height: 270px;">
        </div>
        <div class="name-text left1">
          <h2>Taj Mahal</h2>
          <a href="destination.php" class="btn">Visit</a>
        </div>
      </div>
      <div class="box">
        <div class="imgBox">
          <img src="images//destination//ladakh1.jpg" alt="Taj Mahal Image" style="width: auto;height: 270px;">
        </div>
        <div class="name-text left2">
          <h2>Ladakh</h2>
          <a href="destination.php" class="btn">Visit</a>
        </div>
      </div>
      <div class="box">
        <div class="imgBox">
          <img src="images//destination//kerala1.jpg" alt="Taj Mahal Image" style="width: auto;height: 270px;">
        </div>
        <div class="name-text left3">
          <h2>Kerala</h2>
          <a href="destination.php" class="btn">Visit</a>
        </div>
      </div>
      <div class="box">
        <div class="imgBox">
          <img src="images//destination//goa1.jpg" alt="Taj Mahal Image" style="width: auto;height: 270px;">
        </div>
        <div class="name-text left4">
          <h2>Goa</h2>
          <a href="destination.php" class="btn">Visit</a>
        </div>
      </div>
      <div class="destination-btn">
        <a href="destination.php">View all</a>
      </div>
    </div>
    <div class="about">
      <h2>Abouts Us</h2>
       <footer>
          <a href="https://www.facebook.com/"> <img src="images//logo//facebook.png" height="25px" width="25px"> </a>
          <a href="https://www.instagram.com/"> <img src="images//logo//instagram.png" height="25px" width="25px"> </a>
          <a href="https://twitter.com/"> <img src="images//logo//twitter.png" height="25px" width="25px"> </a>
          <p>&copy;<strong><span> Kumar Nayan<br> St. Xavier's College, Ranchi</span></strong>. All Rights Reserved</p>
       </footer>
    </div>

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>

  </body>
</html> 