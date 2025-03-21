<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

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

<main>
    <?php require_once 'includes/sections/hero.php'; ?>
    <?php require_once 'includes/sections/about.php'; ?>
    <?php require_once 'includes/sections/we.php'; ?>
    <?php require_once 'includes/sections/units.php'; ?>
    <?php require_once 'includes/sections/founder.php'; ?>
    <?php require_once 'includes/sections/contacts.php'; ?>
    <?php require_once 'includes/sections/news.php'; ?>
    <?php require_once 'includes/sections/contacts-desktop.php'; ?>
</main>
<script src="assets/js/validation.js"></script>
<script src="assets/js/units.js"></script>
<?php
require_once 'includes/footer.php';

