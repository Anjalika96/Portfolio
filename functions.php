<?php

function connectDatabase()
{
    // MySQL server credentials
    $host = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "portfolio";

    // Connect to MySQL server
    $connection = new mysqli($host, $username, $password);

    // Check connection status
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Create the database if it doesn't exist
    $createDbQuery = "CREATE DATABASE IF NOT EXISTS $databaseName";
    if ($connection->query($createDbQuery) !== true) {
        die("Error creating database: " . $connection->error);
    }

    // Select the database
    $connection->select_db($databaseName);

    // Create Project the table if it doesn't exist
    $createTableQuery = "CREATE TABLE IF NOT EXISTS project (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description TEXT,
        image TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    // Create the Users table if it doesn't exist
    $createTableQuery = "CREATE TABLE IF NOT EXISTS users (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($connection->query($createTableQuery) !== true) {
        die("Error creating table: " . $connection->error);
    }

    // Close the connection
    $connection->close();
}

function insert_project()
{
    connectDatabase();

    $connection = new mysqli('localhost', 'root', '', 'portfolio');

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $title = $connection->real_escape_string($_POST['p_title']);
    $description = $connection->real_escape_string($_POST['p_description']);
    $image = $connection->real_escape_string($_POST['p_image']);

    if (isset($_FILES['p_image']) && $_FILES['p_image']['error'] === UPLOAD_ERR_OK) {
        $targetDir = 'my_projects/';

        $filename = uniqid() . '_' . $_FILES['p_image']['name'];
        $targetPath = $targetDir . $filename;

        if (move_uploaded_file($_FILES['p_image']['tmp_name'], $targetPath)) {

            $insertQuery = "INSERT INTO project (title, description, image) VALUES ('$title', '$description', '$targetPath')"; 
            
            if ($connection->query($insertQuery) === true) 
            {
                echo "Project inserted successfully!";

            } 
            else 
            {
                echo "Error inserting project: " . $connection->error;
            }          

            $response = array('success' => true, 'message' => 'Project inserted successfully!');
        } 
        else 
        {
            $response = array('success' => false, 'message' => 'Error moving the image to the target directory.');
        }
    } 


    $connection->close();
    header('Content-Type: application/json');
    echo json_encode($response);

}




function validateForm()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    
        // Validate the form data
        $isValid = true;
        $errorReason = "";
    
        if (empty($name) || !preg_match("/^[a-zA-Z\s]+$/", $name)) {
            $isValid = false;
            $errorReason = "Name must contain only letters and spaces.";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $isValid = false;
            $errorReason = "Invalid email format.";
        }
        if (empty($message) || preg_match('/<\s*script.*?>|<\s*\/\s*script\s*>/i', $message)) {
            $isValid = false;
            $errorReason = "Invalid message. Avoid potential malicious code or HTML tags.";
        }
    
        // Prepare the response
        if(empty($errorReason))
        {
            $response = array('success' => $isValid);
        }
        else
        {
            $response = array('success' => $isValid,'error_reason' => $errorReason);
        }
        
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}

function register_user()
{
    connectDatabase();

    $connection = new mysqli('localhost', 'root', '', 'portfolio');

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $username = $connection->real_escape_string($_POST['username']);
    $password = $connection->real_escape_string($_POST['password']);

    // Hash the password using password_hash()
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind the query
    $insertQuery = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $connection->prepare($insertQuery);
    $stmt->bind_param('ss', $username, $hashedPassword);

    // Execute the query
    if ($stmt->execute()) {
        $response = array('success' => true, 'message' => 'User registration successful!');
    } else {
        $response = array('success' => false, 'message' => 'Error inserting user: ' . $connection->error);
    }

    $stmt->close();
    $connection->close();

    // Send the response as a JSON object
    header('Content-Type: application/json');
    echo json_encode($response);

}

function update_project()
{
    connectDatabase();

    $connection = new mysqli('localhost', 'root', '', 'portfolio');

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $id = $connection->real_escape_string($_POST['id']);
    $title = $connection->real_escape_string($_POST['title']);
    $description = $connection->real_escape_string($_POST['description']);

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $targetDir = 'my_projects/';
        
        $filename = uniqid() . '_' . $_FILES['image']['name'];
        $targetPath = $targetDir . $filename;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath))
        {
            $sql = "UPDATE project SET title = '$title', description = '$description', image = '$targetPath' WHERE id = $id";

        }
    }
    else
    {
        $sql = "UPDATE project SET title = '$title', description = '$description' WHERE id = $id";
    }

    if ($connection->query($sql) === true) {

        $response = array('success' => true, 'message' => 'Project update successfully!');
    } else {

        $response = array('success' => false, 'message' => 'Project update fail!');
    }

    $connection->close();
    header('Content-Type: application/json');
    echo json_encode($response);
    

}

function delete_project()
{
    connectDatabase();

    $connection = new mysqli('localhost', 'root', '', 'portfolio');

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $id = $connection->real_escape_string($_POST['id']);

    $sql = "DELETE FROM project WHERE id = $id";


    if ($connection->query($sql) === true) {

        $response = array('success' => true, 'message' => 'Project delete successfully!');
    } else {

        $response = array('success' => false, 'message' => 'Project delete fail!');
    }

    $connection->close();
    header('Content-Type: application/json');
    echo json_encode($response);
    

}

// Main entry point to handle AJAX requests------------------------------------------------------------------------------------
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'validateForm':
            validateForm();
            break;

        case 'insert_project':
            insert_project();
            break;

        case 'register_user':
            register_user();
            break;

        case 'update_project':
            update_project();
            break;

        case 'delete_project':
            delete_project();
            break;

        default:
            $response = array('error' => 'Invalid action');
            header('Content-Type: application/json');
            echo json_encode($response);
            break;
    }
}

?>