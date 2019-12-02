<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Student</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'oleinik');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM student')) {

        printf("Список користувачів: <br><br>");
        printf("<table><tr><th>ID</th><th>Ім'я</th><th>Прізвище</th><th>День народження</th><th>ID</th></tr>");
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['first_name'], $row['last_name'], $row['date_born'], $row['group_id']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertStudentForm.php">Вставити рядок</a><br></li>
		<li><a href="updateStudentForm.php">Редагувати рядок</a><br></li>
		<li><a href="deleteStudentForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>