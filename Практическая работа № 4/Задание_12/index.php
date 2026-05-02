<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 12</title>
</head>
<body>

    <h1>Связанные списки</h1>

    <?php
        // Подключаем файлы из папки dump 
        require '/var/www/html/PR3/Практическая работа № 4/Задание_12/sample/dump/albums.php';
        require '/var/www/html/PR3/Практическая работа № 4/Задание_12/sample/dump/tracks.php';

        echo "<ol>";
        foreach ($albums as $album) {
            // Выводим Название и Страну
            echo "<li>" . $album['title'] . " (" . $album['country'] . ")";
            
            echo "<ul>";
            foreach ($tracks as $track) {
                // Если внешний ключ трека равен первичному ключу альбома
                if ($track['id_album'] == $album['id_album']) {
                    echo "<li>" . $track['name'] . "</li>";
                }
            }
            echo "</ul>";
            
            echo "</li>";
        }
        echo "</ol>";
    ?>

</body>
</html>
