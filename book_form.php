<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load Composer's autoloader
require 'vendor/autoload.php';

// Check if .env file exists
if (!file_exists(__DIR__ . '/.env')) {
    die("Error: .env file not found.");
}

// Load environment variables from .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Debugging output to verify environment variables
echo '<pre>';
print_r($_ENV);
echo '</pre>';

// Access environment variables directly from $_ENV superglobal
$dbHost = $_ENV['DB_HOST'];
$dbUser = $_ENV['DB_USERNAME'];
$dbPass = $_ENV['DB_PASSWORD'];
$dbPort = $_ENV['DB_PORT'];

echo "DB_HOST: " . $dbHost . "<br>";
echo "DB_USERNAME: " . $dbUser . "<br>";
echo "DB_PASSWORD: " . $dbPass . "<br>";
echo "DB_PORT: " . $dbPort . "<br>";

// Check if all required environment variables are present
if (!$dbHost || !$dbUser || !$dbPass || !$dbPort) {
    die("Error: Missing required environment variables.");
}

// Connect to the database
$connection = mysqli_connect($dbHost, $dbUser, $dbPass, 'travel_db', $dbPort);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// If form submitted, process the data
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Prepare and execute the SQL query
    $request = "INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    if (mysqli_query($connection, $request)) {
        // Redirect to another page after successful submission
        header("Location: book.php");
        exit(); // Ensure no further code execution after redirection
    } else {
        // Display error message if query execution fails
        echo "Error: " . mysqli_error($connection);
    }
} else {
    // If form not submitted, display a message
    echo "Please fill out the form.";
}
