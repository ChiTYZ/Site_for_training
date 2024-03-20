<?php
include 'header.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовый сайт</title>
</head>
<body>

    <!--<form method="POST" action="">

        <input name="firstname" type="text" placeholder="Имя"/>
        <input name="lastname" type="text" placeholder="Фамилия"/>
        <input name="surname" type="text" placeholder="Отчество"/>
        <input name="Table_id" type="text" placeholder="Табельный номер"/>

        <input type="submit" value="Отправить"/>
    </form>-->

    <br><br><br><br>
    <form action="Questions_1.php" style="text-align: center;">
        <button type="submit" style="font-size: 20px; padding: 10px 20px;">Перейти к текстовому заданию</button><br>
    </form>

    <br><br>
    <form action="beginsite.php" style="text-align: center;">
        <button type="submit" style="font-size: 20px; padding: 10px 20px;">Вернуться назад</button>
    </form>
</body>
</html>

<?php


global $result, $p1,$p2,$p3,$p4;

function RequestData($firstname,$lastname,$surname,$Table_id)
{
        if (isset($_POST['firstname']) && isset($_POST['lastname']) &&  isset($_POST['surname']) && isset($_POST['Table_id']))
        {
        echo "проверка иссет";
        // Переменные с формы
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $surname=$_POST['surname'];
            $Table_id=$_POST['Table_id'];

        }
}

// Подключение к MySQL
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "MainDataPolymerization";

// Создание подключения и исключения
try {
    // Подключение к БД
    $db = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

    // Установка кодировки
    $db->exec("SET NAMES UTF8");


    // Собираем данные для запроса
    if ($_SERVER["REQUEST_METHOD"]=="POST"){

        // получение данных из формы
        $p1=$_POST['firstname'];
        $p2=$_POST['lastname'];
        $p3=$_POST['surname'];
        $p4=$_POST['Table_id'];
        //
        RequestData($p1,$p2,$p3,$p4);

    }
    $data = array('firstname' =>$p1, 'lastname' =>$p2,'surname'=>$p3, 'Table_ID'=>$p4);
    echo "дата собрана";
    // Подготовить SQL и параметры привязк
    $stmt = $db->prepare("INSERT INTO MainData (firstname, lastname,surname, Table_id)
    VALUES (:firstname, :lastname,:surname, :Table_id)");
    echo "запись подготовлена";
    // Привязка параметров
    $stmt->bindParam(':firstname', $p1);
    $stmt->bindParam(':lastname', $p2);
    $stmt->bindParam(':surname', $p3);
    $stmt->bindParam(':Table_id', $p4);

    // Выполнить запрос
    /*$query->execute($data);*/
    $stmt->execute();

    echo "запись выполнена";
    $lastID=$db->lastInsertId(); // Получение ласт ID введеннного пользователем
    file_put_contents('lastID.txt',$lastID);
    //Запись в переменную что запрос отработал
    $result = true;

}
catch(PDOException $e)
{
    print "Ошибка!: " . $e->getMessage() . "<br/>";
}
    if ($result)
    {
        echo "Успех.";
    }

    $conn = null;
?>


>