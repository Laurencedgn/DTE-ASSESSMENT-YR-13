<footer>
  <div class="footer-content">
    <div class="footer-logo">
      <img src="../../public/images/logo.png" alt="Rosmini College Logo">
    </div>
    <nav class="footer-nav">
      <ul>
        <li><a href="../../public/home/index.php">Home</a></li>
        <li><a href="../../public/staff/aboutus.php">About Us</a></li>
        <li><a href="../../public/staff/getinvolved.php">Get Involved</a></li>
        <li><a href="../../public/staff/extra.php">Resources</a></li>
        <li><a href="../../public/staff/extra.php">Contact Us</a></li>
      </ul>
    </nav>
    <hr>
    <div class="footer-bottom">
      <p>&copy; 2025 Rosmini College</p>
      <div class="footer-legal">
        <a href="../../public/staff/extra.php">Privacy Policy</a>
        <a href="../../public/staff/extra.php">Terms and Conditions</a>
        <a href="../../public/staff/extra.php">Cookies Policy</a>
      </div>
    </div>
  </div>
</footer>
<style>
footer {
  background-color: #f8f8f8;
  padding: 20px 0;
  font-family: sans-serif;
}

.footer-content {
  max-width: 1200px;
  margin: 0 auto;
  text-align: center; /* Center content within the container */
}

.footer-logo img {
  height: 50px;
  display: block;
  margin: 0 auto 20px;
}

.footer-nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-nav li {
  display: inline;
  margin: 0 15px;
}

.footer-nav a {
  text-decoration: none;
  color: #333;
}

hr {
  border: 1px solid #ddd;
  margin: 20px 0;
}

.footer-bottom {
  display: flex;
  justify-content: center; /* Center items horizontally */
  align-items: center;
  flex-wrap: wrap;
  margin-top: 20px; /* Add some space above the bottom section */
}

.footer-bottom p {
  margin: 0;
  font-size: 0.9em;
  color: #666;
  width: 100%; /* Ensure the copyright takes full width on smaller screens */
  text-align: center; /* Center the copyright text */
}

.footer-legal {
  display: flex; /* Make it a flex container */
  justify-content: center; /* Center legal links horizontally */
  width: 100%; /* Ensure the legal links take full width on smaller screens */
  margin-top: 10px; /* Add some space between copyright and legal links */
}

.footer-legal a {
  text-decoration: none;
  color: #333;
  margin: 0 15px; /* Add spacing around legal links */
  font-size: 0.9em;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .footer-bottom {
    flex-direction: column;
    align-items: center;
  }
}
</style>