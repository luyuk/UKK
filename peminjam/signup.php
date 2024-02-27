<?php
// Replace the database connection details with your own
$username = "root";
$password = "0";
$dbname = "signup";

// Create connection
$conn = new mysqli($username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = ($_POST["password"]);

    // Insert user data into the database
    $sql = "INSERT INTO users (fullname, email, address, username, password) VALUES ('$fullname', '$email', '$address', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful. Redirecting to login page...";
        header("Refresh: 3; URL=login.php"); // Redirect to login.php after 3 seconds
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
