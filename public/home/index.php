<?php require_once("../../private/initialize.php")?>

<?php include (SHARED_PATH . "/header.php") ?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Navbar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../public/stylesheet/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Cinzel:wght@400..900&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Poiret+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
        <a class="logo"><img src="../../public/images/logo.png" alt="logo" height="100" width="110"/></a>
			<div class= "motto">
					<h1> ROSMINI ENVIROGROUP </h1>
			</div>
            <nav>
				
                <ul class="nav__links">
                    <li><a href="../../public/home/index.php">Home</a></li>
                    <li><a href="../../public/staff/aboutus.php">About us</a></li>
                    <li><a href="../staff/getinvolved.php">Get Involved</a></li>
					<li><a href="../staff/extra.php">Resources</a></li>
					<li><a href="../staff/extra.php">Contact us</a></li>
                </ul>
            </nav>
            <a class="cta" href="#">Login</a>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="#">Home</a>
				<a href="#">About us</a>
				<a href="#">Get Involved</a>
				<a href="#">Resources</a>
				<a href="#">Contact us</a>
            </div>
        </div>
        <script type="text/javascript" src="mobile.js"></script>
    </body>

<script src="mobile.js"></script>

<style>
    .motto{
        font-family: Cinzel;
    }
    .nav__links a {
        color: black;
    }
    body {
        background-color: #ffffff;
    }

    h1 {
        text-align: center;
        color: black;
    }
    .titletext {
        text-align: center;
        color: black;
        padding-top: 75px;
        font-family: Poiret One;
        font-weight: 600;
    }

    p {
        text-align: center;
        padding-left: 400px;
        padding-right: 400px;
        color: black;
    }
    .section2text{
        text-align: left;
        font-size: 15px;
        font-family: Raleway;
        line-height: 1.5;
    }
    .section2header{
        text-align: left;
        padding-left: 150px;
        margin-bottom: 25px;
        font-family: Poiret One;
        font-weight: 600;
    }
    div {
        text-align: left;
        color: white;
    }

    .header4 {
        color: black;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        font-family: Raleway
    }

    h3 {
        color: black;
    }

    .maintext {
        color: black;
        border: 2px solid #000;
        padding: 10px;
        margin: 10px 20px;
        border-radius: 5px;
        background-color: #f9f9f9;
        max-width: 90%;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<h1 class="titletext" style="margin-bottom: 50px;">Rosmini Envirogroup Promoting Nature Awareness and Cleanliness</h1>
<h4 class="header4" style="margin-bottom: 50px;">Join us in our mission to raise awareness about environmental issues and promote cleanliness within the Rosmini College community.</h4>
<head>
<title>Envirogroup Buttons</title>
<style>
  .button-container {
    display: flex;
    justify-content: center;
    margin-bottom: 75px; /* Add some space above the buttons */
  }

  .button {
    padding: 10px 20px;
    margin: 0 10px;
    border: none;
    background-color: #4CAF50; /* Example brown color */
    border-radius: 15px;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none; /* Remove underline from links */
    color: white; /* Set text color to white */
  }

  .learn-more {
    
  }

  .get-involved {
    
  }
  .button-container{
    font-family: Poiret One;
    font-weight: 600;
  }
  .learn-more:hover {
  transform: scale(1.05); 
  background-color: white; /* Example brown color */
  color: #4CAF50
  }
  .learn-more {
  transition: transform .2s;
  }
  .get-involved:hover {
  transform: scale(1.05); 
  background-color: white; /* Example brown color */
  color: #4CAF50
  }
  .get-involved {
  transition: transform .2s;
  }
</style>
</head>
<body>

  <div class="button-container">
    <a href="../staff/extra.php" class="button learn-more">Learn More</a>
    <a href="../staff/getinvolved.php" class="button get-involved">Get Involved</a>
  </div>

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
                
                <img src="../../public/images/2023_05_15_img_2902.jpg" class="d-block w-100" alt="nun">
            </div>
            <div class="carousel-item">
                <img src="../../public/images/i2.jpg" class="d-block w-100" alt="nun">
            </div>
            <div class="carousel-item">
                <img src="../../public/images/i3.jpg" class="d-block w-100" alt="nun">
            </div>
            <div class="carousel-item">
                <img src="../../public/images/i4.jpg" class="d-block w-100" alt="nun">
            </div>
            <div class="carousel-item">
                <img src="../../public/images/image1.jpg" class="d-block w-100" alt="nun">
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

<div class="carousel">
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
            <img src="../../public/images/image5.jpg" alt="Image 5">
        </div>
    </div>
    <a href="#slide5" class="carousel-control prev">&#10094;</a>
    <a href="#slide2" class="carousel-control next">&#10095;</a>
    <div class="progress-bars">
        <a href="#slide1" class="progress-bar"></a>
        <a href="#slide2" class="progress-bar"></a>
        <a href="#slide3" class="progress-bar"></a>
        <a href="#slide4" class="progress-bar"></a>
        <a href="#slide5" class="progress-bar"></a>
    </div>
</div>
<body>
    <h2 class="section2header" style="margin-top: 50px;" >Discover The Power of Our Team</h2>
    <p class="section2text" style="padding-left: 150px;" style="text-align: left;" style="padding-right: 500px;">Rosmini College, a prominent Catholic boys' school located on Auckland's North Shore, is renowned for its commitment to academic excellence, character formation, and environmental stewardship. The college's Envirogroup plays a vital role in fostering sustainability and environmental awareness among students and staff. This dedicated group organizes initiatives such as tree planting, waste reduction campaigns, and educational projects to promote eco-friendly practices within the school and the wider community. By encouraging students to take an active role in protecting the environment, Rosmini College's Envirogroup not only contributes to a greener future but also instills a sense of responsibility and respect for nature in its members. Through these efforts, the college demonstrates its commitment to living out its values of service and care for creation.</p>
<style>
    .carousel {
        position: relative;
        max-width: 6000px;
        max-height: 1000px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .carousel-inner {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 500%;
    }

    .carousel-item {
    width: 1600px; /* Fixed width for each carousel item */
    height: 1000px; /* Fixed height for each carousel item */
    box-sizing: border-box;
    flex-shrink: 0;
    overflow: hidden; /* Ensure the image doesn't overflow the container */
}

.carousel-item img {
    width: 100%; /* Make the image fill the width of the container */
    height: 100%; /* Make the image fill the height of the container */
    display: block;
    border-radius: 10px;
    object-fit: cover; /* Ensure the image covers the entire container */
    object-position: center; /* Center the image within the container */
}
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
        background-color: #fff;
    }
</style>
<?php include(SHARED_PATH . "/footer.php") ?>