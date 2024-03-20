<?php include 'header.php'; ?>

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

<form method="POST" action="index.php"  style="display: flex; flex-direction: column; align-items: center;">
    <label for="firstname" style="width: 300px; font-size: 18px;">Имя </label>
    <input name="firstname" type="text"  style="width: 300px; font-size: 18px;" required><br>

    <label for="lastname" style="width: 300px; font-size: 18px;">Фамилия </label>
    <input name="lastname" type="text"  style="width: 300px; font-size: 18px;" required><br>

    <label for="surname" style="width: 300px; font-size: 18px;">Отчество </label>
    <input name="surname" type="text"  style="width: 300px; font-size: 18px;" required><br>

    <label for="Table_id" style="width: 300px; font-size: 18px;">Табельный номер </label>
    <input name="Table_id" type="text"  style="width: 300px; font-size: 18px;" required><br>

    <input type="submit" value="Отправить"/>
</form>

<form method="POST" action="UpdateOutPutBD.php" style="display: flex; flex-direction: column; align-items: center;">
    <input type="submit" value="Открыть базу данных" style="margin:300px"/>
</form>

</body>
</html>

<?php include 'footer.php'; ?>
<?php
