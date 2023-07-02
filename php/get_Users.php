<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получение списка пользователей
$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Логин</th><th>Email</th><th>Пароль</th><th>Админ</th><th>Код верификации</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_users'] . "</td>";
        echo "<td>" . $row['login'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['is_admin'] . "</td>";
        echo "<td>" . $row['verification_code'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Нет доступных пользователей.";
}

$conn->close();
?>
