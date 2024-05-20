<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/a6ba84593c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="Warehouse.css">
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
       <div class='warehouse-table'>
        <h2>Warehouse_Details</h2>

            

        <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "logistics"; // Update to your database name
            

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            // Output warehouse details
            $sql1= "SELECT * FROM Warehouse WHERE W_ID = 1";
            $result = $conn->query($sql1);

            // Output warehouse details
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Fetch warehouse details from the database
            for ($i = 1; $i <= 20; $i++) {
                $sql_location = "SELECT W_location FROM Warehouse_Location WHERE W_ID = $i";
                $result_location = $conn->query($sql_location); 
            
                if ($result_location->num_rows > 0) {
                    $row_location = $result_location->fetch_assoc();
                    echo "<div class='warehouse-table'>";
                    echo "<h3>" . $row_location["W_location"] . "</h3>";
                    echo "<table>
                        <thead>
                            <tr>
                                <th>Warehouse_ID</th>
                                <th>Product_ID</th>
                                <th>Stock</th>
                            </tr>
                        </thead>";
                    
                    // Output warehouse details
                    $sql1 = "SELECT * FROM Warehouse WHERE W_ID = $i";
                    $result = $conn->query($sql1);
            
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tbody>";
                            echo "<tr>";
                            echo "<td>" . $row["W_ID"] . "</td>";
                            echo "<td>" . $row["P_ID"] . "</td>";
                            echo "<td>" . $row["Stock_Quantity"] . "</td>";
                            echo "</tr>";
                            echo "</tbody>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>0 results</td></tr>";
                    }
                    echo "</table>";
                    echo "</div>";
                } else {
                    echo "<h3>Location not found for W_ID = $i</h3>";
                }
            }
            $conn->close();
        ?>
       
        </div>
   </main>
</div>
    <script src="Warehouse .js"></script>
</body>
</html>
