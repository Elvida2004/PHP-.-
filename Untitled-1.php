<?php

// Определяем уровни чувствительности
const LOW = 'low';
const MEDIUM = 'medium';
const HIGH = 'high';

// Функция для классификации информации
function classifyInformation($data) {
    // Пример критериев для оценки чувствительности
    $sensitiveKeywords = ['password', 'credit card', 'SSN'];
    $mediumKeywords = ['email', 'phone number'];

    // Проверка на наличие ключевых слов
    foreach ($sensitiveKeywords as $keyword) {
        if (strpos($data, $keyword) !== false) {
            return HIGH;
        }
    }

    foreach ($mediumKeywords as $keyword) {
        if (strpos($data, $keyword) !== false) {
            return MEDIUM;
        }
    }

    // Если не найдено ключевых слов, возвращаем низкий уровень чувствительности
    return LOW;
}

// Пример использования функции
$data1 = "This is a sample text with a password.";
$data2 = "This is a sample text with an email address.";
$data3 = "This is a sample text with no sensitive information.";

echo "Data 1: " . classifyInformation($data1) . "\n"; // Вывод: high
echo "Data 2: " . classifyInformation($data2) . "\n"; // Вывод: medium
echo "Data 3: " . classifyInformation($data3) . "\n"; // Вывод: low

?>