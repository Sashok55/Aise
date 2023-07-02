<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Удаление агента
if (isset($_POST['id_agents'])) {
    $id = $_POST['id_agents'];

    $sql = "DELETE FROM agents WHERE id_agents='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Агент успешно удален.";
    } else {
        echo "Ошибка при удалении агента: " . $conn->error;
    }
}

$conn->close();
?>
