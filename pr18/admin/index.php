<?php
$stats = ['teams' => 12, 'albums' => 45, 'tracks' => 328, 'users' => 1547];
?>
<!DOCTYPE html>
<html lang="ru">
<head><?php include __DIR__ . '/../inc/head.php'; ?></head>
<body>
    <header><div class="content"><?php include __DIR__ . '/../inc/header.php'; ?></div></header>
    <main class="main">
        <div class="content">
            <h1>🛡️ Консоль управления</h1>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px;">
                <?php foreach ($stats as $key => $val): ?>
                <div class="stat-card">
                    <div class="stat-number"><?= $val ?></div>
                    <div><?= ucfirst($key) ?></div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="admin-panel">
                <h2>📋 Управление контентом</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px; margin-top: 20px;">
                    <div class="admin-btn">➕ Добавить</div>
                    <div class="admin-btn">✏️ Редактировать</div>
                    <div class="admin-btn">🗑️ Удалить</div>
                    <div class="admin-btn">⚙️ Настройки</div>
                </div>
            </div>
        </div>
    </main>
    <footer><div class="content"><?php include __DIR__ . '/../inc/footer.php'; ?></div></footer>
</body>
</html>