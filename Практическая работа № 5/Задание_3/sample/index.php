<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$count = 5;
$dice_array = array(); 
$total_sum = 0; 


for ($i = 0; $i < $count; $i++) {
    $random_number = rand(1, 6); 
    $dice_array[] = $random_number; 
    $total_sum = $total_sum + $random_number; 
}


echo "<h2>Результаты броска $count кубиков</h2>";
echo "Общая сумма очков: <b>$total_sum</b><br><br>";

for ($j = 0; $j < count($dice_array); $j++) {

    $value = $dice_array[$j];
    echo "<img src='cube/$value.jpg' width='80' style='margin: 5px;'>";
}
?>

</body>
</html>