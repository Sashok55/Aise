<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Удаление статуса
if (isset($_POST['id_status'])) {
    $id = $_POST['id_status'];

    $sql = "DELETE FROM status WHERE id_status='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Статус успешно удален.";
    } else {
        echo "Ошибка при удалении статуса: " . $conn->error;
    }
}

$conn->close();
?>
