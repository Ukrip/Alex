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
        include("showSpeciality.php")    
    ?>

<form action="updateSpeciality.php" method="post">
        <label>Код спеціальності</label><input name="code" type="text"><br>
        <label>Нова назва</label><input name="name_s" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>