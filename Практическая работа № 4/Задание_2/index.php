<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$text = "«Мой дядя самых честных правил,
Когда не в шутку занемог,
Он уважать себя заставил
И лучше выдумать не мог.
Его пример другим наука;
Но, боже мой, какая скука
С больным сидеть и день и ночь,
Не отходя ни шагу прочь!
Какое низкое коварство
Полуживого забавлять,
Ему подушки поправлять,
Печально подносить лекарство,
Вздыхать и думать про себя:
Когда же черт возьмет тебя!»";

$lines_array = explode("\n", trim($text));
$count = count($lines_array);

echo "<b>Отрывок:</b><br>";
echo "<i>" . nl2br($text) . "</i><br><hr>";
echo "Количество вспомненных строк: <b>$count</b><br>";
echo "Оценка: ";

switch ($count) {
    case 2: echo "Беда."; break;
    case 4: echo "Плохо."; break;
    case 6: echo "Кажется, что вы где-то учились"; break;
    case 8: echo "Вы среднестатистический человек."; break;
    case 10: echo "Нормально."; break;
    case 12: echo "Хорошо."; break;
    case 14: echo "Отлично."; break;
    default: echo "Оценка для такого количества строк не предусмотрена."; break;
}
?>

</body>
</html>