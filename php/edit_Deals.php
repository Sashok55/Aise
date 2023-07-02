<?php
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Изменение сделки
if (isset($_POST['id_deals']) && isset($_POST['new_home_id']) && isset($_POST['new_client_id']) && isset($_POST['new_agent_id']) && isset($_POST['new_deal_amount']) && isset($_POST['new_deal_date'])) {
    $id = $_POST['id_deals'];
    $newHomeId = $_POST['new_home_id'];
    $newClientId = $_POST['new_client_id'];
    $newAgentId = $_POST['new_agent_id'];
    $newDealAmount = $_POST['new_deal_amount'];
    $newDealDate = $_POST['new_deal_date'];

    $sql = "UPDATE deals SET home_id='$newHomeId', client_id='$newClientId', agent_id='$newAgentId', deal_amount='$newDealAmount', deal_date='$newDealDate' WHERE id_deals='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Сделка успешно изменена.";
    } else {
        echo "Ошибка при изменении сделки: " . $conn->error;
    }
}

$conn->close();
