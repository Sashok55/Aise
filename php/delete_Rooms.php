<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Удаление комнаты
if (isset($_POST['id_rooms'])) {
    $id = $_POST['id_rooms'];

    $sql = "DELETE FROM rooms WHERE id_rooms='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Комната успешно удалена.";
    } else {
        echo "Ошибка при удалении комнаты: " . $conn->error;
    }
}

$conn->close();
?>
