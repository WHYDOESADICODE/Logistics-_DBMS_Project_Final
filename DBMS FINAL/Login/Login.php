<?php
include("connection.php");

if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $password = $_POST['Pass'];

    // Debugging statement
    echo "Username: $username<br>";
    echo "Password: $password<br>";

    $sql = "SELECT * FROM login_details WHERE username ='$username' AND password = '$password'";
    // Debugging statement
    echo "SQL Query: $sql<br>";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        echo "Login successful. Redirecting to Admin.php..."; // Debugging statement
        header("Location: ../Admin/Admin.php"); // Updated location of Admin.php
        exit;
    } else {
        echo "Login failed. Redirecting to index.php..."; // Debugging statement
        echo '<script>
            window.location.href = "index.php";
            alert("Login Failed. Invalid Username or password");
            </script>';
        exit;
    }
}
?>
