<?php
include 'bd.php';
include 'header.php';

?>

<!-- Принудительный фикс фона для 1234gf.jpeg -->
<style>
    body, html {
    background-color: #0D1A2F !important;
    background-image: 
        linear-gradient(rgba(13, 26, 47, 0.45), rgba(80, 10, 31, 0.5)), 
        url('1234gf.jpg') !important;
    
    /* Исправление пикселей: картинка заполнит экран с сохранением своих пропорций */
    background-size: cover !important; 
    background-position: center center !important;
    background-repeat: no-repeat !important;
    background-attachment: fixed !important;

    /* Принудительное аппаратное сглаживание пикселей для Firefox */
    image-rendering: -webkit-optimize-contrast !important;
    image-rendering: auto !important;
}


   /* Делаем блоки прозрачными и полностью убираем размытие фона (blur) */
.sidebar-panel, aside, .stat-card, main .bg-white, main > div {
    background-color: rgba(13, 26, 47, 0.75) !important; /* Плотный темный цвет вместо размытия */
    backdrop-filter: none !important; /* НАМЕРТВО ОТКЛЮЧАЕТ РАЗМЫТИЕ КАРТИНКИ */
    -webkit-backdrop-filter: none !important;
    border: 1px solid rgba(9, 216, 199, 0.2) !important;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5) !important;
}

    /* Гарантируем, что весь текст будет ярко-белым и читаемым */
    h2, h3, .text-dark, .stat-card span, .fw-bold, .fw-semibold, .text-white, table tbody td {
        color: #ffffff !important;
    }
    
    main .text-muted, .text-muted {
        color: rgba(255, 255, 255, 0.7) !important;
    }
</style>

<?php
$users = [];
$sql = "SELECT `id_user`, `name`, `login`, `email` FROM `users` WHERE `id_user` > ? ORDER BY `id_user` DESC";

if ($stmt = $connect->prepare($sql)) {
    $min_id = 0;
    $stmt->bind_param("i", $min_id);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) { $users[] = $row; }
    $stmt->close();
}
$connect->close();
?>

<div class="container-fluid pe-md-4">
    <div class="row">
        <!-- ЛЕВАЯ ПАНЕЛЬ (Боковое меню) -->
        <aside class="col-12 col-md-3 col-lg-2 sidebar-panel py-4 px-3 mb-4 mb-md-0">
            <div class="sidebar-sticky">
                <div class="px-3 mb-4">
                    <span class="fs-7 text-uppercase tracking-wider fw-bold text-opacity-50 text-white">Навигация</span>
                </div>
                <ul class="nav flex-column gap-2">
                    <li class="nav-item">
                        <a class="nav-link sidebar-link px-3 py-2.5 rounded-3 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">
                            <svg width="16" height="16" class="me-2" fill="currentColor" viewBox="0 0 16 16"><path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
                            Регистрация
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sidebar-link px-3 py-2.5 rounded-3 <?php echo basename($_SERVER['PHP_SELF']) == 'admin.php' ? 'active' : ''; ?>" href="admin.php">
                            <svg width="16" height="16" class="me-2" fill="currentColor" viewBox="0 0 16 16"><path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z"/></svg>
                            Админ-панель
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- ПРАВАЯ ЧАСТЬ (Основной контент и аналитика) -->
        <main class="col-12 col-md-9 col-lg-10 py-4 px-md-4">
            
            <!-- БЛОКИ АНАЛИТИКИ (Добавлено от себя для красоты) -->
            <div class="row g-3 mb-4">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="stat-card p-4 rounded-4 shadow-sm bg-white border border-light">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="text-muted small text-uppercase fw-bold mb-1">Пользователи</h6>
                                <span class="fs-3 fw-bold text-dark"><?= count($users) ?></span>
                            </div>
                            <div class="stat-icon p-3 rounded-3" style="background-color: rgba(74, 127, 167, 0.1); color: #4A7FA7;">
                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16"><path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.48.114-1.685.811-2.596a5.5 5.5 0 0 0-.138-.02c-.742-.073-1.447-.184-2-.324C2.144 9.642 1 8.362 1 7c0-1.362 1.144-2.642 4.673-3.056 1.43-.168 3.1-.168 4.53 0C13.722 4.373 14.856 5.614 14.99 7c0 .121-.006.24-.017.358a6 6 0 0 1 1.002.39c.01-.247.015-.497.015-.748 0-2.138-1.89-3.987-5.59-4.38-1.833-.194-3.987-.194-5.82 0C.89 3.013 0 4.862 0 7c0 2.138.89 3.987 4.59 4.38.643.068 1.344.125 2.032.17.214.343.454.722.736 1.125z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="stat-card p-4 rounded-4 shadow-sm bg-white border border-light">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="text-muted small text-uppercase fw-bold mb-1">Статус Системы</h6>
                                <span class="fs-5 fw-bold text-success d-flex align-items-center gap-2 mt-2">
                                    <span class="pulse-indicator"></span> Стабилен
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- КАРТОЧКА С ТАБЛИЦЕЙ -->
            <div class="bg-white rounded-4 shadow-sm border p-4">
                <div class="mb-4 border-bottom pb-3">
                    <h3 class="fw-bold mb-1 text-dark fs-4">Список записей</h3>
                    <p class="text-muted small mb-0">Управление зарегистрированными аккаунтами в базе данных</p>
                </div>

                <div class="table-responsive rounded-3">
                    <table class="table table-custom align-middle mb-0">
                        <thead>
                            <tr class="text-uppercase fs-7 tracking-wider">
                                <th scope="col" class="py-3 ps-3" style="width: 10%;">ID</th>
                                <th scope="col" class="py-3" style="width: 25%;">Имя</th>
                                <th scope="col" class="py-3" style="width: 20%;">Логин</th>
                                <th scope="col" class="py-3" style="width: 25%;">Email</th>
                                <th scope="col" class="py-3 text-center pe-3" style="width: 20%;">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($users)): ?>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td class="ps-3 fw-bold" style="color: #4A7FA7;">#<?= htmlspecialchars($user['id_user']) ?></td>
                                        <td><div class="fw-semibold text-dark"><?= htmlspecialchars($user['name']) ?></div></td>
                                        <td><span class="badge custom-login-badge"><?= htmlspecialchars($user['login']) ?></span></td>
                                        <td class="text-secondary"><?= htmlspecialchars($user['email']) ?></td>
                                        <td class="text-center pe-3">
                                            <div class="d-flex gap-2 justify-content-center">
                                                <a href="edit.php?id=<?= $user['id_user'] ?>" class="btn btn-sm btn-action-edit rounded-3 px-3 fw-medium">Изменить</a>
                                                <a href="delete.php?id=<?= $user['id_user'] ?>" class="btn btn-sm btn-action-delete rounded-3 px-3 fw-medium" onclick="return confirm('Удалить?')">Удалить</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-5">База данных пуста</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<?php include 'footer.php'; ?>
