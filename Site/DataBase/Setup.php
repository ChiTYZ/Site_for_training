
<?php
global$sql;

// Подключение к MySQL
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "MainDataPolymerization";

// Создание подключения и исключения
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Успешное подключение";

    //Создание базы данных MainDataPolymerization
    if ($dbname)
        echo "База данных уже создана";
    else
    {
        $db = "CREATE DATABASE MainDataPolymerization";
        $conn->exec($db);
        echo "База данных  создана";
    }

    // Создание таблицы с 4 столбцами
    $sql = "  CREATE TABLE MainData (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    surname VARCHAR(30) NOT NULL,
    table_id VARCHAR(10) NOT NULL
    );";

    // Исполнение запросов
    $conn->exec($sql);
    echo "Таблица создана2";



    // Получить ID последнего
   /* $last_id=$conn->lastInsertId();
    echo "Последний введенный идентификатор : ".$last_id;*/



}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


><?php
