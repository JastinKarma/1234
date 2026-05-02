<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 14</title>
</head>
<body>

    <?php
    // Подключаем файлы с данными
    require '/var/www/html/PR3/Практическая работа № 4/Задание_14/sample/dump/albums.php';
    require '/var/www/html/PR3/Практическая работа № 4/Задание_14/sample/dump/tracks.php';

    // Получаем ID из GET-параметра
    $target_id = $_GET['id'] ?? null;

    if ($target_id) {
        // --- РЕЖИМ 1: Вывод конкретного альбома ---
        $found = false;
        foreach ($albums as $album) {
            if ($album['id_album'] == $target_id) {
                echo "<h1>{$album['title']} ({$album['country']})</h1>";
                echo "<ul>";
                foreach ($tracks as $track) {
                    if ($track['id_album'] == $album['id_album']) {
                        echo "<li>{$track['name']}</li>";
                    }
                }
                echo "</ul>";
                $found = true;
                break; 
            }
        }
        if (!$found) echo "<p>Альбом с ID $target_id не найден.</p>";
        echo "<p><a href='?'>Показать все альбомы</a></p>";

    } else {
        // --- РЕЖИМ 2: Вывод всех альбомов и их треков ---
        echo "<h1>Полный список альбомов</h1>";
        echo "<ol>";
        foreach ($albums as $album) {
            // Делаем название альбома ссылкой для удобства проверки
            echo "<li><a href='?id={$album['id_album']}'>{$album['title']}</a> ({$album['country']})";
            echo "<ul>";
            foreach ($tracks as $track) {
                if ($track['id_album'] == $album['id_album']) {
                    echo "<li>{$track['name']}</li>";
                }
            }
            echo "</ul></li>";
        }
        echo "</ol>";
    }
    ?>

</body>
</html>
