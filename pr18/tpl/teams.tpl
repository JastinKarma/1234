<div class="card">
    <img src="<?= htmlspecialchars($item['path']) ?>" alt="<?= htmlspecialchars($item['name']) ?>">
    <div class="card_text">
        <h3><?= htmlspecialchars($item['name']) ?></h3>
        <p>Страна: <b><?= htmlspecialchars($item['country']) ?></b></p>
        <p>Год основания: <b><?= htmlspecialchars($item['date']) ?></b></p>
        <p>Стиль группы: <b><?= htmlspecialchars($item['style']) ?></b></p>
        <span class="td_info">подробнее...</span>
    </div>
</div>