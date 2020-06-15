<?php
session_start();
$nome="";
if(isset($_SESSION['nome'])){
    $nome=$_SESSION['nome'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\logout.css">
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
            <a><?php echo $nome?></a>
                <a href="login.php"class="fas fa-user"><a>
                <a href="carrinho.php"class="fas fa-shopping-cart"></a>
        </span>
        </div>
    </div>

    
    <div class="containerLogout">
        <div class="icon">
        <i class="fa fa-user" aria-hidden="true"></i>
        <span><?php echo $nome?></span>
        </div>
        <div class="username">
           <a href="unlog.php">Logout</a>
        </div>
    </div>
   
</body>
</html>