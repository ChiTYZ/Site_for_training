<?php

?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <script
                src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>
        <script>
            $(document).ready(function(){
                setInterval(function (){
                    $('#dynamic-content').load('test.php');
                }, 1000);
            });
        </script>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <div id="dynamic-content"> </div>
    </body>
    </html>
