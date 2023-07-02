<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Добавление агента
if (isset($_POST['name']) && isset($_POST['contact_number']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $contactNumber = $_POST['contact_number'];
    $email = $_POST['email'];

    $sql = "INSERT INTO agents (name, contact_number, email) VALUES ('$name', '$contactNumber', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Агент успешно добавлен.";
    } else {
        echo "Ошибка при добавлении агента: " . $conn->error;
    }
}

$conn->close();
?>
