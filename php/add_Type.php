<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Добавление типа
if (isset($_POST['name'])) {
    $name = $_POST['name'];

    $sql = "INSERT INTO type (name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "Тип успешно добавлен.";
    } else {
        echo "Ошибка при добавлении типа: " . $conn->error;
    }
}

$conn->close();
?>
