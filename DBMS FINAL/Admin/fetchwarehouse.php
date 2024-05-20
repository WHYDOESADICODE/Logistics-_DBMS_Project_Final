<?php
// Database connection
$servername = "localhost"; // Change this to your database server name if needed
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "logistics"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT * FROM warehouse";
$warehouseloc ="SELECT W_location FROM Warehouse_Location WHERE W_ID = 1";
$result = $conn->query($sql);
$result2= $conn->query($warehouseloc)

// Check if data fetched successfully
if ($result === false) {
    die("Error fetching data: " . $conn->error);
}

// Output data
echo "<h3>".$result2."</td>"

echo "<table border='1'>
        <tr>
            <th>Warehouse_ID</th>
            <th>Product_ID</th>
            <th>Stock</th>
        </tr>";

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Warehouse_ID"] . "</td>";
        echo "<td>" . $row["Product_ID"] . "</td>";
        echo "<td>" . $row["Stock_Quantity"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>0 results</td></tr>";
}

echo "</table>";

// Close connection
$conn->close();
?>
