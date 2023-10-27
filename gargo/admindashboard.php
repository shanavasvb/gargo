<!DOCTYPE html>
<html>
<head>
    <title>Waste Collection Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style type="text/css">
        
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f5e3; /* Background color */
}

.sidebar {
    width: 250px;
    height: 100%;
    background-color: #4CAF50; /* Green color for the sidebar */
    position: fixed;
    overflow-y: auto;
    transition: width 0.3s;
}

.sidebar h2 {
    color: white;
    text-align: center;
    padding: 20px 0;
}

ul {
    list-style: none;
    padding: 0;
}

li a {
    display: block;
    color: white;
    text-decoration: none;
    padding: 15px;
    text-align: center;
    transition: background-color 0.3s;
}

li a:hover {
    background-color: #45A049; /* Darker green for the hover effect */
}

.content {
    margin-left: 250px;
    padding: 20px;
    transition: margin-left 0.3s;
}

h2 {
    color: #333;
}

p {
    color: #777;
}

.data-summary {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 20px;
}

.data-box {
    width: calc(25% - 20px);
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    text-align: center;
    transition: transform 0.3s;
}

.data-box:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

.graph {
    margin-top: 20px;
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Add your own styles for the chart here */

    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Collections</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Welcome to the Waste Collection Dashboard</h2>
        <div class="data-summary">
            <div class="data-box">
                <h3>Total Registered Users</h3>
                <p><?php echo getTotalUsers(); ?></p>
            </div>
            <div class="data-box">
                <h3>Total Sales</h3>
                <p><?php echo getTotalSales(); ?></p>
            </div>
            <div class="data-box">
                <h3>Total Products Sold</h3>
                <p><?php echo getTotalProductsSold(); ?></p>
            </div>
            <div class="data-box">
                <h3>Product Stock</h3>
                <p><?php echo getProductStock(); ?></p>
            </div>
        </div>
        <div class="graph">
            <canvas id="bookingGraph"></canvas>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js">
        // Example using Chart.js
const ctx = document.getElementById('bookingGraph').getContext('2d');
const bookingGraph = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5'], // Replace with your data
        datasets: [{
            label: 'Bookings',
            data: [10, 20, 15, 30, 25], // Replace with your data
            borderColor: 'blue',
            borderWidth: 2,
            fill: false,
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
    }
});

    </script>


</body>
</html>
