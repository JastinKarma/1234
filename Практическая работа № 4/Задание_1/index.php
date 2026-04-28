<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function xor3($a, $b, $c) {
    if ($a == 0 && $b == 0 && $c == 1) return 1;
    if ($a == 0 && $b == 1 && $c == 0) return 1;
    if ($a == 1 && $b == 0 && $c == 0) return 1;
    if ($a == 1 && $b == 1 && $c == 1) return 1;
    return 0;
}

echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align: center;'>";
echo "<tr> <th>a</th> <th>b</th> <th>c</th> <th>q</th> </tr>";

for ($a = 0; $a <= 1; $a++) {
    for ($b = 0; $b <= 1; $b++) {
        for ($c = 0; $c <= 1; $c++) {
            $q = xor3($a, $b, $c);
            echo "<tr>
                    <td>$a</td>
                    <td>$b</td>
                    <td>$c</td>
                    <td style='font-weight: bold;'>$q</td>
                  </tr>";
        }
    }
}
echo "</table>";
?>

</body>
</html>