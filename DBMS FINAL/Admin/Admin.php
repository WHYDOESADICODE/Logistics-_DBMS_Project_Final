<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/a6ba84593c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="Adminstyle.css">
    <!-- Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    </style>
</head>
<body>
    <header>
        <button id="menu-btn">
            <i class="fa-solid fa-bars fa-lg" style="color: #000000;"></i>
        </button>
    </header>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="Logo.png" alt="Logo">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>
            <div class="sidebar">
            <a href="customer.php" class="active">
                    <i class="fa-solid fa-user fa-xl" style="color: #000000;"></i>
                    <h3>Customer</h3>
                </a>
                <a href="warehouse.php">
                    <i class="fa-solid fa-warehouse fa-lg" style="color: #000000;"></i>
                    <h3>Warehouse</h3>
                </a>
                <a href="C:\Users\adhis\OneDrive\Desktop\DBMS Project\Orders\orders.html">
                    <i class="fa-solid fa-cart-shopping fa-lg" style="color: #000000;"></i>
                    <h3>Orders</h3>
                </a>
                <a href="C:\Users\adhis\OneDrive\Desktop\DBMS Project\Delivery\delivery.html">
                    <i class="fa-solid fa-truck fa-lg" style="color: #000000;"></i>
                    <h3>Deliveries</h3>
                </a>
        </aside>
        <div class="right">
            <div class="top">
                <!-- Additional content for the right section if needed -->
            </div>
        </div>
    </div>
    <script src="Admin.js"></script>
</body>
</html>
