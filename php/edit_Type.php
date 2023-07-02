<?php
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Изменение типа
if (isset($_POST['id_type']) && isset($_POST['new_name'])) {
    $id = $_POST['id_type'];
    $newName = $_POST['new_name'];

    $sql = "UPDATE type SET name='$newName' WHERE id_type='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Тип успешно изменен.";
    } else {
        echo "Ошибка при изменении типа: " . $conn->error;
    }
}

$conn->close();
