<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$dice1 = rand(1, 6);
$dice2 = rand(1, 6);
$dice3 = rand(1, 6);


$sum = $dice1 + $dice2 + $dice3;
?>
<h1>Встроенные функции, часть 1</h1>
<h2>Поздравляем!</h2>
<br>Неимоверными усилиями вам удалось набрать <?php echo $sum; ?> баллов!</br>

<div class="dice-box">
    <?php
        $dir = 'cube/';
    echo '<img src="' . $dir . $dice1 . '.jpg" width="100" style="margin: 5px; border: 1px solid #ccc;">';
    echo '<img src="' . $dir . $dice2 . '.jpg" width="100" style="margin: 5px; border: 1px solid #ccc;">';
    echo '<img src="' . $dir . $dice3 . '.jpg" width="100" style="margin: 5px; border: 1px solid #ccc;">';
    ?>

</body>
</html>