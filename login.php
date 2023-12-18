<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the login form
$email = $_POST['email'];
$password = $_POST['password'];

// Retrieve hashed password from the database based on the provided email
$sql = "SELECT password FROM data WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];

    // Verify the provided password with the hashed password
    if (password_verify($password, $hashed_password)) {
        echo "Login successful!";
    } else {
        echo "Incorrect password!";
    }
} else {
    echo "Email not found!";
}

$conn->close();
?>
