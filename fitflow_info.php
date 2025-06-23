<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Sobre - FitFlow</title>
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
    <h1>Sobre o FitFlow</h1>
    <p>A tua loja de confiança para fitness e bem-estar</p>
</header>

<nav>
    <a href="fitflow_store.php">Início</a>
    <a href="#">Produtos</a>
    <a href="fitflow_info.php">Sobre</a>
    <a href="fitflow_contacts.php">Contacto</a>

    <?php if (isset($_SESSION['user_email'])): ?>
        <a href="logout.php" class="logout-btn">Logout (<?= $_SESSION['user_email'] ?>)</a>
    <?php else: ?>
        <a href="form_login.php" class="login-btn">Login</a>
    <?php endif; ?>
</nav>

<div class="conteudo">
    <h2>A nossa missão</h2>
    <p>O FitFlow nasceu com o objetivo de fornecer produtos de qualidade para todos os entusiastas de fitness, desde iniciantes até atletas experientes...</p>

    <h2>O que oferecemos</h2>
    <ul>
        <li>Suplementos de nutrição desportiva</li>
        <li>Roupas fitness modernas e funcionais</li>
        <li>Acessórios de treino de alta durabilidade</li>
        <li>Atendimento personalizado</li>
    </ul>

    <h2>Porquê escolher o FitFlow?</h2>
    <p>Trabalhamos com marcas de renome, garantimos entregas rápidas e oferecemos suporte ao cliente com atenção e responsabilidade...</p>
</div>

<footer>
    <p>FitFlow</p>
</footer>

</body>
</html>