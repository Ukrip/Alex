<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Speciality</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Speciality</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'oleinik');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM speciality')) {

        printf("Список фото: <br><br>");
        printf("<table><th>Код спеціальності</th><th>Назва спеціальності</th></tr>"); 
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['code'], $row['name_s']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertSpecialityForm.php">Вставити рядок</a><br></li>
		<li><a href="updateSpecialityForm.php">Редагувати рядок</a><br></li>
        <li><a href="deleteSpecialityForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
