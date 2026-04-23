<div class="card-album">
    <img src="<?= htmlspecialchars($album['path']) ?>" alt="<?= htmlspecialchars($album['title']) ?>">
    <h4><?= htmlspecialchars($album['title']) ?></h4>
    <p><?= htmlspecialchars($album['artist']) ?> (<?= htmlspecialchars($album['year']) ?>)</p>
    <p>Страна: <?= htmlspecialchars($album['country']) ?></p>
</div>