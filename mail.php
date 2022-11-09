<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
   
    $phone = strip_tags(trim($_POST["phone"]));
    
    $message = trim($_POST["comment"]);

    // Check that data was sent to the mailer.
    if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Oops! Message Not Send.";
        exit;
    } 






$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO portfolio (name, email, phone,message)
VALUES ('$name','$email','$phone','$message')";
if ($conn->query($sql) === TRUE) {
    echo "your details submitted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


}




?> 





