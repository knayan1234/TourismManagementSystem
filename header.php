<header>   
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="front3.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="front2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="front1.jpg" style="width:100%">
        </div>
        <div class="main">
            <ul>
              <ul class="list">
                
                  <li class="logo"><a href="index.php"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
                  <div class="search">
                    <form method="POST" action="info.php">
                      <input type="text" name="search_p" placeholder="Search.." size="50">
                  
                      <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 60px; margin-top: 32px;">
                    </form>
                  </div>
              </ul>
              <ul class="list2">
                <li class="active-menu"><a href="#">Home</a></li>
                <li><a id="long" href="destination.php">Destination</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="feedback.php">Feedback</a></li>
              </ul>
            </ul>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
    </header>