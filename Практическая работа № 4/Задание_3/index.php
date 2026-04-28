<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Коэффициенты уравнения
$a = 1; 
$b = -3; 
$c = 2; 

echo "Уравнение: {$a}x² + ({$b})x + ({$c}) = 0 <br>";

// 1. Находим дискриминант
$d = $b**2 - 4 * $a * $c;
echo "Дискриминант D = $d <br><br>";

// 2. Проверка условий
if ($d > 0) {
    // Два корня
    $x1 = (-$b + sqrt($d)) / (2 * $a);
    $x2 = (-$b - sqrt($d)) / (2 * $a); // Исправлено на минус согласно математике
    echo "D > 0: <br>";
    echo "x1 = $x1 <br>";
    echo "x2 = $x2 <br>";
} 
elseif ($d < 0) {
    // Корней нет
    echo "D < 0: Нет корней";
} 
else {
    // Один корень (D = 0)
    $x = (-$b + sqrt($d)) / (2 * $a);
    echo "D = 0: <br>";
    echo "x = $x";
}
?>

</body>
</html>