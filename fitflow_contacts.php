<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Contactos - FitFlow</title>
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
    <h1>Contacta o FitFlow</h1>
    <p>Estamos aqui para te ajudar</p>
</header>

<nav>
    <a href="fitflow_store.php">Início</a>
    <a href="fitflow_products.php">Produtos</a>
    <a href="fitflow_info.php">Sobre</a>
    <a href="fitflow_contacts.php">Contacto</a>

    <?php if (isset($_SESSION['user_email'])): ?>
        <a href="logout.php" class="logout-btn">Logout (<?= $_SESSION['user_email'] ?>)</a>
    <?php else: ?>
        <a href="login_choice.php" class="login-btn">Login</a>
    <?php endif; ?>
    <a href="carrinho.php">Carrinho (<?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?>)</a>

</nav>

<div class="conteudo">
    <h2>Envia-nos uma mensagem</h2>
    <form action="enviar_mensagem.php" method="post" class="formulario-contacto">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="5" required></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>

    <h2>Informações de Contacto</h2>
    <p><strong>Email:</strong> rodrigo.gomes28599@al.aememmartins.pt</p>
    <p><strong>Telefone:</strong> +351 929 337 497</p>
    <p><strong>Morada:</strong> Rua do Ginásio, 123 - Lisboa, Portugal</p>
</div>

<footer>
    <p>FitFlow</p>
</footer>

</body>
</html>