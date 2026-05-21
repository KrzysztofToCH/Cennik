<?php
require 'db.php';

$category = $_GET['category'] ?? '';
$allowedCategories = ['Chemia do prania', 'Chemia do sprzątania', 'Artykuły spożywcze', 'inne'];
if ($category !== '' && !in_array($category, $allowedCategories, true)) {
    $category = '';
}

$categoryColumnExists = false;
$columnCheck = $pdo->query("SHOW COLUMNS FROM products LIKE 'category'");
if ($columnCheck && $columnCheck->fetch()) {
    $categoryColumnExists = true;
} else {
    $pdo->exec("ALTER TABLE products ADD COLUMN category ENUM('Chemia do prania', 'Chemia do sprzątania', 'Artykuły spożywcze', 'inne') NOT NULL DEFAULT 'inne'");
    $categoryColumnExists = true;
}

if ($category !== '') {
    $stmt = $pdo->prepare('SELECT id, name, price, liters, image, category FROM products WHERE category = ? ORDER BY name');
    $stmt->execute([$category]);
} else {
    $stmt = $pdo->query('SELECT id, name, price, liters, image, category FROM products ORDER BY name');
}
$products = $stmt->fetchAll();

header('Content-Type: application/json; charset=utf-8');
echo json_encode([
    'categoryColumnExists' => $categoryColumnExists,
    'allowedCategories' => $allowedCategories,
    'selectedCategory' => $category,
    'products' => $products,
], JSON_UNESCAPED_UNICODE);
