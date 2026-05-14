<?php
include 'bd.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = sprintf(
        "INSERT INTO `users` (`id_user`, `name`, `login`, `email`, `password`) VALUES (NULL, '%s', '%s', '%s', '%s')",
        $connect->real_escape_string($_POST['username']),
        $connect->real_escape_string($_POST['login']),
        $connect->real_escape_string($_POST['email']),
        $connect->real_escape_string($_POST['password'])
    );
    $result = $connect->query($sql);
    if ($result) { echo "<script>window.location.replace(window.location.pathname);</script>"; }
    $connect->close(); exit;
}

include 'header.php';
?>

<style>
/* index.php — Стиль Neo-Glow с Чёткой Сакурой на фоне */

body {
    background-color: #0D1A2F !important;
    /* Подключаем новый файл sakura.jpg */
    background-image: 
        linear-gradient(rgba(13, 26, 47, 0.45), rgba(80, 10, 31, 0.5)), 
        url('sakura.jpg') !important;
    
    /* Масштабирование без потери четкости */
    background-size: 100% 100% !important;
    background-position: top center !important;
    background-repeat: no-repeat !important;
    background-attachment: fixed !important;
    
    /* Отключаем размытие текстур для Firefox */
    image-rendering: -moz-crisp-edges !important;
    image-rendering: crisp-edges !important;
    image-rendering: -webkit-optimize-contrast !important;
}

.registration-section {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    min-height: 80vh;
    padding: 40px 20px 40px 10%;
}

/* Стеклянная кибер-карточка */
.form-card {
    background: rgba(23, 54, 79, 0.6) !important;
    backdrop-filter: blur(20px) !important;
    -webkit-backdrop-filter: blur(20px) !important;
    max-width: 450px;
    width: 100%;
    border-radius: 24px !important;
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5) !important;
    border: 1px solid rgba(9, 216, 199, 0.3) !important;
    overflow: hidden;
}

.form-header {
    background: rgba(13, 26, 47, 0.5) !important;
    padding: 40px 30px 20px 30px !important;
    text-align: center;
    border-bottom: 1px solid rgba(9, 216, 199, 0.1);
}

.form-header h2 {
    font-size: 28px !important;
    font-weight: 800 !important;
    letter-spacing: 1px !important;
    color: #09D8C7 !important;
    text-transform: uppercase !important;
    margin-bottom: 6px !important;
}

.form-header p {
    font-size: 13px !important;
    color: #ffffff !important;
    opacity: 0.6;
}

.form-body {
    padding: 20px 40px 40px 40px !important;
}

.input-group {
    margin-bottom: 24px !important;
    display: flex;
    flex-direction: column;
}

.input-group label {
    font-size: 12px !important;
    font-weight: 700 !important;
    color: #09D8C7 !important;
    text-transform: uppercase !important;
    letter-spacing: 1.5px !important;
    margin-bottom: 8px !important;
}

/* Поля ввода */
.input-field {
    width: 100% !important;
    padding: 14px 18px !important;
    font-size: 15px !important;
    border: 1px solid rgba(9, 216, 199, 0.2) !important;
    background-color: #0D1A2F !important;
    border-radius: 12px !important;
    color: #ffffff !important;
    outline: none !important;
    transition: all 0.3s ease !important;
}

/* Сброс автозаполнения браузера */
.input-field:-webkit-autofill,
.input-field:-webkit-autofill:hover, 
.input-field:-webkit-autofill:focus {
    -webkit-text-fill-color: #ffffff !important;
    -webkit-box-shadow: 0 0 0px 1000px #17364F inset !important;
}

.input-field:focus {
    border-color: #09D8C7 !important;
    box-shadow: 0 0 15px rgba(9, 216, 199, 0.4) !important;
}

.input-field::placeholder {
    color: rgba(255, 255, 255, 0.3) !important;
}

/* Неоновая кнопка */
.btn-submit {
    background: #09D8C7 !important;
    color: #0D1A2F !important;
    width: 100% !important;
    padding: 16px !important;
    border: none !important;
    border-radius: 12px !important;
    font-size: 14px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 2px !important;
    cursor: pointer !important;
    box-shadow: 0 4px 15px rgba(9, 216, 199, 0.3) !important;
    transition: all 0.3s ease !important;
    margin-top: 10px !important;
}

.btn-submit:hover {
    background: #ffffff !important;
    color: #0D1A2F !important;
    box-shadow: 0 0 25px rgba(9, 216, 199, 0.8) !important;
    transform: translateY(-2px) !important;
}
</style>


<section class="registration-section">
    <!-- Блок формы (теперь один на странице, картинка ушла на задний план) -->
    <div class="form-card">
        <div class="form-header">
            <h2>Регистрация</h2>
            <p>Пример записи данных в БД</p>
        </div>
        
        <form action="" method="post" class="form-body">
            <div class="input-group">
                <label for="regName">Имя</label>
                <input type="text" class="input-field" id="regName" name="username" placeholder="Введите имя" required>
            </div>
            
            <div class="input-group">
                <label for="regLogin">Логин</label>
                <input type="text" class="input-field" id="regLogin" name="login" placeholder="Придумайте уникальный логин" required>
            </div>
            
            <div class="input-group">
                <label for="regEmail">Email</label>
                <input type="email" class="input-field" id="regEmail" name="email" placeholder="example@mail.com" required>
            </div>
            
            <div class="input-group">
                <label for="regPassword">Пароль</label>
                <input type="password" class="input-field" id="regPassword" name="password" placeholder="••••••••" required>
            </div>
            
            <button type="submit" class="btn-submit">
                Зарегистрироваться
            </button>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>
