<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
if (isset($_SESSION['user_id'])): ?>
        <a href="logout.php" class="logout-btn">Logout (<?= $_SESSION['user_email'] ?>)</a>
    <?php else: ?>
        <a href="form_login.php" class="login-btn">Login</a>
    <?php endif; 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>FitFlow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_store.css">
</head>
<body>

<?php if (isset($_SESSION['user_name'])): ?>
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
    <a href="#">Produtos</a>
    <a href="fitflow_info.php">Sobre</a>
    <a href="fitflow_contacts.php">Contacto</a>

    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="logout.php" class="logout-btn">Logout (<?= $_SESSION['user_email'] ?>)</a>
    <?php else: ?>
        <a href="form_login.php" class="login-btn">Login</a>
    <?php endif; ?>
</nav>


<div class="banner">
    <div class="slogan">Transforma o teu corpo com os melhores produtos!</div>
</div>

<div class="conteudo">
    <h2>Produtos em Destaque</h2>
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
    </div>
</div>

<footer>
    <p>FitFlow</p>
</footer>

</body>
</html>
