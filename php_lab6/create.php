<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Створити завдання</title>
</head>
<body>
    <h1>Створити нове завдання</h1>
    <form action="create.php" method="POST">
        <label for="title">Назва завдання:</label>
        <input type="text" id="title" name="title">

        <label for="description">Опис завдання:</label>
        <textarea id="description" name="description"></textarea>

        <label for="title">Пріоритет:</label>
        <select id="priority" name="priority">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select>

        <button type="submit">Зберегти</button>
        <a href="index6.php">Повернутись до списку</a>
    </form>
</body>
</html>