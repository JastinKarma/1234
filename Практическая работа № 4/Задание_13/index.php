<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 13</title>
</head>
<body>

    <?php
    
    require '/var/www/html/PR3/Практическая работа № 4/Задание_13/sample/dump/albums.php';
    require '/var/www/html/PR3/Практическая работа № 4/Задание_13/sample/dump/tracks.php';

    
    $id = $_GET['id'] ?? null;

    if ($id) {
        $found = false;
        foreach ($albums as $album) {
            if ($album['id_album'] == $id) {
                echo "<h1>{$album['title']} ({$album['country']})</h1><ul>";
                
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
        if (!$found) echo "Альбом не найден.";
        echo "<br><a href='?'>Назад к списку</a>";
    } else {
        
        echo "<h1>Выберите альбом:</h1><ul>";
        foreach ($albums as $album) {
            echo "<li><a href='?id={$album['id_album']}'>{$album['title']}</a></li>";
        }
        echo "</ul>";
    }
    ?>

</body>
</html>
