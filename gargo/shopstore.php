<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Online Store</title>
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

        

        .product {
            border: 1px solid #ccc;
            margin: 10px;
            padding: 5px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            display: inline-block;
            vertical-align: top;
            transition: transform 0.3s ease;
        }

        .product:hover {
            transform: scale(1.05);
        }

        .product img {
            max-width: 50%;
            height: auto;
            margin-bottom: 20px;
        }

        .buy-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .buy-button:hover {
            background-color: #45a049;
        }

        .cart {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            margin: 10px;
            padding: 20px;
            width: 300px;
            display: inline-block;
            vertical-align: top;
        }

        .cart h2 {
            text-align: center;
            font-size: 20px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .cart-total {
            font-weight: bold;
            font-size: 18px;
            color: #4CAF50;
        }

        .cart-items {
            list-style: none;
            padding: 0;
        }

        .cart-items li {
            font-size: 16px;
            margin-bottom: 10px;
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
   <h1>
        Online Store
    </h1>
    <br>
    <div class="product">
        <img src="ap.jpg" alt="Product 1">
        <h2>Amazing Pens</h2>
        <p>These stylish pens for just Rs.5 will make your writing experience exceptional.</p>
        <p>Price: Rs.5.00</p>
        <button class="buy-button" onclick="addToCart('Amazing Pens', 5)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="book.jpg" alt="Product 2">
        <h2>Incredible Books</h2>
        <p>Get lost in amazing writing books for Rs.50.00. Writing has never been so affordable.</p>
        <p>Price: Rs.50.00</p>
        <button class="buy-button" onclick="addToCart('Incredible Books', 50)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="ferti.jpg" alt="Product 3">
        <h2>Powerful Fertilizers</h2>
        <p>Give your plants the best nutrients they deserve with our fertilizers for Rs.400.00.</p>
        <p>Price: Rs.400.00</p>
        <button class="buy-button" onclick="addToCart('Powerful Fertilizers', 400)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="chairs.jpg" alt="Product 4">
        <h2>Comfortable Chairs</h2>
        <p>Sit back and relax in our top-quality chairs for just Rs.600.00, your perfect companion at work or home.</p>
        <p>Price: Rs.600.00</p>
        <button class="buy-button" onclick="addToCart('Comfortable Chairs', 600)">Add to Cart</button>
    </div>
    <div class="cart">
        <h2>Shopping Cart</h2>
        <ul class="cart-items" id="cart-items">
            <!-- Cart items will be displayed here -->
        </ul>
        <p class="cart-total">Total: Rs.<span id="cart-total">0.00</span></p>
        <button class="buy-button" onclick="checkout()">Checkout</button>
    </div>

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
    <style >
        .product {
    border: 1px solid #ccc;
    margin: 10px;
    padding: 10px; /* Increased padding for spacing */
    background-color: white;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    width: 300px;
    text-align: center; /* Center-align the content */
    display: inline-block;
    vertical-align: top;
    transition: transform 0.3s ease;
}

.product:hover {
    transform: scale(1.05);
}

.product img {
    max-width: 100%; /* Adjust image width to fit container */
    height: auto;
    margin-bottom: 10px; /* Increased margin for spacing */
}

.buy-button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    display: block; /* Display the button as a block element for full width */
    margin: 10px auto; /* Center-align the button */
}

.cart {
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    margin: 10px;
    padding: 20px;
    width: 300px;
    display: inline-block;
    vertical-align: top;
    text-align: center; /* Center-align the content */
}

    </style>


    <script type="text/javascript">
        let cartItems = [];
        let total = 0;

        function addToCart(productName, price) {
            cartItems.push({ productName, price });
            total += price;
            updateCart();
        }

        function updateCart() {
            const cartList = document.getElementById('cart-items');
            const cartTotal = document.getElementById('cart-total');

            cartList.innerHTML = '';
            cartItems.forEach(item => {
                const li = document.createElement('li');
                li.textContent = `${item.productName} - Rs.${item.price.toFixed(2)}`;
                cartList.appendChild(li);
            });

            cartTotal.textContent = total.toFixed(2);
        }

        function checkout() {
            alert(`Total Amount: Rs.${total.toFixed(2)}\nThank you for shopping with us!`);
            cartItems = [];
            total = 0;
            updateCart();
        }
    </script>

</body>

</html>
