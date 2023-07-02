<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Удаление пользователя
if (isset($_POST['id_users'])) {
    $id = $_POST['id_users'];

    $sql = "DELETE FROM users WHERE id_users='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Пользователь успешно удален.";
    } else {
        echo "Ошибка при удалении пользователя: " . $conn->error;
    }
}

$conn->close();
?>
