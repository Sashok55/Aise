<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../img/A.svg">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="../js/myCart.js"></script>
    <title>Aise</title>    
</head>

    <header>
        <nav>
            <ul>
                <div>
                    <a href="../index_login/Aise-login.php">Главная</a>
                    <a href="../index_login/Aise-katalog-login.php">Каталог</a>
                    <a href="../index_login/Aise-kontakt-login.php">Контакты</a>
                </div>
                <li><a href="Aise.php"><img src="../img/logo-Aise.svg"></a></li>
                <a href="../index_login/Aise-user-login.php"><img src="../img/profile.svg"></a>
                <form action="../php/logout.php" method="post">
                    <button type="submit">Logout</button>
                </form>
            </ul>
        </nav>
    </header>
    <body>
        <div class="favorit">
                <h1>Избранное</h1>
        </div>
    <?php
    if (!isset($_SESSION["cart"]) || empty($_SESSION["cart"])) {
        echo "        
            <div class='favorit'>
                <h2>Вы еще ничего не добавили</h2>
            </div>
        ";

    } else {
        // Вывод товаров в корзине
        foreach ($_SESSION["cart"] as $product) {
            echo "
            <div class='container'>
                <div class='favorit'>
                    <img src=\"{$product['img']}\" alt=\"{$product['name']}\">
                    <hr class='hr-2'>
                    <h2>{$product['name']}</h2>
                    <p>{$product['price']} млн. руб</p>
                    <button onclick=\"removeFromCart({$product['id']})\">Удалить</button>
                </div>
            </div>";
        }
    }
    ?>

    <script>
        function removeFromCart(productId) {
            // Отправка запроса на удаление товара из корзины
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Обновление страницы
                        location.reload();
                    } else {
                        console.error("Ошибка при удалении товара из корзины");
                    }
                }
            };
            xhr.open("POST", "../php/remove_from_cart.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("productId=" + productId);
        }
    </script>
</body>
<footer>
           <div>
               <div>
                   <h2>AISE</h2>
                   <a href="Aise.php">Главная</a>
                   <a href="Aise-katalog.php">Каталог</a>
                   <a href="Aise-kontakt.php">Контакты</a>
               </div>
               <a href="Aise.php"><img src="../img/logo-Aise-white.svg"></a>
               <div>
                   <a class="js-open-modal" data-modal="1" ><img src="../img/profile-white.svg"></a></li>
                   <p>8 (999) 989 12 32</p>
                   <p>aise@aise.ru</p>
                   <p>ежедневно с 10:00 до 20:00</p>
                   <p>© ЖК aise. 2023</p>
               </div>
           </div>
       </footer>
</html>
</body>
