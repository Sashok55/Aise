<?php
// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "aise");

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Добавление продукта
if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description']) && isset($_POST['img']) && isset($_POST['district_id']) && isset($_POST['type_id']) && isset($_POST['agent_id']) && isset($_POST['status_id']) && isset($_POST['rooms_id']) && isset($_POST['area']) && isset($_POST['sale_date'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $img = $_POST['img'];
    $district_id = $_POST['district_id'];
    $type_id = $_POST['type_id'];
    $agent_id = $_POST['agent_id'];
    $status_id = $_POST['status_id'];
    $rooms_id = $_POST['rooms_id'];
    $area = $_POST['area'];

    $sql = "INSERT INTO Product (name, price, description, img, district_id, type_id, agent_id, status_id, rooms_id, area) VALUES ('$name', '$price', '$description', '$img', '$district_id', '$type_id', '$agent_id', '$status_id', '$rooms_id', '$area')";

    if ($conn->query($sql) === TRUE) {
        echo "Продукт успешно добавлен.";
    } else {
        echo "Ошибка при добавлении продукта: " . $conn->error;
    }
}

$conn->close();
?>
