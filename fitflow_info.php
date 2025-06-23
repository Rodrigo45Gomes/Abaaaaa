<?php
session_start();

// Logout via POST
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
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

<header>
    <h1>Sobre o FitFlow</h1>
    <p>A tua loja de confiança para fitness e bem-estar</p>
</header>

<nav>
    <a href="fitflow_store.php">Início</a>
    <a href="#">Produtos</a>
    <a href="fitflow_info.php">Sobre</a>
    <a href="fitflow_contacts.php">Contacto</a>

    <?php if (isset($_SESSION['user_id'])): ?>
        <!-- Logout: faz post para esta mesma página para destruir sessão -->
        <a href="#" class="logout-btn" onclick="document.getElementById('logoutForm').submit(); return false;">Logout</a>
    <?php else: ?>
        <!-- Login: redireciona para index.html -->
        <a href="index.html" class="login-btn">Login</a>
    <?php endif; ?>
</nav>

<!-- Formulário invisível para logout -->
<form id="logoutForm" method="post" style="display:none;">
    <input type="hidden" name="logout" value="1">
</form>

<div class="conteudo">
    <h2>A nossa missão</h2>
    <p>O FitFlow nasceu com o objetivo de fornecer produtos de qualidade para todos os entusiastas de fitness, desde iniciantes até atletas experientes. Queremos ajudar-te a alcançar os teus objetivos com suplementos confiáveis, acessórios úteis e roupa confortável para o treino.</p>

    <h2>O que oferecemos</h2>
    <ul>
        <li>Suplementos de nutrição desportiva</li>
        <li>Roupas fitness modernas e funcionais</li>
        <li>Acessórios de treino de alta durabilidade</li>
        <li>Atendimento personalizado</li>
    </ul>

    <h2>Porquê escolher o FitFlow?</h2>
    <p>Trabalhamos com marcas de renome, garantimos entregas rápidas e oferecemos suporte ao cliente com atenção e responsabilidade. O nosso compromisso é com o teu progresso físico e bem-estar.</p>
</div>

<footer>
    <p>FitFlow</p>
</footer>

</body>
</html>