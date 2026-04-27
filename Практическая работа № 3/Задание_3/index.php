<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// 1. Создаем ассоциативный массив с данными
$user = [
    'surname'  => 'Лаврецкая',
    'name'     => 'Елизавета',
    'patronymic' => 'Викторовна',
    'login'    => 'elizaveta',
    'password' => '12345',
    'email'    => 'lovel@mail.ru'
];

// 2. Выводим данные в формате, указанном на образце
echo "<h2>Вы успешно зарегистрированы на сайте</h2>";

// Вывод ФИО жирным шрифтом
echo "<p><b>" . $user['surname'] . " " . $user['name'] . " " . $user['patronymic'] . "</b></p>";

// Вывод остальных данных
echo "<p>Логин: " . $user['login'] . "</p>";
echo "<p>E-mail: " . $user['email'] . "</p>";
echo "<p>Пароль: " . $user['password'] . "</p>";
?>

</body>
</html>