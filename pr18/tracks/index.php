<?php
$tracks = [
    ['id' => '1', 'name' => 'Back in the Saddle', 'album' => 'Rocks', 'artist' => 'Aerosmith', 'duration' => '4:40', 'note' => 'Хит'],
    ['id' => '2', 'name' => 'Last Child', 'album' => 'Rocks', 'artist' => 'Aerosmith', 'duration' => '3:27', 'note' => 'Популярный'],
    ['id' => '3', 'name' => 'Highway to Hell', 'album' => 'Highway to Hell', 'artist' => 'AC/DC', 'duration' => '3:28', 'note' => 'Классика'],
    ['id' => '4', 'name' => 'Hells Bells', 'album' => 'Back in Black', 'artist' => 'AC/DC', 'duration' => '5:12', 'note' => ''],
    ['id' => '5', 'name' => 'Comfortably Numb', 'album' => 'The Wall', 'artist' => 'Pink Floyd', 'duration' => '6:23', 'note' => 'Легенда'],
];
?>
<!DOCTYPE html>
<html lang="ru">
<head><?php include __DIR__ . '/../inc/head.php'; ?></head>
<body>
    <header><div class="content"><?php include __DIR__ . '/../inc/header.php'; ?></div></header>
    <main class="main">
        <div class="content">
            <h1>🎵 Треки</h1>
            <table class="tracks-table">
                <thead>
                    <tr><th>#</th><th>Название</th><th>Исполнитель</th><th>Альбом</th><th>Длительность</th><th>Примечание</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($tracks as $track): ?>
                    <tr>
                        <td><?= htmlspecialchars($track['id']) ?></td>
                        <td><?= htmlspecialchars($track['name']) ?><br><span class="td_info">▶ слушать</span></td>
                        <td><?= htmlspecialchars($track['artist']) ?></td>
                        <td><?= htmlspecialchars($track['album']) ?></td>
                        <td><?= htmlspecialchars($track['duration']) ?></td>
                        <td><?= htmlspecialchars($track['note'] ?: '—') ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer><div class="content"><?php include __DIR__ . '/../inc/footer.php'; ?></div></footer>
</body>
</html>