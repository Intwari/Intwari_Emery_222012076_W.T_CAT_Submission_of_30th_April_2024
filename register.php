
<!--the php connecting the registration form to the database-->
<?php
$hostname = "localhost";  
$username = "root";       
$password = "";           
$database = "jobconnect"; 

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$username = mysqli_real_escape_string($conn, $username);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header('location:home.php');
} else {
    echo '<div class="message error">Error: ' . $sql . '<br>' . $conn->error . '</div>';
}

$conn->close();
?>
