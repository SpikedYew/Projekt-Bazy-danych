<?php

// Collect form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

// Połączenie z baza danych
$conn = new mysqli('localhost', 'root', '', 'getintouch2');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO messages (firstName, lastName, email, number, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $firstName, $lastName, $email, $number, $message);
    $execval = $stmt->execute();
    //echo $execval;
    echo "<script type='text/javascript'>alert('Wiadomość wysłana'); window.location.href = 'homepage.php';</script>";
    // Alert o wysłaniu wiadomości
    $stmt->close();
    $conn->close();
}
?>
