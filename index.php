<?php
require 'db.php';

$category = $_GET['category'] ?? '';
$allowedCategories = ['Chemia do prania', 'Chemia do sprzątania', 'Artykuły spożywcze', 'inne'];
$categoryColumnExists = false;

$columnCheck = $pdo->query("SHOW COLUMNS FROM products LIKE 'category'");
if ($columnCheck && $columnCheck->fetch()) {
    $categoryColumnExists = true;
} else {
    // Jeśli kolumna nie istnieje, tworzymy ją automatycznie i ustawiamy wartość domyślną dla istniejących produktów.
    $pdo->exec("ALTER TABLE products ADD COLUMN category ENUM('Chemia do prania', 'Chemia do sprzątania', 'Artykuły spożywcze', 'inne') NOT NULL DEFAULT 'inne'");
    $categoryColumnExists = true;
}

if ($category !== '' && in_array($category, $allowedCategories, true)) {
    $stmt = $pdo->prepare('SELECT id, name, price, liters, image, category FROM products WHERE category = ? ORDER BY name');
    $stmt->execute([$category]);
} else {
    $stmt = $pdo->query('SELECT id, name, price, liters, image, category FROM products ORDER BY name');
}
$products = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosty sklep</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <h1>Prosty sklep</h1>
        </div>
    </header>

    <main class="container">
        <?php if ($categoryColumnExists): ?>
            <div class="filter-bar">
                <form method="get">
                    <label for="category">Filtruj kategorię:</label>
                    <select id="category" name="category">
                        <option value=""<?= $category === '' ? ' selected' : '' ?>>Wszystkie kategorie</option>
                        <?php foreach ($allowedCategories as $option): ?>
                            <option value="<?= htmlspecialchars($option) ?>"<?= $category === $option ? ' selected' : '' ?>><?= htmlspecialchars($option) ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit">Zastosuj</button>
                </form>
            </div>
        <?php endif; ?>
        <?php if (count($products) === 0): ?>
            <div class="empty-state">
                <h2>Brak produktów</h2>
            </div>
        <?php else: ?>
            <div class="product-grid">
                <?php foreach ($products as $product): ?>
                    <article class="product-card">
                        <div class="product-image">
                            <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                        </div>
                        <div class="product-info">
                            <h2><?= htmlspecialchars($product['name']) ?></h2>
                            <?php if ($categoryColumnExists): ?>
                                <p class="product-category">Kategoria: <strong><?= htmlspecialchars($product['category']) ?></strong></p>
                            <?php endif; ?>
                            <p class="product-meta">Litraż: <strong><?= htmlspecialchars($product['liters']) ?></strong></p>
                            <p class="product-price"><strong><?= number_format((float)$product['price'], 2, ',', ' ') ?> zł</strong></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>
