<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.typekit.net/ijp7xsw.css">
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon.png">
</head>
<body>
  <section class="form">
    <div class="container" id="signup" style="display:none">
      <h1 class="form-title">Zarejestruj się</h1>
      <form method="post" action="register.php">
        <div class="form-group">
          <div class="flop">
           <i class="fas fa-user"></i>
           <label for="fname">Imię</label>
          </div>
           <input type="text" name="fName" id="fName" required>
           
        </div>
        <div class="form-group">
          <div class="flop">
            <i class="fas fa-user"></i>
            <label for="lName">Nazwisko</label>
            </div>
            <input type="text" name="lName" id="lName" required>
            
        </div>
        <div class="form-group">
          <div class="flop">
            <i class="fas fa-envelope"></i>
            <label for="email">Email</label>
          </div>
            <input type="email" name="email" id="email" required>
            
        </div>
        <div class="form-group">
          <div class="flop">
            <i class="fas fa-lock"></i>
            <label for="password">Hasło</label>
          </div>
            <input type="password" name="password" id="password" required>
            
        </div>
       <input type="submit" class="btn" value="Zarejestruj Się" name="signUp">
      </form>
      <div class="links">
        <button id="signInButton">Zaloguj się</button>
      </div>
    </div>

    <div class="container" id="signIn" style="display:block">
        <h1 class="form-title">Zaloguj się</h1>
        <form method="post" action="register.php">
          <div class="form-group">
            <div class="flop">
              <i class="fas fa-envelope"></i>
              <label for="email">Email</label>
            </div>
              <input type="email" name="email" id="email" required>
              
          </div>
          <div class="form-group">
            <div class="flop">
              <i class="fas fa-lock"></i>
              <label for="password">Hasło</label>
            </div>
              <input type="password" name="password" id="password" required>
              
          </div>
         <input type="submit" class="btn" value="Zaloguj Się" name="signIn">
        </form>

        <div class="links">
          <button id="signUpButton">Zarejestruj się</button>
        </div>
      </div>
      <script src="script.js"></script>
    </section>
</body>
</html>