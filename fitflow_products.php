<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Produtos - FitFlow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_store.css">
</head>
<body>

<?php if (isset($_SESSION['user_email'])): ?>
    <div class="user-box">
        👋 Olá, <?php echo htmlspecialchars($_SESSION['user_email']); ?>
    </div>
<?php endif; ?>

<header>
    <h1>Todos os Produtos</h1>
    <p>Vê todos os nossos artigos de fitness e suplementação</p>
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
</nav>

<div class="conteudo">
    <h2>Produtos em Destaque</h2>
    <div class="produtos">
        <div class="produto"><img src="" alt="Proteína Whey"><h3>Proteína Whey</h3><p>€29,99</p></div>
        <div class="produto"><img src="" alt="Creatina"><h3>Creatina Monohidratada</h3><p>€19,99</p></div>
        <div class="produto"><img src="" alt="Luvas de Treino"><h3>Luvas de Treino</h3><p>€12,90</p></div>
        <div class="produto"><img src="" alt="Shaker"><h3>Shaker 600ml</h3><p>€6,50</p></div>
        <div class="produto"><img src="" alt="Pré-Treino Xtreme"><h3>Pré-Treino Xtreme</h3><p>€24,99</p></div>
        <div class="produto"><img src="" alt="Barra Proteica"><h3>Barra Proteica (cx. 12un)</h3><p>€15,00</p></div>
        <div class="produto"><img src="" alt="Cinto de Musculação"><h3>Cinto de Musculação</h3><p>€22,50</p></div>
        <div class="produto"><img src="" alt="T-shirt Dry-Fit"><h3>T-shirt Dry-Fit Masculina</h3><p>€14,90</p></div>
        <div class="produto"><img src="" alt="Leggings Fitness"><h3>Leggings Fitness Femininas</h3><p>€18,90</p></div>
        <div class="produto"><img src="" alt="Bandas"><h3>Bandas elásticas de resistência</h3><p>€18,90</p></div>
        <div class="produto"><img src="" alt="Omega 3"><h3>Ómega 3</h3><p>€13,99</p></div>
        <div class="produto"><img src="" alt="Isotonic Drink"><h3>Bebida Isotónica</h3><p>€2,49</p></div>
        <div class="produto"><img src="" alt="Mochila Gym"><h3>Mochila de Treino</h3><p>€29,90</p></div>
        <div class="produto"><img src="" alt="Toalha"><h3>Toalha Microfibra</h3><p>€7,00</p></div>
        <div class="produto"><img src="" alt="Camisola Termica"><h3>Camisola Térmica</h3><p>€19,90</p></div>
        <div class="produto"><img src="" alt="Elástico"><h3>Elástico de Alongamento</h3><p>€9,99</p></div>
        <div class="produto"><img src="" alt="Meias"><h3>Meias Compressivas</h3><p>€5,90</p></div>
        <div class="produto"><img src="" alt="Garrafa"><h3>Garrafa Térmica 1L</h3><p>€17,00</p></div>
        <div class="produto"><img src="" alt="Colagénio"><h3>Colagénio Hidrolisado</h3><p>€16,50</p></div>
        <div class="produto"><img src="" alt="Multivitamínico"><h3>Multivitamínico Completo</h3><p>€11,90</p></div>
        <div class="produto"><img src="" alt="Fita Levantamento"><h3>Fitas de Levantamento</h3><p>€8,90</p></div>
        <div class="produto"><img src="" alt="Ab Roller"><h3>Roda Abdominal</h3><p>€14,99</p></div>
        <div class="produto"><img src="" alt="Tornozeleira"><h3>Tornozeleira com Peso</h3><p>€12,00</p></div>
        <div class="produto"><img src="" alt="Camisola Sem Mangas"><h3>Top Fitness Sem Mangas</h3><p>€13,49</p></div>
       

    </div>
</div>

<footer>
    <p>FitFlow</p>
</footer>

</body>
</html>