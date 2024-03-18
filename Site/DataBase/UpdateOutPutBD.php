<!doctype html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            setInterval(function(){
                $('#dynamic-content').load('OutputBD.php'); // Загружаем содержимое страницы update.php в элемент с идентификатором dynamic-content
            }, 1000); // Обновление каждую секунду
        });
    </script>
    <title>123</title>
</head>
<body>
<div id="dynamic-content">
    <!-- Здесь будет динамически обновляемое содержимое -->
</div>
</body>
</html>


<?php

// Здесь ваш PHP-код для обработки запроса и обновления данных

// Пример: возвращаем текущее время как обновленные данные
/*$timedate=time() +5*60*60;
echo "Текущее время: " . date('H:i:s',$timedate);*/
?>