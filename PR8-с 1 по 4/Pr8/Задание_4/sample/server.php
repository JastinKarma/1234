<?php
// Папка для сохранения файлов
$uploadDir = 'upload/';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES)) {
    
    // Перебираем все загруженные элементы
    foreach ($_FILES as $fileKey => $fileData) {
        
        // 1. ЕСЛИ НА ФОРМЕ ИСПОЛЬЗУЕТСЯ МАССИВ (name="images[]")
        if (is_array($fileData['name'])) {
            foreach ($fileData['name'] as $key => $name) {
                if (!empty($name)) {
                    // Получаем расширение оригинального файла (например, .jpg, .png)
                    $extension = pathinfo($name, PATHINFO_EXTENSION);
                    
                    // Генерируем новое уникальное имя: текущее время + случайное число
                    $newName = time() . '_' . rand(100, 999) . '.' . $extension;
                    
                    // Перемещаем файл в папку upload под новым именем
                    move_uploaded_file($fileData['tmp_name'][$key], $uploadDir . $newName);
                }
            }
        } 
        // 2. ЕСЛИ НА ФОРМЕ РАЗНЫЕ ИМЕНА (name="file1", name="file2"...)
        else {
            if (!empty($fileData['name'])) {
                // Получаем расширение оригинального файла
                $extension = pathinfo($fileData['name'], PATHINFO_EXTENSION);
                
                // Генерируем новое уникальное имя
                $newName = time() . '_' . rand(100, 999) . '.' . $extension;
                
                // Перемещаем файл
                move_uploaded_file($fileData['tmp_name'], $uploadDir . $newName);
            }
        }
    }
    echo "<p style='color: green;'>Все выбранные файлы успешно переименованы и загружены!</p>";
}
?>

<!-- HTML форма, которая поддерживает оба варианта имен из задания -->
<form action="" method="POST" enctype="multipart/form-data">
    <p>Выберите файлы для загрузки:</p>
    <input type="file" name="file1"><br><br>
    <input type="file" name="file2"><br><br>
    <input type="file" name="file3"><br><br>
    <button type="submit">Загрузить файлы</button>
</form>
