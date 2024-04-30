<?php
// names: Intwari Emery, reg no: 222012076

// Database connection parameters
$hostname = "localhost";
$username = "root";
$password = ""; // Assuming you have no password set
$database = "jobconnect";

// Create database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check if database connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if login_email and login_password are set in the POST data
if(isset($_POST['login_email']) && isset($_POST['login_password'])) {
    // Retrieve login credentials from POST data
    $login_email = $_POST['login_email'];
    $login_password = $_POST['login_password'];

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT userID FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $login_email, $login_password);
    $stmt->execute();
    $stmt->store_result();

    // Check if there is a match in the database
    if ($stmt->num_rows > 0) {
        // If match found, set success flag to true and redirect to home.php
        $response['success'] = true;
        header("Location: home.php");
        exit; // Stop further execution after redirect
    } else {
        // If no match found, set success flag to false and provide error message
        $response['success'] = false;
        $response['message'] ="Invalid email or password. Please register.";
    }

    // Close prepared statement
    $stmt->close();
} else {
    // If login_email or login_password are not set in POST data, provide error message
    $response['success'] = false;
    $response['message'] = "Email and password are required.";
}

// Close database connection
$conn->close();
echo json_encode($response);
?>
