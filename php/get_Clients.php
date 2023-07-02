<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получение списка клиентов
$sql = "SELECT * FROM `clients`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Имя</th><th>Бюджет</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_clients'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['budget'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Нет доступных клиентов.";
}

$conn->close();
?>
