<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
    max-width: 400px;
    
    /* Add a border around the image */
    border: 2px solid yellow;

    /* Add padding to the image (space between the image and the border) */
    padding: 5px;

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

input[type="radio"] {
    margin-right: 10px;
    transform: translateY(2px); /* Align radio buttons vertically in the middle */
}


input[type="text"],
input[type="password"],
input[type="email"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.animate {
    animation: zoom 0.5s;
}

@keyframes zoom {
    from {
        transform: scale(0.8);
    }
    to {
        transform: scale(1);
    }
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
            <img src="gargo.png" alt="Waste Management Logo">
        </div>

<nav class="flex align-center">
 <p><span>GAR</span>GO</p>
  <ul>
    <li class="big-screens">
      <a href="index.php">Home</a>
      <a href="shopstore.php">Store</a>
      <a href="index.php">AboutUs</a>
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

</nav>

    </header>

      <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Customer Registration</h1>
                <br>

        <form name="registrationForm" onsubmit="return validateForm()" action="insert.php"
            method="post">
            <label for="name"><b>Name:</b></label>
            <input type="text" id="name" name="name" placeholder="Full Name" required>

            <label for="gender"><b>Gender:</b></label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>
            <br>

            <label for="phone"><b>Phone:</b></label>
            <input type="text" id="phone" name="phone" pattern="[0-9]{10}" title="Please enter a valid phone number"
                placeholder="Phone Number" required>

            <label for="address"><b>Address:</b></label>
            <input type="text" id="address" name="address" placeholder="Address" required>

            <label for="email"><b>Email:</b></label>
            <input type="email" id="email" name="email" placeholder="Email Address" required>

            <label for="password"><b>Password:</b></label>
            <input type="password" id="password" name="password" placeholder="Password" required>

            <label for="retypePassword"><b>Retype Password:</b></label>
            <input type="password" id="retypePassword" name="retypePassword" placeholder="Retype Password" required>

            <button type="submit" class="cta-button">Register</button>
            <label for="registration">Already have an account ?<a href="login.php">login</a></label>

        </form>

            </div>
            <div class="hero-media">
                <!-- You can add your engaging image or video here -->
                <img src="ewaste.jpg" alt="Waste Management Image">
            </div>
        </div>
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

  

    <script src="script.js">
        function validateForm() {
            var name = document.getElementById("name").value;
            var gender = document.querySelector('input[name="gender"]:checked');
            var phone = document.getElementById("phone").value;
            var address = document.getElementById("address").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var retypePassword = document.getElementById("retypePassword").value;

            if (name == "" || !gender || phone == "" || address == "" || email == "" || password == "" ||
                retypePassword == "") {
                alert("All fields must be filled out");
                return false;
            }

            if (password != retypePassword) {
                alert("Passwords do not match");
                return false;
            }

            // Additional validation logic can be added here if needed

            return true;
        }
    </script>

</body>
</html>
