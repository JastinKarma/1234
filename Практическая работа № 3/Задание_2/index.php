<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Создаем ассоциативный массив с данными преподавателя
$teacher = [
    "surname" => "Иванов",
    "name" => "Иван",
    "patronymic" => "Иванович",
    "birth_date" => "15.05.1985",
    "position" => "Учитель математики",
    "category" => "Высшая",
    "education_level" => "Высшее (магистратура)",
    "university" => "МГУ им. М.В. Ломоносова",
    "qualification" => "Математик, преподаватель",
    "specialization" => "Математика и информатика",
    "experience_in_institution" => "5 лет",
    "total_experience" => "12 лет",
    "email" => "ivanov_i@example.com"
];

// Выводим массив в браузер
echo "<pre>";
print_r($teacher);
echo "</pre>";
?>
</body>
</html>