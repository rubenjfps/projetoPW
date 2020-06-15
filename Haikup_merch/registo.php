<?php
session_start();
if(isset($_SESSION['nome'])){
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\registo.css">
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

    
    <div class="containerRegisto">
        <form action="registar.php" method="post">
        <div class="box">
            <span>Nome</span>
            <input type="text" name="nome" required>
        </div>
        <div class="box">
            <span>Email</span>
            <input type="email" name="email" required>
        </div>
        <div class="box">
            <span>Password</span>
            <input type="password" name="password" required>
        </div>
        <div class="box">
            <span>Morada</span>
            <input type="text" name="morada" required>
        </div>
        <div class="box">
            <span>Codigo-Postal</span>
            <input type="tel" name="codpostal"
            pattern="[0-9]{4}-[0-9]{3}"
            required placeholder="xxxx-xxx">
        </div>
        <div class="box">
            <span>Telefone</span>
            <input type="tel" name="telefone"
            pattern="[0-9]{9}"
            required placeholder="9xxxxxxxx">
        </div>
        <div class="links">
        <input class="registo" type="submit" name="registar" value="Registar"></input>
        </div>
        </form>
    </div>
    
</body>
</html>