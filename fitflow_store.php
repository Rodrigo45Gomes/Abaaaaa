<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>FitFlow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_store.css">
    <link rel="icon" type="image/png" href="imagens/Logo_FitFlow.png">
</head>
<body>

<?php if (isset($_SESSION['user_email'])): ?>
    <div class="user-box">
        👋 Olá, <?php echo htmlspecialchars($_SESSION['user_email']); ?>
    </div>
<?php endif; ?>

<header>
    <h1>FitFlow - Loja de Ginásio</h1>
    <p>Suplementos, Roupas Fitness e Acessórios</p>
</header>

<nav>
    <a href="fitflow_store.php">Início</a>
    <a href="fitflow_products.php">Produtos</a>
    <a href="fitflow_info.php">Sobre</a>
    <a href="fitflow_contacts.php">Contacto</a>

    <?php if (isset($_SESSION['user_email'])): ?>
        <a href="logout.php" class="logout-btn">Logout (<?= $_SESSION['user_email'] ?>)</a>
    <?php else: ?>
        <a href="form_login.php" class="login-btn">Login</a>
    <?php endif; ?>
    <a href="carrinho.php">Carrinho (<?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?>)</a>

</nav>


<div class="banner">
    <div class="slogan">Transforma o teu corpo com os melhores produtos!</div>
</div>

<div class="produtos">
    <div class="produto">
        <img src="" alt="Proteína Whey">
        <h3>Proteína Whey</h3>
        <p>€29,99</p>
    </div>
    <div class="produto">
        <img src="" alt="Creatina">
        <h3>Creatina Monohidratada</h3>
        <p>€19,99</p>
    </div>
    <div class="produto">
        <img src="" alt="Luvas de Treino">
        <h3>Luvas de Treino</h3>
        <p>€12,90</p>
    </div>
    <div class="produto">
        <img src="" alt="Shaker">
        <h3>Shaker 600ml</h3>
        <p>€6,50</p>
    </div>

    <div class="produto">
        <img src="" alt="Pré-Treino Xtreme">
        <h3>Pré-Treino Xtreme</h3>
        <p>€24,99</p>
    </div>
    <div class="produto">
        <img src="" alt="Barra Proteica">
        <h3>Barra Proteica (cx. 12un)</h3>
        <p>€15,00</p>
    </div>
    <div class="produto">
        <img src="" alt="Cinto de Musculação">
        <h3>Cinto de Musculação</h3>
        <p>€22,50</p>
    </div>
    <div class="produto">
        <img src="" alt="T-shirt Dry-Fit">
        <h3>T-shirt Dry-Fit Masculina</h3>
        <p>€14,90</p>
    </div>
    <div class="produto">
        <img src="" alt="Leggings Fitness">
        <h3>Leggings Fitness Femininas</h3>
        <p>€18,90</p>
    </div>
    <div class="produto">
        <img src="" alt="Leggings Fitness">
        <h3>Bandas elásticas de resistência</h3>
        <p>€18,90</p>
    </div>
</div>

<footer>
    <p>FitFlow</p>
</footer>

</body>
</html>
