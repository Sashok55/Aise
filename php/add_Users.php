<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Добавление пользователя
if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['is_admin']) && isset($_POST['verification_code'])) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $isAdmin = $_POST['is_admin'];
    $verificationCode = $_POST['verification_code'];

    $sql = "INSERT INTO users (login, email, password, is_admin, verification_code) VALUES ('$login', '$email', '$password', '$isAdmin', '$verificationCode')";

    if ($conn->query($sql) === TRUE) {
        echo "Пользователь успешно добавлен.";
    } else {
        echo "Ошибка при добавлении пользователя: " . $conn->error;
    }
}

$conn->close();
?>
