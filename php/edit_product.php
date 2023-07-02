<?php
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Изменение продукта
if (isset($_POST['id']) && isset($_POST['new_name']) && isset($_POST['new_price']) && isset($_POST['new_description']) && isset($_POST['new_img']) && isset($_POST['new_district_id']) && isset($_POST['new_type_id']) && isset($_POST['new_agent_id']) && isset($_POST['new_status_id']) && isset($_POST['new_rooms_id']) && isset($_POST['new_area']) && isset($_POST['new_sale_date'])) {
    $id = $_POST['id'];
    $newName = $_POST['new_name'];
    $newPrice = $_POST['new_price'];
    $newDescription = $_POST['new_description'];
    $newImg = $_POST['new_img'];
    $newDistrictId = $_POST['new_district_id'];
    $newTypeId = $_POST['new_type_id'];
    $newAgentId = $_POST['new_agent_id'];
    $newStatusId = $_POST['new_status_id'];
    $newRoomsId = $_POST['new_rooms_id'];
    $newArea = $_POST['new_area'];
    $newSaleDate = $_POST['new_sale_date'];

    $sql = "UPDATE Product SET name='$newName', price='$newPrice', description='$newDescription', img='$newImg', district_id='$newDistrictId', type_id='$newTypeId', agent_id='$newAgentId', status_id='$newStatusId', rooms_id='$newRoomsId', area='$newArea', sale_date='$newSaleDate' WHERE id_product='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Продукт успешно изменен.";
    } else {
        echo "Ошибка при изменении продукта: " . $conn->error;
    }
}

$conn->close();
?>
