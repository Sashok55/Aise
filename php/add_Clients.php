<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Добавление клиента
if (isset($_POST['name']) && isset($_POST['budget'])) {
    $name = $_POST['name'];
    $budget = $_POST['budget'];

    $sql = "INSERT INTO clients (name, budget) VALUES ('$name', '$budget')";

    if ($conn->query($sql) === TRUE) {
        echo "Клиент успешно добавлен.";
    } else {
        echo "Ошибка при добавлении клиента: " . $conn->error;
    }
}

$conn->close();
?>
