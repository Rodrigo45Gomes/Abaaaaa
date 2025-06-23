<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
$total = 0;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Carrinho - FitFlow</title>
    <link rel="stylesheet" href="style/style_store.css">
    <link rel="icon" type="image/png" href="imagens/Logo_FitFlow.png">
</head>
<body>

<header>
    <h1>O teu Carrinho 🛒</h1>
</header>

<nav>
    <a href="fitflow_store.php">Início</a>
    <a href="fitflow_products.php">Produtos</a>
    <a href="tirar_carrinho.php">Carrinho (<?= count($cart) ?>)</a>
</nav>

<div class="conteudo">
    <?php if (empty($cart)): ?>
        <p>O teu carrinho está vazio.</p>
    <?php else: ?>
        <table>
            <tr><th>Produto</th><th>Preço</th><th></th></tr>
            <?php foreach ($cart as $index => $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['name']) ?></td>
                    <td>€<?= number_format($item['price'], 2) ?></td>
                    <td>
                        <form method="post" action="tirar_produto.php" style="display:inline;">
                            <input type="hidden" name="index" value="<?= $index ?>">
                            <button type="submit">Remover</button>
                        </form>
                    </td>
                </tr>
                <?php $total += $item['price']; ?>
            <?php endforeach; ?>
        </table>
        <p><strong>Total: €<?= number_format($total, 2) ?></strong></p>
        <form action="checkout.php" method="post">
            <button type="submit">Finalizar Compra</button>
        </form>
    <?php endif; ?>
</div>

</body>
</html>
