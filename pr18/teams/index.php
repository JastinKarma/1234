<?php
$teams = [
    ['name' => 'AC/DC', 'country' => 'Австралия', 'date' => '1970', 'style' => 'Хард-рок', 'path' => '/pr18/assets/teams/acdc.jpg'],
    ['name' => 'Aerosmith', 'country' => 'США', 'date' => '1970', 'style' => 'Хард-рок', 'path' => '/pr18/assets/teams/aerosmith.jpg'],
    ['name' => 'Pink Floyd', 'country' => 'Великобритания', 'date' => '1965', 'style' => 'Психоделический рок', 'path' => '/pr18/assets/teams/pink_floyd.jpg'],
    ['name' => 'The Beatles', 'country' => 'Великобритания', 'date' => '1960', 'style' => 'Рок-н-ролл', 'path' => '/pr18/assets/teams/beatles.jpg']
];
?>
<!DOCTYPE html>
<html lang="ru">
<head><?php include __DIR__ . '/../inc/head.php'; ?></head>
<body>
    <header><div class="content"><?php include __DIR__ . '/../inc/header.php'; ?></div></header>
    <main class="main">
        <div class="content">
            <h1>🎸 Группы</h1>
            <div class="teams-list">
                <?php foreach ($teams as $item): ?>
                <div class="card">
                    <img src="<?= htmlspecialchars($item['path']) ?>" alt="<?= htmlspecialchars($item['name']) ?>">
                    <div class="card_text">
                        <h3><?= htmlspecialchars($item['name']) ?></h3>
                        <p>Страна: <b><?= htmlspecialchars($item['country']) ?></b></p>
                        <p>Год основания: <b><?= htmlspecialchars($item['date']) ?></b></p>
                        <p>Стиль: <b><?= htmlspecialchars($item['style']) ?></b></p>
                        <span class="td_info">подробнее →</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <footer><div class="content"><?php include __DIR__ . '/../inc/footer.php'; ?></div></footer>
</body>
</html>