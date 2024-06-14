<?php
session_start();
include("connect.php");

// Sprawdzenie czy uzytkownik jest zalogowany
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];
$query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
$user = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles3.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--AJAX obsługuje connection.php w tle nie przenosząc mnie na strone connection.php-->
    <title>Home Page</title>
</head>
<body>

<section class="start">
    <div class="blok1 animation">
        <div class="title"><h1>Witaj <?php echo $user['firstName'] . ' ' . $user['lastName']; ?></h1></div>
        <div class="box1">Witaj na tej stronie. Witaj na tej stronie. Witaj na tej stronie. Witaj na tej stronie. Witaj na tej stronie.</div>
        <div class="box2">Lorem ipsum1 Lorem ipsum1 Lorem ipsum1 Lorem ipsum1 Lorem ipsum1 Lorem ipsum</div>
        <div class="box3"><i style="font-size:40px;" class="fa fa-battery-0"></i></div>
        <div class="box4"><i style="font-size:40px;" class="fa fa-battery-1"></i></div>
        <div class="box5"><i style="font-size:40px;" class="fa fa-battery-2"></i></div>
    </div>
    <div class="arrow" id="showMe"><i style="font-size:5vw; color:#C2F970;" class="fa fa-arrow-down"></i></div>  
</section>

<section class="form">
    <div class="container animation">
        <form id="contactForm">
            <div class="form-group animation2">
                <label for="firstName">Imię</label>
                <input type="text" class="form-control" id="firstName" name="firstName" />
            </div>
            <div class="form-group">
                <label for="lastName">Nazwisko</label>
                <input type="text" class="form-control" id="lastName" name="lastName" />
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" />
            </div>
            <div class="form-group">
                <label for="number">Numer Telefonu</label>
                <input type="number" class="form-control" id="number" name="number" />
            </div>
            <div class="form-group">
                <label for="message">Wiadomość</label>
                <textarea type="text" class="form-message" id="message" name="message" rows="5" cols="35"></textarea>
            </div>
            <button type="button" class="parent" onclick="submitForm()">
                <div class="button-top">Wyślij!</div>
            </button>
        </form>
    </div>
    <div class="bcg" id="mydiv"><!--i id="mydivheader" style="font-size:70px;" class="rip fa fa-battery-4"></i>--></div>
    <script src="script2.js"></script>
</section>
<script src="https://unpkg.com/lenis@1.1.3/dist/lenis.min.js"></script> 
<script src="script2.js"></script>
<script>
function submitForm() {
    const form = document.getElementById('contactForm');
    const formData = new FormData(form);

    fetch('connection.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert('Wiadomośc wysłana');
    })
    .catch(error => {
        console.error('Error:', error);
    });
};

//smooth scroll  

const lenis = new Lenis()

lenis.on('scroll', (e) => {
  console.log(e)
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)
</script>
</body>
</html>
