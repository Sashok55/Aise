<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Удаление сделки
if (isset($_POST['id_deals'])) {
    $id = $_POST['id_deals'];

    $sql = "DELETE FROM deals WHERE id_deals='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Сделка успешно удалена.";
    } else {
        echo "Ошибка при удалении сделки: " . $conn->error;
    }
}

$conn->close();
?>
