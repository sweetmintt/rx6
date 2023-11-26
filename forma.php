<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Проверка заполнения обязательных полей
    if(empty($name) || empty($email) || empty($message)) {
        $error = "Пожалуйста, заполните все обязательные поля.";
    } else {
        // Отправка письма
        $to = "your-email@example.com";
        $subject = "Новое сообщение с сайта";
        $headers = "From: $name <$email>";
        $body = "Имя: $name\nEmail: $email\n\n$message";

        if(mail($to, $subject, $body, $headers)) {
            $success = "Сообщение успешно отправлено!";
        } else {
            $error = "Произошла ошибка при отправке сообщения.";
        }
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
    </ul>
</nav>
</header>

<main>
<h1>Свяжитесь с нами</h1>

<?php if(isset($error)) : ?>
<p class="error"><?php echo $error; ?></p>
<?php endif; ?>

<?php if(isset($success)) : ?>
<p class="success"><?php echo $success; ?></p>
<?php else : ?>
<form action="" method="post">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="message">Сообщение:</label>
    <textarea id="message" name="message" required></textarea>
    <button type="submit" name="submit">Отправить</button>
</form>
<?php endif; ?>
</main>

<footer>
<p>Контактная информация книжного магазина</p>
<p>Телефон: +7 123 456 789</p>
<p>Email: info@bookstore.com</p>
<p>Адрес: г. Москва, ул. Примерная, 123</p>
<p>© 2023 Все права защищены</p>
</footer>

</body>
</html>
