<?php
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Изменение комнаты
if (isset($_POST['id_rooms']) && isset($_POST['new_name'])) {
    $id = $_POST['id_rooms'];
    $newName = $_POST['new_name'];

    $sql = "UPDATE rooms SET name='$newName' WHERE id_rooms='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Комната успешно изменена.";
    } else {
        echo "Ошибка при изменении комнаты: " . $conn->error;
    }
}

$conn->close();
