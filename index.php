<?php
$category = $_GET['category'] ?? '';
$search = trim((string)($_GET['search'] ?? ''));
$allowedCategories = ['Chemia do prania', 'Chemia do sprzątania', 'Artykuły spożywcze', 'inne'];

$products = [
    [
        'name' => 'Pergel Black',
        'liters' => '3l',
        'price' => 12.00,
        'image' => 'Zdjęcia/Pergel black.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Pergel Kolor',
        'liters' => '3l',
        'price' => 12.00,
        'image' => 'Zdjęcia/Pergel kolor.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Pergel Universal',
        'liters' => '3l',
        'price' => 12.00,
        'image' => 'Zdjęcia/Pergel uniwersalny.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Vizir proszek do prania kolor',
        'liters' => '1,1 kg',
        'price' => 22.00,
        'image' => 'Zdjęcia/Vizir kolor.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Vizir proszek do białych',
        'liters' => '1,1 kg',
        'price' => 22.00,
        'image' => 'Zdjęcia/Vizir biały.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Tresori płyn do płukania',
        'liters' => '760 ml',
        'price' => 14.00,
        'image' => 'Zdjęcia/tresori płyn do płukania.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Ariel kapsułki do prania black',
        'liters' => '10 szt',
        'price' => 13.00,
        'image' => 'Zdjęcia/ariel_kapsułki do prania black.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Ariel kapsułki color',
        'liters' => '19 szt',
        'price' => 24.00,
        'image' => 'Zdjęcia/ariel kapsułki do prania color.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Vanish odplamiacz white',
        'liters' => '1l',
        'price' => 15.00,
        'image' => 'Zdjęcia/vanish odplamiacz.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Vanish color',
        'liters' => '1,5l',
        'price' => 22.00,
        'image' => 'Zdjęcia/vanish color.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Persil płyn do prania kolor',
        'liters' => '6l',
        'price' => 50.00,
        'image' => 'Zdjęcia/Persil kolor.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Persil płyn do prania uniwersalny',
        'liters' => '6l',
        'price' => 50.00,
        'image' => 'Zdjęcia/Persil uniwerslany.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Persil płyn do prania black',
        'liters' => '6l',
        'price' => 50.00,
        'image' => 'Zdjęcia/Persil czarny.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Eco Shine Sanit pianka odkamieniająca',
        'liters' => '1l',
        'price' => 16.00,
        'image' => 'Zdjęcia/ECO SHINE SANIT pianka.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Eco Shine Oven Cleaner',
        'liters' => '1l',
        'price' => 18.50,
        'image' => 'Zdjęcia/eco shine oven cleaner.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Eco Shine Smart Foam',
        'liters' => '1l',
        'price' => 18.00,
        'image' => 'Zdjęcia/eco shine smart foam.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Eco Shine Toilet Cleaner',
        'liters' => '750 ml',
        'price' => 12.00,
        'image' => 'Zdjęcia/Eco shine toilet.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Eco Shine Floor płyn z alkoholem do podłóg',
        'liters' => '1l',
        'price' => 18.00,
        'image' => 'Zdjęcia/Eco shine floor cleaner.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Eco Shine Dish Cleaner płyn do naczyń',
        'liters' => '1l',
        'price' => 9.00,
        'image' => 'Zdjęcia/Eco shine dish cleaner.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Cillit Bang do tłuszczu',
        'liters' => '750 ml',
        'price' => 12.00,
        'image' => 'Zdjęcia/Cilit_tłuszcz.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Cillit Bang do kamienia',
        'liters' => '750 ml',
        'price' => 12.00,
        'image' => 'Zdjęcia/Cilit bang do kamienia.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Domestos',
        'liters' => '750 ml',
        'price' => 12.00,
        'image' => 'Zdjęcia/Domestos.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Spic Span płyn do podłóg',
        'liters' => '1l',
        'price' => 8.50,
        'image' => 'Zdjęcia/Spic Span.jpeg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Seventh generation płyn do prania',
        'liters' => '1l',
        'price' => 12.00,
        'image' => 'Zdjęcia/Seventh generation płyn do płukania.jpg',
        'category' => 'Chemia do prania'
    ],
    [
        'name' => 'Seventh generation płyn do czyszczenia',
        'liters' => '500 ml',
        'price' => 6.00,
        'image' => 'Zdjęcia/Seventh generation płyn do czyszczenia.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Villa płyn do szyb i luster',
        'liters' => '750 ml',
        'price' => 7.50,
        'image' => 'Zdjęcia/Villa płyn do szyb.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Fairy płyn do naczyń',
        'liters' => '900 ml',
        'price' => 10.50,
        'image' => 'Zdjęcia/Fairy płyn do naczyń.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Emulsio pianka do czyszczenia mebli',
        'liters' => '300 ml',
        'price' => 14.00,
        'image' => 'Zdjęcia/Emulsio.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Papier do pieczenia 8m/38cm',
        'price' => 5.00,
        'image' => 'Zdjęcia/Papier do pieczenia.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Rękaw do pieczenia 3m',
        'price' => 4.00,
        'image' => 'Zdjęcia/Rękaw do pieczenia.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Reczniki Foxy',
        'price' => 8.00,
        'image' => 'Zdjęcia/Ręczniki Foxy.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Płatki kosmetyczne Beauty',
        'price' => 4.00,
        'image' => 'Zdjęcia/Płatki kosmetyczne.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Gilette blue 3',
        'liters' => '6 szt',
        'price' => 18.00,
        'image' => 'Zdjęcia/Gilette blue 3.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Kret granulki duży',
        'liters' => '800 g',
        'price' => 16.00,
        'image' => 'Zdjęcia/Kret granulki duży.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Kret granulki mały',
        'liters' => '280 g',
        'price' => 5.00,
        'image' => 'Zdjęcia/Kret granulki mały.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Pril kapsułki do zmywarki',
        'liters' => '30 szt',
        'price' => 24.00,
        'image' => 'Zdjęcia/Pril.jpg',
        'category' => 'Chemia do sprzątania'
    ],
    [
        'name' => 'Tresori dyfuzor z patyczkami (2 kolory)',
        'liters' => '200 ml',
        'price' => 28.00,
        'image' => 'Zdjęcia/Tresori patyczki zapachowe.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Kami folia aluminiowa 20m',
        'price' => 7.00,
        'image' => 'Zdjęcia/Folia aluminiowa kami.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Subito zapalarka do gazu',
        'price' => 3.00,
        'image' => 'Zdjęcia/Zapalarki subito.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Colgate szczoteczki do zębów',
        'liters' => '4 szt/opakowanie',
        'price' => 10.00,
        'image' => 'Zdjęcia/Szczoteczki do zebow.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Zmywaki do teflonu',
        'liters' => '2 szt',
        'price' => 2.50,
        'image' => 'Zdjęcia/Zmywka do teflonu.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Worki na śmieci 35l',
        'liters' => '15 szt',
        'price' => 2.50,
        'image' => 'Zdjęcia/Worki 35l.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Worki na śmieci 60l',
        'liters' => '10 szt',
        'price' => 3.50,
        'image' => 'Zdjęcia/worki 60l.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Worki na śmieci 120l',
        'liters' => '10 szt',
        'price' => 4.50,
        'image' => 'Zdjęcia/worki 120l.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Worki na śmieci 160l',
        'liters' => '10 szt',
        'price' => 9.00,
        'image' => 'Zdjęcia/worki 160l.jpg',
        'category' => 'inne'
    ],
    [
        'name' => 'Makaron Lubella spaghetti',
        'liters' => '400 g',
        'price' => 3.50,
        'image' => 'Zdjęcia/Spaghetti.jpg',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Makaron Lubella nitki',
        'liters' => '400 g',
        'price' => 3.50,
        'image' => 'Zdjęcia/Nitki.png',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Makaron Lubella świderki',
        'liters' => '400 g',
        'price' => 3.50,
        'image' => 'Zdjęcia/Świderki.jpg',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Makaron Lubella pióra',
        'liters' => '400 g',
        'price' => 3.50,
        'image' => 'Zdjęcia/Pióra.jpg',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Łowicz Sos boloński',
        'liters' => '500 g',
        'price' => 5.50,
        'image' => 'Zdjęcia/Sos Boloński.jpg',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Łowicz Sos spaghetti',
        'liters' => '500 g',
        'price' => 5.50,
        'image' => 'Zdjęcia/sos spaghetti.jpg',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Łowicz Sos słodko-kwaśny',
        'liters' => '500 g',
        'price' => 5.50,
        'image' => 'Zdjęcia/Sos_słodko-kwaśny.jpg',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Łowicz koncentrat pomidorowy',
        'liters' => '80 g',
        'price' => 2.50,
        'image' => 'Zdjęcia/Koncentrat.png',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Kotlin Ketchup łagodny',
        'liters' => '450 g',
        'price' => 5.00,
        'image' => 'Zdjęcia/Kotlin_Ketchup_łagodny.png',
        'category' => 'Artykuły spożywcze'
    ],
    [
        'name' => 'Kotlin Ketchup pikantny',
        'liters' => '450 g',
        'price' => 5.00,
        'image' => 'Zdjęcia/Ketchup_pikantny.jpg',
        'category' => 'Artykuły spożywcze'
    ]
];

if ($category !== '' && !in_array($category, $allowedCategories, true)) {
    $category = '';
}

$filteredProducts = array_filter($products, function ($product) use ($category, $search) {
    $matchesCategory = $category === '' || $product['category'] === $category;
    $matchesSearch = $search === '' || stripos($product['name'], $search) !== false;

    return $matchesCategory && $matchesSearch;
});

// Ustaw domyślną cenę 0.00 dla produktów, które nie mają klucza 'price'
foreach ($filteredProducts as &$pf) {
    if (!isset($pf['price'])) {
        $pf['price'] = 0.00;
    }
}
unset($pf);

function getMetaLabel(?string $liters): string {
    if ($liters === null || $liters === '') {
        return '';
    }
    if (stripos($liters, 'kg') !== false) {
        return 'Waga';
    }
    if (stripos($liters, 'g') !== false) {
        return 'Waga';
    }
    if (stripos($liters, 'szt') !== false) {
        return 'Ilość sztuk';
    }
    return 'Litraż';
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="stylesheet" href="style.css?ver=2">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <h1><a href="./">Strona główna</a></h1>
        </div>
    </header>

    <main class="container">
        <div class="filter-bar">
            <form method="get">
                <label for="search">Wyszukaj produkt:</label>
                <input type="search" id="search" name="search" placeholder="Nazwa produktu" value="<?= htmlspecialchars($search) ?>">
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
                        <?php if (isset($product['liters']) && $product['liters'] !== ''): ?>
                            <p class="product-meta"><?= htmlspecialchars(getMetaLabel($product['liters'])) ?>: <strong><?= htmlspecialchars($product['liters']) ?></strong></p>
                        <?php endif; ?>
                        <?php if (isset($product['price'])): ?>
                            <p class="product-price"><strong><?= number_format((float)$product['price'], 2, ',', ' ') ?> zł</strong></p>
                        <?php else: ?>
                            <p class="product-price"><strong>Brak ceny</strong></p>
                        <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>
