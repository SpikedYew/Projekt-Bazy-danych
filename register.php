<?php
include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // sprwadzenie czy uytkownik wpisał hasło i email
    if (empty($password)) {
        echo "Musisz wpisać hasło! <br> <a href=\"index.php\" class=\"button\">Powrót</a>";
        exit(); 
    }
    if (empty($email)) {
        echo "Musisz podać e-mail! <br> <a href=\"index.php\" class=\"button\">Powrót</a>";;
    }
    
    // Mona dodać funkcji md5, w bazie danych hasło będzie zaszyfrowane
    $password = ($password);

    // Sprawdz czy email istnieje
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);
    
    if ($result->num_rows > 0) {
        echo "Podany email istenieje! <br> <a href=\"index.php\" class=\"button\">Powrót</a>";
    } else {
        // Dodaj uytkownika do bazy danych
        $insertQuery = "INSERT INTO users(firstName, lastName, email, password)
                        VALUES ('$firstName', '$lastName', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            header("location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = ($password);
    
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    } else {
        echo "Nie znaleziono. Nipoprawny e-mail lub hasło <br> <a href=\"index.php\" class=\"button\">Powrót</a>";
    }
}
?>
