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
            <span class="section-tag">Payment & Refunds</span>
            <h1>Политика возврата средств</h1>
            
            <div class="legal-content reveal">
                <div class="policy-hero-card refund-accent">
                    <p>
                        Мы строим отношения на доверии и качестве. В <strong><?= $domainTitle ?></strong> предусмотрена прозрачная процедура возврата, 
                        соответствующая законодательству Италии и стандартам защиты прав потребителей в странах ЕС.
                    </p>
                </div>

                <h2>Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card">
                        <i class="fas fa-file-contract"></i>
                        <h3>Несоответствие уровню</h3>
                        <p>Если содержание консультации или менторства существенно отличается от заявленного экспертного плана на <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card">
                        <i class="fas fa-tools"></i>
                        <h3>Технические сбои</h3>
                        <p>Критические ошибки при доступе к нашей цифровой инфраструктуре, которые не позволяют использовать <strong><?= $fullDomain ?></strong>.</p>
                    </div>
                    <div class="refund-card">
                        <i class="fas fa-hourglass-half"></i>
                        <h3>Период охлаждения</h3>
                        <p>Право на отказ в течение 14 дней с момента оплаты при условии, что услуги еще не были фактически оказаны.</p>
                    </div>
                </div>

                <div class="procedure-block">
                    <h2>Процедура запроса на возврат</h2>
                    <p>Для инициации процесса на платформе <strong><?= $domainTitle ?></strong> выполните следующие шаги:</p>
                    <div class="steps-mini">
                        <div class="step-mini"><span>1</span> Отправьте письмо на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></div>
                        <div class="step-mini"><span>2</span> Укажите тему: «Запрос на возврат средств — <?= $domainTitle ?>»</div>
                        <div class="step-mini"><span>3</span> Прикрепите данные: ФИО, Email и дату транзакции</div>
                        <div class="step-mini"><span>4</span> Опишите причину — это поможет нам улучшить сервис</div>
                    </div>
                </div>

                <h2>Сроки и способ возврата</h2>
                <p>
                    После одобрения вашего запроса экспертной поддержкой, возврат средств будет произведен в течение <strong>7–14 рабочих дней</strong>. 
                    Деньги возвращаются на ту же карту или счет, с которого была совершена оплата. 
                    Сроки зачисления зависят от регламента вашего банка в Италии или другой стране вашего пребывания.
                </p>

                <div class="warning-block">
                    <h2>Исключения и ограничения</h2>
                    <ul class="legal-list">
                        <li>Услуга уже была полностью оказана (например, консультация состоялась).</li>
                        <li>Запрос подан по истечении 14 календарных дней с момента оплаты.</li>
                        <li>Технические проблемы вызваны оборудованием или интернет-соединением пользователя.</li>
                        <li>Нарушение правил этики и условий использования платформы <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy">
                    <h2>Свяжитесь с нами</h2>
                    <p>По всем финансовым вопросам обращайтесь в нашу службу поддержки:</p>
                    <div class="policy-contact-box">
                        <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
                        <p class="address-small">Via dei Condotti, 10, 00187 Roma RM, Italy</p>
                    </div>
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