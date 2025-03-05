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
div {text-align: center;
	color: white;}
	h4{color: white;
		padding-left:10px;
	padding-right: 10px;}
	h3{color: white;
	}
	@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700");
h3 {
  text-transform: uppercase;
  font-family: 'Open Sans', sans-serif;
	color: white}
.header4 
	{
		margin-left: 100px;
	margin-right: 100px;
	color: white;}
h5
	{
		margin-left: 100px;
	margin-right: 100px;}
</style>
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
 
	<h3>THIS IS ROSMINI</h3>
	<h4 class=header4>Rosmini College is a Catholic Boys’ School founded by the Rosminian order to provide a Catholic education to young men on Auckland’s North Shore. We aim to shape them into well-rounded young men ready to leave school who are able to make a positive contribution to society and are empowered to serve others by living out the founder’s maxims.

<h5>Our Mission: Rosmini College supports and develops well-rounded young men while keeping true to the maxims of Antonio Rosmini.  A holistic education in the Rosminian tradition that fosters a genuine encounter with Christ.</h5>

<h5>Our Vision: Christ-centred young men who have the values, attitudes, knowledge and skills to fulfil their life and be empowered to serve others.</h5>

<h5>Our Values: Dignity. Integrity. Fairness. Charity. Justice</h5>

<h5>Our Motto: Charity fulfils the law.</h5>

<h5>Treaty of Waitangi: Rosmini College is committed to the principles of the Treaty of Waitangi and actively supports and encourages the achievement of its Maori pupils and fosters Maori culture.</h5>

<h5>Special Character: Rosmini College is a learning community that requires each student to pursue his fullest potential in spiritual, academic, social, cultural and co-curricular pursuits. The school will equip each student with the desire to keep the Law of Christ;  

		“Love the Lord your God with your whole heart and your neighbour as yourself.”</h5>
	

<?php include(SHARED_PATH . "/footer.php") ?>
		html {
background-color: black;
}
#wrapper {
width: 440px;
margin: auto;
}
#maincontent {
width: 260px;
float: left;
}
aside {
width: 160px;
float: right;
}
footer {
clear: both; /* This forces
the footer to go under
everything else */
}