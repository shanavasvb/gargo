<!DOCTYPE html>
<html>
<head>
<title>Service</title>
<style>

body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
  background-image: url('wmbg.png');

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
  padding: 0.50rem 5vw;
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
    background-color: ; /* Green background color */
    color: #fff;
    padding: 40px 0;
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
    width: 100%; /* Ensure the image takes the full width of the container */
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

       body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    display: grid;
    justify-content: ;
    align-items: ;
    height: ;
    margin: 0;
}

.container {
    background-color: seagreen;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

button {
    background-color: #4caf50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}

.error-message {
    color: #ff0000;
    margin-top: 5px;
}

.fade-in {
    animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

input[type="radio"] {
    margin-right: 10px;
    transform: translateY(2px); /* Align radio buttons vertically in the middle */
}


input[type="text"],
input[type="tel"],
input[type="email"] {
    width: calc(100% - 600px);
    padding: 10px;
    margin-bottom: 0px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.box {
        width: 120px;
        height: 30px;
        border: 1px solid #999;
        font-size: 18px;
        color: #1c87c9;
        background-color: greenyellow;
        border-radius: 5px;
        box-shadow: 4px 4px #ccc;
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
      <a href="index.php">Home</a>
      <a href="#">Store</a>
      <a href="index.php">About Us</a>
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
                <div class="container">
        <h2>Service Booking</h2>
        <br>
        <form id="serviceForm">
            <div class="form-group">
                <label for="customerName">Customer Name:</label>
                <input type="text" id="customerName" name="customerName" required>
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="wasteType">Waste Type:</label>
                <select class="box" id="wasteType" name="wasteType" required>
                    <option value="plastic">Plastic</option>
                    <option value="paper">Paper</option>
                    <option value="glass">Glass</option>
                    <option value="organic">Organic</option>
                    <!-- Add more waste type options as needed -->
                </select>
            </div>
        
            <div class="form-group">
<section>
    <input type="radio" name="styles" id="smal" checked>
    <label for="default">Small (<=20kg)</label>
        <b>150</b>
        For just Rs.150,give your up to 20kg garbage a professional farewell.
</section>

<section>
    <input type="radio" name="styles" id="med">
    <label for="med">Medium (<=60kg)</label>
    <b>300</b>
       Rs.300 is all you need to manage up to 60kg of waste like a pro.
</section>

<section>
    <input type="radio" name="styles" id="larg" class="custom-radio">
    <label for="larg">Large(<=120kg)</label>
    <b>500</b>
       Our large package will take care of your heavist,smellist and bulkiest waste for as littile as Rs.500.
</section>
</div>

   <a href=""> <button type="submit" onclick="paymentt.php" class="registerbtn">Pay Now</button></a>
  
    </div>

        </form>
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
         document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("serviceForm");
    const submitBtn = document.getElementById("submitBtn");

    submitBtn.addEventListener("click", function () {
        const customerName = document.getElementById("customerName").value;
        const phoneNumber = document.getElementById("phoneNumber").value;
        const address = document.getElementById("address").value;
        const email = document.getElementById("email").value;

        // Basic form validation
        if (!customerName || !phoneNumber || !address || !email) {
            showError("All fields are required.");
            return;
        }

        // Additional custom validation logic can be added here

        // If all validations pass, show success message and fade out the form
        showSuccess("Payment Successful!");
        form.classList.add("fade-in");
        setTimeout(() => {
            form.style.display = "none";
        }, 5000);
    });

    function showError(message) {
        const errorDiv = document.createElement("div");
        errorDiv.className = "error-message";
        errorDiv.textContent = message;
        form.appendChild(errorDiv);
        setTimeout(() => {
            errorDiv.remove();
        }, 3000);
    }

    function showSuccess(message) {
        const successDiv = document.createElement("div");
        successDiv.textContent = message;
        form.appendChild(successDiv);
    }
});

  
    </script>

</body>
</html>
