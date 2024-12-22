<?php
include 'db.php';

// Получаем данные из запроса
$category = $_POST['category'];
$amount = $_POST['amount'];
$date = $_POST['date'];

// Проверяем, что все данные были отправлены
if (!empty($category) && !empty($amount) && !empty($date)) {
    // SQL запрос для вставки данных
    $sql = "INSERT INTO expenses (category, amount, date) VALUES (?, ?, ?)";

    // Подготовка запроса
    if ($stmt = $conn->prepare($sql)) {
        // Связываем параметры
        $stmt->bind_param("sds", $category, $amount, $date); // s - строка, d - число с плавающей точкой

        // Выполняем запрос
        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Расход добавлен"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Ошибка при добавлении расхода"]);
        }

        // Закрытие запроса
        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Ошибка подготовки запроса"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Все поля должны быть заполнены"]);
}

// Закрытие подключения
$conn->close();
?>
