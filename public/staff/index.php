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
    </head>
    <body>
        <header>
            <a class="logo"><img src="../../public/images/logo.png" alt="logo" width="auto"
     height="100" /></a>
			<div class= "motto">
					<h1> CHARITY FULFILS THE LAW </h1>
			</div>
            <nav>
				
                <ul class="nav__links">
                    <li><a href="../../public/home/index.php">Home</a></li>
                    <li><a href="../../public/staff/index.php">Staff</a></li>
                    <li><a href="../../public/staff/subjects/index.php">Sports</a></li>
					<li><a href="extra.php">Support</a></li>
					<li><a href="extra.php">Learning</a></li>
					<li><a href="extra.php">News</a></li>
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
<body style= "background-color: 	#4682B4;">
<button class ="myBtn" id="myBtn">LOGIN</button>

<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <body>
<form action='extra.php'
method='POST'>
<div class='sumn'>
<h1 class="logh1">Staff Login</h1>
	
<span class='label' >Username</span>

<input type='text' name='username' placeholder='Enter your username'
class='field'><br>

<span class='label'>Password</span>

<input type='password' name='password' placeholder='Enter your
 password' class='field'><br>
 
<span class='label'></span><input type='submit'
value='Login'>
	</div>
</form>
</body>

<style>
.sumn {
	padding-top: 100px;}
</style>
  </div>
</div>

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function(close) {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}</script>
	<?php
    require_once("login1_pdo.php");

//input validation
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
		
        
        // You need to implement your own logic for user authentication
        // For example, you can query your database to check if the username and password match
        // This is just a placeholder example, replace it with your actual authentication logic
        $stmt = $conn->prepare("SELECT * FROM login WHERE username = ?");
        $stmt->execute([$username]);
        $login = $stmt->fetch();
		
		
		if ($login["password"] === $password){
       // if (password_verify($login && $password, $login['password'])) {
            // Redirect to a dashboard or another page after successful login
            header("Location: extra.php");
            exit();
        } else {
            // Handle incorrect username or password
            echo "Incorrect username or password. Please try again.";
        }
    }
?>
<h1>Staff Page</h1>
		<p>    <p>
<h2>Digital Technology</h2>
		<p>    <p>
<div class="wrapper">
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="../images/John.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">
Mr John</h5>
<h6>
Head Of Digital Technology Department</h6>
<p class="card-text">
</p>
<div class="socials">
                    </div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="../images/Foong.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">
Mr Foong</h5>
<h6>
Digital Technology Teacher</h6>
<p class="card-text">
</p>
<div class="socials">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
</div>
</div>
</div>
			
				<p>    <p>
<h2>Geography</h2>
				<p>    <p>

<div class="wrapper">
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="../images/latch.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">
Mr Latch</h5>
<h6>
Head Of Digital Technology Department</h6>
<p class="card-text">
</p>
<div class="socials">
                    </div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="../images/maggs.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">
Mr Maggs</h5>
<h6>
Digital Technology Teacher</h6>
<p class="card-text">
</p>
<div class="socials">
                    
                    </div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="../images/cooper.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">

Mr Cooper</h5>
<h6>
Geography Teacher</h6>
<p class="card-text">
</p>
<div class="socials">
                    </div>
</div>
</div>
</div>
</div>                             
</div>
	<p>    <p>
	<div class="wrapper">
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="../images/morrogh.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">
Mrs Morrogh</h5>
<h6>
Geography Teacher</h6>
<p class="card-text">
</p>
<div class="socials">
                    </div>
</div>
</div>
</div>
			<style>
h1 {text-align: center;}
p {text-align: center;}
				

</style>
			<?php include(SHARED_PATH . "/footer.php") ?>