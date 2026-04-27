<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Преобразуем индексный массив в двумерный ассоциативный
$pink_floyd_assoc = [
    [
        "id" => 1,
        "album_name" => "Atom Heart Mother",
        "release_date" => "10 октября 1970",
        "label" => "EMI, Harvest, Capitol",
        "format" => "LP, CD",
        "status" => "Золотой (USA)"
    ],
    [
        "id" => 2,
        "album_name" => "Meddle",
        "release_date" => "30 октября 1971",
        "label" => "EMI, Harvest, Capitol",
        "format" => "Vinyl, Кассета, CD",
        "status" => "Платиновый (USA)"
    ],
    [
        "id" => 3,
        "album_name" => "Obscured by Clouds",
        "release_date" => "3 июня 1972",
        "label" => "EMI, Harvest, Capitol",
        "format" => "LP, Кассета, CD",
        "status" => "Золотой (USA), Серебряный (GBR)"
    ],
    [
        "id" => 4,
        "album_name" => "The Dark Side of the Moon",
        "release_date" => "17 марта 1973",
        "label" => "Harvest, Capitol, EMI",
        "format" => "LP, Кассета, CD, SACD",
        "status" => "Платиновый (USA, GBR), Бриллиантовый (CAN)"
    ],
    [
        "id" => 5,
        "album_name" => "Wish You Were Here",
        "release_date" => "15 сентября 1975",
        "label" => "Harvest, EMI, Columbia, Capitol",
        "format" => "LP, 8-track, Кассета, CD, SACD",
        "status" => "Платиновый (USA, CAN), Золотой (GBR)"
    ],
    [
        "id" => 6,
        "album_name" => "Animals",
        "release_date" => "23 января 1977",
        "label" => "Harvest, EMI, Columbia, Capitol",
        "format" => "LP, 8-track, Кассета, CD",
        "status" => "Платиновый (USA, CAN), Золотой (GBR)"
    ],
    [
        "id" => 7,
        "album_name" => "The Wall",
        "release_date" => "30 ноября 1979",
        "label" => "Harvest, EMI, Columbia, Capitol",
        "format" => "LP, 8-track, Кассета, CD",
        "status" => "Платиновый (USA, GBR, NLD), Бриллиантовый (CAN)"
    ],
    [
        "id" => 8,
        "album_name" => "The Final Cut",
        "release_date" => "21 марта 1983",
        "label" => "Harvest, EMI, Columbia, Capitol",
        "format" => "LP, 8-track, Кассета, CD",
        "status" => "Платиновый (USA), Золотой (GBR, NLD)"
    ],
    [
        "id" => 9,
        "album_name" => "A Momentary Lapse of Reason",
        "release_date" => "8 сентября 1987",
        "label" => "EMI, Columbia",
        "format" => "LP, Кассета, CD",
        "status" => "Платиновый (USA, CAN), Золотой (GBR, NLD)"
    ],
    [
        "id" => 10,
        "album_name" => "The Division Bell",
        "release_date" => "30 марта 1994",
        "label" => "EMI, Columbia",
        "format" => "LP, Кассета, CD",
        "status" => "Платиновый (USA, GBR, CAN, NLD)"
    ]
];

// Выводим массив с помощью var_dump
echo "<pre>";
var_dump($pink_floyd_assoc);
echo "</pre>";
?>

</body>
</html>