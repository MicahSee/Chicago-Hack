<!DOCTYPE html>
<html lang = "en-US">
  <head>
    <meta charset = "UTF-8">
    <title>NextHorizon.html</title>
    <link rel = "stylesheet" type = "text/css" href = "../CSS/index.css"/>
  </head>
  <body>
    <header>
      <div align="center">
          <img src="../Images/updatedBanner.jpg" alt="banner"/>
      </div>
      <h6>This website was created by Micah See, Eric Schnelker, Dominic Pancella, and Sean O'Brien using HTML, CSS, PHP, Python, mySQL, and Firebase at Chicago Hacks on May 27th and 28th, 2017.</h6>
      <div class="container">
        <div><a href="index.php" class="btn">Home</a></div>
        <div><a href="edu.php" class="btn">Education</a></div>
        <div><a href="jobs.php" class="btn">Jobs</a></div>
        <div><a href="about.php" class="btn">About Us</a></div>
        </div>
    </header>
  <main>
    <div class="slideBackground">
  <!-- Following Slideshow From https://codepen.io/AMKohn/pen/EKJHf -->
        <ul class="slides">
          <input type="radio" name="radio-btn" id="img-1" checked />
          <li class="slide-container">
    	      <div class="slide">
    		         <img src="../Images/military_flag.jpg"/>
            </div>
    	      <div class="nav">
    		       <label for="img-6" class="prev">&#x2039;</label>
    		       <label for="img-2" class="next">&#x203a;</label>
    	      </div>
          </li>

          <input type="radio" name="radio-btn" id="img-2" />
          <li class="slide-container">
            <div class="slide">
              <img src="../Images/flag_parade.jpeg" />
            </div>
    	      <div class="nav">
    		         <label for="img-1" class="prev">&#x2039;</label>
    		         <label for="img-3" class="next">&#x203a;</label>
    	      </div>
          </li>

          <input type="radio" name="radio-btn" id="img-3" />
          <li class="slide-container">
            <div class="slide">
              <img src="../Images/veteran_flag.jpg"/>
            </div>
        		<div class="nav">
        			<label for="img-2" class="prev">&#x2039;</label>
        			<label for="img-4" class="next">&#x203a;</label>
        		</div>
          </li>

          <input type="radio" name="radio-btn" id="img-4" />
          <li class="slide-container">
            <div class="slide">
              <img src="../Images/memorial_iwo_jima.jpg" />
            </div>
        		<div class="nav">
        			<label for="img-3" class="prev">&#x2039;</label>
        			<label for="img-5" class="next">&#x203a;</label>
        		</div>
          </li>

          <input type="radio" name="radio-btn" id="img-5" />
          <li class="slide-container">
            <div class="slide">
              <img src="../Images/silhouette_sunset.jpg" />
            </div>
        		<div class="nav">
        			<label for="img-4" class="prev">&#x2039;</label>
        			<label for="img-6" class="next">&#x203a;</label>
        		</div>
          </li>

          <input type="radio" name="radio-btn" id="img-6" />
          <li class="slide-container">
            <div class="slide">
              <img src="../Images/flag_salute.jpg" />
            </div>
        		<div class="nav">
        			<label for="img-5" class="prev">&#x2039;</label>
        			<label for="img-1" class="next">&#x203a;</label>
        		</div>
          </li>

          <li class="nav-dots">
            <label for="img-1" class="nav-dot" id="img-dot-1"></label>
            <label for="img-2" class="nav-dot" id="img-dot-2"></label>
            <label for="img-3" class="nav-dot" id="img-dot-3"></label>
            <label for="img-4" class="nav-dot" id="img-dot-4"></label>
            <label for="img-5" class="nav-dot" id="img-dot-5"></label>
            <label for="img-6" class="nav-dot" id="img-dot-6"></label>
          </li>
        </ul>
        <!-- END OF OPEN SOURCE CODE-->
      </div>

      <div class = "sidebar">
        <div align="center">
          <h1>Mission of Next Horizons</h1>
          <h2>Next Horizons is a non-profit organization dedicated to veterans
              of the United States Armed Forces. Our mission is to reinstate
              veterans into a normal life in society after they return home,
              where they can have access to shelter, a job, education at the
              college level, health benefits and services, and anything else
              they might need. Next Horizons will give veterans simple, free
              access to the beginning of a new chapter in their lives.</h2>
          </div>
      </div>
    </main>
    <footer>
      <div align = "center">
        <h4>Veteran Crisis Hotline: Dial 1-800-273-8255 and press 1</h4>
        <h6>Disclaimer: Next Horizons does not own any of the above content. This content is being used for a non-profit organization benefitting veterans across the United States.</h6>
      </div>
    </footer>

  </body>
</html>
