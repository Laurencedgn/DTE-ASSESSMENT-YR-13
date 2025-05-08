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
            <a class="cta" href="#">Contact</a>
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
        padding-left: 20px;
        padding-right: 20x;
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

    .header4 {
        color: black;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        font-family: Raleway;
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
    <title>Get Involved | Rosmini EnviroGroup</title>
    <style>
        body {
            font-family: 'Poiret One';
            font-weight: 600;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #2e7d32; /* Green theme */
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600px;
        }
        
        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        textarea {
            height: 100px;
            resize: vertical;
        }
        
        .checkbox-group {
            margin: 10px 0;
        }
        
        .checkbox-group label {
            display: inline-block;
            margin-right: 15px;
            font-weight: 600px;
        }
        
        button {
            background-color: #2e7d32;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: 0.3s;
        }
        
        button:hover {
            background-color: #1b5e20;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Join Rosmini EnviroGroup!</h1>
        <p>Fill out the form below to get involved in our sustainability initiatives. Together, we can make a difference!</p>
        
        <form action="#" method="POST"> <!-- Replace # with your form handler (e.g., Google Forms link) -->
            <div class="form-group">
                <label for="name">Full Name*</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="year">Year Level</label>
                <select id="year" name="year">
                    <option value="">Select Year</option>
                    <option value="9">Year 9</option>
                    <option value="10">Year 10</option>
                    <option value="11">Year 11</option>
                    <option value="12">Year 12</option>
                    <option value="13">Year 13</option>
                    <option value="teacher">Teacher/Staff</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Areas of Interest (Check all that apply)</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="interest" value="recycling"> Recycling Initiatives</label>
                    <label><input type="checkbox" name="interest" value="gardening"> School Gardening</label>
                    <label><input type="checkbox" name="interest" value="events"> Eco-Events & Workshops</label>
                    <label><input type="checkbox" name="interest" value="advocacy"> Environmental Advocacy</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="message">Why do you want to join? (Optional)</label>
                <textarea id="message" name="message"></textarea>
            </div>
            
            <button type="submit">Sign Up Now</button>
        </form>
    </div>
</body>
</html>

<?php include(SHARED_PATH . "/footer.php") ?>