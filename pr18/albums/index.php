<?php
$albums = [
    ['path' => '/pr18/assets/albums/Back_in_Black.svg', 'title' => 'Back in Black', 'artist' => 'AC/DC', 'year' => '1980', 'country' => 'США'],
    ['path' => '/pr18/assets/albums/highway-to-hell.jpg', 'title' => 'Highway to Hell', 'artist' => 'AC/DC', 'year' => '1979', 'country' => 'Австралия'],
    ['path' => '/pr18/assets/albums/the-dark-side-of-the-moon.jpg', 'title' => 'The Dark Side of the Moon', 'artist' => 'Pink Floyd', 'year' => '1973', 'country' => 'Великобритания'],
    ['path' => '/pr18/assets/albums/abbey-road.jpg', 'title' => 'Abbey Road', 'artist' => 'The Beatles', 'year' => '1969', 'country' => 'Великобритания'],
];
?>
<!DOCTYPE html>
<html lang="ru">
<head><?php include __DIR__ . '/../inc/head.php'; ?></head>
<body>
    <header><div class="content"><?php include __DIR__ . '/../inc/header.php'; ?></div></header>
    <main class="main">
        <div class="content">
            <h1>💿 Альбомы</h1>
            <div class="albums-grid">
                <?php foreach ($albums as $album): ?>
                <div class="album-card">
                    <img src="<?= htmlspecialchars($album['path']) ?>" alt="<?= htmlspecialchars($album['title']) ?>">
                    <div class="album-info">
                        <h3><?= htmlspecialchars($album['title']) ?></h3>
                        <p><?= htmlspecialchars($album['artist']) ?> • <?= htmlspecialchars($album['year']) ?></p>
                        <p>📍 <?= htmlspecialchars($album['country']) ?></p>
                        <span class="td_info">🎧 слушать →</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <footer><div class="content"><?php include __DIR__ . '/../inc/footer.php'; ?></div></footer>
</body>
</html>