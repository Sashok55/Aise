<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получение списка сделок
$sql = "SELECT * FROM `deals`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Дом ID</th><th>Клиент ID</th><th>Агент ID</th><th>Сумма сделки</th><th>Дата сделки</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_deals'] . "</td>";
        echo "<td>" . $row['home_id'] . "</td>";
        echo "<td>" . $row['client_id'] . "</td>";
        echo "<td>" . $row['agent_id'] . "</td>";
        echo "<td>" . $row['deal_amount'] . "</td>";
        echo "<td>" . $row['deal_date'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Нет доступных сделок.";
}

$conn->close();
?>
