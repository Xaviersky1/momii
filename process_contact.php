<?php
$servername = "cpanel07wh"; // Change if your database is on a different server
$username = "ngpowlwm_wp1"; // Replace with your MySQL username
$password = "pP7@4rF@;72X"; // Replace with your MySQL password
$dbname = "ngpowlwm_raymund1"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject= $_POST["subject"];
    $message = $_POST["message"];

    $sql = "INSERT INTO momii (name, email, subject, message) VALUES ('$name', '$email',$subject, '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent and saved to the database successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
