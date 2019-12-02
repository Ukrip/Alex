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
        include("showPredmet.php")    
    ?>

    <form action="insertPredmet.php" method="post">
        <label>Назва предмету</label><input name="name" type="text"><br>
        <label>Кількість годин</label><input name="number_hour" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
