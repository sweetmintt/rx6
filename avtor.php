<?php
session_start();

// Проверяем, отправлена ли форма авторизации
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Проверяем, соответствуют ли введенные данные заданным значениям
    if($username == 'admin' && $password == 'password'){
        // Если данные верны, устанавливаем сессию и перенаправляем на главную страницу
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit;
    }else{
        // Если данные не верны, отображаем ошибку
        $error = 'Неправильное имя пользователя или пароль!';
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Книжный магазин</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<header>
<img src="logo.jpg" alt="Логотип магазина">
<nav>
    <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="shop.php">Магазин</a></li>
        <li><a href="spisok.php">Список покупок</a></li>
        <li><a href="forma.php">Форма обратной связи</a></li>
        <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        <li><a href="logout.php">Выход</a></li>
        <?php else: ?>
        <li><a href="login.php">Вход</a></li>
        <?php endif; ?>
    </ul>
</nav>
</header>
<main>
<?php if(isset($error)): ?>
<p class="error"><?php echo $error; ?></p>
<?php endif; ?>

<?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
<?php else: ?>
<h1>Вход на сайт</h1>
<form action="" method="post">
    <label for="username">Имя пользователя:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit" name="login">Войти</button>
</form>
<?php endif; ?>
<main>
<footer>
<p>Контактная информация книжного магазина</p>
<p>Телефон: +7 123 456 789</p>
<p>Email: info@bookstore.com</p>
<p>Адрес: г. Москва, ул. Примерная, 123</p>
<p>© 2023 Все права защищены</p>
</footer>

</body>
</html>
