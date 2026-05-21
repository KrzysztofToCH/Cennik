CREATE DATABASE IF NOT EXISTS sklep CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;
USE sklep;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    liters VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255) NOT NULL,
    category ENUM('Chemia do prania', 'Chemia do sprzątania', 'Artykuły spożywcze', 'inne') NOT NULL DEFAULT 'inne'
);

ALTER TABLE products
    ADD COLUMN IF NOT EXISTS category ENUM('Chemia do prania', 'Chemia do sprzątania', 'Artykuły spożywcze', 'inne') NOT NULL DEFAULT 'inne';

INSERT INTO products (name, liters, price, image, category) VALUES
('Wino czerwone', '0,75 l', 45.99, 'https://via.placeholder.com/400x300?text=Wino+czerwone', 'Artykuły spożywcze'),
('Wino białe', '0,75 l', 42.50, 'https://via.placeholder.com/400x300?text=Wino+białe', 'Artykuły spożywcze'),
('Sok jabłkowy', '1,0 l', 9.99, 'https://via.placeholder.com/400x300?text=Sok+jabłkowy', 'Artykuły spożywcze'),
('Piwo rzemieślnicze', '0,5 l', 7.49, 'https://via.placeholder.com/400x300?text=Piwo', 'Artykuły spożywcze'),
('Olej z oliwek', '0,5 l', 27.90, 'https://via.placeholder.com/400x300?text=Olej+z+oliwek', 'Artykuły spożywcze'),
('Woda mineralna', '1,5 l', 4.20, 'https://via.placeholder.com/400x300?text=Woda+mineralna', 'Artykuły spożywcze');
