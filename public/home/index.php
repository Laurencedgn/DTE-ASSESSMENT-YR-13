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

<?php include(SHARED_PATH . "/carousel.php") ?>

<h2 class="section2header" style="margin-top: 50px;" >Discover The Power of Our Team</h2>
    <p class="section2text" style="padding-left: 150px;" style="text-align: left;" style="padding-right: 500px;">Rosmini EnviroGroup is a student-led initiative dedicated to promoting sustainability and environmental awareness within our school and the wider community. Committed to making a positive impact, we organize eco-friendly projects, recycling drives, and educational campaigns to inspire greener habits. Through collaboration and innovation, we strive to reduce our ecological footprint and foster a culture of environmental responsibility. Join us in our mission to protect the planet and create a more sustainable future for all! </p>

<?php include(SHARED_PATH . "/footer.php") ?>