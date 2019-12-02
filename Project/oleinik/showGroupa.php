<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Groupa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Groupa</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'oleinik');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM groupa')) { 

        printf("Список груп: <br><br>");
        printf("<table><tr><th>ID</th><th>Назва групи</th><th>Куратор</th><th>ID старости</th><th>Спеціальність</th><th>ID предмету</th></tr>");
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['group_name'], $row['kurator'], $row['starosta_id'], $row['speciality'], $row['predmet_id']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertGroupaForm.php">Вставити рядок</a><br></li>
		<li><a href="updateGroupaForm.php">Редагувати рядок</a><br></li>
        <li><a href="deleteGroupaForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
