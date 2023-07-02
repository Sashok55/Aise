<?php
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Изменение района
if (isset($_POST['id_district']) && isset($_POST['new_name'])) {
    $id = $_POST['id_district'];
    $newName = $_POST['new_name'];

    $sql = "UPDATE district SET name='$newName' WHERE id_district='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Район успешно изменен.";
    } else {
        echo "Ошибка при изменении района: " . $conn->error;
    }
}

$conn->close();
