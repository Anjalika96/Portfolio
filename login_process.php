<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Connect to the database (replace these with your actual database credentials)
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'portfolio';

    $connection = new mysqli($host, $username, $password, $database);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Get user inputs from the login form
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo($username);
    echo($password);

    // Prepare the query to retrieve the user data
    $selectQuery = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $connection->prepare($selectQuery);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Fetch the user data from the result set
        $userData = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $userData['password'])) {
            // Set session variable to indicate successful login
            $_SESSION['username'] = $userData['username'];

            // Redirect the user to the profile page after successful login
            header("Location: index.php");
            exit();
        } else {
            // Incorrect password
            exit();
            echo "Invalid password!";
            
        }
    } else {
        // User not found
        echo "User not found!";
    }

    // Close the statement and the database connection
    $stmt->close();
    $connection->close();
}
?>
