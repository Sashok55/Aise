<?php
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Изменение статуса
if (isset($_POST['id_status']) && isset($_POST['new_name'])) {
    $id = $_POST['id_status'];
    $newName = $_POST['new_name'];

    $sql = "UPDATE status SET name='$newName' WHERE id_status='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Статус успешно изменен.";
    } else {
        echo "Ошибка при изменении статуса: " . $conn->error;
    }
}

$conn->close();
