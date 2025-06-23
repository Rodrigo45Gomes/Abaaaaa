<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['product_name'];
    $price = floatval($_POST['product_price']);

    $item = ['name' => $name, 'price' => $price];

    // Criar array se não existir
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Adicionar ao carrinho
    $_SESSION['cart'][] = $item;

    // Voltar aos produtos
    header("Location: fitflow_products.php");
    exit;
}
?>
