<!DOCTYPE html>
<html>
<head>
    <style>
        #imageContainer {
            position: relative;

            display: inline-block;
        }
        #numberInput {
            position: absolute;
            top: 50px;
            left: 50px;
        }
    </style>
</head>
<body>
<div id="imageContainer">
    <img src="images/3.png" alt="Your Image">
    <form action="InputBox.php" method="post">
        <input type="text" id="numberInput" name="numberInput">
        <button type="submit">Save</button>
    </form>
</div>
</body>
</html>

<?php
$lastID=file_get_contents('lastID.txt');

// Подключение к базе данных с использованием PDO
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "MainDataPolymerization";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Устанавливаем режим обработки ошибок PDO на исключения
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   /* $sql = "ALTER TABLE MainData ADD COLUMN (Inputbox1 FLOAT) ";

        // Исполнение запроса
        $conn->exec($sql);*/

    // Подготавливаем SQL запрос для вставки данных
    $stmt = $conn->prepare("UPDATE MainData SET Inputbox1 = :number WHERE id=:userID");
    $stmt->bindParam(':userID',$lastID);

    // Привязываем параметр к значениям из формы и выполняем запрос
    $stmt->bindParam(':number', $_POST['numberInput']);
    $stmt->execute();

    echo "Number successfully saved to the database";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null; // Закрываем соединение с базой данных
?>