<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
    
    
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    echo "<h3>Решение квадратного уравнения: $a*x^2 + $b*x + $c = 0</h3>";

    $d = pow($b, 2) - 4 * $a * $c;

    echo "Дискриминант (D) = $d <br><br>";

    if ($d > 0) {
        
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        echo "Уравнение имеет два корня:<br>";
        echo "x1 = $x1 <br>";
        echo "x2 = $x2 <br>";
    } 
    elseif ($d == 0) {
    
        $x = -$b / (2 * $a);
        echo "Уравнение имеет один корень:<br>";
        echo "x = $x";
    } 
    else {
        
        echo "Дискриминант меньше нуля. Корней нет!";
    }

} else {
    
    echo "Введите коэффициенты a, b и c в строке запроса.";
    echo "<br>Пример: index.php?a=1&b=-3&c=2";
}
?>

</body>
</html>