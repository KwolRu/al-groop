
<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<link rel="stylesheet" href="assets/css/loader.css">
<link rel="stylesheet" href="assets/css/burger-menu.css">
<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/components/button.css">
<link rel="stylesheet" href="assets/css/header.css">
<link rel="stylesheet" href="assets/css/hero.css">
<link rel="stylesheet" href="assets/css/about.css">
<link rel="stylesheet" href="assets/css/units.css">
<link rel="stylesheet" href="assets/css/we.css">
<link rel="stylesheet" href="assets/css/founder.css">
<link rel="stylesheet" href="assets/css/news.css">
<link rel="stylesheet" href="assets/css/contacts.css">
<link rel="stylesheet" href="assets/css/footer.css">

<!-- Loader Overlay -->
<div id="loader-overlay">
    <div class="loader-container">
        <div class="logo-loader">
            <!-- Assuming there's a logo image, adjust the path as needed -->
            <img src="assets/img/logo.svg" alt="Logo">
        </div>
        <div class="loader-progress">
            <div class="loader-progress-bar" id="loader-progress-bar"></div>
        </div>
        <div class="loader-percentage" id="loader-percentage">0%</div>
    </div>
</div>

<main>
    <?php require_once 'includes/sections/hero.php'; ?>
    <?php require_once 'includes/sections/about.php'; ?>
    <?php require_once 'includes/sections/units.php'; ?>
    <?php require_once 'includes/sections/founder.php'; ?>
    <?php require_once 'includes/sections/contacts.php'; ?>
    <?php require_once 'includes/sections/news.php'; ?>
    <?php require_once 'includes/sections/contacts-desktop.php'; ?>
</main>

<script src="assets/js/validation.js"></script>
<script src="assets/js/units.js"></script>
<script src="assets/js/nav.js"></script>
<?php
require_once 'includes/footer.php';

