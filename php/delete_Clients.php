<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Удаление клиента
if (isset($_POST['id_clients'])) {
    $id = $_POST['id_clients'];

    $sql = "DELETE FROM clients WHERE id_clients='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Клиент успешно удален.";
    } else {
        echo "Ошибка при удалении клиента: " . $conn->error;
    }
}

$conn->close();
?>
