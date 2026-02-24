<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Карьерный апгрейд и инновации</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cdefs%3E%3ClinearGradient id='g' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23FF7043' /%3E%3Cstop offset='100%25' style='stop-color:%234527A0' /%3E%3C/linearGradient%3E%3C/defs%3E%3Cpath d='M16 2 L20 12 L30 16 L20 20 L16 30 L12 20 L2 16 L12 12 Z' fill='url(%23g)' /%3E%3C/svg%3E">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#services" class="nav__link">Услуги</a></li>
                    <li><a href="./#mentorship" class="nav__link">Менторство</a></li>
                    <li><a href="./#insights" class="nav__link">Инсайты</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag">Legal Documents</span>
            <h1>Политика использования файлов cookie</h1>

            <div class="legal-content reveal">
                <p class="lead-text">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы переосмыслить подход к развитию и обеспечить корректную работу наших инструментов, мы используем инновационные технологии, включая файлы cookie.
                </p>

                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой фрагмент данных, который платформа 
                    <strong><?= $domainTitle ?></strong> сохраняет на вашем устройстве. Это позволяет нам "помнить" ваши предпочтения 
                    (например, выбранный язык, регион Италия и другие параметры), обеспечивая быстрый и легкий старт при каждом визите.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем технологии, используемые на сайте <strong><?= $fullDomain ?></strong>, по следующим категориям:
                </p>
                <ul class="legal-list">
                    <li>
                        <strong>Строго необходимые:</strong> Критически важны для функционирования платформы года. Позволяют безопасно перемещаться по разделам <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        <strong>Аналитические:</strong> Сбор анонимной информации о том, как пользователи используют наши AI-инструменты для реальных задач.
                    </li>
                    <li>
                        <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для максимально персонализированного опыта в рамках карьерного апгрейда.
                    </li>
                    <li>
                        <strong>Маркетинговые:</strong> Помогают нам предлагать решения, которые меняют правила игры именно для вашей ситуации.
                    </li>
                </ul>

                <h2>Зачем мы используем файлы cookie?</h2>
                <ul class="legal-list">
                    <li>Обеспечение стабильной и передовой цифровой инфраструктуры.</li>
                    <li>Анализ поведения для оптимизации стратегий роста на базе инноваций.</li>
                    <li>Персонализация контента для пользователей в странах ЕС.</li>
                    <li>Поддержка экспертной методологии на всех этапах взаимодействия.</li>
                </ul>

                <h2>Ваш выбор и управление</h2>
                <p>
                    Вы имеете полный контроль над своими данными. Вы можете в любой момент изменить настройки в браузере. Однако помните: отключение cookie может ограничить доступ к некоторым функциям платформы.
                </p>

                <h2>Файлы cookie третьих сторон</h2>
                <p>
                    Мы используем проверенных партнеров и современные библиотеки (например, Three.js для визуализации), которые могут устанавливать свои cookie. Рекомендуем ознакомиться с их политиками конфиденциальности.
                </p>

                <div class="contact-info-block">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики <strong><?= $domainTitle ?></strong>, свяжитесь с нашей командой поддержки:
                    </p>
                    <ul class="contact-data">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+390697639406">+390697639406</a></li>
                        <li><strong>Адрес:</strong> Via dei Condotti, 10, 00187 Roma RM, Italy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <div class="logo logo--footer"><?= $domainTitle ?></div>
                <p class="footer__description">Инновационная технология вашего карьерного продвижения. Постройте карьеру, которая работает на вас.</p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#services">Услуги</a></li>
                    <li><a href="./#mentorship">Менторство</a></li>
                    <li><a href="./#insights">Инсайты</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookies Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li><i class="fa-solid fa-phone"></i> +39 06 97639406</li>
                    <li><i class="fa-solid fa-envelope"></i> hello@<?= $fullDomain ?></li>
                    <li><i class="fa-solid fa-location-dot"></i> Via dei Condotti, 10, 00187 Roma RM, Italy</li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom container">
            <p>&copy; <?= date('Y') ?> <?= $fullDomain ?>. Все права защищены.</p>
        </div>
    </footer>
    <div class="mobile-menu" id="mobile-menu">
        <button class="mobile-menu__close">&times;</button>
        <nav class="mobile-menu__nav">
            <a href="./#hero" class="mobile-link">Главная</a>
            <a href="./#services" class="mobile-link">Услуги</a>
            <a href="./#mentorship" class="mobile-link">Менторство</a>
            <a href="./#insights" class="mobile-link">Инсайты</a>
            <a href="./#reviews" class="mobile-link">Отзывы</a>
            <a href="./#contact" class="mobile-link btn btn--header">Связаться</a>
        </nav>
    </div>
    
    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="accept-cookies" class="btn btn--header">Принять</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="script.js"></script>
</body>
</html>