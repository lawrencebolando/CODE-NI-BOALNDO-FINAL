
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hot Wheels Store</title>
    <link rel="stylesheet" href="dashboard.css">
    <script src="script.js" defer></script>
</head>
<body>
    <nav class="navbar">
        <h1>Hot Wheels Store</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href='logout.php'>Logout</a></li>
        </ul>
    </nav>
    
    <div class="dashboard-container">
        <section class="dashboard-buttons">
            <button class="dashboard-btn">Manage Inventory</button>
            <button class="dashboard-btn">Orders</button>
            <button class="dashboard-btn">Users</button>
            <button class="dashboard-btn">Settings</button>
        </section>
    
        <div class="main-content">
            <header class="hero-section">
                <h2>Welcome to the Ultimate Hot Wheels Collection</h2>
                <p>Discover, Collect, and Race with the Best Cars</p>
            </header>
    
            <section class="product-grid">
                <div class="product-card">
                    <img src="car1.jpg" alt="Hot Wheels Car">
                    <h3>Super Speedster</h3>
                    <button class="btn">View Details</button>
                </div>
                <div class="product-card">
                    <img src="car2.jpg" alt="Hot Wheels Car">
                    <h3>Classic Racer</h3>
                    <button class="btn">View Details</button>
                </div>
                <div class="product-card">
                    <img src="car3.jpg" alt="Hot Wheels Car">
                    <h3>Offroad Monster</h3>
                    <button class="btn">View Details</button>
                </div>
            </section>
        </div>
    </div>
</body>
</html>