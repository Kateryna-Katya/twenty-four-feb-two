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
            <span class="section-tag">Risk Disclosure</span>
            <div class="legal-header reveal">
                <i class="fas fa-exclamation-triangle warning-icon"></i>
                <h1>Отказ от ответственности</h1>
            </div>

            <div class="legal-content reveal">
                <div class="legal-block">
                    <p>
                        <strong>Общая информация:</strong> Все материалы, статьи и кейсы,
                        опубликованные на платформе <strong><?= $domainTitle ?></strong>, носят исключительно
                        информационно-ознакомительный характер. Они представляют собой решения, которые меняют правила игры в теории, но не являются персональной юридической или карьерной рекомендацией.
                    </p>
                </div>

                <div class="legal-block">
                    <p>
                        <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> использует методологии, доказавшие эффективность, однако мы не даем гарантий конкретного результата. Любые упоминания про быстрый и легкий старт, программы пассивного дохода или истории успеха клиентов в Италии и ЕС являются иллюстративными и не гарантируют аналогичных итогов для каждого пользователя.
                    </p>
                </div>

                <div class="legal-block">
                    <p>
                        <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>
                        не несет ответственности за решения, принятые вами на основе контента блога. 
                        Переосмыслите подход к развитию осознанно: вся ответственность за применение практик и стратегий роста на базе инноваций лежит исключительно на вас.
                    </p>
                </div>

                <div class="legal-block risk-warning">
                    <p>
                        <strong>Предупреждение о рисках:</strong> Любой карьерный апгрейд и изменение профессионального вектора в странах ЕС сопряжены с личными и финансовыми рисками. Мы настоятельно рекомендуем оценить перспективы проекта и проконсультироваться с независимым экспертом перед принятием судьбоносных решений.
                    </p>
                </div>

                <div class="legal-block agreement">
                    <p>
                        <strong>Подтверждение пользователя:</strong> Продолжая использовать
                        ресурс <strong><?= $domainTitle ?></strong>, вы подтверждаете, что полностью осознаете и принимаете условия данного дисклеймера. Платформа уже доступна в Европе для лиц старше 18 лет, действующих по собственной воле.
                    </p>
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