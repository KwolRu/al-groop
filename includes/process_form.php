<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Здесь добавьте вашу логику отправки данных
    // Например, отправка на email или сохранение в базу данных

    // Отправляем JSON ответ
    header('Content-Type: application/json');
    echo json_encode(['success' => true]);
    exit;
}
