<?php
session_start();
if(isset($_SESSION['nome'])){
    header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\login.css">
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/5db74112ee.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="menu">
        <div class="menuItems">
            <a href="index.php">
            <img src="logos\haikup_logo_menu.png">
            </a>
            <span class="icon_menu">
                <i class="fas fa-user"></i>
                <i class="fas fa-shopping-cart"></i>
        </span>
        </div>
    </div>

    
    <div class="containerLogin">
        <form action="logar.php" method="post">
        <div class="box">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="box">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <div class="links">
        <input class="login" type="submit" value="Login"></input>
        <span id="registo">Ainda não tens conta? Regista-te <a href="registo.php">AQUI</a>
        </div>
        </form>
    </div>
   
</body>
</html>