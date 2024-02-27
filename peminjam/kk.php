<?php
$conn=mysqli_connect("localhost","root","","perpus");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ulasanid = $_POST['ulasanid'];
    $userid = $_POST['userid'];
    $bukuid = $_POST['bukuid'];
    $ulasan = $_POST['ulasan'];
    $rating = $_POST['rating'];
    $username = $_POST['username'];

    $sql = "INSERT INTO ulasanbuku (ulasanid, userid, bukuid, ulasan, rating, username) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssss", $ulasanid, $userid, $bukuid, $ulasan, $rating, $username);
    $stmt->execute();

    echo "Review submitted successfully!";

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Review Form</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="ulasanid">Ulasan ID:</label>
        <input type="text" id="ulasanid" name="ulasanid" required>

        <label for="userid">User ID:</label>
        <input type="text" id="userid" name="userid" required>

        <label for="bukuid">Buku ID:</label>
        <input type="text" id="bukuid" name="bukuid" required>

        <label for="ulasan">Ulasan:</label>
        <textarea id="ulasan" name="ulasan" rows="4" cols="50" required></textarea>

        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <input type="submit" value="Submit">
    </form>
</body>
</html>