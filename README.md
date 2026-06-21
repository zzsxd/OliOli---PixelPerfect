# OLIOLI Landing — Pixel Perfect

Адаптивная PHP-страница для лендинга OLIOLI, сверстанная по макету в формате pixel perfect. Верстка подготовлена для самостоятельного запуска и для интеграции в OpenCart 3.0.4.0.

## Скриншоты

### Desktop 1440px

![Desktop 1440px](screenshots/desktop-1440.jpg)

### Tablet 768px

![Tablet 768px](screenshots/tablet-768.jpg)

### Mobile 375px

![Mobile 375px](screenshots/mobile-375.jpg)

## Что внутри

- `index.php` — standalone-версия страницы.
- `styles.css` — стили лендинга с адаптивом под desktop, tablet и mobile.
- `assets/` — изображения, декоративные элементы и локальные шрифты.
- `screenshots/` — актуальные скриншоты сайта в 3 версиях: 1440px, 768px и 375px.
- `opencart/` — готовая структура файлов для установки в OpenCart.

## Технологии

- PHP 7.3+
- OpenCart 3.0.4.0
- Apache 2.4+ с `mod_rewrite`
- MySQL 5.x для основного OpenCart-проекта
- Шрифт: Geologica

## Локальный запуск

```bash
php -S 127.0.0.1:8080
```

После запуска страница будет доступна по адресу:

```text
http://127.0.0.1:8080/
```

## Интеграция в OpenCart

Скопируйте содержимое папки `opencart/` в корень сайта OpenCart.

После копирования страница будет доступна по маршруту:

```text
/index.php?route=information/olioli_authors
```

В OpenCart нужно очистить кеш:

1. `Extensions -> Modifications -> Refresh`
2. кеш темы через шестерёнку на Dashboard

Если на сайте используется не `default`-тема и fallback шаблонов отключён, скопируйте файл:

```text
catalog/view/theme/default/template/information/olioli_authors.twig
```

в папку активной темы:

```text
catalog/view/theme/ВАША_ТЕМА/template/information/olioli_authors.twig
```

Страница сделана как самостоятельный HTML внутри Twig, без стандартных OpenCart header/footer, чтобы сохранить точное совпадение с макетом.

## Статус

Проект подготовлен как pixel-perfect верстка: расположение элементов, размеры блоков, декоративные элементы, типографика и адаптивные состояния сверены под desktop, tablet и mobile.
