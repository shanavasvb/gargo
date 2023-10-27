<!DOCTYPE html>
<html>
<head>
<title>Garbage Go</title>
<style>

body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5; /* Light grey background */
}

/* Header styles */
header {
    background-color: #4caf50; /* Green background color */
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1); /* Shadow effect */
}

.logo img {
    height: 100px; /* Adjust the height as needed */
}


/* GOOGLE FONTS */




button,
.btn {
  font-family: inherit;
}

/* CSS RESET ENDS */

/* NAVIGATION BAR */

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 20px;
  padding: 0.75rem 5vw;
  box-shadow: 0 0 00px lightgray;
}

nav span {
  color: black;
}

nav p {
  font-size: 25px;
  font-weight: 600;
  cursor: default;

}

nav li {
  display: flex;
  align-items: center;
  list-style: none;
}

nav a {
    font-family: monospace;
  text-decoration: none;
  color: gold;
  padding: 0 1rem;
  transition: 0.1s ease-in-out;
  font-size: 20px;
}
nav a:hover {
  color: ghostwhite;
}

nav .btn {
  padding: 0.5rem 1rem;
  margin: 0 0 0 0.5rem;
  border: 1px solid #4caf50;
  border-radius: 5px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.2s ease-in-out;
  font-size: 17px;
}

.register {
  background-color: #4caf50;
  color: white;
  border: 1px solid #4caf50;
  border-radius: 5px;
}

.register:hover {
  background-color: #3c8c40;
}

.login {
  background-color: white;
  color: #4caf50;
}

.login:hover {
  background-color: #4caf50;
  color: white;
  border: 1px solid #4caf50;
  border-radius: 5px;
}

/* NAVIGATION BAR ENDS */


/* MEDIA QUERIES - RESPONSIVE LAYOUT */

/* DESKTOP - LAPTOP - TABLET */
@media screen and (min-width: 850px){
  nav .small-screens {
    display: none;
  }
}

/* MOBILE */
@media screen and (max-width: 850px){
  nav{
    padding: 1rem 5vw;
  }
  
  nav .small-screens i{
    font-size: 25px;
    cursor: pointer;
  }
  
  nav .big-screens {
    display: none;
  }
}




/* Hero Section styles */
.hero {
    background-color: #4caf50; /* Green background color */
    color: #fff;
    padding: 80px 0;
    text-align: center;
}

.hero-content {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.hero-text {
    max-width: 400px;
}

.hero-text h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.cta-button {
    display: inline-block;
    padding: 15px 30px;
    background-color: #ffcc00; /* Yellow CTA button */
    color: #333;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s;
}

.cta-button:hover {
    background-color: #ff9900; /* Darker yellow on hover */
}

.hero-media img {

    /* Set the maximum width of the image to prevent it from exceeding its container */
    max-width: 500px;
    
    /* Add a border around the image */
    border: 2px solid yellow;

    /* Add padding to the image (space between the image and the border) */
    padding: 10px;

    /* Add a box shadow to give the image depth */
   

    /* Add a border-radius to round the corners */
    border-radius: 10px;

    /* Add a grayscale filter to the image */
    filter: grayscale(50%);

    /* Apply a hover effect */
    transition: all 0.3s;

    animation: upAndDown 2s infinite alternate; /* 2s duration, infinite loop, alternate direction */
}

@keyframes upAndDown {
    0% {
        transform: translateY(0); /* Start at the original position */
    }
    100% {
        transform: translateY(-20px); /* Move the image 20px up */
    }
}

/* Services Section styles */
.services {
    padding: 50px 20px;
    background-color: #f9f9f9; /* Light grey background for services section */
    text-align: center;
}

.services h2 {
    font-size: 36px;
    margin-bottom: 30px;
    color: #333;
}

/* Service Card styles */
.service-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin: 20px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Shadow effect */
    transition: transform 0.3s;
}

.service-card:hover {
    transform: translateY(-10px); /* Lift the card slightly on hover */
}

.service-icon img {
    width: 80px; /* Adjust the icon size as needed */
    margin-bottom: 20px;
}

.service-info h3 {
    font-size: 24px;
    color: #4caf50; /* Green color for service titles */
    margin-bottom: 10px;
}

.service-info p {
    font-size: 16px;
    color: #666;
}

/* Add these styles to your existing styles.css or create a new file for about.css */

/* About Us Section styles */
.about {
    background-color: #4caf50; /* Green background color */
    color: #fff;
    padding: 80px 20px;
    text-align: center;
}

.about h2 {
    font-size: 36px;
    margin-bottom: 30px;
}

.company-overview h3 {
    font-size: 24px;
    margin-bottom: 20px;
}

.company-overview p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 40px;
}


/* Add these styles to your existing styles.css or create a new file for testimonials.css */

/* Testimonials Section styles */
.testimonials {
    background-color: #f9f9f9; /* Light grey background */
    text-align: center;
    padding: 80px 20px;
}

.testimonials h2 {
    font-size: 36px;
    margin-bottom: 30px;
    color: #333;
}

.testimonial-slider {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    justify-content: space-around;
}

.testimonial {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin: 20px;
    width: 300px;
    text-align: left;
}

.customer {
    margin-top: 10px;
    font-style: italic;
    color: #666;
}

/* Add these styles to your existing styles.css or create a new file for contact.css */

/* Contact Section styles */
.contact {
    background-color: #f9f9f9; /* Light grey background */
    text-align: center;
    padding: 50px 20px;
}


.contact-details {
    margin-top: 10px;
}

/* Add more styles as needed for Google Maps integration */

/* Add these styles to your existing styles.css or create a new file for footer.css */

/* Footer Section styles */
.footer {
    background-color: #4caf50; /* Green background color */
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.footer-content {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

.footer-links li {
    margin: 0 20px;
}

.social-media img {
    width: 30px; /* Adjust the social media icon size as needed */
    height: 30px;
    object-fit: cover;
    border-radius: 50%;
    background-color: #fff; /* White background for rounded icons */
    margin: 0 10px;
}

/* Style for the dropdown menu */
.has-dropdown {
    position: relative;
    cursor: pointer; /* Change cursor to pointer on hover for better UX */
}

/* Hide dropdown items by default */
.dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #4CAF50; /* Green background color for dropdown */
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); /* Box shadow for dropdown */
    border-radius: 5px; /* Optional: add border-radius for rounded corners */
    padding: 10px; /* Optional: add padding for dropdown items */
}

/* Show dropdown when parent is hovered */
.has-dropdown:hover .dropdown {
    display: block;
    animation: fadeIn 0.3s ease;
}

/* Style for dropdown items */
.dropdown-item {
    padding: 10px 0;
    transition: background-color 0.3s ease;
    color: #fff; /* Text color for dropdown items */
    text-decoration: none; /* Remove underline from links */
    display: block;
}

/* Change background color of dropdown items on hover */
.dropdown-item:hover {
    background-color: #3e8e41; /* Darker green on hover for visual feedback */
}

/* Fade-in animation */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}




</style>
<link rel="stylesheet" href="mystyl.css">
</head>
<body>


<header>
        <div class="logo">
            <img src="gargoo.png" alt="Waste Management Logo">
        </div>

<nav class="flex align-center">
  <p><span>GAR</span>GO</p>
  <ul>
    <li class="big-screens">
      <a href="#hero">Home</a>
      <a href="login.php">Store</a>
      <a href="#about">AboutUs</a>
  </li>
    
  </ul>
   <li class="nav-item has-dropdown">

          <a href="#"><button class="btn login">Customer</a>

          <ul class="dropdown">

            <li class="dropdown-item">
              <a href="register.php">Register</a>
            </li>
            <li class="dropdown-item">
              <a href="login.php">Log In</a>
            </li>

          </ul>
        </li>

    <li class="nav-item has-dropdown">

          <a href="#"><button class="btn login">Admin</a>

          <ul class="dropdown">

            <li class="dropdown-item">
              <a href="adminlogin.php">Sign In</a>
            </li>

          </ul>
        </li>
</nav>

    </header>

      <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-text">
                <h1>GARGO:Waste <br>Magicians!</br></h1>
                <p>Environmentally friendly waste management services tailored to your needs.</p>
                <br>
                <a href="login.php" class="cta-button">Bookings</a>
            </div>
            <div class="hero-media">
                <!-- You can add your engaging image or video here -->
                <img id="wasteimg" src="waste.jpg" alt="Waste Management Image">
            </div>
        </div>
    </section>


    <section class="services" id="services">
        <h2>Our Services</h2>
        <div class="service-card">
            <div class="service-icon">
                <img src="wc.png" alt="Service Icon 1">
            </div>
            <div class="service-info">
                <h3>Waste Collection</h3>
                <p>Efficient and timely waste collection services tailored for your business needs.</p>
            </div>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <img src="recyc.png" alt="Service Icon 2">
            </div>
            <div class="service-info">
                <h3>Recycling Solutions</h3>
                <p>Environmentally friendly recycling solutions to reduce your carbon footprint.</p>
            </div>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <img src="haz.png" alt="Service Icon 3">
            </div>
            <div class="service-info">
                <h3>Hazardous Waste Disposal</h3>
                <p>Safe disposal of hazardous waste materials in compliance with regulations.</p>
            </div>
        </div>
        <!-- Add more service cards as needed -->
    </section>


<section class="about" id="about">
        <div class="about-content">
            <h2>About Us</h2>
            <div class="company-overview">
                <h3>Company Overview</h3>
                <p><center>Why choose GARGO?</center><br><br><br>Welcome to Gargo - Your Sustainable Waste Management Solution!<br>At Gargo, we are passionate about transforming waste into valuable resources for a greener tomorrow. Our mission is to create a positive impact on the environment by offering comprehensive waste management services and promoting the use of recycled products. Together, we can make a difference in the world we live in!</br><br>Our Services:Book a Waste Collection: With just a few clicks, schedule a convenient waste collection service. We will pick up your recyclable waste right from your doorstep, making it easy and hassle-free for you to contribute to sustainability.</br><br>Recycling Process: At Gargo, we follow a meticulous recycling process to ensure that every piece of waste is treated responsibly. Discover how we sort, process, and transform waste into valuable materials that can be used to create amazing recycled products.Recycled Product Marketplace: Explore our diverse range of eco-friendly products crafted from recycled materials. From trendy fashion accessories to innovative home decor items, each purchase contributes to reducing waste and promoting a circular economy.</br><br>Make an Impact:By choosing Gargo, you are actively participating in a sustainable revolution. Every waste collection and recycled product purchase helps minimize landfill waste and reduces our reliance on natural resources. Join us in building a cleaner, healthier, and more sustainable world for generations to come.</p>
            </div>
            <!-- Add more subsections for mission, values, etc., if needed -->
        </div>
    </section>

     <section class="testimonials">
        <h2>Testimonials</h2>
        <div class="testimonial-slider">
            <div class="testimonial">
                <p>"Great waste management services! Very efficient and eco-friendly."</p>
                <p class="customer">- John Doe, Happy Customer</p>
            </div>
            <div class="testimonial">
                <p>"Prompt and reliable waste collection. Highly recommend!"</p>
                <p class="customer">- Jane Smith, Satisfied Customer</p>
            </div>
            <!-- Add more testimonials as needed -->
        </div>
    </section>

    <section class="contact">
      <div class="contact-details">
            <h3>Contact Details</h3>
            <p>Phone: 123-456-7890</p>
            <p>Email: info@example.com</p>
            <p>Address: 123 Waste Management St, Cityville, ABC 12345</p>
        </div>

        <div id="map"></div> <!-- Google Maps will be embedded here -->
    </section>
       
    <section class="footer">
        <div class="footer-content">
            <ul class="footer-links">
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <div class="social-media">
              <p>&copy; 2023 Waste Management Services. All rights reserved.</p>
                <a href="#"><img src="fb.png" alt="Facebook"></a>
                <a href="#"><img src="tw.png" alt="Twitter"></a>
                <!-- Add more social media icons as needed -->
            </div>
        </div>
    </section>

  

    <script src="script.js"></script>

</body>
</html>
