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

$filteredProducts = array_values(array_filter($products, function ($product) use ($category) {
    return $category === '' || $product['category'] === $category;
}));

header('Content-Type: application/json; charset=utf-8');
echo json_encode([
    'allowedCategories' => $allowedCategories,
    'selectedCategory' => $category,
    'products' => $filteredProducts,
], JSON_UNESCAPED_UNICODE);
