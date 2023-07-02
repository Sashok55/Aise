<?php
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Изменение клиента
if (isset($_POST['id_clients']) && isset($_POST['new_name']) && isset($_POST['new_budget'])) {
    $id = $_POST['id_clients'];
    $newName = $_POST['new_name'];
    $newBudget = $_POST['new_budget'];

    $sql = "UPDATE clients SET name='$newName', budget='$newBudget' WHERE id_clients='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Клиент успешно изменен.";
    } else {
        echo "Ошибка при изменении клиента: " . $conn->error;
    }
}

$conn->close();
