<?php require_once("../../../private/initialize.php")?>

<?php include (SHARED_PATH . "/header.php") ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Navbar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../public/stylesheet/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <a class="logo"><img src="../../../public/images/logo.png" alt="logo" width="auto"
     height="100" /></a>
			<div class= "motto">
					<h1> CHARITY FULFILS THE LAW </h1>
			</div>
            <nav>
				
                <ul class="nav__links">
                    <li><a href="../../../public/home/index.php">Home</a></li>
                    <li><a href="../../../public/staff/index.php">Staff</a></li>
                    <li><a href="../../../public/staff/subjects/index.php">Sports</a></li>
					<li><a href="../extra.php">Support</a></li>
					<li><a href="../extra.php">Learning</a></li>
					<li><a href="../extra.php">News</a></li>
                </ul>
            </nav>
            <a class="cta" href="#">Contact</a>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="#">Home</a>
				<a href="#">Staff</a>
				<a href="#">Sports</a>
				<a href="#">Support</a>
				<a href="#">Learning</a>
				<a href="#">News</a>
            </div>
        </div>
        <script type="text/javascript" src="mobile.js"></script>
    </body>
<article class="gallery">
  <img src="../../images/basketball.jpg" alt="guitar player at concert" />
  <img src="../../images/sport3.png" alt="duo singing" />
  <img src="../../images/criket.jpg" alt="crowd cheering" />
  <img src="../../images/lacrose.jpg" alt="singer performing" />
  <img src="../../images/sport4.png" alt="singer fistbumping crowd" />
  <img src="../../images/tennis.jpg" alt="man with a guitar singing" />
  <img src="../../images/water polo.jpg" alt="crowd looking at a lighted stage" />
  <img src="../../images/rugby.jpg" alt="woman singing on stage" />
</article>
<style>
	body {
  margin: 0;
  min-height: 100vh;
  display: grid;
  place-items: center;
}


.gallery {
  --size: 100px;
  display: grid;
  grid-template-columns: repeat(6, var(--size));
  grid-auto-rows: var(--size);
  margin-bottom: var(--size);
  place-items: start center;
  gap: 5px;
  
  &:has(:hover) img:not(:hover),
  &:has(:focus) img:not(:focus){
    filter: brightness(0.5) contrast(0.5);
  }

  & img {
    object-fit: cover;
    width: calc(var(--size) * 2);
    height: calc(var(--size) * 2);
    clip-path: path("M90,10 C100,0 100,0 110,10 190,90 190,90 190,90 200,100 200,100 190,110 190,110 110,190 110,190 100,200 100,200 90,190 90,190 10,110 10,110 0,100 0,100 10,90Z");
    transition: clip-path 0.25s, filter 0.75s;
    grid-column: auto / span 2;
    border-radius: 5px;

    &:nth-child(5n - 1) { 
      grid-column: 2 / span 2 
    }

    &:hover,
    &:focus {
      clip-path: path("M0,0 C0,0 200,0 200,0 200,0 200,100 200,100 200,100 200,200 200,200 200,200 100,200 100,200 100,200 100,200 0,200 0,200 0,100 0,100 0,100 0,100 0,100Z");
      z-index: 1;
      transition: clip-path 0.25s, filter 0.25s;
    }
    
    &:focus {
      outline: 1px dashed black;
      outline-offset: -5px;
    }
  }
}
	
</style>
<body style= "background-color: 	#4682B4;">
<h1>Sports Page</h1>

	<p>
		Sport at Rosmini College is an integral element of holistic education and helps promote a healthy and active lifestyle. We have a strong sporting culture and value performance at both the elite and participation levels, offering competitive opportunities in various codes. It is important for young men to involve themselves with physical endeavours throughout their time at school and sport offers a platform for this.

We are committed to:

Providing opportunities for all students to develop a healthy lifestyle through a breadth and depth of physical activities.
Ensuring all students participate in a holistic curriculum which embeds physical activity into their daily routine.
Fostering and nurturing athletes who aspire to excellence in their selected codes.
Developing the whole person as well as the athlete.
Engaging with the school's wider community through developing partnerships with external agencies, regional and national sporting bodies and other schools.
Rosmini College primarily focuses on encouraging enjoyment of sport and traditions of sportmanship and fair play. Further to this, excellence is also valued and the Rosmini College High Performance Sport programme is designed to cater for those individuals aiming to follow a pathway of competitive sport.
	</p>
	
	<?php include (SHARED_PATH . "/footer.php") ?>