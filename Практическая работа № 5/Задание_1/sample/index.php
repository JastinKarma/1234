<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 1</h2>
	
	<?php
		require "teams.php";

		
require_once 'teams.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $found = false;

    foreach ($content as $group) {
        if ($group['id'] == $id) {
            echo "<h2>Информация о группе</h2>";
            echo "<b>Название:</b> " . $group['name'] . "<br>";
            echo "<b>Страна:</b> " . $group['country'] . "<br>";
            echo "<b>Год основания:</b> " . $group['date'] . "<br>";
            echo "<b>Стиль:</b> " . $group['style'] . "<br>";
            $found = true;
            break;
        }
    }

    if (!$found) {
        echo "Группа с ID $id не найдена.";
    }

} else {
    echo "<h2>Список всех групп</h2>";
    foreach ($content as $group) {
        echo "ID: " . $group['id'] . " | ";
        echo "<b>" . $group['name'] . "</b> (" . $group['country'] . ") — " . $group['style'] . "<br>";
        echo "<hr>";
    }
}
?>

	
	

</body>
</html>