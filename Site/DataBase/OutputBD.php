<?php
/*header('refresh: 1');*/
// Вывод базы данных на сайт
// Подключение к MySQL
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "MainDataPolymerization";

// Создание подключения и исключения
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

    $sql = "SELECT * FROM maindata";
    $result = $conn->query($sql);
    echo "<table><tr><th>ID</th><th>Имя</th><th>Фамилия</th><th>Отчество</th><th>Табельный номер</th></tr>";
    while($row = $result->fetch()){
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["firstname"] . "</td>";
        echo "<td>" . $row["lastname"] . "</td>";
        echo "<td>" . $row["surname"] . "</td>";
        echo "<td>" . $row["table_id"] . "</td>";
        echo "</tr>";


    }
    echo "</table>";
    $timedate=time() +5*60*60;
    echo "Текущее время: " . date('H:i:s',$timedate);
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>

</div>
</body>
</html>
