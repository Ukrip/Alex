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
        include("showGroupa.php")    
    ?>

    <form action="insertGroupa.php" method="post">
        <label>Назва групи</label><input name="group_name" type="text"><br>
        <label>Куратор</label><input name="" type="text"><br>
        <label>ID старости</label><input name="" type="text"><br>
        <label>Код спеціальності</label><input name="" type="text"><br>
        <label>ID предмету</label><input name="" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
