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
      <li><a href="avtor.php">Авторизация</a></li>
    </ul>
  </nav>
</header>
<body>
    <?php
        $productName = $_GET['name'];
        $productDetails = [
            '451 градус по Фаренгейту' => ['book1.jpg', 'Количество страниц - 256; Тип обложки - Мягкая обложка', 10],
            'Вино из одуванчиков' => ['book2.jpg', 'Количество страниц - 352; Тип обложки - Мягкая обложка', 20],
            'Вельд' => ['book3.jpg', 'Количество страниц - 180; Тип обложки - Твердая обложка', 30],
            'И грянул гром' => ['book4.jpg', 'Количество страниц - 200; Тип обложки - Твердая обложка', 30]
        ];
        $product = $productDetails[urldecode($productName)];
       
        echo '<h1>'.$productName.'</h1>';
        echo '<img src="'.$product[0].'" height="200"><br>';
        echo '<p>Описание: '.$product[1].'</p>';
        echo '<p>Количество в наличии: '.$product[2].'</p>';
    ?>
    
<footer>
  <p>Контактная информация книжного магазина</p>
  <p>Телефон: +7 123 456 789</p>
  <p>Email: info@bookstore.com</p>
  <p>Адрес: г. Москва, ул. Примерная, 123</p>
  <p>© 2023 Все права защищены</p>
</footer>

</body>
</html>
