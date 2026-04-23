<!DOCTYPE html>
<html lang="ru">
<head><?php include __DIR__ . '/../inc/head.php'; ?></head>
<body>
    <header><div class="content"><?php include __DIR__ . '/../inc/header.php'; ?></div></header>
    <main class="main">
        <div class="content">
            <h1>📞 Контакты</h1>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <div class="contact-card">
                    <div class="contact-icon" style="font-size: 3rem;">📧</div>
                    <h3>Email</h3>
                    <p><a href="mailto:developer@mail.ru">developer@mail.ru</a></p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon" style="font-size: 3rem;">📱</div>
                    <h3>Телефон</h3>
                    <p>+7 (666) 888-77-77</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon" style="font-size: 3rem;">💬</div>
                    <h3>Telegram</h3>
                    <p><a href="https://t.me/proger">@proger</a></p>
                </div>
            </div>
        </div>
    </main>
    <footer><div class="content"><?php include __DIR__ . '/../inc/footer.php'; ?></div></footer>
</body>
</html>