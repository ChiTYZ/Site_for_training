<?php include 'header.php'; ?>

<div style="text-align: center;">
    <h2>Для прохождения тестирования заполните форму ниже</h2>
</div>
<br><br><br><br><br><br>

<form action="submit_data.php" method="post" style="display: flex; flex-direction: column; align-items: center;">
    <label for="lastname" style="width: 300px; font-size: 18px;">Фамилия</label>
    <input type="text" id="lastname" name="lastname" style="width: 300px; font-size: 18px;" required><br>

    <label for="firstname" style="width: 300px; font-size: 18px;">Имя</label>
    <input type="text" id="firstname" name="firstname" style="width: 300px; font-size: 18px;" required><br>

    <label for="middlename" style="width: 300px; font-size: 18px;">Отчество</label>
    <input type="text" id="middlename" name="middlename" style="width: 300px; font-size: 18px;" required><br>

    <label for="position" style="width: 300px; font-size: 18px;">Должность</label>
    <input type="text" id="position" name="position" style="width: 300px; font-size: 18px;" required><br>

</form>


<form action="Questions_1.php" style="text-align: center;">
    <button type="submit" style="font-size: 20px; padding: 10px 20px;">Перейти к текстовому заданию</button>
</form>


<?php include 'footer.php'; ?>
