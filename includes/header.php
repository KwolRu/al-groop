<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/header.css" rel="stylesheet">
    <link href="assets/css/hero.css" rel="stylesheet">
    <link href="assets/css/about.css" rel="stylesheet">
    <link href="assets/css/units.css" rel="stylesheet">
    <link href="assets/css/founder.css" rel="stylesheet">
    <link href="assets/css/news.css" rel="stylesheet">
    <link href="assets/css/contacts.css" rel="stylesheet">
    <link href="assets/css/footer.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header-container">
            <a href="/">
                <img src="assets/img/logo.svg" alt="Logo">
            </a>
            <ul class="header-menu-od">
                <a href="tel:+74951699610" class="header-phone">+7 495 169 96 10</a>
                <li><a href="#contacts">Контакты</a></li>
                <li><a href="#about">О компании</a></li>
                <li><a href="#units">ЮНИТЫ</a></li>
                <li><a href="#charity-fund">ФОНД</a></li>
                <li> <a href="#" class="button__link">
                        Ознакомиться с юнитами <span class="arrow">&gt;</span>
                    </a></li>

            </ul>
            <div class="burger-wrapper">
                <?php require_once 'components/burger-menu.php'; ?>
            </div>
        </div>
    </header>
</body>

</html>