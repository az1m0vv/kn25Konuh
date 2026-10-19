<?php 
$appName = "Task Manager";
$taskTitle = "Вивчити основи PHP";
$taskTimeEstimate = 2;
$isCompleted = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    </header> 
    <main>
        <ul>
            <li>
                <span class="<?= $isCompleted ? 'task-done' : 'task-pending' ?>">
                <?= $taskTitle ?>
                </span>
                <?php if ($isCompleted == true): ?>
                    ✔️ Виконано
                <?php else: ?>
                    🕒 В процесі
                <?php endif; ?>
            </li>
            <li><?= $taskTimeEstimate ?></li>
        </ul>
    </main>
</body>
</html> 