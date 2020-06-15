<?php 
include('database.php');
session_start();
$nome="";
if(isset($_SESSION['nome'])){
    $nome=$_SESSION['nome'];
}
$produtos=getProdutos();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\homepage.css">
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
    <h1>Produtos</h1>
    <div class="main">
        <?php 
        foreach ($produtos as $produto => $linha){
               foreach($linha as $coluna){
                    $codProduto=$linha['codProduto'];
                    $nomeProduto=$linha["nomeProduto"];
                    $preco=$linha["preco"];
                }
        ?>
        <div class="imgCard">
        <a href="comprarItem.php?codProduto=<?php echo $codProduto?>&nomeProduto=<?php echo $nomeProduto?>&preco=<?php echo $preco?>">
        <img src="roupa\<?php echo $codProduto?>.png" alt="">
        </a>
        <div>
        <label><?php echo $nomeProduto?></label>
        <span>--<?php echo $preco?>€</span>
        </div>
        </div>
        <?php 
        }
        ?>
    </div>
    
</body>
</html>