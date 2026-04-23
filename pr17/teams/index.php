<?php
$head = '
    <meta charset="utf-8">
    <title>Группы - Silence.net</title>
    <link rel="stylesheet" href="../assets/css/style.css">
';

$header = '
    <div class="logo">
        <img src="../assets/logo.png" alt="logo">
        <a href="../index.php"><h3>Музыкальный сервис</h3></a>
    </div>
    <nav>
        <a href="index.php">Группы</a> |
        <a href="../albums/index.php">Альбомы</a> |
        <a href="../tracks/index.php">Треки</a> |
        <a href="../admin/index.php">Консоль</a>
    </nav>
';

$content = array(
    array('id_team'=>'1','name'=>'Aerosmith','alias'=>'aerosmith','country'=>'США','content'=>'','date'=>'1970','style'=>'хард-рок','path'=>'assets/teams/aerosmith.jpg','note'=>null),
    array('id_team'=>'2','name'=>'Pink Floyd','alias'=>'pink-floyd','country'=>'Великобритания','content'=>'','date'=>'1965','style'=>'психоделический-рок','path'=>'assets/teams/pink-floyd.jpg','note'=>null),
    array('id_team'=>'3','name'=>'The Beatles','alias'=>'the-beatles','country'=>'Великобритания','content'=>'','date'=>'1960','style'=>'рок-н-ролл','path'=>'assets/teams/beatles.jpg','note'=>null),
    array('id_team'=>'4','name'=>'AC/DC','alias'=>'ac-dc','country'=>'Австралия','content'=>'','date'=>'1973','style'=>'хард-блюз-рок','path'=>'assets/teams/acdc.jpg','note'=>null),
    array('id_team'=>'5','name'=>'Scorpions','alias'=>'scorpions','country'=>'ФРГ','content'=>'','date'=>'1965','style'=>'хард-рок','path'=>'assets/teams/scorpions_.jpg','note'=>null),
    array('id_team'=>'6','name'=>'Ленинград','alias'=>'ленинград','country'=>'Россия','content'=>'','date'=>'1997','style'=>'ска, фолк, панк','path'=>'assets/teams/leningrad.jpg','note'=>null)
);

$footer = '
    <div class="block">
        <p><a href="../about/index.php">О нас</a> | <a href="../contacts/index.php">Контакты</a></p>
        <p>© 2024 Музыкальный сервис</p>
    </div>
';
?>

<!DOCTYPE html>
<html lang="ru">
<head><?php echo $head; ?></head>
<body>
    <header><div class="content"><?php echo $header; ?></div></header>
    <div class="main"><div class="content">
        <h1>Группы</h1><hr>
        <pre><?php print_r($content); ?></pre>
    </div></div>
    <footer><div class="content"><?php echo $footer; ?></div></footer>
</body>
</html>
