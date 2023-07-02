<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Добавление района
if (isset($_POST['name'])) {
    $name = $_POST['name'];

    $sql = "INSERT INTO district (name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "Район успешно добавлен.";
    } else {
        echo "Ошибка при добавлении района: " . $conn->error;
    }
}

$conn->close();
?>
