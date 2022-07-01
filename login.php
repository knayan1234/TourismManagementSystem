<!DOCTYPE html>
<html lang="entered">

<head>
  <title> Sign In Form </title>
  <meta name="viewport" content="width= device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/signin.css">
  <link href="./favicon.ico" rel="icon">
</head>
  <body>
    <div class="main">
      <ul>
        <ul class="list">
        <li class="logo"><a href="index.php"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
        <div class="search">
            <form method="POST" action="info.php">
              <input type="text" name="search_p" placeholder="Search.." size="50">
          
              <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
            </form>
        </div>
        </ul>
        <ul class="list2">
        <li><a href="index.php">Home</a></li>
        <li><a id="long" href="destination.php">Destination</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        <li class="active-menu"><a href="login.php">Login</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        </ul>
      </ul>
    </div>
    <form name="myForm" action ="login-action.php" method="POST">

      <div class="login-box">

        <h1> Sign In </h1>

        <div class="textbox">
           
          <input type="text" placeholder="Username" name="user" value="" required> 

        </div>
        <div class="textbox">
          <input type="password" placeholder="Password" name="pass" value="" maxlength="8" required>
        </div>
          
        <input class="btn" type="submit" name="submit" value="Sign in"> 
      </div>

    </form>

  </body>
</html>


