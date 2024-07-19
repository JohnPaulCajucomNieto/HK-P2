<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mylogins";  

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    if (empty($email) || empty($password)) {
        echo "Email and password are required.";
    } else {
      
        $query = "SELECT * FROM admin_login WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "Login successful!";
        } else {
            echo "Invalid email or password. Please try again.";
        }
    }
}

$conn->close();
?>
