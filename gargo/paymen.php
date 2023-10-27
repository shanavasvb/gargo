<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Payment</title>
    <style type="text/css">

        body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5; /* Light grey background */
}

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




        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            text-align: center;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 24px;
        }


                @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-family: Arial, sans-serif;
            font-size: 36px;
            color: seagreen;
            animation: fadeInUp 1s ease-out;
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


        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  background-color: #f5f5f5;
  font-family: Arial, Helvetica, sans-serif;
}
.wrapper{
  background-color: #fff;
  width: 500px;
  padding: 25px;
  margin: 25px auto 0;
  box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}
.wrapper h2{
  background-color: #fcfcfc;
  color: #7ed321;
  font-size: 24px;
  padding: 10px;
  margin-bottom: 20px;
  text-align: center;
  border: 1px dotted #333;
}
h4{
  padding-bottom: 5px;
  color: #7ed321;
}
.input-group{
  margin-bottom: 8px;
  width: 100%;
  position: relative;
  display: flex;
  flex-direction: row;
  padding: 5px 0;
}
.input-box{
  width: 50%;
  margin-right: 12px;
  position: relative;
}
.input-box:last-child{
  margin-right: 0;
}
.name{
  padding: 14px 10px 14px 50px;
  width: 100%;
  background-color: #fcfcfc;
  border: 1px solid #00000033;
  outline: none;
  letter-spacing: 1px;
  transition: 0.3s;
  border-radius: 3px;
  color: #333;
}
.name:focus, .dob:focus{
  -webkit-box-shadow:0 0 2px 1px #7ed32180;
  -moz-box-shadow:0 0 2px 1px #7ed32180;
  box-shadow: 0 0 2px 1px #7ed32180;
  border: 1px solid #7ed321;
}
.input-box .icon{
  width: 48px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 0px;
  left: 0px;
  bottom: 0px;
  color: #333;
  background-color: #f1f1f1;
  border-radius: 2px 0 0 2px;
  transition: 0.3s;
  font-size: 20px;
  pointer-events: none;
  border: 1px solid #00000033;
  border-right: none;
}
.name:focus + .icon{
  background-color: #7ed321;
  color: #fff;
  border-right: 1px solid #7ed321;
  border: none;
  transition: 1s;
}
.dob{
  width: 30%;
  padding: 14px;
  text-align: center;
  background-color: #fcfcfc;
  transition: 0.3s;
  outline: none;
  border: 1px solid #c0bfbf;
  border-radius: 3px;
}
.radio{
  display: none;
}
.input-box label{
  width: 50%;
  padding: 13px;
  background-color: #fcfcfc;
  display: inline-block;
  float: left;
  text-align: center;
  border: 1px solid #c0bfbf;
}
.input-box label:first-of-type{
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  border-right: none;
}
.input-box label:last-of-type{
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.radio:checked + label{
  background-color: #7ed321;
  color: #fff;
  transition: 0.5s;
}
.input-box select{
  display: inline-block;
  width: 50%;
  padding: 12px;
  background-color: #fcfcfc;
  float: left;
  text-align: center;
  font-size: 16px;
  outline: none;
  border: 1px solid #c0bfbf;
  cursor: pointer;
  transition: all 0.2s ease;
}
.input-box select:focus{
  background-color: #7ed321;
  color: #fff;
  text-align: center;
}
button{
  width: 100%;
  background: transparent;
  border: none;
  background: #7ed321;
  color: #fff;
  padding: 15px;
  border-radius: 4px;
  font-size: 16px;
  transition: all 0.35s ease;
}
button:hover{
  cursor: pointer;
  background: #5eb105;
}
  




    </style>

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

    <div class="wrapper">
        <h2>Payment Form</h2>
        <form method="POST">
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Full Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Nick Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="Email Adress" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4> Date of Birth</h4>
                    <input type="text" placeholder="DD" class="dob">
                    <input type="text" placeholder="MM" class="dob">
                    <input type="text" placeholder="YYYY" class="dob">
                </div>
                <div class="input-box">
                    <h4> Gender</h4>
                    <input type="radio" id="b1" name="gendar" checked class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" name="gendar" class="radio">
                    <label for="b2">Female</label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card Number" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card CVC" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <select>
                        <option>01 jun</option>
                        <option>02 jun</option>
                        <option>03 jun</option>
                    </select>
                    <select>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <button type="submit">PAY NOW</button>
                </div>
            </div>
        </form>
    </div>
    <br>


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

    <script>
function validateForm() {
    // Get form elements by their IDs
    const fullName = document.getElementById('full-name');
    const nickName = document.getElementById('nick-name');
    const email = document.getElementById('email');
    const day = document.getElementById('day');
    const month = document.getElementById('month');
    const year = document.getElementById('year');
    const cardNumber = document.getElementById('card-number');
    const cardCVC = document.getElementById('card-cvc');

    // Validate Full Name (non-empty)
    if (fullName.value.trim() === '') {
        alert('Full Name is required');
        return;
    }

    // Validate Nick Name (non-empty)
    if (nickName.value.trim() === '') {
        alert('Nick Name is required');
        return;
    }

    // Validate Email Address (format)
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(email.value)) {
        alert('Invalid Email Address');
        return;
    }

    // Validate Date of Birth (non-empty and numeric)
    if (day.value.trim() === '' || month.value.trim() === '' || year.value.trim() === '') {
        alert('Date of Birth is required');
        return;
    }

    // Validate Card Number (non-empty and numeric)
    if (cardNumber.value.trim() === '' || isNaN(cardNumber.value)) {
        alert('Card Number is required and must be numeric');
        return;
    }

    // Validate Card CVC (non-empty and numeric)
    if (cardCVC.value.trim() === '' || isNaN(cardCVC.value)) {
        alert('Card CVC is required and must be numeric');
        return;
    }

    // If all checks pass, you can submit the form here
    document.getElementById('payment-form').submit();
}
</script>



</body>

</html>
