<?php
$category = $_GET['category'] ?? '';
$allowedCategories = ['Chemia do prania', 'Chemia do sprzątania', 'Artykuły spożywcze', 'inne'];

$products = [
    [
        'name' => 'Wino czerwone',
        'liters' => '0,75 l',
        'price' => 45.99,
        'image' => 'https://via.placeholder.com/400x300?text=Wino+czerwone',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Wino białe',
        'liters' => '0,75 l',
        'price' => 42.50,
        'image' => 'https://via.placeholder.com/400x300?text=Wino+białe',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Sok jabłkowy',
        'liters' => '1,0 l',
        'price' => 9.99,
        'image' => 'images/sok.jpg',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Piwo rzemieślnicze',
        'liters' => '0,5 l',
        'price' => 7.49,
        'image' => 'https://via.placeholder.com/400x300?text=Piwo',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Olej z oliwek',
        'liters' => '0,5 l',
        'price' => 27.90,
        'image' => 'https://via.placeholder.com/400x300?text=Olej+z+oliwek',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Woda mineralna',
        'liters' => '1,5 l',
        'price' => 4.20,
        'image' => 'https://via.placeholder.com/400x300?text=Woda+mineralna',
        'category' => 'Artykuły spożywcze'
    ]
];

if ($category !== '' && !in_array($category, $allowedCategories, true)) {
    $category = '';
}

$filteredProducts = array_filter($products, function ($product) use ($category) {
    return $category === '' || $product['category'] === $category;
});
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
        <?php if (count($filteredProducts) === 0): ?>
            <div class="empty-state">
                <h2>Brak produktów</h2>
            </div>
        <?php else: ?>
            <div class="product-grid">
                <?php foreach ($filteredProducts as $product): ?>
                    <article class="product-card">
                        <div class="product-image">
                            <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                        </div>
                        <div class="product-info">
                            <h2><?= htmlspecialchars($product['name']) ?></h2>
                            <p class="product-category">Kategoria: <strong><?= htmlspecialchars($product['category']) ?></strong></p>
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
