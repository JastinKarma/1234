<?php
// 1. ЛОГИЧЕСКАЯ ЧАСТЬ
$head = '
    <meta charset="utf-8">
    <title>Silence.net — Музыкальный сервис</title>
    <style>
        body { margin: 0; font-family: "Segoe UI", sans-serif; background-color: #121212; color: #ffffff; }
        .content { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        
        /* Шапка */
        header { background: #1a1a1a; padding: 20px 0; border-bottom: 1px solid #333; }
        header .content { display: flex; justify-content: space-between; align-items: center; }
        .logo { display: flex; align-items: center; gap: 10px; text-decoration: none; color: #4ade80; }
        nav a { color: #fff; text-decoration: none; margin-left: 15px; font-size: 14px; transition: 0.3s; }
        nav a:hover { color: #4ade80; }

        /* Главный блок */
        .main { padding: 100px 0; text-align: center; }
        .hero h1 { font-size: 72px; margin: 0; letter-spacing: 5px; color: #4ade80; text-shadow: 0 0 20px rgba(74, 222, 128, 0.3); }
        .quote { font-style: italic; color: #888; margin: 20px 0; font-size: 18px; }
        .hero h2 { font-weight: 300; margin-bottom: 40px; color: #ccc; }
        
        .btn { 
            background: #4ade80; color: #000; padding: 15px 40px; 
            border-radius: 50px; text-decoration: none; font-weight: bold; 
            display: inline-block; transition: 0.4s; box-shadow: 0 4px 15px rgba(74, 222, 128, 0.4);
        }
        .btn:hover { transform: translateY(-3px); box-shadow: 0 6px 20px rgba(74, 222, 128, 0.6); }

        /* Футер */
        footer { background: #1a1a1a; padding: 60px 0; margin-top: 50px; border-top: 1px solid #333; }
        .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 40px; }
        .footer-grid h4 { color: #4ade80; margin-bottom: 20px; font-size: 14px; letter-spacing: 1px; }
        .footer-grid a { display: block; color: #aaa; text-decoration: none; margin-bottom: 10px; font-size: 14px; }
        .footer-grid a:hover { color: #fff; }
    </style>
';

$header = '
    <a href="index.php" class="logo">
        <img src="assets/logo.png" alt="logo" style="height: 40px; filter: brightness(0) invert(1) sepia(1) saturate(5) hue-rotate(70deg);">
        <h3 style="margin:0">Музыкальный сервис</h3>
    </a>
    <nav>
        <a href="teams/index.php">Группы</a>
        <a href="albums/index.php">Альбомы</a>
        <a href="tracks/index.php">Треки</a>
        <a href="admin/index.php">Консоль</a>
    </nav>
';

$content = '
    <div class="hero">
        <h1>SILENCE.NET</h1>
        <p class="quote">«Музыка — это тишина, которая живёт между звуками»<br>(В.А. Моцарт)</p>
        <h2>Найди свою тишину</h2>
        <a href="teams/index.php" class="btn">Поиск в базе</a>
    </div>
';

$footer = '
    <div class="footer-grid">
        <div>
            <div class="logo">
                <img src="assets/logo.png" alt="logo" style="height: 30px; filter: brightness(0) invert(1);">
                <h3 style="margin:0; color:#fff">Музыкальный сервис</h3>
            </div>
            <p style="color:#666; font-size:12px; margin-top:15px">© 2024 Silence.net. Все права защищены.</p>
        </div>
        <div>
            <h4>КОМПАНИЯ</h4>
            <a href="about/index.php">О нас</a>
            <a href="contacts/index.php">Контакты</a>
        </div>
        <div>
            <h4>ПОЛЕЗНЫЕ ССЫЛКИ</h4>
            <a href="https://wikipedia.org" target="_blank">Справка</a>
            <a href="#">Политика конфиденциальности</a>
        </div>
    </div>
';
?>

<!-- 2. БЛОК ВЫВОДА -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php echo $head; ?>
</head>
<body>
    <header>
        <div class="content">
            <?php echo $header; ?>
        </div>
    </header>

    <div class="main">
        <div class="content">
            <?php echo $content; ?>
        </div>
    </div>

    <footer>
        <div class="content">
            <?php echo $footer; ?>
        </div>
    </footer>
</body>
</html>
