<?php
// Database connection
$servername = "localhost"; // Change this to your database server name if needed
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "customers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

// Check if data fetched successfully
if ($result === false) {
    die("Error fetching data: " . $conn->error);
}

// Output data
echo "<table border='1'>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone No</th>
            <th>House No</th>
            <th>Pincode</th>
            <th>State</th>
        </tr>";

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["First_Name"] . "</td>";
        echo "<td>" . $row["Last_Name"] . "</td>";
        echo "<td>" . $row["Phone_No"] . "</td>";
        echo "<td>" . $row["House_No"] . "</td>";
        echo "<td>" . $row["Pincode"] . "</td>";
        echo "<td>" . $row["State"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>0 results</td></tr>";
}

echo "</table>";

// Close connection
$conn->close();
?>
