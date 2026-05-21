# Prosty sklep internetowy

Prosty sklep prezentuje produkty z bazy MySQL. Użytkownik widzi listę produktów ze zdjęciem, ceną i litrażem. Nie ma logowania ani koszyka.

## Jak uruchomić

1. Skopiuj wszystkie pliki do katalogu `c:\xampp\htdocs\Sklep`.
2. Uruchom XAMPP i włącz Apache oraz MySQL.
3. Otwórz `http://localhost/phpmyadmin`.
4. Stwórz bazę danych `sklep` lub zaimportuj plik `install.sql`.
5. Jeśli potrzebujesz, zmodyfikuj dane logowania w `db.php`.
6. Wejdź na `http://localhost/Sklep/`.

## Dostosowanie

- Dodawaj nowe produkty do tabeli `products`.
- Pola: `name`, `liters`, `price`, `image`.
- W polu `image` możesz wkleić link do obrazka lub ścieżkę lokalną.
