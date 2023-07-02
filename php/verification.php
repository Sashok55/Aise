<?php
session_start();
include("./db_connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $verificationCode = $_POST['verification_code'];

    // Получение данных пользователя из сессии
    $login = $_SESSION['user']['nick'];

    // Проверка соответствия введенного кода подтверждения
    $query = mysqli_query($db, "SELECT * FROM users WHERE login='{$login}'");
    $row = mysqli_fetch_assoc($query);
    if ($row['verification_code'] == $verificationCode) {
        // Код подтверждения верный
        // Можно выполнить необходимые действия, например, установить флаг подтверждения в базе данных

        // Редирект на страницу успешного подтверждения
        header("Location: ../index/Aise.php");
        exit();
    } else {
        // Код подтверждения неверный
        $error = "Введен неверный код подтверждения. Попробуйте еще раз.";
    }
}
?>
<?php
include("../php/db_connect.php");

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
    <title>Aise</title>    
</head>
<body>
    <header>
        <nav>
            <ul>
                <div>
                    <a href="../index/Aise.php">Главная</a>
                    <a href="../index/Aise-katalog.php">Каталог</a>
                    <a href="../index/Aise-kontakt.php">Контакты</a>
                </div>
                <li><a href="Aise.php"><img src="../img/logo-Aise.svg"></a></li>

                 <button class="modal-toggle"><img src="../img/profile.svg"></button>
            </ul>
        </nav>
    </header>


    <div class="container">
        <div class="kod">
            <h1>Подтверждение почты</h1>
            
            <?php if (isset($error)): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
        
            <form method="POST" action="">
                <label for="verification_code">Введите код подтверждения:</label>
                <input type="text" id="verification_code" name="verification_code" required>
                <input type="submit" value="Подтвердить">
            </form>

        </div>

    </div>
</body>
</html>
