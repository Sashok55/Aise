<?php
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Изменение пользователя
if (isset($_POST['id_users']) && isset($_POST['new_login']) && isset($_POST['new_email']) && isset($_POST['new_password']) && isset($_POST['new_is_admin']) && isset($_POST['new_verification_code'])) {
    $id = $_POST['id_users'];
    $newLogin = $_POST['new_login'];
    $newEmail = $_POST['new_email'];
    $newPassword = $_POST['new_password'];
    $newIsAdmin = $_POST['new_is_admin'];
    $newVerificationCode = $_POST['new_verification_code'];

    $sql = "UPDATE users SET login='$newLogin', email='$newEmail', password='$newPassword', is_admin='$newIsAdmin', verification_code='$newVerificationCode' WHERE id_users='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Пользователь успешно изменен.";
    } else {
        echo "Ошибка при изменении пользователя: " . $conn->error;
    }
}

$conn->close();
