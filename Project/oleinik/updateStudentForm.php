<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showStudent.php")    
    ?>

<form action="updateStudent.php" method="post">
        <label>ID</label><input name="id" type="text"><br>
        <label>Ім'я</label><input name="firstname" type="text"><br>
        <label>Прізвище</label><input name="lastname" type="text"><br>
        <label>День народження</label><input name="date_born" type="text"><br>
        <label>ID групи</label><input name="group_id" type="text"><br>
      <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>