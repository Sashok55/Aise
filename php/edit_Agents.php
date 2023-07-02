<?php
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Изменение агента
if (isset($_POST['id_agents']) && isset($_POST['new_name']) && isset($_POST['new_contact_number']) && isset($_POST['new_email'])) {
    $id = $_POST['id_agents'];
    $newName = $_POST['new_name'];
    $newContactNumber = $_POST['new_contact_number'];
    $newEmail = $_POST['new_email'];

    $sql = "UPDATE agents SET name='$newName', contact_number='$newContactNumber', email='$newEmail' WHERE id_agents='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Агент успешно изменен.";
    } else {
        echo "Ошибка при изменении агента: " . $conn->error;
    }
}

$conn->close();
