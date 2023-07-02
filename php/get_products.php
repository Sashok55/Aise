<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получение списка продуктов
$sql = "SELECT * FROM `product`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Название</th><th>Цена</th><th>Описание</th><th>Изображение</th><th>district_id</th><th>type_id</th><th>agent_id</th><th>status_id</th><th>rooms_id</th><th>area</th><th>sale_date</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_product'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['img'] . "</td>";
        echo "<td>" . $row['district_id'] . "</td>";
        echo "<td>" . $row['type_id'] . "</td>";
        echo "<td>" . $row['agent_id'] . "</td>";
        echo "<td>" . $row['status_id'] . "</td>";
        echo "<td>" . $row['rooms_id'] . "</td>";
        echo "<td>" . $row['area'] . "</td>";
        echo "<td>" . $row['sale_date'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Нет доступных продуктов.";
}

$conn->close();
?>
