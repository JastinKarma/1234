<?php
// 1. ЛОГИЧЕСКАЯ ЧАСТЬ: Инициализация переменных
// Сюда вы копируете реальный HTML-код из ваших файлов

$head = '
    <meta charset="utf-8">
    <title>Изучаем PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
';

$header = '
    <h1>Заголовок сайта</h1>
    <nav>Меню</nav>
';

$content = '
    <h2>Главная страница</h2>
    <p>Добро пожаловать в мир серверного программирования!</p>
';

$footer = '
    <p>&copy; 2023 Мой PHP проект</p>
';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <?php echo $head; ?>
</head>

<body>
    <header>
        <div class="content">
            <?php echo $header; ?>
        </div>
    </header>

    <div class="main">
        <div class="content">
            <?php echo $content; ?>
        </div>
    </div>

    <footer>
        <div class="content">
            <?php echo $footer; ?>
        </div>
    </footer>
</body>

</html>
