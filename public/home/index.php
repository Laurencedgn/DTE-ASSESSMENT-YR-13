<?php require_once("../../private/initialize.php")?>

<?php include(SHARED_PATH . "/header.php") ?>

        <header>
            <a class="logo"><img src="../../public/images/logo.png" alt="logo"
     height="100" /></a>
			<div class= "motto">
					<h1> CHARITY FULFILS THE LAW </h1>
			</div>
            <nav>
				
                <ul class="nav__links">
                    <li><a href="">Home</a></li>
                    <li><a href="../../public/staff/index.php">Staff</a></li>
                    <li><a href="../../public/staff/subjects/index.php">Sports</a></li>
					<li><a href="../staff/extra.php">Support</a></li>
					<li><a href="../staff/extra.php">Learning</a></li>
					<li><a href="../staff/extra.php">News</a></li>
                </ul>
            </nav>
            <a class="cta" href="../staff/extra.php">Contact</a>
			
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="">Home</a>
				<a href="">Staff</a>
				<a href="">Sports</a>
				<a href="../staff/extra.php">Support</a>
				<a href="../staff/extra.php">Learning</a>
				<a href="../staff/extra.php">News</a>
            </div>
        </div>
        <script src="mobile.js"></script>
		<style>
			body {background-color: 	#4682B4;}
h1 {text-align: center;
	color: white;}
p {text-align: center;
	padding-left:400px;
	padding-right: 400px;
	color: white;}
div {text-align: left;
	color: white;}
	h4{color: black;
    text-align: left;
		padding-left:10px;
	padding-right: 10px;}
	h3{color: black;
	}
  .maintext{color: black;}
	@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700");


/* Style for h4 */
 .maintext {
    border: 2px solid #000; /* Adds a solid black border around the elements */
    padding: 10px; /* Adds space inside the box */
    margin: 10px 20px; /* Adds space outside the box (10px top/bottom, 20px left/right) */
    border-radius: 5px; /* Rounds the corners of the box */
    background-color: #f9f9f9; /* Adds a light background color */
    max-width: 90%; /* Ensures the box doesn't stretch too wide */
    margin-left: auto; /* Centers the box horizontally */
    margin-right: auto; /* Centers the box horizontally */
}

</style>
<h1 class="titletext" style="margin-bottom: 50px;">Rosmini Envirogroup Promoting Nature Awareness and Cleanliness</h3>
<h4 class="header4" style="margin-bottom: 100px;">Join us in our mission to raise awareness about environmental issues and promote cleanliness within the Rosmini College community.</h4>
	
    </body>

	
	 <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
 	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
 	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../public/images/image1.jpg" class="d-block w-100" alt="nun" >
    </div>
    <div class="carousel-item">
      <img src="../../public/images/image2.jpg" class="d-block w-100" alt="nun">
    </div>
    <div class="carousel-item">
      <img src="../../public/images/image3.jpg" class="d-block w-100" alt="nun">
    </div>
	<div class="carousel-item">
      <img src="../../public/images/image4.jpg" class="d-block w-100" alt="nun">
    </div>
    <div class="carousel-item">
      <img src="../../public/images/image5.jpg" class="d-block w-100" alt="nun">
    </div>
  </div>
 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS-Only Carousel</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
  
    <div class="carousel">
        <!-- Images -->
        <div class="carousel-inner">
            <div id="slide1" class="carousel-item">
                <img src="../../public/images/image1.jpg" alt="Image 1">
            </div>
            <div id="slide2" class="carousel-item">
                <img src="../../public/images/image2.jpg" alt="Image 2">
            </div>
            <div id="slide3" class="carousel-item">
                <img src="../../public/images/image3.jpg" alt="Image 3">
            </div>
            <div id="slide4" class="carousel-item">
                <img src="../../public/images/image4.jpg" alt="Image 4">
            </div>
            <div id="slide5" class="carousel-item">
                <img src="image5.jpg" alt="Image 5">
            </div>
        </div>

        <!-- Arrows -->
        <a href="#slide5" class="carousel-control prev">&#10094;</a>
        <a href="#slide2" class="carousel-control next">&#10095;</a>

        <!-- Progress Bars -->
        <div class="progress-bars">
            <a href="#slide1" class="progress-bar"></a>
            <a href="#slide2" class="progress-bar"></a>
            <a href="#slide3" class="progress-bar"></a>
            <a href="#slide4" class="progress-bar"></a>
            <a href="#slide5" class="progress-bar"></a>
        </div>
    </div>
    
</body>
</html>
<style>
/* Carousel Container */
.carousel {
    position: relative;
    max-width: 6000px;
    max-height: 1000px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Carousel Inner Container */
.carousel-inner {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 500%; /* 5 images = 500% width */
}

/* Carousel Items */
.carousel-item {
    width: 20%; /* Each item takes 100% of the container width */
    box-sizing: border-box;
    flex-shrink: 0; /* Prevent shrinking */
}

.carousel-item img {
    width: 100%;
    display: block;
    border-radius: 10px;
}

/* Arrows */
.carousel-control {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    padding: 10px;
    cursor: pointer;
    font-size: 24px;
    border-radius: 50%;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.carousel-control:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

/* Progress Bars */
.progress-bars {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 5px;
}

.progress-bar {
    width: 30px;
    height: 5px;
    background-color: rgba(255, 255, 255, 0.5);
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none;
}

/* Highlight the active progress bar */
#slide1:target ~ .progress-bars [href="#slide1"],
#slide2:target ~ .progress-bars [href="#slide2"],
#slide3:target ~ .progress-bars [href="#slide3"],
#slide4:target ~ .progress-bars [href="#slide4"],
#slide5:target ~ .progress-bars [href="#slide5"] {
    background-color: rgba(255, 255, 255, 1);
}

/* Slide Navigation */
#slide1:target ~ .carousel-inner {
    transform: translateX(0%);
}
#slide2:target ~ .carousel-inner {
    transform: translateX(-100%);
}
#slide3:target ~ .carousel-inner {
    transform: translateX(-200%);
}
#slide4:target ~ .carousel-inner {
    transform: translateX(-300%);
}
#slide5:target ~ .carousel-inner {
    transform: translateX(-400%);
}
</style>


<?php include(SHARED_PATH . "/footer.php") ?>