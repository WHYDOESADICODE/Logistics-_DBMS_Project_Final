
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/a6ba84593c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="Customer.css">
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
                <a href="Orders.php">
                    <i class="fa-solid fa-cart-shopping fa-lg" style="color: #000000;"></i>
                    <h3>Orders</h3>
                </a>
                <a href="delivery.php">
                    <i class="fa-solid fa-truck fa-lg" style="color: #000000;"></i>
                    <h3>Deliveries</h3>
                </a>
            </div>
        </aside>
       <!--END OF ASIDE (SIDEBAR)-->
       <main>
           <div class="customer-table">
               <h1>Customer DETAILS</h1>
               <table>
                   <thead>
                       <tr>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>House No</th>
                           <th>Pincode</th>
                           <th>State</th>
                           <th>Phone_Number</th>
                       </tr>
                   </thead>
                   <tbody>
                    <?php
                    // Connect to database
                    $servername = "localhost"; // Change this if your database is on a different server
                    $username = "root"; // Change this to your database username
                    $password = ""; // Change this to your database password
                    $dbname = "logistics"; // Change this to your database name
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    
                    // Fetch data from database
                    $sql = "SELECT * FROM customer"; // corrected table name
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["FirstName"] . "</td>";
                            echo "<td>" . $row["LastName"] . "</td>";
                            echo "<td>" . $row["HouseNumber"] . "</td>";
                            echo "<td>" . $row["PinCode"] . "</td>";
                            echo "<td>" . $row["State"] . "</td>";
                            echo "<td>" . $row["PhoneNumber"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                   
                ?>
                   </tbody>
               </table>
           </div>
       </main>
   </div>
   <script src="Customer.js"></script>
</body>
</html>
