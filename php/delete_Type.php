<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Удаление типа
if (isset($_POST['id_type'])) {
    $id = $_POST['id_type'];

    $sql = "DELETE FROM type WHERE id_type='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Тип успешно удален.";
    } else {
        echo "Ошибка при удалении типа: " . $conn->error;
    }
}

$conn->close();
?>
