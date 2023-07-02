<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Добавление сделки
if (isset($_POST['home_id']) && isset($_POST['client_id']) && isset($_POST['agent_id']) && isset($_POST['deal_amount']) && isset($_POST['deal_date'])) {
    $homeId = $_POST['home_id'];
    $clientId = $_POST['client_id'];
    $agentId = $_POST['agent_id'];
    $dealAmount = $_POST['deal_amount'];
    $dealDate = $_POST['deal_date'];

    $sql = "INSERT INTO deals (home_id, client_id, agent_id, deal_amount, deal_date) VALUES ('$homeId', '$clientId', '$agentId', '$dealAmount', '$dealDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Сделка успешно добавлена.";
    } else {
        echo "Ошибка при добавлении сделки: " . $conn->error;
    }
}

$conn->close();
?>
