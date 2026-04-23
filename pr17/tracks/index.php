<?php
$head = '
    <meta charset="utf-8">
    <title>Треки - Silence.net</title>
    <link rel="stylesheet" href="../assets/css/style.css">
';

$header = '
    <div class="logo">
        <img src="../assets/logo.png" alt="logo">
        <a href="../index.php"><h3>Музыкальный сервис</h3></a>
    </div>
    <nav>
        <a href="../teams/index.php">Группы</a> |
        <a href="../albums/index.php">Альбомы</a> |
        <a href="index.php">Треки</a> |
        <a href="../admin/index.php">Консоль</a>
    </nav>
';

$content = array(
    array('id_track'=>'1','name'=>'Back in the Saddle','note'=>'','id_album'=>'10'),
    array('id_track'=>'2','name'=>'Last Child','note'=>'','id_album'=>'10'),
    array('id_track'=>'3','name'=>'Rats in the Cellar','note'=>'','id_album'=>'10'),
    array('id_track'=>'4','name'=>'Combination','note'=>'','id_album'=>'10'),
    array('id_track'=>'5','name'=>'Sick As a Dog','note'=>'','id_album'=>'10'),
    array('id_track'=>'6','name'=>'Come Together','note'=>'','id_album'=>'10'),
    array('id_track'=>'7','name'=>'Get the Lead Out','note'=>'','id_album'=>'10'),
    array('id_track'=>'8','name'=>'Lick and a Promise','note'=>'','id_album'=>'10'),
    array('id_track'=>'9','name'=>'Home Tonight','note'=>'','id_album'=>'10'),
    array('id_track'=>'10','name'=>'Come Together','note'=>'','id_album'=>'4')
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
        <h1>Треки</h1><hr>
        <pre><?php print_r($content); ?></pre>
    </div></div>
    <footer><div class="content"><?php echo $footer; ?></div></footer>
</body>
</html>
