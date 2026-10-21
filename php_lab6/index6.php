<?php 
$appName = "Task Manager";
$taskTimeEstimate = 2;
$tasks = [
    [
        'id' => 1,
        'title' => 'Виконати лабораторну роботу №5',
        'priority' => 'High',
        'is_completed' => true
    ],
    [
        'id' => 2,
        'title' => "Вивчити основи PHP",
        'priority' => 'Medium',
        'is_completed' => false
    ],
    [
        'id' => 3,
        'title' => "Створити масив завдань",
        'priority' => 'High',
        'is_completed' => true
    ],
    [
        'id' => 4,
        'title' => "Налаштувати виведення через цикли",
        'priority' => 'Low',
        'is_completed' => true
    ],
];
function formatTitle($text, $maxLength = 20) {
    if (mb_strlen($text, 'UTF-8') > $maxLength) {
        return mb_substr($text, 0, $maxLength, 'UTF-8') . "...";
    }
    return $text;
}
function getCurrentGreeting() {
    $hour=date("H");
    if ($hour >= 6 && $hour <12) {
        return "Доброго ранку";
    } elseif ($hour >= 12 && $hour < 18) {
        return "Добрий день";
    } elseif ($hour >= 18 && $hour < 24) {
        return "Добрий вечір";
    }
    return "Доброї ночі";
}
function getCurrentDate() {
    return date("d.m.Y");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .task-done {
            color: green;
            text-decoration: line-through;
        }
        .task-pending {
            color: gray;
        }
    </style>
</head>
<body>
    <header>
        <h1><?= $appName ?></h1>
        <p><?= getCurrentGreeting() ?>! Сьогодні <?= getCurrentDate() ?>.</p>
    </header> 
    <main>
        <a href="create.php">Додати нове завдання</a>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <span class="<?= $task['is_completed'] ? 'task-done' : 'task-pending' ?>">
                    <?= formatTitle($task['title']) ?>
                    </span>
                    <?php if ($task['is_completed'] == true): ?>
                        ✔️ Виконано
                    <?php else: ?>
                        🕒 В процесі
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html> 