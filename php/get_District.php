<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получение списка районов
$sql = "SELECT * FROM `district`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Название района</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_district'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Нет доступных районов.";
}

$conn->close();
?>
