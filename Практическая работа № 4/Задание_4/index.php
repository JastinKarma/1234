<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Ваш массив данных
$team = array(
  array('id_team' => '1','name' => 'Aerosmith','country' => 'США','date' => '1970','style' => 'хард-рок'),
  array('id_team' => '2','name' => 'Pink Floyd','country' => 'Великобритания','date' => '1965','style' => 'психоделический-рок'),
  array('id_team' => '3','name' => 'The Beatles','country' => 'Великобритания','date' => '1960','style' => 'рок-н-ролл'),
  array('id_team' => '4','name' => 'AC/DC','country' => 'Австралия','date' => '1973','style' => 'хард-блюз-рок'),
  array('id_team' => '5','name' => 'Scorpions','country' => 'ФРГ','date' => '1965','style' => 'хард-рок'),
  array('id_team' => '6','name' => 'Ленинград','country' => 'Россия','date' => '1997','style' => 'ска, фолк, панк')
);

// Перебор массива циклом foreach
foreach ($team as $group) {
    echo "Группа: " . $group['name'] . " (id = " . $group['id_team'] . ")<br/>";
    echo "Страна: " . $group['country'] . "<br />";
    echo "Дата основания: " . $group['date'] . "<br />";
    echo "Стиль: " . $group['style'] . "<br />";
    echo "<hr/>";
}
?>

</body>
</html>