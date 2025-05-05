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
                    <li><a href="../../public/staff/getinvolved.php">Get Involved</a></li>
					<li><a href="extra.php">Resources</a></li>
					<li><a href="extra.php">Contact us</a></li>
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
    footer {
        background-color: #f8f8f8;
        padding: 20px 0;
        font-family: sans-serif;
    }
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
        padding-left: 210px;
        padding-right: 210px;
        color: black;
    }
    .section2text{
        text-align: left;
        font-size: 15px;
        font-family: Raleway;
        line-height: 1.5;
        padding-right: 150px;
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

    .content-with-image {
        display: flex;
        align-items: center;
        gap: 20px;
        margin: 20px 0;
    }

    .text-box {
        flex: 1;
        margin-left: 150px;
        margin-right: 10px;
        background-color: #f5f5f5;
        border-radius: 8px;
    }

    .image-box {
        padding left: 210px;
        flex: 1;
        text-align: center;
    }

    .image-box img {
        padding left: 210px;
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }
    .textboxheader {
        color: black;
        margin-top: 20px;
    }
    .textboxtext {
        margin-top: 20px;
    }
</style>



<body>
<h1 class="titletext" style="margin-bottom: 50px;">Rosmini Envirogroup Promoting Nature Awareness and Cleanliness</h1>
<h4 class="header4" style="margin-bottom: 100px;">Working to make New Zealand a better, cleaner place</h4>
<h2 class="section2header" style="margin-top: 50px;" >Who We Are</h2>
<p class="section2text" style="padding-left: 150px;" style="text-align: left;">Rosmini College, a prominent Catholic boys' school located on Auckland's North Shore, is renowned for its commitment to academic excellence, character formation, and environmental stewardship. The college's Envirogroup plays a vital role in fostering sustainability and environmental awareness among students and staff. This dedicated group organizes initiatives such as tree planting, waste reduction campaigns, and educational projects to promote eco-friendly practices within the school and the wider community. By encouraging students to take an active role in protecting the environment, Rosmini College's Envirogroup not only contributes to a greener future but also instills a sense of responsibility and respect for nature in its members. Through these efforts, the college demonstrates its commitment to living out its values of service and care for creation.</p>
<div class="content-with-image">
    <!-- Text Box on Left -->
    <div class="text-box">
        <h2 class="textboxheader" style="text-align: center;">Environmental Education</h2>
        <p class="textboxtext">Engage in interactive workshops and seminars to learn about environmental issues and how to make a positive impact.</p>
    </div>
    
    <!-- Image on Right -->
    <div class="image-box">
        <img src="images/environment-workshop.jpg" alt="Environmental Workshop">
    </div>
</div>
</body>
<?php include(SHARED_PATH . "/footer.php") ?>