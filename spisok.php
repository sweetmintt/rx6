<?php
$products = [
    ['book1.jpg', '451 градус по Фаренгейту', 500],
    ['book2.jpg', 'Вино из одуванчиков', 500],
    ['book3.jpg', 'Вельд', 300],
    ['book4.jpeg', 'И грянул гром', 300]
];
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
<h1>Список покупок</h1>

<table>
    <tr>
        <th>Изображение</th>
        <th>Название</th>
        <th>Цена</th>
    </tr>
    <?php foreach($products as $product) : ?>
    <tr>
        <td><img src="<?php echo $product[0]; ?>" height="100"></td>
        <td><?php echo $product[1]; ?></td>
        <td><?php echo $product[2]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
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
