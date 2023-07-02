<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Добавление комнаты
if (isset($_POST['name'])) {
    $name = $_POST['name'];

    $sql = "INSERT INTO rooms (name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "Комната успешно добавлена.";
    } else {
        echo "Ошибка при добавлении комнаты: " . $conn->error;
    }
}

$conn->close();
?>
